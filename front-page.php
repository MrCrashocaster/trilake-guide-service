<?php 

/*****************************************************
 Template Name: Home Template
*****************************************************/

get_header(); ?>

<?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>    
        
            <?php the_content(); ?>

            <?php if( have_rows('hero') ): ?>
                <?php while( have_rows('hero') ): the_row(); ?>

                    <video preload playsinline autoplay muted loop id="homeVideoBG" autoplay="autoplay" loop="loop" muted="muted">

                        <source src="<?php the_sub_field('video_background')['url'] ?>" type="video/mp4">
                        
                    </video>

                    <div class="heroOverlay"></div>

                    <div class="logo animate__animated animate__fadeIn"><img src="<?php the_sub_field('logo') ?>" /></div>

                    <div class="heroContent animate__animated animate__fadeIn">

                        <div class="heroHeadline">

                            <div class="h1 red">TriLake</div>
                            <div class="h2 white">Guide Service</div>

                        </div>

                        <div class="heroLinks">

                        <a href="/packages">

                            <div class="heroBtn">

                                <p>Packages</p>

                                <div class="btnImg"></div>

                            </div>

                        </a>

                        <a href="/about">

                            <div class="heroBtn">

                                <p>About</p>

                                <div class="btnImg"></div>
                                
                            </div>

                        </a>

                        <a href="/contact">

                            <div class="heroBtn">

                                <p>Contact</p>

                                <div class="btnImg"></div>
                                
                            </div>

                        </a>

                        </div>

                    </div>

                <?php endwhile; ?>

            <?php endif; ?>

        <?php endwhile; ?>
        
    <?php endif; ?>

<?php get_footer(); ?>