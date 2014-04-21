<div class="row">
    <div class="col-xs-10 sin-padding" style="padding:1% 15%;">
       <?php
                            while (have_posts()) : the_post();
                                ?>
                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                  <!--  <h1 class="entry-title"><?php //the_title(); ?></h1> -->
                                    
                                    <div class="entry-content description clearfix">
                                        <?php the_content(__('Read more', 'arcade')); ?>
                                    </div><!-- .entry-content -->

                                    <?php get_template_part('content', 'footer'); ?>
                                </article><!-- #post-<?php the_ID(); ?> -->

                                <?php
                                
                            endwhile;
                            ?>
                                
    </div> 
</div>
<div class="row">
    <div class="col-xs-12 text-label-contacto text-telefonos ">
        <span> O contáctanos directamente a los teléfonos: 2263-410 2263-314 2263-511</span>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 table-responsive">
        <table class="table table-hover text-label-contacto">
            <thead>
                <tr>
                    <th>
                        PARQUE METROPOLITANO
                    </th>
                     <th>
                        EXTENSIONES
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        GUANGÜILTAGUA
                    </td>
                    <td>
                        31729
                    </td>
                </tr>
                <tr>
                    <td>
                        LAS CUADRAS
                    </td>
                    <td>
                        31709
                    </td>
                </tr>
                <tr>
                    <td>
                        ARMENIA Y CUSCUNGO
                    </td>
                    <td>
                        31669
                    </td>
                </tr>
                <tr>
                    <td>
                        ITCHIMBIA
                    </td>
                    <td>
                        31719
                    </td>
                </tr>
                <tr>
                    <td>
                        SUR
                    </td>
                    <td>
                        31719
                    </td>
                </tr>
                <tr>
                    <td>
                        BICENTENARIO
                    </td>
                    <td>
                        31719
                    </td>
                </tr>
                <tr>
                    <td>
                        EQUINOCCIAL
                    </td>
                    <td>
                        31719
                    </td>
                </tr>
                <tr>
                    <td>
                        LA CAROLINA
                    </td>
                    <td>
                        22270896
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
