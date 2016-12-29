<!--

This module provides a gallery of triangular images that can be tessellated together.
This module relies on code in main.js in order to properly function with resizing windows.

-->

<nav class="navbar navbar-default navbar-fixed-top">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1000" height="200" id="svg1">
        <defs>

            <!-- Clip paths are used to create the triangles. Any polygon can be created by altering the points -->

            <!-- Equilateral Triangle -->
            <clipPath id="clip1">
                <polygon points="50,0 0,100 100,100" id="poly1">  <!-- Coordinate system is x,y with 0,0 being the top left corner -->
            </clipPath>

            <!-- Upside down Equilateral Triangle -->
            <clipPath id="clip2">
                <polygon points="0,0 100,0 50,100" id="poly2">
            </clipPath>

            <!-- Right Angle Triangle (Right) -->
            <clipPath id="clip3">
                <polygon points="50,0 50,100 0,100" id="poly3">
            </clipPath>

            <!-- Right Angle Triangle (Left) -->
            <clipPath id="clip4">
                <polygon points="50,0 50,100 100,100" id="poly4">
            </clipPath>

            <!-- Square Side Triangle (Left) -->
            <clipPath id="clip5">
                <polygon points="0,0 50,0 100,100 0,100" id="poly5">
            </clipPath>

            <!-- Square Side Triangle (Right) -->
            <clipPath id="clip6">
                <polygon points="100,0 100,100 0,100 50,0" id="poly6">
            </clipPath>

        </defs>

        <!-- We create each image and assign the required variables.
        Important variable to note are the clip-path (to create the triangle) and translate (so they aren't all overlapping) -->
        <image xlink:href="//placehold.it/500x500/5bc0de" clip-path="url(#clip5)" id="im1"></image>
        <image xlink:href="//placehold.it/501x501/5bc0de" clip-path="url(#clip2)" id="im2"></image>
        <image xlink:href="//placehold.it/502x502/5bc0de" clip-path="url(#clip1)" id="im3"></image>
        <image xlink:href="//placehold.it/503x503/5bc0de" clip-path="url(#clip2)" id="im4"></image>
        <image xlink:href="//placehold.it/504x504/5bc0de" clip-path="url(#clip6)" id="im5"></image>

    </svg>

</nav>