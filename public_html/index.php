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

    <!--=========================================== CSS FILES ===========================================-->
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/less/main.css">

    <!-- Custom Fonts -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

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
<div id="mission-statement">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <h1>MISSION Statement: Build Something MEANINGFUL</h1>
            </div>
            <div class="col-md-6 col-md-offset-3">
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
<div id="what-we-do">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <h1>What We Do</h1>
            </div>
            <div class="col-md-4">
                <h2>UX/UI Design</h2>
            </div>
            <div class="col-md-4">
                <h2>Web Design</h2>
            </div>
            <div class="col-md-4">
                <h2>Marketing</h2>
            </div>
            <hr>
        </div>
    </div>
</div>
<!-- End of of What We Do -->
<!-- Beginning of Portfolio -->
<div id="portfolio">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <h1>Portfolio</h1>
            </div>
            <div class="col-md-4">
                <a class="project" target="_blank" href="#">
                    <img class="img-responsive" src="assets/img/portfolio/preview.png">
                    <h4>Preview 1</h4>
                    <small>Description</small>
                </a>
            </div>
            <div class="col-md-4">
                <a class="project" target="_blank" href="#">
                    <img class="img-responsive" src="assets/img/portfolio/preview.png">
                    <h4>Preview 2</h4>
                    <small>Description</small>
                </a>
            </div>
            <div class="col-md-4">
                <a class="project" target="_blank" href="#">
                    <img class="img-responsive" src="assets/img/portfolio/preview.png">
                    <h4>Preview 3</h4>
                    <small>Description</small>
                </a>
            </div>
            <div class="col-md-4">
                <a class="project" target="_blank" href="#">
                    <img class="img-responsive" src="assets/img/portfolio/preview.png">
                    <h4>Preview 4</h4>
                    <small>Description</small>
                </a>
            </div>
            <div class="col-md-4">
                <a class="project" target="_blank" href="#">
                    <img class="img-responsive" src="assets/img/portfolio/preview.png">
                    <h4>Preview 5</h4>
                    <small>Description</small>
                </a>
            </div>
            <div class="col-md-4">
                <a class="project" target="_blank" href="#">
                    <img class="img-responsive" src="assets/img/portfolio/preview.png">
                    <h4>Preview 6</h4>
                    <small>Description</small>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End of Portfolio -->

<!-- Beginning of Student Application -->
<div id="student-application">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <h2>Developers Application
                    <br>
                    <small>Looking to make a difference? Join the Developer's Foundation team!</small>
                </h2>
                <a target="_blank"
                   href="//docs.google.com/forms/d/e/1FAIpQLScbcCa9UQ3Sd0YluXTNGqyWOSPFtxeB8fcHGflkYnSSPUXSwg/viewform">
                    <button type="button" class="btn btn-primary">APPLY</button>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End of Student Application -->

<!-- Beginning of Client Application -->
<div id="client-application">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <h2>Non-Profits Application
                    <br>
                    <small>Help us help you! Let a team of proven developers create a beautiful website for your NPO!
                    </small>
                </h2>
                <a target="_blank"
                   href="https://docs.google.com/forms/d/12kYXI8S7CoeBhEuf7ekzvFj3IuNinnBRhOVS9m4BKjg/viewform">
                    <button type="button" class="btn btn-primary">APPLY</button>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End of Client Application -->

<!-- Beginning of Exec -->
<div id="exec-team">
    <div class="container">
        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
                <h1>Our Team</h1>
            </div>
        </div>
        <hr>
        <!-- Team Members Row -->
        <div class="row">
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-responsive" src="./assets/img/team/HarrisonC.jpg" alt="">
                <h3>Harrison Chow
                    <br>
                    <small>President</small>
                </h3>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-responsive" src="./assets/img/team/MichaelP.jpg" alt="">
                <h3>Michael Park
                    <br>
                    <small>VP Tech</small>
                </h3>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-responsive" src="./assets/img/team/ChristinaC.jpg" alt="">
                <h3>Christina Chan
                    <br>
                    <small>VP Design</small>
                </h3>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-responsive" src="./assets/img/team/AnwarJ.jpg" alt="">
                <h3>Anwar Jeffrey
                    <br>
                    <small>VP Finance & Legal</small>
                </h3>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-responsive" src="./assets/img/team/Placeholder.jpg" alt="">
                <h3>Eun Su Shum
                    <br>
                    <small>Techincal Product Manager</small>
                </h3>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-responsive" src="./assets/img/team/Placeholder.jpg" alt="">
                <h3>Paul Salvatore
                    <br>
                    <small>Developer</small>
                </h3>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-responsive" src="./assets/img/team/Placeholder.jpg" alt="">
                <h3>Alex Madrzyk
                    <br>
                    <small>Developer</small>
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
