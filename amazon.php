
<?php

include("whoistre/class/function.php");
$vid = new powerful();

  $am_dat = $vid->getamProduct1();

?>








<?php
include("includes/head.php");
?>
		<?php
include("includes/header.php");
?>
<div class="clear"></div>









<div class="video_title">
    <h2> AMAZON PRODUCTS</h2>
    <h3>POWERFUL RELAXING RAIN AMAZON PRODUCTS</h3>
</div>









<div class="tab-content">
                    <div class="tab-pane p-0 fade show active" >
                        <div class="products">
                            <div class="row justify-content-center">
                               
                             <?php while($am_data = mysqli_fetch_assoc( $am_dat)) {?>
                            <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-11 mt-v3 text-center">
                                        <figure class="product-media">
                                            <a href="<?php echo $am_data['am_description'] ?>">
                                                <img style="width:100%;height:216px;" src="whoistre/amazon_img/<?php echo $am_data['am_img'] ?>" alt="Product image" class="product-image">
                                               
                                            </a>

                                            <div class="product-action-vertical">
                                                
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body" style="    text-align: left;">
                                            <h3 class="product-title"><a href="<?php echo $am_data['am_description'] ?>"><?php echo substr($am_data['am_title'],0,40), "..." ;?></a></h3><!-- End .product-title -->
                                            <div class="product-price" style="margin-top:-8px; margin-bottom:5px;">
                                          <h3 style="color:#888">  $<?php echo $am_data['am_price'] ?></h3>
                                            </div><!-- End .product-price -->

                                            <div class="product-nav product-nav-dots">
                                               
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                        <div class="product-action" style="    text-align: left;">
                                            <a href="<?php echo $am_data['am_description'] ?>" class="btn-product btn-cart" style="font-weight: bold; color: #fff; background: #46b8b0; padding: 9px 29px; border-radius: 10px;"><span>Buy Now</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                                 <?php } ?>

                            </div><!-- End .row -->
                        </div><!-- End .products -->





































                        <div class="instagram-inline-wrap" style="margin-top:200px">
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
