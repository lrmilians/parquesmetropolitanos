<div class="row thumbnail-list descubre-padding">
    <div class="col-xs-12 padding-lateral">
        <div class="col-xs-12">
            <div class="col-xs-6 sin-padding">
                <?php if (get_bloginfo('url') == 'http://localhost:8090/parquesmetropolitanos')
                        $id = '38';
                    else if (get_bloginfo('url') == 'http://parques.wicomecuador.com')
                        $id = '37';
                    ?>
                    <a href="<?php bloginfo('url');?>/?page_id=<?php echo $id?>" class="image-w">
                    <img class="img-responsive" src="<?php bloginfo('template_url');?>/library/images/home/home-page-seccion3-img2.jpg">
                    <div class="cover sec3-img1">
                        <p class="text-over">CHAQUIÑÁN</p>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 sin-padding">
                 <?php if (get_bloginfo('url') == 'http://localhost:8090/parquesmetropolitanos')
                        $id = '40';
                    else if (get_bloginfo('url') == 'http://parques.wicomecuador.com')
                        $id = '39';
                    ?>
                    <a href="<?php bloginfo('url');?>/?page_id=<?php echo $id?>" class="image-w">
                    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/descubre/descubre-img2.jpg">
                    <div class="cover sec3-img2">
                        <p class="text-over text-right text-over-right">CUSCUNGO</p>
                    </div>
                </a>
            </div>
        </div> 
        <div class="col-xs-12">
            <div class="col-xs-6 sin-padding">
                <a href="#" class="image-w">
                    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/descubre/descubre-img3.jpg">
                    <div class="cover sec3-img3">
                        <p class="text-over">METRO SUR</p>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 sin-padding">
                <?php if (get_bloginfo('url') == 'http://localhost:8090/parquesmetropolitanos')
                        $id = '35';
                    else if (get_bloginfo('url') == 'http://parques.wicomecuador.com')
                        $id = '33';
                    ?>
                    <a href="<?php bloginfo('url');?>/?page_id=<?php echo $id?>" class="image-w">
                    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/library/images/descubre/descubre-img4.jpg">
                    <div class="cover sec3-img4">
                        <p class="text-over tex text-right text-over-right">ARMENIA</p>
                    </div>
                </a>   
            </div>
        </div> 
        <img class="img-responsive logo-center-descubre" src="<?php bloginfo('template_url'); ?>/library/images/home/logo.png">
    </div>  
</div>

