<!DOCTYPE html>

<html class="no-js">
<!--<![endif]-->
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Samug jobs</title>
    <meta name="description" content="A free HTML5/CSS3 template made exclusively for Codrops" />
    <meta name="keywords" content="html5 template, css3, one page, animations, agency, portfolio, web design" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="<?= site_url(); ?>public/assets/images/favicon.ico">
    <!-- Bootstrap -->
    <script src="<?= site_url(); ?>public/js/modernizr.custom.js"></script>
    <link href="<?= site_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= site_url(); ?>public/css/jquery.fancybox.css" rel="stylesheet">
    <link href="<?= site_url(); ?>public/css/flickity.css" rel="stylesheet">
    <link href="<?= site_url(); ?>public/css/animate.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
    <link href="<?= site_url(); ?>public/css/styles.css" rel="stylesheet">
    <link href="<?= site_url(); ?>public/css/queries.css" rel="stylesheet">
    <link href="<?= site_url(); ?>public/css/custome.css " rel="stylesheet">
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- CSS here -->
    <link rel="stylesheet" href="<?= site_url(); ?>public/NewAssests/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= site_url(); ?>public/NewAssests/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= site_url(); ?>public/NewAssests/css/flaticon.css">
    <link rel="stylesheet" href="<?= site_url(); ?>public/NewAssests/css/price_rangs.css">
    <link rel="stylesheet" href="<?= site_url(); ?>public/NewAssests/css/slicknav.css">
    <link rel="stylesheet" href="<?= site_url(); ?>public/NewAssests/css/animate.min.css">
    <link rel="stylesheet" href="<?= site_url(); ?>public/NewAssests/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= site_url(); ?>public/NewAssests/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= site_url(); ?>public/NewAssests/css/themify-icons.css">
    <link rel="stylesheet" href="<?= site_url(); ?>public/NewAssests/css/slick.css">
    <link rel="stylesheet" href="<?= site_url(); ?>public/NewAssests/css/nice-select.css">
    <link rel="stylesheet" href="<?= site_url(); ?>public/NewAssests/css/style.css">
</head>


<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?= site_url(); ?>public/assets/images/samug.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
    </header>
    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">

            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider slider-height2 d-flex align-items-center" data-background="<?= site_url(); ?>public/NewAssests/img/hero/h1_hero.jpg" style="padding-Bottom:10px ;background-size:100% 100%;
  height: auto;">
                    <div class="container">
                        <section class="hero1">

                            <div class="container">
                                <div class="row nav-wrapper">
                                    <div class="col-md-6 col-sm-6 col-xs-6 text-left" style="margin-top: -20px;">
                                        <a href="#"><img src="<?= site_url(); ?>public/assets/images/logo.svg" alt="Samug" style="height: 120px;width: 250px;top:0px;"></a>
                                    </div>
                                    <!--<div class="col-md-6 col-sm-6 col-xs-6 text-right navicon">
                                            <p>MENU</p><a id="trigger-overlay" class="nav_slide_button nav-toggle" href="#"><span></span></a>
                                        </div>-->
                                </div>

                            </div>
                        </section>
                        <div class="row" style="margin-top:-40px">
                            <div class="col-xl-6 col-lg-9 col-md-10">

                                <div class="section-tittle">

                                    <h2>Choose a job you love, and you will never have to work a day in your life</h2>
                                </div>

                            </div>
                        </div>
                        <!-- Search Box -->
                
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
        <form method="post" action="<?=site_url();?>Home/updatedJobs" class="search-box">
                                    <div class="select-form" >
                                        <select class="form-select" height=10px style="max-height:100px; overflow:auto;" aria-label=" select example" id="categorySelect" name="categorySelect" selected >
                                         <option value="0">Choose Jobs</option>
                                        <?php 
  // print_r($CategoryData);
	if(isset($CategoryData)){
		if(is_array($CategoryData)){
			foreach($CategoryData as $tmp){
                ?>
                                            <option value="<?=$tmp->id;?>"  <?php
                            if(isset($category) && $tmp->id == $category){
                                echo 'selected';
                            }
                      ?>
                                            ><?=$tmp->category;?></option>
                                            <?php
                                        }
                                    }
                                }
                                
                             ?>
                                        </select>
                                    </div>
                              
                                    <div class="select-form">
                                        <select class="form-select term" aria-label="select example" name="workLocation" id="workLocation"     
                                    >     >
                                            <option value="0" >Select Location</option>
                                        
                                            <?php 
  
	if(isset($getworkLocation)){	
			foreach($getworkLocation as $tmp){
                ?>
                                            <option value="<?=$tmp['id'];?>"  <?php
                            if(isset($workLocation) && $tmp['id'] == $workLocation){
                                echo 'selected';
                            }
                      ?>
                                            ><?=$tmp['name'];?></option>
                                            <?php
                                        }
                                 
                                }
                                
                             ?>  
                                        </select>
                                    </div>
                                    <div class="search-form">
                                    <input type="submit" class="btn btn-danger waves-effect waves-light" style="float:center;margin:10px;background-color:#3E68EF;" value='Submit'/>
                                    </div>
                                </form>
                            </div>
        <section class="featured-job-area feature-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center" style="margin-top: -50px;">
                            <h2>Featured Jobs</h2>
                        </div>
                    </div>
                </div>

                <div id="empTable">
                <?php 
  // print_r($CategoryData);
                             
	if(isset($DescriptionData)){
		if(is_array($DescriptionData)){
			foreach($DescriptionData as $tmp){
                ?>
                <div class="row justify-content-center" style="margin-top:-50px">
                    <div class="col-xl-10">
                        <!-- single-job-content -->
                       
                        <div class="single-job-items mb-30">
                            <div class="row job-items">
                                <div class="col-md-9 job-tittle">
                                    <a href="<?=site_url()?>Home/Jobs_Details/<?php echo $tmp->job_id; ?>/0">
                                       
                                    <h4><?=$tmp->title;?></h4>
                                    </a>
                                    <ul>
                                         <li><i class="fas fa-map-marker-alt"></i><?=  ($tmp->workLocation ==1) ? "Remote" :CityData($tmp->city,$tmp->country)?></li>
                                    </ul>

                                    <p><?=$tmp->description;?></p><span><a style="color:blue;" href="<?=site_url()?>Home/Jobs_Details/<?php echo $tmp->job_id; ?>/0">Read more...</a></span>
                                </div>
                                <div class="items-link f-right">
                                    <a  href="<?=site_url()?>Home/Jobs_Details/<?php echo $tmp->job_id; ?>/0">APPLY NOW</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <?php
                                        }
                                    }
                                }
                                
                             ?>

                            </div>


            </div>
        </section>
        <!-- Featured_job_end -->
        <!-- How  Apply Process Start-->
        <!-- <div class="apply-process-area apply-bg pt-50 pb-50" data-background="<?= site_url(); ?>public/NewAssests/img/gallery/how-applybg.png">
            <div class="container">
                <!-- Section Tittle 
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle white-text text-center">
                            <span>Apply process</span>
                            <h2> How it works</h2>
                        </div>
                    </div>
                </div>
                <!-- Apply Process Caption 
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-search"></span>
                            </div>
                            <div class="process-cap">
                                <h5>1. Search a job</h5>
                                <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-curriculum-vitae"></span>
                            </div>
                            <div class="process-cap">
                                <h5>2. Apply for job</h5>
                                <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="process-cap">
                                <h5>3. Get your job</h5>
                                <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </main>
    <footer>
        <!-- Footer Start-->

        <!-- footer-bottom area -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-10 col-lg-10 ">
                            <div class="footer-copy-right">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | 
                                    
                                    <!-- This is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://syneins.com/" target="_blank">Syneins</a>
                                    Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <!-- <div class="footer-social f-right">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="<?= site_url(); ?>public/NewAssests/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?= site_url(); ?>public/NewAssests/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= site_url(); ?>public/NewAssests/js/popper.min.js"></script>
    <script src="<?= site_url(); ?>public/NewAssests/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?= site_url(); ?>public/NewAssests/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?= site_url(); ?>public/NewAssests/js/owl.carousel.min.js"></script>
    <script src="<?= site_url(); ?>public/NewAssests/js/slick.min.js"></script>
    <script src="<?= site_url(); ?>public/NewAssests/js/price_rangs.js"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="<?= site_url(); ?>public/NewAssests/js/wow.min.js"></script>
    <script src="<?= site_url(); ?>public/NewAssests/js/animated.headline.js"></script>
    <script src="<?= site_url(); ?>public/NewAssests/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="<?= site_url(); ?>public/NewAssests/js/jquery.scrollUp.min.js"></script>
    <script src="<?= site_url(); ?>public/NewAssests/js/jquery.nice-select.min.js"></script>
    <script src="<?= site_url(); ?>public/NewAssests/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="<?= site_url(); ?>public/NewAssests/js/contact.js"></script>
    <script src="<?= site_url(); ?>public/NewAssests/js/jquery.form.js"></script>
    <script src="<?= site_url(); ?>public/NewAssests/js/jquery.validate.min.js"></script>
    <script src="<?= site_url(); ?>public/NewAssests/js/mail-script.js"></script>
    <script src="<?= site_url(); ?>public/NewAssests/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="<?= site_url(); ?>public/NewAssests/js/plugins.js"></script>
    <script src="<?= site_url(); ?>public/NewAssests/js/main.js"></script>
    <script>
        </script>
</body>

</html>