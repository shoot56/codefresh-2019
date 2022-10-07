@php global $post; @endphp

@if (have_rows('feature_content'))
  @while (have_rows('feature_content')) @php the_row() @endphp
    @if (get_row_layout() == 'rich_text')

      <div class="feature-content-block max-w-3xl my-12 mx-auto">
        {!! get_sub_field('rich_text') !!}
      </div>

    @elseif (get_row_layout() == 'features')

      @php $features = get_sub_field('features') @endphp

      @if ($features)
        <div class="full-width">
          <div class="overflow-hidden">
            <div class="container">
              @foreach ($features as $feature)
                @include( 'partials.new.feature', [
                  'title'                => $feature['title'],
                  'text'                 => $feature['text'],
                  'mini_features'        => $feature['mini_features'],
                  'acf_link'             => $feature['link'],
                  'img_id'               => $feature['img'],
                  'enable_mini_features' => $feature['enable_list'],
                  'enable_link'          => $feature['enable_link'],
                  'iteration'            => $loop->iteration,
                  'class_names'          => 'section-spacer',
                ] )
              @endforeach
            </div>
          </div>
        </div>
      @endif

    @elseif (get_row_layout() == 'blogs_webinars')

      @php
      $heading    = get_sub_field('heading');
      $type       = get_sub_field('type');
      $blog_posts = get_sub_field('blog_posts');
      $webinars   = get_sub_field('webinars');
      @endphp

      @if ($heading)
        <h2 class="mb-12 text-center">{!! $heading !!}</h2>
      @endif

      @if ($type === 'blog')
        @if ($blog_posts)
          <div class="row">
            @foreach ($blog_posts as $post)
              @php setup_postdata($post) @endphp
              <div class="col w-full md:w-1/2 lg:w-1/3 mb-8">
                @include('partials.content')
              </div>
            @endforeach
          </div>
          @php wp_reset_postdata() @endphp
        @endif
      @endif

      @if ($type === 'webinar')
        @if ($webinars)
          <div class="row">
            @foreach ($webinars as $post)
              @php setup_postdata($post) @endphp
              <div class="col w-full md:w-1/2 mb-8">
                @include('partials.events-webinar')
              </div>
            @endforeach
          </div>
          @php wp_reset_postdata() @endphp
        @endif
      @endif

    @elseif (get_row_layout() == 'reviews')
      @php
      $heading = get_sub_field('heading');
      $reviews = get_sub_field('reviews');
      @endphp

      @if ($reviews)
        <div class="full-width">
          <div class="reviews-bg">
            <div class="container">
              <div class="codefresh-reviews pt-16 pb-64">
                @if ($heading)
                  <div class="mb-12">
                    <h2 class="mb-0 text-dark-heading text-center">{!! $heading !!}</h2>
                  </div>
                @endif

                <div
                  class="shadow-img rounded-2xl"
                  data-flickity='{
                  "cellAlign": "left",
                  "groupCells": true,
                  "contain": true,
                  "adaptiveHeight": true }'>
                  @foreach ( $reviews as $review )
                    <div class="w-full">
                      @component('components.review-item', [
                        'heading'   => $review['heading'],
                        'head_shot' => $review['headshot'],
                        'author'    => $review['author'],
                      ])
                        {!! $review['content'] !!}
                      @endcomponent
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      @endif
    @endif
  @endwhile
@endif
