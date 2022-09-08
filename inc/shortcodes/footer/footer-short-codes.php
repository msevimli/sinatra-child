<?php
if (!defined("ABSPATH")) {
    exit;
}
class ShortCodesFooter
{
    public function __construct()
    {
        add_shortcode('follow-us-footer', array($this, 'follow_us_shortcode'));
        add_shortcode('contact-footer', array($this, 'contact_footer_shortcode'));
    }
    function follow_us_shortcode()
    { 
        ob_start();
        ?>
            <style>
                .footer-title.follow-us {
                    text-align: right;
                    padding-right: 5px;
                }
                .footer-title.follow-us::before {
                    float: unset;
                }
                .social-container {
                    display: grid;
                    display: -moz-grid;
                    display: -ms-grid;
                    grid-template-rows: auto auto;
                    -ms-grid-rows: auto auto;
                    text-align: right;
                }
                .social-container .social-row i {
                    font-size: 27px;
                    margin:5px;
                }
                .social-row i:hover {
                    cursor: pointer;
                }
            </style>
            <div class="social-container">
                <div class="social-row">
                    <i class="fa-brands fa-github"></i>
                    <i class="fa-brands fa-linkedin"></i>
                    <i class="fa-brands fa-youtube"></i>
                </div>
                <div class="social-row">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                </div>
            </div>
        <?php
        return ob_get_clean();
    }
    function contact_footer_shortcode()
    {
        ob_start();
        ?>
            <style>
                .contact-address,.contact-city {
                    margin: 0px;
                    padding-left: 25px;
                    color: white;
                }
                .footer-contact-row {
                    text-align: right;
                }
                .footer-contact-row i {
                    padding-right: 8px;
                    color: #6d6d6d;
                }
                .footer-title.contact 
                {
                    text-align: right;
                    padding-right: 5px;
                }
                .footer-title.contact::before {
                    float: unset;
                }
            </style>
            <div class="contact-footer">
                <div class="footer-contact-row">
                    <p class="contact-address"><i class="fa-solid fa-map-location-dot"></i>Fosievägen 0 214 31</p>
                    <p class="contact-city">Malmö - Sweden</p>
                </div>
                <br />
                <div class="footer-contact-row">
                    <i class="fa-solid fa-phone"></i>
                    <a href="tel:">+(46) 0 700 00 00</a>
                </div>
            </div>
        <?php
        return ob_get_clean();
    }
}
new ShortCodesFooter();
