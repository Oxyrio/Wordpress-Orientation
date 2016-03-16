<?php get_header(); ?>


<!-- Header -->
<header id="top" class="header">
    <nav id="navigation">
        <img src="<?php bloginfo('template_directory'); ?>/img/logo3.png">
        <?php wp_nav_menu(array('theme_location' => 'principal')); ?>
    </nav>
 <div class="text-vertical-center">
            <h2 style="font-weight:bold">Trouvez votre orientation</h2>
            <h1><?php
                bloginfo( $show );
            ?></h1>
            <h2>avec nos <b>Coachs professionnels !</b></h2>
            <br>
            <br>
            <a href="#about" class="btn btn-dark btn-lg">Qui sommes-nous ?</a>
        </div>
    </header>

    <section id="control" class="control bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="row">
                        <h3>Prenez le contrôle de votre <b>avenir<b> !</h3>
                            <div class="black"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="row"> 
                        <?php $myquery = new WP_Query(array('post_type' => 'service', 'posts_per_page' => '3' )); ?>
                            <?php while ($myquery->have_posts()) : $myquery->the_post(); ?>
                                <div class="col-md-4 col-sm-6">
                                    <div class="service-item">
                                        <div class="orange">
                                            <h4>
                                                <strong><?php the_title(); ?></strong>
                                            </h4>
                                        </div>
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
        <div class="container">
            <div class="row text-center">
                    <div class="row"> 
                        <div class="col-md-12 col-sm-6">
                            <div class="pictureone">
                                
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
            </div>
            <!-- /.row -->
        </div>
    </aside>

    <section class="questce">
        <div class="container">
            <div class="row text-center">
                    <div class="row"> 
                            <h2><span style="color:#ee5a35">ORIENTATION TM</span>, qu'est ce que c'est ?</h2>
                            <p>L’équipe d’<span style="color:#ee5a35">ORIENTATION</span> accompagne les jeunes de 15 à 25 ans dans leurs projets 
                                scolaires et professionnels grâce à ses bilans d’orientation et son coaching scolaire à
                                 domicile. A chaque niveau de la scolarité, nos conseillers vous permettent de faire les bons choix, 
                                 ceux correspondant à leurs motivations et à leur profil, fruit de leurs centres d’intérêts et de leur 
                                 personnalité. Notre savoir faire est aujourd’hui reconnu. <span style="color:#ee5a35">ORIENTATION</span> a déjà aidé des centaines de familles 
                                 dans le choix d’études, de filières scolaires et d'établissements. Pourquoi pas vous ?</p>
                    </div>
                    <!-- /.row (nested) -->
            </div>
            <!-- /.row -->
        </div>
    </section>



    <!-- Portfolio -->
    

<?php get_footer(); ?>
