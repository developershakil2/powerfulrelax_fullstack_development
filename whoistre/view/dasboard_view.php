
        <?php 
        $vid = new powerful();

        $das = $vid->vid_get_dash();

       $bl2 = $vid->getBlog2();


        ?>
            <div class="row">
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>contact Form</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">All Messege</h2>
                         
                        </div>
                       
                      </div>
                      
                    </div>
                  </div>
                  <div class="badge badge-outline-warning"><a class="badge badge-outline-warning" href="mes.php">Check All Messege from contact form</a></div>
                      
                </div>
              </div>
           
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>amazon product</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">Manage</h2>
                         
                        </div>
                       
                      </div>
                      
                    </div>
                  </div>
                  <div class="badge badge-outline-warning"><a class="badge badge-outline-warning" href="manage_amazon.php">Manage amazon product</a></div>
                  
                </div>
              </div>




              

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Blog Post</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">Add a Blog</h2>
                         
                        </div>
                       
                      </div>
                      
                    </div>
                  </div>
                  <div class="badge badge-outline-warning"><a class="badge badge-outline-warning" href="blog.php">add your Blog post</a></div>
                      
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Blog Post</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">Manage</h2>
                         
                        </div>
                       
                      </div>
                      
                    </div>
                  </div>
                  <div class="badge badge-outline-warning"><a class="badge badge-outline-warning" href="manage_blog.php">manage your blog posts</a></div>
                         
                </div>
              </div>
           
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>youTube</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">Add Video</h2>
                         
                        </div>
                       
                      </div>
                      
                    </div>
                  </div>
                  <div class="badge ing"><a class="badge badge-outline-warning" href="youtube.php">Add your video</a></div>
                      
                </div>
              </div>

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>YouTube</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">Manage Video</h2>
                         
                        </div>
                       
                      </div>
                      
                    </div>
                   
                  </div>
                  <div class="badge badge-outline-warning"><a class="badge badge-outline-warning" href="manage_youtube.php">Manage your YouTube Videos</a></div>
                      
                </div>
              </div>



              
            </div>




            <div class="row">
              <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body" style="overflow-y:scroll !important; height:350px !important;">
                    <div class="d-flex flex-row justify-content-between" >
                      <h4 class="card-title">Recent video </h4>
                     
                    </div>
                    <div class="preview-list" >
                      
                    
                     <?php while($dat = mysqli_fetch_assoc($das)) {?>
                     <div class="preview-item border-bottom">
                        
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                              <h6 class="preview-subject"><?php echo substr($dat['vid_title'],0,40), ".."; ?></h6>
                             
                            </div>
                            
                          </div>
                        </div>
                      </div>

                      <?php } ?>
                      
                     
                     
                    </div>


                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4 grid-margin stretch-card" style="overflow-y:scropll">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Recent blogs</h4>
                    <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
                    <?php while($dati = mysqli_fetch_assoc($bl2) ){?>
                    <div class="item">
                       
                        <img style="width:100%; height:250px;" src="blog_img/<?php echo $dati['blog_img']?>" alt="">
                      </div>
                       <?php } ?>
                    </div>
                    <div class="d-flex py-4">
                      <div class="preview-list w-100">
                        <div class="preview-item p-0">
                          
                          <div class="preview-item-content d-flex flex-grow">
                            <div class="flex-grow">
                             
                             
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                   
                   
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-xl-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body" style="overflow-y:scroll !important; height:350px !important;">
                    <h4 class="card-title">To do list</h4>
                    <div class="add-items d-flex">
                      <input type="text" class="form-control todo-list-input" placeholder="enter task..">
                      <button class="add btn btn-primary todo-list-add-btn">Add</button>
                    </div>
                    <div class="list-wrapper">
                      <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                        <li>
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox"> testing 1 </label>
                          </div>
                          <i class="remove mdi mdi-close-box"></i>
                        </li>
                        
                        <li class="completed">
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox" checked> testing 2</label>
                          </div>
                          <i class="remove mdi mdi-close-box"></i>
                        </li>
                       
                        
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          