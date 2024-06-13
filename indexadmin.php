<?php 
include "otenadmin.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Alpha Real Estate</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="aassets/img/favicon.png" rel="icon">
  <link href="aassets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="aassets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="aassets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="aassets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="aassets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="aassets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="aassets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="aassets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="aassets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="indexadmin.php" class="logo d-flex align-items-center">
        <img src="aassets/img/alpha.png" alt="">
        <span class="d-none d-lg-block">Alpha Real Estate</span>
      </a>-
      
    </div><!-- End Logo -->



       

  

  

      

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="indexadmin.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

   

     

     
     

      

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="indexadmin.php?page=user">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="logout.php">
          <i class="bi bi-person"></i>
          <span>Log Out</span>
        </a>
      </li><!-- End Profile Page Nav -->


     

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

   

   
    <?php  
    if(isset($_GET['page'])){
    $page=$_GET['page'].".php";
    $filename="konten/".$page;
        if(file_exists($filename)){
            include('konten/'.$page);
        } else{include('konten/pages-error-404.html');
           } }else{include('konten/home.php');
           }
        ?>
        
          

           


           
                
           

         
      

      
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="aassets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="aassets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="aassets/vendor/chart.js/chart.umd.js"></script>
  <script src="aassets/vendor/echarts/echarts.min.js"></script>
  <script src="aassets/vendor/quill/quill.js"></script>
  <script src="aassets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="aassets/vendor/tinymce/tinymce.min.js"></script>
  <script src="aassets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="aassets/js/main.js"></script>

</body>

</html>