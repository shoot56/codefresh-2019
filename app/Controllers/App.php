<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    use Partials\Author;

    public function mainMenu()
    {
        return [
            [
                'title'    => 'Platform',
                'slug'     => 'javascript:void(0);',
                'dropdown_platform' => true,
                'external' => false,
            ],
            [
                'title'    => 'Pricing',
                'slug'     => 'pricing/',
                'external' => false,
            ],
            [
                'title'    => 'Customers',
                'slug'     => 'case-studies/',
                'external' => false,
            ],
            [
                'title'    => 'GitOps Certification',
                'slug'     => 'https://learning.codefresh.io/',
                'external' => true,
                'data_badge' => 'NEW',
            ],
            [
                'title'    => 'Resources',
                'slug'     => 'javascript:void(0);',
                'dropdown_resources' => true,
                'external' => false,
            ],
            [
                'title'    => 'Careers',
                'slug'     => 'careers/',
                'external' => false,
            ],
        ];
    }

    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'codefresh');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'codefresh'), '<span class="text-primary">' . get_search_query() . '</span>');
        }
        if (is_404()) {
            return __('Not Found', 'codefresh');
        }
        return get_the_title();
    }

    public static function hero()
    {
        return (object) [
            'head'  => get_field('hero_head'),
            'title' => get_field('hero_title'),
        ];
    }

    public static function max_title_length($title)
    {
        $max = 70;
        if (strlen($title) > $max && !is_single()) {
            return substr($title, 0, $max) . "&hellip;";
        } else {
            return $title;
        }
    }

    public static function excerpt($limit)
    {
        $excerpt = explode(' ', get_the_excerpt(), $limit);
        if (count($excerpt) >= $limit) {
            array_pop($excerpt);
            $excerpt = implode(" ", $excerpt) . '...';
        } else {
            $excerpt = implode(" ", $excerpt);
        }
        $excerpt = preg_replace('`[[^]]*]`', '', $excerpt);
        return $excerpt;
    }

    public static function form()
    {
        if (get_field('demo_form')) {
            $form = 44;
        } else {
            $form = get_field('form');
        }
        return $form;
    }

    public static function reading_time()
    {
        global $post;

        $content          = get_post_field('post_content', $post->ID);
        $word_count       = str_word_count(strip_tags($content));
        $readingtime      = ceil($word_count / 250);
        $totalreadingtime = $readingtime . ' min read';

        return $totalreadingtime;
    }

    public static function validate_gravatar($id_or_email)
    {
        //id or email code borrowed from wp-includes/pluggable.php
        $email = '';
        if (is_numeric($id_or_email)) {
            $id   = (int) $id_or_email;
            $user = get_userdata($id);
            if ($user) {
                $email = $user->user_email;
            }

        } elseif (is_object($id_or_email)) {
            // No avatar for pingbacks or trackbacks
            $allowed_comment_types = apply_filters('get_avatar_comment_types', array('comment'));
            if (!empty($id_or_email->comment_type) && !in_array($id_or_email->comment_type, (array) $allowed_comment_types)) {
                return false;
            }

            if (!empty($id_or_email->user_id)) {
                $id   = (int) $id_or_email->user_id;
                $user = get_userdata($id);
                if ($user) {
                    $email = $user->user_email;
                }

            } elseif (!empty($id_or_email->comment_author_email)) {
                $email = $id_or_email->comment_author_email;
            }
        } else {
            $email = $id_or_email;
        }

        $hashkey = md5(strtolower(trim($email)));
        $uri     = 'http://www.gravatar.com/avatar/' . $hashkey . '?d=404';

        $data = wp_cache_get($hashkey);
        if (false === $data) {
            $response = wp_remote_head($uri);
            if (is_wp_error($response)) {
                $data = 'not200';
            } else {
                $data = $response['response']['code'];
            }
            wp_cache_set($hashkey, $data, $group = '', $expire = 60 * 5);

        }
        if ($data == '200') {
            return true;
        } else {
            return false;
        }
    }
}
