<?php 

/*****************************************************
 Template Name: Contact Template
*****************************************************/

get_header(); ?>


<div id="contact">
    <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>   

            <?php the_content(); ?>

        <?php endwhile; ?>

    <?php endif; ?>

    <div class="heroContent">

        <div class="wrapper1200">

            <div class="heroHeadline animate__animated animate__fadeIn">

                <div class="h2"><span class="underlined-word">Contact <div class="underline"></span></div></div>
                <div class="h2 dark"> Us</div>

            </div>

        </div>

    </div>

</div>

<?php get_footer(); ?>