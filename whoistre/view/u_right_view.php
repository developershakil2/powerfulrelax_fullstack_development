


<?php 
$vid = new powerful();


if(isset($_POST['u_right_vid'])){

    $vidTop = $vid->u_right_vid($_POST);
}



if(isset($_GET["right"])){
    if($_GET['right'] == "update"){
       $id = $_GET['id'];
     $uleft =  $vid->u_right($id);
    }
 }
 
 


?>




<h2 class="text-center my-4">update left top video</h2>
<?php if(isset( $vidTop)) {echo  $vidTop;} ?>


<div class="container m-auto mt-5">
<form action="" method="POST"  enctype="multipart/form-data">
<input type="hidden" name="hid" value="<?php echo $uleft['id'] ?>">
 <input type="text" style="color:#48b8b0; font-weight:bold;  height: 59px;" value="<?php echo $uleft['m_right'] ?>" name="u_m_right" placeholder="right video" class="form-control my-4">
 <input type="file" style="color:#48b8b0; font-weight:bold;   height: 59px;" name="u_m_right_img" class="form-control my-4">

 
 <input type="submit" name="u_right_vid" style="color:#fff; font-weight:bold;   height: 59px;"  value="add top left video" class="form-control my-4">
</form>
</div>