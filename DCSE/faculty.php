<!DOCTYPE html>
<html class="no-js" lang="">

<head>
<meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>The Central University of Jharkhand </title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.png" />
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
		                    <h1 class="page-title">Faculty</h1>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
        <div class="slider1-area index1 p-4">
          <div class="container-fluid">
            <div class="row">
                   <div class="col-md-3">
                        <?php require_once('quick-links.php'); ?>
                    </div>
                    <div class="col-md-9">
                        <div class="card shadow rounded">
                            <h5 class="fw-bold bg-primary p-2 ps-4 mb-0 rounded">Faculty</h5>
                            <div class="container-fluid test mt-4">
                                <div class="row dept-area1">
                                    <div class="card mb-3 profile-card d-flex bg-light" style="max-width: 100%;">
                                        <div class="col-md-12">
                                           <div class="row">
                                              <div class="col-md-2 img mt-0 mt-md-3">
                                                <img
                                                    src="../DCSE/faculty/subhash.jpg">
                                              </div>
                                              <div class="col-md-4">
                                                <div class="card-body">
                                                    <ul class="">
                                                        <li class="fs-6"><h3 style="margin-bottom:0px"><b>Dr. Subhash Chandra Yadav</b></h3></li>
                                                        <li class="fs-6"><b>Designation :</b>  Professor  </li>
                                                        <li class="fs-6"><b>Courses taught :</b>  MTech, PhD </li>
                                                        <li class="fs-6"><b>Specialization :</b> Cyber Security, Cloud Computing, Soft Computing, Artificial Intelligence, Machine Learning and Deep Learning </li>                                                     
                                                    </ul>
                                                </div>
                                              </div>
                                              <div class="col-md-4">
                                                <div class="card-body">
                                                    <ul class="">
                                                    <li class="fs-6"><b>Number of Papers in Journals : </b>31</li>
                                                        <li class="fs-6"><b>ORCID : </b>0000-0002-1075-6384</li>
                                                    <li class="fs-6"><b>IRINS :</b> </li>
                                                        <li class="fs-6"><b>Google Scholar : </b><a href="https://scholar.google.com/citations?user=i9_x8x8AAAAJ&hl=en">Google Scholar profile</a></li>
                                                        <li class="fs-6"><b>Scopus ID : </b></li>
                                                    
                                                        <li class="fs-6">Service Period : Date of joining (12/01/2018) - Present </li>
                                                       
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                              <div class="col-md-2 textend">
                                                <div class="mt-3">
                                                     <div class="team-icons float-right">
                                                       <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="boxmedia">
                                                    <p><br><br><br><br></p>
                                                </div>
                                                <div class="mt-4"> <a href="subhash.php" class="custonbtn">View Profile</a>
                                                </div>
                                              </div>
                                            </div>                                         
                                        </div>
                                    </div>
                                </div>                           
                            </div>
							
							<div class="container-fluid test mt-4">
                                <div class="row dept-area1">
                                    <div class="card mb-3 profile-card d-flex bg-light" style="max-width: 100%;">
                                        <div class="col-md-12">
                                           <div class="row">
                                              <div class="col-md-2 img mt-0 mt-md-3">
                                                <img
                                                    src="../DCSE/faculty/prashant.jpg">
                                              </div>
                                              <div class="col-md-4">
                                                <div class="card-body">
                                                    <ul class="">
                                                        <li class="fs-6"><h3 style="margin-bottom:0px"><b>Dr. Prashant Prashun </b></h3></li>
                                                        <li class="fs-6"><b>Designation :</b> Assistant Professor </li>
                                                        <li class="fs-6"><b>Courses taught :</b> MTech, PhD </li>
                                                        <li class="fs-6"><b>Specialization :</b> Human Computer Interaction, Machine Intelligence in AR and VR, AI for Healthcare and Education and Natural Language Processing </li>                                                     
                                                    </ul>
                                                </div>
                                              </div>
                                              <div class="col-md-4">
                                                <div class="card-body">
                                                    <ul class="">
                                                    <li class="fs-6"><b>Number of Papers in Journals : </b>4 </li>
                                                        <li class="fs-6"><b>ORCID : </b></li>
                                                    <li class="fs-6"><b>IRINS :</b> </li>
                                                        <li class="fs-6"><b>Google Scholar : </b></li>
                                                        <li class="fs-6"><b>Scopus ID : </b></li>
                                                    
                                                        <li class="fs-6">Service Period : Date of joining (05/02/2020) - Present </li>
                                                       
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                              <div class="col-md-2 textend">
                                                <div class="mt-3">
                                                     <div class="team-icons float-right">
                                                       <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="boxmedia">
                                                    <p><br><br><br><br></p>
                                                </div>
                                                <div class="mt-4"> <a href="#" class="custonbtn">View Profile</a>
                                                </div>
                                              </div>
                                            </div>                                         
                                        </div>
                                    </div>
                                </div>                           
                            </div>
							
							<div class="container-fluid test mt-4">
                                <div class="row dept-area1">
                                    <div class="card mb-3 profile-card d-flex bg-light" style="max-width: 100%;">
                                        <div class="col-md-12">
                                           <div class="row">
                                              <div class="col-md-2 img mt-0 mt-md-3">
                                                <img
                                                    src="../DCSE/faculty/kanoriya.jpg">
                                              </div>
                                              <div class="col-md-4">
                                                <div class="card-body">
                                                    <ul class="">
                                                        <li class="fs-6"><h3 style="margin-bottom:0px"><b>Dr. Kanojia Sindhuben Babulal</b></h3></li>
                                                        <li class="fs-6"><b>Designation :</b> Assistant Professor </li>
                                                        <li class="fs-6"><b>Courses taught :</b> M.Tech, B.Tech, Ph.D, MCA </li>
                                                        <li class="fs-6"><b>Specialization :</b> Wireless Communication,Cross Layer Design,  ML, Image Processing </li>                                                     
                                                    </ul>
                                                </div>
                                              </div>
                                              <div class="col-md-4">
                                                <div class="card-body">
                                                    <ul class="">
                                                    <li class="fs-6"><b>Number of Papers in Journals : </b>21 </li>
                                                        <li class="fs-6"><b>ORCID : </b>0000-0003-0442-8795 </li>
                                                    <li class="fs-6"><b>IRINS :</b> </li>
                                                        <li class="fs-6"><b>Google Scholar : </b>https://scholar.google.co.in/citations?user=3OMjNZIAAAAJ&hl=en</li>
                                                        <li class="fs-6"><b>Scopus ID : </b></li>
                                                    
                                                        <li class="fs-6">Service Period : Date of joining (07/02/2020) - Present </li>
                                                       
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                              <div class="col-md-2 textend">
                                                <div class="mt-3">
                                                     <div class="team-icons float-right">
                                                       <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="boxmedia">
                                                    <p><br><br><br><br></p>
                                                </div>
                                                <div class="mt-4"> <a href="KSB.php" class="custonbtn">View Profile</a>
                                                </div>
                                              </div>
                                            </div>                                         
                                        </div>
                                    </div>
                                </div>                           
                            </div>
							
							<div class="container-fluid test mt-4">
                                <div class="row dept-area1">
                                    <div class="card mb-3 profile-card d-flex bg-light" style="max-width: 100%;">
                                        <div class="col-md-12">
                                           <div class="row">
                                              <div class="col-md-2 img mt-0 mt-md-3">
                                                <img
                                                    src="../DCSE/faculty/pushpendr.jpg">
                                              </div>
                                              <div class="col-md-4">
                                                <div class="card-body">
                                                    <ul class="">
                                                        <li class="fs-6"><h3 style="margin-bottom:0px"><b>Dr. Pushpendra Kumar</b></h3></li>
                                                        <li class="fs-6"><b>Designation :</b> Assistant Professor  </li>
                                                        <li class="fs-6"><b>Courses taught :</b> M.Tech, M.Sc.  Ph.D </li>
                                                        <li class="fs-6"><b>Specialization :</b> Data Mining, Machine Learning, Deep Learning,  </li>                                                     
                                                    </ul>
                                                </div>
                                              </div>
                                              <div class="col-md-4">
                                                <div class="card-body">
                                                    <ul class="">
                                                    <li class="fs-6"><b>Number of Papers in Journals : </b>10 </li>
                                                        <li class="fs-6"><b>ORCID : </b>https://orcid.org/0000-0001-7555-2625 </li>
                                                    <li class="fs-6"><b>IRINS :</b> </li>
                                                        <li class="fs-6"><b>Google Scholar : </b>https://scholar.google.co.in/citations?user=yPhmw0QAAAAJ&hl=en</li>
                                                        <li class="fs-6"><b>Scopus ID : </b></li>
                                                    
                                                        <li class="fs-6">Service Period : Date of joining (11/02/2020) - Present </li>
                                                       
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                              <div class="col-md-2 textend">
                                                <div class="mt-3">
                                                     <div class="team-icons float-right">
                                                       <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="boxmedia">
                                                    <p><br><br><br><br></p>
                                                </div>
                                                <div class="mt-4"> <a href="pushpendra.php" class="custonbtn">View Profile</a>
                                                </div>
                                              </div>
                                            </div>                                         
                                        </div>
                                    </div>
                                </div>                           
                            </div>
							
							<div class="container-fluid test mt-4">
                                <div class="row dept-area1">
                                    <div class="card mb-3 profile-card d-flex bg-light" style="max-width: 100%;">
                                        <div class="col-md-12">
                                           <div class="row">
                                              <div class="col-md-2 img mt-0 mt-md-3">
                                                <img
                                                    src="../DCSE/faculty/dummyimg.jpg">
                                              </div>
                                              <div class="col-md-4">
                                                <div class="card-body">
                                                    <ul class="">
                                                        <li class="fs-6"><h3 style="margin-bottom:0px"><b>Saurabh Kumar</b></h3></li>
                                                        <li class="fs-6"><b>Designation :</b> Lab Attendant </li>
                                                                                                             
                                                    </ul>
                                                </div>
                                              </div>
                                              
                                              <div class="col-md-6 textend">
                                                <div class="mt-3">
                                                     <div class="team-icons float-right">
                                                       <a href="https://www.facebook.com/cuj.ac.in"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                        <a href="https://twitter.com/CENTRALUNIVERS7"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="boxmedia">
                                                    <p><br><br><br><br></p>
                                                </div>
                                                <div class="mt-4"> <a href="#" class="custonbtn">View Profile</a>
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