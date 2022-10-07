@php
  $banner_img = get_field('index_banner_image', 'option');
  $banner_title = get_field('index_banner_title', 'option');
  if(!$banner_img){
  $banner_img = get_template_directory_uri().'/assets/images/learning_center_hero2.jpg';
  }
@endphp

<div class="glossary-index-banner" role="document" style="background-image: url('@php echo $banner_img @endphp');">
  <div class="glossary-index-banner-top-spacer">
  </div>
  <section class="glossary-index-banner-container container md:grid grid-cols-1 gap-4 relative">
    <span class="article-breadcrumbs">
      @php
        get_breadcrumb();
      @endphp
    </span>
 <div class="glossary-index-banner-h1">
   @php if($banner_title){ @endphp
      <h1 class="mb-3 text-4xl md:text-7xl">
        <!-- <span class="bg-clip-text text-transparent bg-gradient-to-r from-green-light to-blue">@php echo $banner_title; @endphp</span>
       -->
       <span class="text-white">@php echo $banner_title; @endphp</span>
      </h1>
      @php } @endphp
    </div>
<div class="glossary-banner-bottom">
    </div>
  </section>
</div>