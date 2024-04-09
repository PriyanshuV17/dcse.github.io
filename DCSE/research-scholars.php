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

        img {
            max-width: 100%;
            display: block;
        }

        ul {
            list-style: none;
        }

        /* Utilities */
        .card::after,
        .card img {
            border-radius: 50%;
        }

        .card,
        .stats {
            display: flex;
        }

        .profile-card {
            padding: 2.5rem 2rem;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, .5);
            /* box-shadow: 0 0 30px rgba(0, 0, 0, .15); */
            border: 1px solid #fdc800;
            margin: 1rem 0;
            position: relative;
            transform-style: preserve-3d;
            overflow: hidden;
        }

        .profile-card img {
            width: 8rem;
            min-width: 80px;
            box-shadow: 0 0 0 5px #FFF;
        }

        .infos {
            margin-left: 1.5rem;
        }

        .name {
            margin-bottom: 1rem;
        }

        .name h2 {
            font-size: 1.3rem;
        }

        .name h4 {
            font-size: .8rem;
            color: #333
        }

        .text {
            font-size: .9rem;
            margin-bottom: 1rem;
        }

        .stats {
            margin-bottom: 1rem;
        }

        .stats li {
            min-width: 5rem;
        }

        .stats li h3 {
            font-size: .99rem;
        }

        .stats li h4 {
            font-size: .75rem;
        }

        .links button {
            font-family: 'Poppins', sans-serif;
            min-width: 120px;
            padding: .5rem;
            border: 1px solid #f1bf01;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: all .25s linear;
            background: transparent;
        }

        .links .follow,
        .links .view:hover {
            background-color: #f1bf01;
            color: #000000;
        }

        @media screen and (max-width: 450px) {
            .card {
                display: block;
            }

            .infos {
                margin-left: 0;
                margin-top: 1.5rem;
            }

            .links button {
                min-width: 100px;
            }
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
        <!-- Slider 1 Area Start Here -->
        <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">Research-Scholars</h1>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		
        <!-- Slider 1 Area End Here -->
        <!-- About 1 Area Start Here -->
        <div class="slider1-area index1 p-4">
            <!-- <div class="container-fluid mb-4">
                <img style="    height: 300px; object-fit: cover;object-position: bottom;" width="100%" src="img/popupCENTRAL-UNIVERSITY-OF-JHARK.jpg" alt="">
            </div>			 -->
            <div class="container-fluid">
                <div class="row">
					<div class="col-md-3">
						<?php require_once('quick-links.php'); ?>
                    </div>
				
				
                    <div class="col-md-9">
                        <div class="card shadow rounded">
                            <h5 class="fw-bold bg-primary p-2 ps-4 mb-0 rounded">Details of Research Scholars</h5>                           
                            <div class="p-4 table-responsive">
                                <table class="table table-bordered" style="width: 100%;">
                                    <thead class="table-secondary" >
                                       <tr>
                                           <th>Sl. No.</th>
                                           <th>Name</th>
                                           <th>Registration No.</th>
                                           <th>Supervisor/Co-Supervisor</th>
                                           <th>Date of the Registration</th>
										   <th>Title</th>
										   <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>Mr. Dashrath Mahto</td>
                                            <td>18190201001</td>
                                            <td>Prof. Subhash Chandra Yadav</td>
                                            <td>Sept 13, 2018</td>
											<td>Emotion Analysis of Textual Data for Better Sentiment Prediction Using Machine Learning Techniques</td>
											<td><p>Awarded</p>
										    <p>05/03/2024</p></td>
                                        </tr> 
                                        <tr>
                                            <td></td>
                                            <td>Ms. Mehar Arfi</td>
                                            <td>19190201002</td>
                                            <td>Prof. Subhash Chandra Yadav</td>
                                            <td>Sept 05, 2019</td>
											<td>Medical Image Processing for Detection and Identification of Ovarian Tumor using Deep Learning Techniques</td>
											<td>Ongoing</td>
                                        </tr> 
                                        <tr>
                                            <td></td>
                                            <td>Mr. Niraj Kumar</td>
                                            <td>20190201002</td>
                                            <td>Prof. Subhash Chandra Yadav</td>
                                            <td>Jan 9, 2021</td>
											<td>Enhanced Deep Learning Model for Text Classification to Predict Emotion of Twitter Data</td>
											<td><p>Submitted</p>
										    <p>16/02/2024</p></td>
                                        </tr> 
                                        <tr>
                                            <td></td>
                                            <td>Mrs. Priyanka</td>
                                            <td>20190201001</td>
                                            <td>Dr. Kanojia Sindhuben Babulal</td>
                                            <td>Jan 9, 2021</td>
											<td>Image Analysis of Lymphatic Filariasis parasite</td>
                                            <td>Ongoing</td>
                                        </tr> 
                                        <tr>
                                            <td></td>
                                            <td>Ms. Jyoti Jangade</td>
                                            <td>20190201003</td>
                                            <td>Dr. Kanojia Sindhuben Babulal</td>
                                            <td>Jan 10, 2021</td>
											<td>Implementation of Machine Learning Techniques for Identification of Correct YOGA Poses.</td>
                                            <td>Ongoing</td>
                                        </tr> 
                                        <tr>
                                            <td></td>
                                            <td>Mr. Ram Kishun Mahto</td>
                                            <td>21190201001</td>
                                            <td>Dr. Pushpendra Kumar</td>
                                            <td>Dec 31, 2021</td>
											<td>Deep Learning Approaches for Classification and Detection of Chronic Kidney Disease Using CT Images</td>
                                            <td>Ongoing</td>
                                        </tr> 
                                        <tr>
                                            <td></td>
                                            <td>Ms. Sheetal Kumari</td>
                                            <td>211902011002</td>
                                            <td>Prof. Subhash Chandra Yadav (Supervisor) <br /> Dr. Pushpendra Kumar (Co-Supervisor)</td>
                                            <td>Feb 02, 2022</td>
											<td>Hybrid Deep Learning Model for Improving Sentiment Analysis Accuracy by Reducing Context Dependent Errors</td>
                                            <td>Ongoing</td>
                                        </tr>
                                    </tbody>  
                                </table>  
                            </div>
                        </div>
                    </div>

                    
                    <!-- End Tabs on plain Card -->
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
    <script src="../js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <!-- Plugins js -->
    <script src="../js/plugins.js" type="text/javascript"></script>
    <!-- Bootstrap js -->
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <!-- WOW JS -->
    <script src="../js/wow.min.js"></script>
    <!-- Nivo slider js -->
    <script src="../vendor/slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="../vendor/slider/home.js" type="text/javascript"></script>
    <!-- Owl Cauosel JS -->
    <script src="../vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script>
    <!-- Meanmenu Js -->
    <script src="../js/jquery.meanmenu.min.js" type="text/javascript"></script>
    <!-- Srollup js -->
    <script src="../js/jquery.scrollUp.min.js" type="text/javascript"></script>
    <!-- jquery.counterup js -->
    <script src="../js/jquery.counterup.min.js"></script>
    <script src="../js/waypoints.min.js"></script>
    <!-- Countdown js -->
    <script src="../js/jquery.countdown.min.js" type="text/javascript"></script>
    <!-- Isotope js -->
    <script src="../js/isotope.pkgd.min.js" type="text/javascript"></script>
    <!-- Magic Popup js -->
    <script src="../js/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <!-- Gridrotator js -->
    <script src="../js/jquery.gridrotator.js" type="text/javascript"></script>
    <!-- Custom Js -->
    <script src="../js/main.js" type="text/javascript"></script>
    <script src="../js/jquery.easing.min.js"></script>
    <script src="../js/jquery.easy-ticker.js"></script>
    <script>
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