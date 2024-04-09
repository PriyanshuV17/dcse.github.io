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
		
		.justify-text-right {
			text-align: justify;
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

        <!-- About 1 Area Start Here -->

		<!--
        <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">CS&E Departments</h1>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		-->
		<div class="slider1-area overlay-default index1" >
            <div class="bend niceties preview-1">
                <div id="ensign-nivoslider-3" class="slides" style="height:500px;">
					<img src="sliderimg/slider19.jpg" alt="slider" title="#slider-direction-1" />
					<img src="sliderimg/slidercse1.jpeg" alt="slider" title="#slider-direction-1" />
					<img src="sliderimg/slidercse2.jpeg" alt="slider" title="#slider-direction-1" />
					<img src="sliderimg/slidercse3.jpeg" alt="slider" title="#slider-direction-1" />
				</div>
            </div>
        </div>
		
        <div class="slider1-area index1 px-4 pb-4">			
            <div class="container-fluid">
                <div class="row">
				<div class="col-md-3">
                        <?php require_once('quick-links.php'); ?>
                    </div>
				
				
                    <div class="col-md-9">
                        <div class="card shadow rounded">
                            <h5 class="fw-bold bg-primary p-2 ps-4 mb-0 rounded">Department of Computer Science & Engineering
                            </h5>
                            <div class="p-4 justify-text-right">
                                <p>Department of Computer Science and Engineering is at the heart of the Central University of Jharkhand, preparing graduates for career leadership; taking up interdisciplinary research in academia and high technology industry responsibilities alike. The department of Computer Science and Engineering started with the vision to pursue digital transformation of the social, geographical and economic landscape, narrowing the gap of conventional wisdom through computing interfaces.</p>
                                <p>It is the departmental ambition to be internationally recognized as a leader in Computer Science, a department with coherent activities within research, education, development and industry cooperation. The research in the department is focused on major thrust areas of Computer Science like Machine Learning, Deep Learning, Natural Language Processing, Image Processing, Soft Computing, Computer Vision, Cognitive Robotics, Network Security, Cloud Computing, Data Mining, Data Science, Mobile Computing, Information Security and on other interdisciplinary relevant areas.</p>
								<p>Currently the department favours the intake of students in its M.Tech (CSE) course, offering a healthy environment for enabling graduates towards a path they prefer furnishing ample opportunities both in academia and industry. Full time Ph.D positions are pursued by high quality individuals with a motivation for change and progress through their future contributions in the area of Computer Science as a whole with its applications so diverse and inherent essential. From the year 2022/23 the department has started the intake for 5 years Integrated B. Tech. and M. Tech. in Computer Science and Engineering with specialization in Machine Learning and Data Science.</p>
								
								
									
									
				                 <div class="card bg-white p-3 rounded">
                                    <div class="course-content">
                                        <div class="course-instructor">
                                            <div class="row align-items-center dept-area1">
                                                <div class="col-md-6 ">
                                                    <h4 class="htitle"><span>Head of the Department</span></h4>
                                                    <div class="instructor-inner d-flex align-items-center">
                                                        <div class="instructor-img me-4">
                                                            <img style="height: 100px;" src="../img/HOD/subhash.jpg" alt="Image">
                                                            </div>
                                                        <div class="instructor-body">
                                                            <h3 class="name mb-0"><a>
                                                                    Prof. Subhash Chandra Yadav</a>
                                                            </h3>
                                                            <div class="profile-overlay">

                                                            <span class="designation"> Professor(M.Tech, PhD)</span><br>
                                                            <span><i class="fa fa-phone">&nbsp;</i> +91-9415870233
                                                                </span><br>
                                                            
                                                            <span><i class="fa fa-envelope">&nbsp;</i>
                                                                 dr.scyadav@cuj.ac.in
                                                             </span>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="htitle"><span>Office Address</span></h4>
                                                    <div class="instructor-inner">
                                                        <div class="instructor-body">
                                                            <span>Department of Computer Science and Engineering</span><br>
                                                            <span><i class="fa fa-map-marker">&nbsp;</i>Central University of Jharkhand </span><br>
                                                            <span><i class="fa fa-map-marker">&nbsp;</i>
																Ratu-Lohardaga Road <br />
																Brambe, Ranchi - 835 205 <br />
																Jharkhand, India</span><br>
                                                            <span><i class="fa fa-phone">&nbsp;</i>+91-9415870233</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="card-body">
                                                         <div class="team-icons float-right">
                                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                                         </div>
                                                    </div>
                                                    <div class="boxmedia">
                                                        <p><br></p>
                                                     </div>
                                                    <div class="card-body"> <a href="subhash.php" class="custonbtn">View Profile</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
						<!--
                        <div class="card shadow rounded mt-5">
                            <h5 class="fw-bold bg-primary p-2 ps-4 mb-0 rounded">Departmental Research Committee
                            </h5>
                            <div class="px-4 mt-4">
                                <p>Departmental Research Committee (DRC) of the department is constituted with the following members (who are also eligible research supervisors):
                                </p>                             
                            </div>
                            <div class=" table-responsive mx-4">
                              
                              <table class="table table-bordered table-striped rounded-1" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Chairman of the Committee </th>
                                        <th>Head of the Department (ex-officio member)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Professor / Associate Professors of the department</td>
                                        <td><ol class="list-group-numbered mb-0">
                                    <li class="">Dr. Subhash Chandra Yadav,Professor </li>
                                    <li class="">Dr. Subhash Chandra Yadav,Professor </li>
                                 </ol></td>
                                    </tr>
                                    <tr>
                                    <td>Assistant Professors of the department </td>
                                    <td><ol class="list-group-numbered mb-0">
                                    <li class="">Dr. Prashant Prashun </li>
                                    <li class="">Dr. Kanojia Sindhuben Babulal</li>
									<li class="">Dr. Pushpendra Kumar</li>
                                 </ol></td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <div class="card shadow rounded mt-5">
                            <h5 class="fw-bold bg-primary p-2 ps-4 mb-0 rounded">Department of Computer Science & Technology 
                            </h5>
                            <div class="px-4 mt-4">
                                <p>It is notified for information of all the concerned that the Board of Studies (BOS) for Department of Computer Science & Technology is hereby constituted having the following members:
                                </p>                             
                            </div>
                            <div class=" table-responsive mx-4">
                              
                              <table class="table table-bordered table-striped rounded-1" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>As prescribed by the Ordinance of CUJ </th>
                                        <th>Proposed Names</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>The Head of the department, Convener & Chair Person Ex-Officio</td>
                                        <td>Dr. Subhash Chandra Yadav, Head, Department of Computer Science & Technology</td>
                                    </tr>
                                    <tr>
                                        <td>All professors of the Department</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                    <td>Two Associate Professors and Two Assistant Professors of the Department by rotation, on the basis of seniority</td>
                                    <td><b>Associate Professors:</b><ol class="list-group-numbered mb-2">
                                    <li class=""></li>
                                    <li class=""></li>
                                 </ol>
                                 <b>Assistant Professors:</b><ol class="list-group-numbered mb-0">
                                    <li class=""></li>
                                    <li class=""></li>
                                 </ol></td>
                                    </tr>
                                    <tr>
                                    <td>One teacher each from other Department within having common course with the Department</td>
                                    <td><ol class="list-group-numbered mb-0">
                                    <li class=""></li>
                                    <li class=""></li>
                                 </ol></td>
                                    </tr>
                                    <tr>
                                    <td>Not more than two teachers teaching allied or cognate subjects in other schools nominated by the Vice- Chancellor on the recommendations of the Department concernedt</td>
                                    <td><ol class="list-group-numbered mb-0">
                                    <li class=""></li>
                                    <li class=""></li>
                                 </ol></td>
                                    </tr>
                                    <tr>
                                    <td>Five teachers from constituent college and recognized institutions if any, engaged in teaching the subject concerned nominated by the School of Studies</td>
                                    <td><ol class="list-group-numbered mb-0">
                                    <li class=""></li>
                                 </ol></td>
                                    </tr>
                                    <tr>
                                    <td>Note more than three persons nominated by the Board of the school, who have specialized knowledge of the subjects around which the Department/ Centres in the school are organized and who are not employees of the University, any of its constituent college or recognized institutions.</td>
                                    <td><ol class="list-group-numbered mb-2">
                                    <li class="mb-1"><b></b><br><br> <br> <br> </li>
                                    <li class="mb-1"><b></b><br><br> <br> <br> </li>
                                    <li class=""><b></b><br><br> <br> <br></li>
                                 </ol>
                                 </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            <div class="px-4 mt-4">
                                <p>*School of Management Sciences has two departments at present namely,Dept. of Computer Science & Technology
                                </p>  
                                <p>The term of the office of members, other than the Head of Department and Professor shall be for the remaining period of 3 years from the date of issue of notification.</p>                           
                            </div>
                        </div>
                        -->
                       
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