<?php
function add_enqueue_styles()
{
    wp_enqueue_style('theme_style',  get_template_directory_uri() . '/style.min.css', 1);
    // wp_enqueue_style('uikit_css',  'https://cdn.jsdelivr.net/npm/uikit@3.3.7/dist/css/uikit.min.css');
    // wp_enqueue_style('google_font',  'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Poppins:wght@400;500;600;800&display=swap');
    // wp_enqueue_script('uikit_js', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js', array(), false, true);

}


add_action('wp_enqueue_scripts', 'add_enqueue_styles', 1);
