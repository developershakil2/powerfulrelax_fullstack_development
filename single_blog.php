<?php
include("whoistre/class/function.php");
$vid = new powerful();


 $vid_gotted = $vid->getBlog2();



 if(isset($_GET['bloggi'])){
    if($_GET['bloggi'] == "get"){
        $id = $_GET['id'];

       $gotvid =  $vid->getBlo($id);
    }
 }
?>


<?php
include("includes/head.php");
?>
		<?php
include("includes/header.php");
?>
<div class="clear"></div>
<div class="video_title"style="margin:0px;">
    <h2 style="margin:0px;">BLOG BY <span style="color:#48b8b0;">TREVOR HECK</span> </h2>
</div>
        <section style="margin-top:-40px;" class="section">
				
					<div class="container-fluid row m-auto">
                        <div class="col-12 col-md-9 col-lg-9 col-xl-9">
                       
                            <img style="width:100%;height:450px;" src="whoistre/blog_img/<?php echo $gotvid['blog_img'] ?>" alt="">
                            <div class="mt-5 ">
                           <h5 style="font-size:20px;font-family:areal !important; letter-spacing:0px;"> <?php echo $gotvid['blog_description']?></h5>
                            <div style="visibility:hidden;"><?php echo $gotvid['id']?></div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 col-lg-3 col-xl-3 ">
                            <?php while($dao = mysqli_fetch_assoc($vid_gotted)) {  ?>
                           <a href="single_blog.php?bloggi=get&&id=<?php echo $dao['id'] ?>" class="row">
                           <div class="col-6">
                           
                                <img  style="width:100%;height:120px;" src="whoistre/blog_img/<?php echo $dao['blog_img'] ?>" alt="">
                            </div>
                            <div class="col-6">
                            <?php echo $dao['blog_title']?>
                                </div>
                           </a>
                             <?php } ?>
                        </div>
                       
					</div>
					
				</section>







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
