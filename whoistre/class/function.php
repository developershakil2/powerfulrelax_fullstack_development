<?php
class powerful {
private $dconn ;





public function __construct(){
$dbhost = "localhost";
$dbuser = "whoistre_whoistr";
$dbpass = "!!WwZ5#41?*";
$dbname = "whoistre_powerfulrelaxingrain";

$this->dconn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(! $this->dconn){
    die("connect error");
}

}
public function vid_add($data){
    $vid_link = $data["vid_link"];
    $vid_title = $data["vid_title"];
    $vid_des = $data['vid_des'];
    $vid_tags = $data["vid_tags"];
    
    $qurr = "INSERT INTO youtubevideo(vid_link, vid_title, vid_des, vid_tags) VALUE ('$vid_link', '$vid_title', '$vid_des', '$vid_tags')";
    if(mysqli_query($this->dconn, $qurr)){
       
        return "congrats another video added successfully ";
    }


}


public function vid_get_dash(){
    $qurr = "SELECT * FROM youtubevideo ORDER BY id DESC";

    if(mysqli_query($this->dconn, $qurr)){
        $ret_vid = mysqli_query($this->dconn, $qurr);
        return $ret_vid;
    }
}
public function vid_delete($id){
    $qurr = "DELETE FROM youtubevideo WHERE id=$id";

if(mysqli_query($this->dconn, $qurr)){
    return "you have succsessfully deleted your youtube Video ";
}

}



public function admin_funtion($data){
    $userAdmin = $data["admin_user"];
    $passAdmin = md5($data["admin_pass"]);

    $qurr = "SELECT * FROM admin_info WHERE admin_name='$userAdmin' && admin_password='$passAdmin'";

    if(mysqli_query($this->dconn, $qurr)){
        $fdata = mysqli_query($this->dconn, $qurr);

    $sdata = mysqli_fetch_assoc($fdata);

    if($sdata){
        session_start();
        $_SESSION['adminID'] = $sdata['admin_name'];
        header("location:dashboard.php");
    }else{
        header("index.php");
    }
    }
}
public function adminlogout(){
    unset($_SESSION['adminID']);
}


public function addBlog($data){
    $blog_title = $data["blog_title"];
    $blog_description = $data["blog_description"];
    $blog_img = $_FILES['blog_img']['name'];
    $tmp_b_name = $_FILES['blog_img']['tmp_name'];

      $qurr = "INSERT INTO blog_table(blog_title, blog_description, blog_img) VALUE ('$blog_title', '$blog_description', '$blog_img')";
      if(mysqli_query($this->dconn, $qurr)){
       move_uploaded_file($tmp_b_name, 'blog_img/'.$blog_img);

         return "you have successfully added your another blog";



      }

}


public function getBlog(){
    $qurr = "SELECT * FROM blog_table";

    if(mysqli_query($this->dconn, $qurr)){
     $blogData = mysqli_query($this->dconn, $qurr);
     return $blogData;

    }



}

public function getBlog2(){
    $qurr = "SELECT * FROM blog_table ORDER BY id DESC";

    if(mysqli_query($this->dconn, $qurr)){
     $blogData = mysqli_query($this->dconn, $qurr);
     return $blogData;

    }



}



public function amFun($data){
    $am_price =  $data['am_price'];
    $am_title = $data['am_title'];
    $am_des =   $data['am_description'];
    $am_img = $_FILES['am_img']['name'];
    $am_tmp = $_FILES['am_img']['tmp_name'];

    $qurr = "INSERT INTO amazon_table(am_price, am_title, am_description, am_img) VALUE ('$am_price','$am_title', ' $am_des', '$am_img' )";

    if(mysqli_query($this->dconn, $qurr)){
       
        move_uploaded_file($am_tmp, 'amazon_img/'.$am_img);
        return "you have added a new amazon productt";
    }
}
public function getamProduct(){
    $qurr = "SELECT * FROM amazon_table";
    if(mysqli_query($this->dconn, $qurr)){
      $amD = mysqli_query($this->dconn, $qurr);
      return $amD;   
    }
}
public function getamProduct1(){
    $qurr = "SELECT * FROM amazon_table ORDER BY id DESC";
    if(mysqli_query($this->dconn, $qurr)){
      $amD = mysqli_query($this->dconn, $qurr);
      return $amD;   
    }
}



public function amDelete($id){
    $qurr = "DELETE FROM amazon_table WHERE id=$id";
    if(mysqli_query($this->dconn, $qurr)){
        return "your have deleted your amazon product";
    }
}

public function blDelete($id){
    $qurr = "DELETE FROM blog_table WHERE id=$id";

    if(mysqli_query($this->dconn, $qurr)){
        return "you have deleted your blog";
    }
}

public function formfunc($data){

    $cname = $data["your_name"];
    $cemail = $data["your_email"];
    $textarea = $data["text_area"];
     
    $qurr = "INSERT INTO contactform(yourName, yourEmail, textArea) VALUE ('$cname', '$cemail', '$textarea')";
    if(mysqli_query($this->dconn, $qurr)){

        return "Thank You So Much for Contacting us";
    }

}

public function up_video($id){
    $qurr = "SELECT * FROM  youtubevideo WHERE id=$id";
    if(mysqli_query($this->dconn, $qurr)){
        $upv = mysqli_query($this->dconn, $qurr);
        $updt = mysqli_fetch_assoc($upv);
        return $updt;
    }
}

public function up_vid($data){
$vid_link = $data["u_vid_link"];
$vid_title = $data["u_vid_title"];
$vid_des = $data["u_vid_des"];
$vid_tag = $data["u_vid_tags"];
$vid_id = $data["vid_up_id"];

$qurr = "UPDATE youtubevideo SET vid_link='$vid_link', vid_title='$vid_title', vid_des='$vid_des', vid_tags='$vid_tag' WHERE id=$vid_id";

if(mysqli_query($this->dconn, $qurr)){
    return "you have updated your video ";
}




}



public function up_blog($id){
    $qurr = "SELECT * FROM blog_table WHERE id=$id";
    if(mysqli_query($this->dconn, $qurr)){
        $upbl = mysqli_query($this->dconn, $qurr);
        $upc = mysqli_fetch_assoc($upbl);
        return $upc;
    }
}

public function blog_up_s($data){
    $bl_title = $data["u_blog_title"];
    $bl_des  = $data["u_blog_description"];
    $bl_img = $_FILES["u_blog_img"]["name"];
    $bl_tmp = $_FILES["u_blog_img"]["tmp_name"];
    $bl_id = $data["bl_id"];

    $qurr = "UPDATE blog_table SET blog_title='$bl_title', blog_description='$bl_des', blog_img='$bl_img' WHERE id=$bl_id";

    if(mysqli_query($this->dconn, $qurr)){
       move_uploaded_file($bl_tmp, 'blog_img/'.$bl_img);
       return "you have successfylly updated your blog post";

    }






}


public function up_am($id){
    $qurr = "SELECT * FROM amazon_table WHERE id=$id";

    if(mysqli_query($this->dconn, $qurr)){
        $upd = mysqli_query($this->dconn, $qurr);
        $fupd = mysqli_fetch_assoc($upd);

        return $fupd;
    }
}


public function up_am_s($data){

    $u_price  = $data["u_am_price"];
    $u_title = $data["u_am_title"];
    $u_des = $data["u_am_description"];
    $u_img = $_FILES["u_am_img"]["name"];
    $u_tmp = $_FILES["u_am_img"]["tmp_name"];
    $u_id = $data['idd'];
        $qurr = "UPDATE amazon_table SET am_price='$u_price', am_title='$u_title', am_description='$u_des', am_img='$u_img' WHERE id=$u_id";
    
        if(mysqli_query($this->dconn, $qurr)){
          move_uploaded_file($u_tmp, 'amazon_img/'.$u_img);
          return "you have successfully updated your amazon product"; 
          
        
        
        }

    }

public function formdata(){
    $qurr = "SELECT * FROM contactform ORDER BY id";
    if(mysqli_query($this->dconn, $qurr)){
        $formi = mysqli_query($this->dconn, $qurr);
        return $formi;
    }

}

public function mesdelete($id){
    $qurr = "DELETE FROM contactform WHERE id=$id";

    if(mysqli_query($this->dconn, $qurr)){
        return "you have successfully deleted contact form messege";
    }
}



public function getVid($id){

    $qurr = "SELECT * FROM youtubevideo WHERE id=$id";


    if(mysqli_query($this->dconn, $qurr)){
        $keptvid = mysqli_query($this->dconn, $qurr);
        $gotcha = mysqli_fetch_assoc($keptvid);
        return $gotcha;
    }
}


public function getBlo($id){

    $qurr = "SELECT * FROM blog_table WHERE id=$id";


    if(mysqli_query($this->dconn, $qurr)){
        $keptvid = mysqli_query($this->dconn, $qurr);
        $gotcha = mysqli_fetch_assoc($keptvid);
        return $gotcha;
    }
}



public function topsix($data){

$one = $data["m_one"];
$one_img = $_FILES['m_one_img']['name'];
$one_tmp  = $_FILES['m_one_img']["tmp_name"];


$tow = $data["m_tow"];
$tow_img = $_FILES['m_tow_img']['name'];
$tow_tmp  = $_FILES['m_tow_img']["tmp_name"];


$three = $data["m_three"];
$three_img = $_FILES['m_three_img']['name'];
$three_tmp  = $_FILES['m_three_img']["tmp_name"];


$four = $data["m_four"];
$four_img = $_FILES['m_four_img']['name'];
$four_tmp  = $_FILES['m_four_img']["tmp_name"];


$right = $data["m_right"];
$right_img = $_FILES['m_right_img']['name'];
$right_tmp  = $_FILES['m_right_img']["tmp_name"];


$qurr = "INSERT INTO topsix(m_left, m_left_img, m_one, m_one_img, m_tow, m_tow_img, m_three, m_three_img, m_four, m_four_img, m_right, m_right_img) VALUE('$left', '$left_img','$one', '$one_img','$tow','$tow_img','$three','$three_img','$four','$four_img','$right','$right_img')";

if(mysqli_query($this->dconn, $qurr)){   
   
    move_uploaded_file($one_tmp, 'top_img/'.$one_img);
    move_uploaded_file($tow_tmp, 'top_img/'.$tow_img);
    move_uploaded_file($three_tmp, 'top_img/'.$three_img);
    move_uploaded_file($four_tmp, 'top_img/'.$four_img);
    move_uploaded_file($right_tmp, 'top_img/'.$right_img);


    return "added successfully";


}

}








public function left_vid($data){
    
$left = $data["m_left"];
$left_img = $_FILES['m_left_img']['name'];
$left_tmp  = $_FILES['m_left_img']["tmp_name"];

$qurr = "INSERT INTO left_vid(m_left,  m_left_img) VALUE ('$left','$left_img')";

if(mysqli_query($this->dconn, $qurr)){
    move_uploaded_file($left_tmp, 'top_img/'.$left_img);
    return "you have added your top video";
}

}

public function one_vid($data){
    
    $one = $data["m_one"];
    $one_img = $_FILES['m_one_img']['name'];
    $one_tmp  = $_FILES['m_one_img']["tmp_name"];
    
    $qurr = "INSERT INTO one_vid(m_one_vid,  m_one_img) VALUE ('$one','$one_img')";
    
    if(mysqli_query($this->dconn, $qurr)){
        move_uploaded_file($one_tmp, 'top_img/'.$one_img);
        return "you have added your top video";
    }
    
    }


    public function tow_vid($data){
    
        $tow = $data["m_tow"];
        $tow_img = $_FILES['m_tow_img']['name'];
        $tow_tmp  = $_FILES['m_tow_img']["tmp_name"];
        
        $qurr = "INSERT INTO tow_vid(m_tow,  m_tow_img) VALUE ('$tow','$tow_img')";
        
        if(mysqli_query($this->dconn, $qurr)){
            move_uploaded_file($tow_tmp, 'top_img/'.$tow_img);
            return "you have added your 2nd top video";
        }
        
        }


        public function three_vid($data){
    
            $tow = $data["m_three"];
            $tow_img = $_FILES['m_three_img']['name'];
            $tow_tmp  = $_FILES['m_three_img']["tmp_name"];
            
            $qurr = "INSERT INTO three_vid(m_three,  m_three_img) VALUE ('$tow','$tow_img')";
            
            if(mysqli_query($this->dconn, $qurr)){
                move_uploaded_file($tow_tmp, 'top_img/'.$tow_img);
                return "you have added your 3th top video";
            }
            
            }

            public function four_vid($data){
    
                $tow = $data["m_four"];
                $tow_img = $_FILES['m_four_img']['name'];
                $tow_tmp  = $_FILES['m_four_img']["tmp_name"];
                
                $qurr = "INSERT INTO four_vid(m_four,  m_four_img) VALUE ('$tow','$tow_img')";
                
                if(mysqli_query($this->dconn, $qurr)){
                    move_uploaded_file($tow_tmp, 'top_img/'.$tow_img);
                    return "you have added your 4th top video";
                }
                
                }
    
                public function right_vid($data){
    
                    $tow = $data["m_right"];
                    $tow_img = $_FILES['m_right_img']['name'];
                    $tow_tmp  = $_FILES['m_right_img']["tmp_name"];
                    
                    $qurr = "INSERT INTO right_vid(m_right,  m_right_img) VALUE ('$tow','$tow_img')";
                    
                    if(mysqli_query($this->dconn, $qurr)){
                        move_uploaded_file($tow_tmp, 'top_img/'.$tow_img);
                        return "you have added your right top video";
                    }
                    
                    }
        
    public function left_show(){
    $qurr = "SELECT * FROM left_vid";

    if(mysqli_query($this->dconn, $qurr)){
    $vids = mysqli_query($this->dconn, $qurr);
    return $vids;
    }
   }



   public function one_show(){
    $qurr = "SELECT * FROM one_vid";

    if(mysqli_query($this->dconn, $qurr)){
    $vids = mysqli_query($this->dconn, $qurr);
    return $vids;
    }
}

public function tow_show(){
    $qurr = "SELECT * FROM tow_vid";

    if(mysqli_query($this->dconn, $qurr)){
    $vids = mysqli_query($this->dconn, $qurr);
    return $vids;
    }
}

public function three_show(){
    $qurr = "SELECT * FROM three_vid";

    if(mysqli_query($this->dconn, $qurr)){
    $vids = mysqli_query($this->dconn, $qurr);
    return $vids;
    }
}



public function four_show(){
    $qurr = "SELECT * FROM four_vid";

    if(mysqli_query($this->dconn, $qurr)){
    $vids = mysqli_query($this->dconn, $qurr);
    return $vids;
    }
}

public function right_show(){
    $qurr = "SELECT * FROM right_vid";

    if(mysqli_query($this->dconn, $qurr)){
    $vids = mysqli_query($this->dconn, $qurr);
    return $vids;
    }
}

public function u_left($id){
    $qurr = "SELECT * FROM left_vid WHERE id=$id";

    if(mysqli_query($this->dconn, $qurr)){
        $ch = mysqli_query($this->dconn, $qurr);
        $co = mysqli_fetch_assoc($ch);
        return $co;

    }
}
public function u2_left(){
    $qurr = "SELECT * FROM left_vid";

    if(mysqli_query($this->dconn, $qurr)){
        $ch = mysqli_query($this->dconn, $qurr);
        $co = mysqli_fetch_assoc($ch);
        return $co;

    }
}

public function u_left_vid($data){
    $ud = $data["u_m_left"];
    $uimg = $_FILES["u_m_left_img"]["name"];
    $utmp = $_FILES["u_m_left_img"]["tmp_name"];
    $hidd = $data["hid"];

    $qurr = "UPDATE left_vid SET m_left='$ud', m_left_img='$uimg' WHERE id=$hidd";
    if(mysqli_query($this->dconn, $qurr)){
        move_uploaded_file($utmp, 'top_img/'.$uimg);
        return "your have successfully updated your top 6";
    }
}






public function u_one($id){
    $qurr = "SELECT * FROM one_vid WHERE id=$id";

    if(mysqli_query($this->dconn, $qurr)){
        $ch = mysqli_query($this->dconn, $qurr);
        $co = mysqli_fetch_assoc($ch);
        return $co;

    }
}
public function u2_one(){
    $qurr = "SELECT * FROM one_vid";

    if(mysqli_query($this->dconn, $qurr)){
        $ch = mysqli_query($this->dconn, $qurr);
        $co = mysqli_fetch_assoc($ch);
        return $co;

    }
}
public function u_one_vid($data){
    $ud = $data["u_m_one"];
    $uimg = $_FILES["u_m_one_img"]["name"];
    $utmp = $_FILES["u_m_one_img"]["tmp_name"];
    $hidd = $data["hid"];

    $qurr = "UPDATE one_vid SET m_one_vid='$ud', m_one_img='$uimg' WHERE id=$hidd";
    if(mysqli_query($this->dconn, $qurr)){
        move_uploaded_file($utmp, 'top_img/'.$uimg);
        return "your have successfully updated your top 6";
    }
}





public function u_tow($id){
    $qurr = "SELECT * FROM tow_vid WHERE id=$id";

    if(mysqli_query($this->dconn, $qurr)){
        $ch = mysqli_query($this->dconn, $qurr);
        $co = mysqli_fetch_assoc($ch);
        return $co;

    }
}
public function u2_tow(){
    $qurr = "SELECT * FROM tow_vid";

    if(mysqli_query($this->dconn, $qurr)){
        $ch = mysqli_query($this->dconn, $qurr);
        $co = mysqli_fetch_assoc($ch);
        return $co;

    }
}

public function u_tow_vid($data){
    $ud = $data["u_m_tow"];
    $uimg = $_FILES["u_m_tow_img"]["name"];
    $utmp = $_FILES["u_m_tow_img"]["tmp_name"];
    $hidd = $data["hid"];

    $qurr = "UPDATE tow_vid SET m_tow='$ud', m_tow_img='$uimg' WHERE id=$hidd";
    if(mysqli_query($this->dconn, $qurr)){
        move_uploaded_file($utmp, 'top_img/'.$uimg);
        return "your have successfully updated your top 6";
    }
}





public function u_three($id){
    $qurr = "SELECT * FROM three_vid WHERE id=$id";

    if(mysqli_query($this->dconn, $qurr)){
        $ch = mysqli_query($this->dconn, $qurr);
        $co = mysqli_fetch_assoc($ch);
        return $co;

    }
}
public function u2_three(){
    $qurr = "SELECT * FROM three_vid";

    if(mysqli_query($this->dconn, $qurr)){
        $ch = mysqli_query($this->dconn, $qurr);
        $co = mysqli_fetch_assoc($ch);
        return $co;

    }
}


public function u_three_vid($data){
    $ud = $data["u_m_three"];
    $uimg = $_FILES["u_m_three_img"]["name"];
    $utmp = $_FILES["u_m_three_img"]["tmp_name"];
    $hidd = $data["hid"];

    $qurr = "UPDATE three_vid SET m_three='$ud', m_three_img='$uimg' WHERE id=$hidd";
    if(mysqli_query($this->dconn, $qurr)){
        move_uploaded_file($utmp, 'top_img/'.$uimg);
        return "your have successfully updated your top 6";
    }
}



public function u_four($id){
    $qurr = "SELECT * FROM four_vid WHERE id=$id";

    if(mysqli_query($this->dconn, $qurr)){
        $ch = mysqli_query($this->dconn, $qurr);
        $co = mysqli_fetch_assoc($ch);
        return $co;

    }
}
public function u2_four(){
    $qurr = "SELECT * FROM four_vid ";

    if(mysqli_query($this->dconn, $qurr)){
        $ch = mysqli_query($this->dconn, $qurr);
        $co = mysqli_fetch_assoc($ch);
        return $co;

    }
}
public function u_four_vid($data){
    $ud = $data["u_m_four"];
    $uimg = $_FILES["u_m_four_img"]["name"];
    $utmp = $_FILES["u_m_four_img"]["tmp_name"];
    $hidd = $data["hid"];

    $qurr = "UPDATE four_vid SET m_four='$ud', m_four_img='$uimg' WHERE id=$hidd";
    if(mysqli_query($this->dconn, $qurr)){
        move_uploaded_file($utmp, 'top_img/'.$uimg);
        return "your have successfully updated your top 6";
    }
}



public function u_right($id){
    $qurr = "SELECT * FROM right_vid WHERE id=$id";

    if(mysqli_query($this->dconn, $qurr)){
        $ch = mysqli_query($this->dconn, $qurr);
        $co = mysqli_fetch_assoc($ch);
        return $co;

    }
}
public function u2_right(){
    $qurr = "SELECT * FROM right_vid";

    if(mysqli_query($this->dconn, $qurr)){
        $ch = mysqli_query($this->dconn, $qurr);
        $co = mysqli_fetch_assoc($ch);
        return $co;

    }
}

public function u_right_vid($data){
    $ud = $data["u_m_right"];
    $uimg = $_FILES["u_m_right_img"]["name"];
    $utmp = $_FILES["u_m_right_img"]["tmp_name"];
    $hidd = $data["hid"];

    $qurr = "UPDATE right_vid SET m_right='$ud', m_right_img='$uimg' WHERE id=$hidd";
    if(mysqli_query($this->dconn, $qurr)){
        move_uploaded_file($utmp, 'top_img/'.$uimg);
        return "your have successfully updated your top 6";
    }
}












}
?>