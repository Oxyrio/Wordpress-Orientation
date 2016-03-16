<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Eval - Bootstrap</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php bloginfo('template_directory'); ?>/css/mystyle.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php bloginfo('template_directory'); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php bloginfo('template_directory'); ?>/http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css"/>
</head>

<body>

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
                        <?php $my_query = new WP_Query(array('post_type' => 'service', 'posts_per_page' => '4')); ?>
                        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <span class="fa-stack fa-4x">
                                        <i class="fa <?php the_field('icones'); ?> fa-stack-2x"></i>
                                        <i class="fa <?php the_field('icones'); ?> fa-stack-1x text-primary"></i>
                                    </span>
                                    <h4>
                                        <strong><?php the_title(); ?></strong>
                                    </h4>
                                    <p><?php the_content(); ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
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
            <h1><?php bloginfo('title'); ?></h1>
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

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4>
                        <strong>Team WordPress</strong>
                    </h4>
                    <p>Pôle Léonard De Vinci</p>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <nav id="navigation_footer">
                        <?php wp_nav_menu(array('theme_location' => 'secondaire')); ?>
                    </nav>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
