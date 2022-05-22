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

    <div id="packagesHero" style="background: url('https://trilakeguideservice.com/wp-content/uploads/2022/03/JoJo-100-e1646539030660.jpg') center top no-repeat; background-size: cover; height: 100vh; width: 100%;">

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

                    <div class="h2"><span class="underlined-word">All-Pro<div class="underline"></span></div></div>
                    <div class="h2"> Angler Team</div>

                </div>

            </div>

            <div class="scrollButtonContainer">

            <img class="animate__animated animate__pulse animate__infinite infinite" src="https://trilakeguideservice.com/wp-content/uploads/2022/05/scroll.png"/>

        </div>

        </div>

    </div>

    <div id="aboutSection">
        <div class="aboutContainer">
            <div class="imagesContainer">
                <div class="slide">
                    <img data-parallax='{"y": -300, "distance": 4000, "smoothness": 20}' src="https://trilakeguideservice.com/wp-content/uploads/2022/04/JoJoBaker-Name-min-min.png" />
                </div>
                <div class="slide">
                    <img data-parallax='{"y": -300, "distance": 4000, "smoothness": 20}' src="https://trilakeguideservice.com/wp-content/uploads/2022/04/Dalton-min.png" />
                </div>
            </div>
            <div class="aboutContent">
                <div class="h2 fade-left"><span class="underlined-word">About <div class="underline"></span></div></div>
                <div class="h2 fade-left"> Us</div>
                <p class="fade-left">Tri-Lake Guide Service has been a long time dream of mine. I made the leap in 2021 and started guiding crappie fishing trips full time. I have been fishing the lakes of Mississippi since I was old enough to hold a pole. They say do what you love and love what you do, fishing is my passion and I am blessed to be able to share the sport with others. In the future, I want to be able to offer trips not only in MS but all over the southeast. I want a trip with Tri-Lake Guide Service to be something that people want to do every year.  Our team of all pro crappie fisherman have fished the major crappie trails of MS and other crappie trails throughout the US. The team's knowledge and skill sets will provide you with a trip you will never forget!</p>
                <div class="button fade-left">
                    <div class="btn">
                        <div class="btnContent btnBorderDark">
                            <a href="/contact">
                                <p class="white">Get in Touch</p>
                                <div class="btnImg"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="aboutCTA" style="background: url('https://trilakeguideservice.com/wp-content/uploads/2022/04/FishCTA-100.jpg') center top no-repeat; background-size: cover; width: 100%;">
        <div class="wrapper1200">
            <div class="cardContent">
                <div class="h2"><span class="underlined-word">Packages<div class="underline"></span></div></div>
                <div class="button">
                    <div class="btn">
                        <div class="btnContent btnBorderDark">
                            <a href="/packages">
                                <p class="white">Grab your adventure</p>
                                <div class="btnImg"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="unparalledService" class="">
        <div class="wrapper1200">
            <div class="unparalledServiceContent">
                <div class="unparalledCopyLeft">
                    <div class="h2 fade-right"><span class="underlined-word">Contact <div class="underline"></span></div></div>
                    <div class="h2 fade-right"> Us</div>
                    <p class="fade-right">We take pride in providing our customers with an unforgettable fishing experience. Our local team of skilled All-Pro Angler guides have expert knowledge and are passionate about fishing the lakes of North MS.</p>
                    <div class="button fade-right">
                        <div class="btn">
                            <div class="btnContent btnBorderDark">
                                <a href="/contact">
                                    <p class="white">Get in Touch</p>
                                    <div class="btnImg"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="unparalledCopyRight">
                    <img class="fade-left" src="https://trilakeguideservice.com/wp-content/uploads/2022/03/JoJo-100-e1646539030660.jpg" />
                </div>
            </div> 
        </div>
    </div>
   
</div>

<?php get_footer(); ?>

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