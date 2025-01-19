<!DOCTYPE HTML>
<?php
session_start();
if(!isset($_SESSION['user_level'])){
echo "<script>window.open('page-signin-2.php','_self')</script>";
}

include("includes/db.php");
$name=$_SESSION['user_level'];
$last_name=$_SESSION['user_no'];

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
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/logo.png">
<link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet" type="text/css" />
<!-- Datatables -->
  <link rel='stylesheet' href='https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css'>
</head>
   <script type="text/javascript">
function stopRightClick()
{
 document.oncontextmenu = function(){return false}
 pictureFrame.document.oncontextmenu = function(){return false}
}
</script>
<style>
        .responsive-embed {
            width: 100%;
            height: 100vh; /* Hauteur de l'écran */
            max-height: 100%;
            border: none;
        }
    </style>
	<script>
function filter() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

<body class="theme-light" onload='stopRightClick()'>
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
    <div class="header header-fixed header-logo-center header-auto-show">
        <a href="index.html" class="header-title">Search</a>
        <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-chevron-left"></i></a>
        <a href="#" data-menu="menu-main" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-light"><i class="fas fa-moon"></i></a>
    </div>

  <div style="font-family: 'Vazirmatn';" id="footer-bar" class="footer-bar-6">
        <a style="font-family: 'Vazirmatn';" href="#" ><i class="fa fa-layer-group"></i><span ><p  style="font-family: 'Vazirmatn'; color:black;"><b>ویژگی ها</b></p></span></a>
        <a href="#" class="active-nav"><i class="fa fa-file"></i><span><p  style="font-family: 'Vazirmatn'; color:black;"><b>صفحات</b></p></span></a>
        <a href="index.html" class="circle-nav"><i class="fa fa-home"></i><span><p  style="font-family: 'Vazirmatn'; color:black;"><b>صفحه اصلی</b></p></span></a>
        <a href="page-signin-2.php" ><i class="fa fa-user "></i><span><p  style="font-family: 'Vazirmatn'; color:black;"><b>ورود</b></p></span></a>
        <a href="#"><i class="fa fa-bars"></i><span><p  style="font-family: 'Vazirmatn'; color:black;"><b>منو</b></p></span></a>
    </div>
    
    <div class="page-title page-title-fixed "  >
        <h1>d.c.c</h1><p style="font-family: 'Vazirmatn'; color:black;"><?php echo $name.' '.$last_name; ?></p>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-share"><i class="fa fa-share-alt"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main"><i class="fa fa-bars"></i></a>
    </div>
    <div class="page-title-clear"></div>
        
    <div class="page-content">
                        

        <div class="content mt-0 mb-0 ">
		<div class="content text-right">
		
		<a onclick="filter()" dir="rtl"style="font-family: 'Vazirmatn'; color:black;"><i class="fa fa-filter" aria-hidden="true" ></i><h1><p style="font-family: 'Vazirmatn'; color:black;">فیلتر</p></h1></a></div>
		<div  id="myDIV" style="display:none;">
		<div class="row mb-0" dir="rtl" ><div class="col-3 ">
            <div class="search-box search-dark shadow-xl shadow-xl border-0 bg-theme rounded-sm bottom-0">
			
       <div class="input-style input-style-2 text-right" dir="rtl">
                            <input style="font-family: 'Vazirmatn'; color:black;" type="name" class=" text-right" placeholder="شماره نقشه">
                       
                        </div>
            </div>
			</div>
		<div class="col-3" >
             <div class="search-box search-dark shadow-xl shadow-xl border-0 bg-theme rounded-sm bottom-0">
        <div class="input-style input-style-2 text-right" dir="rtl">
                            <input style="font-family: 'Vazirmatn'; color:black;" type="name" class=" text-right" placeholder="عنوان نقشه">
                       
                        </div>
            </div>
			</div>	
				<div class="col-3">
             <div class="search-box search-dark shadow-xl shadow-xl border-0 bg-theme rounded-sm bottom-0">
       <div class="input-style input-style-2 text-right" dir="rtl">
                            <input style="font-family: 'Vazirmatn'; color:black;" type="name" class=" text-right" placeholder="مشخصات ساخت">
                       
                        </div>
            </div>
			</div>
				<div class="col-3">
             <div class="search-box search-dark shadow-xl shadow-xl border-0 bg-theme rounded-sm bottom-0">
			 <div class="input-style input-style-2 text-right" dir="rtl">
                            <input style="font-family: 'Vazirmatn'; color:black;" type="name" class=" text-right" placeholder="کاربرد">
                       
                        </div>
       
            </div>
			</div>
				<div class="col-3">
             <div class="search-box search-dark shadow-xl shadow-xl border-0 bg-theme rounded-sm bottom-0">
			 <div class="input-style input-style-2 text-right" dir="rtl">
                            <input style="font-family: 'Vazirmatn'; color:black;" type="name" class=" text-right" placeholder="محل استفاده">
                       
                        </div>
      
            </div>
			</div>
				<div class="col-3">
             <div class="search-box search-dark shadow-xl shadow-xl border-0 bg-theme rounded-sm bottom-0">
       <div class="input-style input-style-2 text-right" dir="rtl">
                            <input style="font-family: 'Vazirmatn'; color:black;" type="name" class=" text-right" placeholder="REV">
                       
                        </div>
            </div>
			</div>
				<div class="col-3">
             <div class="search-box search-dark shadow-xl shadow-xl border-0 bg-theme rounded-sm bottom-0 text-right"dir="rtl">
      <div class="input-style input-style-2 text-right" dir="rtl">
                            <input style="font-family: 'Vazirmatn'; color:black;" type="name" class=" text-right" placeholder="تعداد صفحات">
                       
                        </div>
            </div>
			</div>
				<div class="col-3">
             <div class="search-box search-dark shadow-xl shadow-xl border-0 bg-theme rounded-sm bottom-0 text-right"dir="rtl">
			 <div class="input-style input-style-2 text-right" dir="rtl">
                            <input style="font-family: 'Vazirmatn'; color:black;" type="name" class=" text-right" placeholder="شماره ترنسمینال">
                       
                        </div>
     
            </div>
			</div>
				<div class="col-3">
             <div class="search-box search-dark shadow-xl shadow-xl border-0 bg-theme rounded-sm bottom-0">
			  <div class="input-style input-style-2 text-right" dir="rtl">
                            <input style="font-family: 'Vazirmatn'; color:black;" type="name" class=" text-right" placeholder="توضیحات">
                       
                        </div>
      
            </div>
			</div>
		
			
</div>	</div>		
<div class="">			
            <div class="search-results disabled  ">
			
                <div class="list-group list-custom-large text-right " dir="rtl">
           
					
					
					
					
				
    
                </div>
			

            
        </div>
            </div>
			</div>

            <div class="search-no-results disabled mt-4">
                <div class="card card-style mx-0">
                    <div class="content text-right">
                        <p style="font-family: 'Vazirmatn'; color:black;" class="mb-n1 font-600 color-highlight">متاسفیم</p>
                        <h1>پیدا نشد</h1>
                        <p style="font-family: 'Vazirmatn'; color:black;">
                            دوباره سعی نمایید.
                        </p>
                    </div>
                </div>
            </div>
     
        
        <div class="card card-style ">

<table id="example" class="display responsive nowrap text-right" style="font-family: 'Vazirmatn'; color:black; width:100%" dir="rtl">
 
        <thead>
            <tr>
			<th>ردیف</th>
                <th>شماره نقشه</th>
                <th>عنوان نقشه</th>
                <th>مشخصات ساخت</th>
                <th>کاربرد</th>
                <th>محل استفاده</th>
                <th>REV</th>
				<th>تعداد صفحات</th>
				<th>شماره ترنسمینال</th>
				<th>توضیحات</th>
            </tr>
        </thead>
        <tbody>

		         			 <?php
						$no=0;
                                            $sql = "SELECT * FROM [db_ceramic_farda].[dbo].[tb_map] where [applyok]='1'";
                                      
                                          // $stmt = sqlsrv_query( $conn, $sql, array('%'.$s.'%'));
										   
										    $stmt = sqlsrv_query( $conn, $sql);
                                            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
												$no=$no+1;
												$code_map=$row['code_map'];
                                             $name=$row['name_project'];
									 $moshakhase_map=$row['moshakhase_map'];
									 $karbord=$row['karbord'];
									 $revision=$row['revision'];
									  $m_use=$row['m_use'];
									 $sheets=$row['sheets'];
									 $number_tr=$row['number_tr'];
									 $tozih= $row['tozih'];
									 $dir_map=$row['dir_map'];
									 $a= str_replace("\\CF-CP-SERVER\Control Project Share\DCC_DATA\MAPS","",$dir_map);
									 $b= str_replace("\\","/",$a);
													echo "<tr><td>$no</td><td>$code_map <a href='index2.php?id=".$b."'>نمایش</a></td><td>$name</td><td>$moshakhase_map</td><td>$karbord</td><td>$m_use</td><td>$revision</td><td>$sheets</td><td>$number_tr</td><td>$tozih</td></tr>";
												}
											


//$_SESSION['pcode']=$b;
                                            
sqlsrv_close($conn);
											?>
        </tbody>
        <tfoot>
            <tr>
               <th>ردیف</th>
                <th>شماره نقشه</th>
                <th>عنوان نقشه</th>
                <th>مشخصات ساخت</th>
                <th>کاربرد</th>
                <th>محل استفاده</th>
                <th>REV</th>
				<th>تعداد صفحات</th>
				<th>شماره ترنسمینال</th>
				<th>توضیحات</th>
            </tr>
        </tfoot>
    </table>
          
			


            
        </div>
      <div class="card card-style mt-5">
            <div class="content text-right">
			
                <h4 style="font-family: 'Vazirmatn'; color:black;"><p style="font-family: 'Vazirmatn'; color:black;">جستجو برای هر چیز</p></h4>
                <p style="font-family: 'Vazirmatn'; color:black;">
                   جهت دانلود فایل نقشه نام آن را در محل وارد نمایید
                </p>
            </div>
        </div>
       
    </div>
       

    <!--    <div class="content mb-5 mt-5">
            <div class="search-box search-color bg-red-dark rounded-s mb-3">
                <i class="fa fa-search"></i>
                <input type="text" class="border-0" placeholder="Search here... ">
            </div>   
            <div class="search-box search-color bg-green-dark rounded-m mb-3">
                <i class="fa fa-search"></i>
                <input type="text" class="border-0" placeholder="Search here... ">
            </div>   
            <div class="search-box search-color bg-blue-dark rounded-xl mb-3">
                <i class="fa fa-search"></i>
                <input type="text" class="border-0" placeholder="Search here...">
            </div>   
        </div>-->

        <div data-menu-load="menu-footer.html"></div>
    </div>
    <!-- Page content ends here-->
    
    <!-- Main Menu--> 
    <div id="menu-main"  class="menu menu-box-left rounded-0" data-menu-load="menu-main.html" data-menu-width="280" data-menu-active="nav-components"></div>
    
    <!-- Share Menu-->
    <div id="menu-share" class="menu menu-box-bottom rounded-m" data-menu-load="menu-share.html" data-menu-height="370"></div>  
    
    <!-- Colors Menu-->
    <div id="menu-colors" class="menu menu-box-bottom rounded-m" data-menu-load="menu-colors.html" data-menu-height="480"></div> 
     
    
</div>
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
  <script src='https://code.jquery.com/jquery-3.3.1.js'></script>
<script src='https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js'></script><script  src="./script.js"></script>





</body>
