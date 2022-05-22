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

    <div id="packagesHero" style="background: url('https://trilakeguideservice.com/wp-content/uploads/2022/03/Young_Man_Crappie-min.jpg') center top no-repeat; background-size: cover; height: 100vh; width: 100%;">

        <div class="heroOverlay"></div>

        <div class="nav">
            <div class="wrapper1200">
                <div class="navContent">
                    <div class="navItems">
                        <div class="singleItem">
                            <a href="<?php echo get_home_url(); ?>" class="h4">Home</a>
                        </div>
                        <div class="singleItem">
                            <a href="/packages" class="h4">Packages</a>
                        </div>
                        <div class="singleItem">
                            <a href="/about" class="h4">About</a>
                        </div>
                        <div class="singleItem">
                            <a href="/contact" class="h4">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="logo"><img src="<?php the_sub_field('logo') ?>" /></div>

        <div class="heroContent">

            <div class="wrapper1200">

                <div class="heroHeadline animate__animated animate__fadeIn">

                    <div class="h1">Contact <span class="red">Us.</span></div>

                </div>

            </div>

            <div class="scrollButtonContainer">

            <img class="animate__animated animate__pulse animate__infinite infinite" src="https://trilakeguideservice.com/wp-content/uploads/2022/05/scroll.png"/>


        </div>

        </div>

    </div>

    <div id="contactContent">
        <div class="wrapper1200">
            <div class="contactContainer">
                <div class="contactForm">
                    <div class="formHeadline animate__animated animate__fadeIn">
                        <div class="h1">Get in <span class="red">Touch</span>.</div>
                    </div>
                    <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" tabindex="49" field_values="check=First Choice,Second Choice"]'); ?>
                </div>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>