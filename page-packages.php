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

    <div class="logo"><img src="<?php the_sub_field('logo') ?>" /></div>

    <div class="heroContent">

        <div class="wrapper1200">

            <div class="heroHeadline animate__animated animate__fadeIn">

                <div class="h1">Packages built for <span class="red">custom</span> experiences.</div>

            </div>

        </div>

        <div class="scrollButtonContainer">

        <img class="animate__animated animate__pulse animate__infinite infinite" src="https://trilakeguideservice.com/wp-content/uploads/2022/05/scroll.png"/>


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
</div>
<div id="packageSection" class="">
    <div class="wrapper1200">
        <div class="packagesHeadline">
            <div class="h1 red fade-right">Boat Trips</div>
            <div class="h2 fade-right">Chase your adventure</div>
            <p class="fade-right">Our 8 hour guided fishing trips have a 1-4 person limit.
                We stock our boats with the newest equipment and fish finding technology. All equipment, tackle, and gear are provided. The fish 
                you catch will be cleaned and vacuum sealed for you to take home. Wear appropriate clothing for weather conditions 
                and bring a snack to eat. <span class="bold">Need a fishing license? Grab one <a class="red" target="_blank" href="https://www.mdwfp.com/license/fishing/">here</a></span>.
            </p>
        </div>
        <div class="packages changeBackgroundToDark">
            <div class="singlePackage fade-right">
                <div class="singlePackageContent">
                    <div class="h2"><span class="underlined-word">One Person<div class="underline"></span></div></div>
                    <div class="h2 dark subtext"> $350</div>
                    <p class="dark">Donec id convallis dolor. Nullam varius sit amet velit eget cursus. Sed accumsan erat in augue egestas suscipit id eget lectus. Aliquam in nunc dapibus, accumsan felis sit amet, fringilla nibh.</p>
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
                    <div class="h2"><span class="underlined-word">Two People<div class="underline"></span></div></div>
                    <div class="h2 dark subtext"> $450</div>
                    <p class="dark">Donec id convallis dolor. Nullam varius sit amet velit eget cursus. Sed accumsan erat in augue egestas suscipit id eget lectus. Aliquam in nunc dapibus, accumsan felis sit amet, fringilla nibh.</p>
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
                    <div class="h2"><span class="underlined-word">Three People<div class="underline"></span></div></div>
                    <div class="h2 dark subtext"> $625</div>
                    <p class="dark">Donec id convallis dolor. Nullam varius sit amet velit eget cursus. Sed accumsan erat in augue egestas suscipit id eget lectus. Aliquam in nunc dapibus, accumsan felis sit amet, fringilla nibh.</p>
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
                    <div class="h2"><span class="underlined-word">Four People<div class="underline"></span></div></div>
                    <div class="h2 dark subtext"> $750</div>
                    <p class="dark">Donec id convallis dolor. Nullam varius sit amet velit eget cursus. Sed accumsan erat in augue egestas suscipit id eget lectus. Aliquam in nunc dapibus, accumsan felis sit amet, fringilla nibh.</p>
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
            <div class="h2 fade-right">March 15th - April 25th</div>
        </div>
        <div class="packages wadingPackages">
            <div class="singlePackage fade-right">
                <div class="singlePackageContent">
                    <div class="h2"><span class="underlined-word">2 Person Min.<div class="underline"></span></div></div>
                    <div class="h2 dark subtext"> $200 per person</div>
                    <p class="dark">Donec id convallis dolor. Nullam varius sit amet velit eget cursus. Sed accumsan erat in augue egestas suscipit id eget lectus. Aliquam in nunc dapibus, accumsan felis sit amet, fringilla nibh.</p>
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
                    <div class="h2 dark subtext">$350</div>
                    <p class="dark">Get an upgrade to your fishing experience. We can install the perfect setup for you. ( +$100 IF FISHING )
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
                    <div class="h2 dark subtext">$350</div>
                    <p class="dark">Need hands on livescope training training? We can teach you everything you need to know!
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