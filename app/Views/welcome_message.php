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
	<title>Samug</title>
	<meta name="description" content="A free HTML5/CSS3 template made exclusively for Codrops" />
	<meta name="keywords" content="html5 template, css3, one page, animations, agency, portfolio, web design" />
	<meta name="author" content="" />
	<link rel="shortcut icon" href="public/assets/images/favicon.ico" >
	<!-- Bootstrap -->
	<script src="public/js/modernizr.custom.js"></script>
	<link href="public/css/bootstrap.min.css" rel="stylesheet">
	<link href="public/css/jquery.fancybox.css" rel="stylesheet">
	<link href="public/css/flickity.css" rel="stylesheet">
	<link href="public/css/animate.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
	<link href="public/css/styles.css" rel="stylesheet">
	<link href="public/css/queries.css" rel="stylesheet">
	<link href="public/css/custome.css" rel="stylesheet">
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
	<style>
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
	box-shadow:0px 0px 10px 0px grey;
  background-color: #1e2631;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
}

/* The Close Button */
.close {
	box-shadow:0px 0px 10px 0px grey;
  color: #E7E0E0;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}


	#info_text
	{
	 /* padding:3px; */
	 clear:both;
	 color:white;
	}
    .blink {
        animation: blink-animation 1s steps(5, start) infinite;
        -webkit-animation: blink-animation 1s steps(5, start) infinite;
      }
      @keyframes blink-animation {
        to {
          visibility: hidden;
        }
      }
      @-webkit-keyframes blink-animation {
        to {
          visibility: hidden;
        }
      }

	</style>
</head>

<body class="etbg">
	<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
	<!-- open/close -->
	<header>
		<section class="hero1">

			<div class="container">
				<div class="row nav-wrapper">
					<div class="col-md-6 col-sm-6 col-xs-6 text-left">
						<a href="#"><img src="public/assets/images/logo.svg" alt="Samug" style="height: 120px;width: 250px;top:0px;"></a>
					</div>
					<!--<div class="col-md-6 col-sm-6 col-xs-6 text-right navicon">
							<p>MENU</p><a id="trigger-overlay" class="nav_slide_button nav-toggle" href="#"><span></span></a>
						</div>-->
				</div>

			</div>
		</section>
	</header>


		<section class="hero" style="margin-top:-100px">

			<div class="container" >

				<div class="row col-md-12 hero-content">
					<div class="col-md-8">
						<h1 class="animated fadeInDown line1 commonFonts" style="margin-left:-8%">
							Samug is a Platform for Exhibiting
						</h1>
						<h1 class="animated fadeInDown commonFonts" style="margin-top:-35px;margin-left:8%;margin-bottom:35px;">
							<div class="verticalFlip " style="font-size:55px;">
								<span>Creativity</span>
								<span style="margin-left:30px">Talent</span>
								<span style="margin-left:30px">Skills</span>
								<span style="margin-left:30px">Ideas</span>
								<span>Thoughts</span>
								<span>Concepts</span>
							</div>
						</h1>
						<h1 class="animated fadeInDown line2 commonFonts" style="margin-left:6%;">
							to Your Society and</h1>
						<h1 class="animated fadeInDown line3 commonFonts blink" style="margin-left:13%;align-items:center" >
							 Monetize it</h1>
					</div>
					<div class="col-md-4">
						<section class="download1" id="download">
							<div class="container">
								<div class="row col-md-4">
									<div class=" text-center " >
										<h1 class="commonFonts" >Download Samug App</h1>
										<a href="#">
											<img alt="Download Samug iOS app" style="margin-top: 10px;" src="public/assets/images/appstore.svg">
										</a>
										<a href="https://play.google.com/store/apps/details?id=com.syneins.samug" target="_blank">
											<img alt="Download Samug Android app" style="margin-top: 10px;" src="public/assets/images/playstore.svg" style="margin-right: 30px;">
										</a>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</section>

	<footer style="margin-top:60px">
		<div class="container" >
			<div class="row " style="text-align:center;">
				<div class="col-md-12" >
				<ul class="footer-nav">
						<li><a target="_blank" href="<?=site_url();?>help">Help</a></li>
						<li><a  target="_blank" href="<?php echo site_url('Home/Jobs') ?>" >Jobs</a></li>
						<li><a href="#" id="myBtn" >Contact</a></li>
						<li><a target="_blank" href="<?=site_url();?>terms">Terms</a></li>
						<li><a target="_blank" href="<?=site_url();?>privacy">Privacy</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<center>
	<div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
 
  <span class="close" type="button" id="cancel_button" style="position: relative; z-index: 100" >&times;</span>
	<div class="row" style="text-align:center;margin-bottom:10px;">
		<div class="col-md-12" >
				<div class="row col-md-6">
					<h3 id="info_text">Communication</h3>
<a href="mailto:info@syneins.com" style="color:#405EE5;">info@syneins.com</a>
				</div>
				<div class="row col-md-6">
<h3 id="info_text">Support</h3>
<a href="mailto:support@syneins.com" style="color:#405EE5;"><p>support@ syneins.com</p></a>
				</div>
		</div>
	</div>
</div>

</div>
</center>
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
	<script src="js/min/toucheffects-min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/flickity.pkgd.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/retina.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/min/scripts-min.js"></script>
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



	var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
	</script>
</body>

</html>
