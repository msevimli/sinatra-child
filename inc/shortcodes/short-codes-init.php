<?php
if( ! defined("ABSPATH")) {
    exit;
}
class PlifeShortCodesInitialize
{
    public function __construct()
    {
        define("shortcodes_root_uri",get_stylesheet_directory_uri()."/inc/shortcodes");
        include_once "footer/footer-short-codes.php";
    }
  
}
new PlifeShortCodesInitialize();