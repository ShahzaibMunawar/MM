<?php require_once("inc/config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Software Development | Website Development | Micromerger IT Solutions (Pvt) Ltd.</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo URL; ?>assets/plugins/bootstrap/css/bootstrap.min.css" type='text/css' />
    <link rel="stylesheet" href="<?php echo URL; ?>assets/plugins/OwlCarousel/assets/owl.carousel.min.css" type='text/css' />
    <link rel="stylesheet" href="<?php echo URL; ?>assets/plugins/hover/hover-min.css" type='text/css' />
    <link rel="stylesheet" href="<?php echo URL; ?>assets/plugins/OwlCarousel/assets/owl.theme.default.min.css" type='text/css' />

    <link rel="stylesheet" href="<?php echo URL; ?>assets/css/style.css" type="text/css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="<?php echo URL; ?>assets/js/html5shiv.min.js"></script>
          <script src="<?php echo URL; ?>assets/js/respond.min.js"></script>
        <![endif]-->

</head>

<body>
    <!-- BEGIN PRELOADER -->
    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    <!-- END PRELOADER  -->

    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#togmenu">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
                    <a class="navbar-brand" href="index.php" title="Software Development | Website Development | Micromerger IT Solutions (Pvt) Ltd.">
                        <div class="brand-wrap">
                            <img src="<?php echo URL; ?>assets/images/new-logo.png" />
                            <div class="brand-text">
                                <strong>Micromerger <small>(Pvt.) Ltd.</small></strong>
                                <span>IT Services, Consulting &amp; Business Solutions</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="togmenu">
                    <ul class="nav navbar-nav navbar-right" id="menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="Service.php">Services</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="Contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="banner" id="id-home">
        <div class="color-overlay">
            <div class="container">
                <div class="text-warpper">
                    <div class="banner-text">
                        <h1>Welcome to MicroMerger</h1>
                        <h3>We provide you <span id="animate-text"></span></h3>
                        <button type="button" class="btn btn-lg btn-primary">Get started now <i class="fa fa-angle-right"></i> </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="default-section white" id="id-about">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 clearfix col-md-6 col-xs-4 imgs">
                    <img src="<?php echo URL; ?>assets/images/who-we-are.png" alt="who we are" class="img-responsive pull-right">
                </div>
                <!-- end .col-sm-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-8 col-w-100">
                    <div class="section-heading">
                        <h2><small>About Us</small>Who We Are</h2>
                        <p class="lead">Our commitment to building relationships with clients, determination to deliver, and pride in results are hallmarks of our business. </p>
                    </div>
                    <p>MicroMerger (Pvt.) Ltd. was established in 2003 with the mission to accelerate the ambitions of its clients by delivering exceptional value through its great people. As an organization we’re inspired by teamwork, innovation, diversity, and integrity. We’re driven by professional excellence and always place our clients at the center of everything we do.</p>

                    <a href="#" class="btn btn-lg btn-primary">Read More <i class="fa fa-angle-right"></i></a>
                </div>
                <!-- end .col-sm-6 -->
            </div>
            <!-- end .row -->
        </div>
    </section>
    <section class="section" id="id-services">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 p-0">
                    <div class="blue-color-overlay">

                        <div class="services-media-list text-left">
                            <h2>Why MicroMerger for IT Solutions?</h2>
                            <ul class="Why-us">
                                <li><i class="fa fa-check" aria-hidden="true"></i><span class="why-us-txt">We not only deliver the right solution, but also that work for you.</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i><span class="why-us-txt">We recognize that each of our clients is different and hence we strive to             develop a solution uniquely tailored for all our clients' individual goals</span></li>
                                <li><i class="fa fa-check" aria-hidden="true"></i><span class="why-us-txt">Customer loyalty, clients satisfaction and profitability are the corner stone of     our company</span></li>
                                <li><i class="fa fa-check" aria-hidden="true"></i><span class="why-us-txt">At MicroMerger, we promote original ideas and standards</span></li>
                                <li><i class="fa fa-check" aria-hidden="true"></i><span class="why-us-txt">We always pay special attention to data security and client privacy</span></li>
                                <li><i class="fa fa-check" aria-hidden="true"></i><span class="why-us-txt">Transparency and fairness is the core of values practiced here</span></li>
                            </ul>
                        </div>



                    </div>
                </div>
                <div class="col-md-5">
                    <div class=""></div>
                </div>
            </div>
        </div>
    </section>

    <section class="default-section section white" id="id-features">
        <div class="container">
            <div class="section-heading">
                <h2 class="m-t-0"><small>Services</small>WHAT WE DO</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-w-100">
                    <div class="feature-box">
                        <ul class="main-heading">
                            <li><i class="fa fa-suitcase"></i></li>
                            <li class="media-heading ">IT Outsourcing</li>
                        </ul>
                        <ul class="sub-heading">
                            <li><i class="fa fa-check" aria-hidden="true"></i>Web,Mobile Apps</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Internet of Things</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Machine Learning</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Usability '&amp;' Innovative Designing</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-w-100">
                    <div class="feature-box">
                        <ul class="main-heading">
                            <li><i class="fa fa-suitcase"></i></li>
                            <li class="media-heading ">Project M&amp;E</li>
                        </ul>
                        <ul class="sub-heading">
                            <li><i class="fa fa-check" aria-hidden="true"></i>M&amp;E framework</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Monitoring database</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>M&amp;E Training</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Monitoring &amp; reporting systems</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-w-100">
                    <div class="feature-box">
                        <ul class="main-heading">
                            <li><i class="fa fa-users" aria-hidden="true" style></i></li>
                            <li class="media-heading ">Third-party Monitoring</li>
                        </ul>
                        <ul class="sub-heading">
                            <li><i class="fa fa-check" aria-hidden="true"></i>Independent Monitor</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Monitoring database</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Independent Monitor</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Human Resources</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-w-100">
                    <div class="feature-box">
                        <ul class="main-heading">
                            <li class="top"><i class="fa fa-users top" aria-hidden="true"></i></li>
                            <li class="media-heading b4">Surveys,<br>Assessments &amp; Studies</li>
                        </ul>
                        <ul class="sub-heading">
                            <li><i class="fa fa-check" aria-hidden="true"></i>Multiple Indicator Cluster Surveys</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Health Facility Assessment</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Education and Literacy Census</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Emergency Health &amp; Nutrition Assessment</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-w-100">
                    <div class="feature-box">
                        <ul class="main-heading">
                            <li class="top"><i class="fa fa-users top" aria-hidden="true"></i></li>
                            <li class="media-heading  b4">Data <br> Processing &amp; Management</li>
                        </ul>
                        <ul class="sub-heading">
                            <li><i class="fa fa-check" aria-hidden="true"></i>Processing of survey data</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Data Conversion</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Data Analysis</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Data Analysis</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-w-100">
                    <div class="feature-box m-t-13">
                        <ul class="main-heading">
                            <li><i class="fa fa-users" aria-hidden="true"></i></li>
                            <li class="media-heading b4">Training Services</li>
                        </ul>
                        <ul class="sub-heading m-t-2">
                            <li><i class="fa fa-check" aria-hidden="true"></i>Health Service Training</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Statistical analysis</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>GIS</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Specialized training to DHIS &amp; DHIS 2</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end row -->



        </div>
    </section>
    <section class="default-section section hide white p-b-0" id="id-portfolio">
        <div class="container">
            <div class="section-heading center">
                <h2><small>Portfolio</small>OUR LATEST WORKS</h2>
            </div>
            <ul class="mixitUp-menu text-center">
                <li class="filter"><button type="button" class="btn btn-link" data-filter="all">All</button></li>
                <li class="filter"><button type="button" class="btn btn-link" data-filter=".buil">link building</button></li>
                <li class="filter"><button type="button" class="btn btn-link" data-filter=".keyword">Keywrod research</button></li>
                <li class="filter"><button type="button" class="btn btn-link" data-filter=".makre">Marketing</button></li>
                <li class="filter"><button type="button" class="btn btn-link" data-filter=".google">Google Analyize</button></li>
            </ul>
        </div>
        <div class="container-fluid">
            <div class="row" id="mixitUp-item">
                <div class="mix keyword google" data-order="1">
                    <div class="single-project color1">
                        <img src="<?php echo URL; ?>assets/images/projects/33.jpg" alt="Image" class="tran4s">
                        <div class="hover tran4s">
                            <div class="div">
                                <p>SEO Optimization</p>
                                <h5>Business &amp; Finance</h5>
                                <a href="project-details.html" class="tran3s round-border">+</a>
                            </div>
                        </div>
                        <!-- /.hover -->
                    </div>
                    <!-- /.single-project -->
                </div>
                <!-- /.mix -->
                <div class="mix buil makre" data-order="2">
                    <div class="single-project color2">
                        <img src="<?php echo URL; ?>assets/images/projects/34.jpg" alt="Image" class="tran4s">
                        <div class="hover tran4s">
                            <div class="div">
                                <p>SEO Optimization</p>
                                <h5>Business &amp; Finance</h5>
                                <a href="project-details.html" class="tran3s round-border">+</a>
                            </div>
                        </div>
                        <!-- /.hover -->
                    </div>
                    <!-- /.single-project -->
                </div>
                <!-- /.mix -->
                <div class="mix keyword makre google" data-order="3">
                    <div class="single-project color3">
                        <img src="<?php echo URL; ?>assets/images/projects/35.jpg" alt="Image" class="tran4s">
                        <div class="hover tran4s">
                            <div class="div">
                                <p>SEO Optimization</p>
                                <h5>Business &amp; Finance</h5>
                                <a href="project-details.html" class="tran3s round-border">+</a>
                            </div>
                        </div>
                        <!-- /.hover -->
                    </div>
                    <!-- /.single-project -->
                </div>
                <!-- /.mix -->
                <div class="mix buil keyword google" data-order="4">
                    <div class="single-project color4">
                        <img src="<?php echo URL; ?>assets/images/projects/36.jpg" alt="Image" class="tran4s">
                        <div class="hover tran4s">
                            <div class="div">
                                <p>SEO Optimization</p>
                                <h5>Business &amp; Finance</h5>
                                <a href="project-details.html" class="tran3s round-border">+</a>
                            </div>
                        </div>
                        <!-- /.hover -->
                    </div>
                    <!-- /.single-project -->
                </div>
                <!-- /.mix -->
                <div class="mix buil makre" data-order="5">
                    <div class="single-project color5">
                        <img src="<?php echo URL; ?>assets/images/projects/37.jpg" alt="Image" class="tran4s">
                        <div class="hover tran4s">
                            <div class="div">
                                <p>SEO Optimization</p>
                                <h5>Business &amp; Finance</h5>
                                <a href="project-details.html" class="tran3s round-border">+</a>
                            </div>
                        </div>
                        <!-- /.hover -->
                    </div>
                    <!-- /.single-project -->
                </div>
                <!-- /.mix -->
            </div>
        </div>
        <div class="highlight blue">
            <div class="container">
                <div class="row">
                    <div class="contact-us-text">
                        <h4>We are complete more than <span>1200+ Project</span> succsessfully</h4>
                        <a href="#" class="btn btn-white-line">Go to Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="default-section light-gray p-b-0" id="id-clients">
        <div class="container">
<!--           <center>Our Clients</center>-->
            <div class="slide-track"></div>
            <div class="owl-carousel clients-grid owl-theme">

                <div class="item">
                    <img src="assets/images/clients/dhis-logo.jpg" alt="">
                </div>
                <div class="item">
                    <img src="assets/images/clients/dhis-sindh.jpg" alt="dhis-sindh">
                </div>
                <div class="item">
                    <img src="assets/images/clients/end-polio.jpg" alt="end-polio">
                </div>
                <div class="item">
                    <img src="assets/images/clients/kenetic.jpg" alt="kenetic">
                </div>

                <div class="item">
                    <img src="assets/images/clients/midwives.jpg" alt="midwives">
                </div>
                <div class="item">
                    <img src="assets/images/clients/save-children.jpg" alt="save-children">
                </div>
                <div class="item">
                    <img src="assets/images/clients/usaid.jpg" alt="usaid">
                </div>
                <div class="item">
                    <img src="assets/images/clients/wins-logo.jpg" alt="wins">
                </div>
                <div class="item">
                    <img src="assets/images/clients/WFoNew.jpg" alt="WFo">
                </div>
                <div class="item">
                    <img src="assets/images/clients/unicef.jpg" alt="unicef">
                </div>
                <div class="item">
                    <img src="assets/images/clients/govPk.jpg" alt="govPk">
                </div>
                <div class="item">
                    <img src="assets/images/clients/UNDP.jpg" alt="UNDP">
                </div>



            </div>
        </div>
        <div class="asset">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="asset_mainhead">Our people are <br> <span>Our strongest asset</span></div>
                        <div class="asset_subhead">
                            We know that the talent and points of view of diverse individuals built our legacy and shapes our future.
                        </div>
                        <div id="text-carousel" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="row">
                                <div class="col-xs-offset-2 col-xs-8">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="carousel-content">
                                                <div>
                                                    <p>We know a diverse workforce and an inclusive culture matters to our clients.</p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="carousel-content">
                                                <div>
                                                    <p>Our skilled workforce is comprised of individuals drawn from a broad cross section of the global communities we serve.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="carousel-content">
                                                <div>
                                                    <p>Through philanthropy and employee volunteerism, we support the diverse communities where our employees live and work.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#text-carousel" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                  </a>
                            <a class="right carousel-control" href="#text-carousel" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                  </a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="highlight blue">
            <div class="container">
                <div class="row text-center-xs">
                    <div class="col-md-6 col-sm-6 col-xs-6 col-w-100">
                        <h4>You can email us for 24/7 support </h4>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 text-right col-w-100 text-center-xs">
                        <a href="#" class="btn btn-white-line">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--Footer Section Start-->
    <script>


    </script>
    <footer id="id-footer">
        <div id="footer-widgets" class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="widget widget_text">
                        <h2 class="widget-title"><span>ABOUT US</span></h2>
                        <div class="textwidget">
                            <div class="brand-wrap">
                                <img src="<?php echo URL; ?>assets/images/new-logo.png" />
                                <div class="brand-text">
                                    <strong>Micromerger <small>(Pvt.) Ltd.</small></strong>
                                    <span>IT Services, Consulting &amp; Business Solutions</span>
                                </div>
                            </div>
                            <p>
                                MicroMerger is an established software development company that offers application development, e-commerce website development, website design, business web hosting , internet marketing and online media planning.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget widget_links">
                        <h2 class="widget-title"><span>COMPANY LINKS</span></h2>
                        <ul class="col2">
                            <li>
                                <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> History</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Services</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Team &amp; Awards</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Delivery Methods</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Community</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Safety</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> News &amp; Events</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Sustainability</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> FAQ</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Portfolio</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Contact Us</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Shop</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget widget_information">
                        <h2 class="widget-title"><span>CONTACT INFO</span></h2>
                        <ul>
                            <li class="address clearfix">
                                <span class="hl">Address:</span>
                                <span class="text">Plot No. 395-396 Sector I-9/3 (Service Road North), Islamabad, Pakistan</span>
                            </li>
                            <li class="phone clearfix">
                                <span class="hl">Phone:</span>
                                <span class="text">+92-51-8444777</span>
                            </li>
                            <li class="email clearfix">
                                <span class="hl">E-mail:</span>
                                <span class="text">info@micromerger.com</span>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget_socials">
                        <div class="socials">
                            <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="bottom-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="copyright">Copyright 2003-13 MicroMerger (Pvt.) Ltd. | All Rights Reserved</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="bottom-nav list-inline">
                            <li>
                                <a href="#/">Privacy &amp; Terms</a>
                            </li>
                            <li>
                                <a href="#/">Help Center</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo URL; ?>assets/js/jquery-1.11.2.min.js"></script>
    <script src="<?php echo URL; ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo URL; ?>assets/js/modernizr.js"></script>
    <!-- one-page-nav Js -->
    <script src="<?php echo URL; ?>assets/plugins/one-page-nav/jquery.nav.js"></script>

    <!-- smooth-scroll Js
<script src="<?php echo URL; ?>assets/plugins/smooth-scroll/smooth-scroll.js"></script>-->
    <!-- fancybox Js -->
    <script src="<?php echo URL; ?>assets/plugins/fancybox/jquery.fancybox.min.js"></script>

    <!-- Typed Js -->
    <script src="<?php echo URL; ?>assets/plugins/typed/typed.js"></script>
    <!-- mixitup Js -->
    <script src="<?php echo URL; ?>assets/plugins/mixitup/mixitup.min.js"></script>
    <!-- OwlCarousel Js -->
    <script src="<?php echo URL; ?>assets/plugins/OwlCarousel/owl.carousel.min.js"></script>
    <!-- custom -->
    <script src="<?php echo URL; ?>assets/js/app.js"></script>
    <script>
        var num = 50; //number of pixels before modifying styles
        $(window).bind('scroll', function() {
            if (jQuery(window).scrollTop() > num) {
                jQuery('.navbar-default').addClass('floating-menu');
            } else {
                jQuery('.navbar-default').removeClass('floating-menu');
            }
        });

    </script>

</body>
<!--
Design by Shahzaib Munawar
m.shahzaib108@gmail.com-->


</html>
