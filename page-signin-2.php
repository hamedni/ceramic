<!DOCTYPE HTML>
<?php
session_start();
include("includes/db.php");


?>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>سرامیک فردا</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">    
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
<link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet" type="text/css" />
</head>
    
<body class="theme-light">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
    <div class="header header-fixed header-logo-center">
        <a href="index.html" class="header-title"><p  style="font-family: 'Vazirmatn'; color:black;"><b>سرامیک فردا</b></p></a>
        <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-chevron-left"></i></a>
        <a href="#" data-menu="menu-main" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a>
       <!--  <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-light"><i class="fas fa-moon"></i></a>-->
    </div>

    <div style="font-family: 'Vazirmatn';" id="footer-bar" class="footer-bar-6">
        <a style="font-family: 'Vazirmatn';" href="#" ><i class="fa fa-layer-group"></i><span ><p  style="font-family: 'Vazirmatn'; color:black;"><b>ویژگی ها</b></p></span></a>
        <a href="#" class="#"><i class="fa fa-file"></i><span><p  style="font-family: 'Vazirmatn'; color:black;"><b>صفحات</b></p></span></a>
        <a href="index.html" class="circle-nav"><i class="fa fa-home"></i><span><p  style="font-family: 'Vazirmatn'; color:black;"><b>صفحه اصلی</b></p></span></a>
        <a href="page-signin-2.php" class="active-nav"><i class="fa fa-user "></i><span><p  style="font-family: 'Vazirmatn'; color:black;"><b>ورود</b></p></span></a>
        <a href="#"><i class="fa fa-bars"></i><span><p  style="font-family: 'Vazirmatn'; color:black;"><b>منو</b></p></span></a>
    </div>
    
        
    <div class="page-content">
        
        <div data-card-height="cover" class="card mb-0" >
            <div class="card-center">
                <form  method="post">
                <div class="text-center">
                  
                    <h1 class="font-40 color-white"><p  style="font-family: 'Vazirmatn'; color:white;"><b>فرم ورود</b></p></h1>
                </div>
                
                <div class="content px-4 mb-3">
                    <div class="input-style input-light has-icon input-style-1 input-required ">
                        <i class="input-icon fa fa-user"></i>
                        <span>Username</span>
                        
                        <input style="font-family: 'Vazirmatn'; color:white;" type="name" name= "admin_email" class=" text-right" placeholder="نام کاربری">
                    </div> 
                    <div class="input-style input-light has-icon input-style-1 input-required">
                        <i class="input-icon fa fa-lock"></i>
                        <span>Password</span>
                        
                        <input style="font-family: 'Vazirmatn'; color:white;" type="password" name="admin_pass" class=" text-right" placeholder="گذر واژه">
                    </div> 
                    
                    <button  class="btn btn-full btn-l font-600 font-13 gradient-highlight mt-4 rounded-s" name="admin_login"><p  style="font-family: 'Vazirmatn'; color:white;"><b>ورود</b></p></button>
                    
                 <!--   <div class="row pt-3 mb-3">
                        <div class="col-6 text-left font-11">
                            <a class="color-white opacity-50" href="page-forgot-2.html">Forgot Password?</a>
                        </div>
                        <div class="col-6 text-right font-11">
                            <a class="color-white opacity-50" href="page-signup-2.html">Create Account</a>
                        </div>
                    </div>-->

                </div>
                </form>
            </div>
            <div class="card-overlay bg-black opacity-85"></div>
        </div>
        
             
        
    </div>
    <!-- Page content ends here-->
    
    <!-- Main Menu--> 
    <div id="menu-main" class="menu menu-box-left rounded-0" data-menu-load="menu-main.html" data-menu-width="280" data-menu-active="nav-pages"></div>
    
    <!-- Share Menu
    <div id="menu-share" class="menu menu-box-bottom rounded-m" data-menu-load="menu-share.html" data-menu-height="370"></div>  -->
    
    <!-- Colors Menu
    <div id="menu-colors" class="menu menu-box-bottom rounded-m" data-menu-load="menu-colors.html" data-menu-height="480"></div>--> 
     
    
</div>
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
<?php

if(isset($_POST['admin_login'])){

$admin_email = $_POST['admin_email'];

$admin_pass = $_POST['admin_pass'];

                            if( $conn ) {
                                           // echo "Connection established.<br />";
                                            $sql = "SELECT * FROM [db_ceramic_farda].[dbo].[personel] where [code_personeli]=? and [pass]=?";
                                      
                                          // $stmt = sqlsrv_query( $conn, $sql, array('%'.$s.'%'));
										    $params = array($admin_email,$admin_pass);
	$stmt = sqlsrv_query($conn, $sql, $params);
										  

                                            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                                             $name=$row['name'];
									 $last_name=$row['last_name'];
									
												}
											}
                                            
sqlsrv_close($conn);

if($name<>""){
$_SESSION['user_level']=$name;
$_SESSION['user_no']= $last_name;

        



echo "<script>window.open('index.html','_self')</script>";

}
else {

echo "<script>alert('رمز عبور یا نام کاربری اشتباه است')</script>";

}

}

?>
