<?php 

/*****************************************************
 Template Name: About Template
*****************************************************/

get_header(); ?>

<div id="about">

    <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>    
            
                <?php the_content(); ?>

            <?php endwhile; ?>
    <?php endif; ?>

    <div id="packagesHero" style="background: url('https://trilakeguideservice.com/wp-content/uploads/2022/03/JoJo-100-e1646539030660.jpg') center top no-repeat; background-size: cover; height: auto; width: 100%;">

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

                    <div class="h2"><span class="underlined-word">About <div class="underline"></span></div></div>
                    <div class="h2"> Us</div>

                </div>

            </div>

        </div>

    </div>

    <!-- <div id="masonry">

            <img src="https://www.okgreat.be/upload/A01.jpg">

            <img src="https://www.okgreat.be/upload/A03.jpg">

            <img src="https://www.okgreat.be/upload/A04.jpg">

            <img src="https://www.okgreat.be/upload/A05.jpg">
        
            <img src="https://www.okgreat.be/upload/A06.jpg">
        
            <img src="https://www.okgreat.be/upload/A02.jpg">

            <img src="https://www.okgreat.be/upload/A07.jpg">

            <img src="https://www.okgreat.be/upload/A08.jpg">

    </div> -->

</div>

<?php get_footer(); ?>