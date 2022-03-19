<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
				<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title><?php if(!is_front_page()){ wp_title('');?> | <?php } bloginfo('name'); ?></title>

        <script src="https://kit.fontawesome.com/b70f82b656.js" crossorigin="anonymous"></script>

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>?version=328" type="text/css" media="screen" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    	<script src="https://kit.fontawesome.com/91f1ae4bf8.js" crossorigin="anonymous"></script>
		<script type="text/javascript">
			//set a javascript variable to the root url and template url
			var rootURL = "<?php echo esc_url( home_url( '/' ) ); ?>";
			var templateURL = "<?php bloginfo('template_directory'); ?>";
		</script>

		<!-- Google Tag Manager -->

		<!-- End Google Tag Manager -->

        <?php wp_head(); ?>
    </head>
	
	<body <?php body_class(); ?>>

		<!-- Google Tag Manager (noscript) -->

		<!-- End Google Tag Manager (noscript) -->
	
		<!-- HEADER -->
		<header>
			
		</header>
		
		<!-- MAIN -->
		<div id="main" role="main">


			