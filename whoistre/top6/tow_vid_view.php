<?php 
$vid = new powerful();


if(isset($_POST['tow_vid'])){

    $vidTop = $vid->tow_vid($_POST);
}



?>




<h2 class="text-center my-4">Add left top video</h2>
<?php if(isset( $vidTop)) {echo  $vidTop;} ?>


<div class="container m-auto mt-5">
<form action="" method="POST"  enctype="multipart/form-data">

 <input type="text" style="color:#48b8b0; font-weight:bold;  height: 59px;" name="m_tow" placeholder="2nd video" class="form-control my-4">
 <input type="file" style="color:#48b8b0; font-weight:bold;   height: 59px;" name="m_tow_img" class="form-control my-4">

 
 <input type="submit" name="tow_vid" style="color:#fff; font-weight:bold;   height: 59px;"  value="add top 2nd" class="form-control my-4">
</form>
</div>