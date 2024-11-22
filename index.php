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
        include "navbar.php"
        ?>
        <!-- Nav Bar End -->

      
        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/img.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Lear for Online & Offline Classes</h3>
                            <h1>Ls Digital Academy</h1>
                            <p>
                    
Welcome to Ls Digital Academy: Best Training Institute for Computer Course & Academic Classes
                            </p>
                            <a class="btn btn-custom" href="">Explore More</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/img1.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Esy Learn For Online & Offline</h3>
                            <h1>Online & Offline Classes</h1>
                            <p>
                                Online Classes Provide Teachers with a number of online learning tools including videos, audio, animations, virtual whiteboards, virtual conference rooms and live chats with the students. On the other hand, offline classes provide students with a practical learning environment within the walls of a physical classroom.
                            </p>
                            <a class="btn btn-custom" href="">Explore More</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/img2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Esy Learn For Home</h3>
                            <h1>Zoom & Googlemeet</h1>
                            <p>
                             You can take live classes on the app Google Meet and Zoom App. 
                            </p>
                            <a class="btn btn-custom" href="">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
       



    
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
                        Most Popular & Trending Courses
                        </h2>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                                                
                    
                        <a class="btn btn-md btn-dark border" href="course.php">View All <i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>

            <div class="container">
                <!-- <div class="container"> -->
                            <?php
                  include("connection.php");
                  $query ="SELECT * FROM course limit 6";
                  $result = mysqli_query($connection, $query) or die("query failed");
                  if(mysqli_num_rows($result)> 0){ 
                 
                  ?>
                <div class=" main">
                   <div class="row">   
                 <?php


                 while($row = mysqli_fetch_assoc($result)){

                       
                  ?>
   
           <div class="col-4 m-0">  
        <div class="card m-3 m-0">

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
                        <!-- End Single item -->
                    <!-- </div> -->
                    <!-- Pagination -->
                    <!-- <div class="row">
                        <div class="col-md-12 pagi-area text-center">
                            <nav aria-label="navigation">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div> -->
             <!--    </div>
            </div>
        </div> -->
        <!-- End Courses Area -->
    


  

           
       
        
        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="img/img1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">2</h3>
                                <p>Studay Points</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-user"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">5</h3>
                                <p>Trainer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-users"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">5000</h3>
                                <p>Happy Students</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-check"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">1500</h3>
                                <p>Certificate Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->
        <!-- Price Start -->
        
        


      <!-- Team Start -->
        <div class="team">
            <div class="container">
                     <?php
      include("connection.php");
      $query ="SELECT * FROM teacher limit 4";
      $result = mysqli_query($connection, $query) or die("query failed");
      if(mysqli_num_rows($result)> 0){ 
     
      ?>
                <div class="section-header text-center">
                    <p>Meet Our Team</p>
                    <h2>Trainers</h2>
                </div>
             <div class="row">
                                                <?php


     while($row = mysqli_fetch_assoc($result)){

           
      ?>
                    <div class="col-lg-3 col-md-6">

           
                        <div class="team-item">

                            <div class="team-img">
                                <img src="<?php echo '../images/'.$row['photo']; ?>" height='300px' width='300px'>
                            </div>
                            <div class="team-text">
                                <h2><?php echo $row['name']; ?></h2>
                                <p><?php echo $row['designation']; ?></p>
                            </div>
                        </div>
                    </div>
                  
             
                  <?php 
                }
                    
                ?>
                   </div>
            </div>
        </div>
        <?php
    }
    ?>
        <!-- Team End -->

        <!-- Location Start -->
        <div class="location">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="section-header text-left">
                            <p>Study Points</p>
                            <h2>Online & Offline Classes</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                        <h3>H. Office</h3>
                                        <p>B3/25, SF-4, DLF Ankur Vihar GZB.</p>
                                        <p><strong>Call:</strong>91 9555405345</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                        <h3>Branch Office</h3>
                                        <p>B2/36A, Yamuna Vihar Delhi</p>
                                        <p><strong>Call:</strong>91 9555405345</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                        <h3>Branch Office</h3>
                                        <p>Street No. 1, Kamal Vihar Delhi</p>
                                        <p><strong>Call:</strong>91 9555405345</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                        <h3>Online Classes</h3>
                                        <p>Zoom & Google Meet</p>
                                        <p><strong>Call:</strong>91 9555405345</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="location-form">
                            <h3>Request for a Course</h3>
                            <form>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Name" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" placeholder="Email" required="required" />
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" placeholder="Description" required="required"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit">Send Request</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Location End -->
        
               <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/img.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header text-left">
                            <p>About</p>
                            <h2>Live Classes</h2>
                        </div>
                        <div class="about-content">
                            <p>
                                So there you can easily learn these courses at your home, office anywhere you want and without investing any money. 

Thanks for visiting us ...
                            </p>
                            <ul>
                                <li><i class="far fa-check-circle"></i>Ms Office</li>
                                <li><i class="far fa-check-circle"></i>Graphic Designing</li>
                                <li><i class="far fa-check-circle"></i>AutoCAD 2D & 3D </li>
                                <li><i class="far fa-check-circle"></i>3D Max</li>
                            </ul>
                            <a class="btn btn-custom" href="">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        
        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header text-center">
                    <p>Review</p>
                    <h2>What our Students say</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <img src="img/karan.jpg" alt="Image">
                        <div class="testimonial-text">
                            <h3>Karan Sharma</h3>
                            <h4>Student</h4>
                            <p>
                                Awesome place! I have been here for for almost one and half year, learning Website Designing and Digital Marketing. You much cheerful and talented staff here... Everyone here are so much helpful.
I have completed my course till the ending of 1st wave of corona, but our  sir has given us classes through online mode also, and after unlockdown they personally call and gave all startes the course from very beginning
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/nisha.jpg" alt="Image">
                        <div class="testimonial-text">
                            <h3>Nisha Chauhan</h3>
                            <h4>Student</h4>
                            <p>
                                Recently i completed my interior design course from Ls Digital Academy. The trainers are very good and experienced. I enjoyed that course. And now am very perfect in designing. Thanks to Ls Digital Academy and there teachers to support me. Thanks Ls Digital Academy.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/pradeep.jpg" alt="Image">
                        <div class="testimonial-text">
                            <h3>Pradeep Gautam</h3>
                            <h4>Student</h4>
                            <p>
                                Database Management Training is perfect for beginners. In this course, you can learn how to improve your designs and give them a professional look! job support is a great tool of Ls Digitla academy I love it.... thanks for helping me in my first job placement
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/kaushal.jpg" alt="Image">
                        <div class="testimonial-text">
                            <h3>Yash Verma</h3>
                            <h4>Student</h4>
                            <p>
                                Sir you have given very good and clear knowledge about concept and we get clear about the course and its contents. Thanks for Ls Digital Academy Providing Video.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

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
