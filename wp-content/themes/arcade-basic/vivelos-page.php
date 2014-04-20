
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
<body <?php body_class(); ?>>

	<div id="page">

		<header id="header">
			<nav id="site-navigation" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>
				</div>

				<div class="collapse navbar-collapse">
				
				</div>
			</nav><!-- #site-navigation -->

			 <div class="title-card-wrapper">
               
			</div>

		</header>
<div class="row thumbnail-list descubre-padding">
                    <div class="col-xs-12 padding-lateral">
                        <div class="col-xs-12">
                            <div class="col-xs-3 sin-padding">
                                <a href="#" class="image-w">
                                    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/vivelos/vivelos-img1.jpg">
                                    <div class="cover vivelos-cover">
                                        <p class="text-over">Texto</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-3 sin-padding">
                                <a href="#" class="image-w">
                                    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/vivelos/vivelos-img2.png">
                                    <div class="cover vivelos-cover">
                                        <p class="text-over">Texto</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-3 sin-padding">
                                <a href="#" class="image-w">
                                    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/vivelos/vivelos-img3.jpg">
                                    <div class="cover vivelos-cover">
                                        <p class="text-over">Texto</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-3 sin-padding">
                                <a href="#" class="image-w">
                                    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/vivelos/vivelos-img4.jpg">
                                    <div class="cover vivelos-cover">
                                        <p class="text-over">Texto</p>
                                    </div>
                                </a>
                            </div>
                        </div> 
                        <div class="col-xs-12">
                            <div class="col-xs-3 sin-padding">
                                <a href="#" class="image-w">
                                    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/vivelos/vivelos-img5.jpg">
                                    <div class="cover vivelos-cover">
                                        <p class="text-over">Texto</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-3 sin-padding">
                                <a href="#" class="image-w">
                                    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/vivelos/vivelos-img6.jpg">
                                    <div class="cover vivelos-cover">
                                        <p class="text-over">Texto</p>
                                    </div>
                                </a>   
                            </div>
                            <div class="col-xs-3 sin-padding">
                                <a href="#" class="image-w">
                                    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/vivelos/vivelos-img7.jpg">
                                    <div class="cover vivelos-cover">
                                        <p class="text-over">Texto</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-3 sin-padding">
                                <a href="#" class="image-w">
                                    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/vivelos/vivelos-img8.jpg">
                                    <div class="cover vivelos-cover">
                                        <p class="text-over">Texto</p>
                                    </div>
                                </a>   
                            </div>
                        </div> 
                        <div class="col-xs-12">
                            <div class="col-xs-3 sin-padding">
                                <a href="#" class="image-w">
                                    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/vivelos/vivelos-img9.jpg">
                                    <div class="cover vivelos-cover">
                                        <p class="text-over">Texto</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-3 sin-padding">
                                <a href="#" class="image-w">
                                    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/vivelos/vivelos-img10.jpg">
                                    <div class="cover vivelos-cover">
                                        <p class="text-over">Texto</p>
                                    </div>
                                </a>   
                            </div>
                            <div class="col-xs-3 sin-padding">
                                <a href="#" class="image-w">
                                    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/vivelos/vivelos-img11.jpg">
                                    <div class="cover vivelos-cover">
                                        <p class="text-over">Texto</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-3 sin-padding">
                                <a href="#" class="image-w">
                                    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/vivelos/vivelos-img12.jpg">
                                    <div class="cover vivelos-cover">
                                        <p class="text-over">Texto</p>
                                    </div>
                                </a>   
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-3 sin-padding">
                                <a href="#" class="image-w">
                                    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/vivelos/vivelos-img13.jpg">
                                    <div class="cover vivelos-cover">
                                        <p class="text-over">Texto</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-3 sin-padding">
                                <a href="#" class="image-w">
                                    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/vivelos/vivelos-img14.jpg">
                                    <div class="cover vivelos-cover">
                                        <p class="text-over">Texto</p>
                                    </div>
                                </a>   
                            </div>
                            <div class="col-xs-3 sin-padding">
                                <a href="#" class="image-w">
                                    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/vivelos/vivelos-img15.jpg">
                                    <div class="cover vivelos-cover">
                                        <p class="text-over">Texto</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-3 sin-padding">
                                <a href="#" class="image-w">
                                    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/vivelos/vivelos-img16.jpg">
                                    <div class="cover vivelos-cover">
                                        <p class="text-over">Texto</p>
                                    </div>
                                </a>   
                            </div>
                        </div> 
                        
                    </div>  
                </div>