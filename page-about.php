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

        <!-- <div class="backButton">
            <a onclick="history.back()">
                <i class="fas fa-long-arrow-alt-left"></i>
            </a>
        </div> -->

        <div class="logo"><img src="<?php the_sub_field('logo') ?>" /></div>

        <div class="heroContent">

            <div class="wrapper1200">

                <div class="heroHeadline animate__animated animate__fadeIn">

                    <div class="h2"><span class="underlined-word">Lorem <div class="underline"></span></div></div>
                    <div class="h2"> Ipsum</div>

                </div>

            </div>

        </div>

    </div>

    <div id="aboutSection">
        <div class="aboutContainer">
            <div class="imagesContainer">
                <div class="foregroundParallaxImage">
                    <img data-parallax='{"y": -300, "distance": 4000, "smoothness": 20}' src="https://trilakeguideservice.com/wp-content/uploads/2022/04/JoJoBaker-Name-min-min.png" />
                </div>
            </div>
            <div class="aboutContent">
                <div class="h2 fade-left"><span class="underlined-word">About <div class="underline"></span></div></div>
                <div class="h2 fade-left"> Us</div>
                <p class="fade-left">Tri-Lake Guide Service has been a long time dream of mine. I made the leap in 2021 and started guiding crappie fishing trips full time . I have been fishing since I was old enough to hold a pole. I love fishing with a passion and wanted it to be something I could do everyday. They say do what you love and love what you do. I started Tri-Lake Guide Service because I wanted to share what I love with my clients. In the future I want to be able to offer trips not only in MS but all over the southeast. There are a ton of great lakes that I would love to be able to offer to my clients. I want a trip with Tri-Lake Guide Service to be something that people want to do every year. Our team are pro crappie fisherman that fish the major crappie trails in Mississippi and nationally. We have been fishing all our lives and have the knowledge and skill set to give you a guided trip you won't forget.</p>
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
                    <div class="h2 fade-right"><span class="underlined-word">Expertise <div class="underline"></span></div></div>
                    <div class="h2 fade-right"> Service</div>
                    <p class="fade-right">
                        Habitant a magna nascetur parturient turpis magnis a ullamcorper torquent a elit ad in condimentum ad potenti sapien massa nec.
                        Habitant a magna nascetur parturient turpis magnis a ullamcorper torquent a elit ad in condimentum ad potenti sapien massa nec.
                        Habitant a magna nascetur parturient turpis magnis a ullamcorper torquent a elit ad in condimentum ad potenti sapien massa nec.
                        Habitant a magna nascetur parturient turpis magnis a ullamcorper torquent a elit ad in condimentum ad potenti sapien massa nec.
                    </p>
                    <div class="button">
                        <div class="btn">
                            <div class="btnContent btnBorderDark">
                                <a href="/contact">
                                    <p class="white">Contact Us</p>
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