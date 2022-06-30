<?php
$vid = new powerful();


if(isset($_GET["upam"])){
  

    if($_GET["upam"] == "update"){
        $id = $_GET["id"];
      $getam = $vid->up_am($id);
    }
}


if(isset($_POST["u_am_sub"])){
  $mus  =  $vid->up_am_s($_POST);
}

?>

<h2 class="text-center my-4">update Amazon product</h2>

<?php if(isset($mus)){echo   $mus; }?>

<div class="container m-auto mt-5">
<form action="" method="POST"  enctype="multipart/form-data">

<input type="hidden" name="idd" value="<?php echo $getam['id'] ?>">
 <input type="text" style="color:#48b8b0; font-weight:bold;  height: 59px;" value="<?php echo  $getam['am_price'] ?>" name="u_am_price" placeholder="add amazon product price without $ sign" class="form-control my-4">
 <input type="text" style="color:#48b8b0; font-weight:bold;  height: 59px;"  value="<?php echo $getam['am_title'] ?>" name="u_am_title" placeholder="write your amazon product title" class="form-control my-4">
 
 <input type="text" style="color:#48b8b0; font-weight:bold;   height: 59px;"  value="<?php echo $getam['am_description'] ?>" name="u_am_description" placeholder="write your amazon product description" class="form-control my-4">
 <input type="file" style="color:#48b8b0; font-weight:bold;   height: 59px;"   name="u_am_img" class="form-control my-4">
 
 
 
 <input type="submit" name="u_am_sub" style="color:#fff; font-weight:bold;   height: 59px;"  value="update your amazon product" class="form-control my-4">
</form>
</div>