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
		                    <h1 class="page-title">Faculty Profile</h1>
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
                                                <img src="../DCSE/faculty/subhash.jpg" alt="Admin" class="rounded-circle"
                                                    width="150">
                                                <div class="mt-3">
                                                    <h4>Prof. Subhash Chandra Yadav</h4>
                                                    <p class="text-secondary mb-1"> Professor </p>
                                                    <p class="text-muted font-size-sm">Head , 
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
                                                    <a href="#10"><i class="fa fa-graduation-cap me-2"></i>
                                                        COURSES TAUGHT</a>
                                                </h6>
                                            </li>
                                            
                                            
                                            
                                            <li name="timeline" class="list-group-item">
                                                <h6 class="mb-0">
                                                    <a href="#6"><i
                                                            class="fa fa-calendar-check-o me-2"></i>Additional role/
                                                        responsibility</a>
                                                </h6>
                                            </li>
                                            <li name="timeline" class="list-group-item">
                                                <h6 class="mb-0">
                                                    <a href="#7"><i
                                                            class="fa fa-calendar-check-o me-2"></i>Articles
                                                        Published</a>
                                                </h6>
                                            </li>
                                            <li name="timeline" class="list-group-item">
                                                <h6 class="mb-0">
                                                    <a href="#8"><i
                                                            class="fa fa-calendar-check-o me-2"></i>Books and Book
                                                        Chapters </a>
                                                </h6>
                                            </li>


                                            <li name="timeline" class="list-group-item">
                                                <h6 class="mb-0">
                                                    <a href="#14"><i
                                                            class="fa fa-certificate me-2"></i>Program Organised</a>
                                                </h6>
                                            </li>


                                            <li name="timeline" class="list-group-item">
                                                <h6 class="mb-0">
                                                    <a href="#15"><i class="fa fa-trophy me-2"></i>Awards and
                                                        Honours</a>
                                                </h6>
                                            </li>

                                            <li name="timeline" class="list-group-item">
                                                <h6 class="mb-0">
                                                    <a href="#16"><i class="fa fa-tasks me-2"></i>Any Other
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
                                                    Dr. Subhash Chandra Yadav
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Email</h6>
                                                </div>
                                                <div class="col-sm-9 fw-bold">
                                                   dr.scyadav@cuj.ac.in 
                                                </div>
                                            </div>

                                            <hr>
                                            <div class=" row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Mobile</h6>
                                                    </div>
                                                    <div class="col-sm-9 fw-bold">
                                                        +91 9415870233
                                                    </div>
                                          </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Address</h6>
                                                    </div>
                                                    <div class="col-sm-9 fw-bold">
                                                        Department of Computer Science and Engineering
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
                                                                <h6 class="mb-0 fw-bold">Orcid Id : 0000-0002-1075-6384</h6>
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
                                                                        href="https://scholar.google.com/citations?user=i9_x8x8AAAAJ&hl=en"></a>
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
                                                                        href="https://scholar.google.com/citations?user=i9_x8x8AAAAJ&hl=en">
                                                                      </a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-6">
                                                        <div class="d-flex align-items-center">

                                                            <div>
                                                                <h6 class="mb-0 fw-bold"><a target="_blank"
                                                                        href="#">IRINS</a>
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
                                                    <div>31</div>
                                                    <div>Journal PUBLICATIONS</div>
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
                                                    <div>9</div>
                                                    <div>Books and Book Chapters</div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div style="background-color: #F36510; min-height: 91px;"
                                                    class=" shadow rounded p-3 text-center">
                                                    <div><strong>Awarded : 4</strong></div>
													<div><strong>Ongoing : 4</strong></div>
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
                                                        
                                                       
                                                        <p>
                                                            Having 25+ years of teaching and IT industry experience Dr. Yadav is a young and dynamic 
academician in the field of Computer Science and Engineering. Apart from carrying academic 
responsibility he has contributed to Computer Society of India (CSI) as a National Chairman 
Education and Research (Division -V) for the year 2019/2021 and founder Chairman CSI- Varanasi 
Chapter; And ISCA in the capacity of Sectional Member, Sectional Recorder, and also Sectional 
President for the year 2013/14. Taken various imitative for the dissemination of computer  literacy in 
the society by organizing various workshop/seminar in the eastern UP / Bihar and organized CAP      
(  Computer Awareness and Literacy Programs ) in villages of  Ranchi (Jharkhand).

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 mb-3" id="2">
                                                <h3 class="mb-2 bg-textPrimary"><i
                                                        class="bi bi-mortarboard-fill me-2"></i>EDUCATION QUALIFICATION
                                                </h3>
                                                <div class="card bg-light shadow rounded mb-4">
                                                    <div class="card-body">
                                                        <div class="bg-primary p-3 mb-2 rounded">
														  <p><strong>Ph.D. , </strong><b>MPhil (</b>IT), <b>MTech</b>
                                                            <time>(IT)</time>
                                                            ,
                                                            <b>MCA</b></p>
														  <p><b>MBA</b>                                                          
														    <time>(IT& HR)</time>
														    , <b>MSc.</b>                                                      </p>
                                                      </div>


                                                    </div>
                                                </div>
                                            </div>

                                            

                                     <div class="col-12 mb-3" id="10">
                                                <h3 class="mb-2 bg-textPrimary"><i
                                                        class="bi bi-briefcase-fill me-2"></i>
                                                    COURSES TAUGHT</h3>
                                                <div class="card bg-light shadow rounded mb-4">
                                                    <div class="card-body">
                                                        <div class="testimonial-item sec-color">

                                                            <div class="personal_list_style pb-20">
                                                                <ul>

                                                                    <li>

                                                                        <strong>PG </strong>: M.Tech, MCA, MBA                                                                    </li>

                                                                    <li>

                                                                        <strong>UG</strong> : B. Tech, BSE, BIS, BCA, BBA                                                                    </li>

                                                                    

                                                                    
                                                                    

                                                                </ul>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
</div>       

                                            

                                            <!----<div class="col-12 mb-3" id="6">
                                            <h3 class="mb-2 bg-textPrimary"><i class="bi bi-briefcase-fill me-2"></i>
                                                CONTINUING EDUCATION</h3>
                                            <div class="card bg-light shadow rounded mb-4">
                                                <div class="card-body">
                                                    <div class="testimonial-item">

                                                        <div class="rs-check-out">
                                                            <div class="rs-payment-system">

                                                                <div class="payment-radio-btn1"
                                                                    style="border-color: #17a2b8;">
                                                                    <div class="title">3rd short term course on
                                                                        "Corrosion and its control and characterization"
                                                                    </div>
                                                                    <p><i class="fa fa-home">&nbsp;</i>Metallurgical and
                                                                        Materials Engineering</p>
                                                                    <div class="row">
                                                                        <div class="col-md-3 col-sm-6">
                                                                            <p><i
                                                                                    class="fa fa-user">&nbsp;</i>Coordinator
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6">
                                                                            <p><i class="fa fa-calendar">&nbsp;</i>13
                                                                                Dec 2021 - 17 Dec 2021</p>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6">
                                                                            <p><a
                                                                                    href="/docs/CEP/MM/11122021191121068B.pdf"><i
                                                                                        class="fa fa-download"
                                                                                        title="View Brochure">&nbsp;</i>Brochure</a>
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6">
                                                                            <p><span class="btn btn-info btn-xs">Short-term
                                                                                    Course</span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="payment-radio-btn1"
                                                                    style="border-color: #17a2b8;">
                                                                    <div class="title">3rd Short term course on
                                                                        Corrosion and its control and characterization
                                                                    </div>
                                                                    <p><i class="fa fa-home">&nbsp;</i>Chemical
                                                                        Engineering</p>
                                                                    <div class="row">
                                                                        <div class="col-md-3 col-sm-6">
                                                                            <p><i
                                                                                    class="fa fa-user">&nbsp;</i>Coordinator
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6">
                                                                            <p><i class="fa fa-calendar">&nbsp;</i>13
                                                                                Dec 2021 - 17 Dec 2021</p>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6">
                                                                            <p><a
                                                                                    href="/docs/CEP/CH/21102021175830797B.pdf"><i
                                                                                        class="fa fa-download"
                                                                                        title="View Brochure">&nbsp;</i>Brochure</a>
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6">
                                                                            <p><span class="btn btn-info btn-xs">Short-term
                                                                                    Course</span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="payment-radio-btn1"
                                                                    style="border-color: #17a2b8;">
                                                                    <div class="title">Electrochemistry – Fundamentals
                                                                        and its Applications in Engineering</div>
                                                                    <p><i class="fa fa-home">&nbsp;</i>Chemical
                                                                        Engineering</p>
                                                                    <div class="row">
                                                                        <div class="col-md-3 col-sm-6">
                                                                            <p><i
                                                                                    class="fa fa-user">&nbsp;</i>Coordinator
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6">
                                                                            <p><i class="fa fa-calendar">&nbsp;</i>14
                                                                                Oct 2020</p>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6">
                                                                            <p><a
                                                                                    href="/docs/CEP/CH/03102020134623443B.pdf"><i
                                                                                        class="fa fa-download"
                                                                                        title="View Brochure">&nbsp;</i>Brochure</a>
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6">
                                                                            <p><span class="btn btn-info btn-xs">Short-term
                                                                                    Course</span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="rs-check-out">
                                                            <div class="rs-payment-system">

                                                                <div class="payment-radio-btn1"
                                                                    style="border-color: #6c757d;">
                                                                    <div class="title">An International conference on
                                                                        Advances in Smart Materials, Chemical &amp;
                                                                        Biochemical Engineering (CHEMSMART-22)</div>
                                                                    <p><i class="fa fa-home">&nbsp;</i>Chemical
                                                                        Engineering</p>
                                                                    <div class="row">
                                                                        <div class="col-md-3 col-sm-6">
                                                                            <p><i
                                                                                    class="fa fa-user">&nbsp;</i>Coordinator
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6">
                                                                            <p><i class="fa fa-calendar">&nbsp;</i>16
                                                                                Dec 2022 - 18 Dec 2022</p>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6">
                                                                            <p><a
                                                                                    href="/docs/Conference/CH/27062022133830355B.pdf"><i
                                                                                        class="fa fa-download"
                                                                                        title="View Brochure">&nbsp;</i>Brochure</a>
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6">
                                                                            <p><span
                                                                                    class="btn btn-secondary btn-xs">Conference</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>--->


                                            <div class="col-12 mb-3" id="6">
                                                <h3 class="mb-2 bg-textPrimary"><i
                                                        class="bi bi-briefcase-fill me-2"></i>
                                                    Additional roles/ responsibility</h3>
                                                <div class="card bg-light shadow rounded mb-4">
                                                    <div class="card-body">
                                                        <div class="testimonial-item sec-color">

                                                            <div class="pb-20">
                                                                <ol class="list-group list-group-numbered">
                                                                    <li class="mb-2">Head , 
Department of Computer Science and Engineering</li>
                                                                    
                                                                    
                                                                    

                                                                    <li class="mb-2">Technical Cell In-Charge


                                                                    </li>                                                               
                                                                    
                                                                    
                                                                   
                                                                    
                                                                    
                                                                   
                                                                    
                                                                    
                                                                    
                                                                    
                                                                </ol>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-12 mb-3" id="7">
                                                <h3 class="mb-2 bg-textPrimary"><i
                                                        class="bi bi-briefcase-fill me-2"></i>
                                                    PUBLICATIONS</h3>
                                                
                                                 <div class="card bg-light shadow rounded mb-4">
                                                    <div class="card-body">
                                                        <div class="testimonial-item sec-color">
                                                            <div class="profile-counter pt-3 pb-3">
                                                                <div class="container">
                                                                    <div class="row mb-3">
                                                                        
                                                                        
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="sec-title-2">
                                                                    <h6 class="pointer">Total Publications 39 </h6>
                                                                </div>
                                                                <div class="rs-check-out">
                                                                    <div id="rs-payment-system">


                                                                        <strong>List of Selected Papers :                                                                        </strong>
                                                                        <ol class="list-group list-group-numbered">
                                                                           
                                                                              <li>Mehar Arfi1, Prof. Subhash  Chandra Yadav,Dr. Amit Kumar Yadav “Integrated and automated Breast Cancer  Detection Model using Deep Learning Algorithm on Digital Mammogram Images”, Vytapeni,  Vetrani, Instalace (VVI) JOURNAL, Volume 11, Issue 12 December 2023, ISSN:  1210-1389. (<strong>Scopus Indexed</strong>) <strong> </strong></li>
                                                                              <li>Niraj Kumar, Subhash Chandra  Yadav, “A Hybrid schema: LSTM-BiLSTM with Attention Mechanism to Predict  Emotion in Twitter Data”,<em>International Journal of </em><em>Computing and Digital Systems</em>, 14, No.1  , Sep-2023, ISSN/eISSN:2210-142X/ 2535-9886/2210-142X, (<strong>Scopus Indexed</strong>) <strong> </strong></li>
                                                                              <li>Dashrath Mahto,Subhash  Chandra Yadav, “Emotion Prediction for Textual Data Using GloVe Based  HeBi-CuDNNLSTM Model”, <em>Multimedia Tools and Applications</em>, ISSN /  eISSN:1380-7501 / 1573-7721, Springer, July 2023,                   (<strong>SCI Indexed</strong>, IF=2.577)            <strong> </strong></li>
                                                                              <li>Niraj Kumar, Subhash Chandra  Yadav, “Comprehensive analysis of deep learning-based text classification  models and applications”,<em>International Journal of Applied Science and  Engineering</em>, Vol.20(3), Article No.:2022342,  ISSN/eISSN:1727-2394/1727-7841, (Sept, 2023 ,<strong> Scopus Indexed</strong>)  <a href="http://doi.org/10.6703/IJASE.202309_20(3).002">http://doi.org/10.6703/IJASE.202309_20(3).002</a></li>
                                                                              <li>Dashrath Mahto,Subhash  Chandra Yadav,Gotam Singh Latore,   Sentiment Prediction of Textual Data Using Hybrid ConvBidirectional-LSTM  Model, Hindawi, Mobile Information System, Vol. :2022, ,Issue: 3 (June 2022)  Article ID: 1068554,ISSN/eISSN:1574-107X/1875-905X. (<strong>SCI  Indexed</strong> ,  IF =1.8)</li>
                                                                              <li>Dashrath Mahto,Subhash  Chandra Yadav, Hierarchical Bi-LSTM based Emotion Analysis  of Textual Data for enhanced Sentiment  Prediction , Bulletin of the Polish Academy of Sciences: Technical Sciences ,  Vol.;70(3),2022(April 2022                     (<strong>SCI Indexed</strong> , IF=1.66)</li>
                                                                              <li>Subhash Chandra Yadav , Prashant Kumar , Pushpendra Kumar , Digital  Farming: IoT Enabled Smart Sensor  Based  Insect and Animal Detection System, International Journal of Aquatic Science  (ISSN: 2008-8019) , Vol. 12, No. 2, pp. 2564- 2573, (June, 2021) (<strong>Web of Science Indexed)</strong></li>
                                                                              <li>Mehar Arfi , Subhash Chandra Yadav, A Survey on Applications of Deep  Learning Techniques in Medical Diagnostics for Cancer Detection, Drugs and Cell  Therapies in Hematology (ISSN: 2281-4876 ) Vol. 10, Issue 1, pp.1359-1367,(  June , 2021) (<strong>Web of Science Indexed).</strong></li>
                                                                              <li>Subhash Chandra Yadav ,  Pushpendra Kumar , Virendra Kumar , Performance Analysis Of Deep Neural Network  Algorithm With Optimizer For Rumour Detection, International Journal of Aquatic  Science (ISSN: 2008-8019) , Vol. 12, No. 2, pp. 2849- 2857,(June, 2021)  (<strong>Web  of Science Indexed</strong>).</li>
                                                                              <li>Ramjeet Singh Yadav , Subhash Chandra Yadav , Dr. Deepak Kumar , A  Case Study on Diagnostics of Medical Data Set to Detect the Outliers in  Systolic Blood Pressure using Machine Learning Approach, Drugs and Cell  Therapies in Hematology (ISSN: 2281-4876)  Vol. 10, Issue 1,pp. 1253-1261. (June, 2021) (<strong>Web of Science Indexed</strong>).</li>
                                                                              <li>Arpan Sinha, Teena Bagga and Subhash Chandra Yadav, Model ICT System  and its Intervention in Service Industry : Impact on Creativity, Social and  Ethical Issues,  International Journal  Agricultural and  Statistical Sciences.  (ISSSN: 0973-1903 , eISSN: 0976-3392) Vol. 17, No. 1, pp. 419-427.(April, 2021)  (<strong>Scopus Indexed</strong>)</li>
                                                                              <li>Dashrath Mahto,Subhash  Chandra Yadav, “Emotion Analysis from Text Data Using HeBiLSTM”, <em>The Journal  of Oriental Research Madras (print only)</em>, Vol. 92, Issue:4, Page.  No.169-178, ISSN:0022-3301. September 2021<strong>,  (UGC Care)</strong> </li>
                                                                      </ol>
                                                                           
                                                                            <p>&nbsp;</p>
                                                                            <li class="mb-2">
                                                                                Dashrath Mahto,Subhash Chandra Yadav, “Emotion Prediction for Textual Data Using GloVe Based HeBi-CuDNNLSTM Model”, Multimedia Tools and Applications, ISSN / eISSN:1380-7501 / 1573-7721, Springer, 2023.  (SCI Index, IF=2.577) 	(Accepted).<!---<a
                                                                                    class="outside-link"
                                                                                    href="https://doi.org/10.1080/10106049.2022.2102224 "
                                                                                    target="_blank">https://doi.org/10.1080/10106049.2022.2102224
                                                                                </a>-->
                                                                            </li>

                                                                            <li class="mb-2">
                                                                                Niraj Kumar, Subhash Chandra Yadav, “A Hybrid schema: LSTM-BiLSTM with Attention Mechanism to Predict Emotion in Twitter Data”, International Journal of Computing and Digital Systems, ISSN/eISSN:2535-9886/2210-142X.  (Scopus Indexed). (Accepted )                                                                            </li>





                                                                            <li class="mb-2">
                                                                                Niraj Kumar, Subhash Chandra Yadav, “Comprehensive analysis of deep learning-based text classification models and applications”,International Journal of Applied Science and Engineering, Vol.20(3), Article No.:2022342, ISSN/eISSN:1727-2394/1727-7841, (Sept, 2023)(Scopus Indexed)                                                                            </li>




                                                                            <li class="mb-2">
                                                                                Dashrath Mahto,Subhash Chandra Yadav,Gotam Singh Latore,  Sentiment Prediction of Textual Data Using Hybrid ConvBidirectional-LSTM Model, Hindawi, Mobile Information System, Vol. :2022, ,Issue: 3 (June 2022) Article ID: 1068554,ISSN/eISSN:1574-107X/1875-905X.                                    (SCI Indexed , IF =1.8)                                                                            </li>



                                                                            <li class="mb-2">
                                                                                Dashrath Mahto,Subhash Chandra Yadav, Hierarchical Bi-LSTM based Emotion Analysis  of Textual Data for enhanced Sentiment Prediction , Bulletin of the Polish Academy of Sciences: Technical Sciences , Vol.;70(3),2022(April 2022 (SCI Indexed , IF=1.66).                                                                            </li>



                                                                            <li class="mb-2">
                                                                                Subhash Chandra Yadav , Prashant Kumar , Pushpendra Kumar , Digital Farming: IoT Enabled Smart Sensor  Based Insect and Animal Detection System, International Journal of Aquatic Science (ISSN: 2008-8019) , Vol. 12, No. 2, pp. 2564- 2573, (June, 2021) (Web of Science Indexed)                                                                            </li>


                                                                            <li class="mb-2">
                                                                                Mehar Arfi , Subhash Chandra Yadav, A Survey on Applications of Deep Learning Techniques in Medical Diagnostics for Cancer Detection, Drugs and Cell Therapies in Hematology (ISSN: 2281-4876 ) Vol. 10, Issue 1, pp.1359-1367,( June , 2021) (Web of Science Indexed).                                                                            </li>



                                                                            <li class="mb-2">
                                                                                Subhash Chandra Yadav , Pushpendra Kumar , Virendra Kumar , Performance Analysis Of Deep Neural Network Algorithm With Optimizer For Rumour Detection, International Journal of Aquatic Science (ISSN: 2008-8019) , Vol. 12, No. 2, pp. 2849- 2857,(June, 2021)  (Web of Science Indexed).                                                                            </li>



                                                                            <li class="mb-2">
                                                                                Ramjeet Singh Yadav , Subhash Chandra Yadav , Dr. Deepak Kumar , A Case Study on Diagnostics of Medical Data Set to Detect the Outliers in Systolic Blood Pressure using Machine Learning Approach, Drugs and Cell Therapies in Hematology 
(ISSN: 2281-4876) Vol. 10, Issue 1,pp. 1253-1261. (June, 2021) (Web of Science Indexed).                                                                            </li>



                                                                            <li class="mb-2">
                                                                                Arpan Sinha, Teena Bagga and Subhash Chandra Yadav, Model ICT System and its Intervention in Service Industry : Impact on Creativity, Social and Ethical Issues,  International Journal Agricultural and  Statistical Sciences. (ISSSN: 0973-1903 , eISSN: 0976-3392) Vol. 17, No. 1, pp. 419-427.(April, 2021) (Scopus Indexed)                                                                            </li>



                                                                           


                                                                           


                                                                            <!--<div class="sec-title-2">
                                                                                <h6 class="pointer"> In 2021</h6>
                                                                            </div>

                                                                            <li class="mb-2">
                                                                                Preet Lal, Amit Kumar©, Alisha Prasad,
                                                                                Shubham Kumar, Purabi Saikia, Arun
                                                                                Dayanandan, P.S. Roy, M.L. Khan. 2021.
                                                                                COVID-19 Pandemic Hazard-Risk-
                                                                                Vulnerability Analysis: A framework for
                                                                                effective Pan-India response. Geocarto
                                                                                International. Accepted on 26 NOV. 2021.
                                                                                DOI:10.1080/10106049.2021.2012529. IF:
                                                                                4.889

                                                                            </li>---->


                                                                           
                                                                        

                                                                        
                                                                        <!---<div class="accordion" id="accordion2">
                                                                            <div class="accordion-group">
                                                                                <div id="collapseOne"
                                                                                    class="accordion-body collapse">
                                                                                    <div class="accordion-inner">

                                                                                        <div class="payment-radio-btn1"
                                                                                            style="border-color: #8f7722">
                                                                                            <div class="title">
                                                                                                A. S. Kumawat and Dr. A.
                                                                                                Sarkar, "Synthesis of
                                                                                                Catalytically Active Pb
                                                                                                from
                                                                                                PbS for Electroreduction
                                                                                                of
                                                                                                CO2 to Formate in
                                                                                                Alkaline
                                                                                                Medium", Advances in
                                                                                                Energy
                                                                                                Research, ch.30, vol.1,
                                                                                                pp.297 - 307, Springer,
                                                                                                Singapore, springer
                                                                                                proceedings in energy
                                                                                                2020,
                                                                                                <a class="outside-link"
                                                                                                    href="http://dx.doi.org/10.1007/978-981-15-2666-4_30"
                                                                                                    target="_blank">10.1007/978-981-15-2666-4_30</a>
                                                                                                <span
                                                                                                    style="margin-left: 10px;"
                                                                                                    class="btn btn-inbook btn-xs">Inbook</span>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="payment-radio-btn1"
                                                                                            style="border-color: #0195e1">
                                                                                            <div class="title">
                                                                                                A. S. Kumawat and Dr. A.
                                                                                                Sarkar, "Electrochemical
                                                                                                reduction of CO2 on
                                                                                                Pb–Bi–Sn
                                                                                                metal mixtures:
                                                                                                importance
                                                                                                of eutectics", SN
                                                                                                Applied
                                                                                                Sciences, vol.1, pp.317,
                                                                                                Springer Nature, March
                                                                                                2019,
                                                                                                <a class="outside-link"
                                                                                                    href="http://dx.doi.org/10.1007/s42452-019-0313-y"
                                                                                                    target="_blank">10.1007/s42452-019-0313-y</a>
                                                                                                <span
                                                                                                    style="margin-left: 10px;"
                                                                                                    class="btn btn-article btn-xs">Article</span>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>--->
                                                                    </div>
                                                                    <p class="text-primary mt-3 mb-0">
                                                                        <a id="showAll" onClick="expandFunction()">Show
                                                                            All
                                                                            Publications<b>(+)</b></a>
                                                                    </p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>






                                            <div class="col-12 mb-3" id="8">
                                                <h3 class="mb-2 bg-textPrimary"><i
                                                        class="bi bi-briefcase-fill me-2"></i>
                                                    Books and Book Chapters </h3>
                                                <div class="card bg-light shadow rounded mb-4">
                                                    <div class="card-body">
                                                        <div class="testimonial-item sec-color">
                                                            <div class="profile-counter pt-3 pb-3">

                                                                <div class="sec-title-2">
                                                                    <h6 class="pointer">Book:4 & Chapters:5</h6>
                                                                </div>
                                                                <div class="rs-check-out">
                                                                    <div class="rs-payment-system">

                                                                        <ol class="list-group list-group-numbered">
                                                                            <li class="mb-2">
                                                                                Cyber Security: An Introduction, Dr. Subhash Chandra Yadav, 
ISBN:  978-81-93857168, Veer Bahadur Publication, Lucknow, No. of Pg. 345, (April, 2019).

                                                                            </li>

                                                                            <li class="mb-2">
                                                                               UNIX: A Practical Approach, Dr. Subhash Chandra Yadav, 
ISBN:  978-81-93841679, Poddar Publication, Varanasi, No. of Pg. 193,  (April,2019).

                                                                            </li>

                                                                            <li class="mb-2">
                                                                                Proceedings of 101st Indian Science Congress Conference, Information and Communication Science & Technology (including Computer Science), as a sectional President for the year 2013-14.   
                                                                            </li>

                                                                            <li class="mb-2">
                                                                                Introduction to Client / Server Computing, Subhash Chandra Yadav and Sanjay Kumar Singh, ISBN:  978-81-224-2689-2, New Age International (P) Ltd., No. of Pg. 213, (2009). 
                                                                            </li>

                                         
                                                                        </ol>



                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            


                                            

                                            



                                           

                                            







                                            <div class="col-12 mb-3" id="14">
                                                <h3 class="mb-2 bg-textPrimary"><i
                                                        class="bi bi-briefcase-fill me-2"></i>Program Organised</h3>
                                                <div class="card bg-light shadow rounded mb-4">
                                                    <div class="card-body">
                                                        <div class="testimonial-item sec-color">



                                                            <div class="personal_list_style pb-20">
                                                                <ol class="list-group list-group-numbered">
                                                                    <li class="mb-2">

                                                                        One Week Online ATAL FDP on “Data Analytics using Python (Practical Approach)” Organized by Department of Computer Science & Technology,<i class="fa fa-home"
                                                                            style="color: #ff3115">&nbsp;</i> jointly by
                                                                        Central  University of Jharkhand, Ranchi
                                                                        <i class="fa fa-calendar"
                                                                            style="color: #ff3115">&nbsp;</i> 25th to 29th April 2022. 
                                                                    </li>

                                                                    <li>

                                                                       Five days FDP on "Data Science and Machine Learning <i class="fa fa-home"
                                                                            style="color: #ff3115">&nbsp;</i>Sponsored by ATAL - AICTE, New Delhi
                                                                        <i class="fa fa-calendar"
                                                                            style="color: #ff3115">&nbsp;</i>20th  to 24th	September 2021
                                                                    </li>

                                                                    <li>

                                                                        Five days FDP on "Internet of Things (IoT)  <i
                                                                            class="fa fa-home"
                                                                            style="color: #ff3115">&nbsp;</i> Sponsored by  ATAL - AICTE, New Delhi.
                                                                        <i class="fa fa-calendar"
                                                                            style="color: #ff3115">&nbsp;</i> 14th	to 18th	September 2020
                                                                    </li>

                                                                    <li>

                                                                        Three weeks Practical Training Program  on Cyber security/Digital Forensic  <i
                                                                            class="fa fa-home"
                                                                            style="color: #ff3115">&nbsp;</i>in Central
                                                                        University of Jharkhand, Ranchi
                                                                        <i class="fa fa-calendar"
                                                                            style="color: #ff3115">&nbsp;</i> February -2020
                                                                    </li>

                                                                    <li>

                                                                        Webinar on Emerging Technologies for Higher Education Post COVID-19 <i class="fa fa-home"
                                                                            style="color: #ff3115">&nbsp;</i> in Central
                                                                        University of Jharkhand, Ranchi
                                                                        <i class="fa fa-calendar"
                                                                            style="color: #ff3115">&nbsp;</i>May 16 2020
                                                                    </li>

                                                                    <li>

                                                                   Five days Computer Awareness Program (CAP) for Tribal and Rural Children <i class="fa fa-home"
                                                                            style="color: #ff3115">&nbsp;</i>Village Manatu, District Ranchi , Estate   Jharkhand.
                                                                        <i class="fa fa-calendar"
                                                                            style="color: #ff3115">&nbsp;</i>19th  to 24th  July 2020 
                                                                    </li>
                                                                    <li>

                                                                       Five days FDP  on  "CYBER SECURITY", <i
                                                                            class="fa fa-home"
                                                                            style="color: #ff3115">&nbsp;</i>Sponsored by  ATAL - AICTE, New Delhi
                                                                        <i class="fa fa-calendar"
                                                                            style="color: #ff3115">&nbsp;</i>16th   to 20th   September 2019
                                                                    </li>
																	
																	<li>

                                                                       TWO weeks training program on Cyber Security <i
                                                                            class="fa fa-home"
                                                                            style="color: #ff3115">&nbsp;</i>Cyber Thana Ranchi
                                                                        <i class="fa fa-calendar"
                                                                            style="color: #ff3115">&nbsp;</i>11-02-2019 to 23-02-2019
                                                                    </li>
																	
																	<li>

                                                                       One day workshop on “Research Methodology & LaTeX  Learning 
                                                                        <i class="fa fa-calendar"
                                                                            style="color: #ff3115">&nbsp;</i>14 December 2018.
                                                                    </li>

                                                                </ol>
                                                            </div>






                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                            <!--- <div class="col-12 mb-3" id="10">
                                            <h3 class="mb-2 bg-textPrimary"><i class="bi bi-briefcase-fill me-2"></i>
                                                DISSERTATIONS</h3>
                                            <div class="card bg-light shadow rounded mb-4">
                                                <div class="card-body">
                                                    <div class="testimonial-item sec-color">

                                                        <div class="sec-title-2">
                                                            <h6><i class="fa fa-ch"></i>PG Dissertation</h6>
                                                        </div>
                                                        <div class="personal_list_style pb-20">
                                                            <ul>

                                                                <li>

                                                                    Pratik Vikas Wangikar (220CH3175), "Development of
                                                                    electrode using Orange peel for Lithim Carbon
                                                                    Dioxide battery" - M.Tech. &nbsp;
                                                                    <i class="fa fa-user"
                                                                        style="color: #ff3115">&nbsp;</i>Supervisor
                                                                    &nbsp;
                                                                    <i class="fa fa-calendar"
                                                                        style="color: #ff3115">&nbsp;</i> 2021-22 Spring
                                                                </li>

                                                                <li>

                                                                    Sairamana N (220CH3170), "Development of electrode
                                                                    material from the organic waste for the application
                                                                    of energy storage" - M.Tech. &nbsp;
                                                                    <i class="fa fa-user"
                                                                        style="color: #ff3115">&nbsp;</i>Supervisor
                                                                    &nbsp;
                                                                    <i class="fa fa-calendar"
                                                                        style="color: #ff3115">&nbsp;</i> 2021-22 Spring
                                                                </li>

                                                            </ul>
                                                        </div>

                                                        <div class="sec-title-2">
                                                            <h6>UG Dissertation</h6>
                                                        </div>

                                                        <div class="personal_list_style pb-20">
                                                            <ul>

                                                                <li>

                                                                    Biplove Singh (117CH0150), "Hydrogen Evolution
                                                                    Reactions" - B.Tech. &nbsp;
                                                                    <i class="fa fa-user"
                                                                        style="color: #ff3115">&nbsp;</i>Supervisor
                                                                    &nbsp;
                                                                    <i class="fa fa-calendar"
                                                                        style="color: #ff3115">&nbsp;</i> 2020-21 Spring
                                                                </li>

                                                                <li>

                                                                    Rahul Kumar Singh (117CH0745), "Electrolytic
                                                                    reduction of CO2" - B.Tech. &nbsp;
                                                                    <i class="fa fa-user"
                                                                        style="color: #ff3115">&nbsp;</i>Supervisor
                                                                    &nbsp;
                                                                    <i class="fa fa-calendar"
                                                                        style="color: #ff3115">&nbsp;</i> 2020-21 Spring
                                                                </li>

                                                                <li>

                                                                    Aditya Narayan Swain (118CH0118), "Performance
                                                                    Analysis of a Proton Exchange Membrane Fuel Cell : A
                                                                    Simulation Study" - B.Tech. &nbsp;
                                                                    <i class="fa fa-user"
                                                                        style="color: #ff3115">&nbsp;</i>Supervisor
                                                                    &nbsp;
                                                                    <i class="fa fa-calendar"
                                                                        style="color: #ff3115">&nbsp;</i> 2021-22 Spring
                                                                </li>

                                                                <li>

                                                                    Manchoju Makarand (717CH1001), "Study of energy
                                                                    storage in batteries" - B.Tech. M.Tech Dual Degree
                                                                    &nbsp;
                                                                    <i class="fa fa-user"
                                                                        style="color: #ff3115">&nbsp;</i>Supervisor
                                                                    &nbsp;
                                                                    <i class="fa fa-calendar"
                                                                        style="color: #ff3115">&nbsp;</i> 2021-22 Spring
                                                                </li>

                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>---->

                                            <div class="col-12 mb-3" id="15">
                                                <h3 class="mb-2 bg-textPrimary"><i
                                                        class="bi bi-briefcase-fill me-2"></i>
                                                    AWARDS AND HONOURS</h3>
                                                <div class="card bg-light shadow rounded mb-4">
                                                    <div class="card-body">
                                                        <div class="testimonial-item sec-color">

                                                            <div class="pb-20">
                                                                <ol class="list-group list-group-numbered">
                                                                    <li class="mb-2">Chairman BoS, Department of Computer Science and  Engineering, CUJ, Ranchi.

                                                                    </li>
                                                                    <li class="mb-2">Chairman DRC, Department of Computer Science and Engineering,, CUJ, Ranchi
                                                                    </li>
                                                                    <li class="mb-2"><strong>Member Board of Studies Department of Physics, Commerce, Life Science at CUJ.</strong>
                                                                    </li>
                                                                    <li class="mb-2">External Member Board of Studies Department of CSE, RKDF University, Ranchi.
                                                                    </li>

                                                                    <li class="mb-2">Chairman , Committee of ICT and Network Infrastructure and Internet Services  at CUJ. 
                                                                    </li>
                                                                    <li class="mb-2">National Chairman (2019-2021) Division - 5, Education and Research, Computer Society of India
                                                                    </li>
                                                                    <li class="mb-2">President (2013/14), Information and Communication Science & Technology (including Computer Science) Indian Science Congress Association (ISCA).
                                                                    </li>
                                                                    <li class="mb-2">Founder Chairman (2011/12), Computer Society of India (CSI), Varanasi Chapter year 2010/11, also Chairman Elected.  
                                                                    </li>
                                                                    <li class="mb-2">National Significant Contribution Award for the year 2010, Computer Society of India, at IIM Ahmedabad on 1-12-2011.
                                                                    </li>
                                                                    <li class="mb-2">Purvanchal Samman for the year 2012, for significant contribution in education in eastern UP by Vijay Dubey Foundation,Varanasi.
                                                                    </li>
                                                                    <li class="mb-2">National Significant Contribution Award for the year 2011, Computer Society of India, at University of Kolkata on 1-12-2012.
                                                                    </li>
																	<li class="mb-2">•	Best Poster Presentation award, 95thIndian Science Congress Conference-2008 at Vishakhapatanam in Section of Information Communication Technology (including Computer Science).
                                                                    </li>
                                                                </ol>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-12 mb-3" id="16">
                                                <h3 class="mb-2 bg-textPrimary"><i
                                                        class="bi bi-briefcase-fill me-2"></i>
                                                    Any Other Information</h3>
                                                <div class="card bg-light shadow rounded mb-4">
                                                    <div class="card-body">
                                                        <div class="testimonial-item sec-color">
                                                            <div class="pb-20">


                                                                <div class="sec-title-2">
                                                                    <h6>Membership of Professional Bodies/Societies etc.</h6>
                                                                </div>


                                                                <div class="payment-radio-btn1"
                                                                    style="border-color: #0195e1">
                                                                    <div class="title">
                                                                        1. <span class="text-primary"> Computer Society of India (Life Member)</span>
                                                                        
                                                                        <!--<span style="margin-left: 10px;"
                                                                                class="btn btn-article btn-xs">Article</span>-->
                                                                    </div>
                                                                </div>

                                                                <div class="payment-radio-btn1"
                                                                    style="border-color: #0195e1">
                                                                    <div class="title">
                                                                        2. <span class="text-primary"> Indian Science Congress Association (Life Member)</span>
                                                                        <!--<span style="margin-left: 10px;"
                                                                                class="btn btn-article btn-xs">Article</span>-->
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
        <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
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