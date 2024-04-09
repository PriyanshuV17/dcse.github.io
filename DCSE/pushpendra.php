<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>The Central University of Jharkhand </title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="../image/x-icon" href="img/favicon.png" />
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="../css/normalize.css" />
    <!-- Main CSS -->
    <link rel="stylesheet" href="../css/main.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="../css/animate.min.css" />
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="../css/font-awesome.min.css" />
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="../vendor/OwlCarousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="../vendor/OwlCarousel/owl.theme.default.min.css" />
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="../css/meanmenu.min.css" />
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="../vendor/slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="../vendor/slider/css/preview.css" type="text/css" media="screen" />
    <!-- Datetime Picker Style CSS -->
    <link rel="stylesheet" href="../css/jquery.datetimepicker.css" />
    <!-- Magic popup CSS -->
    <link rel="stylesheet" href="../css/magnific-popup.css" />
    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="../css/hover-min.css" />
    <!-- ReImageGrid CSS -->
    <link rel="stylesheet" href="../css/reImageGrid.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../style.css" />
    <!-- Modernizr Js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="../js/modernizr-2.8.3.min.js"></script>
    <style>
        .go-corner {
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            width: 32px;
            height: 32px;
            overflow: hidden;
            top: 0;
            right: 0;
            background-color: #fdc800;
            border-radius: 0 4px 0 32px;
        }

        .go-arrow {
            margin-top: -4px;
            margin-right: -4px;
            color: white;
            font-family: courier, sans;
        }

        .card1 {
            display: flex;
            flex-direction: column;
            position: relative;
            justify-content: end;
            text-align: center;
            align-items: center;
            max-width: 260px;
            width: 200px;
            background-color: #f2f8f9;
            border-radius: 4px;
            padding: 20px 20px;
            margin: 12px;
            text-decoration: none;
            z-index: 0;
            overflow: hidden;
        }

        .card1:before {
            content: "";
            position: absolute;
            z-index: -1;
            top: -16px;
            right: -16px;
            background: #fdc800;
            height: 32px;
            width: 32px;
            border-radius: 32px;
            transform: scale(1);
            transform-origin: 50% 50%;
            transition: transform 0.25s ease-out;
        }

        .card1:hover:before {
            transform: scale(21);
        }

        .card1:hover p {
            transition: all 0.3s ease-out;
            color: rgba(255, 255, 255, 0.8);
        }

        .card1:hover h5 {
            transition: all 0.3s ease-out;
            color: #f2f8f9;
        }

        .card1 h5 {
            font-size: 15px;
        }

        #sticker {
            position: relative;
        }

        .header3-area .header-top-area .header-top-left ul li a {
            color: #000000;
        }

        .main-menu-area .logo-area {
            margin: 20px 10px;
        }

        .lecturers-img-wrapper img {
            border: 20px solid #f1bf02;
        }

        .list-group-numbered li {
            padding-left: 20px;
            position: relative;
        }

        .list-group-numbered li:before {
            left: 0;
            position: absolute;
        }
    </style>
    <style>
        .social-btn {
            display: flex;
            align-items: center;
            padding-left: 30px;
            padding-right: 20px;
            padding-top: 5px;
            padding-bottom: 5px;
            border: 1px;
            border-bottom-right-radius: 30px;
            border-top-right-radius: 30px;
            margin-bottom: 5px;
            position: relative;
            left: -25px;
            transition: left 1s;
        }

        .social-btn:hover {
            left: -15px;
            transition: left 1s;
        }

        .social {
            position: fixed;
            top: 60%;
            z-index: 111;
        }

        .social a {
            text-decoration: none;
        }

        .color-online {
            background-color: #033774;
        }

        .color-admi {
            background-color: #f1bf02;
        }

        .color-fee {
            background-color: #24cc63;
        }

        .google-font a {
            font-family: "Lato", sans-serif;
            font-size: 1rem;
            color: white;
        }

        .social-btn img {
            width: 40px;
        }

        .social-btn p {
            color: white;
            margin-top: 0px;
            margin-bottom: 0px;
        }

        .prfl_img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }
    </style>

</head>

<body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve
        your experience.
      </p>
    <![endif]-->
    <!-- Add your site or application content here -->
    <!-- Preloader Start Here 
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- Main Body Area Start Here -->



    <div id="wrapper">
        <!-- Header Area Start Here -->
        <?php include '../header.php' ?>
        <!-- Header Area End Here -->

        <!-- About 1 Area Start Here -->
        <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">Profile</h1>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
        <div class="slider1-area index1 p-4">
            <div class="container">
                <div class="card rounded shadow">
                    <h5 class="fw-bold bg-primary p-2 ps-4 mb-4 rounded"> &nbsp;
                        &nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Department of Computer Science & Engineering</h5>
                    <div class="container">
                        <div class="main-body">
                            <div class="row gutters-sm">
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-column align-items-center text-center">
                                                <img src="../DCSE/faculty/pushpendr.jpg" alt="Admin" class="rounded-circle"
                                                    width="150">
                                                <div class="mt-3">
                                                    <h4> Dr. Pushpendra Kumar </h4>
                                                    <p class="text-secondary mb-1"> Assistant Professor </p>
                                                    <p class="text-muted font-size-sm">Deputy Technical in-charge, 
Department of Computer Science and Engineering</p>
                                                    <!--- <button class="btn btn-primary">Follow</button>
                                                    <button class="btn btn-outline-primary">Message</button>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mt-3">
                                        <ul class="list-group list-group-flush mainmenu">
                                            <li name="timeline" class="list-group-item">
                                                <h6 class="mb-0">
                                                    <a href="#1"><i class="fa fa-user me-2"></i> Personal
                                                        Information</a>
                                                </h6>
                                            </li>
                                            <li name="timeline" class="list-group-item">
                                                <h6 class="mb-0">
                                                    <a href="#2"><i class="fa fa-graduation-cap me-2"></i>
                                                        Education Qualifications</a>
                                                </h6>
                                            </li>
                                            <li name="timeline" class="list-group-item">
                                                <h6 class="mb-0">
                                                    <a href="#3"><i
                                                            class="fa fa-briefcase me-2"></i>Experience</a>
                                                </h6>
                                            </li>
											
											<li name="timeline" class="list-group-item">
                                                <h6 class="mb-0">
                                                    <a href="#4"><i class="fa fa-tasks me-2"></i>Courses
                                                        Taught</a>
                                                </h6>
                                            </li>
											
                                            
                                            
                                            <li name="timeline" class="list-group-item">
                                                <h6 class="mb-0">
                                                    <a href="#5"><i
                                                            class="fa fa-calendar-check-o me-2"></i>Additional Role/
                                                        Responsibility</a>
                                                </h6>
                                            </li>
                                            <li name="timeline" class="list-group-item">
                                                <h6 class="mb-0">
                                                    <a href="#6"><i
                                                            class="fa fa-calendar-check-o me-2"></i>Articles
                                                        Published</a>
                                                </h6>
                                            </li>
                                            <li name="timeline" class="list-group-item">
                                                <h6 class="mb-0">
                                                    <a href="#7"><i
                                                            class="fa fa-calendar-check-o me-2"></i>Books and Book
                                                        Chapters </a>
                                                </h6>
                                            </li>

                                            <li name="timeline" class="list-group-item">
                                                <h6 class="mb-0">
                                                    <a href="#8"><i
                                                            class="fa fa-certificate me-2"></i>Program Organised</a>
                                                </h6>
                                            </li>
											
											
											 <li name="timeline" class="list-group-item">
                                                <h6 class="mb-0">
                                                    <a href="#9"><i
                                                            class="fa fa-certificate me-2"></i>Expert Lectures / Invited Talk</a>
                                                </h6>
                                            </li>
																											
																					
											
											<li name="timeline" class="list-group-item">
                                                <h6 class="mb-0">
                                                    <a href="#10"><i class="fa fa-certificate me-2"></i>PhD
                                                        Supervision</a>
                                                </h6>
                                            </li>


                                            <li name="timeline" class="list-group-item">
                                                <h6 class="mb-0">
                                                    <a href="#11"><i class="fa fa-trophy me-2"></i>Awards and
                                                        Honours</a>
                                                </h6>
                                            </li>

                                            <li name="timeline" class="list-group-item">
                                                <h6 class="mb-0">
                                                    <a href="#12"><i class="fa fa-tasks me-2"></i>Any Other
                                                        Information</a>
                                                </h6>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Full Name</h6>
                                                </div>
                                                <div class="col-sm-9 fw-bold">
                                                    Dr. Pushpendra Kumar 
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Email</h6>
                                                </div>
                                                <div class="col-sm-9 fw-bold">
                                                   p.kumar@cuj.ac.in<br>pushpendra7589@gmail.com
                                                </div>
                                            </div>

                                            <hr>
                                            <div class=" row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Mobile</h6>
                                                    </div>
                                                    <div class="col-sm-9 fw-bold">
                                                       +91 7209164998
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Address</h6>
                                                    </div>
                                                    <div class="col-sm-9 fw-bold">
                                                        Department of Computer Science and Engineering,Central University of Jharkhand, Ranchi- 835205, India
                                                    </div>
                                                </div>

                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-6">

                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <img style="height: 40px; width: 40px;"
                                                                    class="img-fluid rounded-circle"
                                                                    src="https://cuj.irins.org/assets/images/orcid_1.png"
                                                                    alt="">
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-0 fw-bold">Orcid Id</h6>
                                                                <div><a target="_blank"
                                                                        href="#">
                                                                        </a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <img style="height: 40px; width: 40px;"
                                                                    class="img-fluid rounded-circle"
                                                                    src="https://cuj.irins.org/assets/images/researcher-id.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-0 fw-bold">Researcher Id</h6>
                                                                <div> <a target="_blank"
                                                                        href="#"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <hr>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <img style="height: 40px; width: 40px;"
                                                                    class="img-fluid rounded-circle"
                                                                    src="	https://cuj.irins.org/assets/images/google_schlor.png"
                                                                    alt="">
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-0 fw-bold">Google Scholar Id</h6>
                                                                <div><a target="_blank"
                                                                        href="#">
                                                                        </a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="d-flex align-items-center">

                                                            <div>
                                                                <h6 class="mb-0 fw-bold"><a target="_blank"
                                                                        href="https://cuj.irins.org/profile/48785">IRINS</a>
                                                                </h6>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row my-5">
                                            <div class="col-3">
                                                <div style="background-color: #2EAFD1; min-height: 91px;"
                                                    class=" shadow rounded p-3 text-center">
                                                    <div>11</div>
                                                    <div>PUBLICATIONS</div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div style="background-color: #94C524; min-height: 91px;"
                                                    class=" shadow rounded p-3 text-center">
                                                    <div>0</div>
                                                    <div>SPONSORED PROJECTS</div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div style="background-color: #6A3DA3; min-height: 91px;"
                                                    class="text-white shadow rounded p-3 text-center">
                                                    <div>2</div>
                                                    <div>Books and Book Chapters</div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div style="background-color: #F36510; min-height: 91px;"
                                                    class=" shadow rounded p-3 text-center">
                                                    <div>2</div>
                                                    <div>DOCTORAL STUDENTS</div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row gutters-sm">
                                            <div class="col-12 mb-3" id="1">
                                                <h3 class="mb-2 bg-textPrimary"><i
                                                        class="bi bi-person-badge me-2"></i>Brief Profile</h3>
                                                <div class="card bg-light shadow rounded mb-4">
                                                    <div class="card-body">
                                                        
                                                       
                                                        <p style="text-align: justify;">
                                                            Dr. Pushpendra Kumar is an Assistant Professor in the Department of Computer Science & Engineering at Central University of Jharkhand, Ranchi, India. He obtained his Masters in Computer Applications from RGPV, Bhopal, India. He has Qualified UGC NET-JRF in Computer Science and Applications. He received his Ph.D from National Institute of Technology, Bhopal (MP). He has published research work in various reputed journals. His area of interest includes Data Mining, Machine Learning and Deep Learning.

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 mb-3" id="2">
                                                <h3 class="mb-2 bg-textPrimary"><i
                                                        class="bi bi-mortarboard-fill me-2"></i>Education Qualifications
                                                </h3>
                                                <div class="card bg-light shadow rounded mb-4">
                                                    <div class="card-body">
                                                        <div class="bg-primary p-3 mb-2 rounded">

                                                            <b>Ph.D.</b> <time>(NIT, Bhopal)</time><br>
                                                            
														   <b>M.C.A  </b> <time></time><br>

                                                        </div>
														</div>
                                                </div>
                                            </div>

                                        
                                            <div class="col-12 mb-3" id="3">
                                            <h3 class="mb-2 bg-textPrimary">
											<i class="bi bi-briefcase-fill me-2"></i>
                                                Experience</h3>
                                           <div class="card bg-light shadow rounded mb-4">
                                                    <div class="card-body">
                                                        <div class="testimonial-item sec-color">

                                                            <div class="sec-title-2">
                                                                <h6><i class="fa fa-ch"></i>Assistant Professor</h6>
                                                            </div>

                                                            <div class="personal_list_style pb-20">
                                                                <ul>

                                                                    <li>

                                                                       Department of Computer Science & Engineering <i
                                                                            class="fa fa-home"
                                                                            style="color: #ff3115">&nbsp;</i>Central
                                                                        University of Jharkhand
                                                                        <i class="fa fa-calendar"
                                                                            style="color: #ff3115">&nbsp;</i>February,
                                                                        2020 to Present.
                                                                    </li>

                                                                </ul>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
										
										
										<div class="col-12 mb-3" id="4">
                                                <h3 class="mb-2 bg-textPrimary"><i
                                                        class="bi bi-briefcase-fill me-2"></i>
                                                    Courses Taught</h3>
                                                <div class="card bg-light shadow rounded mb-4">
                                                    <div class="card-body">
                                                        <div class="testimonial-item sec-color">

                                                            <div class="personal_list_style pb-20">
                                                                <ul>

                                                                    <li>

                                                                      	1. CST621010: Advanced Algorithm
                                                                    </li>

                                                                    <li>

                                                                        2.	CST622040: Advance Algorithm Lab
                                                                    </li>

                                                                    <li>

                                                                        3.	COM421030: Java Programming 
                                                                    </li>

                                                                    <li>

                                                                        4.	COM515060: Advanced JAVA Programming
                                                                    </li>

                                                                    <li>

                                                                        5.	MMA215110: Data Structures and Algorithm Analysis
                                                                    </li>
																	 <li>

                                                                        6.	MMA 111050: Fundamentals of Computer and C Programming
                                                                    </li>

                                                                    <li>

                                                                        7.	CST622040: Machine Learning
                                                                    </li>

                                                                    <li>

                                                                        8.	COM916070: Programming Fundamentals with Python 
                                                                    </li>
																	 <li>

                                                                        9.	CST622070: Machine Learning Programming Using Python-Lab
                                                                    </li>

                                                                    <li>

                                                                       10.	CST611040: Advanced Data Structures and Algorithms
                                                                    </li>

                                                                    <li>

                                                                        11.	CST612060: Advanced Data Structures and Algorithms Lab
                                                                    </li>
																	<li>

                                                                       12.	CSE05101: Fundamentals of Computer 
                                                                    </li>

                                                                    <li>

                                                                      13. CSE07102: Programming for Problem Solving
                                                                    </li>
																	<li>

                                                                      14. CSE07104: Programming for Problem Solving Lab
                                                                    </li>

                                                                </ul>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            



                                            <div class="col-12 mb-3" id="5">
                                                <h3 class="mb-2 bg-textPrimary"><i
                                                        class="bi bi-briefcase-fill me-2"></i>
                                                    Additional Roles/ Responsibility</h3>
                                                <div class="card bg-light shadow rounded mb-4">
                                                    <div class="card-body">
                                                        <div class="testimonial-item sec-color">

                                                            <div class="pb-20">
                                                                <ol class="list-group list-group-numbered">
                                                                    <li class="mb-2">	<span class="text-primary">Member,</span> Departmental Academic Purchase Committee 2020


                                                                    </li>
																	<li class="mb-2">	<span class="text-primary">Member,</span> Departmental Admission Committee for CUCET 2020 to 2022


                                                                    </li>
																	<li class="mb-2"><span class="text-primary">Lab In-charge,</span> DCSE, since jan-2021 to till date.


                                                                    </li>
																	<li class="mb-2">	<span class="text-primary">Member,</span> Department Research Committee (DRC) since April 2022.


                                                                    </li>
																	<li class="mb-2"><span class="text-primary">	Deputy Technical Cell(I/C),</span> since January 2023


                                                                    </li>
     
                                                                </ol>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-12 mb-3" id="6">
                                                <h3 class="mb-2 bg-textPrimary"><i
                                                        class="bi bi-briefcase-fill me-2"></i>
                                                    PUBLICATIONS</h3>
                                                <div class="card bg-light shadow rounded mb-4">
                                                    <div class="card-body">
                                                        <div class="testimonial-item sec-color">
                                                            <div class="profile-counter pt-3 pb-3">
                                                                

                                                                <div class="sec-title-2">
                                                                    <h6 class="pointer" style="width: fit-content;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NATIONAL/INTERNATIONAL JOURNAL:</h6>
                                                                </div>
                                                                <div class="rs-check-out">
                                                                    <div style="text-align: justify;">


                                                                        <ol class="list-group list-group-numbered">
                                                                            <li class="mb-2">
                                                                                Vinod Kumar, <b>Pushpendra Kumar,</b> R. S. Thakur,<span class="text-primary"> “A brief Investigation on Data Security Toolsand Techniques for Big Data”,</span> International Journal of Engineering Science Invention, vol. 6(9), pp. 20-27,2017.<b>(UGC Approved)</b>
																				<!---<a
                                                                                    class="outside-link"
                                                                                    href="https://doi.org/10.1080/10106049.2022.2102224 "
                                                                                    target="_blank">https://doi.org/10.1080/10106049.2022.2102224
                                                                                </a>-->
                                                                            </li>

                                                                            <li class="mb-2">
                                                                               <b>Pushpendra Kumar,</b> R. S. Thakur,<span class="text-primary"> “Recommendation System Techniques and Related Issues: A Survey”,</span> International Journal of Information Technology, vol.10(4), pp. 495–501, 2018. <b>(Springer &Scopus) </b>     
                                                                            </li>





                                                                            <li class="mb-2">
                                                                                <b>Pushpendra Kumar,</b> Vinod Kumar, R. S. Thakur,<span class="text-primary">  “A New Approach for Rating Prediction System Using Collaborative Filtering”,</span>Iran Journal of Computer Science, vol.2(2), pp.81–87, 2019<b>(Springer)</b>   
                                                                            </li>




                                                                            <li class="mb-2">
                                                                              <b>Pushpendra Kumar,</b> R. S. Thakur, <span class="text-primary"> “Early Detection of the Liver Disorder from Imbalance Liver Function Test Datasets”,</span> International Journal of Innovative Technology and Exploring Engineering, Vol.8(4), pp. 179-186, 2019 <b>(Scopus)</b>.
                                                                            </li>



                                                                            <li class="mb-2">
                                                                               <b>Pushpendra Kumar,</b> R. S. Thakur,<span class="text-primary"> “Liver disorder detection using variable- neighbor weighted fuzzy K nearest neighbor approach”</span>, Multimed Tools Appl (2020). https://doi.org/10.1007/s11042-019-07978-3.<b>(Springer, SCI-E, Quartile:Q2, Imp.Fact.2.313)</b>.

                                                                            </li>



                                                                            <li class="mb-2">
                                                                              <b>Pushpendra Kumar,</b> R. S. Thakur, <span class="text-primary"> “An Approach Using Fuzzy Sets and Boosting Techniques to Predict Liver Disease”</span>,CMC-Computers, Materials & Continua, Vol.68(3), pp.3513-3529, 2021. doi:10.32604/cmc.2021.016957<b>(SCI-E, Quartile:Q1, Imp.Fact.4.89)</b>.
                                                                            </li>


                                                                            <li class="mb-2">
                                                                                	S. C Yadav, P. Kumar, <b>Pushpendra Kumar,</b> <span class="text-primary"> “Digital Farming: IoT Enabled Smart Sensor Based Insect and Animal Detection System”,</span> International Journal of Aquatic Science, Vol. 12(2), 2564-2573 (2021) <b>(WoS)</b>.
                                                                            </li>



                                                                            <li class="mb-2">
                                                                                	S. C Yadav, <b>Pushpendra Kumar,</b> V. Kumar, <span class="text-primary"> "Performance Analysis of Deep Neural Network Algorithm with Optimizer for Rumour Detection",</span> International Journal of Aquatic Science, Vol. 12(2), pp. 2849- 2857 (2021) <b>(WoS)</b>.
                                                                            </li>



                                                                            <li class="mb-2">
                                                                                	A. Sharma, <b>Pushpendra Kumar,</b> K. S. Babulal, A. J. Obaid, H. Patel<span class="text-primary"> “Categorical Data Clustering Using Harmony Search Algorithm for Healthcare datasets”,</span> International Journal of E-Health and Medical Communications (IJEHMC), Vol. 13(4), pp. 1-15, 2022<b>(IGI Global/Scopus)</b>.

                                                                            </li>



                                                                            <li class="mb-2">
                                                                                K. S. Babulal, A. K. Das, <b>Pushpendra Kumar,</b> D. S. Rajput, A. Alam, A. J. Obaid, <span class="text-primary"> “Real Time Surveillance System for Detection of Social Distancing”,</span> International Journal of E-Health and Medical Communications (IJEHMC) Vol. 13(4), pp. 1-13, 2022<b>(IGI Global/Scopus)</b>.
                                                                            </li>
																			
																			 <li class="mb-2">
                                                                                A.K. Shukla, S. Das, <b>Pushpendra Kumar,</b> A Alam (2022). <span class="text-primary"> “Relevance Feedback and Deep Neural Network-Based Semantic Method for Query Expansion”,</span> Wireless Communications and Mobile Computing, 2022. https://doi.org/10.1155/2022/6789044 <b>(SCI-E, Quartile:Q3, Imp.Fact. 2.146)</b>.
                                                                            </li>
                                                                   </div>
                                                                   
                                                                </div>

                                                            </div>
                                                        </div>
														 <div class="testimonial-item sec-color">
                                                            <div class="profile-counter pt-3 pb-3">
                                                                

                                                                <div class="sec-title-2">
                                                                   <h6 class="pointer" style="width: fit-content;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NATIONAL/INTERNATIONAL CONFERENCE:</h6>
                                                                </div>
                                                                <div class="rs-check-out">
                                                                    <div style="text-align: justify;">


                                                                        <ol class="list-group list-group-numbered">
                                                                            <li class="mb-2">
                                                                                <b>	Pushpendra Kumar,</b> R. S. Thakur,<span class="text-primary"> "A Framework for Weblog Data Analysis Using Hive in Hadoop Framework”,</span> In: Proceedings of International Conference on Recent Advancement on Computer and Communication. Lecture Notes in Networks and Systems, vol. 34, pp. 433-439, 2018,<b>Springer, Singapore.</b>
																				<!---<a
                                                                                    class="outside-link"
                                                                                    href="https://doi.org/10.1080/10106049.2022.2102224 "
                                                                                    target="_blank">https://doi.org/10.1080/10106049.2022.2102224
                                                                                </a>-->
                                                                            </li>

                                                                            <li class="mb-2">
                                                                               <b>	Pushpendra Kumar,</b> Taushif Anwar, Dr. RS Thakur, <span class="text-primary">”A Framework for Recommendation System Using Collaborative Filtering”,</span> National Conference on 5G Green, Growth, Globalization, Governance and G & W Organized by S.K College of Science and Commerce, Navi Mumbai on 10 March 2018, India.<b>(Presented)</b>    
                                                                            </li>





                                                                            <li class="mb-2">
                                                                                <b>	Pushpendra Kumar,</b> Taushif Anwar, <span class="text-primary">“ A Study and Review of Automatic Key phrases Extraction Approach”,</span> National Conference on 5G Green, Growth, Globalization, Governance and G & W Organized by S.K College of Science and Commerce, Navi Mumbai on 10 March 2018, India.(Presented)  
                                                                            </li>




                                                                            <li class="mb-2">
                                                                              Vinod Kumar, <b>	Pushpendra Kumar,</b>  R. S. Thakur, <span class="text-primary">“ A Recommender System using GA Based Fuzzy C-Means Clustering ”,</span> National Conference on New Era of Technological Interconnection in Electrical ,Electronics and Computer Engineering Organized by RKDF Institute of Science & Technology and Sponsored by M.P.Concil of Science & Technology, Bhopal,from 14-15 September 2018, India.<b>(Presented)</b>
                                                                            </li>



                                                                            <li class="mb-2">
                                                                               Taushif Anwar, <b>	Pushpendra Kumar,</b><span class="text-primary"> “A Framework for Online Book Recommendation using Collaborative Filtering and Prefix Spam Mining Approach”</span>, National Conference on New Era of Technological Interconnection in Electrical , Electronics and Computer Engineering Organized by RKDF Institute of Science & Technology and Sponsored by M.P. Concil of Science & Technology, Bhopal, from 14-15 September 2018, India.<b>(Presented)</b>

                                                                            </li>



                                                                            <li class="mb-2">
                                                                             <b>	Pushpendra Kumar,</b> and R. S. Thakur, <span class="text-primary">“Prediction of Liver Disorder using Tomek-link based under sampling and Fuzzy K-NN” </span>, 2018 International Conference on Advance Computation and Telecommunication (ICACAT-2018)’, held at “Lakshmi Narain College of Technology Excellence Bhopal”on 28-29 Dec. 2018. <b>(IEEE)(Presented)</b>
                                                                            </li>


                                                                            <li class="mb-2">
                                                                                	<b>	Pushpendra Kumar,</b> <span class="text-primary"> “Liver Disorder Prediction Using Weighted Fuzzy K-Nearest Neighbors Method”</span> 34th M.P. Young Scientist Congress of M.P. Council of Science and Technology held on <b> February 28-March 1, 2019.</b>
                                                                            </li>



                                                                            <li class="mb-2">
                                                                                	<b>Pushpendra Kumar</b><span class="text-primary">“Fuzzy Sets and Machine Learning Approach for Prediction of Liver Disease”</span>, National Conference on Emerging Trends in Science, Engineering & Technology (NCETSET-2019) Organized by Sagar Institute of Science, Technology & Research, Bhopal on<b> 12th – 13th April 2019,India.(Presented).</b>
                                                                            </li>



                                                                            <li class="mb-2">
                                                                           <b>Pushpendra Kumar</b> and R. S. Thakur, <span class="text-primary">"Diagnosis of Liver Disorder Using Fuzzy Adaptive and Neighbor Weighted K-NN Method for LFT Imbalanced Data,"</span>2019 International Conference on Smart Structures and Systems (ICSSS), Chennai, India, 2019, pp. 1-5, doi: 10.1109/ICSSS.2019.8882861.<b>(IEEE)</b>

                                                                            </li>



                                                                            <li class="mb-2">
                                                                              	Abhishek Kumar Shukla, Sujoy Das and <b>Pushpendra Kumar</b> <span class="text-primary">“Word Net Based Hybrid Model for Query Expansion”,</span> 2021 IEEE International Conference on Technology, Research, and Innovation for Betterment of Society (TRIBES), Raipur, India, 2021, pp. 1-6, doi: 10.1109/TRIBES52498.2021.9751671<b>(IEEE)</b>
                                                                            </li>
																			
																			 <li class="mb-2">
                                                                               <b>Pushpendra Kumar</b> K.S. Babulal, D. Mahto, Z. Khurshid,<span class="text-primary"> “Analyzing Deep Neural Network Algorithms for Recognition of Emotions Using Textual Data”,</span> In International Conference on Information Systems and Management Science, 2022, pp. 60-70, doi: https://doi.org/10.1007/978-3-031-31153-6_6 <b>(Springer)</b>
                                                                            </li>
																			
																			<li class="mb-2">
                                                                               Ram Kishun Mahto, <b>Pushpendra Kumar</b> <span class="text-primary"> “Utilizing Deep Learning and GANs for Medical Image Analysis and Disease Classification”</span> In National Conference on "Research Innovations in ICT and Computing Technologies" (NCRIICT-2023) on March 27-28, 2023, Nagpur, India.
                                                                            </li>
                                                                   </div>
                                                                   
                                                                </div>

                                                            </div>
                                                        </div>
														
														
														
                                                    </div>
                                                </div>
                                            </div>






                                            <div class="col-12 mb-3" id="7">
                                                <h3 class="mb-2 bg-textPrimary"><i
                                                        class="bi bi-briefcase-fill me-2"></i>
                                                    Books and Book Chapters </h3>
                                                <div class="card bg-light shadow rounded mb-4">
                                                    <div class="card-body">
                                                        <div class="testimonial-item sec-color">
                                                            <div class="profile-counter pt-3 pb-3">

                                                                <div class="sec-title-2">
                                                                    <h6 class="pointer">Total Publications:2</h6>
                                                                </div>
                                                                <div class="rs-check-out">
                                                                    <div class="rs-payment-system" style="text-align: justify;">

                                                                        <ol class="list-group list-group-numbered">
                                                                            <li class="mb-2">
                                                                                	A. B. Gaurav,<b>Pushpendra Kumar,</b> V. Kumar, and R. S. Thakur, <span class="text-primary">"Conceptual Insights in Blockchain Technology: Security and Applications"</span>. In Rajput, D.S., Thakur, R.S., & Basha, S.M.(Ed.),Transforming Businesses With Bitcoin Mining and Blockchain Applications (pp. 221-233), (2020). IGI Global. 
																					http://doi:10.4018/978-1-7998-0186-3.ch013

                                                                            </li>

                                                                            <li class="mb-2">
                                                                              R. Sansiya, <b>Pushpendra Kumar,</b> R.S. Thakur, and A. Mohammadi, (2021). <span class="text-primary"> "Integrate Hybrid Cloud Computing Server With Automated Remote Monitoring for Blockchain as a Service"</span>. In Patel, H., & Thakur, G.S.(Ed.), Blockchain Applications in IoT Security (pp.203-218),(2020).IGI Global. http://doi:10.4018/978-1-7998-2414-5.ch012
                                                                            </li>

                                                                        </ol>



                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-12 mb-3" id="8">
                                                <h3 class="mb-2 bg-textPrimary"><i
                                                        class="bi bi-briefcase-fill me-2"></i>Program Organised</h3>
                                                <div class="card bg-light shadow rounded mb-4">
                                                    <div class="card-body">
                                                        <div class="testimonial-item sec-color">



                                                            <div class="personal_list_style pb-20" style="text-align: justify;">
                                                                <ol class="list-group list-group-numbered">
                                                                    

                                                                    <li>

                                                                        <b>Organising Secretary</b> of Two- days National Webinar on <span class="text-primary"> “Emerging Technologies for Higher Education “Post COVID-19”</span>, Organised by Department of Computer Science & Technology, 
																	   <i class="fa fa-home"
                                                                            style="color: #ff3115">&nbsp;</i>Central University of Jharkhand, Ranchi,
																			<i class="fa fa-calendar"
                                                                            style="color: #ff3115">&nbsp;</i>16th- 17th May 2020
																			</li>

                                                                    <li>

                                                                       	 <b> Co-coordinator</b> of One Week Online ATAL FDP on <span class="text-primary"> “Internet of Things(IoT)”</span> Organised by Department of Computer Science & Technology,
																		<i class="fa fa-home"
                                                                            style="color: #ff3115">&nbsp;</i> Central University of Jharkhand, Ranchi,
																	<i class="fa fa-calendar"
                                                                            style="color: #ff3115">&nbsp;</i> 14thto 18th September 2020.
                                                                    </li>

                                                                    <li>

                                                                        <b>  Co-ordinator</b> of One Week Online ATAL FDP on <span class="text-primary"> “Data Analytics and Machine Learning”</span> Organised by Department of Computer Science & Technology,
																		<i class="fa fa-home"
                                                                            style="color: #ff3115">&nbsp;</i> Central  University of Jharkhand, Ranchi,
																			<i class="fa fa-calendar"
                                                                            style="color: #ff3115">&nbsp;</i> 20th to 24th September 2021. 
                                                                    </li>

                                                                    <li>

                                                                      <b> Co-ordinator </b>of One Week Online ATAL FDP on <span class="text-primary"> “Data Analytics using Python (Practical Approach)” </span>Organised by Department of Computer Science & Technology, 
																	   <i class="fa fa-home"
                                                                            style="color: #ff3115">&nbsp;</i>Central  University of Jharkhand, Ranchi,
																			<i class="fa fa-calendar"
                                                                            style="color: #ff3115">&nbsp;</i> 25th to 29th April 2022. 
                                                                    </li>

                                                                    <li>

                                                                  <b>Organizing Secretary</b> of One Week Virtual Workshop on <span class="text-primary"> “The Role of Academia & IT in Upskilling: The Digital Workforce”</span> Organised by Department of Computer Science & Engineering,<i class="fa fa-home"
                                                                            style="color: #ff3115">&nbsp;</i> Central  University of Jharkhand, Ranchi,
																			<i class="fa fa-calendar"
                                                                            style="color: #ff3115">&nbsp;</i> 5th to 9th September 2022
                                                                    </li>
                                                                    
																	
																	
																	
																	

                                                                </ol>
                                                            </div>






                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                       
													
													
													
													 <div class="col-12 mb-3" id="9">
										   <h3 class="mb-2 bg-textPrimary"><i
											  class="bi bi-briefcase-fill me-2"></i>Expert Lectures / Invited Talk</h3>
										   <div class="card bg-light shadow rounded mb-4">
											  <div class="card-body">
												 <div class="testimonial-item sec-color">
													<div class="personal_list_style pb-20" style="text-align: justify;">
													   <ol class="list-group list-group-numbered">
														  <li>
															  Expert Talk on “<b> Hands-on Session on Machine Learning</b>” in One-Week Workshop on <b> Analytics of Things and Big Data, Sponsored by ATAL Programme(AICTE)</b>, 23rd to 27th September 2019, organized by Department of Mathematics, Bioinformatics and Computer Applications, MANIT, Bhopal.
														  </li>
														    <li>
															  Expert Talk on “<b> Supervised Machine Learning Techniques with Hands-on Session </b>” on 26th June 2021; organized by Department of MCA, Oriental Institute of Science and Technology, Bhopal.
														  </li>
														   
														  <li>Expert Talk on <b> Introduction to Machine Learning and Decision Tree Classifier</b>, sponsored by AICTE Training and Learning (ATAL) Academy Programmes from 20th  to 24th  September, 2021; organised by Department of Computer Science & Technology, Central University of Jharkhand, Ranchi.
														  </li>
														  
													   </ol>
													</div>
												 </div>
											  </div>
										   </div>
										</div>
									   
													
													
													
													
													
													
													
													
													
													
									   
									   <div class="col-12 mb-3" id="10">
                                                <h3 class="mb-2 bg-textPrimary"><i
                                                        class="bi bi-briefcase-fill me-2"></i>
                                                    PhD Supervision</h3>
                                                <div class="card bg-light shadow rounded mb-4">
                                                    <div class="card-body">
                                                        <div class="testimonial-item sec-color">

                                                          
                                                            

                                                            <div class="sec-title-2">
                                                                <h6 class="pointer">Ongoing</h6>
                                                            </div>

                                                            <div class="personal_list_style pb-20" style="text-align: justify;">
                                                                <ol class="list-group list-group-numbered">
                                                                            

                                                                    <li>

                                                                        Ram Kishun Mahto, Ph.D Thesis Title: Deep Learning Approaches for Classification and Detection of Chronic Kidney Disease Using CT Images, <i class="fa fa-user"
                                                                            style="color: #ff3115">&nbsp;</i>Supervisor &nbsp; <i class="fa fa-calendar"
                                                                            style="color: #ff3115">&nbsp;</i>2021
                                                                    </li>

                                                                    <li>

                                                                       Ms. Sheetal Kumari, Ph.D Thesis Title: Hybrid Deep Learning Model for Improving Sentiment Analysis Accuracy by Reducing Context Dependent Errors,<i class="fa fa-user"
                                                                            style="color: #ff3115">&nbsp;</i> Co-Supervisor&nbsp;<i class="fa fa-calendar"
                                                                            style="color: #ff3115">&nbsp;</i> 2021
                                                                    </li>
          
</ol>
                                                                
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
											
											

                                            <div class="col-12 mb-3" id="11">
                                                <h3 class="mb-2 bg-textPrimary"><i
                                                        class="bi bi-briefcase-fill me-2"></i>
                                                    AWARDS AND HONOURS</h3>
                                                <div class="card bg-light shadow rounded mb-4">
                                                    <div class="card-body">
                                                        <div class="testimonial-item sec-color">

                                                            <div class="pb-20">
                                                                <ol class="list-group list-group-numbered">
                                                                    <li class="mb-2"><strong>Qualified GATE in 2014 and 2015.</strong>

                                                                    </li>
                                                                    <li class="mb-2"><strong>UGC NET-JRF qualified in June 2015.</strong>
                                                                    </li>
                                                                    <li class="mb-2"><strong>	Award: Fellowship for Training of Young Scientist in 34th M.P. Young Scientist Congress (February 28-March 1, 2019) of M.P. Council of Science and Technology.</strong>
                                                                    </li>

                                                                </ol>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-12 mb-3" id="12">
                                                <h3 class="mb-2 bg-textPrimary"><i
                                                        class="bi bi-briefcase-fill me-2"></i>
                                                    Any Other Information</h3>
                                                <div class="card bg-light shadow rounded mb-4">
                                                    <div class="card-body">
                                                        <div class="testimonial-item sec-color">
                                                            <div class="pb-20" style="text-align: justify;">

                                                                <ol class="list-group list-group-numbered">
																	<li>
                                                                    	<strong>Session Chaired </strong>in IEEE International Conference on Technology, Research & Innovation for Betterment of Society (TRIBES-2021) held during December 17th -19th, 2021, organized by IIIT Naya Raipur, Chhattisgarh, India.</li>
																	<li>
                                                                       <strong> Session Chaired</strong> in National Level Conference on “Recent Trends & Innovations in Commerce and Management, Computer Science and Education”  held on 16th April 2022, Organized by Ashoka Center for Business and Computer Stidies(ACBCS), Nashik, India.
																		</li>
																</ol>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                        </div>



                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Gallery Area 2 End Here -->
            <!-- Footer Area Start Here -->
            <?php include '../footer.php' ?>
            <!-- Footer Area End Here -->
        </div>

        <!--- <div class="modal fade" id="admission-popup" tabindex="-1" aria-hidden="false" style="top:10%;">
        <div class="modal-dialog container">
            <div class="modal-content p-0">
                <div class="modal-body p-0">
                    <img src="./img/popupCENTRAL-UNIVERSITY-OF-JHARK.jpg" style="width: 100%" />
                </div>
            </div>
        </div>
    </div>--->


        <!-- jquery-->
        <script src="/js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <!-- Plugins js -->
        <script src="js/plugins.js" type="text/javascript"></script>
        <!-- Bootstrap js -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- WOW JS -->
        <script src="js/wow.min.js"></script>
        <!-- Nivo slider js -->
        <script src="vendor/slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
        <script src="vendor/slider/home.js" type="text/javascript"></script>
        <!-- Owl Cauosel JS -->
        <script src="vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script>
        <!-- Meanmenu Js -->
        <script src="js/jquery.meanmenu.min.js" type="text/javascript"></script>
        <!-- Srollup js -->
        <script src="js/jquery.scrollUp.min.js" type="text/javascript"></script>
        <!-- jquery.counterup js -->
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <!-- Countdown js -->
        <script src="js/jquery.countdown.min.js" type="text/javascript"></script>
        <!-- Isotope js -->
        <script src="js/isotope.pkgd.min.js" type="text/javascript"></script>
        <!-- Magic Popup js -->
        <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <!-- Gridrotator js -->
        <script src="js/jquery.gridrotator.js" type="text/javascript"></script>
        <!-- Custom Js -->
        <script src="js/main.js" type="text/javascript"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/jquery.easy-ticker.js"></script>
        <script>
            function expandFunction() {
                document.getElementById("rs-payment-system").style.maxHeight = "unset";
                document.getElementById("showAll").style.display = "none";
            }
			$(function () {
				// Scroll to function
				function scrollTo(ele) {
					console.log('ele', ele);
					$("html, body").animate({
						scrollTop: $(ele).offset().top - $("#header3").outerHeight()
					});
				}

				// Detect location hash
				if (window.location.hash) {
					scrollTo(window.location.hash);
				}

				// Detect click event
				$("a[href^='#']").click(function (e) {
					var target = $(this).attr("href");
					console.log('target', target);
					scrollTo(target);
					e.preventDefault();
				});
			});

            $(function () {
                window.onload = () => {
                    $("#admission-popup").modal("show");
                };
                // $(".slide-new").easyTicker({
                //   direction: "up",
                //   easing: "swing",
                // });

                $(".slide-events").easyTicker({
                    visible: 2,
                    interval: 4000,
                    direction: "up",
                    easing: "swing",
                });

                $(".slide-new").easyTicker({
                    direction: "up",
                    visible: 3,
                    interval: 2500,
                    controls: {
                        up: ".btnUp",
                        down: ".btnDown",
                        toggle: ".btnToggle",
                    },
                });
            });

            $("#button").click(function () {
                $('html, body').animate({
                    scrollTop: $("#abhi").offset().top
                }, 2000);
            });
			
			
        </script>
        <script>
            function simulateClick(elem) {
                // Create our event (with options)
                var evt = new MouseEvent('click', {
                    bubbles: true,
                    cancelable: true,
                    view: window
                });
                // If cancelled, don't dispatch our event
                var canceled = !elem.dispatchEvent(evt);
            };

            function prepareTabs(triggerEl) {
                var tabTrigger = new bootstrap.Tab(triggerEl)

                triggerEl.addEventListener('click', function (event) {
                    event.preventDefault()
                    //alert('test-'+this.parentNode.tagName);
                    tabTrigger.show()

                    //console.log('>>>' + this.parentNode.tagName);
                    //console.log('>>>>' + this.parentNode.parentNode.tagName);
                    var sibling = this.parentNode.parentNode.firstChild;
                    // Loop through each sibling and push to the array
                    while (sibling) {
                        if (sibling.tagName !== undefined) {
                            //console.log('>>>' + sibling.tagName);
                            //console.log('--->' + sibling.classList);
                            //console.log('>>' + sibling.firstChild.href);
                            sibling.classList.remove('active');
                        }
                        sibling = sibling.nextSibling;
                    }
                    this.parentNode.classList.add('active');
                    console.log('href = ' + this.href);
                    simulateClick(document.querySelector(this.href));
                })
            }

            var triggerTabListTest = [].slice.call(document.querySelectorAll("#myTab a"));
            triggerTabListTest.forEach(function (triggerEl) {
                prepareTabs(triggerEl);
            });
        </script>
</body>

</html>