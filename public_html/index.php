<!DOCTYPE html>
<html lang="en">

<head>


    <!--=========================================== WEBPAGE METADATA ====================================-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta property="og:title" content="Developers' Foundation Western Chapter" />
    <meta property="og:site_name" content="Developers' Foundation" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://western.developers.foundation" />
    <meta property="og:image" content="https://western.developers.foundation/assets/img/background/banner.png" />
    <meta property="og:description" content="Building something meaningful." />
    <meta property="fb:app_id" content="1107893785918456" />
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
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Palanquin:200,400,600,700" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/less/main.css">

</head>

<body>
    <!--=========================================== MAIN FILES ==========================================-->
    <?php
        $page = "index-page";
        $hasGmap = true;
        include_once "html_elements/nextButton.php";
        include_once "html_elements/triangleLanderAndNav.php";
        include_once "html_elements/missionStatement.php";
        include_once "html_elements/ourStory.php";
        include_once "html_elements/portfolio.php";
        include_once "html_elements/applicationSection.php";
        include_once "html_elements/execTeam.php";
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

<!-- Theme JavaScript -->
<script src="assets/js/freelancer.min.js"></script>
<!--<script src="assets/js/material.min.js"></script>-->
<!--<script src="assets/js/material-kit.js" type="text/javascript"></script>-->

<!-- Additional JS Files-->
<!--<script src="assets/js/nob.js" type="text/javascript"></script>-->
<script src="assets/js/main.js" type="text/javascript"></script>


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Google Maps API File -->
<!--<script src="//maps.google.com/maps/api/js?key=AIzaSyBjGkX6gbOjiM6Ewg3cTeqGyK25z6YFdqQ&callback=loadedGmap" async defer>-->
<!--    loadedGmap();-->
<!--</script>-->

</body>
</html>
