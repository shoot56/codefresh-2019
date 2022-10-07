<div class="related-articles" style="width:30%;">
    @php
    $taxonomy = 'topics';
    $term = get_the_terms( $post->ID , array( $taxonomy) );
    $term_id = $term[0]->term_id;
    $term_name = $term[0]->name;
    $args = array(
    'post_type' => 'learning',
    'posts_per_page' => -1,
    'order' => 'DESC',
    'post__not_in' => array (get_the_ID()),
    'tax_query' => array(
    array(
    'taxonomy' => $taxonomy,
    'field' => 'term_id',
    'terms' => $term_id
    )
    )
    );
    $related_query = new WP_Query( $args );
    @endphp
    @php if($related_query->have_posts()) { @endphp
    <h2>Related {{ $term_name }} articles </h2>

    <ul>

        @php while($related_query->have_posts()) {
        $related_query->the_post(); @endphp
        <li><a href="@php echo get_permalink(); @endphp"> @php echo get_the_title(); @endphp</a></li>
        @php
        }
        wp_reset_postdata();
        @endphp
    </ul>
    @php } @endphp
</div>