<?php
/*
    Template Name: portfolio
*/
?>  

<?php get_header(); ?>
    <div class="text-vertical-center">
        <h1>Portfolio</h1>
    </div>
</header>

<!-- Portfolio -->
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h2>Nos travaux</h2>
                <hr class="small">
                <div class="row">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php $my_query = new WP_Query( array( 'post_type' => 'projet', 'orderby' => 'date', 'order' => 'ASC' ) ); ?>
                        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <div class="col-md-6">
                        <div class="portfolio-item">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>
                            </a>
                        </div>
                    </div>
                            <?php endwhile; ?>
                    <?php endwhile; endif ?>
                </div>
            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<?php get_footer(); ?>