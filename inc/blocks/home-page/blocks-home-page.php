<?php
if(! defined("ABSPATH")) {
    exit;
}
class BlocksHomePage {
    public function  __construct() {
        add_action( 'wp_enqueue_scripts', array($this,'required_scripts'));
        #define("block_root_uri",get_stylesheet_directory_uri().'/inc/blocks');
        include_once "block/before-main.php";
        include_once "block/third.php";
        include_once "block/after-main.php";

    }
    function required_scripts()
    {
        #wp_register_script('home-page-block-init', block_root_uri ."/home-page/assets/js/home-page-init.js", array ('jquery'),'1.0.0', false);
        #wp_localize_script( 'home-page-block-init', 'arg', array( 'is_mobile' => wp_is_mobile())); 
        #wp_enqueue_script('home-page-block-init');
    }
}
new BlocksHomePage();