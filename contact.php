<?php

include("whoistre/class/function.php");
$vid = new powerful();


if(isset($_POST['form_sub'])){

    $formdata = $vid->formfunc($_POST);
}


?>






<?php
include("includes/head.php");
?>
		<?php
include("includes/header.php");
?>
<div class="clear"></div>







 <!-- Main content -->
 <div id="main-content" class="main-content">
           
            <div class="container">

                <div class="row">

                    <!--Contact info-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-info-container sm-margin-top-27px xs-margin-bottom-60px xs-margin-top-60px">
                       
                            <h4 class="box-title">Our Contact</h4>
                           
                            <p class="frst-desc" style="color:#111 !important; font-wight:bold !improtant;">if you have any question and any suggest or any spacial resaon then contact me </p>
                            <ul class="addr-info">
                                <li>
                                    <div class="if-item">
                                        <b class="tie" style="color:#111 !important; font-weight:bold !important; font-size:25px !important;"> Addess:</b>
                                        <p class="dsc" style="color:#111 !important; font-weight:bold !important;">  <span style="margin-left:40px !important;">Richmond, virginia</span></p>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="if-item">
                                        <b class="tie" style="color:#111 !important ; font-size:25px !important;">Email:</b>
                                        <p class="dsc"style="color:#111 !important; font-weight:bold !important;"> <span style="margin-left:40px !important"> info.trevorheck@gmail.com</span></p>
                                    </div>
                                </li>
                                
                            </ul>
                            <div class="biolife-social inline">
                                <ul class="socials">
                                    <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Contact form-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-form-container sm-margin-top-112px">
                        <h2 style="text-align:right;"><?php if(isset($formdata)) {echo $formdata;}?></h2>
                            <form action="#" name="frm-contact" method="POST">
                                <p class="form-row">
                                    <input type="text" name="your_name" value="" placeholder="Your Name" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <input type="email" name="your_email" value="" placeholder="Email Address" class="txt-input">
                                </p>
                               
                                <p class="form-row">
                                    <textarea name="text_area" id="mes-1" cols="30" rows="9" placeholder="Leave Message"></textarea>
                                </p>
                                <p class="form-row">
                                    <button class="btn btn-submit" type="submit" name="form_sub">send message</button>
                                </p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>








    <div class="instagram-inline-wrap">
                    <ul class="biolife-carousel nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":0,"slidesToShow":6, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 5}},{"breakpoint":992, "settings":{ "slidesToShow": 4}},{"breakpoint":768, "settings":{ "slidesToShow": 3}},{"breakpoint":600, "settings":{ "slidesToShow": 3, "rows": 2}}]}'>
                        <li>
                            <div class="instagram-ltl-item">
                                <a href="https://youtube.com/powerfulrelaxingrain" class="link-to">
                                    <span class="show-on-hover biolife-icon icon-capacity-about"></span>
                                    <img src="assets/images/home-02/instag-inline-01.jpg" width="320" height="320" alt="">
                                </a>
                            </div>
                        </li>
                        <li>
                        <div class="instagram-ltl-item">
                                <a href="https://facebook.com/powerfulrelaxingrain" class="link-to">
                                    <span class="show-on-hover biolife-icon icon-green-safety"></span>
                                    <img src="assets/images/home-02/instag-inline-03.jpg" width="320" height="320" alt="">
                                </a>
                            </div>
                            
                        </li>
                        <li> <div class="instagram-ltl-item">
                                <a href="https://twitter.com/powerfulrelax" class="link-to">
                                    <span class="show-on-hover biolife-icon icon-healthy-about"></span>
                                    <img src="assets/images/home-02/instag-inline-04.jpg" width="320" height="320" alt="">
                                </a>
                            </div>


                        
                        </li>
                        <li>
                        <div class="instagram-ltl-item">
                                <a href="https://instagram.com/powerfulrelaxingrain" class="link-to">
                                    <span class="show-on-hover biolife-icon icon-fresh-drink"></span>
                                    <img src="assets/images/home-02/instag-inline-02.jpg" width="320" height="320" alt="">
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="instagram-ltl-item">
                                <a href="https://pinterest.com/powerfulrelaxingrain" class="link-to">
                                    <span class="show-on-hover biolife-icon icon-honey"></span>
                                    <img src="assets/images/home-02/instag-inline-05.jpg" width="320" height="320" alt="">
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="instagram-ltl-item">
                                <a href="https://tiktok.com/powerfulrelaxingrain" class="link-to">
                                    <span class="show-on-hover biolife-icon icon-fruits"></span>
                                    <img src="assets/images/home-02/instag-inline-06.jpg" width="320" height="320" alt="">
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="instagram-ltl-item">
                                <a href="https://discord.com/users/powerfulrelaxingrain" class="link-to">
                                    <span class="show-on-hover biolife-icon icon-broccoli-1"></span>
                                    <img src="assets/images/home-02/instag-inline-07.jpg" width="320" height="320" alt="">
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="instagram-ltl-item">
                                <a href="https://www.reddit.com/user/powerfulrelaxingrain" class="link-to">
                                    <span class="show-on-hover biolife-icon icon-grape"></span>
                                    <img src="assets/images/home-02/instag-inline-08.jpg" width="320" height="320" alt="">
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="instagram-ltl-item">
                                <a href="https://linkedin.com/in/powerfulrelaxingrain" class="link-to">
                                    <span class="show-on-hover biolife-icon icon-avocado"></span>
                                    <img src="assets/images/home-02/instag-inline-09.jpg" width="320" height="320" alt="">
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="instagram-ltl-item">
                                <a href="https://rumble.com/account/powerfulrelaxingrain" class="link-to">
                                    <span class="show-on-hover biolife-icon icon-fresh-juice"></span>
                                    <img src="assets/images/home-02/instag-inline-10.jpg" width="320" height="320" alt="">
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

<?php
include("includes/script.php");
?>
 <?php
include("includes/subblock.php");
           ?>
<?php
include("includes/footer.php");
?>
