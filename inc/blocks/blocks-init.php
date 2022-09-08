<?php
if( ! defined("ABSPATH")) {
    exit;
}
class BlocksInitialize
{
    public function __construct()
    {
        define("block_root_uri",get_stylesheet_directory_uri()."/inc/blocks");
        add_action("wp",array($this,"blocks_home_page"));
    }

    function blocks_home_page()
    {
        if(is_front_page())
        {
            include_once "home-page/blocks-home-page.php";
        }
    }
   
}
new BlocksInitialize();