<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?></title>
		<!-- Favicons -->
		<link href="<?php echo get_template_directory_uri(); ?>/assets/favicons/favicon-32x32.png" rel="shortcut icon">
    	<link href="<?php echo get_template_directory_uri(); ?>/assets/favicons/favicon-32x32.png" rel="apple-touch-icon-precomposed">
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/assets/favicons/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/favicons/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<!-- Mobile Zoom -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head(); ?>
    <?php 
      $logo = get_field('logo', 'option');
      $google_manager = get_field('google_manager', 'option');
    ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <?php if ($google_manager): ?>
      <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $google_manager; ?>"></script>
      <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', '<?php echo $google_manager; ?>');
      </script>
    <?php endif; ?>
    
	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">
			<header class="header">
				<div class="container">
          <div class="header__inner">
            <div class="header__logo">
              <a href="/">
                <img src="<?php echo $logo ? $logo: get_template_directory_uri(); ?>/assets/images/Little-Beginnings-Childcare-Update-Logo-2018.png" alt="logo" class="logo">
                <img src="<?php echo $logo ? $logo: get_template_directory_uri(); ?>/assets/images/LIT_Header_Image.jpg" alt="logo" class="image-desktop">
              </a>

              <div class="header__logo-right js-show-mobile">
                <span class="menu-bars">
                  <span class="menu-bars__row"></span>
                  <span class="menu-bars__row"></span>
                  <span class="menu-bars__row"></span>
                </span>
              </div>
            </div>
            <div class="header__menu">
              <div class='container'>
                <?php beginnings_navigation('primary-menu','Main Menu','has-icon'); ?>
              </div>
            </div>
            <div class="header__menu-mobile">
              <div class="header__menu-mobile__wrap">
                <div class="back-to-top js-back-top"><i class="icon-arrow-up2"><span>Back to Top</span></i></div>
                <div class="header__logo-right-mobile js-close-mobile">
                  <span class="menu-bars-mobile">
                    <span class="menu-bars__row-mobile"></span>
                    <span class="menu-bars__row-mobile"></span>
                    <span class="menu-bars__row-mobile"></span>
                  </span>
                </div>
              </div>
              <?php beginnings_navigation('primary-menu','Menu Mobile','has-icon'); ?>
            </div>
					</div>
				</div>
			</div>
