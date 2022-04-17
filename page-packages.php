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

<div id="packagesHero" style="background: url('https://trilakeguideservice.com/wp-content/uploads/2022/03/TriLake_Old_Couple-min-e1647713880857.jpg') center top no-repeat; background-size: cover; height: 100vh; width: 100%;">

    <div class="heroOverlay"></div>

    <!-- <div class="nav">
        <div class="wrapper1200">
            <div class="navContent">
                <div class="backButton">
                    <a onclick="history.back()">
                        <i class="fas fa-long-arrow-alt-left"></i>
                    </a>
                </div>
                <div class="navItems">
                    <div class="h4">Home</div>
                    <div class="h4">Packages</div>
                    <div class="h4">About</div>
                    <div class="h4">Contact</div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="logo"><img src="<?php the_sub_field('logo') ?>" /></div>

    <div class="heroContent">

        <div class="wrapper1200">

            <div class="heroHeadline animate__animated animate__fadeIn">

                <div class="h1">Packages built for <span class="red">custom</span> experiences.</div>

            </div>

        </div>

    </div>

</div>

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
<div id="aboutCTA" style="background: url('https://trilakeguideservice.com/wp-content/uploads/2022/04/FishCTA-100.jpg') center top no-repeat; background-size: cover; width: 100%;">
    <div class="wrapper1200">
        <div class="cardContent">
        <div class="h1"><span class="underlined-word">About Us<div class="underline"></span></div></div>
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
</div>
<div id="packageSection" class="">
    <div class="wrapper1200">
        <div class="packagesHeadline">
            <div class="h1 red fade-right">Boat Trips</div>
            <div class="h2 fade-right">Chase your adventure</div>
            <p class="fade-right">Our 8 hour guided fishing trips have a 1-4 person limit.
                We stock our boats with the newest equipment and fish finding technology. All equipment, tackle, and gear are provided. The fish 
                you catch will be cleaned and vacuum sealed for you to take home. Wear appropriate clothing for weather conditions 
                and bring a snack to eat.
            </p>
        </div>
        <div class="packages changeBackgroundToDark">
            <div class="singlePackage fade-right">
                <div class="singlePackageContent">
                    <div class="h2"><span class="underlined-word">Package 1<div class="underline"></span></div></div>
                    <div class="h2 dark subtext"> One Person</div>
                    <p class="dark">8 Hour Guided Trip
                    </p>
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
                </div>
            </div>
            <div class="singlePackage fade-left">
                <div class="singlePackageContent">
                    <div class="h2"><span class="underlined-word">Package 2<div class="underline"></span></div></div>
                    <div class="h2 dark subtext"> Two People</div>
                    <p class="dark">8 Hour Guided Trip
                    </p>
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
                </div>
            </div>
            <div class="singlePackage fade-right">
                <div class="singlePackageContent">
                    <div class="h2"><span class="underlined-word">Package 3<div class="underline"></span></div></div>
                    <div class="h2 dark subtext"> Three People</div>
                    <p class="dark">8 Hour Guided Trip
                    </p>
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
                </div>
            </div>
            <div class="singlePackage fade-left">
                <div class="singlePackageContent">
                    <div class="h2"><span class="underlined-word">Package 4<div class="underline"></span></div></div>
                    <div class="h2 dark subtext"> Four People</div>
                    <p class="dark">8 Hour Guided Trip
                    </p>
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
                </div>
            </div>
        </div>
        <div class="packagesHeadline wadingHeadline">
            <div class="h1 red fade-right">Wading Trips</div>
        </div>
        <div class="packages wadingPackages">
            <div class="singlePackage fade-right">
                <div class="singlePackageContent">
                    <div class="h2"><span class="underlined-word">Package 1<div class="underline"></span></div></div>
                    <div class="h2 dark subtext"> One Person</div>
                    <p class="dark">8 Hour Guided Trip
                    </p>
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
                </div>
            </div>
        </div>
    </div>
</div>

<div id="servicesSection" class="">
    <div class="wrapper1200">
        <div class="packagesHeadline">
            <div class="h1 red fade-right">Services</div>
            <div class="h2 fade-right">Upgrade your rig</div>
            <p class="fade-right">Need your livescope or trolling motor installed? We can install your setup.
                Need practice or help with your livescope? We also provide expert livescope training. 
            </p>
        </div>
        <div class="packages">
            <div class="singlePackage fade-right">
                <div class="singlePackageContent">
                    <div class="h2"><span class="underlined-word">Installation<div class="underline"></span></div></div>
                    <div class="h2 dark subtext"> Livescope/Trolling Motor</div>
                    <p class="dark">Vestibulum ac parturient vitae parturient elit suspendisse nec 
                        fringilla torquent ridiculus rhoncus nibh tellus condimentum.
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
            <div class="singlePackage fade-left">
                <div class="singlePackageContent">
                    <div class="h2"><span class="underlined-word">Training<div class="underline"></span></div></div>
                    <div class="h2 dark subtext"> Livescope Training</div>
                    <p class="dark">Vestibulum ac parturient vitae parturient elit suspendisse nec 
                        fringilla torquent ridiculus rhoncus nibh tellus condimentum.
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

<div id="ctaContact" style="background: url('https://trilakeguideservice.com/wp-content/uploads/2022/03/Group_Photo_Final-min.jpg') center top no-repeat; background-size: cover; width: 100%;">
    <div class="heroOverlay"></div>
    <div class="wrapper1200">
        <div class="card">
            <div class="cardContent">
                <div class="h2"><span class="underlined-word">Contact<div class="underline"></span></div></div>
                <div class="h2 dark"> Us</div>
                    <p class="dark">Vestibulum ac parturient vitae parturient elit suspendisse nec 
                        fringilla torquent ridiculus rhoncus nibh tellus condimentum.
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