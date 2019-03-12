<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>STIC, Medi-Caps University Indore</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 ">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                              
<a style= href="index.html"> <h1>STIC<img src="img/core-img/logo.png" alt="STIC" style="width:170px;height:80px;"></h1></a>
                            
							</div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="Projects.html">Projects</a>
                                      <!--  <ul class="dropdown">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="course.html">Course</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="elements.html">Elements</a></li>
                                        </ul>
                                    </li>-->
                                    <li><a href="#">Clubs</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-5">
                                                <li><a href="Webdroids.html">Webdroid</a></li>
                                                
                                            </ul>
                                             <ul class="single-mega cn-col-5">
                                                <li><a href="Mechatronics.html">Mechatronics</a></li>
                                                
                                            </ul> <ul class="single-mega cn-col-5">
                                                <li><a href="Elektra.html">Elektra</a></li>
                                                
                                            </ul> <ul class="single-mega cn-col-5">
                                                <li><a href="Management.html">Management</a></li>
                                                
                                            </ul> <ul class="single-mega cn-col-5">
                                                <li><a href="Media.html">Media and Creative</a></li>
                                                
                                            </ul>	
											<ul class="single-mega cn-col-5">
                                                <li><a href="Hackers_cult.html">Hacker's cult</a></li>
                                                
                                            </ul>
										</div>
                                    </li>
									<li><a href="Official_teams.html">Official Teams</a></li>
									<li><a href="blog.html">Blogs</a></li>
									<li><a href="events.html">Events</a></li>
                                    <li><a href="about-us.html">About Us</a></li>
									
                                    
                                    
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                           
						   <div class="call-center">
                                <a href="contact.html"><i class="icon-telephone-2"></i> <span>Contact us</span></a>                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
	
	
	<div class="breadcumb-area bg-img" style="height: 300px; background-image: url(img/pro-img/project.gif)">
	
        <div class="bradcumbContent">
            <h2>Projects</h2>
        </div>
    </div>
	<br>
	<br><br><br>
 <!-- ##### Tabs ##### -->
			<div class="container">
 
                <div class="col-12">
                    <div class="academy-tabs-content">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">Mechatronics</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Webdroid</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab--3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="true">Elektra</a>
                            </li>
							<li><a href="addproject.php"><button type="button" class="btn academy-btn mt-30">Add Project</button></a>
							</li>
                        </ul>

                        <div class="tab-content mb-100" id="myTabContent">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                <div class="academy-tab-content">
                                    <!-- Tab Text -->
                                    <div class="row">
									<?php
									include("connection.php");
 

									$sql = "SELECT * FROM project where department='Mechatronics'";
									if($result = mysqli_query($conn, $sql)){
									if(mysqli_num_rows($result) > 0)
									{
									while($row = mysqli_fetch_array($result)){
									?>
									
									
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="upload/<?php echo $row['img_name']?>" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text"><h4><?php echo $row['name']?></h4></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      
                    </div>
                    <small class="text-muted"><?php echo  $row['department'] ?></small>
                  </div>
                </div>
              </div>
            </div>
									<?php
											}
									  mysqli_free_result($result);
									} 			else{
													echo "No records matching your query were found.";
												}
												} else{
												echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
												}
												
									?>
			
			                    </div>
                            </div>
							</div>
							
							
                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                <div class="academy-tab-content">
                                    <!-- Tab Text -->
                                    <div class="academy-tab-text">
               		<?php
									include("connection.php");
 

									$sql = "SELECT * FROM project where department='Webdroid'";
									if($result = mysqli_query($conn, $sql)){
									if(mysqli_num_rows($result) > 0)
									{
									while($row = mysqli_fetch_array($result)){
									?>
									
									
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="upload/<?php echo $row['img_name']?>" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text"><h4><?php echo $row['name']?></h4></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      
                    </div>
                    <small class="text-muted"><?php echo  $row['department'] ?></small>
                  </div>
                </div>
              </div>
            </div>
									<?php
											}
									  mysqli_free_result($result);
									} 			else{
													echo "No records matching your query were found.";
												}
												} else{
												echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
												}
												
									?>
			
			                    </div>
                            </div>
							</div>
							
									   
									   </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                                <div class="academy-tab-content">
                                    <!-- Tab Text -->
                                    <div class="academy-tab-text">
                                       <h4>No Current Project Detail</h4>
									   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
	
			</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</html> <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                            </div>
                            <p>Students' Technical and Innovation Club (STIC) is the first ever official techno-club of Medi-Caps University. This club is aimed to bring a new era of technology in our university. </p>
							<div class="footer-social-info">
                                <a href="https://www.facebook.com/its4stic"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.linkedin.com/in/its4stic"><i class="fa fa-linkedin"></i></a>
                                <a href="tel:+919407404978"><i class="fa fa-phone"></i></a>
                                <a href="#"><i class="fa fa-slack"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Usefull Links</h6>
                            </div>
                            <nav>
                                <ul class="useful-links">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="about-us.html">About us</li>
                                    <li><a href="contact.html">Contact us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Gallery</h6>
                            </div>
                            <div class="gallery-list d-flex justify-content-between flex-wrap">
                                <a href="img/bg-img/event1.jpg" class="gallery-img" title="Gallery Image 1"><img src="img/bg-img/event1.jpg" alt=""></a>
                                <a href="img/bg-img/event2.jpg" class="gallery-img" title="Gallery Image 2"><img src="img/bg-img/event2.jpg" alt=""></a>
                                <a href="img/bg-img/event3.jpg" class="gallery-img" title="Gallery Image 3"><img src="img/bg-img/event3.jpg" alt=""></a>
                                <a href="img/bg-img/event4.jpg" class="gallery-img" title="Gallery Image 4"><img src="img/bg-img/event4.jpg" alt=""></a>
                                <a href="img/bg-img/event5.jpg" class="gallery-img" title="Gallery Image 5"><img src="img/bg-img/event5.jpg" alt=""></a>
                                <a href="img/bg-img/event6.jpg" class="gallery-img" title="Gallery Image 6"><img src="img/bg-img/event6.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Contact</h6>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-placeholder"></i>
                                <p>A.B. Road, Pigdamber, Rau, Indore, Madhya Pradesh 453331</p>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-telephone-1"></i>
                                <p>Main: 9407404978 <br>Office: 0731-425-9656</p>
                            </div>
                            <div class="single-contact d-flex">
                                <i class="icon-contract"></i>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script>.STIC All rights reserved | This Website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by Yash
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
	<script src="https://www.gstatic.com/firebasejs/5.5.9/firebase.js"></script>

    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>

