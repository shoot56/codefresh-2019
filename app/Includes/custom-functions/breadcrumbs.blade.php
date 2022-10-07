<?php
function get_breadcrumb()
{
    echo '<a href="' . home_url('/') . '">Home</a>';
    if(get_field('index_banner_title', 'option')){
        $index_title = get_field('index_banner_title', 'option');
    }
    if (is_single() && 'learning' == get_post_type()) {
        echo " | ";
        if ($index_title) {
            
            echo '<a href="' . home_url() . '/learn/">' . $index_title . '</a>';
            echo " | ";
            
        }

        //current term

        $term = get_the_terms(get_the_ID(), 'topics');
        $term_id = $term[0]->term_id;
        echo '<a href="' . get_term_link($term_id) . '">' . $term[0]->name . '</a>';
        echo " | ";

        //get current post title
        echo get_the_title();
    } else {
        if (is_category() || is_single()) {

            echo " | ";
            the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
        } elseif (is_page()) {
            echo " | ";
            echo the_title();
        } elseif (is_search()) {
            echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
            echo '"<em>';
            echo the_search_query();
            echo '</em>"';
        }elseif(is_tax( 'topics' )){
            echo " | ";
            if ($index_title) {
            
                echo '<a href="' . home_url() . '/learn/">' . $index_title . '</a>';
                echo " | ";
                
            }
            $term = get_queried_object();
            echo $term->name;
        }elseif(is_post_type_archive('learning')){
            echo " | ";
            echo $index_title;
        }
    }
}