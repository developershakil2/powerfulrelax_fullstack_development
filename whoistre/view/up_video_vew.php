<?php

$vid = new powerful();


if(isset($_GET['up_video'])){
  
    $id = $_GET['id'];
    if($_GET['up_video'] == "video"){
        
      $up_v =  $vid->up_video($id);
    }
}

if(isset($_POST['u_vid_sub'])){

  $upmes =   $vid->up_vid($_POST);
}



?>


<h2 class="text-center my-4">Update your Video</h2>
<?php if(isset( $upmes)) {echo  $upmes;} ?>

<div class="container m-auto mt-5">
<form action="" method="POST">
<input name="vid_up_id" value="<?php echo $up_v["id"]; ?>" type="hidden">
 <input type="text" style="color:#48b8b0; font-weight:bold;  height: 59px;" value="<?php echo  $up_v["vid_link"] ?>" name="u_vid_link" placeholder="add your video links" class="form-control my-4">
 <input type="text" style="color:#48b8b0; font-weight:bold;   height: 59px;" value="<?php echo  $up_v["vid_title"] ?>" name="u_vid_title" placeholder="write video title" class="form-control my-4">
 <input type="text" style="color:#48b8b0; font-weight:bold;   height: 59px;"value="<?php echo  $up_v["vid_des"] ?>" name="u_vid_des"placeholder="write video description" class="form-control my-4">
 <textarea  style="color:#48b8b0; font-weight:bold;   height: 200px;"  name="u_vid_tags" placeholder="add all tags" class="form-control my-4"><?php echo  $up_v["vid_tags"] ?></textarea>

 
 <input type="submit" name="u_vid_sub" style="color:#fff; font-weight:bold;   height: 59px;"  value="Update your video" class="form-control my-4">
</form>
</div>