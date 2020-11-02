<?php
//  remove admin menu items 
if (!function_exists('remove_admin_page')) {
    function remove_admin_page($needle)
    {
        if (isset($GLOBALS['menu']) && !empty($GLOBALS['menu']) && !empty($needle)) {

            $needle = strtolower($needle);
            $needle = trim($needle);

            foreach ($GLOBALS['menu'] as $position => $items) {
                foreach ($items as $key => $item) {
                    if (strtolower($item) == $needle) {
                        remove_menu_page($items[2]);
                    }
                }
            }
        }
    }
};

// function contain the desired plugins 
function check_and_remove_menu_pages()
{
    // Default Wordpress Items
    remove_admin_page('edit-comments.php');                              // Comments
    // remove_admin_page('plugins.php');                              // plugins

}

add_action('admin_init', 'check_and_remove_menu_pages', 99999999999999999);
add_action('admin_menu', 'check_and_remove_menu_pages', 99999999999999999);
