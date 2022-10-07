<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageFeaturesSingle extends Controller
{
    use Components\FeatureTwoColumn;

    public function goAdvancedContent()
    {
        return get_field('go_adv');
    }

    public function features()
    {
        return get_field('screens_rep');
    }

    public function learnMoreLinks()
    {
        return [
            'link_1' => get_field('link_1'),
            'link_2' => get_field('link_2'),
        ];
    }

    public function featureComparisonImages()
    {
        return [
            [
                'src' => '/wp-content/themes/codefresh-2019/dist/images/Advanced-Kubernetes.png',
                'alt' => __('Advanced', 'codefresh'),
            ],
            [
                'src' => '/wp-content/themes/codefresh-2019/dist/images/kubernetes-simple.png',
                'alt' => __('Simple', 'codefresh'),
            ],
        ];
    }
}
