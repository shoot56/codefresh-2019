@php
$term_slug = $_GET['topic'];
$terms = get_terms([
'taxonomy'   => 'topics',
'orderby'    => 'menu_order',
'hide_empty' => false, 
]);
@endphp

<div class="glossary-index-module glossary-index-module-related-articles">
  <h4>Filter by</h4>
  <hr class="glossary-index-module-hr">
  
  <ul>
    <li @php if(empty($term_slug)){ echo 'class="active"' ;}@endphp><a href="<?php echo home_url(); ?>/learn/">All articles</a></li>
    @php if($terms){
    foreach($terms as $term):
    @endphp
    <li @php if($term_slug==$term->slug){ echo 'class="active"';}@endphp><a href="@php echo home_url().'/learn/?topic='.$term->slug; @endphp">@php echo $term->name; @endphp</a></li>
    @php
    endforeach;
    }
    @endphp
  </ul>
</div>

<div class="glossary-index-module glossary-index-module-related-articles-mobile">
  <input type="checkbox" id="menu">
  <label for="menu"></label>
  <h4>Filter by</h4>
  <div class="toggled-content">
    <hr class="glossary-index-module-hr">
    <ul class="menu-content">
      <li @php if(empty($term_slug)){ echo 'class="active"' ;}@endphp><a href="<?php echo home_url(); ?>/learn">All articles</a></li>
      @php if($terms){
      foreach($terms as $term):
      @endphp
      <li @php if($term_slug==$term->slug){ echo 'class="active"';}@endphp><a href="@php echo home_url().'/learn/?topic='.$term->slug; @endphp">@php echo $term->name; @endphp</a></li>
      @php
      endforeach;
      }
      @endphp
    </ul>
  </div>
</div>