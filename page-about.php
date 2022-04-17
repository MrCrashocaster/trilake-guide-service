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
                <div class="h2"><span class="underlined-word">About <div class="underline"></span></div></div>
                <div class="h2"> Us</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus lorem justo, at viverra tellus mollis consequat. Nam accumsan pretium nulla, a varius nisl ullamcorper a. Donec rutrum mauris justo, quis consectetur massa tempus ac. Vestibulum nec facilisis lacus. Vestibulum odio sem, lacinia et facilisis sed, vestibulum quis lectus. Duis nec dictum enim. Suspendisse a dictum elit. Quisque at venenatis lacus, ac fringilla felis. Integer ac lectus justo. Proin accumsan ut magna eget accumsan. Integer mattis justo id mi mattis viverra vitae non diam. Nunc congue nunc at magna aliquam, vitae consequat turpis rhoncus. In tincidunt, diam id elementum pharetra, odio sem semper sem, nec maximus magna nulla sit amet libero. Pellentesque nec finibus nibh. Ut sed rutrum est, ut maximus lacus.</p>
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