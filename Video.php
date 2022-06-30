<?php
include("whoistre/class/function.php");
$vid = new powerful();


 $vid_gotted = $vid->vid_get_dash();


?>


<?php
include("includes/head.php");
?>
		<?php
include("includes/header.php");
?>
<div class="clear"></div>
<div class="video_title">
    <h2>WATCH RELAXING VIDEO </h2>
    <h3>POWERFUL RELAXING RAIN BEST YOUTUBE CHANNEL</h3>
</div>
        <section class="section section-demos text-center container-lg">
				
					<div class="row demos">
					<?php   while($v_data = mysqli_fetch_assoc( $vid_gotted )){ ?>
						<div class="iso-item col-sm-6 col-md-4 col-lg-3 homepages">
							<a href="single_video.php?vid=get&&id=<?php echo $v_data['id'] ?>" target="_blank">
                            <iframe  src="https://www.youtube.com/embed/<?php echo $v_data['vid_link']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                               
                             <h5> <?php echo $v_data['vid_title']?></h5>  
							</a>
						</div>



						<?php } ?>


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
