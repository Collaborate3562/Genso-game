<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/assets/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/assets/slick/slick-theme.css"/>
	<link href="<?php echo get_template_directory_uri()?>/assets/css/photoswipe.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo get_template_directory_uri()?>/assets/css/default-skin.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo get_template_directory_uri()?>/assets/css/style.css?ver=0.0.7" type="text/css" rel="stylesheet" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Open+Sans:wght@400&family=Sorts+Mill+Goudy&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

	<div id="wrapper">
		<div id="sidenav">
			<a href="<?php echo home_url()?>/contact">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/shiryouseikyu.png" alt="">
			</a>
		</div>
		<header id="header">
			<div class="header_top">
				<h1><a href="<?php echo home_url( )?>"><img src="<?php echo get_template_directory_uri()?>/assets/images/logo.png" alt="" /></a></h1>
				<!-- <?php if ($args['page'] != 'top'): ?> -->
				<!-- <?php endif ?> -->
				<div class="btn_group sp">
					<div class="block1">
						<a class="lang">
							<img src="<?php echo get_template_directory_uri()?>/assets/images/lang.png" alt="">
							<?php echo pll_current_language('name')?>
						</a>
						<ul>
							<?php pll_the_languages(array('show_flags'=>0,'show_names'=>1)); ?>
						</ul>
					</div>
				</div>
				<div class="btn_group pc">
					<a href="<?php echo home_url( )?>/about">ABOUT</a>
					<a href="<?php echo home_url( )?>/service">サービス</a>
					<a class="lang">
						<img src="<?php echo get_template_directory_uri()?>/assets/images/lang.png" alt="">
						<?php echo pll_current_language('name')?>
						<span><i class="fas fa-angle-up"></i></span>
					</a>
					<ul>
						<?php pll_the_languages(array('show_flags'=>0,'show_names'=>1)); ?>
					</ul>
				</div>
				<div class="btns sp">
					<div class="collapse">
						<a class="menu-trigger">
							<span></span><span></span><span></span>
						</a>
					</div>
				</div>
			</div>
			<div class="g_nav">
				<ul class="clearfix">
					<li>
						<a href="<?php echo home_url( )?>">
							<img src="<?php echo get_template_directory_uri()?>/assets/images/logo.png" alt="">
						</a>
					</li>
					
					<li><a href="<?php echo home_url( )?>/about">ABOUT</a></li>
					<li><a href="<?php echo home_url( )?>/service">サービス</a></li>
				</ul>
			</div>
		</header>