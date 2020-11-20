<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>News247 - News Magazine Newspaper HTML Template</title>
	<!-- Mobile Specific Metas ================================================== -->

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!--Favicon-->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	
	<!-- CSS ================================================== -->	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Colorbox -->
	<link rel="stylesheet" href="css/colorbox.css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
	
<body>

	<div class="body-inner">

	   <div id="top-bar" class="top-bar">
	      <div class="container">
	         <div class="row">
	            <div class="col-md-8">
	               <div class="ts-date">
	                  <i class="fa fa-calendar-check-o"></i>{{ date('M d, Y', strtotime(Carbon\Carbon::today()))}}
	               </div>
	               <ul class="unstyled top-nav">
	                  <li><b>Showing in :</b></li>
	                  <li><a href="#" class="showing">English</a></li>
	                  <li><a href="#">Assamese</a></li>
	               </ul>
	            </div><!--/ Top bar left end -->

	            <div class="col-md-4 top-social text-lg-right text-md-center">
	                <ul class="social-icon">
						<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
					</ul>
	            </div><!--/ Top social col end -->
	         </div><!--/ Content row end -->
	      </div><!--/ Container end -->
	   </div><!--/ Topbar end -->

		<!-- Header start -->
		<header id="header" class="header">
			<div class="container">
				<div class="row">
					<div class="col-lg-1 col-sm-2 col-xs-2">
						<div class="logo">
							 <a href="index.php">
								<img src="images/logos/logo.png" alt="">
							 </a>
						</div>
					</div><!-- logo col end -->

					<div class="col-lg-11 col-sm-10 col-xs-10 header-right">
						<div class="ad-banner float-right">
							<a href="#"><img src="images/banner-ads/ad-top-header.png" class="img-fluid" alt=""></a>
						</div>
					</div><!-- header right end -->
				</div><!-- Row end -->
			</div><!-- Logo and banner area end -->
		</header><!--/ Header end -->

		<div class="main-nav clearfix">
			<div class="container">
				<div class="row">
					<nav class="navbar navbar-expand-lg col">
						<div class="site-nav-inner float-left">
			               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="outline: none;">
			                  <span class="navbar-toggler-icon"><i class="fa fa-ellipsis-v"></i></span>
			               </button>
			               <!-- End of Navbar toggler -->

							<div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse">
								<ul class="nav navbar-nav">
									<li>
										<a href="index.php">Home </a>
									</li>

									<li>
										<a href="about.php">About</a>
									</li>

									<li class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown">News <i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu" role="menu">
											<li>
												<a href="news.php">India</a>
											</li>
											<li>
												<a href="news.php">World</a>
											</li>
										</ul><!-- End dropdown -->
									</li><!-- Features menu end -->

									<li>
										<a href="news.php">Guwahati</a>
									</li>

									<li>
										<a href="news.php">Assam</a>
									</li>

									<li>
										<a href="news.php">Northeast</a>
									</li>

									<li>
										<a href="news.php">Entertainment</a>
									</li>

									<li>
										<a href="news.php">Sports</a>
									</li>

									<li>
										<a target="_blank" href="https://www.youtube.com/">Video</a>
									</li><!-- Video menu end -->

									<li>
										<a href="livetv.php">Live Tv</a>
									</li><!-- Video menu end -->
								</ul><!--/ Nav ul end -->
							</div><!--/ Collapse end -->

						</div><!-- Site Navbar inner end -->
					</nav><!--/ Navigation end -->

					<div class="nav-search">
						<span id="search"><i class="fa fa-search"></i></span>
					</div><!-- Search end -->
					
					<div class="search-block" style="display: none;">
						<input type="text" class="form-control" placeholder="Type what you want and enter">
						<span class="search-close">&times;</span>
					</div><!-- Site search end -->

				</div><!--/ Row end -->
			</div><!--/ Container end -->

		</div><!-- Menu wrapper end -->