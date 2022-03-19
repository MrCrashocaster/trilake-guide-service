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

<div id="packagesHero" style="background: url('https://trilakeguideservice.com/wp-content/uploads/2022/03/TriLake_Old_Couple-min-e1647713880857.jpg') center top no-repeat; background-size: cover; height: auto; width: 100%;">

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
                        </a>
                    </div>
            </div>
            <div class="unparalledVideo fade-left">
                <video autoplay="autoplay" playsinline loop="loop" muted="muted">
                    <source src="https://trilakeguideservice.com/wp-content/uploads/2022/03/TriLake-B-Roll-Min.mp4" type="video/mp4">
                </video>
            </div>
        </div> 
    </div>
</div>
<div id="packageSection" class="">
    <div class="wrapper1200">
        <div class="packagesHeadline">
            <div class="h1 red fade-right">Packages</div>
            <div class="h2 fade-right">Grab your adventure</div>
            <p class="fade-right">Vestibulum ac parturient vitae parturient elit suspendisse nec 
                fringilla torquent ridiculus rhoncus nibh tellus condimentum.
            </p>
        </div>
        <div class="packages changeBackgroundToDark">
            <div class="singlePackage fade-right">
                <div class="singlePackageContent">
                    <div class="h2"><span class="underlined-word">Package 1<div class="underline"></span></div></div>
                    <div class="h2 dark subtext"> One Person</div>
                    <p class="dark">Vestibulum ac parturient vitae parturient elit suspendisse nec 
                        fringilla torquent ridiculus rhoncus nibh tellus condimentum.
                    </p>
                    <div class="button">
                            <div class="btn">
                                <div class="btnContent btnBorderDark">
                                    <a href="/booking">
                                        <p class="dark">Book Now</p>
                                        <div class="btnImg"></div>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="singlePackage fade-left">
                <div class="singlePackageContent">
                    <div class="h2"><span class="underlined-word">Package 2<div class="underline"></span></div></div>
                    <div class="h2 dark subtext"> Two People</div>
                    <p class="dark">Vestibulum ac parturient vitae parturient elit suspendisse nec 
                        fringilla torquent ridiculus rhoncus nibh tellus condimentum.
                    </p>
                    <div class="button">
                            <div class="btn">
                                <div class="btnContent btnBorderDark">
                                    <a href="/booking">
                                        <p class="dark">Book Now</p>
                                        <div class="btnImg"></div>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="singlePackage fade-right">
                <div class="singlePackageContent">
                    <div class="h2"><span class="underlined-word">Package 3<div class="underline"></span></div></div>
                    <div class="h2 dark subtext"> Three People</div>
                    <p class="dark">Vestibulum ac parturient vitae parturient elit suspendisse nec 
                        fringilla torquent ridiculus rhoncus nibh tellus condimentum.
                    </p>
                    <div class="button">
                            <div class="btn">
                                <div class="btnContent btnBorderDark">
                                    <a href="/booking">
                                        <p class="dark">Book Now</p>
                                        <div class="btnImg"></div>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="singlePackage fade-left">
                <div class="singlePackageContent">
                    <div class="h2"><span class="underlined-word">Package 4<div class="underline"></span></div></div>
                    <div class="h2 dark subtext"> Four People</div>
                    <p class="dark">Vestibulum ac parturient vitae parturient elit suspendisse nec 
                        fringilla torquent ridiculus rhoncus nibh tellus condimentum.
                    </p>
                    <div class="button">
                            <div class="btn">
                                <div class="btnContent btnBorderDark">
                                    <a href="/booking">
                                        <p class="dark">Book Now</p>
                                        <div class="btnImg"></div>
                                    </a>
                                </div>
                            </div>
                        </a>
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
            <div class="h2 fade-right">Grab your adventure</div>
            <p class="fade-right">Vestibulum ac parturient vitae parturient elit suspendisse nec 
                fringilla torquent ridiculus rhoncus nibh tellus condimentum.
            </p>
        </div>
        <div class="packages">
            <div class="singlePackage fade-right">
                <div class="singlePackageContent">
                    <div class="h2"><span class="underlined-word">Service 1<div class="underline"></span></div></div>
                    <div class="h2 dark subtext"> One Person</div>
                    <p class="dark">Vestibulum ac parturient vitae parturient elit suspendisse nec 
                        fringilla torquent ridiculus rhoncus nibh tellus condimentum.
                    </p>
                    <div class="button">
                            <div class="btn">
                                <div class="btnContent btnBorderDark">
                                    <a href="/booking">
                                        <p class="dark">Book Now</p>
                                        <div class="btnImg"></div>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="singlePackage fade-left">
                <div class="singlePackageContent">
                    <div class="h2"><span class="underlined-word">Service 2<div class="underline"></span></div></div>
                    <div class="h2 dark subtext"> Two People</div>
                    <p class="dark">Vestibulum ac parturient vitae parturient elit suspendisse nec 
                        fringilla torquent ridiculus rhoncus nibh tellus condimentum.
                    </p>
                    <div class="button">
                            <div class="btn">
                                <div class="btnContent btnBorderDark">
                                    <a href="/booking">
                                        <p class="dark">Book Now</p>
                                        <div class="btnImg"></div>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="ctaContact" style="background: url('https://trilakeguideservice.com/wp-content/uploads/2021/12/pexels-cottonbro-4828253-min-e1646622391180.jpg') center top no-repeat; background-size: cover; width: 100%;">
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
                                    <p class="dark">Contact</p>
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