   <!-- Block 03: Product Tab-->
   <div class="product-tab z-index-20 sm-margin-top-61px xs-margin-top-80px">
                <div class="container">

                    <div style="padding:45px" class="biolife-title-box biolife-title-box__icon-at-top-style hidden-icon-on-mobile">
                   
                        <span class="subtitle">Relaxing soft Rain Sounds for you</span>
                        <h3 class="main-title">Soft Rain Sounds</h3>
                    </div>

                  
                        <div class="tab-content">
                            
                     
                            <div id="tab01_5th" class="tab-contain ">
                                <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":30}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "rows":2 ,"slidesMargin":15}}]}'>
                                   
                                
                                <?php while($vdata = mysqli_fetch_assoc($vid_gotted)){ ?>
                                
                                <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="single_video.php?vid=get&&id=<?php echo $vdata['id'] ?>" class="link-to-product">
                                                <iframe  src="https://www.youtube.com/embed/<?php echo $vdata['vid_link'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                               
                                                </a>
                                                
                                            </div>
                                            <div class="inf">
                                                
                                                <h4 class="product-title"><a href="single_video.php?vid=get&&id=<?php echo $vdata['id'] ?>" class="pr-name"><?php echo substr($vdata['vid_title'],0,26), "..."; ?> </a></h4>
                                                
                                                
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
