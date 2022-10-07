@php
$term_id = $_GET['topic_id'];
$terms = get_terms([
'taxonomy' => 'topics',
'hide_empty' => false,
]);
@endphp

<div class="glossary-index-module glossary-index-module-related-articles">
  <h4>Filter by</h4>
  <hr class="glossary-index-module-hr">
  
  <ul>
    <li @php if(empty($term_id)){ echo 'class="active"' ;}@endphp><a href="<?php echo home_url(); ?>/learn?topic=all">All articles</a></li>
    @php if($terms){
    foreach($terms as $term):
    @endphp
    <li @php if($term_id==$term->term_id){ echo 'class="active"';}@endphp><a href="@php echo home_url().'/learn?topic_id='.$term->term_id; @endphp">@php echo $term->name; @endphp</a></li>
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
      <li @php if(empty($term_id)){ echo 'class="active"' ;}@endphp><a href="<?php echo home_url(); ?>/learn">All articles</a></li>
      @php if($terms){
      foreach($terms as $term):
      @endphp
      <li @php if($term_id==$term->term_id){ echo 'class="active"';}@endphp><a href="@php echo home_url().'/learn?topic_id='.$term->term_id; @endphp">@php echo $term->name; @endphp</a></li>
      @php
      endforeach;
      }
      @endphp
    </ul>
  </div>
</div>