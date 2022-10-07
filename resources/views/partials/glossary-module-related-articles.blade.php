@php
  $taxonomy = 'topics';
  $rel_term = get_the_terms( $post->ID , array( $taxonomy) );

  $term_id = $rel_term[0]->term_id;
  $term_name = $rel_term[0]->name;
  $args = array(
  'post_type' => 'learning',
  'posts_per_page' => -1,
  'order' => 'DESC',
  'tax_query' => array(
  array(
  'taxonomy' => $taxonomy,
  'field' => 'term_id',
  'terms' => $term_id
  )
  )
  );
  
if(is_single()){
  $args['post__not_in'] = [
    get_the_ID()
  ];
  $term = $rel_term[0];
}
$related_query = new WP_Query( $args );
@endphp

@php if($related_query->have_posts() || get_field('article_links',$term) || is_single()) { @endphp
<div class="glossary-module glossary-module-related-articles">
  <h4>Related {{ $term->name }} articles </h4>
  @if(is_single() && $term)
  <p class="article-link"><a href="@php echo get_term_link($term); @endphp">
    @php 
    if(get_field('hero_banner_title',$term)){
      echo get_field('hero_banner_title',$term);
    }else{
        echo $term->name;
    }
     @endphp</a>
    </p>
  @endif
    @php while($related_query->have_posts()) {
    $related_query->the_post(); @endphp
    <p class="article-link"><a href="@php echo get_permalink(); @endphp"> @php echo get_the_title(); @endphp</a></p>
    @php
    }
    wp_reset_postdata()
    @endphp

  @php
    if(get_field('article_links',$term)){
      while(the_repeater_field('article_links',$term)) { @endphp
      <p class="article-link"><a href="@php the_sub_field('link',$term); @endphp"> @php the_sub_field('title',$term); @endphp</a></p>
  @php }
      }
  @endphp
</div>
@php } @endphp