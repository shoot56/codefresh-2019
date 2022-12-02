<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

use Roots\Sage\Config;
use Roots\Sage\Container;

/**
 * Helper function for prettying up errors
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$sage_error = function ($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Sage &rsaquo; Error', 'codefresh');
    $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

/**
 * Ensure compatible version of PHP is used
 */
if (version_compare('7.1', phpversion(), '>=')) {
    $sage_error(__('You must be using PHP 7.1 or greater.', 'codefresh'), __('Invalid PHP version', 'codefresh'));
}

/**
 * Ensure compatible version of WordPress is used
 */
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
    $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'codefresh'), __('Invalid WordPress version', 'codefresh'));
}

/**
 * Ensure dependencies are loaded
 */
if (!class_exists('Roots\\Sage\\Container')) {
    if (!file_exists($composer = __DIR__.'/../vendor/autoload.php')) {
        $sage_error(
            __('You must run <code>composer install</code> from the Sage directory.', 'codefresh'),
            __('Autoloader not found.', 'codefresh')
        );
    }
    require_once $composer;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'codefresh'), $file), 'File not found');
    }
}, ['helpers', 'setup', 'filters', 'admin', 'includes-autoloader']);

/**
 * Here's what's happening with these hooks:
 * 1. WordPress initially detects theme in themes/sage/resources
 * 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
 * 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
 *
 * We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
 * But functions.php, style.css, and index.php are all still located in themes/sage/resources
 *
 * This is not compatible with the WordPress Customizer theme preview prior to theme activation
 *
 * get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
 * get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
 * locate_template()
 * ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
 * └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
 */
array_map(
    'add_filter',
    ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
    array_fill(0, 4, 'dirname')
);
Container::getInstance()
    ->bindIf('config', function () {
        return new Config([
            'assets' => require dirname(__DIR__).'/config/assets.php',
            'theme' => require dirname(__DIR__).'/config/theme.php',
            'view' => require dirname(__DIR__).'/config/view.php',
        ]);
    }, true);

/**
 * ACF Options Page
 */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

/**
 * Revome editor from certain templates
 */
add_action('init', function() {
    if (isset($_GET['post'])) {
        $id = $_GET['post'];
        $template = get_post_meta($id, '_wp_page_template', true);
        switch ($template) {
            case 'views/page-home.blade.php':
            case 'views/page-pricing.blade.php':
            case 'views/page-features.blade.php':
            case 'views/page-features-single.blade.php':
            case 'views/page-features-single-alt.blade.php':
            case 'views/page-case-studies.blade.php':
            case 'views/lp-early-access.blade.php':
            case 'views/lp-early-access-thx.blade.php':
            case 'views/lp-open-source-fund.blade.php':
            case 'views/lp-2021a.blade.php':
            case 'views/lp-2021b.blade.php':
            // the below removes 'editor' support for 'pages'
            // if you want to remove for posts or custom post types as well
            // add this line for posts:
            // remove_post_type_support('post', 'editor');
            // add this line for custom post types and replace
            // custom-post-type-name with the name of post type:
            // remove_post_type_support('custom-post-type-name', 'editor');
            remove_post_type_support('page', 'editor');
            break;
            default :
            // Don't remove any other template.
            break;
        }
    }
});

/**
 * Remove meta-boxes from pages
 */
add_action('admin_init', function() {
    remove_meta_box('postexcerpt','page','normal'); // optionally use this if page excerpts are enabled
    remove_meta_box('postcustom','page','normal');
    remove_meta_box('trackbacksdiv','page','normal');
    remove_meta_box('commentstatusdiv','page','normal');
    remove_meta_box('commentsdiv','page','normal');
    remove_meta_box('revisionsdiv','page','normal');
    remove_meta_box('slugdiv','page','normal');
    remove_meta_box('authordiv','page','normal');
});

/**
 * Custom navigation
 */
if ( ! function_exists( 'cf_pagination' ) ) {

	function cf_pagination( $args = array(), $class = 'pagination' ) {

		if ( $GLOBALS['wp_query']->max_num_pages <= 1 ) {
			return;
		}

		$args = wp_parse_args(
			$args,
			array(
				'mid_size'           => 2,
				'prev_next'          => true,
				'prev_text'          => __( '&laquo;', 'codefresh' ),
				'next_text'          => __( '&raquo;', 'codefresh' ),
				'screen_reader_text' => __( 'Posts navigation', 'codefresh' ),
				'type'               => 'array',
				'current'            => max( 1, get_query_var( 'paged' ) ),
			)
		);

		$links = paginate_links( $args );

		?>

		<nav class="d-flex mt-2 mb-16" aria-label="<?php echo $args['screen_reader_text']; ?>">

			<ul class="pagination mx-auto">

				<?php
				foreach ( $links as $key => $link ) {
					?>
					<li class="page-item <?php echo strpos( strtolower($link), 'current' ) ? 'active' : ''; ?>">
						<?php echo str_replace( 'page-numbers', 'page-link', strtolower($link) ); ?>
					</li>
					<?php
				}
				?>

			</ul>

		</nav>

		<?php
	}
}

/**
 * Remove Gutenberg styles
 */
function remove_gutenberg_styles() {
    wp_dequeue_style( 'wp-block-library' );
}

add_action( 'wp_enqueue_scripts', 'remove_gutenberg_styles', 100 );

/**
 * Admin menu items order
 */
function wpse_custom_menu_order( $menu_ord ) {
    if ( !$menu_ord ) return true;

    return array(
        'index.php', // Dashboard
        'separator1', // First separator
        'edit.php', // Posts
        'upload.php', // Media
        'link-manager.php', // Links
        'edit-comments.php', // Comments
        'edit.php?post_type=page', // Pages
        'separator2', // Second separator
        'themes.php', // Appearance
        'plugins.php', // Plugins
        'users.php', // Users
        'tools.php', // Tools
        'options-general.php', // Settings
        'separator-last', // Last separator
    );
}
add_filter( 'custom_menu_order', 'wpse_custom_menu_order', 10, 1 );
add_filter( 'menu_order', 'wpse_custom_menu_order', 10, 1 );

/**
 * Ajax: Load Webinars
 */
function cf_search_events() {

    $query = $_POST['query'];

    $byTag = array(
        'post_type'   => 'events',
        'post_status' => 'publish',
        'meta_key'	  => 'on_demand',
        'meta_value'  => true,
        'tax_query' => array(
            array (
                'taxonomy' => 'events_tag',
                'field' => 'slug',
                'terms' => $query,
            )
        ),
    );
    $byTitle = array(
        'post_type' => 'events',
        'post_status' => 'publish',
        's' => $query,
        'meta_key'		   => 'on_demand',
        'meta_value'	   => true
    );

    $tag_query = new WP_Query( $byTag );
    $title_query = new WP_Query( $byTitle );
    $search = new WP_Query();

    // start putting the contents in the new object
    $search->posts = array_merge( $tag_query->posts, $title_query->posts );

    // Set the post count
    $search->post_count = count( $search->posts );

    $returnHtml = '';
    $ids = [];
    $duplicates = [];

    if ( !$search->have_posts() ) :
        $returnHtml = '<div class="p-2">No results... Try <span class="text-body-light font-bold font-display">Codefresh, Devops, Kubernetes or Helm.</span></div>';
    endif;


    if ( $search->have_posts() ) :
        $returnHtml .= '<ul class="search__minilist">';

        while ( $search->have_posts() ) : $search->the_post();

            $ids[] = get_the_id();
            $duplicates = array_unique( array_diff_assoc( $ids, array_unique( $ids ) ) );

            if( in_array( get_the_id(), $duplicates ) ) continue;
            $returnHtml .= '<li>';
            $returnHtml .= '<a href="' . get_permalink() . '">';
            $returnHtml .= get_the_title();
            $returnHtml .= '</a>';
            $returnHtml .= '</li>';

        endwhile;
        wp_reset_postdata();

        $returnHtml .= '</ul>';
    endif;

	print($returnHtml);

    die();
}
add_action( 'wp_ajax_cf_search_events', 'cf_search_events' );    // If called from admin panel
add_action( 'wp_ajax_nopriv_cf_search_events', 'cf_search_events' );    // If called from front end

// Stop Yoast from automatically creating redirects
// via https://developer.yoast.com/customization/yoast-seo-premium/disabling-automatic-redirects-notifications/
add_filter('Yoast\WP\SEO\post_redirect_slug_change', '__return_true' );
add_filter('Yoast\WP\SEO\term_redirect_slug_change', '__return_true' );
add_filter('Yoast\WP\SEO\enable_notification_post_trash', '__return_false' );
add_filter('Yoast\WP\SEO\enable_notification_post_slug_change', '__return_false' );
add_filter('Yoast\WP\SEO\enable_notification_term_delete', '__return_false' );
add_filter('Yoast\WP\SEO\enable_notification_term_slug_change', '__return_false' );

// Functions for Learning Center
function xyz_archive_per_page( $query ) {
    if ( is_post_type_archive( 'learning' ) && !is_admin() ) {

        $query->set( 'posts_per_page', get_field('index_posts_per_page', 'option') );
    }
}
add_filter( 'pre_get_posts', 'xyz_archive_per_page' );


add_action( 'wp_print_styles', 'deregister_plugin_styles_cod', 100 );

// //load plugin assets to specific pages
function deregister_plugin_styles_cod() {
    if(!is_single() || !is_singular(array('learning','case-studies','events'))){
        wp_deregister_style( 'addtoany' );
        wp_deregister_script('addtoany-jquery');
        wp_deregister_script('addtoany-core');
       
    }else{
        wp_enqueue_style( 'addtoany' );
        wp_enqueue_script( 'addtoany-jquery' );
        wp_enqueue_script( 'addtoany-core' );
    }
    if(!is_page(array('case-studies','product'))){
        wp_deregister_style( 'foobox-min' );
        wp_deregister_script('foobox-min');

    }else{
        wp_enqueue_style( 'foobox-min' );
        wp_enqueue_script( 'foobox-min' );
    }
}

