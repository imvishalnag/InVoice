<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<title><?php echo e(__('Invoice')); ?></title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<?php echo $__env->yieldContent('meta'); ?>
	<!--Favicon-->
	<link rel="shortcut icon" href="<?php echo e(asset('web/images/favicon.ico')); ?>" type="image/x-icon">
	<link rel="icon" href="<?php echo e(asset('web/images/favicon.ico')); ?>" type="image/x-icon">
	
	<!-- CSS ================================================== -->	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo e(asset('web/css/bootstrap.min.css')); ?>">
	<!-- Template styles-->
	<link rel="stylesheet" href="<?php echo e(asset('web/css/style.css')); ?>">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="<?php echo e(asset('web/css/responsive.css')); ?>">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="<?php echo e(asset('web/css/font-awesome.min.css')); ?>">
	<!-- Animation -->
	<link rel="stylesheet" href="<?php echo e(asset('web/css/animate.css')); ?>">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php echo e(asset('web/css/owl.carousel.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('web/css/owl.theme.default.min.css')); ?>">
	<!-- Colorbox -->
	<link rel="stylesheet" href="<?php echo e(asset('web/css/colorbox.css')); ?>">

</head>
	
<body>

	<div class="body-inner">

	   	<div id="top-bar" class="top-bar">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-8">
		               	<div class="ts-date">
		                  	<i class="fa fa-calendar-check-o"></i><?php echo e(date('M d, Y', strtotime(Carbon\Carbon::today()))); ?>

		               	</div>
		               <ul class="unstyled top-nav">
		                  	<li><b>Showing in :</b></li>
		                  	<li><a href="<?php echo e(route('web.index')); ?>">English</a></li>
		                  	<li><a href="<?php echo e(route('assamese.index')); ?>" class="showing">অসমীয়া</a></li>
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
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-3 col-sm-3 col-xs-3">
						<div class="logo">
							<a href="<?php echo e(route('assamese.index')); ?>">
								<img src="<?php echo e(asset('web/images/logos/logo.jpg')); ?>" alt="">
							 </a>
						</div>
					</div><!-- logo col end -->

					<div class="col-lg-9 col-sm-9 col-xs-9 header-right">
						<div class="ad-banner float-right">
							<a href="#"><img src="<?php echo e(asset('web/images/banner-ads/ad-top-header.png')); ?>" class="img-fluid" alt=""></a>
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
									<?php if(isset($header_data['assam']->as_category_name) && !empty($header_data['assam']->as_category_name)): ?>
									<li>
										<a href="<?php echo e(route('ass.news', ['id'=> $header_data['assam']->id, 'slug' => $header_data['assam']->as_slug])); ?>"><?php echo e($header_data['assam']->as_category_name); ?></a>
									</li>
									<?php endif; ?>
									<?php if(isset($header_data['northeast']->as_category_name) && !empty($header_data['northeast']->as_category_name)): ?>
										<li>
											<a href="<?php echo e(route('ass.news', ['id'=> $header_data['northeast']->id, 'slug' => $header_data['northeast']->as_slug])); ?>"><?php echo e($header_data['northeast']->as_category_name); ?></a>
										</li>
									<?php endif; ?>
									<?php if(isset($header_data['national']->as_category_name) && !empty($header_data['national']->as_category_name)): ?>
										<li>
											<a href="<?php echo e(route('ass.news', ['id'=> $header_data['national']->id, 'slug' => $header_data['national']->as_slug])); ?>"><?php echo e($header_data['national']->as_category_name); ?></a>
										</li>
									<?php endif; ?>
									<?php if(isset($header_data['international']->as_category_name) && !empty($header_data['international']->as_category_name)): ?>
										<li>
											<a href="<?php echo e(route('ass.news', ['id'=> $header_data['international']->id, 'slug' => $header_data['international']->as_slug])); ?>"><?php echo e($header_data['international']->as_category_name); ?></a>
										</li>
									<?php endif; ?>
									<?php if(isset($header_data['politics']->as_category_name) && !empty($header_data['politics']->as_category_name)): ?>
										<li>
											<a href="<?php echo e(route('ass.news', ['id'=> $header_data['politics']->id, 'slug' => $header_data['politics']->as_slug])); ?>"><?php echo e($header_data['politics']->as_category_name); ?></a>
										</li>
									<?php endif; ?>
									<?php if(isset($header_data['economy']->as_category_name) && !empty($header_data['economy']->as_category_name)): ?>
										<li>
											<a href="<?php echo e(route('ass.news', ['id'=> $header_data['economy']->id, 'slug' => $header_data['economy']->as_slug])); ?>"><?php echo e($header_data['economy']->as_category_name); ?></a>
										</li>
									<?php endif; ?>
									<?php if(isset($header_data['crime']->as_category_name) && !empty($header_data['crime']->as_category_name)): ?>
										<li>
											<a href="<?php echo e(route('ass.news', ['id'=> $header_data['crime']->id, 'slug' => $header_data['crime']->en_slug])); ?>"><?php echo e($header_data['crime']->as_category_name); ?></a>
										</li>
									<?php endif; ?>
									<li class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown">আগল <i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu" role="menu">
											<?php if(isset($header_data['category']) && !empty($header_data['category'])): ?>
												<?php $__currentLoopData = $header_data['category']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<li>
														<a href="<?php echo e(route('ass.news', ['id'=> $category->id, 'slug' => $category->as_slug])); ?>"><?php echo e($category->as_category_name); ?></a>
													</li>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											<?php endif; ?>
										</ul><!-- End dropdown -->
									</li><!-- Features menu end -->
									
									<li>
										<a target="_blank" href="https://www.youtube.com/">ভিডিও</a>
									</li><!-- Video menu end -->

									<li>
										<a href="<?php echo e(route('web.livetv.livetv')); ?>">Live Tv</a>
									</li><!-- Video menu end -->
								</ul><!--/ Nav ul end -->
							</div><!--/ Collapse end -->

						</div><!-- Site Navbar inner end -->
					</nav><!--/ Navigation end -->
					
					<?php echo e(Form::open(['method' => 'post','route'=>'ass.search'])); ?>

					<div class="nav-search">
						<span id="search"><i class="fa fa-search"></i></span>
					</div><!-- Search end -->
					<div class="search-block" style="display: none;">
						<input type="text" class="form-control" name="query" placeholder="Type what you want and enter">
						<span class="search-close">&times;</span>
					</div>
					<?php echo e(Form::close()); ?>

				</div><!--/ Row end -->
			</div><!--/ Container end -->
		</div><!-- Menu wrapper end --><?php /**PATH C:\xampp\htdocs\invoice\resources\views/as/include/header.blade.php ENDPATH**/ ?>