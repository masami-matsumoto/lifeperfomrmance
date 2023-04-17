<?php
function add_stylesheet() {
  wp_enqueue_style( 'my_style', get_template_directory_uri() . '/assets/css/style.css', array() );
  wp_enqueue_style( 'my_style', get_template_directory_uri() . '/assets/css/normalize.css', array() );
}
add_action('wp_enqueue_scripts','add_stylesheet');

function add_script(){
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'my_script', get_template_directory_uri() . '/assets/js/script.js',array('jquery'));
  wp_enqueue_script( 'about_script', get_template_directory_uri() . '/assets/js/about.js',array('jquery'));
}
add_action('wp_enqueue_scripts','add_script');

//ヘッダー、フッターのカスタムメニュー化
register_nav_menus(
array(
'place_global' => 'グローバル',
'place_footer' => 'フッターナビ',
)
);
//ヘッダー、フッターの説明追加化
add_theme_support( 'menus' );
if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
          'place_global' => 'Header Menu',
        )
    );
}
function prefix_nav_description( $item_output, $item, $depth, $args ) {
 if ( !empty( $item->description ) ) {
 $item_output = str_replace( '">' . $args->link_before . $item->title, '">' . $args->link_before . '<strong>' . $item->title . '</strong>' . '<span class="menu-item-description">' . $item->description . '</span>' , $item_output );
 }
 return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 4 );