<h2 class="mb-6 cf-title-line cf-title-line--l">This Could Be You!</h2>
<?php 
$args = array( 'post_type' => 'meet-a-codefresher', 'posts_per_page' => 2 );
$the_query = new WP_Query( $args ); 
?>
<?php if ( $the_query->have_posts() ) : ?>
<div class="flex flex-wrap">
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="col w-full md:w-1/2 pb-12 is-selected">
      @include('partials.content-meet-a-codefresher')
    </div>
  <?php endwhile;
  wp_reset_postdata(); ?>
</div>
<?php else:  ?>
<?php/*
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
*/?>
<?php endif; ?>
<div class="mt-16 mb-8 text-center lg:mt-2.5 lg:text-right">
  <a
    class="relative z-10 btn btn-link text-primary text-xl"
    href="/meet-a-codefresher/">
    Meet more Codefreshers<i class="fas fa-arrow-right ml-3"></i>
  </a>
</div>