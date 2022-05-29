<?php 

/*****************************************************
 Template Name: Packages Template
*****************************************************/

get_header(); ?>


<?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>   

        <?php the_content(); ?>

    <?php endwhile; ?>

<?php endif; ?>

<?php if( have_rows('hero') ): ?>
    <?php while( have_rows('hero') ): the_row(); ?>

        <div id="packagesHero" style="background: url('<?php if(get_sub_field('background_image')['url']) { the_sub_field('background_image')['url']; } ?>') center top no-repeat; background-size: cover; height: 100vh; width: 100%;">

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

            <div id="mobileMenu">
                <div id="overlay-button"><span></span></div>
                <div id="overlay">
                    <ul>
                    <li><a class="cwm" href="<?php echo get_home_url(); ?>">Home</a></li>
                    <li><a class="cwm" href="/packages">Packages</a></li>
                    <li><a class="cwm" href="/about">About</a></li>
                    <li><a class="cwm" href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="heroContent">

                <div class="wrapper1200">

                    <div class="heroHeadline animate__animated animate__fadeIn">

                        <div class="h1"><?php if(get_sub_field('first_headline')) { the_sub_field('first_headline'); } ?> <span class="red"><?php if(get_sub_field('red_headline')) { the_sub_field('red_headline'); } ?></span> <?php if(get_sub_field('last_headline')) { the_sub_field('last_headline'); } ?></div>

                    </div>

                </div>

                <div id="scrollButton" class="scrollButtonContainer">

                <img class="animate__animated animate__pulse animate__infinite infinite" src="https://trilakeguideservice.com/wp-content/uploads/2022/05/scroll.png"/>


                </div>

            </div>

        </div>

    <?php endwhile; ?>

<?php endif; ?>

<div id="unparalledService" class="">
    <div class="wrapper1200">
        <div class="unparalledServiceContent">
            <div class="unparalledCopy">
                <div class="h2 fade-right"><span class="underlined-word">Unparalleled <div class="underline"></span></div></div>
                <div class="h2 fade-right"> Service</div>
                <p class="fade-right">We take pride in providing our customers with an unforgettable fishing experience. Our local team 
                    of skilled All-Pro Angler guides have expert knowledge and are passionate about fishing the lakes of North MS. View 
                    our custom inclusive packages and BOOK NOW to schedule your trip to fish with us!
                </p>
                <div class="button">
                    <div class="btn">
                        <div class="btnContent btnBorderDark">
                            <a href="#packageSection">
                                <p class="white">View Packages</p>
                                <div class="btnImg"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="unparalledVideo fade-left">
                <video preload autoplay muted loop autoplay="autoplay" playsinline loop="loop" muted="muted">
                    <source src="https://trilakeguideservice.com/wp-content/uploads/2022/03/TriLake_B-Roll_V2_Final.mp4" type="video/mp4">
                </video>
            </div>
        </div> 
    </div>
</div>
<div id="aboutCTA" style="background: url('https://trilakeguideservice.com/wp-content/uploads/2022/03/Young_Man_Crappie-min.jpg') bottom no-repeat; background-size: cover; width: 100%;">
    <div class="wrapper1200">
        <div class="cardContent">
            <div class="h2"><span class="underlined-word">About Us<div class="underline"></span></div></div>
            <div class="button">
                <div class="btn">
                    <div class="btnContent btnBorderDark">
                        <a href="/about">
                            <p class="white">Learn more</p>
                            <div class="btnImg"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="packageSection" class="">
    <div class="wrapper1200">
        <?php if( have_rows('packages') ): ?>
            <?php while( have_rows('packages') ): the_row(); ?>
                <div class="packagesHeadline">
                    <?php if( have_rows('boat_trips') ): ?>
                        <?php while( have_rows('boat_trips') ): the_row(); ?>
                            <div class="h1 red fade-right"><?php if(get_sub_field('main_headline')) { the_sub_field('main_headline'); } ?></div>
                            <div class="h2 fade-right"><?php if(get_sub_field('main_subheadline')) { the_sub_field('main_subheadline'); } ?></div>
                            <p class="fade-right"><?php if(get_sub_field('main_body_copy')) { the_sub_field('main_body_copy'); } ?> <span class="bold">Need a fishing license? Grab one <a class="red" target="_blank" href="https://www.mdwfp.com/license/fishing/">here</a></span>.
                            </p>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <?php if( have_rows('boat_trips') ): ?>
                    <?php while( have_rows('boat_trips') ): the_row(); ?>
                        <div class="packages changeBackgroundToDark">
                            <div class="singlePackage fade-right">
                                <div class="singlePackageContent">
                                    <?php if( have_rows('package_1') ): ?>
                                        <?php while( have_rows('package_1') ): the_row(); ?>
                                            <div class="h2"><span class="underlined-word"><?php if(get_sub_field('headline')) { the_sub_field('headline'); } ?><div class="underline"></span></div></div>
                                            <div class="h2 dark subtext"> <?php if(get_sub_field('subheadline')) { the_sub_field('subheadline'); } ?></div>
                                            <p class="dark"><?php if(get_sub_field('body_copy')) { the_sub_field('body_copy'); } ?></p>
                                            <div class="button">
                                                <div class="btn">
                                                    <div class="btnContent btnBorderDark">
                                                        <a href="/contact">
                                                            <p class="dark">Find your Fish</p>
                                                            <div class="btnImg"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="singlePackage fade-left">
                                <div class="singlePackageContent">
                                    <?php if( have_rows('package_2') ): ?>
                                        <?php while( have_rows('package_2') ): the_row(); ?>
                                            <div class="h2"><span class="underlined-word"><?php if(get_sub_field('headline')) { the_sub_field('headline'); } ?><div class="underline"></span></div></div>
                                            <div class="h2 dark subtext"> <?php if(get_sub_field('subheadline')) { the_sub_field('subheadline'); } ?></div>
                                            <p class="dark"><?php if(get_sub_field('body_copy')) { the_sub_field('body_copy'); } ?></p>
                                            <div class="button">
                                                <div class="btn">
                                                    <div class="btnContent btnBorderDark">
                                                        <a href="/contact">
                                                            <p class="dark">Find your Fish</p>
                                                            <div class="btnImg"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="singlePackage fade-right">
                                <div class="singlePackageContent">
                                    <?php if( have_rows('package_3') ): ?>
                                        <?php while( have_rows('package_3') ): the_row(); ?>
                                            <div class="h2"><span class="underlined-word"><?php if(get_sub_field('headline')) { the_sub_field('headline'); } ?><div class="underline"></span></div></div>
                                            <div class="h2 dark subtext"> <?php if(get_sub_field('subheadline')) { the_sub_field('subheadline'); } ?></div>
                                            <p class="dark"><?php if(get_sub_field('body_copy')) { the_sub_field('body_copy'); } ?></p>
                                            <div class="button">
                                                <div class="btn">
                                                    <div class="btnContent btnBorderDark">
                                                        <a href="/contact">
                                                            <p class="dark">Find your Fish</p>
                                                            <div class="btnImg"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="singlePackage fade-left">
                                <div class="singlePackageContent">
                                    <?php if( have_rows('package_4') ): ?>
                                        <?php while( have_rows('package_4') ): the_row(); ?>
                                            <div class="h2"><span class="underlined-word"><?php if(get_sub_field('headline')) { the_sub_field('headline'); } ?><div class="underline"></span></div></div>
                                            <div class="h2 dark subtext"> <?php if(get_sub_field('subheadline')) { the_sub_field('subheadline'); } ?></div>
                                            <p class="dark"><?php if(get_sub_field('body_copy')) { the_sub_field('body_copy'); } ?></p>
                                            <div class="button">
                                                <div class="btn">
                                                    <div class="btnContent btnBorderDark">
                                                        <a href="/contact">
                                                            <p class="dark">Find your Fish</p>
                                                            <div class="btnImg"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <div class="packagesHeadline wadingHeadline">
                    <?php if( have_rows('wading_trips') ): ?>
                        <?php while( have_rows('wading_trips') ): the_row(); ?>
                            <div class="h1 red fade-right"><?php if(get_sub_field('main_headline')) { the_sub_field('main_headline'); } ?></div>
                            <div class="h2 fade-right"><?php if(get_sub_field('main_subheadline')) { the_sub_field('main_subheadline'); } ?></div>
                            <p class="fade-right"><?php if(get_sub_field('main_body_copy')) { the_sub_field('main_body_copy'); } ?></p>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <?php if( have_rows('wading_trips') ): ?>
                    <?php while( have_rows('wading_trips') ): the_row(); ?>
                        <div class="packages wadingPackages">
                            <div class="singlePackage fade-right">
                                <div class="singlePackageContent">
                                    <?php if( have_rows('package_1') ): ?>
                                        <?php while( have_rows('package_1') ): the_row(); ?>
                                            <div class="h2"><span class="underlined-word"><?php if(get_sub_field('headline')) { the_sub_field('headline'); } ?><div class="underline"></span></div></div>
                                            <div class="h2 dark subtext"> <?php if(get_sub_field('subheadline')) { the_sub_field('subheadline'); } ?></div>
                                            <p class="dark"><?php if(get_sub_field('body_copy')) { the_sub_field('body_copy'); } ?></p>
                                            <div class="button">
                                                <div class="btn">
                                                    <div class="btnContent btnBorderDark">
                                                        <a href="/contact">
                                                            <p class="dark">Find your Fish</p>
                                                            <div class="btnImg"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<div id="servicesSection" class="">
    <div class="wrapper1200">
        <?php if( have_rows('packages') ): ?>
            <?php while( have_rows('packages') ): the_row(); ?>
                <div class="packagesHeadline">
                    <?php if( have_rows('services') ): ?>
                        <?php while( have_rows('services') ): the_row(); ?>
                            <div class="h1 red fade-right"><?php if(get_sub_field('main_headline')) { the_sub_field('main_headline'); } ?></div>
                            <div class="h2 fade-right"><?php if(get_sub_field('main_subheadline')) { the_sub_field('main_subheadline'); } ?></div>
                            <p class="fade-right"><?php if(get_sub_field('main_body_copy')) { the_sub_field('main_body_copy'); } ?></p>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="packages">
                    <?php if( have_rows('services') ): ?>
                        <?php while( have_rows('services') ): the_row(); ?>
                            <div class="singlePackage fade-right">
                                <div class="singlePackageContent">
                                    <?php if( have_rows('package_1') ): ?>
                                        <?php while( have_rows('package_1') ): the_row(); ?>
                                            <div class="h2"><span class="underlined-word"><?php if(get_sub_field('headline')) { the_sub_field('headline'); } ?><div class="underline"></span></div></div>
                                            <div class="h2 dark subtext"> <?php if(get_sub_field('subheadline')) { the_sub_field('subheadline'); } ?></div>
                                            <div class="h2 dark subtext"><?php if(get_sub_field('price')) { the_sub_field('price'); } ?></div>
                                            <p class="dark"><?php if(get_sub_field('body_copy')) { the_sub_field('body_copy'); } ?></p>
                                            <div class="button">
                                                <div class="btn">
                                                    <div class="btnContent btnBorderDark">
                                                        <a href="/contact">
                                                            <p class="dark">Get in Touch</p>
                                                            <div class="btnImg"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="singlePackage fade-left">
                                <div class="singlePackageContent">
                                    <?php if( have_rows('package_2') ): ?>
                                        <?php while( have_rows('package_2') ): the_row(); ?>
                                            <div class="h2"><span class="underlined-word"><?php if(get_sub_field('headline')) { the_sub_field('headline'); } ?><div class="underline"></span></div></div>
                                            <div class="h2 dark subtext"> <?php if(get_sub_field('subheadline')) { the_sub_field('subheadline'); } ?></div>
                                            <div class="h2 dark subtext"><?php if(get_sub_field('price')) { the_sub_field('price'); } ?></div>
                                            <p class="dark"><?php if(get_sub_field('body_copy')) { the_sub_field('body_copy'); } ?></p>
                                            <div class="button">
                                                <div class="btn">
                                                    <div class="btnContent btnBorderDark">
                                                        <a href="/contact">
                                                            <p class="dark">Get in Touch</p>
                                                            <div class="btnImg"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<div id="ctaContact" style="background: url('https://trilakeguideservice.com/wp-content/uploads/2022/03/Group_Photo_Final-min.jpg') center top no-repeat; background-size: cover; width: 100%;">
    <div class="heroOverlay"></div>
    <div class="wrapper1200">
        <div class="card">
            <div class="cardContent">
                <div class="h2"><span class="underlined-word">Contact<div class="underline"></span></div></div>
                <div class="h2 dark"> Us</div>
                    <p class="dark">Get in touch with us to schedule your trip with us!
                    </p>
                    <div class="button">
                        <div class="btn">
                            <div class="btnContent btnBorderDark">
                                <a href="/contact">
                                    <p class="dark">Get in Touch</p>
                                    <div class="btnImg"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>