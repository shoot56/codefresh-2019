<?php

namespace App;

use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Container;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;
use StoutLogic\AcfBuilder\FieldsBuilder;
/**
 * Theme assets
 */
add_action('wp_enqueue_scripts', function () {

    wp_enqueue_style('codefresh/app.css', mix(asset_path('css/app.css')), false, null);
    wp_enqueue_style('codefresh/fontawesome.css', mix(asset_path('css/fontawesome.css')), false, null);

    //if(!is_front_page()){
    wp_enqueue_script('codefresh/vendor.js', mix(asset_path('js/vendor.js')), ['jquery'], null, true);

    //}
    wp_enqueue_script('codefresh/main.js', mix(asset_path('js/main.js')), ['codefresh/vendor.js'], null, true);
    wp_enqueue_script('codefresh/more.js', mix(asset_path('js/more.js')), ['jquery'], null, true);

    wp_add_inline_script('codefresh/vendor.js', file_get_contents(asset_path('js/manifest.js')), 'before');

    
    if (is_single() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    if (is_front_page()) {
        wp_enqueue_script('codefresh/home.js', mix(asset_path('js/home.js')), ['jquery'], null, true);
    }
    if (is_404()) {
        wp_enqueue_style('codefresh/page404.css', mix(asset_path('css/page404.css')), false, null);
    }

    if (is_page('contact-us')) {
        wp_enqueue_script('codefresh/contact-us.js', mix(asset_path('js/contact-us.js')), ['jquery'], null, true);
        wp_enqueue_script('google_maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDLtaEZqHFJh9o1FU0KLXgn-LEKrlNJybo', null, true);
    }

    if (is_page_template('views/page-features-single.blade.php')) {
        wp_enqueue_script('codefresh/features-single.js', mix(asset_path('js/features-single.js')), ['jquery'], null, true);
    }

    if (is_page_template('views/page-case-studies.blade.php')) {
        wp_enqueue_script('codefresh/case-studies.js', mix(asset_path('js/case-studies.js')), ['jquery'], null, true);
    }

    if (
        is_page('webcasts-on-demand')
        || is_page('events')
    ) {
        wp_enqueue_script('codefresh/search-events.js', mix(asset_path('js/search-events.js')), ['jquery'], null, true);
    }

    if (is_singular('events')) {
        wp_enqueue_script('codefresh/single-event.js', mix(asset_path('js/single-event.js')), ['jquery'], null, true);
    }
}, 100);


/**
 * Theme setup
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from Soil when plugin is activated
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil-clean-up');
    add_theme_support('soil-jquery-cdn');
    add_theme_support('soil-nav-walker');
    add_theme_support('soil-nice-search');
    add_theme_support('soil-relative-urls');

    /**
     * Enable plugins to manage the document title
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Register navigation menus
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'codefresh'),
    ]);

    /**
     * Enable post thumbnails
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable HTML5 markup support
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

    /**
     * Enable selective refresh for widgets in customizer
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Use app stylesheet for visual editor
     * @see resources/assets/styles/layouts/_tinymce.scss
     */
    add_editor_style(asset_path('css/app.css'));

    /**
     * Image sizes
     */
    add_image_size('thumbnail_square', 85, 85, array('center', 'center'));
    add_image_size('placeholder', 20, 20);
}, 20);

/**
 * Register sidebars
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<div class="widget %1$s %2$s"><div class="widget__inner"><div>',
        'after_widget'  => '</div></div></div>',
        'before_title'  => '<h3 class="text-lg">',
        'after_title'   => '</h3>',
    ];
    register_sidebar([
        'name'  => __('Blog', 'codefresh'),
        'id'    => 'sidebar-blog',
        'class' => 'sidebarBlog',
    ] + $config);

    for ($i = 1; $i <= 5; $i++) {
        $config_footer = [
            'before_widget' => '<div class="widget footer-sidebar footer-sidebar--' . $i . '">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="text-lg">',
            'after_title'   => '</h3>',
        ];
        register_sidebar([
            'name'  => __('Footer ' . $i, 'codefresh'),
            'id'    => 'sidebar-footer-' . $i,
            'class' => 'footer-sidebar footer-sidebar--' . $i,
        ] + $config_footer);
    }
});

/**
 * Updates the `$post` variable on each iteration of the loop.
 * Note: updated value is only available for subsequently loaded views, such as partials
 */
add_action('the_post', function ($post) {
    sage('blade')->share('post', $post);
});

/**
 * Setup Sage options
 */
add_action('after_setup_theme', function () {
    /**
     * Add JsonManifest to Sage container
     */
    sage()->singleton('sage.assets', function () {
        return new JsonManifest(config('assets.manifest'), config('assets.uri'));
    });

    /**
     * Add Blade to Sage container
     */
    sage()->singleton('sage.blade', function (Container $app) {
        $cachePath = config('view.compiled');
        if (!file_exists($cachePath)) {
            wp_mkdir_p($cachePath);
        }
        (new BladeProvider($app))->register();
        return new Blade($app['view']);
    });

    /**
     * Create @asset() Blade directive
     */
    sage('blade')->compiler()->directive('asset', function ($asset) {
        return "<?= " . __NAMESPACE__ . "\\asset_path({$asset}); ?>";
    });
});

/**
 * Force Gutenberg editor on AWS CloudFront
 */
add_action('init', function () {
    add_filter('user_can_richedit', '__return_true');
});

/**
 * Initialize ACF Builder
 */
add_action('init', function () {
    collect(glob(config('theme.dir') . '/app/fields/*.php'))->map(function ($field) {
        return require_once ($field);
    })->map(function ($field) {
        if ($field instanceof FieldsBuilder) {
            acf_add_local_field_group($field->build());
        }
    });
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('codefresh/main.js', asset_path('js/main.js'), ['jquery'], null, true);
    $ajax_params = array(
        'ajax_url'   => admin_url('admin-ajax.php'),
        'ajax_nonce' => wp_create_nonce('my_nonce'),
    );

    wp_localize_script('codefresh/main.js', 'ajax_object', $ajax_params);
}, 100);
