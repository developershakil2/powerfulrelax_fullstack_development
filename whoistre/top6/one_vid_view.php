


<?php 
$vid = new powerful();


if(isset($_POST['left_vid'])){

    $vidTop = $vid->one_vid($_POST);
}



?>




<h2 class="text-center my-4">Add left top video</h2>
<?php if(isset( $vidTop)) {echo  $vidTop;} ?>


<div class="container m-auto mt-5">
<form action="" method="POST"  enctype="multipart/form-data">

 <input type="text" style="color:#48b8b0; font-weight:bold;  height: 59px;" name="m_one" placeholder="1st video" class="form-control my-4">
 <input type="file" style="color:#48b8b0; font-weight:bold;   height: 59px;" name="m_one_img" class="form-control my-4">

 
 <input type="submit" name="left_vid" style="color:#fff; font-weight:bold;   height: 59px;"  value="add top 1st" class="form-control my-4">
</form>
</div>