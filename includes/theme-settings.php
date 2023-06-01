<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function stupa_setup()
{
    register_nav_menus(
        array(
            'menu-main' => esc_html__('Menu-Main', 'stupa'),
            'menu-footer-1' => esc_html__('Menu-Footer-First', 'stupa'),
            'menu-footer-2' => esc_html__('Menu-Footer-Second', 'stupa'),
            'menu-footer-3' => esc_html__('Menu-Footer-Third', 'stupa'),

        )
    );
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on stupa, use a find and replace
     * to change 'stupa' to the name of your theme in all the template files.
     */
    load_theme_textdomain('stupa', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support(
        'html5',
        array(
            'gallery',
            'caption',
            'style',
            'script',
        )
    );
}

add_action('after_setup_theme', 'stupa_setup');

/*Standard widget view*/
add_filter('gutenberg_use_widgets_block_editor', '__return_false');
add_filter('use_widgets_block_editor', '__return_false');

/*Remove Gutenberg*/
if ('disable_gutenberg') {
    remove_theme_support('core-block-patterns'); // WP 5.5

    add_filter('use_block_editor_for_post_type', '__return_false', 100);

    // отключим подключение базовых css стилей для блоков
    // ВАЖНО! когда выйдут виджеты на блоках или что-то еще, эту строку нужно будет комментировать
    remove_action('wp_enqueue_scripts', 'wp_common_block_scripts_and_styles');

    // Move the Privacy Policy help notice back under the title field.
    add_action('admin_init', function () {
        remove_action('admin_notices', ['WP_Privacy_Policy_Content', 'notice']);
        add_action('edit_form_after_title', ['WP_Privacy_Policy_Content', 'notice']);
    });
}

/* Remove <p> and <br /> from Contact Form 7 */
add_filter('wpcf7_autop_or_not', '__return_false');

// Adds SVG to the list of allowed downloads.
add_filter('upload_mimes', 'svg_upload_allow');
function svg_upload_allow($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5);
// Corrects MIME type for SVG files.
function fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = '')
{
    // WP 5.1 +
    if (version_compare($GLOBALS['wp_version'], '5.1.0', '>='))
        $dosvg = in_array($real_mime, ['image/svg', 'image/svg+xml']);
    else
        $dosvg = ('.svg' === strtolower(substr($filename, -4)));
    if ($dosvg) {
        if (current_user_can('manage_options')) {

            $data['ext'] = 'svg';
            $data['type'] = 'image/svg+xml';
        } else {
            $data['ext'] = $type_and_ext['type'] = false;
        }
    }
    return $data;
}

//show_admin_bar( false );
//add_filter('auto_update_translation', '__return_false');

remove_action('load-update-core.php', 'wp_update_plugins');
wp_clear_scheduled_hook('wp_update_plugins');







add_filter('navigation_markup_template', 'my_posts_pagination', 10, 2);
function my_posts_pagination($template, $class)
{
    global $wp_query;

    $total = isset($wp_query->max_num_pages) ? $wp_query->max_num_pages : 1;
    $current = get_query_var('paged') ? (int) get_query_var('paged') : 1;
    $first = $last = '';
    $next_button = __('Next', 'stupa');
    $prev_button = __('Previous', 'stupa');
    if ($current == 1)
        $first = '<span class="prev disabled">' . $prev_button . '</span>';

    // if ($current == $total)
    // $last = '<span class="next">Next <span class="icon-wrap"><img src="./img/icon-9.svg" alt=""></span></span>';

    if ($current == $total)
        $last = '<span class="next disabled">' . $next_button . '</span>';

    $template = '
    <div class="navigation %1$s" role="navigation" aria-label="%4$s">
       
        <div class="nav-links">
        ' . $first . '
        %3$s
        ' . $last . '
        </div>
    </div>';
    return $template;
}
function language_selector_flags()
{
    $languages = icl_get_languages('skip_missing=0'); /* retrieve active languages */
    if (!empty($languages)) {
        echo '<div class="nice-select" tabindex="0">';
        foreach ($languages as $l) {
            if ($l['active']) echo '<span class="current">' . $l['translated_name'] . '</span>'; // Print active language inside dropdown button
        }
        echo '<ul class="list">'; // Crete the "Dropdown-pane"
        foreach ($languages as $l) { // add all languages
            if ($l['active']) {
                echo '<li class="option selected">';
                echo '<a href="' . $l['url'] . '">' . $l['translated_name'] . '</a>'; // Print active language inside dropdown button
                echo '</li>';
            } else {
                echo '<li class="option">';
                echo '<a href="' . $l['url'] . '">' . $l['translated_name'] . '</a>'; // Print active language inside dropdown button
                echo '</li>';
            }
        }
        echo '</ul>';
        echo '</div>';
    }
}
