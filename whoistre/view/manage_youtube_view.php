<?php
$vid = new powerful();


if(isset($_GET['vid_del'])){
    $vid_id = $_GET['id'];
    if($_GET['vid_del']=="delete"){
     $del_mes = $vid->vid_delete($vid_id);
    }
}

$rec_vid = $vid->vid_get_dash();

?>



<h2 class="my-3 text-center">Manage Your YouTube video</h2>
<?php  if(isset($del_mes)){ echo $del_mes;} ?>

<div class="container m-auto">
    <table class="table responsive-table">
        <thead>
            <tr>
                <td>
                    ID
                </td>
                <td>
                    link 
                </td>
               
                <td>
                    title
                </td>
                <td>
                    description
                </td>
                <td>
                    Tags
                </td>
                <td>
                    Action
                </td>
            </tr>
        </thead>
        <tbody>
          <?php while($vdata = mysqli_fetch_assoc($rec_vid)){ ?>
            <tr>
                <td><?php echo $vdata['id'] ?></td>
                <td> <?php echo substr($vdata['vid_link'],0,10 ), "....";?></td>
                <td> <?php echo substr($vdata['vid_title'],0,10), "....."; ?></td>
                <td> <?php echo substr($vdata['vid_des'],0,10, ), "....."; ?></td>
                <td> <?php echo substr($vdata['vid_tags'],0,10,), "....."; ?></td>
                <td>
                    <a class="btn btn-warning" href="up_video.php?up_video=video&&id=<?php echo $vdata['id']?>">Update</a>
                    <a class="btn btn-danger" href="?vid_del=delete&&id=<?php echo $vdata['id'] ?>">Delete</a>
                </td>
                
            </tr>
          <?php } ?>
        </tbody>
    </table>
</div>



