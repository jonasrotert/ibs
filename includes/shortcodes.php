<?php
function shortcode_mail($atts, $content = null)
{
    extract(shortcode_atts(array(
        'address' => ''
    ), $atts));
    return "<a href=\"mailto:" . $address . "\">" . $address . "</a>";
}

function shortcode_teaser($atts, $content = null)
{
    extract(shortcode_atts(array(
        'post' => '',
        'header' => ''
    ), $atts));

    $url = (has_post_thumbnail($post)) ? get_the_post_thumbnail_url($post) : "";
    $link = get_post_permalink($post);

    return "<section class=\"teaser\">"
    . "<section class=\"thumbnail\" style=\"background-image: url('" . $url . "')\"></section>"
    . "<header class=\"header\"><a href=\"" . $link . "\">" . $header . "</a></header>"
    . "<main class=\"main\">" . do_shortcode($content) . "</main></section>";
}

function shortcode_twitter($atts, $content = null)
{
    extract(shortcode_atts(array(
        'id' => ''
    ), $atts));

    if ($id != '') {
        $content = '<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/StiftungIBS" data-widget-id="' . $id . '" data-chrome="noheader noscrollbar nofooter noborders transparent"> Tweets von @StiftungIBS</a>';
    }

    return $content;
}

function register_shortcodes()
{
    add_shortcode('mail', 'shortcode_mail');
    add_shortcode('twitter', 'shortcode_twitter');
    add_shortcode('teaser', 'shortcode_teaser');
}