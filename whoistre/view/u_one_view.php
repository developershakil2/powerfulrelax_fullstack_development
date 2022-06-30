


<?php 
$vid = new powerful();


if(isset($_POST['u_one_vid'])){

    $vidTop = $vid->u_one_vid($_POST);
}



if(isset($_GET["one"])){
    if($_GET['one'] == "update"){
       $id = $_GET['id'];
     $uleft =  $vid->u_one($id);
    }
 }
 
 


?>




<h2 class="text-center my-4">update left top video</h2>
<?php if(isset( $vidTop)) {echo  $vidTop;} ?>


<div class="container m-auto mt-5">
<form action="" method="POST"  enctype="multipart/form-data">
<input type="hidden" name="hid" value="<?php echo $uleft['id'] ?>">
 <input type="text" style="color:#48b8b0; font-weight:bold;  height: 59px;" value="<?php echo $uleft['m_one_vid'] ?>" name="u_m_one" placeholder="left video" class="form-control my-4">
 <input type="file" style="color:#48b8b0; font-weight:bold;   height: 59px;" name="u_m_one_img" class="form-control my-4">

 
 <input type="submit" name="u_one_vid" style="color:#fff; font-weight:bold;   height: 59px;"  value="add top left video" class="form-control my-4">
</form>
</div>