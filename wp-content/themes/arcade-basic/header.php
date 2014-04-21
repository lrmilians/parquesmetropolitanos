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
<div class="row fijo">
    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/home/cabecera-header.jpg"> 
</div>
<div class="row">
    <div id="logo" class="col-xs-3 margin-logo"> 
        <a href="<?php bloginfo('url'); ?>"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/home/logo.png"></a>
    </div>
</div>
<div class="row">
    <div class="col-xs-6 col-xs-offset-6">

        <div class="social">
            <a class="socialLinks fb" href="#" target="_blank"> <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/sFb.png"> </a>
            <a class="socialLinks tw" href="#" target="_blank"> <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/sTw.png"> </a>
            <a class="socialLinks pt" href="#" target="_blank"> <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/sPt.png"> </a>
            <a class="socialLinks yt" href="#" target="_blank"> <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/sYt.png"> </a>
            <a class="socialLinks gp" href="#" target="_blank"> <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/sG+.png"> </a>
            <a class="socialLinks ig" href="#" target="_blank"> <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/sIg.png"> </a>
            <div class="clear"></div>
        </div><!--social-->

    </div> 
</div>
<div class="row descubre">
    <div class="col-xs-6 transparencia"> 
        <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/home/descubre-decripcion.png">
    </div>
    <div class="col-xs-5 col-xs-offset-1 transparencia">
        <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/hash-tag.png">
    </div>
</div>