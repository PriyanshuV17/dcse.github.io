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
		                    <h1 class="page-title">Research-publications</h1>
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
                        <div class="card shadow rounded">
                            <h5 class="fw-bold bg-primary p-2 ps-4 mb-0 rounded">Quick Links</h5>

                            <nav class="navigation">
                                <ul class=" list-group list-group-flush mainmenu">
								<li class="list-group-item"><h6 class="mb-0"><a class="" href="CS&Edepartment.php"><i class="fa fa-home"></i> Home</a></h6></li>
                                    <li class="list-group-item"><h6 class="mb-0"><a href="academics.php"><span class='bi bi-mortarboard-fill'></span> Academics</a></li>
                                    <li class="list-group-item"><h6 class="mb-0"><a href="#"><span class='bi bi-lightbulb-fill'></span> Research <span class='bi bi-chevron-down' style="float:right;"></span></a></h6>
                                        <ul class="submenu">
                                            <li ><a href="research-patent.php">Res- A (Patent)</a></li>
											<li lass="list-group-item"><a href="research-project.php">Res- B (Project)</a></li>
											 
                                            
                                        </ul>
                                    </li>
									 <li class="list-group-item"><h6 class="mb-0"><a href="faculty.php"><span class='bi bi-people-fill'></span> DCSE Faculty & Staffs</a></li>
									  <li class="list-group-item"><h6 class="mb-0"><a href="#"><span class='fa fa-users me-2'></span> Research  Scholars<span class='bi bi-chevron-down' style="float:right;"></span></a></h6>
                                        <ul class="submenu">
                                            <li ><a href="research-scholars.php">Ph.D’s awarded per teacher during the year</a></li>
                                            <li lass="list-group-item"><a href="PHDScholar.php">Profile PhD Scholars </a></li>
                                         
                                        </ul>
                                    </li>
									   <li class="list-group-item"><h6 class="mb-0"><a href="Student corner.php"> <span class='bi bi-file-person'></span> Student’s Corner</a></li>
									    <li class="list-group-item"><h6 class="mb-0"><a href="events.php"><span class='bi bi-calendar4-week'></span> Events</a></li>
                                    <li class="list-group-item"><h6 class="mb-0"><a href="#"><span class='bi bi-pin-map-fill'></span> Placement</a></li>
									<li class="list-group-item"><h6 class="mb-0"><a href="#"><span class='bi bi-award'></span> Recognition by National/International Repute </a></li>
									<li class="list-group-item"><h6 class="mb-0"><a href="E-Content.php"><span class='bi bi-envelope'></span> E-Content (Swayam/MooCs etc.)</a></li>
									<li class="list-group-item"><h6 class="mb-0"><a href="#"><span class='bi bi-telephone-fill'></span> Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
				
				
                    <div class="col-md-9">
                        <div class="card shadow rounded pb-4">
                            <h5 class="fw-bold bg-primary p-2 ps-4 mb-0 rounded">Research Publications
                            </h5>
                            <div>
                                <h6 class="mb-0 px-4 pt-4 pb-2 fw-bold">2019  Total No  < 01 ></h6>
                                <!-- <table class="table table-striped" style="width: 100%;">
                                    <thead class="table-secondary" >
                                       <tr>
                                           <th>2022  Total No < 06  ></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>lorem ipsum</td>
                                            <td class="text-center">lorem ipsum</td>
                                            <td class="text-center">lorem ipsum</td>
                                        </tr> 
                                        <tr>
                                            <td>lorem ipsum</td>
                                            <td class="text-center">lorem ipsum</td>
                                            <td class="text-center">lorem ipsum</td>
                                        </tr>
                                        <tr>
                                            <td>lorem ipsum</td>
                                            <td class="text-center">lorem ipsum</td>
                                            <td class="text-center">lorem ipsum</td>
                                        </tr>
                                        <tr>
                                            <td>lorem ipsum</td>
                                            <td class="text-center">lorem ipsum</td>
                                            <td class="text-center">lorem ipsum</td>
                                        </tr>
                                        <tr>
                                            <td>lorem ipsum</td>
                                            <td class="text-center">lorem ipsum</td>
                                            <td class="text-center">lorem ipsum</td>
                                        </tr>
                                    </tbody>  
                                </table> -->
                                <ol class="list-group list-group-numbered px-4 mb-2">
                                    <li class="list-group-item">Yadav, N.L., Agrawal S.K., Yadav, S.C., (March 2019) A Review on Enhancement of Medical Images, IJICC, (ISSN 2250-2661),  <b>Vol-10 / No. 1,Pg.No. 62-69   </b></li>
                                    
                                 </ol>
                            </div>
                            <div>
                                <h6 class="mb-0 px-4 pt-4 pb-2 fw-bold">2020  Total No <02></h6>
                                <ol class="list-group list-group-numbered px-4 mb-2">
                                    <li class="list-group-item">Yadav N. K. and Yadav, S. C, ( August-  2020) , Post COVID-19 Education Scenario: Digital Transformation of Pedagogy, CSI Communication (ISSN: 0970-647X) Vol. 44, No.5, Issue No. 5. </li>
                                    <li class="list-group-item">Jyoti Khuswaha, Kanojia Sindhuben Babulal, (May 2020),  “Implementation of GPVR and its Comparison with GPSR”, Journal of Advances and Scholarly Researches in Allied Education”, Volume 16, Issue:6, ISSN 2230-7540. </li>
                                    
                                 </ol>
                            </div>
                            <div>
                                <h6 class="mb-0 px-4 pt-4 pb-2 fw-bold">2022  Total No <06></h6>
                                <ol class="list-group list-group-numbered px-4 mb-2">
                                    <li class="list-group-item">Mahto,Dashrath, Yadav, Subhash Chandra, Latore, Gotam Singh, (June 2022),  Sentiment Prediction of Textual Data Using Hybrid ConvBidirectional-LSTM Model, Hindawi, Mobile Information System, Vol. :2022, ,Issue: 3  Article ID: 1068554,ISSN/eISSN:1574-107X/1875-905X. (SCI Indexed , IF =1.8)</li>
                                    <li class="list-group-item">Mahto, Dashrath, Yadav, Subhash Chandra, (April 2022) Hierarchical Bi-LSTM based Emotion Analysis  of Textual Data for enhanced Sentiment Prediction , Bulletin of the Polish Academy of Sciences: Technical Sciences , Vol.;70(3),2022 (SCI Indexed , IF=1.66)</li>
                                    <li class="list-group-item">Priyanka, Kanojia, Sindhuben Babulal, (August 2022), Hematological image analysis for segmentation and characterization of erythrocytes using Fc-TriSDR, <b>Multimedia Tools and Applications.</b> Volume 81 (Issue), Article ID: 13613, ISSN 1380-7501. (SCI-E, Q2, IF = 2.57)</li>
									
									<li class="list-group-item">Kanojia, Sindhuben Babulal, Das, Amit Kumar, Kumar, Pushpendra et al(2022), Real Time Surveillance System for Detection of Social Distancing, <b>International Journal of E-Health and Medical Communication</b>. Volume 13 (Issue 4), ISSN 1947-315X. Accepted (Scopus Indexed)</li>
									
									<li class="list-group-item">Sharma, Abha, Kumar, Pushpendra, Kanojia, Sindhuben Babulal et al (2022), Categorical Data Clustering using Harmony Search Algorithm for Healthcare datasets,<b> International Journal of E-Health and Medical Communication.</b> Volume 13 (Issue 4), ISSN 1947-315X. Accepted (Scopus Indexed)</li>
									
									<li class="list-group-item"><b>Shukla, A. K., Das S., Kumar, P., and Alam A., (2022) "Relevance Feedback and Deep Neural Network-Based Semantic Method for Query Expansion"</b> Wireless Communications and Mobile Computing, ISSN: 1530-8677 (Online)(SCI-E, Quartile: Q2, Imp. Fact. 2.146).  (https://doi.org/10.1155/2022/6789044)</li>
									
									
                                 </ol>
                            </div>
                            
                            <h5 class="fw-bold bg-primary p-2 ps-4 mb-0 mt-4 rounded">Book:
                            </h5>
                            <div>
                                <h6 class="mb-0 px-4 pt-4 pb-2 fw-bold">2019 Total No <00></h6>
                                <ol class="list-group list-group-numbered px-4 mb-2">
                                    <li class="list-group-item">Cyber Security: An Introduction, Dr. Subhash Chandra Yadav,
ISBN:  978-81-93857168, Veer Bahadur Publication, Lucknow, No. of Pg. 345, (April, 2019).
</li>
     <li class="list-group-item">UNIX: A Practical Approach, Dr. Subhash Chandra Yadav, ISBN:978-81-93841679, Poddar Publication, Varanasi, No. of Pg. 193, (April,2019).
</li>
	 </ol>
                            </div>
                           <!--- <div>
                                <h6 class="mb-0 px-4 pt-4 pb-2 fw-bold">2021  Total No < 02  ></h6>
                                <ol class="list-group list-group-numbered px-4 mb-2">
                                    <li class="list-group-item">K. B. Singh. Economic Policy & Planning in India Post Covid 19. Bloomsbury, UK (ISBN: 978-93-90513-68-0). 2021</li>
                                    <li class="list-group-item">K. B. Singh and Ajay Pratap Yadav. Infrastructure Finance. Navyug Books International, New Delhi (ISBN: 978-81-952480-7-0). 2021</li>
                                 </ol>
                            </div>--->
                            
                            <h5 class="fw-bold bg-primary p-2 ps-4 mb-0 mt-4 rounded">Book Chapter:
                            </h5>
                            <div>
                                <h6 class="mb-0 px-4 pt-4 pb-2 fw-bold">2021  Total No <01></h6>
                                <ol class="list-group list-group-numbered px-4 mb-2">
                                    <li class="list-group-item">R. Sansiya, P. Kumar, R.S. Thakur, and A. Mohammadi, (2021). Integrate Hybrid Cloud Computing Server With Automated Remote Monitoring for Blockchain as a Service. In Patel, H., & Thakur, G. S. (Ed.), Blockchain Applications in IoT Security, IGI Global,  (pp. 203-218),  ISBN: 9781799824145,http://doi:10.4018/978-1-7998-2414-5.ch012</li>
                                    
                                    
                                 </ol>
                            </div>
                            <div>
                                <h6 class="mb-0 px-4 pt-4 pb-2 fw-bold">2022  Total No < 02  ></h6>
                                <ol class="list-group list-group-numbered px-4 mb-2">
                                    <li class="list-group-item">Prasanta Pratim Bairagi,<b> Kanojia Sindhuben Babulal </b>and Mala Dutta, (2022). Power Management in Wireless Sensor Network. In  CRC Press Taylor & Francis Group,  LLC    (Accepted).</li>
                                    <li class="list-group-item"><b>Kanojia Sindhuben Babulal</b> and  Bashu Nayak, (2022), Suicidal Analysis on Social Network using Machine Learning. In The Internet of Medical Things (IoMT) and Telemedicine Frameworks and Applications, IGI Global (Accepted).</li>
                                    
                                 </ol>
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