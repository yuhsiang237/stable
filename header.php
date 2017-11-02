<!DOCTYPE html>
<!--語系-->
<html <?php language_attributes(); ?>>
<head>
<!--meta-->
<meta charset="<?php bloginfo('charset');?>" /> <title>
<?php
if (is_home()) {
    bloginfo('name');
    echo ' - ';
    bloginfo('description');
} else {
    wp_title(' - ', true, 'right');
    bloginfo('name');
} 
?>
</title>
<?php wp_head(); ?>
<!--響應式-->
<meta name="viewport"
content="width=device-width, initial-scale=1" /> <link rel="pingback" href="<?php
bloginfo( 'pingback_url' ); ?>" />

<link href="<?php
bloginfo('template_directory') ?>/style.css" media="screen" rel="stylesheet" type="text/css" />

<link href="<?php
bloginfo('template_directory') ?>/bootstrap-3.3.7-dist/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container" class="col-md-12" >
<header class="header">
	<div style="text-align: center;">
		<h1 class="title"><a href="<?php bloginfo('url'); ?>">樂在設計</a></h1>
		<div><?php
		wp_nav_menu( array( 'theme_location' =>
		'primary-menu' ) ); ?>
	</div>
	</div>
</header>