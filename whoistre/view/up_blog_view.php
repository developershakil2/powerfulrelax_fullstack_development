<?php
$vid = new powerful();

if(isset($_GET['up_blog'])){
    $id = $_GET['id'];
    if($_GET["up_blog"] == "update"){
       $blrec = $vid->up_blog($id);
    }
}

if(isset($_POST["u_blog_sub"])){
   $blups = $vid->blog_up_s($_POST);
}


?>


<h2 class="text-center my-4">Update Blog Post</h2>

<?php if(isset( $blups)){echo  $blups;} ?>

<div class="container m-auto mt-5">
<form action="" method="POST"  enctype="multipart/form-data">
<input type="hidden" name="bl_id" value="<?php echo $blrec['id'] ?>">
 <input type="text" style="color:#48b8b0; font-weight:bold;  height: 59px;" value="<?php echo $blrec['blog_title'] ?>" name="u_blog_title" placeholder="write your blog title" class="form-control my-4">
 <input type="text" style="color:#48b8b0; font-weight:bold;   height: 59px;" value="<?php echo $blrec["blog_description"]?>" name="u_blog_description" placeholder="write your blog description" class="form-control my-4">
 <input type="file" style="color:#48b8b0; font-weight:bold;   height: 59px;" name="u_blog_img" class="form-control my-4">
 
 
 
 <input type="submit" name="u_blog_sub" style="color:#fff; font-weight:bold;   height: 59px;"  value="update your Blog" class="form-control my-4">
</form>
</div>