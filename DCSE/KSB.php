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
                                                <img src="../DCSE/faculty/kanoriya.jpg" alt="Admin" class="rounded-circle"
                                                    width="150">
                                                <div class="mt-3">
                                                    <h4> Dr. Kanojia Sindhuben Babulal </h4>
                                                    <p class="text-secondary mb-1"> Assistant Professor </p>
                                                    <p class="text-muted font-size-sm"> Department of Computer Science and Engineering</p>
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
                                                    Dr. Kanojia Sindhuben Babulal 
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Email</h6>
                                                </div>
                                                <div class="col-sm-9 fw-bold">
                                                   dr.kanojiasindhu@cuj.ac.in<br />sindhukanojia@gmail.com
                                                </div>
                                            </div>

                                            <hr>
                                            <div class=" row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Mobile</h6>
                                                    </div>
                                                    <div class="col-sm-9 fw-bold">
                                                       +91 9415800952
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
                                                                        href="#">0000-0003-0442-8795
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
                                                                        href="#">3OMjNZIAAAAJ
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
                                                    <div>24</div>
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
                                                    <div>3</div>
                                                    <div>Books and Book Chapters</div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div style="background-color: #F36510; min-height: 91px;"
                                                    class=" shadow rounded p-3 text-center">
                                                    <div>3</div>
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
                                                           Dr. Kanojia Sindhuben Babulal is an Assistant Professor in Department of Computer Science and Engineering at Central University of Jharkhand, Ranchi, India. She received her Ph.D in Computer Science in 2012 from University of Allahabad. Her area of interest includes Cross layer designs, Energy Efficient Wireless Networks, MANETs, Image Processing, Machine Learning.</p>
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

                                                            <b>Ph.D.</b> <time></time><br>
                                                      
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
																	<li>1. Ph.D</li>
																	<li>2. M.Tech (CSE)</li>
																	<li>3. B.Tech (CSE)</li>
																	<li>4. Int. UG & PG</li>
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
                                                                    <li class="mb-2">	<span class="text-primary">Member,</span> 
																	Board of Studies, DCSE, 2021-24</li>
																	<li class="mb-2">	<span class="text-primary">Member,</span> Department Research Committee (DRC) since April 2022.</li>
																	<li class="mb-2">	<span class="text-primary">Member,</span> IT Policy CUJ </li>
																	<li class="mb-2"><span class="text-primary">Member,</span> Departmental Admission Committee for CUCET 2020 till date</li>
																	<li class="mb-2"><span class="text-primary">Member,</span> Departmental Academic Purchase Committee 2020</li>
     
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
																 <h6 class="pointer" style="width: fit-content;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PATENT PUBLISHED/FILED::</h6>
															  </div>
															  <div class="rs-check-out">
																 <div style="text-align: justify;">
																	<ol class="list-group list-group-numbered">
																	<li class="mb-2">
																		<b>Title:</b> An IOT based Smart Gas Monitoring and Controlling System<br />
																		<b>Application No:</b> 202231009348A<br />
																		<b>Publication Date:</b> 11/03/2022<br />
																	</li>
																	<li class="mb-2">
																		<b>Title:</b> Process for Selection of Region Head of Region Head of Region in WSN<br />
																		<b>Application No:</b> 202231068919 A<br />
																		<b>Publication Date:</b> 09/12/2022<br />
																	</li>
																 </div>
															  </div>
														   </div>
														</div>
                                                        <div class="testimonial-item sec-color">
                                                            <div class="profile-counter pt-3 pb-3">
                                                                

                                                                <div class="sec-title-2">
                                                                    <h6 class="pointer" style="width: fit-content;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NATIONAL/INTERNATIONAL JOURNAL:</h6>
                                                                </div>
                                                                <div class="rs-check-out">
                                                                    <div style="text-align: justify;">


                                                                        <ol class="list-group list-group-numbered">
                                                                            <li class="mb-2">
                                                                                <b>Kanojia Sindhuben Babulal,</b> Rajiv Ranjan Tewari,<span class="text-primary"> “Increasing Connectivity using Hybrid Farthest Intermediate Cooperative Cross Layer Design for Wireless Sensor Network”,</span> National Academy of Science Letter, Volume.34, Number. 7&8, pp. 265-273 July-August 2011 issue.<b>[SCI-E, Q3, IF = 1.1]</b>
                                                                            </li>

                                                                            <li class="mb-2">
                                                                                <b>Kanojia Sindhuben Babulal,</b> Rajiv Ranjan Tewari,<span class="text-primary"> “Cross Layer Route Discovery using Farthest Intermediate Link Distance Reliability Cost Based for MANETS”,</span> National Academy of Science Letters, Volume.34, Number 5&6, page. 189-197, May-June 2011 issue.<b> [SCI-E, Q3, IF = 1.1]  </b>  
                                                                            </li>





                                                                            <li class="mb-2">
                                                                               <b>Kanojia Sindhuben Babulal,</b> Rajiv Ranjan Tewari,<span class="text-primary">  “Cross Layer Design for Cooperative Transmission in Wireless Sensor Network”,</span>Wireless Sensor Network, Volume 3, Number 6, page 209-214, June2011.  DOI:10.4236/wsn.2011.36024
                                                                            </li>




                                                                            <li class="mb-2">
                                                                               <b>Kanojia Sindhuben Babulal,</b> Rajiv Ranjan Tewari, <span class="text-primary"> “E2XLRADR (Energy Efficient Cross layer Routing algorithm with Dynamic Retransmission for Wireless Sensor Networks”,</span> Special Issue in International Journal of Wireless & Mobile Network, Aug 2010, Volume 2, Number 3, pp. 167-177 Aug 2010. DOI: 10.5121/ijwmn.2010.2312
                                                                            </li>



                                                                            <li class="mb-2">
                                                                              <b>Kanojia Sindhuben Babulal,</b> Rajiv Ranjan Tewari,<span class="text-primary"> “Routing Algorithm: An Energy Efficient Sleep/Awake cross layer for wireless sensor networks,”</span>, Advances in Wireless & Mobile Communication, Volume 3, Number 2, 2010, page 139-146.

                                                                            </li>



                                                                            <li class="mb-2">
                                                                              <b>Kanojia Sindhuben Babulal,</b> <span class="text-primary"> “Link Distance Link Cost Link Error Based Energy Efficient Cross Layer Reliable Routing for Wireless Sensor Network”</span>,International Journal of Computer Information Systems and Industrial Management Applications (IJCISIM), Volume 5, (2013), pp. 437-444. ISSN 2150-7988. DOI: 10.1109/wict.2011.6141350. <b> [UGC Approved & Scopus] </b>
                                                                            </li>


                                                                            <li class="mb-2">
                                                                                	<b>Kanojia Sindhuben Babulal,</b> Rajiv Ranjan Tewari,<span class="text-primary"> “Cross layer design for network lifetime extension with retransmission by sending traffic to multiple paths”,</span> Journal of Multidisciplinary Research Studies Vol (1) pp 6-9, January 2015.
                                                                            </li>



                                                                            <li class="mb-2">
                                                                                	Ekta Agrawal, <b> Kanojia Sindhuben Babulal </b> <span class="text-primary"> "Evaluation of Voice Codec of VOIP Applications for MANETs,"</span> International Journal of Current Engineering and Technology, Volume 4, Number 4 (August 2014), pp 2599-2603. ISSN : 2277-4106.<b> [UGC Approved] </b>
                                                                            </li>
																			<li class="mb-2">
                                                                                	Ekta Agrawal, <b> Kanojia Sindhuben Babulal </b> <span class="text-primary"> "QoS Evaluation of VOIP codec in Mobile Ad hoc Network,"</span>International Journal of Advanced Information Science and Technology, Vol. 30, No.30, pp. 103-109, Oct 2014. 
                                                                            </li>
																			<li class="mb-2">
                                                                                Prakash Tripathi,<b> Kanojia Sindhuben Babulal </b><span class="text-primary"> "Security in Vehicular Ad hoc Network,"</span>International Journal of Scientific & Technology Research, Vol 3, Issue 11, ISSN : 2278-1021,Nov 2014.<b> [UGC & Scopus]</b>
                                                                            </li>
																			<li class="mb-2">
                                                                                Prakash Tripathi,<b> Kanojia Sindhuben Babulal </b><span class="text-primary"> "Security in Vehicular Ad hoc Network using digital envelop in distributed environment,"</span>International Journal of advanced research in computer & communication engineering, Vol 4, Issue 3, pp 1-8, March 2015. DOI: 10.17148/ijarcce.2015.4313
                                                                            </li>
																			<li class="mb-2">
                                                                                Surabhi Saxena,<b> Kanojia Sindhuben Babulal </b><span class="text-primary"> "SURVEY: Increasing Energy of Node by Modified Leach Protocol,"</span>International Journal on Recent and Innovation Trends in Computing and Communication, Vol 3 Issue 9, pp. 5466-5469, September 2015 Doi: 10.17762/ijritcc.v3i9.4862 <b> [Scopus] </b>
                                                                            </li>
																			<li class="mb-2">
                                                                                Surabhi Saxena,<b> Kanojia Sindhuben Babulal </b><span class="text-primary"> "WSN Lifetime Enhancement by Utilizing Distribution Hetrogeneity Parameters,"</span> International Journal of Research and Development in Applied Science and Engineering, Vol 8, Issue 1, October 2015. 
                                                                            </li>
																			<li class="mb-2">
                                                                               Attiuttama,<b> Kanojia Sindhuben Babulal </b><span class="text-primary"> "An Approach for Congestion Control in Wireless Network using Sliding Window,"</span>International Journal of Innovative Research in Computer and Communication Engineering, vol. 3, no. 10, pp. 9526-9532, October 2015. DOI: 10.15680/IJIRCCE.2015
                                                                            </li>
																			<li class="mb-2">
                                                                               Attiuttama,<b> Kanojia Sindhuben Babulal </b><span class="text-primary"> "Analyzing Superiority of Tail Drop over Random Early Discard by evaluating throughput using varying queue length in 802.11,"</span>International Journal of Computer Sciences and Engineering, Volume-03, Issue-11, Page No (23-27), Nov -2015, E-ISSN:2347-2693  <b> [UGC Approved] </b>.
                                                                            </li>
																			<li class="mb-2">
                                                                               Priyanka,<b> Kanojia Sindhuben Babulal </b><span class="text-primary"> "Time Effective Vehicle Booking: A Novel data Online Cluster Search Recommender System,"</span>International Journal of Computer & Technology, Volume 15, No 13, November 2016, DOI: 10.24297/ijct.v15i13.4817
                                                                            </li>
																			<li class="mb-2">
                                                                               Tripathi Lalit Kumar,<b> Kanojia Sindhuben Babulal </b><span class="text-primary"> "Time Effective Vehicle Booking: A Novel data Online Cluster Search Recommender System,"</span>International Journal of Computer Science and Information Technologies”, Volume 7, No 5, pp 2381-2384, 2016, ISSN 0975-9646
                                                                            </li>
																			<li class="mb-2">
                                                                               Tripathi Lalit Kumar,<b> Kanojia Sindhuben Babulal </b><span class="text-primary"> "Analysis of Black Hole Attack During Route Discovery Phase of AODV in MANET,"</span>International Journal of Engineering Technologies and Management Research”, Volume 4, No 11, pp 75-80, Nov 2017, ISSN 2454-1907. DOI: 10.5281/zenoda.1117167
                                                                            </li>
																			<li class="mb-2">
                                                                               Jyoti Khuswaha,<b> Kanojia Sindhuben Babulal </b><span class="text-primary"> "Review Paper on VANET and the Challenges,"</span>Journal of Advances and Scholarly Researches in Allied Education”, Volume 16, Issue:5, ISSN 2230-7540, April 2019. <b> [UGC Approved] </b>
                                                                            </li>
																			<li class="mb-2">
                                                                               Jyoti Khuswaha,<b> Kanojia Sindhuben Babulal </b><span class="text-primary"> "Implementation of GPVR and its Comparison with GPSR,"</span>Journal of Advances and Scholarly Researches in Allied Education”, Volume 16, Issue:6, ISSN 2230-7540, May 2019. <b> [UGC Approved] </b>.
                                                                            </li>
																			<li class="mb-2">
																				<b> Kanojia Sindhuben Babulal</b>, A. K. Das, P. Kumar, D. S. Rajput, A. Alam, A. J. Obaid, <span class="text-primary"> “Real Time Surveillance System for Detection of Social Distancing”,</span> International Journal of E-Health and Medical Communications (IJEHMC) Vol. 13(4), pp. 1-13, 2022<b>(IGI Global/Scopus)</b>.
                                                                            </li>
																			 <li class="mb-2">
                                                                                	A. Sharma, P. Kumar,<b> Kanojia Sindhuben Babulal</b>, A. J. Obaid, H. Patel<span class="text-primary"> “Categorical Data Clustering Using Harmony Search Algorithm for Healthcare datasets”,</span> International Journal of E-Health and Medical Communications (IJEHMC), Vol. 13(4), pp. 1-15, 2022<b>(IGI Global/Scopus)</b>.

                                                                            </li>
																			
																			<li class="mb-2">
                                                                             Priyanka,<b> Kanojia Sindhuben Babulal </b><span class="text-primary"> "Hematological image analysis for segmentation and characterization of erythrocytes using Fc-TriSDR,"</span>Multimedia Tools and Applications. Volume 81 (Issue), Article ID: 13613, ISSN 1380-7501. August 2022 <b> (SCI-E, Q2, IF = 2.57) </b>
                                                                            </li>
																			<li class="mb-2">
                                                                            Prasanta Pratim Bairagi, Mala Dutta & <b> Kanojia Sindhuben Babulal</b> <span class="text-primary"> "An Energy-Efficient Protocol based on Recursive Geographic Forwarding Mechanisms for Improving Routing Performance in WSN,"</span>IETE Journal of Research, March 2023, Vol 69, PP 1-13 DOI: 10.1080/03772063.2023.2186501, (2023) ISSN 0974-780X <b> (SCI-E, Q3, IF =1.87) </b>
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
                                                                               <b> Kanojia Sindhuben Babulal</b>, Rajiv Ranjan Tewari,<span class="text-primary"> "Cross Layer Energy Efficient Cost Link Based Routing for Wireless Sensor Network”,</span> Special Session in IEEE World Congress on Information & Communication Technology, University of Mumbai, Mumbai, December 11-14, 2011pp 804-809. [IEEE]
																				<!---<a
                                                                                    class="outside-link"
                                                                                    href="https://doi.org/10.1080/10106049.2022.2102224 "
                                                                                    target="_blank">https://doi.org/10.1080/10106049.2022.2102224
                                                                                </a>-->
                                                                            </li>

                                                                            <li class="mb-2">
                                                                               <b> Kanojia Sindhuben Babulal</b>, Rajiv Ranjan Tewari, <span class="text-primary">”Cross Layer Cooperative Clustering for Performance Enhancement in Wireless Sensor Network”,</span> In Proceedings of IEEE 2nd International Conference on Current Trends in Technology, NUiCONE, Nirma University, Ahmedabad, December 8-10, 2011. [IEEE]  
                                                                            </li>





                                                                            <li class="mb-2">
                                                                               <b> Kanojia Sindhuben Babulal</b>, Rajiv Ranjan Tewari, <span class="text-primary">“ Cross Layer Design with Link and Reliability Analysis for Wireless Sensor Network”,</span> In Proceedings of 2nd International Conference on Current Trends in Technology, NUiCONE, Nirma University, Ahmedabad, Dec. 8-10, 2011. [IEEE] 
                                                                            </li>




                                                                            <li class="mb-2">
                                                                              <b> Kanojia Sindhuben Babulal</b>, Rajiv Ranjan Tewari, <span class="text-primary">“ Cross Layer Energy Efficient Routing (XLE2R) for Prolonging the lifetime of Wireless Sensor Network ”,</span> International Conference on Computer and Communication Technology (ICCCT-2010), MNNIT Allahabad, September 15 -17, 2010, pp. 70-74, [IEEE] 
                                                                            </li>



                                                                            <li class="mb-2">
                                                                               <b> Kanojia Sindhuben Babulal</b>, Rajiv Ranjan Tewari,<span class="text-primary"> “Cross Layer Design for Network Lifetime Extension with Retry Limit for Retransmission by Sending the traffic to Multiple Paths”</span>, International Conference on Control, Computing, Communication and Materials-2013 (ICCCCM-2013), UIT, Allahabad, August 03-04, 2013. [IEEE]

                                                                            </li>



                                                                            <li class="mb-2">
                                                                             Akhilesh Kumar Singh, <b> Kanojia Sindhuben Babulal </b>, Surabhi Kesarwani, Ajeet pandey, <span class="text-primary">“Intelligent Transport System: Emergence of new era in Transport Management” </span>, International Conference on Control, Computing, Communication and Materials-2013 (ICCCCM-2013), UIT, Allahabad, August 03-04, 2013. [IEEE]
                                                                            </li>


                                                                            <li class="mb-2">
                                                                                	 <b> Kanojia Sindhuben Babulal</b>, Rajiv Ranjan Tewari <span class="text-primary"> “An Energy Efficient Routing Algorithm for Wireless sensor Networks”</span> In Proceedings of 11thInternational Conference of International Academy of Physical Sciences, University of Allahabad, February 20-22, 2010.
                                                                            </li>



                                                                            <li class="mb-2">
<b> Kanojia Sindhuben Babulal</b>, Rajiv Ranjan Tewari <span class="text-primary">“Cross layer design for network lifetime extension with retransmission by sending traffic to multiple paths”</span>, In Proceedings of International Conference on Exploring Trends and Practices in Information Technology and Management, sponsored by UGC (CRO), St. Aloysius College,5-6th Jan, 2015, Jabalpur,  MP. <b> BEST PAPER AWARDED</b>.
                                                                            </li>



                                                                            <li class="mb-2">
                                                                          <b> Kanojia Sindhuben Babulal</b>, Rajiv Ranjan Tewari, <span class="text-primary">"An Energy Efficient Reliable cross layer routing algorithm for MANETs,"</span> National Seminar on Lazer, Spectroscopy and Nanomaterials, Nehru Gram Bharati University, Allahabad, March 5-7, 2011

                                                                            </li>



                                                                            <li class="mb-2">
                                                                              	<b> Kanojia Sindhuben Babulal</b>, Rajiv Ranjan Tewari <span class="text-primary">“XLRA Cross layer Routing Algorithm with dynamic Retransmission for multi hop Wireless Sensor network”,</span> in Proceeding of Advances & Trends in Web-Based Computing (ATWBC-2010), Mahatama Gandhi Kashi VidyaPeth, Varanasi, March 28-29, 2010.
                                                                            </li>
																			
																			 <li class="mb-2">
                                                                              <b> Kanojia Sindhuben Babulal</b>, Rajiv Ranjan Tewari <span class="text-primary"> “Comparing Directed and Random Routing Based on Lifetime Metric for WSNs”,</span> 84th Annual Session of Academy of National Academy of Science, Jai Narayan Vyas University, Jodhpur, December 5-6th 2014.
                                                                            </li>
																			
																			<li class="mb-2">
                                                                              <b> Kanojia Sindhuben Babulal</b>, Rajiv Ranjan Tewari <span class="text-primary"> “Cluster Computing using Cross Layer Design for MANETs”</span> 85th Annual Session of National Academy of Science, KIIT University, Bhubaneshwar, December 6-8 2015.
                                                                            </li>
																			<li class="mb-2">
                                                                              <b> Kanojia Sindhuben Babulal</b>, Rajiv Ranjan Tewari <span class="text-primary"> “Security in Vehicular Ad hoc Network in distributed environment”</span> 86th Annual Session of National Academy of Science, UCOST, Dehradun, December 2-4, 2016.
                                                                            </li>
																			<li class="mb-2">
                                                                              <b> Kanojia Sindhuben Babulal</b> <span class="text-primary"> “Cross Layer designs”</span> Two Day Zonal Seminar on ICT: Current Perspective” organized by IETE Allahabad Center on April 12-13, 2014.
                                                                            </li>
																			<li class="mb-2">
                                                                              Shradha Gupta, Shilpa Choudhary, <b> Kanojia Sindhuben Babulal</b> and Sanjeev Sharma<span class="text-primary"> “Optimizing and validating performance of 40Gbps optical system”</span> In Modern Electronics Devices and Communication Systems: Proceedings of MEDCOM 2021, pp. 131-140, 2023. <b> [Springer] </b>
                                                                            </li>
																			<li class="mb-2">
                                                                             <b> Babulal, Kanojia Sindhuben </b>, and Amit Kumar Das<span class="text-primary"> “Deep Learning-Based Object Detection: An Investigation.”</span> In Futuristic Trends in Networks and Computing Technologies: Select Proceedings of Fourth International Conference on FTNCT 2012, pp. 697-711. 2022, <b> [Springer] </b>
                                                                            </li>
																			<li class="mb-2">
                                                                            Bairagi, Prasanta Pratim, Mala Dutta, and <b> Kanojia Sindhuben Babulal</b> <span class="text-primary"> “Location based Routing Protocols and its Performances in Wireless Sensor Networks: An Investigation.”</span> In 2022 3rd International Conference on Electronics and Sustainable Communication Systems (ICESC), pp. 583-590. 2022. <b>[IEEE]</b>.
                                                                            </li>
																			<li class="mb-2">
                                                                            Puspendra Kumar, <b> Kanojia Sindhuben Babulal </b>, Dashrath Mahto and Zaviya Khurshid. <span class="text-primary"> “Analyzing Deep Neural Network Algorithms for Recognition of Emotions using Textual Data.”</span> In 5th International Conference on Information Systems and Management Science (ISMS 2022) organized by Faculty of ICT, University of Malta, during November 24-26, 2022. <b> [Springer] </b>
                                                                            </li>
																			<li class="mb-2">
                                                                            Bairagi, Prasanta Pratim, Mala Dutta, and <b> Kanojia Sindhuben Babulal</b>.  <span class="text-primary"> “Performance Comparison of Various Routing Protocols with reference to the network Size in Wireless Sensor Network”</span> In International Conference on Emerging Wireless Technologies and Sciences (ICEWTS-2023) organized by AAIR Lab, India during 07-08 May 2023. <b> [IEEE] </b>
                                                                            </li>
																			<li class="mb-2">
                                                                            Jangade, Jyoti, and <b> Kanojia Sindhuben Babulal </b> <span class="text-primary"> “Study on Deep Learning Models for Human Pose Estimation and its Real Time Application”</span> In 2023 6th International Conference on Information Systems and Computer Networks (ISCON), pp. 1-6. 2023, <b>[IEEE]</b>.
                                                                            </li>
																			<li class="mb-2">
                                                                            Kumar, P. and <b> Kanojia Sindhuben Babulal</b>, 2023, February. <span class="text-primary"> “Pre-processing Pipelines for Effective Segmentation of Lymphatic Filariasis Parasite Images”</span> In International Conference on Advanced Computational and Communication Paradigms (pp. 403-414). Singapore: Springer Nature Singapore.
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
                                                                    <h6 class="pointer">Total Publications: 3</h6>
                                                                </div>
                                                                <div class="rs-check-out">
                                                                    <div class="rs-payment-system" style="text-align: justify;">

                                                                        <ol class="list-group list-group-numbered">
                                                                            <li class="mb-2">
                                                                                	<b> Kanojia Sindhuben Babulal</b>, and Bashu Kumar Nayak, <span class="text-primary">"Suicidal Analysis on Social Networks Using Machine Learning."</span> In The Internet of Medical Things (IoMT) and Telemedicine Frameworks and Applications, pp. 230-247. <b> IGI Global</b>, 2023. ISBN: 9781668435335

                                                                            </li>

                                                                            <li class="mb-2">
                                                                             <b> Kanojia Sindhuben Babulal</b> and Apurba Kundu. <span class="text-primary"> "Authentication ByPass Through Social Engineering"</span>. In Cybercrime in Social Media Theory and Solution, pp 225-244, <b>Taylor and Francis</b>, May 2023. ISBN 9781032300825
                                                                            </li>
																			
																			<li class="mb-2">
                                                                            Prasanta Pratim Bairagi, <b> Kanojia Sindhuben Babulal </b>, and Mala Dutta. <span class="text-primary"> "Power Management in Wireless Sensor Networks."</span> In Advanced Wireless Communication and Sensor Networks, pp. 151-171. <b> Chapman and Hall/CRC</b>.
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

                                       <div class="col-12 mb-3" id="8">
										   <h3 class="mb-2 bg-textPrimary"><i
											  class="bi bi-briefcase-fill me-2"></i>Expert Lectures / Invited Talk</h3>
										   <div class="card bg-light shadow rounded mb-4">
											  <div class="card-body">
												 <div class="testimonial-item sec-color">
													<div class="personal_list_style pb-20" style="text-align: justify;">
													   <ol class="list-group list-group-numbered">
														  <li>
															 Delivered Lecture as Speaker in Faculty Development Program on <b>“Data Structures and Algorithms”</b> on 4th to 9th July 2016 at United College of Engineering and Research, Allahabad Sponsored by Dr. A.P.J. Abdul Kalam Technical University.
														  </li>
														  <li>Delivered Invited talk on <b>Wireless Sensor Networks, Technology and Applications</b> on 12/06/2015 in Summer Training Workshop Organized by The Institution and Telecommunication Engineers
														  </li>
														  <li>Delivered Lecture as Speaker in Faculty Development Program on <b>“Advance Computer Networks”</b> on 1st to 5th May 2018 at United College of Engineering and Research, Allahabad sponsored by DR A.P.J. Abdul Kalam Technical University.
														  </li>
														   <li>Delivered Invited Talk on <b>“ICT & New Technologies”</b> on 05/12/2020 at <b>UGC Refresher Course</b> on Information and Communication Technologies at University of Allahabad. 
														  </li>
														   <li>Delivered Invited talk on <b>“Wireless Sensor Networks: An Introduction”</b> on 13/02/2021 at Webinar under <b>CSI Student Branch</b>, RCPET’S IMRD, Shirpur, Maharashtra.
														  </li>
														   <li>Resource person in One Week FDP in AICTE Training and Learning (ATAL) Academy Online FDP on Data Analytics and Machine Learning on topic <b>“Genetic Algorithm”</b> from 20/09/2021 to 24/09/2021 at Central University of Jharkhand
														  </li>
														   <li>Delivered Invited Talk on <b>“Digital Security in Classrooms”</b> on 25th – 30th April 2022 in One Week Orientation Program in Natural Sciences for Teachers of Senior Secondary Schools (OPNST)-2022 at Department of Physics, Central University of Jharkhand, Ranchi, Jharkhand.
														  </li>
													   </ol>
													</div>
												 </div>
											  </div>
										   </div>
										</div>
									   
									   <div class="col-12 mb-3" id="9">
                                                <h3 class="mb-2 bg-textPrimary"><i
                                                        class="bi bi-briefcase-fill me-2"></i>
                                                    PhD Supervision</h3>
                                                <div class="card bg-light shadow rounded mb-4">
                                                    <div class="card-body">
														
														<div class="testimonial-item sec-color pt-3 pb-3">
                                                            <div class="sec-title-2">
                                                                <h6 class="pointer">Completed</h6>
                                                            </div>

                                                            <div class="personal_list_style pb-20" style="text-align: justify;">
                                                                <ol class="list-group list-group-numbered">
                                                                            

                                                                    <li>Prasanta Pratim Bairagi, Ph.D Thesis Title: Design and Simulation of an Energy Efficient Routing Protocol in Wireless Sensor Network, <i class="fa fa-user"
                                                                            style="color: #ff3115">&nbsp;</i>Co-Supervisor &nbsp; <i class="fa fa-calendar"
                                                                            style="color: #ff3115">&nbsp;</i>Awarded on 11/07/23
                                                                    </li>

</ol>
                                                                
                                                            </div>

                                                        </div>
														
														
                                                        <div class="testimonial-item sec-color  pt-3 pb-3">
                                                            <div class="sec-title-2">
                                                                <h6 class="pointer">Ongoing</h6>
                                                            </div>

                                                            <div class="personal_list_style pb-20" style="text-align: justify;">
                                                                <ol class="list-group list-group-numbered">
                                                                            

                                                                    <li>

                                                                        Priyanka Kumar, Ph.D Thesis Title: Image Analysis of Lymphatic Filariasis Parasite, <i class="fa fa-user"
                                                                            style="color: #ff3115">&nbsp;</i>Supervisor &nbsp; <i class="fa fa-calendar"
                                                                            style="color: #ff3115">&nbsp;</i>2021
                                                                    </li>

                                                                    <li>

                                                                       Jyoti Jangade, Ph.D Thesis Title: Implementation of Machine Learning Techniques for Identification of Correct YOGA Poses, <i class="fa fa-user"
                                                                            style="color: #ff3115">&nbsp;</i> Supervisor&nbsp;<i class="fa fa-calendar"
                                                                            style="color: #ff3115">&nbsp;</i> 2021
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
                                                    AWARDS AND HONOURS</h3>
                                                <div class="card bg-light shadow rounded mb-4">
                                                    <div class="card-body">
                                                        <div class="testimonial-item sec-color">

                                                            <div class="pb-20">
                                                                <ol class="list-group list-group-numbered">
                                                                    <li class="mb-2"><strong>Awardee of UGC National Fellowship for Ph.D,  2007-2011</strong>

                                                                    </li>
                                                                    <li class="mb-2"><strong>Best Paper Award UGC Sponsored International Conference in 2015</strong>
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
                                                    Any Other Information</h3>
                                                <div class="card bg-light shadow rounded mb-4">
                                                    <div class="card-body">
                                                        <div class="testimonial-item sec-color">
                                                            <div class="pb-20" style="text-align: justify;">

                                                                <ol class="list-group list-group-numbered">
																	<li>
																		<b>IEEE Member</b> (Id: 95659892)
																	</li>
																	<li>
																		<b>Lifetime Member</b> IAENG (Id: 112741)
																	</li>
																	<li>
																		<b>Lifetime Member</b> MIR LABS, USA
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