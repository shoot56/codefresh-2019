@php
  if($term){
  $term = $term;
  $banner_title = get_field('hero_banner_title',$term);
  if($banner_title){
    $banner_title = $banner_title;
  }else{
    $banner_title = $term->name;
  }
  }else{
  $term = get_the_ID();
  $banner_title = get_the_title($term);
  }
  $banner_img = get_field('banner_image',$term);
  if(!$banner_img){
  $banner_img = get_template_directory_uri().'/assets/images/learning_center_hero2.jpg';
  }
@endphp

<div class="glossary-banner" role="document" style="background-image: url('@php echo $banner_img @endphp');">
  <div class="glossary-banner-top-spacer">
  </div>
  <section class="glossary-banner-container container md:grid grid-cols-1 gap-4 relative">
    <span class="article-breadcrumbs">
      @php
        get_breadcrumb();
      @endphp
    </span>

    <div class="glossary-banner-h1">
      <h1 class="mb-3 text-4xl md:text-7xl">
        <!-- <span class="bg-clip-text text-transparent bg-gradient-to-r from-green-light to-blue">@php echo $banner_title; @endphp</span> -->
        <span class="text-white">@php echo $banner_title; @endphp</span>
      </h1>
    </div>

    
      <div class="share-custom-title mb-3">
        {!! do_shortcode('[addtoany buttons="facebook,linkedin,twitter"]') !!}
      </div>
    

    <div class="glossary-banner-bottom">
    </div>
  </section>
</div>