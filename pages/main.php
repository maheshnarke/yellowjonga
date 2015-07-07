<?php
/**
 * Created by PhpStorm.
 * User: pradip
 * Date: 12-04-2015
 * Time: 20:52
 */

function pradip(){

    for($i=0;$i<10;$i++){
        echo '<div class="outer" style="float: left">
                <div class="topout">
                    <a>
                        <!-- <div class="left-top">#1</div> -->
                        <div class="left-bottom">
                            <span class="topouts1">One The house</span> <br>
                            <span class="topouts2">C Scheme</span>
                        </div>
                        <div class="right-top">
                            <span></span>
                        </div>
                        <!-- <div class="right-bottom"></div> -->
                        <img src="img/back1.jpg" alt="yellow"/>
                        <div class="down">
                            <span id="down1">E 145, Ramesh Marg, Behind Talwalkars, C Scheme, Jaipur</span><br>
                            <span id="down2">50% Sale..!<button type="button" name="click" value="1">Quote</button></span>
                            <span id="down3">Rating:<img src="img/3-Star.png" style="width: 40px;margin-bottom: 3px"></span>
                        </div>
                    </a>
                </div>
            </div>';
    }

}


?>