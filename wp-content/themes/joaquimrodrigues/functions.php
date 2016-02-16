<?php
/**
 * functions and definitions

*/
add_theme_support( 'title-tag' );//Add title

function remove_menus(){
  remove_menu_page( 'edit-comments.php' );          //Comments
  remove_menu_page( 'themes.php' );                 //Appearance
  remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag'); //Tags
}
add_action( 'admin_menu', 'remove_menus' );

function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Portfólio Item';
    $submenu['edit.php'][5][0] = 'Portfólio Item';
    $submenu['edit.php'][10][0] = 'Adicionar Portfólio Item';
    $submenu['edit.php'][16][0] = 'Portfólio Item Tags';
    echo '';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Portfólio Item';
    $labels->singular_name = 'Portfólio Item';
    $labels->add_new = 'Adicionar Portfólio Item';
    $labels->add_new_item = 'Adicionar Portfólio Item';
    $labels->edit_item = 'Editar Portfólio Item';
    $labels->new_item = 'Portfólio Item';
    $labels->view_item = 'Ver Portfólio Item';
    $labels->search_items = 'Procurar Portfólio';
    $labels->not_found = 'Nenhum Portfólio Encontrato';
    $labels->not_found_in_trash = 'Nenhum Portfólio encontrado na lixeira';
    $labels->all_items = 'Todo Portfólio';
    $labels->menu_name = 'Portfólio Item';
    $labels->name_admin_bar = 'Portfólio Item';
}

add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );

remove_action('wp_head', 'wp_generator');
function wpbeginner_remove_version() {
return '';
}
add_filter('the_generator', 'wpbeginner_remove_version');
?>
