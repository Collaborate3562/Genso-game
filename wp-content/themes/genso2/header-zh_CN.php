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
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-G8HQE16KN9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-G8HQE16KN9');
</script>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<link rel="icon" href="<?php echo get_template_directory_uri()?>/assets/images/favicon.ico" id="favicon">
	<link href="<?php echo get_template_directory_uri()?>/assets/css/jquery.mb.YTPlayer.min.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo get_template_directory_uri()?>/assets/css/style.css?211230" type="text/css" rel="stylesheet" />
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
				<h1><a href="<?php echo home_url()?>"><img src="<?php echo get_template_directory_uri()?>/assets/images/logo.png" alt="" /></a></h1>
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
				<div class="row">
					<ul class="menu clearfix">
						<li class="menu__single">
							<a href="javascript:void(0);" class="arrow" style="pointer-events:none;">公司概況</a>
							<ul class="menu__second-level">
								<li><a href="https://genso.game/wp-content/uploads/pdf/WhitePaper_genso_ZH.pdf">白皮書</a></li>
								<li><a href="<?php echo home_url()?>/faq">常見問題解答</a></li>
							</ul>
						</li>
						<li class="menu__single">
							<a href="<?php echo home_url()?>" class="arrow">服務</a>
							<ul class="menu__second-level">
								<li><a href="<?php if(!is_home() && !is_front_page()) { echo home_url(); } ?>#mt-play">在元宇宙</a></li>
								<li><a href="<?php if(!is_home() && !is_front_page()) { echo home_url(); } ?>#mt-nft">NFT</a></li>
								<li><a href="<?php if(!is_home() && !is_front_page()) { echo home_url(); } ?>#mt-ugc">用戶創作內容來賺錢</a></li>
								<li><a href="<?php if(!is_home() && !is_front_page()) { echo home_url(); } ?>#mt-system">遊戲系統</a></li>
								<li><a href="<?php if(!is_home() && !is_front_page()) { echo home_url(); } ?>#mt-token">代幣</a></li>
								<li><a href="<?php if(!is_home() && !is_front_page()) { echo home_url(); } ?>#mt-roadmap">未來路線圖</a></li>
							</ul>
						</li>
						<li><a href="<?php echo home_url()?>/news">新聞</a></li>
						<li><a href="<?php if(!is_home() && !is_front_page()) { echo home_url(); } ?>#mt-community">社區</a></li>
						<li><a href="<?php echo home_url()?>/contact">聯繫我們</a></li>
					</ul>
					<div class="btn_group pc">
							<a class="lang">
								<img src="<?php echo get_template_directory_uri()?>/assets/images/lang.png" alt="">
								<?php echo pll_current_language('name')?>
							</a>
							<ul>
								<?php pll_the_languages(array('show_flags'=>0,'show_names'=>1)); ?>
							</ul>
						</li>
					</div>
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
						<a href="javascript:void(0);" class="arrow" style="pointer-events:none;">公司概況</a>
						<ul>
							<li><a href="https://genso.game/wp-content/uploads/pdf/WhitePaper_genso_ZH.pdf">白皮書</a></li>
							<li><a href="<?php echo home_url()?>/faq">常見問題解答</a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo home_url()?>" class="arrow">サービス</a>
						<ul>
							<li><a href="<?php if(!is_home() && !is_front_page()) { echo home_url(); } ?>#mt-play">在元宇宙</a></li>
							<li><a href="<?php if(!is_home() && !is_front_page()) { echo home_url(); } ?>#mt-nft">NFT</a></li>
							<li><a href="<?php if(!is_home() && !is_front_page()) { echo home_url(); } ?>#mt-ugc">用戶創作內容來賺錢</a></li>
							<li><a href="<?php if(!is_home() && !is_front_page()) { echo home_url(); } ?>#mt-system">遊戲系統</a></li>
							<li><a href="<?php if(!is_home() && !is_front_page()) { echo home_url(); } ?>#mt-token">代幣</a></li>
							<li><a href="<?php if(!is_home() && !is_front_page()) { echo home_url(); } ?>#mt-roadmap">未來路線圖</a></li>
						</ul>
					</li>
					<li><a href="<?php echo home_url()?>/news">新聞</a></li>
					<li><a href="<?php if(!is_home() && !is_front_page()) { echo home_url(); } ?>#mt-community">社區</a></li>
					<li><a href="<?php echo home_url()?>/contact">聯繫我們</a></li>
				</ul>
			</div>
		</header>