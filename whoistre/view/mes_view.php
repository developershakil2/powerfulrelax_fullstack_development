<?php
$vid = new powerful();

  $dadd = $vid->formdata();

if(isset($_GET["mes"])){
    $id = $_GET["id"];
    if($_GET['mes'] == 'delete'){
       $suc = $vid->mesdelete($id);
    }
}

?>


<h1 style="text-align:center;margin-bottom:20px;">manage All messeges</h1>
<h5 style="text-align:center;"><?php if(isset( $suc)) {echo  $suc;} ?></h5>

<div class="container m-auto mt-4">
   <?php while($form = mysqli_fetch_assoc($dadd )) {?>
<div class="row">
   <div class="col-9">
     <div>
     <h3 style="color:#48b8b0; font-weight:bold;">Name</h3>
     <h4><?php echo $form['yourName'] ?></h4>
     </div>

     <div>
     <h3 style="color:#48b8b0; font-weight:bold;">Email</h3>
     <h4><?php echo $form['yourEmail'] ?></h4>
     </div>

     <div>
     <h3 style="color:#48b8b0; font-weight:bold;">Messeges</h3>
     <p><?php echo $form['textArea'] ?></p>
     </div>
   </div>
   <div class="col-3">
   <a class="btn btn-danger" href="?mes=delete&&id=<?php echo $form['id'] ?>">Delete</a>
   <span>#<?php echo $form['id'] ?></span>
   </div>
   <hr style="color:#fff !important;height:1px;width:100%;background:#fff; margin-top:20px">
</div>
<?php } ?>
</div>