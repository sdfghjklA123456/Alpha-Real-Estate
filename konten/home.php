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

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        
          
      </nav>
    </div><!-- End Page Title -->

   
   
        
          <!-- Recent Sales -->
          <div class="col-18">
              <div class="card recent-sales overflow-auto"> 

                

                <div class="card-body">
                  <h5 class="card-title"> <span>Contact Customer|</span></h5>
                 
                 <?php
                    include "connect.php";
                  ?>
                    <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Message</th>
                        
                        


                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      $sql = ("SELECT * FROM customer");
                      $query = mysqli_query($conn, $sql);
                      while ($data=mysqli_fetch_array($query)) {
                          
                          $name = $data['name'];
                          $email= $data['email'];
                          $subject = $data['subject'];
                          $message = $data['message'];
                         
                          
                      ?>
                  
                  
                    
                    <tr>
        
        <td><?php echo $name; ?>&nbsp;</td>
        <td><?php echo $email; ?>&nbsp;</td>
        <td><?php echo $subject; ?>&nbsp;</td>
        <td><?php echo $message; ?>&nbsp;</td>
        
        
        </tr>
        <?php
}
?>

           


           
                
           

         
      

      
 

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