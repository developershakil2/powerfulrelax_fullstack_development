<?php

include("whoistre/class/function.php");
$vid = new powerful();


 $blogget = $vid->getBlog();
 $blogget2 = $vid->getBlog2();

?>




<?php
include("includes/head.php");
?>
		<?php
include("includes/header.php");
?>
<div class="clear"></div>




   <!--Hero Section-->
   <div class="hero-section hero-background style-02">
       
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="index-2.html" class="permal-link">Home</a></li>
                <li class="nav-item"><span class="current-page">Our Blog</span></li>
            </ul>
        </nav>
    </div>

    <!-- Page Contain -->
    <div class="page-contain blog-page left-sidebar">
        <div class="container">
            <div class="row">

                <!-- Main content -->
                <div id="main-content" class="main-content col-lg-9 col-md-8 col-sm-12 col-xs-12">

                    <ul class="posts-list main-post-list">
                        <?php while($bdat = mysqli_fetch_assoc($blogget)) { ?>
                        <li class="post-elem">
                            <div class="post-item style-left-info">
                                <div class="thumbnail">
                                    <a href="single_blog.php?bloggi=get&&id=<?php echo $bdat['id'] ?>"  class="link-to-post"><img src="whoistre/blog_img/<?php echo $bdat['blog_img'] ?>" style="width:370px; height:270px;" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <h4 class="post-name"><a href="single_blog.php?bloggi=get&&id=<?php echo $bdat['id'] ?>"  class="linktopost"><?php echo substr($bdat['blog_title'],0, 100), "..." ?></a></h4>
                                    <p class="post-archive"><span class="author">Posted By: Trevor Heck</span></p>
                                    <p class="excerpt" style="color:#111 !important; font-weight:bold !important;"><?php echo substr($bdat['blog_description'],0,50), "..." ?></p>
                                    <div class="group-buttons">
                                        <a href="single_blog.php?bloggi=get&&id=<?php echo $bdat['id'] ?>" class="btn readmore">read more</a>
                                      
                                    </div>
                                </div>
                            </div>
                        </li>
                       
                      <?php } ?>
                       
                    </ul>

                    <div class="biolife-panigations-block ">
                        <ul class="panigation-contain">
                            <li><span class="current-page">1</span></li>
                            <li><a href="#" class="link-page">2</a></li>
                            <li><a href="#" class="link-page">3</a></li>
                            <li><span class="sep">....</span></li>
                            <li><a href="#" class="link-page">20</a></li>
                            <li><a href="#" class="link-page next"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>

                </div>

                <!-- Sidebar -->
                <aside id="sidebar" class="sidebar blog-sidebar col-lg-3 col-md-4 col-sm-12 col-xs-12">

                    <div class="biolife-mobile-panels">
                        <span class="biolife-current-panel-title">Sidebar</span>
                        <a class="biolife-close-btn" href="#" data-object="open-mobile-filter">&times;</a>
                    </div>

                    <div class="sidebar-contain">

                        <!--Search Widget-->
                        <!-- <div class="widget search-widget">
                            <div class="wgt-content">
                                <form action="#" name="frm-search" method="get" class="frm-search">
                                    <input type="text" name="s" value="" placeholder="SEARCH..." class="input-text">
                                    <button type="submit" name="ok"><i class="biolife-icon icon-search"></i></button>
                                </form>
                            </div>
                        </div> -->

                       
                        <!--Posts Widget-->
                        <div class="widget posts-widget">
                            <h4 class="wgt-title">Recent post</h4>
                            <div class="wgt-content">
                                <ul class="posts">

                                <?php  while($bl2 = mysqli_fetch_assoc( $blogget2)){?>
                                    <li>
                                        <div class="wgt-post-item">
                                            <div class="thumb">
                                                <a href="single_blog.php?bloggi=get&&id=<?php echo $bl2['id'] ?>" ><img src="whoistre/blog_img/<?php echo $bl2['blog_img']?>"  style="width:80px; height:58px;" alt=""></a>
                                            </div>
                                            <div class="detail">
                                                <h4 class="post-name"><a href="#"><?php echo substr($bl2['blog_title'],0,16), "..." ?></a></h4>
                                                <p class="post-archive" style="color:#111 !important; font-size:9px;">Posted By : Trevor Heck</p>
                                            </div>
                                        </div>
                                    </li>
                                   <?php } ?>
                                    
                                </ul>
                            </div>
                        </div>

                      

                    </div>
                </aside>
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
