
<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main>
 * and the left sidebar conditional
 *
 * @since 1.0.0
 */
?><!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="<?php echo BAVOTASAN_THEME_URL; ?>/library/js/bootstrap.min.js"></script>
<!--[if IE]><script src="<?php echo BAVOTASAN_THEME_URL; ?>/library/js/html5.js"></script><![endif]-->
<?php wp_head(); ?>
</head>
<?php
$bavotasan_theme_options = bavotasan_theme_options();
$space_class = '';
?>
<body <?php body_class(); ?>		
            <div class="row">
    <div class="row fijo">
        <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/descubre/descubre-fondo.jpg"> 
    </div>
</div>
<div class="row">
    <div class="col-xs-6">
        <span class="titulo titulo-descubre">Descubre</span>
    </div> 
    <div class="col-xs-6">
        <div class="social">
            <a class="socialLinks fb" href="#" target="_blank"> <img src="<?php bloginfo('template_url'); ?>/library/images/sFb.png"> </a>
            <a class="socialLinks tw" href="#" target="_blank"> <img src="<?php bloginfo('template_url'); ?>/library/images/sTw.png"> </a>
            <a class="socialLinks pt" href="#" target="_blank"> <img src="<?php bloginfo('template_url'); ?>/library/images/sPt.png"> </a>
            <a class="socialLinks yt" href="#" target="_blank"> <img src="<?php bloginfo('template_url'); ?>/library/images/sYt.png"> </a>
            <a class="socialLinks gp" href="#" target="_blank"> <img src="<?php bloginfo('template_url'); ?>/library/images/sG+.png"> </a>
            <a class="socialLinks ig" href="#" target="_blank"> <img src="<?php bloginfo('template_url'); ?>/library/images/sIg.png"> </a>
            <div class="clear"></div>
        </div>
    </div> 
</div>

