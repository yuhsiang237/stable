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
<!--Bootstrap樣式-->
<link href="<?php
bloginfo('template_directory') ?>/bootstrap-3.3.7-dist/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />

<!--自訂樣式-->
<link href="<?php
bloginfo('template_directory') ?>/style.css" media="screen" rel="stylesheet" type="text/css" />
<style>
	body{
		background-image: url("<?php
		bloginfo('template_directory') ?>/cache/furley-bg.png");
	}
	.page_item{
	background: #ffffff;
	display: inline;
	list-style-type: none;
	font-size: 1em !important;
	padding: 0.3em !important;
	padding-left: 0.5em !important;
	padding-right: 0.5em !important;
	border: 0.08em solid #ffffff;
	margin:3px;
	}
</style>
</head>

<body>
<div class="container">
<!--首頁頂端橫幅-->
<header class="header">
	<div>
		<h1 class="title"><a href="<?php bloginfo('url'); ?>">
			<?php bloginfo('name');?>
		</a>
		</h1>
		<div class="description"><?php bloginfo('description');?></div>
		<label id="menu" for="toggle">Menu</label>
		<input type="checkbox" id="toggle" checked> 
		<nav class="togglebox">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'primary',
			'menu_class'     => 'st_menu',
		 ) );
		?>
		</nav>
	</div>
</header>
