<?php
$vid = new powerful();





$amgot = $vid->getamProduct();




if(isset($_GET['am_del'])){
    $aid = $_GET['id'];
if($_GET['am_del']=="delete"){
   $amR =  $vid->amDelete($aid);
}

}



?>



<h2 class="my-3 text-center">Manage your blog</h2>
 <?php if(isset($amR)) echo $amR ?>

<div class="container m-auto">
    <table class="table responsive-table">
        <thead>
            <tr>
                <td>
                    ID
                </td>
                <td>
               price
                </td>
               
                <td>
                  title
                </td>
                <td>
                  description
                
                </td>
                <td>
               thumbnail
                
                </td>
                <td>
                    Action
                </td>
            </tr>
        </thead>
        <tbody>
       <?php while($amdata = mysqli_fetch_assoc($amgot)){?>
            <tr>
                <td><?php echo $amdata['id'] ?></td>
                <td><?php echo $amdata['am_price'] ?></td>
                <td><?php echo substr($amdata['am_title'],0,10), "..."; ?></td>
                <td><?php echo substr( $amdata['am_description'],0,10),"..." ;?></td>
                <td><img style="width:65px ; height:65px; border-radius:25%;" src="amazon_img/<?php echo $amdata['am_img'] ?>" alt=""></td>
                
                <td>
                    <a class="btn btn-warning" href="up_am.php?upam=update&&id=<?php echo $amdata['id'] ?>">Update</a>
                    <a class="btn btn-danger" href="?am_del=delete&&id=<?php echo $amdata['id'] ?>">Delete</a>
                </td>
               
            </tr>
          <?php    }    ?>
        </tbody>
    </table>
</div>

