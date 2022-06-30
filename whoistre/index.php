<?php
include("class/function.php");
$vid = new powerful();

session_start();
   if(isset($_SESSION['adminID'])){
     $admin_id = $_SESSION['adminID'];
       if($admin_id){

        header("location:dashboard.php");
       }
     
   } 
if(isset($_POST["admin_login"])){

    $vid->admin_funtion($_POST);


}




?>

<style>

.login-box {
        margin-top: 75px;
        height: auto;
        background: #1A2226;
        text-align: center;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
    }
    
    .login-key {
        height: 100px;
        font-size: 80px;
        line-height: 100px;
        background: -webkit-linear-gradient(#27EF9F, #0DB8DE);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    
    .login-title {
        margin-top: 15px;
        text-align: center;
        font-size: 30px;
        letter-spacing: 2px;
        margin-top: 15px;
        font-weight: bold;
        color: #ECF0F5;
    }
    
    .login-form {
        margin-top: 25px;
        text-align: left;
    }
    
    input[type=text] {
        background-color: #1A2226;
        border: none;
        border-bottom: 2px solid #0DB8DE;
        border-top: 0px;
        border-radius: 0px;
        font-weight: bold;
        outline: 0;
        margin-bottom: 20px;
        padding-left: 0px;
        color: #ECF0F5;
    }
    
    input[type=password] {
        background-color: #1A2226;
        border: none;
        border-bottom: 2px solid #0DB8DE;
        border-top: 0px;
        border-radius: 0px;
        font-weight: bold;
        outline: 0;
        padding-left: 0px;
        margin-bottom: 20px;
        color: #ECF0F5;
    }
    
    .form-group {
        margin-bottom: 40px;
        outline: 0px;
    }
    
    .form-control:focus {
        border-color: inherit;
        -webkit-box-shadow: none;
        box-shadow: none;
        border-bottom: 2px solid #0DB8DE;
        outline: 0;
        background-color: #1A2226;
        color: #ECF0F5;
    }
    
    input:focus {
        outline: none;
        box-shadow: 0 0 0;
    }
    
    label {
        margin-bottom: 0px;
    }
    
    .form-control-label {
        font-size: 10px;
        color: #6C6C6C;
        font-weight: bold;
        letter-spacing: 1px;
    }
    
    .btn-outline-primary {
        border-color: #0DB8DE;
        color: #0DB8DE;
        border-radius: 0px;
        font-weight: bold;
        letter-spacing: 1px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    }
    
    .btn-outline-primary:hover {
        background-color: #0DB8DE;
        right: 0px;
    }
    
    .login-btm {
        float: left;
    }
    
    .login-button {
        padding-right: 0px;
        text-align: right;
        margin-bottom: 25px;
    }
    
    .login-text {
        text-align: left;
        padding-left: 0px;
        color: #A2A4A4;
    }
    
    .loginbttm {
        padding: 0px;
    }
    section#login_wrapper {
      height: 100vh ;
      display: grid;
      place-items: center;
  }
.col-lg-12.login-title {
    text-align: center;
    color: #007e00;
    font-size: 33px;
    font-weight: bold;
}
.col-lg-12.login-key {
    display: none;
}
.col-lg-6.col-md-8.login-box {
       background-image:url(logo.png);
       background-repeat:no-repeat;
       background-size:cover;
       background-position:center;
       width:100%;
       height:100%;
       padding: 30px 0px;
       position:relative;
}
.btn.btn-outline-primary {
    position: absolute;
    left: 0%;
    margin: 10px 0px;
}
</style>

<?php      include_once("includes/head_template.php")  ;   ?>
<body>
<section id="login_wrapper">



<div  class="container ">
        <div id="login_box" class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                
                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label class="form-control-label">  UserName </label>
                                <input name="admin_user" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input name="admin_pass" type="password" class="form-control" i>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <input value="Login dashboard" name="admin_login" type="submit" class="btn btn-outline-primary"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>







</section>

<?php

include_once("includes/script.php");
?>
    </body>
</html>
