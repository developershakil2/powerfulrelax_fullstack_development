
<?php

$vid = new powerful();



if(isset($_POST['blog_sub'])){

 $bmes = $vid->addBlog($_POST);
}





 



?>







<h2 class="text-center my-4">Add A Blog</h2>
<?php if(isset($bmes)) {echo $bmes;} ?>


<div class="container m-auto mt-5">
<form action="" method="POST"  enctype="multipart/form-data">

 <input type="text" style="color:#48b8b0; font-weight:bold;  height: 59px;" name="blog_title" placeholder="write your blog title" class="form-control my-4">
 <input type="text" style="color:#48b8b0; font-weight:bold;   height: 59px;" name="blog_description" placeholder="write your blog description" class="form-control my-4">
 <input type="file" style="color:#48b8b0; font-weight:bold;   height: 59px;" name="blog_img" class="form-control my-4">
 
 
 
 <input type="submit" name="blog_sub" style="color:#fff; font-weight:bold;   height: 59px;"  value="Add your Blog" class="form-control my-4">
</form>
</div>