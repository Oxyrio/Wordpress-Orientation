<?php get_header(); ?>


<!-- Header -->
<header id="top" class="header">
    <nav id="navigation">
        <?php wp_nav_menu(array('theme_location' => 'principal')); ?>
    </nav>
 <div class="text-vertical-center">
            <h1>Team WordPress</h1>
            <h3>Le meilleur CMS de tous les temps</h3>
            <br>
            <a href="#about" class="btn btn-dark btn-lg">Qui sommes-nous ?</a>
        </div>
    </header>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Nos services</h2>
                    <div class="row">
                        <?php $myquery = new WP_Query(array('post_type' => 'service' )); ?>
                            <?php while ($myquery->have_posts()) : $myquery->the_post(); ?>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                                </span>
                                <h4>
                                <strong><?php the_title(); ?></strong>
                                </h4>
                                <p><?php the_content(); ?></p>
                                </div>
                            </div>
                                <?php endwhile; ?>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                                </span>
                                <h4>
                                    <strong><?php the_title(); ?></strong>
                                </h4>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                        
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Callout -->
    <aside class="callout">
        <div class="text-vertical-center">
            <h1><?php
                bloginfo( $show );
            ?></h1>
        </div>
    </aside>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Nos travaux</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="<?php bloginfo('template_directory'); ?>/img/portfolio-1.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="<?php bloginfo('template_directory'); ?>/img/portfolio-2.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="<?php bloginfo('template_directory'); ?>/img/portfolio-3.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="<?php bloginfo('template_directory'); ?>/img/portfolio-4.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <a href="#" class="btn btn-dark">Voir tous les travaux</a>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

<?php get_footer(); ?>
