<?php 
function add_image(){
    //Add featured image support
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'add_image');

//Change menu visual content 
function customize_post_admin_menu_labels() {
    global $menu;
    global $submenu;
    global $menu_icon;
    $menu[2][0] = '<b style="color: #434B50">Kokpit</b>';
    $menu[2][6] = 'dashicons-dashboard';
    $menu[2][0] = '<b style="color: #434B50">Kokpit</b>';
    $menu[5][0] = '<b style="color: #434B50">Posty</b>';
    $menu[10][0] = '<b style="color: #434B50">Media</b>';
    $menu[20][0] = '<b style="color: #434B50">Strony</b>';
    $menu[25][0] = '<b style="color: #434B50">Komentarze</b>';
    $menu[60][0] = '<b style="color: #434B50">Wygląd</b>';
    $menu[65][0] = '<b style="color: #434B50">Wtyczki</b>';
    $menu[70][0] = '<b style="color: #434B50">Użytkownicy</b>';
    $menu[75][0] = '<b style="color: #434B50">Narzędzia</b>';
    $menu[80][0] = '<b style="color: #434B50">Ustawienia</b>';
    $menu['80.025'][0] = '<b style="color: #434B50">Własne Pola</b>';
    $menu[100][0] = '<b style="color: #434B50">Limit Login Attempts</b>';
    }
    add_action( 'admin_menu', 'customize_post_admin_menu_labels' );

//Add ACF
if(function_exists('acf_add_options_page')){
    acf_add_options_page(
        array(
            'page_title' => 'Slider',
            'menu_title' => 'Slider',
            'menu_slug' => 'slider',
            'capability' => 'edit_posts',
            'icon_url' => 'dashicons-slides',
        )
    );     
    acf_add_options_page(
        array(
            'page_title' => 'O firmie',
            'menu_title' => 'O firmie',
            'menu_slug' => 'ofirmie',
            'capability' => 'edit_posts',
            'icon_url' => 'dashicons-admin-page',
        )
    );        
    acf_add_options_page(
        array(
            'page_title' => 'Galeria',
            'menu_title' => 'Galeria',
            'menu_slug' => 'galeria',
            'capability' => 'edit_posts',
            'icon_url' => 'dashicons-buddicons-replies',
        )
    );      
    acf_add_options_page(
        array(
            'page_title' => 'Obszar działania',
            'menu_title' => 'Obszar działania',
            'menu_slug' => 'obszardzialania',
            'capability' => 'edit_posts',
            'icon_url' => 'dashicons-admin-site',
        )
    );        
    acf_add_options_page(
        array(
            'page_title' => 'Stopka',
            'menu_title' => 'Stopka',
            'menu_slug' => 'klienci',
            'capability' => 'edit_posts',
            'icon_url' => 'dashicons-arrow-down-alt2',
        )
    );             
}