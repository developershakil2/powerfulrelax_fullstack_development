<?php



if(isset($_GET['update_explor'])){
    if($_GET['update_explor']=='update'){
        $id= $_GET['id'];
      $exrec =  $object->select_explor($id);
    }
}

if(isset($_POST["explor_btn1"])){
 $object->explor_function1($_POST);
 }
 

?>





<h2 class="text-center my-4">update NFT info</h2>



<div class="container m-auto mt-5">
 <form action="" method="POST" enctype="multipart/form-data">
    <input name="explorid" type="hidden" value="<?php echo $exrec['id']; ?>">
    <input type="number" style="color:#5138ee; font-weight:bold; height: 59px;" value="<?php echo $exrec['id']; ?>" name="explor_price1" placeholder="please enter price without 0." class="form-control my-4">
    <input type="file" style="color:#5138ee; font-weight:bold;  height: 59px;" name="explor_img1" class="form-control my-4">
    <input type="submit" name="explor_btn1" style="color:#5138ee; font-weight:bold;   height: 59px;"  value="Update Now" class="form-control my-4">
 </form>
</div>