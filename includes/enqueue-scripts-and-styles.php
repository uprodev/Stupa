<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Enqueue scripts and styles.
 */
function stupa_styles()
{


    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style('style-font', get_template_directory_uri() . '/css/font.css');
    wp_enqueue_style('font', get_template_directory_uri() . '/fonts/fontawesome-free-5.15.4-web/css/all.min.css');
    wp_enqueue_style('jquery', get_template_directory_uri() . '/css/jquery.fancybox.min.css');
    wp_enqueue_style('nice-select', get_template_directory_uri() . '/css/nice-select.css');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/css/swiper.min.css');
    wp_enqueue_style('style-aos', get_template_directory_uri() . '/css/aos.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/styles.css');
    wp_enqueue_style('castom-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css');

}

add_action('wp_enqueue_scripts', 'stupa_styles');

function stupa_script()
{


    wp_deregister_script('jquery');
    wp_enqueue_script('jquery-min', get_template_directory_uri() . '/js/jquery.min.js', array(), null, true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper.js', array(), null, true);
    wp_enqueue_script('jquery-fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array(), null, true);
    wp_enqueue_script('jquery-nice-select', get_template_directory_uri() . '/js/jquery.nice-select.min.js', array(), null, true);
    wp_enqueue_script('js--aos', get_template_directory_uri() . '/js/aos.js', array(), null, true);
    wp_enqueue_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js', array(), null, true);
    wp_enqueue_script('fancybox', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.min.js', array(), null, true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/script.js', array(), null, true);

}

add_action('wp_enqueue_scripts', 'stupa_script');