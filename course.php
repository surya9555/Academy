<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Ls Digital Academy</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
                <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
         
        <!-- Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <!-- <link href="css/sty.css" rel="stylesheet"> -->
    </head>

    <body>
        <!-- Top Bar Start -->
        <?php
        include "topbar.php";
        ?>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <?php
        include "navbar.php";
        ?>
        <!-- Nav Bar End -->

        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-"12">
                      </div>
                    <div class="col-"12">
			
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
  <!-- course area -->
        <div class="courses-area default-padding">
             <!-- Fixed Shape -->
        <div class="fixed-shape">
            <img src="assets/img/shape/7.png" alt="Shape">
        </div>
        <!-- End Fixed Shape -->

        
        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-5">
                        <h2>
                        Professional Courses
                        </h2>
                    </div>
                    
                </div>
            </div>
        </div>

            <div class="container">
                <?php
      include("connection.php");
      $query ="SELECT * FROM course";
      $result = mysqli_query($connection, $query) or die("query failed");
      if(mysqli_num_rows($result)> 0){ 
     
      ?>
    <div class="main">
        <div class="row">

 <?php


     while($row = mysqli_fetch_assoc($result)){

           
      ?>
   
      <div class="col-4 m-0">
        <div class="card m-3">

            <!-- <?php echo $row['id']; ?> -->
            <img src="<?php echo '../images/'.$row['photo']; ?>" height='300px' width='300px'>
            <div class="card-content">
                <h3><?php echo $row['coursename']; ?></h3>
             <div class="infoo">Course-Code: <b><?php echo $row['coursecode']; ?></b></div>
             <div class="infoo">Duration: <b><?php echo $row['courseduration']; ?></b></div>
             <div class="infoo">Professor: <b><?php echo $row['professor']; ?></b></div>
             <div class="infoo">Price: <b><?php echo $row['courseprice']; ?></b></div> 
             <div class="infoo">
                <button type="button" id="infoo2" class="btn btn-primary"
                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Read More.</button>
             </div>

            </div>

        
         </div>
        </div>
      <?php
             }
         

        ?>
   
  </div>
</div>
  <?php
      }

    ?>
   
  </div>
                                
                 <!-- course area -->
        <div class="courses-area default-padding">
             <!-- Fixed Shape -->
        <div class="fixed-shape">
            <img src="assets/img/shape/7.png" alt="Shape">
        </div>
        <!-- End Fixed Shape -->
 	
<?php
include "footer.php"; 
?>
     

        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>

