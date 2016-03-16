<?php
/*
    Template Name: Qui sommes nous ?
*/
?>
<?php get_header(); ?>

<!-- Main -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                
             <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <section class="row">
                <div class="col-md-12">
                    <h1 class="text-center"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
            </section>

            <section class="row">
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/CULrAoOrVXE" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </section>

        <?php endwhile; endif; ?>
        </div>
    </div>
</section>


<!-- Footer -->
<?php get_footer(); ?>