<?php /* <div class="full-width"> */?>
  <div class="overflow-hidden">
    <div class="container">
      <div class="main-content">

        <?php /* begin temp content for layout */?>
        @php
          if($term){
              $term = $term;
          }else{
            $term = get_the_ID();
          }
        @endphp

        @if (have_rows('components', $term))
          @while (have_rows('components', $term))
          @php the_row() @endphp
          
            @if (get_row_layout() == 'general_content')
            <?php /* General content starts */?>
            @php
            $label = '';
              $title = get_sub_field('title', $term);
              $content = get_sub_field('content', $term);
              $label = get_sub_field('menu_title', $term);
              $label_hyphens = str_replace(' ', '-', $label); // Replaces all spaces with hyphens.
              $labelid = preg_replace('/[^A-Za-z0-9\-]/', '', $label_hyphens);
              $labelid = strtolower($labelid);
              
            @endphp
            <section @if ($label) id="section-{{ $labelid }}" @endif>
              @if ($title)<h2>{{ $title }}</h2>@endif
              {!! $content !!}
            </section>
            <?php /* General content ends */?>
            @endif

            @if (get_row_layout() == 'additional_guides')
            <?php /* Additional Guides starts */?>
            
            <section class="additional-guides">
              <div class="additional-guides">
                <?php if (get_sub_field( 'block_title' )): ?>
                  <h2><?php the_sub_field( 'block_title' ); ?></h2>
                <?php endif; ?>
                <?php $columns = get_sub_field( 'columns' ); ?>
                <?php if ( have_rows( 'guides_list' ) ) : ?>
                  <div class="additional-guides-list additional-guides-list--<?php echo $columns; ?>">
                    <?php while ( have_rows( 'guides_list' ) ) : the_row(); ?>
                    <?php $title = get_sub_field( 'title' ); ?>
                    <div class="additional-guides-list__item">
                      <div class="additional-guides-list__head">
                          <?php if ( $title ) : ?>
                            <h3 class="additional-guides-list__title">
                              <a href="<?php echo esc_url( $title['url'] ); ?>" target="<?php echo esc_attr( $title['target'] ); ?>"><?php echo esc_html( $title['title'] ); ?></a>
                            </h3>
                          <?php endif; ?>
                          <?php if (get_sub_field( 'subtitle' )): ?>
                            <div class="additional-guides-list__subtitle"><?php the_sub_field( 'subtitle' ); ?></div>
                          <?php endif; ?>
                        </div>
                        <div class="additional-guides-list__content">
                          <?php the_sub_field( 'content' ); ?>
                        </div>
                      </div>
                    <?php endwhile; ?>
                  </div>
                <?php endif; ?>
              </div>
            </section>
            <?php /* Additional Guides ends */?>
            @endif



            @if (get_row_layout() == 'video_block')
                  <?php /* video layout */?>
                  @php
                  $label = '';
                    $video = get_sub_field('video', $term);

                    $video_caption = get_sub_field('video_caption', $term);
                    $label = get_sub_field('menu_title', $term);
                    $label_hyphens = str_replace(' ', '-', $label); // Replaces all spaces with hyphens.
                    $labelid = preg_replace('/[^A-Za-z0-9\-]/', '', $label_hyphens);
                    $labelid = strtolower($labelid);
                  @endphp

                  @if ($video || $video_caption)
                  <section @if ($label) id="section-{{ $labelid }}" @endif>
     
                    {!! $video !!}
                    @if ($video_caption)
                    <p class="caption">{{ $video_caption }}</p>
                    @endif
                   </section>
                    @endif
                  @endif
                  <?php /* video layout ends */?>
           

            <?php /* callout */?>
            @if (get_row_layout() == 'callout')
              @php
              $label = '';
              $callout_img = get_sub_field('image', $term);
              $image_alt = get_sub_field('image_alt', $term);
              $title = get_sub_field('title', $term);
              $text = get_sub_field('text', $term);
              if(get_sub_field('button_text', $term)){
                $button_text = get_sub_field('button_text', $term);
              }else{
                $button_text = 'Read More';
              }
              
              $button_link = get_sub_field('button_link', $term);
              $label = get_sub_field('menu_title', $term);
              $label_hyphens = str_replace(' ', '-', $label); // Replaces all spaces with hyphens.
              $labelid = preg_replace('/[^A-Za-z0-9\-]/', '', $label_hyphens);
              $labelid = strtolower($labelid);
              @endphp
                <?php /* Callout section starts */?>
                <section @if ($label) id="section-{{ $labelid }}" @endif>
                  <div class="glossary-callout">
                    @if ($callout_img)
                    <div class="glossary-callout-image">
                      <img src="{{ $callout_img }}" alt="{{ $image_alt }}">
                    </div>
                    @endif
                    <div class="glossary-callout-content">
                      <h3>{{ $title }}</h3>
                      {!! $text !!}
                      @if ($button_link)
                        <a href="{{ $button_link }}" class="btn btn-primary">{{ $button_text }}</a>
                        @endif
                    </div>
                  </div>
                </section>
                @endif
                <?php /* Callout section ends */?>

               

              @endwhile
            @endif
        </div>
    </div>
  </div>

