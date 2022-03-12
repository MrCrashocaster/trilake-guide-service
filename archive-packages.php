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

<div id="unparalledService" class="">
    <div class="wrapper1200">
        <div class="unparalledServiceContent">
            <div class="unparalledCopy">
                <div class="h2 fade-right"><span class="underlined-word">Unparalled <div class="underline"></span></div></div>
                <div class="h2 fade-right"> Service</div>
                <p class="fade-right">Vestibulum ac parturient vitae parturient elit suspendisse nec 
                    fringilla torquent ridiculus rhoncus nibh tellus condimentum. 
                    Conubia dictumst suscipit pharetra habitant sagittis netus pulvinar 
                    nascetur ut sociis a sagittis a suspendisse parturient duis nullam a velit viverra. 
                    Sodales etiam tempus tempor a vestibulum nascetur ullamcorper sociosqu condimentum 
                    aliquam facilisi mi gravida est et habitant.</p>

                    <div class="button fade-right">
                        <a href="/about">
                            <div class="btn">
                                <div class="btnContent">
                                    <p>About</p>
                                    <div class="btnImg"></div>
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
        <div class="packages">
            <div class="singlePackage fade-right">
                <div class="singlePackageContent">
                    <div class="h2"><span class="underlined-word">Package 1<div class="underline"></span></div></div>
                    <div class="h2 dark subtext"> For the beginner</div>
                    <p class="dark">Vestibulum ac parturient vitae parturient elit suspendisse nec 
                        fringilla torquent ridiculus rhoncus nibh tellus condimentum.
                    </p>
                    <div class="button">
                        <a href="/package-1">
                            <div class="btn">
                                <div class="btnContent">
                                    <p class="dark">Learn More</p>
                                    <div class="btnImg"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="singlePackage fade-left">
                <div class="singlePackageContent">
                    <div class="h2"><span class="underlined-word">Package 2<div class="underline"></span></div></div>
                    <div class="h2 dark subtext"> For the intermediate</div>
                    <p class="dark">Vestibulum ac parturient vitae parturient elit suspendisse nec 
                        fringilla torquent ridiculus rhoncus nibh tellus condimentum.
                    </p>
                    <div class="button">
                        <a href="/package-2">
                            <div class="btn">
                                <div class="btnContent">
                                    <p class="dark">Learn More</p>
                                    <div class="btnImg"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="singlePackage fade-right">
                <div class="singlePackageContent">
                    <div class="h2"><span class="underlined-word">Package 3<div class="underline"></span></div></div>
                    <div class="h2 dark subtext"> For the enthusiast</div>
                    <p class="dark">Vestibulum ac parturient vitae parturient elit suspendisse nec 
                        fringilla torquent ridiculus rhoncus nibh tellus condimentum.
                    </p>
                    <div class="button">
                        <a href="/package-3">
                            <div class="btn">
                                <div class="btnContent">
                                    <p class="dark">Learn More</p>
                                    <div class="btnImg"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="singlePackage fade-left">
                <div class="singlePackageContent">
                    <div class="h2"><span class="underlined-word">Package 4<div class="underline"></span></div></div>
                    <div class="h2 dark subtext"> For the expert</div>
                    <p class="dark">Vestibulum ac parturient vitae parturient elit suspendisse nec 
                        fringilla torquent ridiculus rhoncus nibh tellus condimentum.
                    </p>
                    <div class="button">
                        <a href="/package-4">
                            <div class="btn">
                                <div class="btnContent">
                                    <p class="dark">Learn More</p>
                                    <div class="btnImg"></div>
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
                <div class="h2"> Us</div>
                    <p class="dark">Vestibulum ac parturient vitae parturient elit suspendisse nec 
                        fringilla torquent ridiculus rhoncus nibh tellus condimentum.
                    </p>
                    <div class="button">
                        <a href="/contact">
                            <div class="btn">
                                <div class="btnContent">
                                    <p class="dark">Contact</p>
                                    <div class="btnImg"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>