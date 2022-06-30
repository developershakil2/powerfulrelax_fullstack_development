  
  <?php

$blp = $vid->getBlog();





  ?>
  
  
  <!-- Block 07: Blog posts-->
   <div class="blog-posts background-fafafa sm-margin-top-33px sm-padding-top-75px sm-padding-bottom-80px xs-margin-top-30px xs-padding-top-30px xs-padding-bottom-50px">
                <div class="container">
                    <div class="biolife-title-box biolife-title-box__bold-center">
                        <i class="subtitle">The freshest and most exciting news</i>
                        <h3 class="main-title">Our Latest Articles</h3>
                    </div>
                    <ul class="biolife-carousel nav-center xs-margin-top-34px nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":3, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 2}},{"breakpoint":768, "settings":{ "slidesToShow": 2}},{"breakpoint":600, "settings":{ "slidesToShow": 1}}]}'>
                       
                    <?php  while($bldata = mysqli_fetch_assoc($blp)) {?>
                    
                    <li>
                            <div class="post-item effect-01 style-bottom-info layout-03">
                                <div class="thumbnail">
                                    <a href="single_blog.php?bloggi=get&&id=<?php echo $bldata['id'] ?>" class="link-to-post"><img src="whoistre/blog_img/<?php echo $bldata["blog_img"] ?>" style="width:370px; height:270px;" alt=""></a>
                                
                                </div>
                                <div class="post-content">
                                    <h4 class="post-name"><a href="single_blog.php?bloggi=get&&id=<?php echo $bldata['id'] ?>" class="linktopost"><?php echo $bldata['blog_title']  ?></a></h4>
                                    <div class="post-meta">
                                        <p class="post-meta__item author"> <a href="single_blog.php?bloggi=get&&id=<?php echo $bldata['id'] ?>"  class="link-to-author">Posted By: Trevor Heck</a></p>
                                        
                                    </div>
                                   
                                    <div class="group-buttons">
                                        <a href="single_blog.php?bloggi=get&&id=<?php echo $bldata['id'] ?>" class="btn readmore">continue reading</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                      <?php } ?>
















                       
                          
                        
                        
                    </ul>
                </div>
            </div>
