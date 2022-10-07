<?php

namespace App;

use ipinfo\ipinfo\IPinfo;
use Roots\Sage\Container;

/**
 * Get the sage container.
 *
 * @param string $abstract
 * @param array  $parameters
 * @param Container $container
 * @return Container|mixed
 */
function sage($abstract = null, $parameters = [], Container $container = null)
{
    $container = $container ?: Container::getInstance();
    if (!$abstract) {
        return $container;
    }
    return $container->bound($abstract)
    ? $container->makeWith($abstract, $parameters)
    : $container->makeWith("sage.{$abstract}", $parameters);
}

/**
 * Get / set the specified configuration value.
 *
 * If an array is passed as the key, we will assume you want to set an array of values.
 *
 * @param array|string $key
 * @param mixed $default
 * @return mixed|\Roots\Sage\Config
 * @copyright Taylor Otwell
 * @link https://github.com/laravel/framework/blob/c0970285/src/Illuminate/Foundation/helpers.php#L254-L265
 */
function config($key = null, $default = null)
{
    if (is_null($key)) {
        return sage('config');
    }
    if (is_array($key)) {
        return sage('config')->set($key);
    }
    return sage('config')->get($key, $default);
}

/**
 * @param string $file
 * @param array $data
 * @return string
 */
function template($file, $data = [])
{
    return sage('blade')->render($file, $data);
}

/**
 * Retrieve path to a compiled blade view
 * @param $file
 * @param array $data
 * @return string
 */
function template_path($file, $data = [])
{
    return sage('blade')->compiledPath($file, $data);
}

/**
 * @param $asset
 * @return string
 */
function asset_path($asset)
{
    return sage('assets')->getUri($asset);
}

/**
 * @param string|string[] $templates Possible template files
 * @return array
 */
function filter_templates($templates)
{
    $paths = apply_filters('sage/filter_templates/paths', [
        'views',
        'resources/views',
    ]);
    $paths_pattern = "#^(" . implode('|', $paths) . ")/#";

    return collect($templates)
        ->map(function ($template) use ($paths_pattern) {
            /** Remove .blade.php/.blade/.php from template names */
            $template = preg_replace('#\.(blade\.?)?(php)?$#', '', ltrim($template));

            /** Remove partial $paths from the beginning of template names */
            if (strpos($template, '/')) {
                $template = preg_replace($paths_pattern, '', $template);
            }

            return $template;
        })
        ->flatMap(function ($template) use ($paths) {
            return collect($paths)
                ->flatMap(function ($path) use ($template) {
                    return [
                        "{$path}/{$template}.blade.php",
                        "{$path}/{$template}.php",
                    ];
                })
                ->concat([
                    "{$template}.blade.php",
                    "{$template}.php",
                ]);
        })
        ->filter()
        ->unique()
        ->all();
}

/**
 * @param string|string[] $templates Relative path to possible template files
 * @return string Location of the template
 */
function locate_template($templates)
{
    return \locate_template(filter_templates($templates));
}

/**
 * Determine whether to show the sidebar
 * @return bool
 */
function display_sidebar()
{
    static $display;
    isset($display) || $display = apply_filters('sage/display_sidebar', false);
    return $display;
}

/**
 * Simple function to pretty up our field partial includes.
 *
 * @param  mixed $partial
 * @return mixed
 */
function get_field_partial($partial)
{
    $partial = str_replace('.', '/', $partial);
    return include config('theme.dir') . "/app/fields/{$partial}.php";
}

if (!function_exists('visitorIsBot')) {
    /**
     * Check if visitor is bot
     */
    function visitorIsBot($user_agent)
    {
        $botRegexPattern = "(googlebot\/|Googlebot\-Mobile|Googlebot\-Image|Google favicon|Mediapartners\-Google|bingbot|slurp|java|wget|curl|Commons\-HttpClient|Python\-urllib|libwww|httpunit|nutch|phpcrawl|msnbot|jyxobot|FAST\-WebCrawler|FAST Enterprise Crawler|biglotron|teoma|convera|seekbot|gigablast|exabot|ngbot|ia_archiver|GingerCrawler|webmon |httrack|webcrawler|grub\.org|UsineNouvelleCrawler|antibot|netresearchserver|speedy|fluffy|bibnum\.bnf|findlink|msrbot|panscient|yacybot|AISearchBot|IOI|ips\-agent|tagoobot|MJ12bot|dotbot|woriobot|yanga|buzzbot|mlbot|yandexbot|purebot|Linguee Bot|Voyager|CyberPatrol|voilabot|baiduspider|citeseerxbot|spbot|twengabot|postrank|turnitinbot|scribdbot|page2rss|sitebot|linkdex|Adidxbot|blekkobot|ezooms|dotbot|Mail\.RU_Bot|discobot|heritrix|findthatfile|europarchive\.org|NerdByNature\.Bot|sistrix crawler|ahrefsbot|Aboundex|domaincrawler|wbsearchbot|summify|ccbot|edisterbot|seznambot|ec2linkfinder|gslfbot|aihitbot|intelium_bot|facebookexternalhit|yeti|RetrevoPageAnalyzer|lb\-spider|sogou|lssbot|careerbot|wotbox|wocbot|ichiro|DuckDuckBot|lssrocketcrawler|drupact|webcompanycrawler|acoonbot|openindexspider|gnam gnam spider|web\-archive\-net\.com\.bot|backlinkcrawler|coccoc|integromedb|content crawler spider|toplistbot|seokicks\-robot|it2media\-domain\-crawler|ip\-web\-crawler\.com|siteexplorer\.info|elisabot|proximic|changedetection|blexbot|arabot|WeSEE:Search|niki\-bot|CrystalSemanticsBot|rogerbot|360Spider|psbot|InterfaxScanBot|Lipperhey SEO Service|CC Metadata Scaper|g00g1e\.net|GrapeshotCrawler|urlappendbot|brainobot|fr\-crawler|binlar|SimpleCrawler|Livelapbot|Twitterbot|cXensebot|smtbot|bnf\.fr_bot|A6\-Indexer|ADmantX|Facebot|Twitterbot|OrangeBot|memorybot|AdvBot|MegaIndex|SemanticScholarBot|ltx71|nerdybot|xovibot|BUbiNG|Qwantify|archive\.org_bot|Applebot|TweetmemeBot|crawler4j|findxbot|SemrushBot|yoozBot|lipperhey|y!j\-asr|Domain Re\-Animator Bot|AddThis|YisouSpider|BLEXBot|YandexBot|SurdotlyBot|AwarioRssBot|FeedlyBot|Barkrowler|Gluten Free Crawler|Cliqzbot)";
        return preg_match("/{$botRegexPattern}/", $user_agent);
    }
}

if (!function_exists('validateIPs')) {
    /**
     * Validate Ip
     */
    function validateIPs($ips)
    {
        foreach (explode(',', $ips) as $ip) {
            if (!filter_var($ip, FILTER_VALIDATE_IP)) {
                return false;
            }
            return $ip;
        }
    }
}

if (!function_exists('getVisitorIpAdress')) {
    /**
     * Get visitor Ip
     */
    function getVisitorIpAdress()
    {
        $visitorIp = false;

        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $visitorIp = $_SERVER['HTTP_CLIENT_IP'];
        } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $visitorIp = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $visitorIp = $_SERVER['REMOTE_ADDR'];
        }

        $visitorIp = validateIPs($visitorIp);

        return $visitorIp;
    }
}

if (!function_exists('getVisitorInfo')) {
    /**
     * Get visitor country (using Ipinfo.io API)
     */
    function getVisitorInfo($ignoreCookie = false)
    {
        // Return false if visitor is bot
        if (visitorIsBot($_SERVER['HTTP_USER_AGENT'])) {
            return false;
        }

        $visitorIp = getVisitorIpAdress();

        // Retrieve visitor country from Ipinfo.io API
        $access_token           = '1ac9095e2f9aa7';
        $client                 = new IPinfo($access_token);
        $visitorInfo            = $client->getDetails($visitorIp);
        $visitorInfo->{'in_eu'} = inEuCountries($visitorInfo->country);

        // Return country
        return $visitorInfo;
    }
}

if (!function_exists('inEuCountries')) {
    /**
     * EU Countries
     */
    function inEuCountries($visitorCountry)
    {
        $countries = array('AT', 'BE', 'BG', 'HR', 'CY', 'CZ', 'DK', 'EE', 'FI', 'FR', 'DE', 'GR', 'HU', 'IE', 'IT', 'LV', 'LT', 'LU', 'MT', 'NL', 'PL', 'PT', 'RO', 'SK', 'SI', 'ES', 'SE', 'GB');
        $inEu      = in_array($visitorCountry, $countries);

        return $inEu;
    }
}

if (!function_exists('readCountryNames')) {
    /**
     * Get all countries names
     */
    function readCountryNames($countries_file)
    {
        $file_contents = file_get_contents($countries_file);
        return json_decode($file_contents, true);
    }
}

if (!function_exists('getFormNumber')) {
    /**
     * Get all countries names
     */
    function getFormNumber($id)
    {
        $formated_num = 0;

        if (!empty($id)) {
            $field = $_POST[$id];
            if (strpos($field, '+')) {
                $formated_num = 1000;
            } elseif (strpos($field, '-')) {
                $formated_num = explode('-', $field);
                $formated_num = intval($formated_num[1]);
            }
        }

        return $formated_num;
    }
}

if (!function_exists('sortVisitorRegion')) {
    /**
     * Sort visitor country region
     */
    function sortVisitorRegion($country, $region)
    {

        $countries = readCountryNames(config('theme.dir') . '/app/regions/countries.json');

        $visitorCountryCode = $output = array_filter($countries, function ($value) use ($country) {
            return $value == $country;
        });

        $visitorCountryCode = count($visitorCountryCode) ? array_key_first($visitorCountryCode) : '';

        $emeaCountries = ['AL', 'AX', 'AD', 'AM', 'AT', 'AZ', 'BE', 'BY', 'BA', 'BG', 'HR', 'CY', 'CZ', 'DK', 'EE', 'FO', 'IM', 'IT', 'JE', 'KZ', 'XK', 'LV', 'LI', 'LU', 'MK', 'MT', 'MD', 'MC', 'ME', 'NL', 'NO', 'PL', 'PT', 'RO', 'RU', 'SM', 'RS', 'SK', 'SI', 'ES', 'SJ', 'SE', 'SW', 'CH', 'TR', 'UA', 'GB', 'VA', 'DZ', 'AO', 'BJ', 'BW', 'BF', 'BI', 'CM', 'CV', 'CF', 'TD', 'KM', 'CD', 'DJ', 'EG', 'GQ', 'ER', 'ET', 'GA', 'GM', 'GH', 'GN', 'GW', 'CI', 'KE', 'LS', 'LR', 'LY', 'MG', 'MW', 'ML', 'MR', 'YT', 'MA', 'MZ', 'NA', 'NE', 'NG', 'CG', 'RE', 'RW', 'ST', 'SC', 'SL', 'SO', 'ZA', 'SS', 'SD', 'SZ', 'TZ', 'TG', 'TN', 'UG', 'EH', 'ZW', 'BH', 'IR', 'IQ', 'IL', 'JO', 'KW', 'LB', 'OM', 'PS', 'QA', 'SA', 'SY', 'AE', 'YE', 'FI', 'FR', 'DE', 'GR', 'HU', 'IE', 'LT', 'IS'];

        $apacCountries = ['BD', 'BT', 'IO', 'BN', 'KH', 'CN', 'TL', 'IN', 'ID', 'JP', 'LA', 'MY', 'MV', 'MN', 'MM', 'NP', 'KP', 'PK', 'PH', 'SG', 'KR', 'LK', 'TW', 'TH', 'VN', 'AS', 'AU', 'CK', 'FJ', 'PF', 'GU', 'KI', 'MH', 'FM', 'NR', 'NC', 'NZ', 'NU', 'MP', 'PW', 'PG', 'PN', 'WS', 'SB', 'TK', 'TO', 'TV', 'VU', 'WF'];

        // American countries
        $usa          = ['US'];
        $canada       = ['CA'];
        $latinAmerica = ['BZ', 'CR', 'SV', 'GT', 'HN', 'MX', 'NI', 'PA', 'AR', 'BO', 'BR', 'CL', 'CO', 'EC', 'FK', 'GF', 'GY', 'PY', 'PE', 'SR', 'UY', 'VE', 'CU', 'DO', 'HT'];

        // USA States
        $usaCentral = ['Iowa', 'Illinois', 'Kansas', 'Minnesota', 'Colorado', 'Missouri', 'Nebraska', 'New Mexico', 'North Dakota', 'South Dakota', 'Arkansas', 'Louisiana', 'Oklahoma', 'Texas', 'Wisconsin'];

        $usaWest = ['Alaska', 'Arizona', 'California', 'Hawaii', 'Idaho', 'Montana', 'Nevada', 'Oregon', 'Utah', 'Washington', 'Wyoming'];

        $usaEast = ['Indiana', 'Michigan', 'Ohio', 'Maine', 'New York', 'New Jersey', 'Vermont', 'Massachusetts', 'Rhode Island', 'Connecticut', 'New Hampshire', 'Pennsylvania', 'Alabama', 'Kentucky', 'Mississippi', 'Tennessee', 'Delaware', 'Maryland', 'Virginia', 'West Virginia', 'North Carolina', 'South Carolina', 'Georgia', 'Florida', 'District of Columbia'];

        return (object) [
            'isEmea'         => in_array($visitorCountryCode, $emeaCountries),
            'isApac'         => in_array($visitorCountryCode, $apacCountries),
            'isCanada'       => in_array($visitorCountryCode, $canada),
            'isUSA'          => in_array($visitorCountryCode, $usa),
            'isUSAEast'      => in_array($region, $usaEast),
            'isUSACentral'   => in_array($region, $usaCentral),
            'isUSAWest'      => in_array($region, $usaWest),
            'isLatinAmerica' => in_array($visitorCountryCode, $latinAmerica),
        ];
    }
}

if (!function_exists('video_with_preview')) {
    /**
     * Build video with an autoplay preview/full video on the modal using foobox.
     *
     * @param string $id / Needs to match videojs id
     * @param url $preview
     * @param url $full
     * @param url $poster
     * @param bool $border
     * @return string
     */
    function video_with_preview($id, $preview, $full, $poster, $border = null)
    {
        $no_js      = '<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that<a href="https://videojs.com/html5-video-support/" target="_blank" rel="noopener noreferrer">supports HTML5 video</a></p>';
        $has_border = $border ? ' cf-video-wrap--border' : '';

        $output = '';
        $output .= '<div class="cf-video-wrap' . $has_border . '">';

        // Play button
        $output .= '<a href="#' . $id . '" target="foobox" class="cf-video-btn foobox" data-width="880" aria-label="Play video">';
        $output .= '<i class="fas fa-play fa-2x text-white"></i>';
        $output .= '</a>';

        // Full
        $output .= '<div id="' . $id . '" style="display:none;">';
        $output .= '<video id="' . $id . '--full" class="vjs-codefresh video-js vjs-fill" poster="' . $poster . '">';
        $output .= '<source src="' . $full . '" type="video/mp4">';
        $output .= $no_js;
        $output .= '</video>';
        $output .= '</div>';

        // Short
        $output .= '<video id="' . $id . '--short" class="video-js vjs-fill" poster="' . $poster . '">';
        $output .= '<source src="' . $preview . '" type="video/mp4">';
        $output .= $no_js;
        $output .= '</video>';

        $output .= '</div>';

        return $output;
    }
}

if (!function_exists('video_iframe')) {
    /**
     * ACF Oembed
     */
    function video_iframe($iframe, $autoplay = 0)
    {
        if (!$iframe) {
            return;
        }

        $output = '';

        preg_match('/src="(.+?)"/', $iframe, $matches);

        $src = $matches[1];

        $params = [
            'controls' => 1,
            'hd'       => 1,
            'autohide' => 1,
            'rel'      => 0,
            'autoplay' => $autoplay,
        ];

        $new_src    = add_query_arg($params, $src);
        $iframe     = str_replace($src, $new_src, $iframe);
        $attributes = 'class="absolute w-full h-full top-0 bottom-0 left-0 right-0" frameborder="0"';
        $iframe     = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

        $output .= '<div class="relative aspect-ratio-16/9 w-full h-auto max-w-full overflow-hidden">';
        $output .= $iframe;
        $output .= '</div>';

        return $output;
    }
}

if (!function_exists('video')) {
    /**
     * ACF Oembed
     */
    function video($iframe)
    {
        if (!$iframe) {
            return;
        }

        // use preg_match to find iframe sr
        preg_match('/src="(.+?)"/', $iframe, $matches);
        $src = $matches[1];
        // add extra params to iframe src
        $params = array(
            'controls' => 1,
            'hd'       => 1,
            'autohide' => 1,
            'rel'      => 0,
            'autoplay' => 1,
        );
        $new_src = add_query_arg($params, $src);
        $iframe  = str_replace($src, $new_src, $iframe);
        // add extra attributes to iframe html
        $attributes = 'class="embed-responsive-item" id="webinarVideo" frameborder="0"';
        $iframe     = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
        return $iframe;
    }
}

if (!function_exists('disable_sidebar')) {
    /**
     * Get disable sidebar option for single posts
     */
    function disable_sidebar()
    {
        global $post;
        return get_field('cf_disable_sidebar', $post->ID) ?: false;
    }
}

if (!function_exists('disable_cta_top')) {
    /**
     * Get disable CTA (top) option for single posts
     */
    function disable_cta_top()
    {
        global $post;
        return get_field('cf_disable_cta_top', $post->ID) ?: false;
    }
}

if (!function_exists('hubspot_form')) {
    /**
     * Get disable Newsletter option for single posts
     */
    function hubspot_form($id = null)
    {
        $id   = $id ?? 'c32591b4-21f8-4dc9-851f-19e80488a0ac';
        $form = sprintf('<!--[if lte IE 8]> <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script> <![endif]--> <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script> <script>hbspt.forms.create({ portalId: "5054647", formId: "%1$s", sfdcCampaignId: "7011I000000Ln1oQAC", onFormReady: function($form) {populateFormUrl();}, css: "" }); </script>', $id);

        return $form;
    }
}

if (!function_exists('acf_link')) {
    /**
     * Get ACF link array
     */
    function acf_link($link)
    {
        $btnLink = [];
        if ($link) {
            $linkUrl           = $link['url'];
            $linkTitle         = $link['title'];
            $linkTarget        = $link['target'] ? $link['target'] : '_self';
            $btnLink['url']    = $linkUrl;
            $btnLink['title']  = $linkTitle;
            $btnLink['target'] = $linkTarget;
        }

        return $btnLink;
    }
}

if (!function_exists('_link')) {
    /**
     * Get ACF link array
     */
    function _link($acf_link)
    {
        $link = (object) array();
        if ($acf_link) {
            $link->url    = $acf_link['url'];
            $link->title  = $acf_link['title'];
            $link->target = $acf_link['target'] ? $acf_link['target'] : '_self';
        }

        return $link;
    }
}

if (!function_exists('compare_table_item')) {
    /**
     * Get ACF link array
     */
    function compare_table_item($type, $text)
    {
        $return_html = '';

        if ($type) {
            switch ($type) {
                case 'text':
                    if (isset($text) && $text !== '') {
                        $return_html = $text;
                    } else {
                        $return_html = __('Unknown', 'codefresh');
                    }
                    break;

                case 'yes':
                    $return_html = '<i class="fas fa-check text-primary text-lg md:text-3xl"></i>';
                    break;

                default:
                    $return_html = '<i class="fas fa-times text-red text-lg md:text-3xl"></i>';
                    break;
            }
        }

        return $return_html;
    }
}

if (!function_exists('get_svg_contents')) {
    /**
     * Get file contents.
     */
    function get_svg_contents($id = null)
    {
        $file = wp_get_attachment_url($id);
        $type = wp_check_filetype($file);

        if (isset($type['ext'])) {
            if ($type['ext'] === 'svg') {
                return file_get_contents($file);
            }
        }
        return;
    }
}

if (!function_exists('generate_inline_styles')) {
    /**
     * Generate Styles string from an array.
     */
    function generate_inline_styles($styles)
    {
        $styles_string = null;
        if (!empty($styles)) {
            foreach ($styles as $key => $value) {
                $styles_string .= $key . ':' . $value . ';';
            }
        }
        return $styles_string;
    }
}

if (!function_exists('heading_to_paragraph')) {
    /**
     * Replaces h tags with p tags.
     */
    function heading_to_paragraph($html)
    {
        $html = preg_replace('/<h[1-6]>(.*?)<\/h[1-6]>/', '<p>$1</p>', $html);
        return $html;
    }
}

if (!function_exists('remove_script_tags')) {
    /**
     * Removes script tags.
     */
    function remove_script_tags($html)
    {
        $html = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $html);
        return $html;
    }
}

function input_to_button($button, $form)
{
    $dom = new \DOMDocument();
    $dom->loadHTML('<?xml encoding="utf-8" ?>' . $button);
    $input      = $dom->getElementsByTagName('input')->item(0);
    $new_button = $dom->createElement('button');
    $new_button->appendChild($dom->createTextNode($input->getAttribute('value')));
    $input->removeAttribute('value');
    foreach ($input->attributes as $attribute) {
        $new_button->setAttribute($attribute->name, $attribute->value);
    }
    $input->parentNode->replaceChild($new_button, $input);

    return $dom->saveHtml($new_button);
}

if (!function_exists('get_user_avatar')) {
/**
 * Custom avatar
 */
    function get_user_avatar($id, $alt, $size = 80)
    {
        $src    = get_avatar_url($id);
        $avatar = sprintf(
            '<img src="%1$s" alt="%2$s" height="%3$s" width="%3$s" class="avatar img-fill rounded-full shadow">',
            $src,
            $alt,
            $size
        );
        return $avatar;
    }
}

if (!function_exists('redirect')) {
/**
 * Redirect to another page.
 */
    function redirect($url, $statusCode = 303)
    {
        header('Location: ' . $url, true, $statusCode);
        die();
    }
}

if (!function_exists('mix')) {
/**
 * Get versioned asset path.
 */
    function mix($path, $manifest_directory = '', $manifest_name = 'mix-manifest.json')
    {
        $manifest_directory = asset_path('');
        $file_url           = str_replace(
            trailingslashit(ABSPATH),
            trailingslashit(site_url()),
            $path
        );

        $manifest_path = trailingslashit($manifest_directory) . $manifest_name;

// Bailout with file URL if manifest couldn’t be found.
        if (!file_exists(__DIR__ . '/../dist/' . $manifest_name)) {
            return $file_url;
        }

        $manifest       = json_decode(file_get_contents($manifest_path), true);
        $manifest_entry = str_replace($manifest_directory, '', $path);

// Make sure there’s a leading slash.
        $manifest_entry = '/' . ltrim($manifest_entry, '/');

// Bailout with file URL could not be found in manifest.
        if (!array_key_exists($manifest_entry, $manifest)) {
            return $file_url;
        }

        $file_path = $manifest[$manifest_entry];
// Make sure there’s a leading slash.
        $file_path = '/' . ltrim($file_path, '/');

// Add hash and return.
        return str_replace($manifest_entry, $file_path, $file_url);
    }
}

if (!function_exists('set_attrs_dom_element')) {
    /**
     * Set attributes to DOM elements.
     */
    function set_attrs_dom_element($content = null, $attrs = [], $el = 'p')
    {
        if (!$content || !count($attrs)) {
            return $content;
        }

        $dom = new \DOMDocument();
        $dom->loadHTML($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $xpath = new \DOMXPath($dom);
        $tags  = $xpath->evaluate('//' . $el);

        foreach ($tags as $tag) {
            foreach ($attrs as $key => $value) {
                $tag->setAttribute($key, $value);
            }
        }

        $content = $dom->saveHTML();

        return $content;
    }
}
