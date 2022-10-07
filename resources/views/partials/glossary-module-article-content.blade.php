@php
if($term){
  $term = $term;
}else{
$term = get_the_ID();
}
@endphp

@if (have_rows('components', $term))
@php $i = 0; @endphp
<div class="glossary-module glossary-module-article-content">
  <h4>Article Content</h4>
  <div class="navigation-in-page">
    <ul>
      @while (have_rows('components', $term)) @php the_row() @endphp
      @php
      $i++;
      $label = '';
      if(get_sub_field('menu_title', $term)){
        $label = get_sub_field('menu_title', $term);
      }
      $label_hyphens = str_replace(' ', '-', $label); // Replaces all spaces with hyphens.
      $labelid = preg_replace('/[^A-Za-z0-9\-]/', '', $label_hyphens);
      $labelid = strtolower($labelid);
      @endphp
      @php if($label){ @endphp
      <li><a href="#section-{{ $labelid }}" class="navigation-in-page-li">{{ $label }}</a></li>
      @php } @endphp
      @endwhile
    </ul>
  </div>
</div>
@endif

<script>
// Get all sections that have an ID defined
const sections = document.querySelectorAll("section[id]");
// console.log ('sections: ', sections);
// Add an event listener listening for scroll
window.addEventListener("scroll", navHighlighter);

function navHighlighter() {

  // Get current scroll position
  let scrollY = window.pageYOffset;

  // Now we loop through sections to get height, top and ID values for each
  sections.forEach(current => {
    const sectionHeight = current.offsetHeight;
    // console.log('sectionHeight: ', sectionHeight);

    // Original:
    // const sectionTop = current.offsetTop - 50;
    //
    // Alex Turnwall's update:
    // Updated original line (above) to use getBoundingClientRect instead of offsetTop, based on:
    // https://plainjs.com/javascript/styles/get-the-position-of-an-element-relative-to-the-document-24/
    // https://newbedev.com/difference-between-getboundingclientrect-top-and-offsettop
    // This allows the use of sections inside a relative parent, which I'm not using here, but needed for a project
    //
    const sectionTop = (current.getBoundingClientRect().top + window.pageYOffset) - 50;
    sectionId = current.getAttribute("id");

    /*
    - If our current scroll position enters the space where current section on screen is, add .active class to corresponding navigation link, else remove it
    - To know which link needs an active class, we use sectionId variable we are getting while looping through sections as an selector
    */
    if (
      scrollY > sectionTop &&
      scrollY <= sectionTop + sectionHeight
    ){
      document.querySelector(".navigation-in-page a[href*=" + sectionId + "]").classList.add("active");
    } else {
      document.querySelector(".navigation-in-page a[href*=" + sectionId + "]").classList.remove("active");
    }
  });
}
</script>