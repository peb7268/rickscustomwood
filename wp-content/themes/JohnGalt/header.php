<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="ie6"> <![endif]-->
<!--[if IE 7]>         <html class="ie7"> <![endif]-->
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html>         <!--<![endif]-->

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="X-UA-Compatible" content="IE=7">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<!-- Normal & BluePrint CSS -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<!--[if IE]><link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/ie.css" type="text/css" media="screen, projection"><![endif]-->
<!--[if lt IE 7]><link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/lt-ie7.css" type="text/css" media="screen" /><script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/iepngfix_tilebg.js"></script><![endif]-->
<!--[if lt IE 7]>
<style>
	.wrap, span.comments, span.time, .entrytitle span.comments, .entrytitle span.time, .span-24.first, .footer {
	behavior: url(<?php bloginfo('stylesheet_directory'); ?>/htc/iepngfix.htc);
}
</style>
<![endif]-->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="container">
	<div class="column span-24 first last header">
		<div class="column span-20 title">
			<h1 id="logo"><a href="<?php bloginfo('stylesheet_directory') ?>" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo('stylesheet_directory') ?>/images/logo.png" alt="Ricks Custom Wood" /></a></h1>
		</div>
	<div class="column span-24 last">
		<div id="nav">
		<ul>
			<?php wp_nav_menu( array('menu' => 'Main Navigation' )); ?>			
		</ul>
		
		</div><!--/nav-->
	</div>
	</div><!--/header -->
	<div class="clear">&nbsp;</div>

