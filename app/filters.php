<?php

namespace App;

/**
 * Add <body> classes
 */
add_filter('body_class', function (array $classes) {
    /** Add page slug if it doesn't exist */
    if (is_single() || is_page() && !is_front_page()) {
        if (!in_array(basename(get_permalink()), $classes)) {
            $classes[] = basename(get_permalink());
        }
    }

    /** Add class if sidebar is active */
    if (display_sidebar()) {
        $classes[] = 'sidebar-primary';
    }

    /** Clean up class names for custom templates */
    $classes = array_map(function ($class) {
        return preg_replace(['/-blade(-php)?$/', '/^page-template-views/'], '', $class);
    }, $classes);

    return array_filter($classes);
});

/**
 * Display sidebar
 */
add_filter('sage/display_sidebar', function ($display) {
    static $display;

    if (disable_sidebar()) {
        return $display;
    }

    isset($display) || $display = in_array(true, [
        is_singular('post'),
        is_singular('meet-a-codefresher'),
        is_category(),
        is_home(),
    ]);

    return $display;
});

/**
 * Add "… Continued" to the excerpt
 */
add_filter('excerpt_more', function () {
    return ' &hellip; <a href="' . get_permalink() . '">' . __('Read more', 'codefresh') . '</a>';
});

/**
 * Template Hierarchy should search for .blade.php files
 */
collect([
    'index', '404', 'archive', 'author', 'category', 'tag', 'taxonomy', 'date', 'home',
    'frontpage', 'page', 'paged', 'search', 'single', 'singular', 'attachment', 'embed',
])->map(function ($type) {
    add_filter("{$type}_template_hierarchy", __NAMESPACE__ . '\\filter_templates');
});

/**
 * Render page using Blade
 */
add_filter('template_include', function ($template) {
    collect(['get_header', 'wp_head'])->each(function ($tag) {
        ob_start();
        do_action($tag);
        $output = ob_get_clean();
        remove_all_actions($tag);
        add_action($tag, function () use ($output) {
            echo $output;
        });
    });
    $data = collect(get_body_class())->reduce(function ($data, $class) use ($template) {
        return apply_filters("sage/template/{$class}/data", $data, $template);
    }, []);
    if ($template) {
        echo template($template, $data);
        return get_stylesheet_directory() . '/index.php';
    }
    return $template;
}, PHP_INT_MAX);

/**
 * Render comments.blade.php
 */
add_filter('comments_template', function ($comments_template) {
    $comments_template = str_replace(
        [get_stylesheet_directory(), get_template_directory()],
        '',
        $comments_template
    );

    $data = collect(get_body_class())->reduce(function ($data, $class) use ($comments_template) {
        return apply_filters("sage/template/{$class}/data", $data, $comments_template);
    }, []);

    $theme_template = locate_template(["views/{$comments_template}", $comments_template]);

    if ($theme_template) {
        echo template($theme_template, $data);
        return get_stylesheet_directory() . '/index.php';
    }

    return $comments_template;
}, 100);

/**
 * Custom search form
 */
add_filter('get_search_form', function () {
    $form = '';
    echo template('partials.search-form');
    return $form;
});

/**
 * Use lazysizes (lazy loading) for attachments/featured images
 */
/*
add_filter('wp_get_attachment_image_attributes', function ($attr, $attachment) {
    // Bail on admin
    if (is_admin()) {
        return $attr;
    }

    if (isset($attr['src'])) {
        $attr['data-src'] = $attr['src'];
        $attr['src']      = 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==';
    }

    if (isset($attr['srcset'])) {
        $attr['data-srcset'] = $attr['srcset'];
        $attr['srcset']      = 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==';
    }

    $attr['class'] .= ' lazyload';

    return $attr;
}, 10, 2);
*/

/**
 * Only display the archive name
 */
add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    }
    return $title;
});

/**
 * Add responsive wrap to tables
 */
add_filter('the_content', function ($content) {
    $content = preg_replace_callback('~<table.*?</table>~is', function ($match) {
        return '<div class="table-responsive">' . $match[0] . '</div>';
    }, $content);
    return $content;
});

/**
 * Add icon to submit button. Gravity Forms
 */
add_filter('gform_submit_button_28', function ($button, $form) {
    return '<button class="gform_button btn btn-primary btn-lg btn-block" id="gform_submit_button_28"><i class="fas fa-play-circle mr-1"></i>Watch Now</button>';
}, 10, 2);

/**
 * Post comment title
 */
add_filter('comment_form_defaults', function ($defaults) {
    $defaults['comment_notes_before'] = '<span class="comment-notes-before"><span>*</span> All fields are required. Your email address will not be published.</span>';
    return $defaults;
});

/**
 * Post comment
 */
add_filter('comment_form_field_comment', function ($comment_field) {
    $comment_field =
    '<p class="comment-form-comment">
            <label for="comment"><span class="screen-reader-text">' . __("Comment", "codefresh") . '</span>
                <textarea required id="comment" name="comment" placeholder="' . esc_attr__("Comment...", "codefresh") . '" cols="45" rows="8" aria-required="true"></textarea>
            </label>
        </p>';

    return $comment_field;
});

/**
 * Custom colors
 */
add_filter('tiny_mce_before_init', function ($init) {
    $custom_colours = '
        "19b99a", "Primary",
    ';

    // build colour grid default+custom colors
    $init['textcolor_map'] = '[' . $custom_colours . ']';

    // change the number of rows in the grid if the number of colors changes
    // 8 swatches per row
    $init['textcolor_rows'] = 1;

    return $init;
});

/**
 * Add class to body
 */
add_filter('body_class', function ($classes) {
    $class = '';
    if (
        is_singular('post') ||
        is_singular('case-studies') ||
        is_home() ||
        is_search()
    ) {
        $class = 'no-hero';
    }

    return array_merge($classes, array($class));
});

/**
 * Gravity form pre render
 */
/*
add_filter('gform_pre_render', function ($form) {
    $visitorCountry = getVisitorInfo();

    foreach ($form['fields'] as &$field) {
        if ($field->type == 'address') {
            $field->defaultCountry = $visitorCountry->country_name ?: '';
        }

        if ($field->type == 'text' && $field->cssClass == 'gf-country') {
            $field->defaultValue = $visitorCountry->country_name ?: 'unknown';
        }

        if ($field->cssClass == 'gf-country-code') {
            $field->defaultValue = $visitorCountry->country ?: 'unknown';
        }

        if ($field->type == 'text' && $field->cssClass == 'gf-region') {
            $field->defaultValue = $visitorCountry->region ?: 'unknown';
        }

        if ($field->cssClass == 'gf-ip') {
            $field->defaultValue = $visitorCountry->ip ?: 'unknown';
        }
        if ($field->type == 'consent' && $visitorCountry->in_eu) {
            $field->visibility = 'visible';
        }
    }
    return $form;
});
*/

/**
 * Gravity form pre submission
 */
add_filter('gform_pre_submission_filter', function ($form) {
    $f_country       = '';
    $f_region        = '';
    $f_engineers_num = '';
    $f_company_size  = '';
    $f_kubernetes    = '';
    $f_calendly      = '';

    foreach ($form['fields'] as &$field) {

        if ($field->cssClass == 'gf-country') {
            $f_country = 'input_' . $field->id;
        }

        if ($field->cssClass == 'gf-region') {
            $f_region = 'input_' . $field->id;
        }

        if ($field->cssClass == 'gf-num-engineers') {
            $f_engineers_num = 'input_' . $field->id;
        }

        if ($field->cssClass == 'gf-company-size') {
            $f_company_size = 'input_' . $field->id;
        }

        if ($field->cssClass == 'gf-kubernetes') {
            $f_kubernetes = 'input_' . $field->id;
        }

        if ($field->cssClass == 'gf-calendly') {
            $f_calendly = 'input_' . $field->id;
        }
    }

    $visitor      = sortVisitorRegion($_POST[$f_country], $_POST[$f_region]);
    $team_rob     = 'Rob Chappell';
    $team_oriel   = 'Oriel Belzer';
    $team_einat   = 'Einat Hirsch';
    $team_maya    = 'Maya Mandelbaum';
    $default      = 'Demo Video';
    $size         = 0;
    $engineers    = getFormNumber($f_engineers_num);
    $company_size = getFormNumber($f_company_size);
    $min_size     = 100; // Min company size
    $entMin       = 100; // Enterprise min employees
    $smbMax       = 9; // Small Business max employees

    foreach ($form['fields'] as &$field) {

        if ($field->cssClass == 'gf-calendly') {

            if ($company_size < $min_size) {
                $_POST[$f_calendly] = $default;
            } else {
                // USA west & USA central + Canada + Latin America.
                if (
                    ($visitor->isUSA && $visitor->isUSAEast)
                    || ($visitor->isUSA && $visitor->isUSACentral)
                    || $visitor->isCanada
                    || $visitor->isLatinAmerica
                ) {
                    if ($engineers >= $entMin) {
                        $_POST[$f_calendly] = $team_oriel; // enterprises.
                    } else {
                        $_POST[$f_calendly] = $team_maya; // small business.
                    }
                }

                // USA east enterprise and small business.
                elseif (
                    $visitor->isUSA
                    && $visitor->isUSAWest
                ) {
                    if ($engineers >= $entMin) {
                        $_POST[$f_calendly] = $team_rob; // enterprises.
                    } else {
                        $_POST[$f_calendly] = $team_maya; // small business.
                    }
                }

                // EMEA & APAC enterprise and small business.
                elseif (
                    $visitor->isEmea
                    || $visitor->isApac
                ) {
                    if ($engineers >= $entMin) {
                        $_POST[$f_calendly] = $team_einat; // enterprises.
                    } else {
                        $_POST[$f_calendly] = $team_maya; // small business.
                    }
                }

                // Default
                else {
                    $_POST[$f_calendly] = $default;
                }
            }
        }
    }

    if (!empty($f_kubernetes) && !empty($f_calendly)) {
        if (strpos(strtolower($_POST[$f_kubernetes]), 'not') !== false) {
            $_POST[$f_calendly] = $default;
        }
    }

    return $form;

}, 10, 2);

/**
 * Post comments fields
 */
add_filter('comment_form_default_fields', function ($fields) {
    $commenter = wp_get_current_commenter();
    $req       = get_option('require_name_email');
    $label     = $req ? '*' : ' ' . __('(optional)', 'codefresh');
    $aria_req  = $req ? "aria-required='true'" : '';

    $fields['author'] =
    '<p class="comment-form-author">
		            <label for="author"><span class="screen-reader-text">' . __("Name", "codefresh") . $label . '</span>
		                <input id="author" name="author" type="text" placeholder="' . esc_attr__("Name", "codefresh") . '" value="' . esc_attr($commenter['comment_author']) . '" size="30" ' . $aria_req . '>
		            </label>
		        </p>';

    $fields['email'] =
    '<p class="comment-form-email">
		            <label for="email"><span class="screen-reader-text">' . __("Email", "codefresh") . $label . '</span>
		                <input id="email" name="email" type="email" placeholder="' . esc_attr__("Email", "codefresh") . '" value="' . esc_attr($commenter['comment_author_email']) . '" size="30" ' . $aria_req . '>
		            </label>
		        </p>';

    $fields['url'] =
    '<p class="comment-form-url hidden">
		            <label for="url"><span class="screen-reader-text">' . __("Website", "codefresh") . '</span>
		                <input id="url" name="url" type="url"  placeholder="' . esc_attr__("http://codefresh.io", "codefresh") . '" value="' . esc_attr($commenter['comment_author_url']) . '" size="30">
		            </label>
		        </p>';

    return $fields;
});

/**
 * Chili Piper Confirmation.
 */
add_filter('gform_confirmation_87', function ($confirmation, $form, $entry, $ajax) {
    $confirmation = __('Thanks for filling out our form!', 'codefresh');
    $confirmation .= sprintf('<script src="https://js.chilipiper.com/marketing.js" type="text/javascript"></script><script type="text/javascript"> jQuery(document).ready(function(){ ChiliPiper.submit("codefresh", "inbound_router_demo", { map: true, lead: { FirstName: "%1$s", LastName: "%2$s", Email: "%3$s", Phone: "%4$s", Company: "%5$s", Company_Size__c: "%6$s", Country__c: "%7$s" } }); }); </script>',
        $entry['28'],
        $entry['29'],
        $entry['18'],
        $entry['31'],
        $entry['2'],
        $entry['35'],
        $entry['16'],
    );

    return $confirmation;
}, 10, 4);

/**
 * Search only post type
 */
add_filter('pre_get_posts', function () {
    if ($query->is_search && !is_admin()) {
        $query->set('post_type', 'post');
    }

    return $query;
});

/**
 * Filters the next, previous and submit buttons.
 * Replaces the forms <input> buttons with <button> while maintaining attributes from original <input>.
 *
 * @param string $button Contains the <input> tag to be filtered.
 * @param object $form Contains all the properties of the current form.
 *
 * @return string The filtered button.
 */
add_filter('gform_next_button', 'App\input_to_button', 10, 2);
add_filter('gform_previous_button', 'App\input_to_button', 10, 2);
add_filter('gform_submit_button', 'App\input_to_button', 10, 2);

/**
 * Remove author info from oembed previews.
 */
add_filter('oembed_response_data', function ($data) {
    unset($data['author_url']);
    unset($data['author_name']);
    return $data;
});

// Increase the length of preview links
add_filter( 'ppp_nonce_life', 'my_nonce_life' );
function my_nonce_life() {
    return 60 * 60 * 24 * 14; // 14 days
}
