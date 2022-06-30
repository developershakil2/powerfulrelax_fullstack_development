<?php

$vid = new powerful();


$bloggi = $vid->getBlog();




if(isset($_GET['bl_del'])){
    $bid = $_GET['id'];
if($_GET['bl_del']=="delete"){
   $blme =  $vid->blDelete($bid);
}

}

 


?>

<h2 class="my-3 text-center">Manage your blog</h2>
<?php if(isset($blme)) { echo $blme ; } ?>

<div class="container m-auto">
    <table class="table responsive-table">
        <thead>
            <tr>
                <td>
                    ID
                </td>
                <td>
                  blog Title
                </td>
               
                <td>
                   blog Description
                </td>
                <td>
                   blog thumbnail
                
                </td>
                
                <td>
                    Action
                </td>
            </tr>
        </thead>
        <tbody>
        <?php  while($bdata = mysqli_fetch_assoc($bloggi))  {   ?>
            <tr>
               
                <td><?php echo $bdata['id'] ?></td>
                <td> <?php echo substr($bdata['blog_title'],0,10), "..."; ?></td>
                <td> <?php echo substr($bdata['blog_description'],0,10), "..."; ?></td>
                <td> <img style="width:65px ; height:65px; border-radius:23%;" src="blog_img/<?php echo $bdata['blog_img'] ?>" alt=""></td>
                <td>
                    <a class="btn btn-warning" href="up_blog.php?up_blog=update&&id=<?php echo $bdata['id']?>">Update</a>
                    <a class="btn btn-danger" href="?bl_del=delete&&id=<?php echo $bdata['id'] ?>">Delete</a>
                </td>
               
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>

