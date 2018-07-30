<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=medium-dpi" />
	<meta name="google-site-verification" content="" />
	<?php
	
	if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) {
	
		echo('<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">');
		
	} 
	
	?>

	<title><?php wp_title(''); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php the_field('favicon', 'options'); ?>">
	<script>
	  (function(d) {
	    var config = {
	      kitId: 'qta2ula',
	      scriptTimeout: 3000,
	      async: true
	    },
	    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
	  })(document);
	</script>
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	
	ga('create', 'UA-85437633-2', 'auto');
	ga('send', 'pageview');
	
	</script>
	<?php wp_head(); ?>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body <?php body_class(); ?>>
	<?php get_template_part('template-parts/content','alert'); ?>
	
	<div id="header-top-global">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-4 col-sm-10 col-xs-10 menu-top-block-container <?php echo $hidden; ?>"><?php echo $block; ?></div>
				<div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 text-right">
					<div class="menu-top-links-search-container">
						<a href="#" id="search-toggle"><i class="fa fa-search fa-lg"></i></a>
						<?php languages_toggle(); ?>
					</div>
					<div class="hidden-sm hidden-xs">
						<?php wp_nav_menu( array('theme_location' => 'header-toplinks', 'items_wrap' => '<ul class="list list-unstyled list-inline hidden-xs" aria-label="Top Links">%3$s</ul>' )); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="search" class="hidden-xs">
		<div id="search-bar">
			<div class="search-bar-inner">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<p>Enter Search Below</p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<form role="search" id="sites-search" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
								 <label class="sr-only" for="search-text">Search...</label>
								 <input type="text" class="search-field" id="search-text" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s">
								 <button type="submit" id="ss-icon"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper">
		<div class="wrapper-inner">
			<div id="header-global">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-xs-10">
							<div id="logo" class="clearfix">
								<a href="<?php echo get_home_url(); ?>"><img style="height: 75px;" class="img-responsive" src="<?php the_field('logo', 'option'); ?>" alt="<?php bloginfo('name'); ?>" /></a>
							</div>
						</div>
						<div class="col-lg-8 col-xs-2">
							<div class="visible-lg">
								<?php wp_nav_menu( array('theme_location' => 'header-menu', 'items_wrap' => '<ul class="nav navbar-nav pull-right" aria-label="primary navigation">%3$s</ul>' )); ?>						
							</div>
							<div class="hidden-lg pull-right">
								<?php shiftnav_toggle( 'shiftnav-main' , '' , array( 'icon' => 'bars' , 'class' => 'shiftnav-toggle-button') ); ?>
							</div>
						</div>
						
					</div>
				</div>
			</div>