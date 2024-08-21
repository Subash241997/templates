<?php
include 'dbConnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>PortfolioBee: Home</title>
    <!-- MDB icon -->
    <link rel="stylesheet" href="https://portfoliobee.com/plugins/css/all.min.css"/>
    <link rel="icon" href="./images/path0%20(1).png" type="image/x-icon"/>
    <!-- Font Awesome -->
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Fraunces:ital,opsz,wght@0,9..144,100..900;1,9..144,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Outfit:wght@100..900&display=swap"
          rel="stylesheet">
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css"/>
    <style>
        @media only screen and (max-width: 991px) {

            .pricing {
                width: 80%;
            }
        }

        .buy-now {
            display: flex;
            justify-content: center;
            margin-top: 0.75rem;
        }

        /* Assuming you want to target the specific icon */
        .carousel-control-next-icon::after {
            content: none; /* Remove the ::after content */
        }

        .carousel-control-prev-icon::after {
            content: none; /* Remove the ::after content */
        }

        .carousel-control-next {
            right: -5%;
            transform: translateX(70%);
        }

        .carousel-control-prev {
            left: -5%;
            transform: translateX(-70%);
        }

        /*.accordion-button::after{*/
        /*    background-color: #FFE164;*/
        /*    width: 2rem;*/
        /*    height: 2rem;*/
        /*    border-radius: 40%;*/
        /*}*/
        /* Custom styles for accordion */
        .accordion-button {
            background: none; /* Remove background */
            border: none; /* Remove border */
            box-shadow: none; /* Remove box-shadow */
            padding: 0; /* Remove padding */
            margin: 0; /* Remove margin */
            color: inherit; /* Inherit color */
            font-size: 1.25rem; /* Set font size */
            display: flex; /* Flexbox for alignment */
            align-items: center; /* Center vertically */
            justify-content: space-between; /* Align items horizontally */
        }

        /* Hide default indicator */
        .accordion-button::after {
            display: none; /* Hide the default indicator */
        }

        /* Custom icon style */
        .accordion-button .fas {
            transition: transform 0.3s ease; /* Smooth rotation transition */
            font-size: 1.5rem; /* Set icon size */
            margin-right: 0.5rem; /* Space between icon and text */
            background: linear-gradient(135deg, #FFB2B2 0%, #FFB27D 52.5%, #7199FF 100%);
            border-radius: 100%;
        }

        /* Rotate icon when expanded */
        .accordion-button:not(.collapsed) .fas {
            transform: rotate(180deg); /* Rotate icon 180 degrees when expanded */
        }

        /* Styling for the accordion header */
        .accordion-header {
            display: flex;
            align-items: center;
            padding: 0.5rem 1rem; /* Adjust padding as needed */
        }

        .navbar {
            box-shadow: none;
        }

        @media only screen and (max-width: 991px) {
            .signup-btn {
                display: none;
            }

            .connect-form {
                padding: 2rem;
                margin-top: 2rem;
            }
        }

        .rolling-img {
            overflow: hidden; /* Hide overflow to only show the part within the container */
            white-space: nowrap; /* Prevent images from wrapping to the next line */
            position: relative; /* Ensure proper positioning for animation */
            width: 100%; /* Make sure the container takes up full width */
            padding: 20px 0; /* Optional: add padding for better spacing */
        }

        .rolling-img .d-flex {
            display: inline-flex; /* Align images horizontally */
            animation: scroll 20s linear infinite; /* Animation settings */
        }

        .rolling-img img {
            margin-right: 1rem; /* Space between images */
        }

        /* Keyframes for scrolling animation */
        @keyframes scroll {
            0% {
                transform: translateX(0); /* Start position */
            }
            100% {
                transform: translateX(-100%); /* End position */
            }
        }

        .accordion-button:not(.collapsed) {
            color: black;
            padding-bottom: 0.5rem;
        }

        .intro-banner-container {
            position: relative;
        }

        .intro-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 65%; /* This ensures the background occupies half of the height */
            background: linear-gradient(101.88deg, #FFB3AE 6.87%, #FEBC6F 45.46%, #7198FF 84.06%, #48C8FF 105.83%);
            z-index: -1; /* Place the background behind the content */
        }

        /* Adjust positioning for the banner image if needed */
        .intro-banner img {
            position: relative;
            z-index: 1; /* Ensure the image is above the background */
        }

        .zoom-effect {
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition for zoom and shadow */
        }

        .zoom-effect:hover {
            transform: scale(1.05); /* Slightly enlarge the element on hover */
            box-shadow: 0px 0px 25px 0px rgba(0, 0, 0, 0.6); /* Increase shadow intensity on hover */
        }
        .zoom-effect-icon {
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition for zoom and shadow */
        }

        .zoom-effect-icon:hover {
            transform: scale(2); /* Slightly enlarge the element on hover */
            box-shadow: 0px 0px 25px 0px rgba(0, 0, 0, 0.6); /* Increase shadow intensity on hover */
        }

        .multi-control-prev {
            left: 4%;
        }

        .multi-control-next {
            right: 4%;
        }

        .card {
            overflow: hidden; /* Ensure that content does not overflow the card */
        }

        .feature-text {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal; /* Ensure text wraps onto new lines */
        }

        .feature-text p {
            margin: 0; /* Remove default margin to prevent extra space issues */
            word-break: break-word; /* Break long words to avoid overflow */
        }

        /* Ensure that the multi-carousel-inner uses Flexbox for proper alignment */
        .multi-carousel-inner {
            display: flex;
        }

        /* Set a minimum height for multi-carousel-item to maintain uniformity */
        .multi-carousel-item {
            display: flex;
            flex-direction: column;
            flex: 1 0 auto;
        }

        /* Ensure that feature-text grows or shrinks with the rest of the card */
        .feature-text {
            flex: 1;
        }

        body {
            font-family: "outfit", sans-serif;
        }

        /* Hide the cross icon by default */
        .fa-xmark {
            display: none;
        }

        /* Show the cross icon and hide the hamburger icon when the navbar is expanded */
        .navbar-toggler.collapsed .fa-xmark {
            display: none;
        }

        .navbar-toggler:not(.collapsed) .fa-bars {
            display: none;
        }

        .navbar-toggler:not(.collapsed) .fa-xmark {
            display: block;
        }

        .gradient-icon {
            display: inline-block;
            background: linear-gradient(135deg, #FFB2B2 0%, #FFB27D 52.5%, #7199FF 100%);
            -webkit-background-clip: text; /* For Chrome, Safari, and Opera */
            -webkit-text-fill-color: transparent; /* For Chrome, Safari, and Opera */
            background-clip: text; /* For other browsers */
            text-fill-color: transparent; /* For other browsers */
        }

        .gradient-text {
            background: linear-gradient(92.05deg, #FF847D 0%, #FFA949 54.04%, #3260D7 99.16%);
            -webkit-background-clip: text; /* For Chrome, Safari, and Opera */
            -webkit-text-fill-color: transparent; /* For Chrome, Safari, and Opera */
            background-clip: text; /* For other browsers */
            text-fill-color: transparent; /* For other browsers */
            font-size: 1.25rem; /* Adjust font size if needed */
        }

        @media only screen and (max-width: 992px) {
            .nav-head {
                background: linear-gradient(101.88deg, #FFB3AE 6.87%, #FEBC6F 50%, #7198FF 95%, #48C8FF 105.83%);
                padding: 1rem;
                background-color: transparent !important;
            }

            .head-menu {
                color: black !important;
            }
        }
        #annual {
            display: none;
        }
        .textarea-custom-border {
            border: none !important;
            border-bottom: 1px solid black !important;
        }
        .textarea-custom-border {
            position: relative;
        }

        .textarea-custom-border::placeholder {
            position: absolute;
            top: 70%; /* Move placeholder text down */
        }


        .app-links:hover {
            transform: translate(0px, 3px);
        }
        @media only screen and (min-width: 992px){
            .custom-navbar{
                position: fixed;
                left: 50%;
                transform: translateX(-50%);
                z-index: 1030;
            }
            .nav-head{
                border-radius: 50px;
                padding: 0.5rem;
                transition: background-color 0.3s ease;
            }
        }
        /*.transparent {*/
        /*    background-color: transparent !important;*/
        /*}*/
        /* Initial hidden state */
        .hidden {
            opacity: 0;
            transform: translateY(20px); /* Adjust as needed */
            transition: opacity 0.5s ease-out, transform 0.5s ease-out; /* Adjust timing as needed */
        }

        /* Revealed state */
        .visible {
            opacity: 1;
            transform: translateY(0);
        }
        /* Initial hidden state for the button container */
        #navbar-button-container {
            display: none;
        }

        /* Show button container when navbar is sticky */
        #navbar-button-container.visible {
            display: block;
        }
    </style>
</head>
<body style="overflow-x: hidden; position: relative;">
<!-- Start your project here-->
<div class="container-fluid g-0">
    <nav class="navbar navbar-expand-lg  " style="background: linear-gradient(101.88deg, #FFB3AE 6.87%, #FEBC6F 50%, #7198FF 95%, #48C8FF 105.83%);
">
        <div class="container-fluid">
            <div class="logo-img d-flex justify-content-between align-items-center">
                <a href="#">
                    <img src="images/path0.png" alt="Logo" class="img-fluid">
                </a>
                <a href="#">
                    <h5 class="mb-0 ps-1 text-black">PortfolioBee</h5>
                </a>
            </div>
            <button
                    data-mdb-collapse-init
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-mdb-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
            >
                <i class="fas fa-bars text-black"></i>
                <i class="fas fa-xmark text-black"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-center custom-navbar" id="navbarNavAltMarkup">
                <div class="navbar-nav nav-head fw-semibold align-items-center" style="background-color: black;" id="nav-head">
                    <a class="nav-link head-menu text-white" href="#about-us">About</a>
                    <a class="nav-link head-menu text-white" href="#features">Feature</a>
                    <a class="nav-link head-menu text-white" href="#find-plan">Pricing</a>
                    <a class="nav-link head-menu text-white" href="#mentions"
                    >Testimonials</a
                    >
                    <a class="nav-link head-menu text-white" href="#connect"
                    >Contact Us</a
                    >
                    <div id="navbar-button-container">
                        <button type="button" class="btn btn-dark" data-mdb-ripple-init style="color: #FEBC6F; border-radius: 50px;" onclick="document.getElementById('find-plan').scrollIntoView({behavior: 'smooth'}); ">Get Started</button>
                    </div>
                    <div class="d-lg-none mt-2">
                        <button type="button" class="btn btn-dark" data-mdb-ripple-init style="color: #FEBC6F" onclick="document.getElementById('find-plan').scrollIntoView({behavior: 'smooth'});">Get
                            Started
                        </button>
                    </div>
                </div>
            </div>
            <div class="signup-btn d-none d-lg-block">
                <button type="button" class="btn btn-dark" data-mdb-ripple-init style="color: #FEBC6F" onclick="document.getElementById('find-plan').scrollIntoView({behavior: 'smooth'});">Get Started
                </button>
            </div>
        </div>
    </nav>
    <div class="intro-banner-container">
        <div class="intro-banner d-flex flex-wrap flex-column justify-content-center align-content-center align-items-center pt-4 mb-4 mt-0">
            <h1 class="text-center fw-bolder text-black">Craft Your Professional Identity with PortfolioBee!</h1>
            <p class="container text-center text-black">The ultimate platform for showcasing both your academic
                brilliance and extracurricular triumphs.</p>
            <div class="app-btn d-flex flex-column d-sm-block">
                <a href="https://www.apple.com/app-store/" target="_blank" >
                    <img src="images/Link.png" alt="App Store" class="img-fluid app-links">
                </a>
                <a href="https://play.google.com/store/games" target="_blank" >
                    <img src="images/Link%20(1).png" alt="Play Store" class="img-fluid app-links">
                </a>
            </div>
            <img src="images/Laptop%20Air%20and%20Phone%2014%20Mockup%2002%201.png" alt="mac-systems"
                 class="img-fluid my-4">
            <h5 class="text-center text-black">Trusted by 20,000+ students & institutions</h5>
        </div>
    </div>
</div>


<div class="container-fluid ">
    <div class="rolling-img">
        <div class="d-flex justify-content-between">
            <img src="./images/Group.png" alt="Image 1" class="img-fluid m-4"
                 style="width: 5rem; height: 5rem; border-radius: 100%">
            <img src="./images/Group%20(1).png" alt="Image 2" class="img-fluid m-4"
                 style="width: 5rem; height: 5rem; border-radius: 100%">
            <img src="./images/Group%20(2).png" alt="Image 3" class="img-fluid m-4"
                 style="width: 5rem; height: 5rem; border-radius: 100%">
            <img src="./images/Group%20(3).png" alt="Image 4" class="img-fluid m-4"
                 style="width: 5rem; height: 5rem; border-radius: 100%">
            <img src="./images/Group%20(4).png" alt="Image 5" class="img-fluid m-4"
                 style="width: 5rem; height: 5rem; border-radius: 100%">
            <img src="./images/Group%20(5).png" alt="Image 5" class="img-fluid m-4"
                 style="width: 5rem; height: 5rem; border-radius: 100%">
            <img src="./images/Group.png" alt="Image 5" class="img-fluid m-4"
                 style="width: 5rem; height: 5rem; border-radius: 100%">
            <img src="./images/Group%20(1).png" alt="Image 5" class="img-fluid m-4"
                 style="width: 5rem; height: 5rem; border-radius: 100%">
            <img src="./images/Group%20(2).png" alt="Image 5" class="img-fluid m-4"
                 style="width: 5rem; height: 5rem; border-radius: 100%">
            <img src="./images/Group%20(3).png" alt="Image 5" class="img-fluid m-4"
                 style="width: 5rem; height: 5rem; border-radius: 100%">
            <img src="./images/Group%20(4).png" alt="Image 5" class="img-fluid m-4"
                 style="width: 5rem; height: 5rem; border-radius: 100%">
            <img src="./images/Group%20(5).png" alt="Image 5" class="img-fluid m-4"
                 style="width: 5rem; height: 5rem; border-radius: 100%">
            <img src="./images/Group.png" alt="Image 5" class="img-fluid m-4"
                 style="width: 5rem; height: 5rem; border-radius: 100%">
            <img src="./images/Group%20(1).png" alt="Image 5" class="img-fluid m-4"
                 style="width: 5rem; height: 5rem; border-radius: 100%">
            <img src="./images/Group%20(2).png" alt="Image 5" class="img-fluid m-4"
                 style="width: 5rem; height: 5rem; border-radius: 100%">
            <img src="./images/Group.png" alt="Image 1" class="img-fluid m-4"
                 style="width: 5rem; height: 5rem; border-radius: 100%">
            <img src="./images/Group%20(1).png" alt="Image 2" class="img-fluid m-4"
                 style="width: 5rem; height: 5rem; border-radius: 100%">
            <img src="./images/Group%20(2).png" alt="Image 3" class="img-fluid m-4"
                 style="width: 5rem; height: 5rem; border-radius: 100%">
            <img src="./images/Group%20(3).png" alt="Image 4" class="img-fluid m-4"
                 style="width: 5rem; height: 5rem; border-radius: 100%">
            <img src="./images/Group%20(4).png" alt="Image 5" class="img-fluid m-4"
                 style="width: 5rem; height: 5rem; border-radius: 100%">
            <img src="./images/Group%20(5).png" alt="Image 5" class="img-fluid m-4"
                 style="width: 5rem; height: 5rem; border-radius: 100%">
            <img src="./images/Group.png" alt="Image 1" class="img-fluid m-4"
                 style="width: 5rem; height: 5rem; border-radius: 100%">
            <img src="./images/Group%20(1).png" alt="Image 2" class="img-fluid m-4"
                 style="width: 5rem; height: 5rem; border-radius: 100%">
            <img src="./images/Group%20(2).png" alt="Image 3" class="img-fluid m-4"
                 style="width: 5rem; height: 5rem; border-radius: 100%">
            <img src="./images/Group%20(3).png" alt="Image 4" class="img-fluid m-4"
                 style="width: 5rem; height: 5rem; border-radius: 100%">
            <img src="./images/Group%20(4).png" alt="Image 5" class="img-fluid m-4"
                 style="width: 5rem; height: 5rem; border-radius: 100%">
            <img src="./images/Group%20(5).png" alt="Image 5" class="img-fluid m-4"
                 style="width: 5rem; height: 5rem; border-radius: 100%">
        </div>
    </div>

    <div class="features reveal hidden" id="features">
        <div class="head-text" style="position: relative">
            <h2 class="fw-bolder text-black ">Features</h2>
            <!--            <hr style="width: 8rem; ">-->
            <div style="background-color: black; width: 7.5rem; height: 0.25rem; border-radius: 10%; position: absolute; top: 120%;"></div>

        </div>
        <div class="multi-carousel  d-flex justify-content-center mt-5" data-mdb-carousel="true">
            <div class="multi-carousel-inner" style="width: 95%;">
                <div class="multi-carousel-item" style="height: 100%;">
                    <div class="zoom-effect my-3 mx-2 h-100"
                         style="background-color: black; color: white; padding: 2rem; ">
                        <div class="img-feature d-flex justify-content-end my-4">
                            <img src="./images/data-report%201.png" alt="dashboard" class="img-thumbnail"
                                 style="width: 5rem; height: 5rem; background: linear-gradient(135deg, #FFB4AF 0%, #FFBD70 53.5%, #7199FF 100%);
">
                        </div>
                        <div class="feature-text">
                            <h4 class="my-3 fw-bolder">Personalised Dashboard</h4>
                            <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius
                                enim in eros
                                elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut
                                commodo
                                diam libero vitae erat.</p>
                        </div>


                    </div>

                </div>
                <div class="multi-carousel-item" style="height: 100%;">
                    <div class=" zoom-effect my-3 mx-2 h-100"
                         style="background-color: black; color: white; padding: 2rem; ">
                        <div class="img-feature d-flex justify-content-end my-4">
                            <img src="./images/personal-info%201.png" alt="portfolio" class="img-thumbnail"
                                 style="width: 5rem; height: 5rem; background: linear-gradient(135deg, #FFB4AF 0%, #FFBD70 53.5%, #7199FF 100%);
">
                        </div>
                        <div class="feature-text">
                            <h4 class="my-3 fw-bolder">Portfolio</h4>
                            <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius
                                enim in eros
                                elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut
                                commodo
                                diam libero vitae erat.</p>
                        </div>

                    </div>

                </div>
                <div class="multi-carousel-item" style="height: 100%;">
                    <div class=" zoom-effect my-3 mx-2 h-100"
                         style="background-color: black; color: white; padding: 2rem; ">
                        <div class="img-feature d-flex justify-content-end my-4">
                            <img src="./images/report%201.png" alt="resume review report" class="img-thumbnail"
                                 style="width: 5rem; height: 5rem; background: linear-gradient(135deg, #FFB4AF 0%, #FFBD70 53.5%, #7199FF 100%);
">
                        </div>
                        <div class="feature-text">
                            <h4 class="my-3 fw-bolder">Resume Review Report</h4>
                            <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius
                                enim in eros
                                elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut
                                commodo
                                diam libero vitae erat.</p>
                        </div>

                    </div>

                </div>
                <div class="multi-carousel-item" style="height: 100%;">
                    <div class=" zoom-effect my-3 mx-2 h-100"
                         style="background-color: black; color: white; padding: 2rem; ">
                        <div class="img-feature d-flex justify-content-end my-4">
                            <img src="./images/data-report%201.png" alt="dashboard" class="img-thumbnail"
                                 style="width: 5rem; height: 5rem; background: linear-gradient(135deg, #FFB4AF 0%, #FFBD70 53.5%, #7199FF 100%);
">
                        </div>
                        <div class="feature-text">
                            <h4 class="my-3 fw-bolder">Personalised Dashboard</h4>
                            <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius
                                enim in eros
                                elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut
                                commodo
                                diam libero vitae erat.</p>
                        </div>

                    </div>

                </div>
                <div class="multi-carousel-item" style="height: 100%;">
                    <div class=" zoom-effect my-3 mx-2 h-100"
                         style="background-color: black; color: white; padding: 2rem; ">
                        <div class="img-feature d-flex justify-content-end my-4">
                            <img src="./images/personal-info%201.png" alt="dashboard" class="img-thumbnail"
                                 style="width: 5rem; height: 5rem; background: linear-gradient(135deg, #FFB4AF 0%, #FFBD70 53.5%, #7199FF 100%);
">
                        </div>
                        <div class="feature-text">
                            <h4 class="my-3 fw-bolder">Portfolio</h4>
                            <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius
                                enim in eros
                                elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut
                                commodo
                                diam libero vitae erat.</p>
                        </div>

                    </div>

                </div>
            </div>
            <button class="carousel-control-prev multi-control-prev" type="button" data-mdb-slide="prev">
                <i class="carousel-control-prev-icon fas fa-2x fa-angle-left gradient-icon"></i>
            </button>
            <button class="carousel-control-next multi-control-next" type="button" data-mdb-slide="next">
                <i class="carousel-control-next-icon fas fa-2x fa-angle-right gradient-icon"></i>
            </button>
        </div>
    </div>


    <div class="details my-5 reveal hidden">
        <!--        <div class="row align-items-center">-->
        <div class="row">
            <div class="special-header container d-flex align-items-start col-12 col-md-6 my-2">
                <div class="container" style="width: 90%;">
                    <h2 class="fw-bolder text-black">Get job smarter, not harder</h2>
                </div>
            </div>

            <div class="container col-12 col-md-6 my-2">
                <div class="container" style="width: 90%;">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros
                        elementum
                        tristique. Duis cursus, mi quis viverra ornare.</p>
                    <button type="button" class="btn btn-dark" data-mdb-ripple-init style="color: #FF857C" onclick="document.getElementById('find-plan').scrollIntoView({behavior: 'smooth'});">Get Started
                    </button>
                </div>

            </div>
        </div>

        <div class="row align-items-center flex-column-reverse flex-md-row">
            <div class="col-12 col-md-6 my-2">
                <div class="container" style="width: 90%;">
                    <h4 class="fw-bolder text-black">Personalised Dashboard</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros
                        elementum
                        tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam
                        libero
                        vitae erat.</p>
                </div>

            </div>

            <div class="col-12 col-md-6 my-2 text-center">
                <img src="images/image%205.png" alt="feature-1" class="img-fluid">
            </div>
        </div>


        <div class="row align-items-center">
            <div class="col-12 col-md-6 my-2 text-center">
                <img src="images/image%206.png" alt="feature-2" class="img-fluid">

            </div>

            <div class="col-12 col-md-6 my-2">
                <div class="container" style="width: 90%;">
                    <h4 class="fw-bolder text-black">Portfolio</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros
                        elementum
                        tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam
                        libero
                        vitae erat.</p>
                </div>

            </div>
        </div>


        <div class="row align-items-center flex-column-reverse flex-md-row">
            <div class="col-12 col-md-6 my-2">
                <div class="container" style="width: 90%;">
                    <h4 class="fw-bolder text-black">E-mail Signature</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros
                        elementum
                        tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam
                        libero
                        vitae erat.</p>
                </div>

            </div>

            <div class="col-12 col-md-6 my-2 text-center">
                <img src="images/image%207.png" alt="feature-3" class="img-fluid">
            </div>
        </div>


        <div class="row align-items-center ">
            <div class="col-12 col-md-6 my-2 text-center">
                <img src="images/image%204.png" alt="feature-4" class="img-fluid">
            </div>

            <div class="col-12 col-md-6 my-2">
                <div class="container" style="width: 90%;">
                    <h4 class="fw-bolder text-black">Resume Review Report</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros
                        elementum
                        tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam
                        libero
                        vitae erat.</p>
                </div>

            </div>
        </div>


        <div class="row align-items-center flex-column-reverse flex-md-row">
            <div class="col-12 col-md-6 my-2">
                <div class="container" style="width: 90%;">
                    <h4 class="fw-bolder text-black">Job Tracker</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros
                        elementum
                        tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam
                        libero
                        vitae erat.</p>
                </div>

            </div>

            <div class="col-12 col-md-6 my-2 text-center">
                <img src="images/image%208.png" alt="feature-5" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="about-us  my-4 reveal hidden" id="about-us">
        <div class="head-text" style="position: relative;">
            <h2 class="fw-bolder text-black">About Us</h2>
            <!--            <hr class="text-black fw-bold" style="width: 8rem;">-->
            <div style="background-color: black; width: 7.5rem; height: 0.25rem; border-radius: 10%; position: absolute; top: 120%;"></div>
        </div>
        <p class="mt-5">At PortfolioBee, we exist to empower individuals through seamless portfolio creation and sharing. We believe
            in simplifying the journey for students, professionals, and everyone in between, ensuring that their unique
            professional narratives are effortlessly captured and showcased.</p>
    </div>

    <div class="goal container my-4 reveal hidden">
        <div class="row">
            <div class="col-12 col-md-6 my-2 ">
                <div class="d-flex flex-column justify-content-between rounded-4 hover-zoom"
                     style="background-color: black; color: white; padding: 2rem;  height: 100%;">
                    <div class="container goal-img">
                        <img src="./images/Group%20142%20(1).png" alt="rocket" class="img-fluid" style="height: 70%;">
                    </div>
                    <div class="container goals">
                        <h2>Our <span>Mission</span></h2>
                        <p style="margin-bottom: 0px;">
                            PortfolioBee's mission is to simplify professional self-presentation. Through our
                            subscription model, users enjoy flexibility in updating their portfolios. Additionally, our
                            tailor-made portfolio option transforms resumes into compelling narratives, ensuring a
                            standout professional identity with minimal effort.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 my-2 ">
                <div class="d-flex flex-column justify-content-between rounded-4 hover-zoom"
                     style="background-color: black; color: white; padding: 2rem; height: 100%;">
                    <div class="container goal-img">
                        <img src="./images/Group%20143.png" alt="telescope" class="img-fluid" style="height: 70%;">
                    </div>
                    <div class="container goals">
                        <h2>Our <span>Vision</span></h2>
                        <p style="margin-bottom: 0px;">
                            PortfolioBee aims to be the ultimate global hub for professional identity display. We strive
                            to effortlessly link talent with global opportunities, envisioning a diverse community where
                            each portfolio narrates a distinctive story. Our commitment to constant innovation empowers
                            individuals to confidently excel in their fields, enriching the professional landscape with
                            authenticity.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="find-plan  d-flex flex-column justify-content-center align-items-center my-5 reveal hidden" id="find-plan">
        <h1 class="text-center fw-bolder text-black">Find the perfect plan for you</h1>
        <div class="find-paragraph" style="width: 60%; text-align: center">
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit tortor eu egestas morbi sem vulputate etiam
                facilisis pellentesque ut quis.</p>
        </div>
        <div class="container d-flex flex-column flex-sm-column flex-md-column flex-lg-row justify-content-center align-items-center">
            <div class="monthly m-2">
                <button type="button" class="btn btn-dark" data-mdb-ripple-init style="color: #FFB2B2" onclick="showMonthlyPlans()">Monthly Plan
                </button>
            </div>
            <div class="annual m-2">
                <button type="button" class="btn btn-outline-dark" data-mdb-ripple-init style="color: black " onclick="showAnnualPlans()">Annual
                    Plan
                </button>
            </div>
        </div>
    </div>
    <div class="pricing container reveal hidden">
        <div class="row justify-content-center monthly" id="monthly">
            <div class="col-12 col-lg-4 my-4 ">
                <div class="d-flex flex-column justify-content-between zoom-effect"
                     style="box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.4); border-radius: 2%; padding: 2rem; height: 100%;">
                    <h3 class="text-black">Starter</h3>
                    <div class="d-flex align-items-baseline">
                        <h2 class="text-black">Rs 799</h2>
                        <h4 style="opacity: 70%">/Month</h4>
                    </div>
                    <div class="container d-flex justify-content-center px-0">
                        <hr style="width: 100%;">
                    </div>
                    <div class="container d-flex flex-column justify-content-center align-items-center">
                        <div class="pricing-description d-flex justify-content-between align-items-baseline">
                            <i class="far fa-circle-check me-2"></i>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="pricing-description d-flex justify-content-between align-items-baseline">
                            <i class="far fa-circle-check me-2"></i>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="pricing-description d-flex justify-content-between align-items-baseline">
                            <i class="far fa-circle-check me-2"></i>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="pricing-description d-flex justify-content-between align-items-baseline">
                            <i class="far fa-circle-check me-2"></i>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="buy-now">
                        <button type="button" class="btn btn-dark" data-mdb-ripple-init style="color: #F5BA79">Get
                            Started
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 my-4 ">
                <div class="d-flex flex-column justify-content-between zoom-effect"
                     style="box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.4); border-radius: 2%; padding: 2rem; height: 100%; background: linear-gradient(165.25deg, #FFB4AF 0%, #FFBB7B 36.5%, #7499FD 99.99%);">
                    <h3 class="text-black">Pro</h3>
                    <div class="d-flex align-items-baseline">
                        <h2 class="text-black">Rs 999</h2>
                        <h4 style="opacity: 70%">/Month</h4>
                    </div>
                    <div class="container d-flex justify-content-center px-0">
                        <hr style="width: 100%;">
                    </div>
                    <div class="container d-flex flex-column justify-content-center align-items-center">
                        <div class="pricing-description d-flex justify-content-between align-items-baseline">
                            <i class="far fa-circle-check me-2"></i>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="pricing-description d-flex justify-content-between align-items-baseline">
                            <i class="far fa-circle-check me-2"></i>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="pricing-description d-flex justify-content-between align-items-baseline">
                            <i class="far fa-circle-check me-2"></i>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="pricing-description d-flex justify-content-between align-items-baseline">
                            <i class="far fa-circle-check me-2"></i>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="buy-now">
                        <button type="button" class="btn btn-dark" data-mdb-ripple-init style="color:#F5BA79">Get
                            Started
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 my-4">
                <div class="d-flex flex-column justify-content-between zoom-effect"
                     style="box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.4); border-radius: 2%; padding: 2rem; height: 100%;">
                    <h3 class="text-black">Premium</h3>
                    <div class="d-flex align-items-baseline">
                        <h4 class="text-black">Rs 1799</h4>
                        <h5 style="opacity: 70%">/Month</h5>
                    </div>
                    <div class="container d-flex justify-content-center px-0">
                        <hr style="width: 100%;">
                    </div>
                    <div class="container d-flex flex-column justify-content-center align-items-center">
                        <div class="pricing-description d-flex justify-content-between align-items-baseline">
                            <i class="far fa-circle-check me-2"></i>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="pricing-description d-flex justify-content-between align-items-baseline">
                            <i class="far fa-circle-check me-2"></i>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="pricing-description d-flex justify-content-between align-items-baseline">
                            <i class="far fa-circle-check me-2"></i>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="pricing-description d-flex justify-content-between align-items-baseline">
                            <i class="far fa-circle-check me-2"></i>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="buy-now">
                        <button type="button" class="btn btn-dark" data-mdb-ripple-init style="color: #F5BA79">Get
                            Started
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center annual" id="annual">
            <div class="col-12 col-lg-6 my-4">
                <div class="d-flex flex-column justify-content-between zoom-effect"
                     style="box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.4); border-radius: 2%; padding: 2rem; height: 100%;">
                    <h3 class="text-black">Premium Pro</h3>
                    <div class="d-flex align-items-baseline">
                        <h4 class="text-black">Rs 14999</h4>
                        <h5 style="opacity: 70%">/Year</h5>
                    </div>
                    <div class="container d-flex justify-content-center px-0">
                        <hr style="width: 100%;">
                    </div>
                    <div class="container d-flex flex-column justify-content-center align-items-center">
                        <div class="pricing-description d-flex justify-content-between align-items-baseline">
                            <i class="far fa-circle-check me-2"></i>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="pricing-description d-flex justify-content-between align-items-baseline">
                            <i class="far fa-circle-check me-2"></i>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="pricing-description d-flex justify-content-between align-items-baseline">
                            <i class="far fa-circle-check me-2"></i>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="pricing-description d-flex justify-content-between align-items-baseline">
                            <i class="far fa-circle-check me-2"></i>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="buy-now">
                        <button type="button" class="btn btn-dark" data-mdb-ripple-init style="color: #F5BA79">Get
                            Started
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="mentions  d-flex flex-column justify-content-center align-items-center my-4 reveal hidden" id="mentions">
        <h2 class="text-black text-center my-5 fw-bolder">They love Portfoliobee,
            you will too!</h2>
        <div id="carouselExampleControls" class="carousel slide" data-mdb-ride="carousel" data-mdb-carousel-init
             style="width: 80%">
            <div class="carousel-inner  rounded-6 " style="box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.4);">
                <div class="carousel-item active">
                    <div class="card text-center" style="  padding: 1rem;">
                        <div class="display-pic d-flex justify-content-center">
                            <img src="images/Ellipse%203.png" alt="display_pic" class="img-fluid"
                                 style="width: 8rem; height: 8rem;">
                        </div>
                        <div class="card-body p-2">

                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor
                                interdum.</p>
                            <h3 class="card-title text-black">Rahul Sharma</h3>
                            <h6 class="card-title" style="opacity: 80%">Full Stack Developer</h6>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card text-center" style="  padding: 1rem;">
                        <div class="display-pic d-flex justify-content-center">
                            <img src="images/Ellipse%203.png" alt="display_pic" class="img-fluid"
                                 style="width: 8rem; height: 8rem;">
                        </div>
                        <div class="card-body p-2">

                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor
                                interdum.</p>
                            <h3 class="card-title text-black">Rahul Sharma</h3>
                            <h6 class="card-title" style="opacity: 80%">Full Stack Developer</h6>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card text-center" style="  padding: 1rem;">
                        <div class="display-pic d-flex justify-content-center">
                            <img src="images/Ellipse%203.png" alt="display_pic" class="img-fluid"
                                 style="width: 8rem; height: 8rem;">
                        </div>
                        <div class="card-body p-2">

                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor
                                interdum.</p>
                            <h3 class="card-title text-black">Rahul Sharma</h3>
                            <h6 class="card-title" style="opacity: 80%">Full Stack Developer</h6>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card text-center" style="  padding: 1rem;">
                        <div class="display-pic d-flex justify-content-center">
                            <img src="images/Ellipse%203.png" alt="display_pic" class="img-fluid"
                                 style="width: 8rem; height: 8rem;">
                        </div>
                        <div class="card-body p-2">

                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor
                                interdum.</p>
                            <h3 class="card-title text-black">Rahul Sharma</h3>
                            <h6 class="card-title" style="opacity: 80%">Full Stack Developer</h6>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card text-center" style="  padding: 1rem;">
                        <div class="display-pic d-flex justify-content-center">
                            <img src="images/Ellipse%203.png" alt="display_pic" class="img-fluid"
                                 style="width: 8rem; height: 8rem;">
                        </div>
                        <div class="card-body p-2">

                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor
                                interdum.</p>
                            <h3 class="card-title text-black">Rahul Sharma</h3>
                            <h6 class="card-title" style="opacity: 80%">Full Stack Developer</h6>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card text-center" style="  padding: 1rem;">
                        <div class="display-pic d-flex justify-content-center">
                            <img src="images/Ellipse%203.png" alt="display_pic" class="img-fluid"
                                 style="width: 8rem; height: 8rem;">
                        </div>
                        <div class="card-body p-2">

                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor
                                interdum.</p>
                            <h3 class="card-title text-black">Rahul Sharma</h3>
                            <h6 class="card-title" style="opacity: 80%">Full Stack Developer</h6>
                        </div>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls"
                    data-mdb-slide="prev">
                <i class="carousel-control-prev-icon fas fa-2x fa-angle-left gradient-icon"></i>
            </button>
            <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls"
                    data-mdb-slide="next">
                <i class="carousel-control-next-icon fas fa-2x fa-angle-right gradient-icon"></i>
            </button>
        </div>
    </div>
    <div class="faq  d-flex flex-column justify-content-center reveal hidden">
        <h2 class="text-center my-5 text-black fw-bolder">Frequently Asked Questions</h2>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item py-4">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button

                            class="accordion-button collapsed"
                            type="button"
                            data-mdb-toggle="collapse"
                            data-mdb-target="#flush-collapseOne"
                            aria-expanded="false"
                            aria-controls="flush-collapseOne"
                    >
                        How does PortfolioBee work?
                        <i class="fas fa-circle-chevron-down"></i>
                    </button>
                </h2>
                <div
                        id="flush-collapseOne"
                        class="accordion-collapse collapse"
                        aria-labelledby="flush-headingOne"
                        data-mdb-parent="#accordionFlushExample"
                >
                    <div class="accordion-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
                        et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                        sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                        craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                        heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="accordion-item py-4">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button

                            class="accordion-button collapsed"
                            type="button"
                            data-mdb-toggle="collapse"
                            data-mdb-target="#flush-collapseTwo"
                            aria-expanded="false"
                            aria-controls="flush-collapseTwo"
                    >
                        Is PortfolioBee free to use?
                        <i class="fas fa-circle-chevron-down"></i>
                    </button>
                </h2>
                <div
                        id="flush-collapseTwo"
                        class="accordion-collapse collapse"
                        aria-labelledby="flush-headingTwo"
                        data-mdb-parent="#accordionFlushExample"
                >
                    <div class="accordion-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
                        et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                        sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                        craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                        heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="accordion-item py-4">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button

                            class="accordion-button collapsed"
                            type="button"
                            data-mdb-toggle="collapse"
                            data-mdb-target="#flush-collapseThree"
                            aria-expanded="false"
                            aria-controls="flush-collapseThree"
                    >
                        Can I customize my portfolio?
                        <i class="fas fa-circle-chevron-down"></i>
                    </button>
                </h2>
                <div
                        id="flush-collapseThree"
                        class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThree"
                        data-mdb-parent="#accordionFlushExample"
                >
                    <div class="accordion-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
                        et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                        sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                        craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                        heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="accordion-item py-4">
                <h2 class="accordion-header" id="flush-headingFour">
                    <button

                            class="accordion-button collapsed"
                            type="button"
                            data-mdb-toggle="collapse"
                            data-mdb-target="#flush-collapseFour"
                            aria-expanded="false"
                            aria-controls="flush-collapseFour"
                    >
                        How can I share my portfolio?
                        <i class="fas fa-circle-chevron-down"></i>
                    </button>
                </h2>
                <div
                        id="flush-collapseFour"
                        class="accordion-collapse collapse"
                        aria-labelledby="flush-headingFour"
                        data-mdb-parent="#accordionFlushExample"
                >
                    <div class="accordion-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
                        et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                        sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                        craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                        heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="connect  my-5 reveal hidden" id="connect">
        <h2 class="text-black text-center my-5 fw-bolder">Get in contact with our team!</h2>
        <div class="row">
            <div class="col-12 col-lg-4 contact-info py-2">

                <div class="card contact-card" style="background-color: black; color: white; padding: 2rem; height: 100%;">
                    <h2>Contact Information</h2>
                    <p class="mb-4">Say something to start a live chat!</p>
                    <div class="pricing-description d-flex justify-content-start align-items-baseline my-4">
                        <i class="fas fa-phone me-4"></i>
                        <p class="mb-0">+1012 3456 789</p>
                    </div>
                    <div class="pricing-description d-flex justify-content-start align-items-baseline my-4">
                        <i class="fas fa-envelope me-4"></i>
                        <p class="mb-0">demo@gmail.com</p>
                    </div>
                    <div class="pricing-description d-flex justify-content-start align-items-baseline my-4">
                        <i class="fas fa-location-dot me-4"></i>
                        <p class="mb-0" style="width: 60%">132 Dartmouth Street Boston, Massachusetts 02156 United
                            States</p>
                    </div>
                </div>


            </div>
            <div class="col-12 col-lg-8 connect-form py-2">
                <!--                                <div class="card my-2 p-2" style="background-color: #FFE164; color: black">-->
                <!--                                    <h2 class="text-center">Got Questions?</h2>-->
                <!--                                    <h2 class="text-center mb-0"> We're Here to Help!</h2>-->
                <!--                                </div>-->
                <form class="connect-form-structure" id="connect-form"
                      style="background-color: white; color: black; padding-top: 1rem;  height: 100%;">
                    <div class="d-flex justify-content-between mb-5">
                        <div class="form-outline" data-mdb-input-init style="width: 45%;">
                            <!--                            <label class="form-label" for="first_name">First Name</label>-->
                            <input type="text" id="first_name" name="first_name" class="border-0 w-100" style="border-bottom: 1px solid black !important;" placeholder="First Name"/>
                        </div>
                        <div class="form-outline" data-mdb-input-init style="width: 45%;">
                            <input type="text" id="last_name" name="last_name" class="border-0 w-100" style="border-bottom: 1px solid black !important;" placeholder="Last Name"/>
                            <!--                            <label class="form-label" for="last_name">Last Name</label>-->
                        </div>
                    </div>
                    <div class="d-flex justify-content-between my-5">
                        <div class="form-outline" data-mdb-input-init style="width: 45%;">
                            <input type="email" id="email" name="email" class="border-0 w-100" style="border-bottom: 1px solid black !important;" placeholder="Email"/>
                            <!--                            <label class="form-label" for="email">Email</label>-->
                        </div>
                        <div class="form-outline" data-mdb-input-init style="width: 45%;">
                            <input type="tel" id="phone" name="phone" class="border-0 w-100" style="border-bottom: 1px solid black !important;" placeholder="Phone No."/>
                            <!--                            <label class="form-label" for="phone">Phone No.</label>-->
                        </div>
                    </div>
                    <h5 class="mt-2">SelectSubject?</h5>
                    <div class="radio-btn row">
                        <div class="form-check col-6 col-md-3 d-flex align-items-center" style="padding-left: 2rem;">
                            <input class="form-check-input me-2" type="radio" name="inquiry_type" id="inlineRadio1" value="General Inquiry"/>
                            <label class="form-check-label" for="inlineRadio1"> General Inquiry </label>
                        </div>
                        <div class="form-check col-6 col-md-3 d-flex align-items-center" style="padding-left: 2rem;">
                            <input class="form-check-input me-2" type="radio" name="inquiry_type" id="inlineRadio2" value="Feedback"/>
                            <label class="form-check-label" for="inlineRadio2"> Feedback </label>
                        </div>
                        <div class="form-check col-6 col-md-3 d-flex align-items-center" style="padding-left: 2rem;">
                            <input class="form-check-input me-2" type="radio" name="inquiry_type" id="inlineRadio3" value="Support"/>
                            <label class="form-check-label" for="inlineRadio3"> Support </label>
                        </div>
                        <div class="form-check col-6 col-md-3 d-flex align-items-center" style="padding-left: 2rem;">
                            <input class="form-check-input me-2" type="radio" name="inquiry_type" id="inlineRadio4" value="Other"/>
                            <label class="form-check-label" for="inlineRadio4"> Other </label>
                        </div>
                    </div>

                    <div class="form-outline mt-5" data-mdb-input-init>
                        <textarea class="textarea-custom-border w-100" id="message" name="message" rows="4" placeholder="Write your message..."></textarea>
                        <!--                        <label class="form-label" for="message">write your message ...</label>-->
                    </div>
                    <!--                    <div class="d-flex justify-content-end align-content-end">-->
                    <!---->
                    <!--                    </div>-->
                    <div class="send-msg d-flex justify-content-end" style="margin-top: 2.5rem;">
                        <button type="button" class="btn btn-dark" data-mdb-ripple-init style="color: #FFB2B2" onclick="sendContactDetails()">Send
                            Message
                        </button>
                    </div>
                </form>


            </div>
        </div>
    </div>
    <div class="foot reveal hidden" style="margin-top: 7rem;">
        <div class="rounded-4" style="background-color: black; width: 100%">
            <div class="credits ">
                <div class=" upper-nav d-flex flex-column flex-sm-column flex-md-row justify-content-around align-items-center py-4 m-0">
                    <div class="logo-img d-flex justify-content-start  align-items-center">
                        <img src="images/path0%20(1).png" alt="Logo" class="img-fluid me-1">
                        <h5 class="mb-0 ps-1 gradient-text">PortfolioBee</h5>
                    </div>
                    <div class="d-flex flex-column flex-sm-row justify-content-around align-items-center mb-sm-3 mb-md-0"
                         style="width: 40%">

                        <a class="nav-link mb-3 mb-sm-0 fw-semibold zoom-effect" aria-current="page" href="#about-us"
                           style="color: #FFB4AF">About</a>
                        <a class="nav-link mb-3 mb-sm-0 fw-semibold zoom-effect" href="#features" style="color: #F5BA79">Feature</a>
                        <a class="nav-link mb-4 mb-sm-0 fw-semibold zoom-effect" href="#find-plan"
                           style="color: #7199FF">Pricing</a>


                    </div>
                    <div class="media-links d-flex justify-content-between" style="width: 15%; color: white;">
                        <i class="fab fa-instagram fa-lg zoom-effect-icon" style="cursor: pointer"></i>
                        <i class="fab fa-linkedin-in fa-lg zoom-effect-icon" style="cursor: pointer"></i>
                        <i class="fab fa-twitter fa-lg zoom-effect-icon" style="cursor: pointer"></i>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center px-0">
                <hr style="width: 90%; color: white;">
            </div>
            <div class="copyright d-flex flex-column flex-sm-column flex-md-row justify-content-center justify-content-sm-center justify-content-md-between "
                 style="padding: 2rem 6rem 2rem 6rem;">
                <p class="text-center text-sm-center text-md-start fw-semibold text-white">2024 | Licenses</p>
                <p class="text-center text-sm-center text-md-end fw-semibold text-white">Developed by Wooble</p>
            </div>
        </div>
    </div>
    <div
            class="toast fade mx-auto"
            id="basic-toast"
            role="alert"
            aria-live="assertive"
            aria-atomic="true"
            data-mdb-toast-init
            data-mdb-autohide="true"
            data-mdb-delay="2000"
            data-mdb-position="bottom-center"
            data-mdb-append-to-body="true"
            data-mdb-stacking="true"
            data-mdb-width="350px"
            data-mdb-color=""
    >
        <div class="toast-header" id="toast-header">
            <strong class="me-auto" id="toast-head"></strong>

            <button type="button" class="btn-close" data-mdb-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body" id="toast-body"></div>
    </div>

</div>

<!-- End your project here-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
<script type="text/javascript" src="https://portfoliobee.com/js/mdb.min.js"></script>
<script type="text/javascript" src="https://portfoliobee.com/plugins/js/all.min.js"></script>
<script type="text/javascript" src="https://portfoliobee.com/js/modules/alert.min.js"></script>
<script type="text/javascript" src="js/mdb.umd.min.js"></script>

<!-- Custom scripts -->
<script type="text/javascript">

    // script.js

    document.addEventListener('scroll', function() {
        const navbar = document.getElementById('nav-head');
        const buttonContainer = document.getElementById('navbar-button-container');
        const stickyOffset = navbar.offsetTop;

        if (window.scrollY > stickyOffset) {
            // Make navbar transparent and show button
            navbar.classList.add('transparent');
            buttonContainer.classList.add('visible');
        } else {
            // Revert navbar background and hide button
            navbar.classList.remove('transparent');
            buttonContainer.classList.remove('visible');
        }
    });

    // script.js

    document.addEventListener('DOMContentLoaded', () => {
        const reveals = document.querySelectorAll('.reveal');
        let lastScrollTop = 0; // Track last scroll position

        const observerOptions = {
            root: null, // use the viewport as the root
            rootMargin: '0px',
            threshold: 0.1 // trigger when 10% of the element is visible
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                } else {
                    entry.target.classList.remove('visible');
                }
            });
        }, observerOptions);

        reveals.forEach(reveal => {
            observer.observe(reveal);
        });

        // Optional: Add scroll event listener if needed
        window.addEventListener('scroll', () => {
            const scrollTop = window.scrollY || document.documentElement.scrollTop;
            const direction = scrollTop > lastScrollTop ? 'down' : 'up';
            lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling

            reveals.forEach(reveal => {
                const rect = reveal.getBoundingClientRect();
                const inViewport = rect.top < window.innerHeight && rect.bottom >= 0;
                if (direction === 'down' && inViewport) {
                    reveal.classList.add('visible');
                } else if (direction === 'up' && !inViewport) {
                    reveal.classList.remove('visible');
                }
            });
        });
    });


    function sendContactDetails(){
        event.preventDefault();
        let first_name=document.getElementById('first_name').value
        let last_name=document.getElementById('last_name').value
        let email=document.getElementById('email').value
        let phone=document.getElementById('phone').value
        let selectedRadio = document.querySelector('input[name="inquiry_type"]:checked');
        let radios = selectedRadio ? selectedRadio.value : '';
        let message=document.getElementById('message').value
        let formData={
            first_name: first_name,
            last_name: last_name,
            email: email,
            phone: phone,
            inquiry_type: radios,
            message: message
        }
        console.log("FormData", formData)
        $.ajax({
            url: ('ajax/usersContact.php'),
            type: 'POST',
            data: formData,
            success: function (response) {
                try {
                    // Get the Toast element and set the message
                    let toastElement = document.getElementById('basic-toast');
                    let toastBody = document.getElementById('toast-body');
                    let toastHeader=document.getElementById('toast-head');
                    let toastHead=document.getElementById('toast-header');


                    console.log("Response is", response)
                    let result = JSON.parse(response);
                    console.log("Result is" ,result);
                    // Set the message
                    toastBody.textContent = result.message;
                    toastHeader.textContent=result.status
                    if (result.status === 'Success') {
                        if (toastElement.classList.contains('toast-warning')){
                            toastElement.classList.replace('toast-warning', 'toast-success');
                            toastElement.setAttribute('data-mdb-color', 'success');
                            toastHead.classList.replace('toast-warning', 'toast-success');
                        }
                        else{
                            toastElement.classList.add('toast-success');
                            toastElement.setAttribute('data-mdb-color', 'success');
                            toastHead.classList.add('toast-success');
                        }
                        document.getElementById('first_name').value = '';
                        document.getElementById('last_name').value = '';
                        document.getElementById('email').value = '';
                        document.getElementById('phone').value = '';
                        let radios = document.querySelectorAll('input[name="inquiry_type"]');
                        radios.forEach(radio => radio.checked = false);
                        document.getElementById('message').value = '';
                        console.log("Message", result.message);
                    } else {
                        if (toastElement.classList.contains('toast-success')){
                            toastElement.classList.replace('toast-success',  'toast-warning');
                            toastElement.setAttribute('data-mdb-color', 'warning');
                            toastHead.classList.replace('toast-success',  'toast-warning');
                        }
                        else{
                            toastElement.classList.add( 'toast-warning');
                            toastElement.setAttribute('data-mdb-color', 'warning');
                            toastHead.classList.add( 'toast-warning');
                        }
                        console.log(result.message);
                    }
                    // Get the Toast instance and show it
                    let toast = new mdb.Toast(toastElement);
                    toast.show();
                }

                catch(e){
                    // Handle errors in case of JSON parsing failure or other issues
                    let toastElement = document.getElementById('basic-toast');
                    let toastBody = document.getElementById('toast-body');
                    let toastHeader=document.getElementById('toast-head');
                    let toastHead=document.getElementById('toast-header');

                    // Set a generic error message
                    toastBody.textContent = 'Error processing your request.';
                    toastHeader.textContent='Server error'

                    // Set the color to warning for unexpected errors
                    if (toastElement.classList.contains('toast-success')){
                        toastElement.classList.replace('toast-success',  'toast-warning');
                        toastElement.setAttribute('data-mdb-color', 'warning');
                        toastHead.classList.replace('toast-success',  'toast-warning');
                    }
                    else{
                        toastElement.classList.add( 'toast-warning');
                        toastElement.setAttribute('data-mdb-color', 'warning');
                        toastHead.classList.add( 'toast-warning');
                    }

                    // Get the Toast instance and show it
                    let toast = new mdb.Toast(toastElement);
                    toast.show();
                    console.log("Error processing your request.", e);
                    document.getElementById('first_name').value = '';
                    document.getElementById('last_name').value = '';
                    document.getElementById('email').value = '';
                    document.getElementById('phone').value = '';
                    let radios = document.querySelectorAll('input[name="inquiry_type"]');
                    radios.forEach(radio => radio.checked = false);
                    document.getElementById('message').value = '';
                }
            }
        })
    }
    function showMonthlyPlans(){
        let monthlyPlans = document.getElementById('monthly');
        let annualPlans = document.getElementById('annual');
        monthlyPlans.style.display='flex';
        annualPlans.style.display='none'
    }
    function showAnnualPlans(){
        let monthlyPlans = document.getElementById('monthly');
        let annualPlans = document.getElementById('annual');
        monthlyPlans.style.display='none';
        annualPlans.style.display='flex';
    }
    document.addEventListener('DOMContentLoaded', function() {
        showMonthlyPlans();
    });
</script>
</body>
</html>

