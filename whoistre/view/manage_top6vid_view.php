


<?php
$vid = new powerful();

 $leftshow = $vid->left_show();
 $oneshow = $vid->one_show();
 $towshow = $vid->tow_show();
$threeshow = $vid->three_show();
$fourshow = $vid->four_show();
$rightshow = $vid->right_show();










?>




<h1 style="text-align:center;margin-bottom:20px;">manage top 6 video</h1>
<h5 style="text-align:center;"><?php if(isset( $suc)) {echo  $suc;} ?></h5>

<div class="container m-auto mt-4">
        
   <?php while($form = mysqli_fetch_assoc($leftshow)) {?>
      <div class="row">
         
         <div class="col-9">
            <?php  if(isset($uleft)) {echo $uleft;} ?>
         <h4 style="text-align:center"><?php echo $form['m_left'] ?></h4>
         <img style="width:160px;height:160px;" src="top_img/<?php echo $form["m_left_img"] ?>" alt="">
         </div>
         <div class="col-3">
         <h4 style="text-align:left">left video</h4>
         <a class="btn btn-warning" href="u_left.php?left=update&&id=<?php echo $form['id'] ?>">Update</a>
         <span>#<?php echo $form['id'] ?></span>
         </div>
         <hr style="color:#fff !important;height:1px;width:100%;background:#fff; margin-top:20px">
      </div>


      <?php } ?>

      <?php while($form = mysqli_fetch_assoc($oneshow)) {?>
      <div class="row">
         <div class="col-9">
         <h4 style="text-align:center"><?php echo $form['m_one_vid'] ?></h4>
         <img style="width:160px;height:160px;" src="top_img/<?php echo $form["m_one_img"] ?>" alt="">
         </div>
         <div class="col-3">
         <h4 style="text-align:left">1 first video</h4>
         <a class="btn btn-warning" href="u_one.php?one=update&&id=<?php echo $form['id'] ?>">Update</a>
         <span>#<?php echo $form['id'] ?></span>
         </div>
         <hr style="color:#fff !important;height:1px;width:100%;background:#fff; margin-top:20px">
      </div>


      <?php } ?>

      <?php while($form = mysqli_fetch_assoc($towshow)) {?>
      <div class="row">
         <div class="col-9">
         <h4 style="text-align:center"><?php echo $form['m_tow'] ?></h4>
         <img style="width:160px;height:160px;" src="top_img/<?php echo $form["m_tow_img"] ?>" alt="">
         </div>
         <div class="col-3">
         <h4 style="text-align:left"> 2 second video</h4>
         <a class="btn btn-warning" href="u_tow.php?tow=update&&id=<?php echo $form['id'] ?>">Update</a>
         <span>#<?php echo $form['id'] ?></span>
         </div>
         <hr style="color:#fff !important;height:1px;width:100%;background:#fff; margin-top:20px">
      </div>


      <?php } ?>



      <?php while($form = mysqli_fetch_assoc($threeshow)) {?>
      <div class="row">
         <div class="col-9">
         <h4 style="text-align:center"><?php echo $form['m_three'] ?></h4>
         <img style="width:160px;height:160px;" src="top_img/<?php echo $form["m_three_img"] ?>" alt="">
         </div>
         <div class="col-3">
         <h4 style="text-align:left">3 third video</h4>
         
         <a class="btn btn-warning" href="u_three.php?three=update&&id=<?php echo $form['id'] ?>">Update</a>
         <span>#<?php echo $form['id'] ?></span>
         </div>
         <hr style="color:#fff !important;height:1px;width:100%;background:#fff; margin-top:20px">
      </div>


      <?php } ?>


      <?php while($form = mysqli_fetch_assoc($fourshow)) {?>
      <div class="row">
         <div class="col-9">
         <h4 style="text-align:center"><?php echo $form['m_four'] ?></h4>
         <img style="width:160px;height:160px;" src="top_img/<?php echo $form["m_four_img"] ?>" alt="">
         </div>
         <div class="col-3">
         <h4 style="text-align:left">4 fourth video</h4>
         <a class="btn btn-warning" href="u_four.php?four=update&&id=<?php echo $form['id'] ?>">Update</a>
         <span>#<?php echo $form['id'] ?></span>
         </div>
         <hr style="color:#fff !important;height:1px;width:100%;background:#fff; margin-top:20px">
      </div>

      <?php } ?>

      <?php while($form = mysqli_fetch_assoc($rightshow)) {?>
      <div class="row">
         <div class="col-9">
         <h4 style="text-align:center"><?php echo $form['m_right'] ?></h4>
         <img style="width:160px;height:160px;" src="top_img/<?php echo $form["m_right_img"] ?>" alt="">
       
         </div>
         <div class="col-3">
         <h4 style="text-align:left">right video</h4>
         <a class="btn btn-warning" href="u_right.php?right=update&&id=<?php echo $form['id'] ?>">Update</a>
         <span>#<?php echo $form['id'] ?></span>
         </div>
         <hr style="color:#fff !important;height:1px;width:100%;background:#fff; margin-top:20px">
      </div>
      <?php } ?>


</div>