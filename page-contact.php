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

<div id="contactHero" style="background: url('https://trilakeguideservice.com/wp-content/uploads/2022/03/JoJo-100-e1646539030660.jpg') center top no-repeat; background-size: cover; height: auto; width: 100%;">

    <div class="heroOverlay"></div>

    <div class="logo"><img src="<?php the_sub_field('logo') ?>" /></div>

    <div class="heroContent">

        <div class="wrapper1200">

            <div class="heroHeadline animate__animated animate__fadeIn">

                <div class="h2"><span class="underlined-word">Contact <div class="underline"></span></div></div>
                <div class="h2 white"> Us</div>

            </div>

        </div>

    </div>

</div>

<?php get_footer(); ?>