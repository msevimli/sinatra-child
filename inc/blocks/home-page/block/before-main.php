<?php
if(! defined("ABSPATH")) {
    exit;
}
class blockBeforeMain {
    public function __construct()
    {
        add_action("sinatra_before_main",array($this,'block'), 1);
    }
    function block()
    {
        ?>
        <style>
            .block-before-main {
                position: relative;
                background-color: #23282d;
                padding-top: 5%;
                padding-bottom: 5%;
            }
            .block-before-main .block-before-main-container h2 {
                color:white;
                text-align: center;
                font-family: 'Montserrat', sans-serif;
            }
        </style>
        <section class="block-before-main">
            <div class="col-full">
                <div class="block-before-main-container">
                    <h2>Before Main</h2>
                </div>
            </div>
        </section>
        <?php
    }
}
new blockBeforeMain();