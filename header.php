<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hike_Trampos
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Import Camphor font -->
	<style type="text/css">
		@font-face {
			font-family: CamphorPro;
			src: url(<?php echo get_template_directory_uri() . '/fonts/camphor/CamphorPro-Regular.otf'; ?>);
		}

		@font-face {
			font-family: CamphorStdBold;
			src: url(<?php echo get_template_directory_uri() . '/fonts/camphor/CamphorStd-Bold.otf'; ?>);
		}
	</style>



	<!-- Linking material icons font -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

	<!-- Compiled and minified CSS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
