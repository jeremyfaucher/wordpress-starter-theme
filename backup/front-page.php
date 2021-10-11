<?php
/**
* Template Name: Front Page
*/
get_header(); ?>
 <!-- Who we are: @Judy -->
        <div id="whoweare" class="color-background">
            <div class='container py-5 d-flex flex-column pad-container color-background'>
                <div class="row">
                    <div id="whoweare-text" class="col-lg-6 order-1 order-lg-2 pad-text">
                        <?php the_field('about'); ?>
                        <a href="volunteer-page.html" target="_blank">
                            <div class="button">Become a Volunteer</div>
                        </a>
                        <br>
                    </div>

                    <div id="whoweare-image" class="col-lg-6 order-1 order-lg-2">
                        <div>
                            <img src="<?php the_field('about_image'); ?>" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Webinar Series: @Larry -->
        <div class="webinar container py-5">
            <div class="row">
                <div id="podcast-thumbnails" class="col-lg-6 order-1 order-lg-2">
                    <div class="row">
                        <div class="flex-container">
                            <div class="flex-child">
                                    <img src="assets/webinar/tech-in-us-defense-flyer.png">
                            </div>
                            <div class="flex-child">
                                    <img src="assets/webinar/smart-city-flyer.png">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="flex-container">
                            <div class="flex-child">
                                    <img src="assets/webinar/future-of-digital-assets-flyer.png">
                            </div>
                            <div class="flex-child">
                                    <img src="assets/webinar/ar-vr-flyer.png">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 order-1 order-lg-2 pad-text">
                    <h5>
                        Webinar Series
                    </h5>
                    <h3>
                        Tune in to our latest Webinar with professionals from around the globe! Join us live or check
                        out our episodes here.
                    </h3>
                    <p class="pt-3">
                        Harvard in Tech Seattle webinar series are a great way to keep up with the current market
                        trends in technology with regards to the socio-economic impacts and beyond. The series host
                        experts from the Harvard alum network and beyond who share their knowledge and have an open
                        dialogue with the audience. Whether you are looking into investing or exploring the industry
                        or a technophile, come learn from the best and have your questions answered.
                    </p>


                    <a href="webinars.html" target="_blank">
                        <div class="button">Watch Webinars</div>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <!-- Podcast Section -->
    <div id="podcast" class="color-background">
        <div class='container d-flex flex-column pad-container'>
            <div class="row">
                <div id="podcast-text" class="col-lg-6 order-1 order-lg-2 pad-text">
                    <h5>Podcast Series</h5>
                    <h3>Hear our latest podcast featuring Harvard professionals who have made a difference in our
                        industry!
                    </h3>
                    <br>
                    <p>Harvard in Tech Seattle Podcast is a monthly podcast, enriching the Harvard in Tech Seattle
                        community
                        through spotlighting Harvard
                        alumni in Seattle’s technology sector. The podcast connects our community with each other
                        through
                        discussion and knowledge sharing,
                        providing values through our guests.</p>
                    <div>
                        <a href="podcast.html" target="_blank">
                            <div class="button">Listen Podcast</div>
                        </a>
                    </div>
                </div>

                <div id="podcast-thumbnails" class="col-lg-6 order-1 order-lg-2">
                    <div class="row">
                        <div class="flex-container">
                            <div class="flex-child">
                                <!-- <a href="https://soundcloud.com/user-616895977/episode-6-spencer-rascoff"> -->
                                    <img src="assets/podcast/HiTS Podcast Spencer Rascoff.png">
                                <!-- </a> -->
                            </div>
                            <div class="flex-child">
                                <!-- <a href="https://soundcloud.com/user-616895977/harvard-in-tech-seattle-podcast-episode-1-steven-maheshwary/s-Y6fwQCZbaPJ"> -->
                                    <img src="assets/podcast/HiTS Podcast Steven Maheshwary.png">
                                <!-- </a> -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="flex-container">
                            <div class="flex-child">
                                <!-- <a href="https://soundcloud.com/user-616895977/episode-5-aran-khanna"> -->
                                    <img src="assets/podcast/HiTS Podcast Aran Khanna.png">
                                <!-- </a> -->
                            </div>
                            <div class="flex-child">
                                <!-- <a href="https://soundcloud.com/user-616895977/my-le-goel"> -->
                                    <img src="assets/podcast/HiTS Podcast My Le Goel.png">
                                <!-- </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pad-text sec-width">
        <!-- Harvard in Tech Seattle Buzz @Aditya -->
        <h5>Harvard in Tech Seattle Buzz</h5>
        <div class="container d-flex flex-column justify-content-center align-items-center buzz-padding">
            <div class="d-flex flex-row justify-content-center flex-wrap">

                <div class="d-flex flex-column justify-content-around align-items-center buzz-card">
                    <img class="hshot" src="assets/buzz/1.png" alt="people">
                    <div>
                        <p class="buzz-text-top">
                            "Thank you everyone, I found it a great experience and exchange"
                            <span class="date"> - May 27, 2021</span>
                        </p>
                        <p class="buzz-text-bottom"><strong>Holger Arians</strong> (HBS PLD ' 16), CEO, Banxa</p>
                    </div>
                </div>

                <div class="d-flex flex-column justify-content-around align-items-center buzz-card">
                    <img class="hshot" src="assets/buzz/2.png" alt="people">
                    <div>
                        <p class="buzz-text-top" style="margin-bottom: 0em">
                            "Excellent, thank you! You've been putting together some excellent events!"
                        </p>
                        <p class="date" style="font-style: italic; font-weight: 600; color: #856359 !important;"> - Sep
                            20, 2020</p>
                        <p class="buzz-text-bottom"><strong>Dr. Sarah Kreps</strong> (HU), Professor, Department of
                            Government, Cornell University.</p>
                    </div>
                </div>

                <div class="d-flex flex-column justify-content-around align-items-center buzz-card">
                    <img class="hshot" src="assets/buzz/3.png" alt="people">
                    <div>
                        <p class="buzz-text-top">
                            "Thank you so much for having us! It was such a pleasure to participate with you all."
                            <span class="date"> - Aug 28, 2020 </span>
                        </p>
                        <p class="buzz-text-bottom"><strong>Dipayan Ghosh</strong>, Co-director, Digital Platforms &
                            Democracy Project, Harvard Kennedy School.</p>
                    </div>
                </div>

            </div>
            <a href="buzz.html" target="_blank">
                <div class="button">More</div>
            </a>
        </div>
    </div> <!-- End of main Container -->

<?php get_footer(); ?>