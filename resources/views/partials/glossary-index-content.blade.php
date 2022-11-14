<!-- <div class="full-width"> -->
<div class="overflow-hidden">
  <div class="container">
    <div class="main-content">
      <!-- begin temp content for layout -->

      <!--            post listing starts-->
      @php
      if(get_field('index_posts_per_page', 'option')){
        $pp_page = get_field('index_posts_per_page', 'option');
      }else{
        $pp_page = 6;
      }
      $term_slug = $_GET['topic'];
      $term_by_slug = get_term_by( 'slug', $term_slug, 'topics');
      if($term_by_slug){
        $filter_head = $term_by_slug->name;
      }else{
        $filter_head = 'All';
      }
      
      $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
      
      $args = [
      'post_type' => 'learning',
      'orderby' => 'date',
      'order' => 'DESC',
      'post_status' => 'publish',
      'posts_per_page' => $pp_page,
      'paged' => $paged
      ];
      if(!empty($term_slug )){
        $args['tax_query'] = [
        [
        'taxonomy' => 'topics',
        'field' => 'slug',
        'terms' => $term_slug,
        ]
        ];
      }
      $query = new WP_Query($args);
      
      //get all clusters
      $terms = get_terms([
        'taxonomy' => 'topics',
        'hide_empty' => false,
        ]);
      
      @endphp

      <h2>@php echo $filter_head @endphp articles</h2>
      @if($terms && !$term_slug)
      @if($paged < 2)
      @foreach($terms as $term)
      @if(get_field('cluster_featured_image',$term))
      <div class="glossary-index-callout">
        <div class="callout-left">
          <img src="@php echo get_field('cluster_featured_image',$term); @endphp" />
        </div>
        <div class="callout-right">
          <h4>
            <a href="@php echo get_term_link($term); @endphp">
              @php
              if(get_field('hero_banner_title',$term)){
                  echo get_field('hero_banner_title',$term);
                  }else{
                    echo $term->name;
                  }
              @endphp
            </a></h4>

          @php
          if(get_field('article_summary',$term)){
          echo get_field('article_summary',$term);
          }
          @endphp

          <a href="@php echo get_term_link($term); @endphp" target="" class=" btn-glossary-index-read-more">
            Read Article >
          </a>
        </div>
      </div>
      @else
      <div class="glossary-index-article-item">
        <h4>
          <a href="@php echo get_term_link($term); @endphp">
            @php
            if(get_field('hero_banner_title',$term)){
                echo get_field('hero_banner_title',$term);
                }else{
                  echo $term->name;
                }
            @endphp
          </a></h4>
        @php
        if(get_field('article_summary',$term)){
        echo get_field('article_summary',$term);
        }
        @endphp
        <a href="@php echo get_term_link($term); @endphp" target="" class="btn-glossary-index-read-more">
          Read Article >
        </a>
      </div>
      @endif
      @endforeach
      @endif
      @else 
      @php $term = get_term_by('slug', $term_slug, 'topics') @endphp
      @if(get_field('cluster_featured_image',$term))
      <div class="glossary-index-callout">
        <div class="callout-left">
          <img src="@php echo get_field('cluster_featured_image',$term); @endphp" />
        </div>
        <div class="callout-right">
          <h4>
            <a href="@php echo get_term_link($term); @endphp">
              @php
              if(get_field('hero_banner_title',$term)){
                  echo get_field('hero_banner_title',$term);
                  }else{
                    echo $term->name;
                  }
              @endphp
            </a></h4>
          @php
          if(get_field('article_summary',$term)){
          echo get_field('article_summary',$term);
          }
          @endphp

          <a href="@php echo get_term_link($term); @endphp" target="" class=" btn-glossary-index-read-more">
            Read Article >
          </a>
        </div>
      </div>
      @else
      <div class="glossary-index-article-item">
        <h4>
          <a href="@php echo get_term_link($term); @endphp">
            @php
            if(get_field('hero_banner_title',$term)){
                echo get_field('hero_banner_title',$term);
                }else{
                  echo $term->name;
                }
            @endphp
          </a></h4>
        @php
        if(get_field('article_summary',$term)){
        echo get_field('article_summary',$term);
        }
        @endphp
        <a href="@php echo get_term_link($term); @endphp" target="" class="btn-glossary-index-read-more">
          Read Article >
        </a>
      </div>
      @endif
      @endif
      @php if($query->have_posts()){
            while($query->have_posts()){
              $query->the_post();
      @endphp

      @php if(has_post_thumbnail()){ @endphp

      
      <div class="glossary-index-callout">
        <div class="callout-left">
          <img src="@php echo get_the_post_thumbnail_url(); @endphp" />
        </div>
        <div class="callout-right">
          <h4><a href="@php echo get_permalink(); @endphp">@php the_title(); @endphp</a></h4>

          @php
          if(get_field('article_summary')){
          echo get_field('article_summary');
          }
          @endphp

          <a href="@php echo get_permalink(); @endphp" target="" class=" btn-glossary-index-read-more">
            Read Article >
          </a>
        </div>
      </div>
      

      @php
      } else{ @endphp

      <div class="glossary-index-article-item">
        <h4><a href="@php echo get_permalink(); @endphp">@php the_title(); @endphp</a></h4>
        @php
        if(get_field('article_summary')){
        echo get_field('article_summary');
        }
        @endphp
        <a href="@php echo get_permalink(); @endphp" target="" class=" btn-glossary-index-read-more">
          Read Article >
        </a>
      </div>
    @php

      }
      }
      }

      @endphp

      <div class="pagination glossary-index">
        <?php
        echo paginate_links(array(
          'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
          'total'        => $query->max_num_pages,
          'current'      => max(1, get_query_var('paged')),
          'format'       => '?paged=%#%',
          'show_all'     => false,
          'type'         => 'plain',
          'end_size'     => 2,
          'mid_size'     => 1,
          'prev_next'    => false,
          'prev_text'    => sprintf('<i></i> %1$s', __('Newer Posts', 'text-domain')),
          'next_text'    => sprintf('%1$s <i></i>', __('Older Posts', 'text-domain')),
          'add_args'     => false,
          'add_fragment' => '',
        ));
        ?>
      </div>

    </div>
  </div>
</div>
<!-- </div> -->