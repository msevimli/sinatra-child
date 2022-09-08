<?php
if(! defined("ABSPATH")) {
    exit;
}
class blockAfterMain {
    public function __construct()
    {
        add_action("sinatra_after_main",array($this,'block'), 1);
    }
    function block()
    {
        ?>
        <style>
            .block-after-main {
                position: relative;
                background-color: #1d2327f2;
                padding-top: 5%;
                padding-bottom: 5%;
            }
            .block-after-main .block-after-main-container h2 {
                color:white;
                text-align: center;
                font-family: 'Montserrat', sans-serif;
            }
        </style>
        <section class="block-after-main">
            <div class="col-full">
                <div class="block-after-main-container">
                    <h2>After Main.. </h2>
                </div>
            </div>
        </section>
        <?php
    }
}
new blockAfterMain();