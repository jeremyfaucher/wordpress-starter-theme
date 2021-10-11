<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/jpg" href="assets/logo/HiTS-Logo-new.png"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GCBX577FFD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-GCBX577FFD');
    </script>
    <?php wp_enqueue_script("jquery"); ?>

    <?php wp_head(); ?>
</head>

<body>

    <div>
        <div class="logo-container">
            <div class="parent">
                <div class="left"></div>
                <div class="center">
                    <a href="index.html">
                        <img src="assets/logo/HiTS-Logo-new.png" class="rounded mx-auto d-block" alt="Logo" width="100em"
                             height="100em">
                    </a>
                </div>
                <div class="right">
                    <div style="padding-right: 2em; text-align: right">
                        <p><i class="fa fa-caret-right" style="padding-right: 5px"></i><a target="_blank" style="text-decoration: none; color: black;" href="https://www.harvardintech.com/">Harvard in Tech</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar -->
        <div class="container">
            <div class="mx-auto navbar-container">
                <div class="row">
                    <div class="col-12-md" style="text-align: center; margin: auto">
                        <nav class="navbar navbar-expand-lg navbar-light sticky-top">
                            <div class="container">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation"
                                    style="text-align: center; margin: auto">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index.html">Home <span
                                                    class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Programs
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="webinars.html">Webinar</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="podcast.html">Podcast</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="young-professionals.html">Tech For Young
                                                    Professionals</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="call-for-action.html">Call For Action</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="events.html">Events</a>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="volunteer-page.html">Volunteer Opportunities</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="buzz.html">Harvard in Tech Seattle Buzz</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="team.html">Team</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.html">Contact Us</a>
                                        </li>
                                        <!-- Empty for some whitespace before the Join Us item -->
                                        <li class="nav-item">
                                            <div class="empty-div"></div>
                                        </li>
                                        <li class="nav-item">
                                            <div class="joinus-button">
                                                <span class="joinus-text"><a class="joinus-text"
                                                        href="https://lnkd.in/g43ipkP" target="_blank">Join
                                                        Us</a></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <img id="harvard-logo" src="assets/logo/harvard-logo.png" alt="">
            </div>
        </div>

        <!-- Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/landing-page/carousel/1.png" alt="First slide">
                    <!--                    <div class="carousel-caption d-none d-md-block">-->
                    <!--                        <h5>My Caption Title (1st Image)</h5>-->
                    <!--                        <p>The whole caption will only show up if the screen is at least medium size.</p>-->
                    <!--                    </div>-->
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/landing-page/carousel/2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/landing-page/carousel/3.png" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/landing-page/carousel/4.png" alt="Fourth slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/landing-page/carousel/5.png" alt="Fifth slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>