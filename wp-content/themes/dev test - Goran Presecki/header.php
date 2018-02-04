<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title><?php the_title(); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700" rel="stylesheet">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--test image-->
<div class="overlay-test" data-toggle-target="overlay" style="position: absolute; top:0; left: 50%;transform: translatex(-50%);bottom:0;opacity:.2;pointer-events:none;width:100%;text-align:center;z-index:10;"><img src="<?php bloginfo('template_directory'); ?>/images/test.png"></div>
<!--/test image-->
