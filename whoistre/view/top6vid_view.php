
<?php 
$vid = new powerful();


if(isset($_POST['top_six'])){

    $vidTop = $vid->topsix($_POST);
}



?>




<h2 class="text-center my-4">Add top 6 video</h2>
<?php if(isset( $vidTop)) {echo  $vidTop;} ?>


<div class="container m-auto mt-5">
<form action="" method="POST"  enctype="multipart/form-data">

 <input type="text" style="color:#48b8b0; font-weight:bold;  height: 59px;" name="m_left" placeholder="left" class="form-control my-4">
 <input type="file" style="color:#48b8b0; font-weight:bold;   height: 59px;" name="m_left_img" class="form-control my-4">

 <input type="text" style="color:#48b8b0; font-weight:bold;   height: 59px;" name="m_one" placeholder="one" class="form-control my-4">
 <input type="file" style="color:#48b8b0; font-weight:bold;   height: 59px;" name="m_one_img" class="form-control my-4">
 
 <input type="text" style="color:#48b8b0; font-weight:bold;  height: 59px;" name="m_tow" placeholder="tow" class="form-control my-4">
 <input type="file" style="color:#48b8b0; font-weight:bold;   height: 59px;" name="m_tow_img" class="form-control my-4">
 
 <input type="text" style="color:#48b8b0; font-weight:bold;  height: 59px;" name="m_three" placeholder="three" class="form-control my-4">
 <input type="file" style="color:#48b8b0; font-weight:bold;   height: 59px;" name="m_three_img" class="form-control my-4">
 
 <input type="text" style="color:#48b8b0; font-weight:bold;  height: 59px;" name="m_four" placeholder="four" class="form-control my-4">
 <input type="file" style="color:#48b8b0; font-weight:bold;   height: 59px;" name="m_four_img" class="form-control my-4">
 
 <input type="text" style="color:#48b8b0; font-weight:bold;  height: 59px;" name="m_right" placeholder="right" class="form-control my-4">
 <input type="file" style="color:#48b8b0; font-weight:bold;   height: 59px;" name="m_right_img" class="form-control my-4">
 
 <input type="submit" name="top_six" style="color:#fff; font-weight:bold;   height: 59px;"  value="add top 6" class="form-control my-4">
</form>
</div>