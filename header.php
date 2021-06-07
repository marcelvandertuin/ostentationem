<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Ostentationem: Experience the classic chronicles that became lore.">
		<meta name="keywords" content="ostentationem, exposition, exhibition">
		<meta name="author" content="marcelvandertuin, 1888">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="theme-color" content="#ffffff">
		<?php wp_head(); ?>
		<link rel="canonical" href="https://ostentationem.marcelvandertuin.com">
		<link rel="shortcut icon" href="assets/icons/o.ico">
		<link rel="icon" sizes="16x16 32x32 64x64" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/o.ico' ?>">
		<link rel="icon" type="image/png" sizes="196x196" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/o-192.png' ?>">
		<link rel="icon" type="image/png" sizes="160x160" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/o-160.png' ?>">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/o-96.png' ?>">
		<link rel="icon" type="image/png" sizes="64x64" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/o-64.png' ?>">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/o-32.png' ?>">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/o-16.png' ?>">
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/o-57.png' ?>">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/o-114.png' ?>">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/o-72.png' ?>">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/o-144.png' ?>">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/o-60.png' ?>">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/o-120.png' ?>">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/o-76.png' ?>">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/o-152.png' ?>">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/o-180.png' ?>">
		<meta name="msapplication-TileColor" content="#FFFFFF">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri() . '/assets/icons/favicon/o-144.png' ?>">
		<meta name="msapplication-config" content="<?php echo get_template_directory_uri() . '/assets/icons/favicon/browserconfig.xml' ?>">
		<title>
			<?php
				if (is_front_page()) {
					echo ucfirst(get_bloginfo('name'));
				} else if (is_home()) {
					echo ucfirst(get_bloginfo('name')) . ' &#8594; Exposition';
				} else {
					echo ucfirst(get_bloginfo('name')) .' &#8594 ';
					echo wp_title('');
				}
			?>
		</title>
		<script>
			/*
			 * https://browser-update.org/#install
			 */

			var $buoop = {required:{e:-4,f:-3,o:-3,s:-1,c:-3},insecure:true,api:2021.03 };
			function $buo_f(){
			 var e = document.createElement("script");
			 e.src = "//browser-update.org/update.min.js";
			 document.body.appendChild(e);
			};
			try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
			catch(e){window.attachEvent("onload", $buo_f)}
		</script>
		<!--[if lt IE 9]>
			<script>
				document.createElement("article");
				document.createElement("aside");
				document.createElement("footer");
				document.createElement("header");
				document.createElement("nav");
				document.createElement("section");
				document.createElement("time");
			</script>
		<![endif]-->
	</head>
	<body>
		<h1 class="hidden">Website Ostentationem</h1>
