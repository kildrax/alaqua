<?php

/**
 * Register and Enqueue Styles.
 */
function alaqua_styles()
{

    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style('oscar-style', get_template_directory_uri() . '/assets/production/mincss/main.min.css', false, $theme_version);
}

add_action('wp_enqueue_scripts', 'alaqua_styles');

/**
 * Register and Enqueue Scripts.
 */
function alaqua_scripts()
{

    $theme_version = wp_get_theme()->get('Version');

    if ((!is_admin()) && is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
    // wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', false, $theme_version, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/production/minjs/main.min.js', false, $theme_version, true);
}

add_action('wp_enqueue_scripts', 'alaqua_scripts');

/**Register menu option**/
if (!function_exists('mytheme_register_nav_menu')) {

    function mytheme_register_nav_menu()
    {
        register_nav_menus(array(
            'primary_menu' => __('Primary Menu'),
            'footer_menu'  => __('Footer Menu')
        ));
    }
    add_action('init', 'mytheme_register_nav_menu', 0);
}

/**
 * Filter the excerpt length to 50 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function theme_slug_excerpt_length($length)
{
    if (is_admin()) {
        return $length;
    }
    return 40;
}
add_filter('excerpt_length', 'theme_slug_excerpt_length', 999);

function new_excerpt_more()
{
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**Se agrega soporte para imagen destacada**/
add_theme_support('post-thumbnails');


/**Register a global menu option**/
add_action('admin_menu', 'add_global_options');

function add_global_options()
{
    add_options_page('Opciones globales', 'Opciones globales', 'manage_options', 'functions', 'global_options');
}

function global_options()
{
?>
    <div class="wrap">
        <h2>Opciones Globales</h2>
        <form method="post" action="options.php">
            <?php wp_nonce_field('update-options') ?>
            <h2>Redes Sociales</h2>
            <p><strong>Número WhatsApp:</strong><br />
                <input type="text" name="whatsapp_number" size="45" value="<?php echo get_option('whatsapp_number'); ?>" />
            </p>
            <p><strong>Facebook Page Link:</strong><br />
                <input type="text" name="fb_link" size="45" value="<?php echo get_option('fb_link'); ?>" />
            </p>
            <p><strong>Intagram Page Link:</strong><br />
                <input type="text" name="insta_link" size="45" value="<?php echo get_option('insta_link'); ?>" />
            </p>
            <p><input type="submit" name="Submit" value="Guardar" /></p>
            <input type="hidden" name="action" value="update" />
            <input type="hidden" name="page_options" value="whatsapp_number,fb_link,insta_link" />
        </form>
    </div>
<?php
}
?>