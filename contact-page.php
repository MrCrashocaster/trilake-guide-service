<?php 

/*****************************************************
 Template Name: Contact Template
*****************************************************/

get_header(); ?>

<?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>    
        
            <?php the_content(); ?>

        <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>