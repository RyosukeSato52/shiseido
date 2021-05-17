<?php
function webst8_setup() {
   //ここに関数の中身を記述します。
    add_theme_support( 'post-thumbnails' ); //アイキャッチ画像をON
    add_theme_support('menus');
}
add_action( 'after_setup_theme', 'webst8_setup' );
//after_setup_themeアクションフック※に登録します。
function custom_excerpt_length( $length ) {
    return 50; 
}       
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
?>