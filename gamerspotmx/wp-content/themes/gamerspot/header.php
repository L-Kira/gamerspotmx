<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Gamerspot
 * @since Gamerspot 1.0
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
	<meta name="author" content="">
	<!--// Mobile Metas //-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--// Stylesheets //-->
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<!--// Stylesheets //-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/base.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/skeleton.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/layout.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/player.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/color.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fancybox.css" />
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--// Favicons //-->
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
	<link rel="rockit-touch-icon" href="<?php bloginfo('template_url'); ?>/images/rockit-touch-icon.png" />
	<link rel="rockit-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/images/rockit-touch-icon-72x72.png" />
	<link rel="rockit-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/images/rockit-touch-icon-114x114.png" />
	<!--// Javascript //-->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.infinite-carousel.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/animatedcollapse.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/ddsmoothmenu.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.nivo.slider.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scrolltopcontrol.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/tabs.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.countdown.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.jplayer.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jplayer.playlist.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/player.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox-1.3.1.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/lightbox.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.mCustomScrollbar.js"></script>
</head>
<body>
	<div id="outer-wrapper">
		<div class="inner">
	    	<!-- Header Start -->
	    	<div id="header">
	    		
	        	<span class="topbar">&nbsp;</span>
	        	<!-- Container Start -->
	            <div class="container">
	            	<!-- Logo Start -->
	            	<div class="five columns left">
	                	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img style="width: 200px;" src="<?php bloginfo('template_url'); ?>/images/GamerSpot Logo.png" alt="" /></a>
	                </div>
	                <!-- Logo End -->
	                <div class="eleven columns right">
	                    <!-- Navigation Start -->
	                    <div class="navigation">
	                    	<!--  <a href="albums.html" class="onlinestore">Online Store</a> -->
	                        <div id="smoothmenu1" class="ddsmoothmenu">
	                            <ul>
	                            	<?php $categories = get_categories(array('orderby' => 'name', 'parent' => 0)); #print_r($categories);?>
	                            	<?php foreach($categories as $category):?>
	                            	
	                            	<li>
	                            		<a href="<?= get_bloginfo('url').'?cat='.$category->term_id ?>"><?= $category->name; ?></a>
	                            		<?php $childs = get_categories(array('orderby' => 'name', 'parent' => $category->term_id)); ?>
	                            		<?php if(!empty($childs)): ?>
	                            		<ul>
		                            		<?php foreach ($childs as $child): ?>
		                            			 <li><a href="<?= get_bloginfo('url').'?cat='.$child->term_id; ?>"><?= $child->name; ?></a></li>
		                            		<?php endforeach; ?>
		                            	</ul>
	                            		<?php endif; ?>
	                            	</li>
	                            	<?php endforeach; ?>
	                                <!--  <li class="current-menu-item"><a href="index.html">Home</a></li>
	                                <li><a href="about-us.html">Reviews</a></li>
	                                <li><a href="news.html">Previews</a></li>
	                                <li><a href="#">Secciones</a>
	                                    <ul>
	                                        <li><a href="albums.html">Xbox</a></li>
	                                        <li><a href="album-detail.html">Playstation</a></li>
	                                        <li><a href="album-detail.html">Nintendo</a></li>
	                                        <li><a href="album-detail.html">PC</a></li>
	                                        <li><a href="album-detail.html">Mobile</a></li>
	                                    </ul>
	                                </li>
	                                <li><a href="#">TV</a>
	                                    <ul>
	                                        <li><a href="timeline.html">Twitch</a></li>
	                                        <li><a href="calendar.html">Youtube</a></li>
	                                        <li><a href="map.html">Stream</a></li>
	                                    </ul>
	                                </li>
	                                <li><a href="#">Podcast</a>
	                                	<ul>
	                                    	<li><a href="blog.html">Blog</a></li>
	                                        <li><a href="blog-detail.html">Three Column</a></li>
	                                    </ul>
	                                </li>
	                                <li><a href="#">Eventos</a>
	                                    <ul>
	                                        <li><a href="gallery-two-col.html">Two Column</a></li>
	                                        <li><a href="gallery-three-col.html">Three Column</a></li>
	                                        <li><a href="gallery-four-col.html">Four Column</a></li>
	                                    </ul>
	                                </li>
	                                <li><a href="contact-us.html">Contacto</a></li>-->
	                            </ul>
	                            <div class="clear"></div>
	                        </div>
	                    </div>
	                    <!-- Navigation End -->
	                    <div class="clear"></div>
	                </div>
	            </div>
	            <!-- Container End -->
	        </div>
	        <!-- Header End -->
	        