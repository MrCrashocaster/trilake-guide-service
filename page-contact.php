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

    <div id="packagesHero" style="background: url('https://trilakeguideservice.com/wp-content/uploads/2022/03/Young_Man_Crappie-min.jpg') center top no-repeat; background-size: cover; height: auto; width: 100%;">

    <div class="heroOverlay"></div>

    <div class="backButton">
        <a onclick="history.back()">
            <i class="fas fa-long-arrow-alt-left"></i>
        </a>
    </div>

    <div class="logo"><img src="<?php the_sub_field('logo') ?>" /></div>

    <div class="heroContent">

        <div class="wrapper1200">

            <div class="heroHeadline animate__animated animate__fadeIn">

                <div class="h1">Contact <span class="red">Us.</span></div>

            </div>

        </div>

    </div>

</div>

<?php get_footer(); ?>