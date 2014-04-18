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
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link href="//fonts.googleapis.com/css?family=PT+Sans Narrow:400,700" rel="stylesheet" type="text/css">
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/library/images/icono.png"/> 
        <!--[if IE]><script src="<?php echo BAVOTASAN_THEME_URL; ?>/library/js/html5.js"></script><![endif]-->
        <?php wp_head(); ?>
    </head>
    <?php
    $bavotasan_theme_options = bavotasan_theme_options();
    $space_class = '';
    ?>
    <body>
        <div class="row">
            <nav id="site-navigation" class="navbar navbar-fixed-top fondo-menu" role="navigation">
                <h3 class="sr-only"><?php _e('Main menu', 'arcade'); ?></h3>
                <a class="sr-only" href="#primary" title="<?php esc_attr_e('Skip to content', 'arcade'); ?>"><?php _e('Skip to content', 'arcade'); ?></a>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">           
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => '', 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'bavotasan_default_menu', 'depth' => 2)); ?>
                </div>         
            </nav><!-- #site-navigation -->
        </div>
        <div class="row">
            <div id="logo" class="col-xs-3 margin-logo-page"> 
                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/home/logo.png">
            </div>
        </div>
        <div class="row">
            <?php if ((get_the_ID() == 18) || (get_the_ID() == 17)) { 
                 if ('' == locate_template('descubre-header-page.php', true))
                        load_template( ABSPATH . WPINC . '/theme-compat/descubre-header-page.php');
                
                    if ('' == locate_template('descubre-page.php', true))
                       load_template( ABSPATH . WPINC . '/theme-compat/descubre-page.php');

                    if ('' == locate_template('footer-page.php', true))
                       load_template( ABSPATH . WPINC . '/theme-compat/footer-page.php');
                    
            } elseif ((get_the_ID() == 21) || (get_the_ID() == 19)) { 
                    if ('' == locate_template('vivelos-header-page.php', true))
                        load_template( ABSPATH . WPINC . '/theme-compat/vivelos-header-page.php');
                
                    if ('' == locate_template('vivelos-page.php', true))
                       load_template( ABSPATH . WPINC . '/theme-compat/vivelos-page.php');

                    if ('' == locate_template('footer-page.php', true))
                       load_template( ABSPATH . WPINC . '/theme-compat/footer-page.php');
            
            } elseif ((get_the_ID() == 30) || (get_the_ID() == 28)) { 
                    if ('' == locate_template('red-header-page.php', true))
                        load_template( ABSPATH . WPINC . '/theme-compat/red-header-page.php');
                
                    if ('' == locate_template('red-page.php', true))
                       load_template( ABSPATH . WPINC . '/theme-compat/red-page.php');

                    if ('' == locate_template('footer-page.php', true))
                       load_template( ABSPATH . WPINC . '/theme-compat/footer-page.php');
            } elseif ((get_the_ID() == 35) || (get_the_ID() == 33)) { 
                    if ('' == locate_template('armenia-header-page.php', true))
                        load_template( ABSPATH . WPINC . '/theme-compat/armenia-header-page.php');
                
                    if ('' == locate_template('armenia-page.php', true))
                       load_template( ABSPATH . WPINC . '/theme-compat/armenia-page.php');

                    if ('' == locate_template('footer-page.php', true))
                       load_template( ABSPATH . WPINC . '/theme-compat/footer-page.php');
            } else { ?>


                <div class="container">
                    <div class="row">
                        <div id="primary" <?php bavotasan_primary_attr(); ?>>
                            <?php
                            while (have_posts()) : the_post();
                                ?>
                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <h1 class="entry-title"><?php the_title(); ?></h1>
                                    <?php echo the_ID(); ?>
                                    <div class="entry-content description clearfix">
                                        <?php the_content(__('Read more', 'arcade')); ?>
                                    </div><!-- .entry-content -->

                                    <?php get_template_part('content', 'footer'); ?>
                                </article><!-- #post-<?php the_ID(); ?> -->

                                <?php
                                comments_template('', true);
                            endwhile;
                            ?>
                        </div>
                        <?php get_sidebar(); ?>
                    </div>
                </div>

            <?php } ?>
    </body>