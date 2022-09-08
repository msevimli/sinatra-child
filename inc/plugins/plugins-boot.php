<?php
if( ! defined ("ABSPATH")) {
    exit;
}
class ThemePlugins {
    public  function __construct() {
        define("plugins_root_uri",get_stylesheet_directory_uri()."/inc/plugins");
        add_action('admin_menu', array($this, 'init_admin_menu'));
    }
    function init_admin_menu()
    {
        add_menu_page('Customize', 'Customize', 'manage_options', 'plife-content-builder', array($this, 'menu_page_manage'), 'dashicons-admin-home', 6);
        //do_action("plife_admin_customize_menu");
    }
    function menu_page_manage(){
        echo "im in";
    }
}
new ThemePlugins();