<!--

This module provides a gallery of triangular images that can be tessellated together.
This module relies on code in main.js in order to properly function with resizing windows.

-->

<nav class="navbar navbar-default navbar-fixed-top" id="triangleNav">

    <!--
    <row id="triLabels" style="position: fixed; width: 100%">
        <div class="col-xs-2 triLbl" id="triLbl1">Developers' Foundation</div>
        <div class="col-xs-4 triLbl text-center" id="triLbl2">Our Work</div>
        <div class="col-xs-4 triLbl text-center" id="triLbl3">Join Us</div>
        <div class="col-xs-2 triLbl text-right" id="triLbl4">Misc Title</div>
    </row>
    -->

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
        <image xlink:href="//placehold.it/500x500/800080" clip-path="url(#clip5)" class="im1 "></image>
        <polygon class="poly5 im1 scrolledNav" fill="#EE82EE"></polygon>

        <image xlink:href="//placehold.it/501x501/800080" clip-path="url(#clip2)" class="im2"></image>
        <polygon class="poly2 im2 scrolledNav" fill="#EE82EE"></polygon>

        <image xlink:href="//placehold.it/502x502/800080" clip-path="url(#clip1)" class="im3"></image>
        <polygon class="poly1 im3 scrolledNav" fill="#EE82EE"></polygon>

        <image xlink:href="//placehold.it/503x503/800080" clip-path="url(#clip2)" class="im4"></image>
        <polygon class="poly2 im4 scrolledNav" fill="#EE82EE"></polygon>

        <image xlink:href="//placehold.it/504x504/800080" clip-path="url(#clip6)" class="im5"></image>
        <polygon class="poly6 im5 scrolledNav" fill="#EE82EE"></polygon>

    </svg>
</nav>

<div id="spacer"></div>