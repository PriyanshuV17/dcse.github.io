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
                        Department of Civil Engineering</h5>
                    <div class="container">
                        <div class="main-body">
                            <div class="row gutters-sm">
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-column align-items-center text-center">
                                                <img src="../DCSE/faculty/amitkyadav.png" alt="Admin" class="rounded-circle"
                                                    width="150">
                                                <div class="mt-3">
                                                    <h4> Mr.  Amit Kumar Yadav </h4>
                                                    <p class="text-secondary mb-1"> Assistant Professor </p>
                                                    <p class="text-muted font-size-sm"> Department of Civil Engineering</p>
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
                                                    <a href="#9"><i class="fa fa-certificate me-2"></i>PhD
                                                        Supervision</a>
                                                </h6>
                                            </li>


                                            <li name="timeline" class="list-group-item">
                                                <h6 class="mb-0">
                                                    <a href="#10"><i class="fa fa-trophy me-2"></i>Awards and
                                                        Honours</a>
                                                </h6>
                                            </li>

                                            <li name="timeline" class="list-group-item">
                                                <h6 class="mb-0">
                                                    <a href="#11"><i class="fa fa-tasks me-2"></i>Any Other
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
                                                    Mr. Amit Kumar Yadav


                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Email</h6>
                                                </div>
                                                <div class="col-sm-9 fw-bold">
                                                  amit.yadav@cuj.ac.in 
                                                </div>
                                            </div>

                                            <hr>
                                            <div class=" row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Mobile</h6>
                                                    </div>
                                                    <div class="col-sm-9 fw-bold">
                                                       +91 9988067197
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Address</h6>
                                                    </div>
                                                    <div class="col-sm-9 fw-bold">
                                                        Department of Civil Engineering,Central University of Jharkhand, Ranchi- 835205, India
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
                                                                        href="https://cuj.irins.org/profile/4878">IRINS</a>
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
                                                    <div>04</div>
                                                    <div>PUBLICATIONS</div>
                                                </div>
                                            </div>
                                            
                                           
                                            <div class="col-3">
                                                <div style="background-color: #F36510; min-height: 91px;"
                                                    class=" shadow rounded p-3 text-center">
                                                    <div>0</div>
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
                                                            Mr. Amit Kumar Yadav is working as Assistant Professor in the Department of Civil Engineering, Central University of Jharkhand, Ranchi-835205. Also former Assistant professor, Department of Civil Engineering, Lovely Professional University, Jalandhar, Punjab-144411. He has 8 years of teaching experience and has taught various UG and PG subjects like Traffic Engineering, Intelligent Transport Systems, Geometric Design of Highways, Intersection Design and Analysis and Urban Transport System Planning.

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

                                                            <b>M.Tech </b> <time>Transportation Engineering ( Integration of Public transport: A Case Study of Ludhiana City)</time><br>
                                                            
														   <b>B.Tech  </b> <time>Civil Engineering</time><br>

                                                        </div>
														</div>
                                                </div>
                                            </div>
											        <div class="col-12 mb-3" id="21">
                                                <h3 class="mb-2 bg-textPrimary"><i
                                                        class="bi bi-mortarboard-fill me-2"></i>Awards/ Fellowship
                                                </h3>
                                                <div class="card bg-light shadow rounded mb-4">
                                                    <div class="card-body">
                                                        <div class="bg-primary p-3 mb-2 rounded">

                                                            <b>University academic honour for being first in the merit in Masters of Technology programme (2014), Lovely Professional University </b> <br>
                                                            
														   <b>MHRD fellowship for doctoral programme during July 2018 to Sept 2019, NERIST   </b> <br>

                                                        </div>
														</div>
                                                </div>
                                            </div>
										<div class="col-12 mb-3" id="22">
                                                <h3 class="mb-2 bg-textPrimary"><i
                                                        class="bi bi-mortarboard-fill me-2"></i>Area of Interest
                                                </h3>
                                                <div class="card bg-light shadow rounded mb-4">
                                                    <div class="card-body">
                                                        <div class="bg-primary p-3 mb-2 rounded">

                                                            <b>Traffic Data Collection and Analysis, Traffic Flow Theory, Delay Modelling, Traffic Engineering, Intersection Design and control, Bitumen Modification </b> <br>
                                                            
														  
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

                                                                       Department of Transport Science and Technology, <i
                                                                            class="fa fa-home"
                                                                            style="color: #ff3115">&nbsp;</i>Central
                                                                        University of Jharkhand,Ranchi
                                                                        <i class="fa fa-calendar"
                                                                            style="color: #ff3115">&nbsp;</i>9th October 2019 to present.
                                                                    </li>
																	<li>

                                                                       Department of Civil Engineering, <i
                                                                            class="fa fa-home"
                                                                            style="color: #ff3115">&nbsp;</i>Lovely Professional University, Punjab
                                                                        <i class="fa fa-calendar"
                                                                            style="color: #ff3115">&nbsp;</i>August 2014 to May 2018.
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

                                                                      	1. Transportation Engineering
                                                                    </li>

                                                                    <li>

                                                                        2.	Pavement Materials
                                                                    </li>

                                                                    <li>

                                                                        3.	Traffic Engineering and Modelling 
                                                                    </li>

                                                                    <li>

                                                                        4.	Geometric Design
                                                                    </li>

                                                                    <li>

                                                                        5.	Highway Planning Design And Management
                                                                    </li>
																	 <li>

                                                                        6.	Pavement Analysis And Design
                                                                    </li>

                                                                    <li>

                                                                        7.	Transportation Safety
                                                                    </li>

                                                                    <li>

                                                                        8.	Economics And Environment 
                                                                    </li>
																	 <li>

                                                                        9.	Transportation Engineering Laboratory
                                                                    </li>

                                                                    

                                                                </ul>
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
                                                                                 <b>Yadav A.K,</b> Akram W., Rather A.M.(2016),<span class="text-primary"> Micro level Study of Accident Data from Jalandhar to Phagwara on NH 44, Indian Journal of Science and Technology, 9 (47), 1 to 4.(DOI10.17485/ijst/2016/v9i47/105248)
																				<!---<a
                                                                                    class="outside-link"
                                                                                    href="https://doi.org/10.1080/10106049.2022.2102224 "
                                                                                    target="_blank">https://doi.org/10.1080/10106049.2022.2102224
                                                                                </a>-->
                                                                            </li>

                                                                            <li class="mb-2">
                                                                               <b>Sharma R.D.,</b> Yadav A.K.,Kumar A.(2017)<span class="text-primary"> Waste Cooking Oil as a Rejuvenating Agent in Aged Bitumen, International Journal of Control Theory and Applications, 10. (ID IJCTA 2017 8572)     
                                                                            </li>





                                                                            <li class="mb-2">
                                                                                Verma A., Yadav A.K., Sarkar A.K.(2017). Managing level crossing safety and economic evaluation for rail over bridge, International Journal of Advanced in Management, Technology and Engineering Sciences, Volume 7 Issue 11, PP 115-121.  
                                                                            </li>




                                                                            <li class="mb-2">
                                                                              Yadav A.K. and Gupta S.(2015). Integration of Public Transport-A Case Study on Ludhiana City, International Journal for Science and Research in Technology (IJSART) volume 1 Issue 5, PP 1-6.
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
                                                                                <b>	Presented paper titled “Challenges of traffic development in Kabul City” at the “National Conference on Technical Advancements in Civil Engineering” held at LPU, Punjab organized by School of Civil Engineering, during April 04-05, 2016</b>
																				<!---<a
                                                                                    class="outside-link"
                                                                                    href="https://doi.org/10.1080/10106049.2022.2102224 "
                                                                                    target="_blank">https://doi.org/10.1080/10106049.2022.2102224
                                                                                </a>-->
                                                                            </li>

                                                                            <li class="mb-2">
                                                                               <b>	Presented paper titled “Managing Level Crossing Safety And Economic Evaluation For Rail Over Bridge” in National Conference on Civil, Geotech and Transport Research held at NERIST, A.P. organized by Department of Civil Engineering, during October 14-15, 2017</b>    
                                                                            </li>





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