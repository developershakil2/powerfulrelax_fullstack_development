<?php 

$vid = new powerful();



if(isset($_POST['am_sub'])){
     
   $amm = $vid->amFun($_POST);

}



?>



<h2 class="text-center my-4">Add Amazon product</h2>
<?php if(isset($amm)) {echo $amm;} ?>


<div class="container m-auto mt-5">
<form action="" method="POST"  enctype="multipart/form-data">

 <input type="text" style="color:#48b8b0; font-weight:bold;  height: 59px;" name="am_price" placeholder="add amazon product price without $ sign" class="form-control my-4">

 <input type="text" style="color:#48b8b0; font-weight:bold;   height: 59px;" name="am_description" placeholder="add your amazon affiliate link" class="form-control my-4">
 
 <input type="text" style="color:#48b8b0; font-weight:bold;  height: 59px;" name="am_title" placeholder="write your amazon product title" class="form-control my-4">
 
 <input type="file" style="color:#48b8b0; font-weight:bold;   height: 59px;" name="am_img" class="form-control my-4">
 
 
 
 <input type="submit" name="am_sub" style="color:#fff; font-weight:bold;   height: 59px;"  value="add your amazon product" class="form-control my-4">
</form>
</div>