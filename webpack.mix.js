const mix = require( 'laravel-mix' );
require( '@tinypixelco/laravel-mix-wp-blocks' );
// require( 'laravel-mix-bundle-analyzer' );

mix.webpackConfig({
    stats: {
        children: true,
    },
});

mix
  .setPublicPath( './dist' )
  .browserSync( {
    ghostMode: false,
    proxy: 'http://codefresh.lndo.site/',
  } );

mix
  .sass( 'resources/assets/css/app.scss', 'css' )
  .sass( 'resources/assets/css/fontawesome.scss', 'css' )
  .options( {
    processCssUrls: false,
    postCss: [ require( 'tailwindcss' ) ],
  } );
mix
  .scripts( ['resources/assets/js/more.js'], 'dist/js/more.js' );
mix
  .js( 'resources/assets/js/main.js', 'js' ).vue()
  .js( 'resources/assets/js/lottie-player.js', 'js' )
  .js( 'resources/assets/js/pages/home.js', 'js' )
  .js( 'resources/assets/js/pages/case-studies.js', 'js' )
  .js( 'resources/assets/js/pages/contact-us.js', 'js' )
  .js( 'resources/assets/js/pages/features-single.js', 'js' )
  .js( 'resources/assets/js/pages/pricing.js', 'js' )
  .js( 'resources/assets/js/pages/single-event.js', 'js' )
  .js( 'resources/assets/js/search-events.js', 'js' )
  .js( 'resources/assets/js/customizer.js', 'js' )
  .autoload( { jquery: [ '$', 'window.jQuery' ] } )
  .extract();
mix
  .copyDirectory( 'resources/assets/images', 'dist/images' )
  .copyDirectory( 'resources/assets/fonts', 'dist/fonts' )
  .copyDirectory( 'tcv-build', 'dist/tcv' );

mix
  .sourceMaps()
  .version();

/**
  * Bundle analyzer
 */
// if ( mix.inProduction() ) {
//   mix.bundleAnalyzer();
// }
