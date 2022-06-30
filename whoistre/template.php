
<?php
include("class/function.php");
$vid = new powerful();



session_start();
$admin_id = $_SESSION['adminID'];

if($admin_id == null){
  header("location:index.php");
}

if(isset($_GET['adminlogout'])){
  if($_GET['adminlogout'] == 'logout'){
    $vid->adminlogout();
  }
}

?>


<?php include_once('./includes/head_template.php'); ?>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    

<?php include_once('./includes/sidebar_template.php'); ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <?php include_once('./includes/topnav_template.php'); ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <?php

            if($view == "dashboard"){
                include_once("view/dasboard_view.php");
            }elseif($view == "youtube"){
              include("view/youtube_view.php");
            }
            elseif($view == "youtube_manage"){
              include("view/manage_youtube_view.php");
            }elseif($view == "amazon"){
              include("view/amazon_view.php");
            }elseif($view == "manage_amazon"){
              include("view/manage_amazon_view.php");
            }elseif($view == "blog"){
              include("view/blog_view.php");
            }elseif($view == "manage_blog"){
              include("view/manage_blog_view.php");
            }elseif($view == "up_video"){
              include("view/up_video_vew.php");
            }elseif($view == "up_blog"){
              include("view/up_blog_view.php");
            }elseif($view == "up_am"){
              include("view/up_am_view.php");
            }elseif($view == "mess"){

              include("view/mes_view.php");
            }elseif($view == "manage_top6"){
              include("view/manage_top6vid_view.php");
            }elseif($view == "top6vid"){
              include("view/top6vid_view.php");
            }elseif($view == "left_vid"){
              include("top6/left_vid_vew.php");
            }elseif($view == "one_vid"){
              include("top6/one_vid_view.php");
            }elseif($view == "tow_vid"){
              include("top6/tow_vid_view.php");
            }elseif($view == "three_vid"){
              include("top6/three_vid_view.php");
            }elseif($view == "four_vid"){
              include("top6/four_vid_view.php");
            }elseif($view == "right_vid"){
              include("top6/right_vid_view.php");
            }elseif($view == "uleft"){
              include("view/u_left_view.php");
            }elseif($view == "uone"){
              include("view/u_one_view.php");
            }elseif($view == "utow"){
              include("view/u_tow_view.php");
            }elseif($view == "uthree"){
              include("view/u_three_view.php");
            }elseif($view == "ufour"){
              include("view/u_four_view.php");
            }elseif($view == "uright"){
              include("view/u_right_view.php");
            }
?>
            
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer style="width:100%; height:50px; display:none" class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © powerful relaxing Rain 2022</span>
             
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php include_once('./includes/script.php'); ?>