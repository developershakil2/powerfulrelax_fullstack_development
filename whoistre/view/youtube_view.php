<?php

$vid = new powerful();


if(isset($_POST['vid_sub'])){

 $vid_mes =    $vid->vid_add($_POST);

}




?>



<h2 class="text-center my-4">Add YouTUbe Video</h2>

<?php if(isset( $vid_mes)){ echo " $vid_mes"; }?>

<div class="container m-auto mt-5">
<form action="" method="POST">

 <input type="text" style="color:#48b8b0; font-weight:bold;  height: 59px;" name="vid_link" placeholder="add your video links" class="form-control my-4">
 <input type="text" style="color:#48b8b0; font-weight:bold;   height: 59px;" name="vid_title" placeholder="write video title" class="form-control my-4">
 <input type="text" style="color:#48b8b0; font-weight:bold;   height: 59px;" name="vid_des"placeholder="write video description" class="form-control my-4">
 <textarea  style="color:#48b8b0; font-weight:bold;   height: 200px;" name="vid_tags" placeholder="add all tags" class="form-control my-4"></textarea>

 
 <input type="submit" name="vid_sub" style="color:#fff; font-weight:bold;   height: 59px;"  value="submit your video form" class="form-control my-4">
</form>
</div>