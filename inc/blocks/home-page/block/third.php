<?php
if(! defined("ABSPATH")) {
    exit;
}
class blockthird {
    public function __construct()
    {
        add_action("sinatra_before_main",array($this,'block'), 2);
    }
    function block()
    {
        ?>
        <style>
            .block-third {
                position: relative;
                padding-top: 5%;
                padding-bottom: 5%;
            }
            .block-third .block-third-container h2 {
                text-align: center;
                font-family: 'Montserrat', sans-serif;
            }
        </style>
        <section class="block-third">
            <div class="col-full">
                <div class="block-third-container">
                    <h2>third</h2>
                </div>
            </div>
        </section>
        <?php
    }
}
new blockthird();