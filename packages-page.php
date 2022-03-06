<?php 

/*****************************************************
 Template Name: Packages Template
*****************************************************/

get_header(); ?>


<?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>    
        
            <?php the_content(); ?>

            <?php if( have_rows('hero') ): ?>
                <?php while( have_rows('hero') ): the_row(); ?>

                    <!-- <video id="homeVideoBG" autoplay="autoplay" playsinline loop="loop" muted="muted">

                        <source src="<?php the_sub_field('video_background')['url'] ?>" type="video/mp4">
                        
                    </video> -->

                    <div id="packagesHero" style="background: url('https://trilakeguideservice.com/wp-content/uploads/2022/03/JoJo-100-e1646539030660.jpg') center top no-repeat; background-size: cover; height: auto; width: 100%;">

                        <div class="heroOverlay"></div>

                        <div class="logo"><img src="<?php the_sub_field('logo') ?>" /></div>

                        <div class="heroContent">

                            <div class="wrapper1200">

                                <div class="heroHeadline animate__animated animate__fadeIn">

                                    <div class="h1">Packages built for <span class="red">custom</span> experiences.</div>

                                </div>

                            </div>

                        </div>

                     </div>

                <?php endwhile; ?>

            <?php endif; ?>

            <div id="unparalledService" class="">
                <div class="wrapper1200">
                    <div class="unparalledServiceContent">
                        <div class="unparalledCopy fade-down">
                            <div class="h2"><span class="underlined-word">Unparalled <div class="underline"></span></div></div>
                            <div class="h2 dark"> Service</div>
                            <p>Vestibulum ac parturient vitae parturient elit suspendisse nec 
                                fringilla torquent ridiculus rhoncus nibh tellus condimentum. 
                                Conubia dictumst suscipit pharetra habitant sagittis netus pulvinar 
                                nascetur ut sociis a sagittis a suspendisse parturient duis nullam a velit viverra. 
                                Sodales etiam tempus tempor a vestibulum nascetur ullamcorper sociosqu condimentum 
                                aliquam facilisi mi gravida est et habitant.</p>

                                <div class="button">
                                    <a href="/about">
                                        <div class="btn">
                                            <p>About</p>
                                            <div class="btnImg"></div>
                                        </div>
                                    </a>
                                </div>
                        </div>
                        <div class="unparalledVideo fade-up">
                            <video autoplay="autoplay" playsinline loop="loop" muted="muted">
                                <source src="https://trilakeguideservice.com/wp-content/uploads/2022/03/TriLake-B-Roll-Min.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div> 
                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>