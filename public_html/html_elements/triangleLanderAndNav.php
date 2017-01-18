<!--

This module provides a gallery of triangular images that can be tessellated together.
This module relies on code in main.js in order to properly function with resizing windows.

-->


<nav class="hidden navbar navbar-default navbar-fixed-top" id="triangleNav">

    <div class="row" id="triLabels">
        <div class="triLbl text-center hidden" id="triLbl1">Our Story</div>
        <div class="triLbl text-center hidden" id="triLbl2">Portfolio</div>
        <div class="triLbl text-center hidden" id="triLbl3">Application</div>
        <div class="triLbl text-center hidden" id="triLbl4">Our Team</div>
    </div>


    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1000" height="200" id="svg1">
        <defs>

            <!-- Clip paths are used to create the triangles. Any polygon can be created by altering the points -->

            <!-- Equilateral Triangle -->
            <clipPath id="clip1">
                <polygon points="50,0 0,100 100,100" class="poly1">  <!-- Coordinate system is x,y with 0,0 being the top left corner -->
            </clipPath>

            <!-- Upside down Equilateral Triangle -->
            <clipPath id="clip2">
                <polygon points="0,0 100,0 50,100" class="poly2" fill="black">
            </clipPath>

            <!-- Right Angle Triangle (Right) (unused) -->
            <clipPath id="clip3">
                <polygon points="50,0 50,100 0,100" class="poly3">
            </clipPath>
            <!-- Right Angle Triangle (Left) (unused) -->
            <clipPath id="clip4">
                <polygon points="50,0 50,100 100,100" class="poly4">
            </clipPath>

            <!-- Square Side Triangle (Left) -->
            <clipPath id="clip5">
                <polygon points="0,0 50,0 100,100 0,100" class="poly5">
            </clipPath>

            <!-- Square Side Triangle (Right) -->
            <clipPath id="clip6">
                <polygon points="100,0 100,100 0,100 50,0" class="poly6">
            </clipPath>

        </defs>

        <!-- We create each image and assign the required variables.
        Important variable to note are the clip-path (to create the triangle) and translate (so they aren't all overlapping) -->
        <image xlink:href="assets/img/stock/stockIm4.min.png" clip-path="url(#clip5)" class="im1" id="landerImage1"></image>
        <polygon class="poly5 im1 scrolledNav" fill="#4F2683"></polygon>

        <image xlink:href="assets/img/stock/stockIm1.min.png" clip-path="url(#clip2)" class="im2" id="landerImage2"></image>
        <polygon class="poly2 im2 scrolledNav" fill="#4F2683"></polygon>

        <image xlink:href="assets/img/logo/logoSmallDown.png" clip-path="url(#clip1)" class="im3" id="landerImage3"></image>
        <polygon class="poly1 im3 scrolledNav" fill="#4F2683"></polygon>

        <image xlink:href="assets/img/stock/stockIm3.min.png" clip-path="url(#clip2)" class="im4" id="landerImage4"></image>
        <polygon class="poly2 im4 scrolledNav" fill="#4F2683"></polygon>

        <image xlink:href="assets/img/stock/stockIm2.min.png" clip-path="url(#clip6)" class="im5" id="landerImage5"></image>
        <polygon class="poly6 im5 scrolledNav" fill="#4F2683"></polygon>

    </svg>
</nav>

<div id="spacer"></div>


<?php
include_once "navBar.php";
?>

