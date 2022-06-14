<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
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
	<link rel="shortcut icon" href="<?=site_url();?>public/assets/images/favicon.ico">
	<!-- Bootstrap -->
	<script src="<?=site_url();?>public/js/modernizr.custom.js"></script>
	<link href="<?=site_url();?>public/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=site_url();?>public/css/jquery.fancybox.css" rel="stylesheet">
	<link href="<?=site_url();?>public/css/flickity.css" rel="stylesheet">
	<link href="<?=site_url();?>public/css/animate.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
	<link href="<?=site_url();?>public/css/styles.css" rel="stylesheet">
	<link href="<?=site_url();?>public/css/queries.css" rel="stylesheet">
	<link href="<?=site_url();?>public/css/custome.css " rel="stylesheet">
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
            <link rel="stylesheet" href="<?=site_url();?>public/NewAssests/css/bootstrap.min.css">
            <link rel="stylesheet" href="<?=site_url();?>public/NewAssests/css/owl.carousel.min.css">
            <link rel="stylesheet" href="<?=site_url();?>public/NewAssests/css/flaticon.css">
            <link rel="stylesheet" href="<?=site_url();?>public/NewAssests/css/price_rangs.css">
            <link rel="stylesheet" href="<?=site_url();?>public/NewAssests/css/slicknav.css">
            <link rel="stylesheet" href="<?=site_url();?>public/NewAssests/css/animate.min.css">
            <link rel="stylesheet" href="<?=site_url();?>public/NewAssests/css/magnific-popup.css">
            <link rel="stylesheet" href="<?=site_url();?>public/NewAssests/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="<?=site_url();?>public/NewAssests/css/themify-icons.css">
            <link rel="stylesheet" href="<?=site_url();?>public/NewAssests/css/slick.css">
            <link rel="stylesheet" href="<?=site_url();?>public/NewAssests/css/nice-select.css">
            <link rel="stylesheet" href="<?=site_url();?>public/NewAssests/css/style.css">
</head>

<body >
    
	<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
	<!-- open/close -->
    <div class="etbg">
	<header>
		<section class="hero1">

			<div class="container">
				<div class="row nav-wrapper">
					<div class="col-md-6 col-sm-6 col-xs-6 text-left">
						<a href="#"><img src="<?=site_url();?>public/assets/images/logo.svg" alt="Samug" style="height: 120px;width: 250px;top:0px;"></a>
					</div>
					<!--<div class="col-md-6 col-sm-6 col-xs-6 text-right navicon">
							<p>MENU</p><a id="trigger-overlay" class="nav_slide_button nav-toggle" href="#"><span></span></a>
						</div>-->
				</div>

			</div>
		</section>
	</header>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="section-tittle text-center">
            <span style="color:#3E68EF">Enter Your Details Below :</span>
			<?php
                             //print_r($jobDescript);
                            if (isset($jobDescript)) {
                                if (is_array($jobDescript)) {
                                    foreach ($jobDescript as $data) {
                            ?>


            <h2><?= $data->title; ?></h2>
			<?php
                                    }
                                }
                            }

                            ?>
       
        </div>
    </div>
</div>

	<?php
                             //print_r($jobDescript);
                            if (isset($jobDescript)) {
                                if (is_array($jobDescript)) {
                                    foreach ($jobDescript as $data) {
                            ?>


<form method="post" action="<?=site_url();?>Home/saveUser/<?php echo $data->job_id; ?>/0" enctype="multipart/form-data" class="row g-4 justify-content-center" style="float:center;margin-top:-20px;padding:10px">
             <input class="form-control" type="hidden" name="contactUid" id='contactUid' value='0'>
             <div class="col-md-8">
              <label>Full Name</label><span style="color:red">*</span>
	<input class="form-control"type="text" style="margin-bottom:20px" pattern=".{3,20}" id="firstname" placeholder="First Name" name="firstname" autocomplete="off" required title="accept 3 to 20 characters only">
                </div>
             <div class="col-md-8">
    <label>Mobile Number</label><span style="color:red">*</span>
	<input class="form-control"type="text" style="margin-bottom:20px" pattern="[0-9]{10}" id="phoneNo"  placeholder="Mobile Number "name="phoneNo" autocomplete="off" required title="please Enter 10 digits number">
				</div>
			 
                <div class="col-md-8">
                <label>Email Id</label><span style="color:red">*</span>
	<input class="form-control"type="email" style="margin-bottom:20px" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" id="Email" placeholder="Email" name="emailId" autocomplete="off" required title="Enter an valid Email address">
                </div>
				
                <!-- <div class="col-md-8">
                <label>Address</label>
                    <input type="text" id="address" style="margin-bottom:20px" class="form-control"   autocomplete="off" placeholder="Enter Subject" name="address">
                </div> -->
				<div class="col-md-8">
				<label class="fileuploadlabel" for="FileUpload">Upload Your Resume/CV:</label><span style="color:red">*</span>
 <input class="fileupload" type="file" id="myFile" style="margin-bottom:20px" name="filename" accept=".gif, .jpg, .png, .doc,.pdf"  autocomplete="off" required title="accept only .gif, .jpg, .png, .doc">

				<span style="font-size:12px;color:blue">Accepts only PDF, .jpg, .png, .pdf </span>
 <br><br>
 
 </div>
 <div class="col-md-10 d-grid">
                    <button class="btn btn-primary" style="border-Radius:10px ;float:right;background-color:#3E68EF">Submit Application</button>
                </div>
            </form>
			<?php
                                    }
                                }
                            }

                            ?>
         
			<footer>
        <!-- Footer Start-->
      
        <!-- footer-bottom area -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex justify-content-between align-items-center">
                         <div class="col-xl-10 col-lg-10 ">
                             <div class="footer-copy-right">
                                 <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | 
  
  <!-- This is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://syneins.com/" target="_blank">Syneins</a> -->
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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

	
	<!--<div class="overlay overlay-boxify">
			<nav>
				<ul>
					<li><a href="#"><i class="fa fa-heart"></i>Help</a></li>
					<li><a href="#"><i class="fa fa-flash"></i>Jobs</a></li>
						<li><a href="#"><i class="fa fa-desktop"></i>Contact</a></li>
				</ul>
				<ul>
				<li><a href="#"><i class="fa fa-download"></i>T&C</a></li>
					<li><a href="#"><i class="fa fa-download"></i>Privacy</a></li>
				</ul>
			</nav>
		</div>-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?=site_url();?>public/js/min/toucheffects-min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="<?=site_url();?>public/js/flickity.pkgd.min.js"></script>
	<script src="<?=site_url();?>public/js/jquery.fancybox.pack.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?=site_url();?>public/js/retina.js"></script>
	<script src="<?=site_url();?>public/js/waypoints.min.js"></script>
	<script src="<?=site_url();?>public/js/bootstrap.min.js"></script>
	<script src="<?=site_url();?>public/js/min/scripts-min.js"></script>
	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
		(function(b, o, i, l, e, r) {
			b.GoogleAnalyticsObject = l;
			b[l] || (b[l] =
				function() {
					(b[l].q = b[l].q || []).push(arguments)
				});
			b[l].l = +new Date;
			e = o.createElement(i);
			r = o.getElementsByTagName(i)[0];
			e.src = '//www.google-analytics.com/analytics.js';
			r.parentNode.insertBefore(e, r)
		}(window, document, 'script', 'ga'));
		ga('create', 'UA-XXXXX-X');
		ga('send', 'pageview');
	</script>
	<script>
	$(document).ready(function(){
	 $("#display_popup").click(function(){
	  showpopup();
	 });
	 $("#cancel_button").click(function(){
	  hidepopup();
	 });
	 $("#close_button").click(function(){
	  hidepopup();
	 });
	});


	function showpopup()
	{
	 $("#popup_box").fadeToggle();
	 $("#popup_box").css({"visibility":"visible","display":"block"});
	}

	function hidepopup()
	{
	 $("#popup_box").fadeToggle();
	 $("#popup_box").css({"visibility":"hidden","display":"none"});
	}
	</script>
</body>

</html>
