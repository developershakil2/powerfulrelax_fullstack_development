  
  <?php 
 $vid_go = $vid->vid_get_dash();


?>
  
  
  <!-- Block 06: Product Tab-->
  <div class="product-tab z-index-20 sm-margin-top-62px xs-margin-top-80px">
                                    <div class="container">

                                        <div class="biolife-title-box biolife-title-box__icon-at-top-style  hidden-icon-on-mobile" style="margin:100px 0px;">
                                        
                                            <span class="subtitle">Relaxing rain sounds</span>
                                            <h3 class="main-title">Listen Rain sounds For Relax</h3>
                                        </div>

                                        <div class="biolife-tab biolife-tab-contain">
                                        
                                            <div class="tab-content">
                                                
                                            <div id="tab02_1st" class="tab-contain active">
                                                    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain"  dir="rtl" data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":300,"slidesMargin":10,"slidesToShow":4, "rtl": true, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>
                                                       
                                                    <?php while($vata = mysqli_fetch_assoc($vid_go)){ ?>
                                                    <li class="product-item">
                                                            <div class="contain-product layout-default">
                                                                <div class="product-thumb">
                                                                    <a href="single_video.php?vid=get&&id=<?php echo $vata['id'] ?>" class="link-to-product">
                                                                    <iframe  src="https://www.youtube.com/embed/<?php echo $vata['vid_link']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                               
                                                                    </a>
                                                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                                </div>
                                                                <div class="info">
                                                                    
                                                                    <h4 class="product-title"><a href="single_video.php?vid=get&&id=<?php echo $vata['id'] ?>" class="pr-name"><?php echo substr($vata['vid_title'],0,23), "..."; ?></a></h4>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                        </li>


                                                    <?php } ?>
                                                       
                                                       
                                                       
                                                        
                                                       
                                                       
                                                       
                                                        
                                                    </ul>
                                                </div>
                                            
                                            
                                            </div>
                                        </div>





                                    
                                    </div>
                                    
                    <div class="bottom_btn_wrapper">
                    <a id="bottom_youtube_powerful_relaxing_rain" href="https://youtube.com/powerfulrelaxingrain">Watch More Videos</a>

                    </div>
            </div>