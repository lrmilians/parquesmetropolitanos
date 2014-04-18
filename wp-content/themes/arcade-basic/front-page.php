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
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
       
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/library/images/icono.png"/> 
          
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
       <!-- <link href="//fonts.googleapis.com/css?family=PT+Sans Narrow:400,700" rel="stylesheet" type="text/css">-->
        <!--[if IE]><script src="<?php echo BAVOTASAN_THEME_URL; ?>/library/js/html5.js"></script><![endif]-->
        <?php wp_head(); ?>
    </head>
    <?php
    $bavotasan_theme_options = bavotasan_theme_options();
    $space_class = '';
    ?>
    <body>
        <div id="main-container">
            <?php get_header(); ?>
            <div class="contenido">

                <div class="row">
                     <div class="col-xs-12 sin-padding">
                         <div class="col-xs-4">  
                            <img class="img-responsive img-margin-buho" src="<?php bloginfo('template_url'); ?>/library/images/home/buho.jpg">
                        </div>
                        <div class="col-xs-8 text-disfrutalos">  
                            <span class="subtitulo descubrelos">Disfrútalos</span>
                        </div>
                    </div>
                </div>
                <div class="row thumbnail-list">
                    <div class="col-xs-12 sin-padding">
                        <div class="col-xs-12 sin-padding">
                            <a href="#" class="image-w">
                                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/home/home-page-seccion2-img1.jpg">
                                <div class="cover sec2-img1">
                                   <!-- <h3>Title</h3>-->
                                   <p class="text-over">Metro Sur</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6 sin-padding">
                            <a href="#" class="image-w">
                                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/home/home-page-seccion2-img2.jpg">
                                <div class="cover sec2-img2">
                                    <p class="text-over">Armenia</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6 sin-padding">
                            <a href="#" class="image-w">
                                <img class="img-responsive"  src="<?php bloginfo('template_url'); ?>/library/images/home/home-page-seccion2-img3.jpg">
                                <div class="cover sec2-img3">
                                    <p class="text-over text-right text-over-right">Cuscungo</p>
                                </div>
                            </a> 
                        </div>
                        <img class="img-responsive logo-center" src="<?php bloginfo('template_url'); ?>/library/images/home/logo.png">
                    </div>       
                </div>
                <div class="row">
                    <div class="col-xs-12 sin-padding">
                        <div class="col-xs-8">  
                            <span class="subtitulo vivelos">Vívelos</span>
                        </div>
                        <div class="col-xs-4">  
                            <img class="img-responsive img-margin-adita" src="<?php bloginfo('template_url'); ?>/library/images/home/hada.png">
                        </div>
                    </div>
                </div>
                <div class="row thumbnail-list">
                    <div class="col-xs-12 sin-padding">
                        <div class="col-xs-6 sin-padding">
                            <a href="#" class="image-w">
                                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/home/home-page-seccion3-img1.jpg">
                                <div class="cover sec3-img1">
                                    <p class="text-over">Siente</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6 sin-padding">
                            <a href="#" class="image-w">
                                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/home/home-page-seccion3-img2.jpg">
                                <div class="cover sec3-img2">
                                    <p class="text-over text-right text-over-right">Respira</p>
                                </div>
                            </a>
                        </div>
                    </div> 
                     <img class="img-responsive logo-center-sec3" src="<?php bloginfo('template_url'); ?>/library/images/home/logo-seccion-3-home.png">
                    <div class="col-xs-12 sin-padding">
                        <div class="col-xs-6 sin-padding">
                            <a href="#" class="image-w">
                                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/home/home-page-seccion3-img3.jpg">
                                <div class="cover sec3-img3">
                                    <p class="text-over">Vive</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6 sin-padding">
                            <a href="#" class="image-w">
                                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/home/home-page-seccion3-img4.jpg">
                                <div class="cover sec3-img4">
                                    <p class="text-over text-right text-over-right">Recorre</p>
                                </div>
                            </a>   
                        </div>
                    </div> 
                   
                </div>    
                <div class="row">
                    <div class="col-xs-12 sin-padding">
                        <div class="col-xs-4">  
                            <img class="img-responsive img-margin-colibri" src="<?php bloginfo('template_url'); ?>/library/images/home/colibri.png">
                        </div>
                        <div class="col-xs-8">  
                            <span class="subtitulo descubrelos">Descúbrelos</span>
                        </div>
                    </div>
                </div>   
                <div class="row thumbnail-list">
                    <div class="col-xs-12 sin-padding">
                        <a href="#" class="image-w">
                                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/home/home-page-seccion4-img1.jpg">
                                <div class="sec4-img1 cover">
                                    <p class="text-over-tienes-vivirlo">Tienes que vivirlo</p>
                                </div>
                            </a>
                    </div>
                </div> 
                <div class="row fondo-pie">
                    <div class="col-xs-12 padding-lateral pie">
                        <div class="col-xs-6">
                            <span class="pull-left tipo"><?php printf(__('Copyright &copy; %s %s. All Rights Reserved.', 'arcade'), date('Y'), ' <a class="parques" href="' . home_url() . '">' . get_bloginfo('name') . '</a>'); ?></span>
                        </div>
                        <div class="col-xs-6">
                            <div class="col-xs-3 col-xs-offset-7 sin-padding">
                                <a href="http://www.epmmop.gob.ec/" target="_blank">
                                    <img class="img-responsive logo-quito" src="<?php bloginfo('template_url'); ?>/library/images/epmmop.png">
                                </a>
                            </div>
                            <div class="col-xs-2 sin-padding">
                                <a href="http://www.quito.gob.ec/‎" target="_blank">
                                    <img class="img-responsive logo-quito" src="<?php bloginfo('template_url'); ?>/library/images/quito.png">
                                </a>
                            </div>
                            
                        </div> 
                    </div><!-- .col-lg-12 -->
                </div> 
            </div>   

            <?php //get_footer(); ?>
        </div>
    </body>
</html>




