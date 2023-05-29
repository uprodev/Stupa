<?php
if (!defined('ABSPATH')) {
    exit;
}

add_action('init', 'my_custom_posts_taxonomies');
function my_custom_posts_taxonomies()
{
    register_post_type(
        'hotels',
        array(
            'labels' => array(
                'name' => __('Hotels', 'sdet'),
                'singular_name' => __('Hotels', 'sdet'),
                'add_new' => __('Add Hotel', 'sdet'),
                'add_new_item' => __('Add Hotel', 'sdet'),
                'edit_item' => __('Edit Hotel', 'sdet'),
                'new_item' => __('New Hotel', 'sdet'),
                'view_item' => __('View Hotel', 'sdet'),
                'search_items' => __('Find Hotel', 'sdet'),
                'not_found' => __('Hotels not found', 'sdet'),
                'not_found_in_trash' => __('No Hotels in trash', 'sdet'),
                'parent_item' => __('Parent Hotel', 'sdet'),
                'parent_item_colon' => __('Parent Hotel:', 'sdet'),
                'menu_name' => __('Hotels', 'sdet'),
                'back_to_items' => __('Go to Hotels', 'sdet'),
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_rest' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'hotels', 'with_front' => false, 'pages' => true, 'feeds' => false, 'feed' => false),
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => true,
            'menu_position' => null,
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'page-attributes', 'revisions')
        )
    );
}