<!DOCTYPE html>
<html lang="en">

<head>

    <!--=========================================== WEBPAGE METADATA ====================================-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Developers' Foundation</title>
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="assets/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--=========================================== CSS FILES ===========================================-->
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <!-- Custom Fonts -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/less/main.css">

    <!-- TODO: Move the js to footer please :) -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!--=========================================== MAIN FILES ==========================================-->
    <?php
        $page = "index-page";
        $hasGmap = true;
        include_once "html_elements/triangleLanderAndNav.php";
    ?>

<!-- Begin of Contents -->
<!-- Beginning of Mission Statement -->
<div id="mission-statement" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>MISSION Statement: Build Something MEANINGFUL</h1>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <p>
                    We want to help underserved communities to become sustainably independent, through the leverage of
                    technology.
                    <br>
                    We are group of students and aspiring designers/developers from The University of Western Ontario
                    which serves as a subteam for Developers' Foundation.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- End of Mission Statement -->
<!-- Beginning of What We Do -->
<div id="our-story" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Our Story</h1>
            </div>
            <div class="col-md-4">
                <p class="description-header"><i class="fa fa-user" aria-hidden="true"></i>Current Efforts</p>
                <p class="description">As of January 2017, Developers' Foundation has successfully expanded into three
                    campuses, at Western University, Queen's and UNICAMP (Brazil). Having successfully
                    chartered Western's chapter, Developers' Foundation has developed over a dozen
                    functional websites for Student and Community organizations.</p>
            </div>
            <div class="col-md-4">
                <p class="description-header"> <i class="fa fa-code" aria-hidden="true"></i> Future Efforts</p>
                <p class="description">Throughout the first semester your clients will concentrate solely on catering to Student
                    organizations and charities/NPO. During the second semester of this school year, HQ will
                    recommend to include one small business client per month. This will be DF’s main source
                    of financial support. On average, we expected each chapter to work on at least 3 clients per
                    month. Another HQ initiative that we super excited about, is to increase the current number
                    of chapters, from 3 to 6 by the end of the second semester.</p>
            </div>
            <div class="col-md-4">
                <p class="description-header"> <i class="fa fa-archive" aria-hidden="true"></i> Content Management System (CMS)</p>
                <p class="description">We have also built our very own CMS (think wordpress), to make it easier for both our clients
                    and us when it comes to content maintenance. We believe this has a huge value in also
                    building an ecosystem where NPO and charities can rely on.</p>
            </div>
        </div>
    </div>
</div>
<!-- End of of What We Do -->
<!-- Beginning of Portfolio -->
<div id="portfolio" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Portfolio</h1>
            </div>
            <div class="col-md-4 col-sm-12 text-center">
                <a class="project" target="_blank" href="http://westerncyber.club">
                    <img class="img-responsive" src="assets/img/portfolio/westerncyber.jpg">
                    <h4>Western Cyber Security</h4>
                    <small>Description</small>
                </a>
            </div>
            <div class="col-md-4 col-sm-12 text-center">
                <a class="project" target="_blank" href="https://african-students-association.herokuapp.com">
                    <img class="img-responsive" src="assets/img/portfolio/asa.jpg">
                    <h4>African Students Association</h4>
                    <small>Description</small>
                </a>
            </div>
            <div class="col-md-4 col-sm-12 text-center">
                <a class="project" target="_blank" href="http://www.kemsclub.com/">
                    <img class="img-responsive" src="assets/img/portfolio/kems.jpg">
                    <h4>Kings EconoMath Society</h4>
                    <small>Description</small>
                </a>
            </div>
            <div class="col-md-4 col-sm-12 text-center">
                <a class="project" target="_blank" href="https://amnesty.herokuapp.com">
                    <img class="img-responsive" src="assets/img/portfolio/amnesty.png">
                    <h4>Amnesty at Western</h4>
                    <small>Description</small>
                </a>
            </div>
            <div class="col-md-4 col-sm-12 text-center">
                <a class="project" target="_blank" href="https://csayork.herokuapp.com/">
                    <img class="img-responsive" src="assets/img/portfolio/yorkcsa.jpg">
                    <h4>Caribbean Students' Association</h4>
                    <small>Description</small>
                </a>
            </div>
            <div class="col-md-4 col-sm-12 text-center">
                <a class="project" target="_blank" href="https://nigerian.herokuapp.com/">
                    <img class="img-responsive" src="assets/img/portfolio/nigerian.png">
                    <h4>Nigerian Association of London and Area</h4>
                    <small>Description</small>
                </a>
            </div>
            <div class="col-md-4 col-sm-12 text-center">
                <a class="project" target="_blank" href="https://borderless-devfoundation.herokuapp.com">
                    <img class="img-responsive" src="assets/img/portfolio/borderless.png">
                    <h4>Borderless</h4>
                    <small>Description</small>
                </a>
            </div>
            <div class="col-md-4 col-sm-12 text-center">
                <a class="project" target="_blank" href="#">
                    <img class="img-responsive" src="assets/img/portfolio/preview.png">
                    <h4>Coming Soon</h4>
                    <small>Description</small>
                </a>
            </div>
            <div class="col-md-4 col-sm-12 text-center">
                <a class="project" target="_blank" href="#">
                    <img class="img-responsive" src="assets/img/portfolio/preview.png">
                    <h4>Coming Soon</h4>
                    <small>Description</small>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End of Portfolio -->

<!-- Applications -->
<div id="application" class="full-section">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1>APPLY NOW</h1>
            </div>
            <div class="col-md-6 parent-zoom">
                <a href="https://www.google.ca/" target="_blank" class="hover-zoom" style="background-image: url(./assets/img/join/join1.jpg)">
                  <h2>
                    Non-Profit Organizations Application
                  </h2>
                </a>
            </div>
            <div class="col-md-6 parent-zoom">
                <a href="https://www.google.ca/" target="_blank" class="hover-zoom" style="background-image: url(./assets/img/join/join2.jpg)">
                  <h2>
                    Developers Application
                  </h2>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End of Applications -->
<!-- Beginning of Exec -->
<div id="exec-team" class="section">
    <div class="container">
        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
                <h1>Our Team</h1>
            </div>
        </div>
        <!-- Team Members Row -->
        <div class="row">
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-responsive" src="./assets/img/team/HarrisonC.jpg" alt="">
                <h3>Harrison Chow
                    <br><small>President</small>
                </h3>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-responsive" src="./assets/img/team/MichaelP.jpg" alt="">
                <h3>Michael Park
                    <br><small>VP Tech</small>
                </h3>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-responsive" src="./assets/img/team/ChristinaC.jpg" alt="">
                <h3>Christina Chan
                    <br><small>VP Design</small>
                </h3>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-responsive" src="./assets/img/team/AnwarJ.jpg" alt="">
                <h3>Anwar Jeffrey
                    <br><small>VP Finance & Legal</small>
                </h3>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-responsive" src="./assets/img/team/Placeholder.jpg" alt="">
                <h3>Eun Su Shum
                    <br><small>Techincal Product Manager</small>
                </h3>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-responsive" src="./assets/img/team/Placeholder.jpg" alt="">
                <h3>Paul Salvatore
                    <br><small>Developer</small>
                </h3>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-responsive" src="./assets/img/team/Placeholder.jpg" alt="">
                <h3>Alex Madrzyk
                    <br><small>Developer</small>
                </h3>
            </div>
        </div>
    </div>
</div>
<!-- End of Exec -->
<!-- End of Contents -->

<?php
include_once "html_elements/footer.php";
include_once "html_elements/contactUsModal.php";
?>


<!--=========================================== JS SCRIPTS ==========================================-->
<!-- jQuery -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>

<!-- Bootstrap Core JavaScript -->
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!-- Plugin JavaScript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<!-- <script src="js/jqBootstrapValidation.js"></script>-->
<!-- <script src="js/contact_me.js"></script>-->

<!-- Theme JavaScript -->
<script src="assets/js/freelancer.js"></script>
<script src="assets/js/material.min.js"></script>
<script src="assets/js/material-kit.js" type="text/javascript"></script>

<!-- Additional JS Files-->
<script src="assets/js/nob.js" type="text/javascript"></script>
<script src="assets/js/main.js" type="text/javascript"></script>

<!-- Google Maps API File -->
<script src="//maps.google.com/maps/api/js?key=AIzaSyBjGkX6gbOjiM6Ewg3cTeqGyK25z6YFdqQ&callback=loadedGmap" async defer>
    loadedGmap();
</script>
</body>

</html>
