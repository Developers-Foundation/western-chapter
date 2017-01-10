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

        include_once "html_elements/missionStatement.php";
        include_once "html_elements/ourStory.php";
        include_once "html_elements/portfolio.php";
    ?>


<!-- Applications -->
    <!--
<div id="application" class="full-height-fourth">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="apply-text-height">APPLY NOW</h1>
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
<div id="exec-team" class="section full-height-fifth">
    <div class="container full-height-container-fifth">
        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
                <h1>Our Team</h1>
            </div>
        </div>
        <!-- Team Members Row -->
        <div class="row">
            <div class="col-sm-3 text-center">
                <img class="img-responsive" src="./assets/img/team/HarrisonC.jpg" alt="">
                <h3>Harrison Chow
                    <br><small>President</small>
                </h3>
            </div>
            <div class="col-sm-3 text-center">
                <img class="img-responsive" src="./assets/img/team/MichaelP.jpg" alt="">
                <h3>Michael Park
                    <br><small>VP Tech</small>
                </h3>
            </div>
            <div class="col-sm-3 text-center">
                <img class="img-responsive" src="./assets/img/team/ChristinaC.jpg" alt="">
                <h3>Christina Chan
                    <br><small>VP Design</small>
                </h3>
            </div>
            <div class="col-sm-3 text-center">
                <img class="img-responsive" src="./assets/img/team/AnwarJ.jpg" alt="">
                <h3>Anwar Jeffrey
                    <br><small>VP Finance & Legal</small>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 text-center">
                <img class="img-responsive" src="./assets/img/team/Placeholder.jpg" alt="">
                <h3>Eun Su Shim
                    <br><small>Techincal Product Manager</small>
                </h3>
            </div>
            <div class="col-sm-3 text-center">
                <img class="img-responsive" src="./assets/img/team/Placeholder.jpg" alt="">
                <h3>Paul Salvatore
                    <br><small>Developer</small>
                </h3>
            </div>
            <div class="col-sm-3 text-center">
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

<!-- Resizes Application section to be fullscreen-->
<script>
$(document).ready(function() {
    function setHeight() {
        windowHeight = $(window).innerHeight();
        // .outerHeight does not seem to pick up the 30 margin, adding it manually
        var clientHeight = $(".apply-text-height").outerHeight() + 30;
        // If the height of the navbar is changed, update value here
        // This is a static value to prevent divs from resizing when scrolling down
        var navHeight = 40;

        if (window.matchMedia('(max-width: 992px)').matches) {
            $('.hover-zoom').css('height', (windowHeight - clientHeight - navHeight)/2);

            $('.full-height-third').css({
                'margin-top': 70,
                'margin-bottom': 70
            });
        } else {
            $('.full-height-fourth').css('max-height', windowHeight - navHeight);
            $('.hover-zoom').css('height', windowHeight - clientHeight - navHeight);

            var containerHeight3 = $(".full-height-container-third").height();
            $('.full-height-third').css({
                'margin-top': (windowHeight - navHeight - containerHeight3) / 2,
                'margin-bottom': (windowHeight - navHeight - containerHeight3) / 2
            });
        }

        if (window.matchMedia('(max-width: 992px)').matches) {
            console.log("asdf");
        } else {
            console.log("fdsa");
        }

        var containerHeight1 = $(".full-height-container-first").height();
        $('.full-height-first').css({
            'margin-top': (windowHeight - navHeight - containerHeight1) / 2,
            'margin-bottom': (windowHeight - navHeight - containerHeight1) / 2
        });
        var containerHeight2 = $(".full-height-container-second").height();
        $('.full-height-second').css({
            'margin-top': (windowHeight - navHeight - containerHeight2) / 2,
            'margin-bottom': (windowHeight - navHeight - containerHeight2) / 2
        });
        var containerHeight4 = $(".full-height-container-fifth").height();
        $('.full-height-fifth').css({
            'margin-top': (windowHeight - navHeight - containerHeight4) / 2,
            'margin-bottom': (windowHeight - navHeight - containerHeight4) / 2
        });
    };
    setHeight();

    $(window).resize(function() {
        setHeight();
    });
});
</script>

</body>
</html>
