
/* ----------------------------------------------------------- */
/* Resizing of triangle gallery.
/* ----------------------------------------------------------- */

// This point represents the width and height of each equilateral triangle.
// This point will be used late to represent the maximal size of the nav bar.
var point1;

function resizeEvent(){
    var width = $(this).width();
    point1 = Math.floor(width/3);
    var point2 = Math.floor(width/6);
    var space = Math.floor(width * 0.01);
    var mid = Math.floor(width/2) - point2;

    $('#svg1').attr({
        width: width,
        height: point1
    });

    // Resize the shape of the polygon (the triangles)

    // Equilateral triangles
    $('#poly1').attr('points', point2 + ",0 0," + point1 + " " + point1 + "," + point1);
    $('#poly2').attr('points', "0,0 " + point1 + ",0 " + point2 + "," + point1);

    // Square end triangles
    $('#poly5').attr('points', "0,0 " + point2 +",0 " + point1 +"," + point1 + " 0," + point1);
    $('#poly6').attr('points', point1 + ",0 " + point1 + "," + point1 + " 0," + point1 + " " + point2 + ",0");


    // Retranslate and resize based on the window size.
    $('#im1').attr({
        width: point1,
        height: point1,
        transform: "translate(" + (mid - 2*(point2 + space)) + ", 0)"
    });

    $('#im2').attr({
        width: point1,
        height: point1,
        transform: "translate(" + (mid - 1*(point2 + space)) + ", 0)"
    });

    $('#im3').attr({
        width: point1,
        height: point1,
        transform: "translate(" + (mid) + ", 0)"
    });

    $('#im4').attr({
        width: point1,
        height: point1,
        transform: "translate(" + (mid + 1*(point2 + space)) + ", 0)"
    });

    $('#im5').attr({
        width: point1,
        height: point1,
        transform: "translate(" + (mid + 2*(point2 + space)) + ", 0)"
    });

    // Whenever the screen is resized, we must also treat this event as if there was a scroll to reinitialize the nav bar.
    prevScroll = 0;
    scrollEvent();

}

// Whenever a window is resized we need to update the sizes of the triangles (for responsiveness)
$(function jQueryResize (){
    $(window).resize(function(){
        resizeEvent();
    })
});

// These selectors allow us to create links associated with the polygonal images.
$(function imageSelectors () {

    $('#im1').on('click', function(){
        window.location.href = "//developersfoundation.ca";
    });

    $('#im2').on('click', function(){
        window.location.href = "#";
    });
    $('#im3').on('click', function(){
        window.location.href = "#";
    });
    $('#im4').on('click', function(){
        window.location.href = "#";
    });
    $('#im5').on('click', function(){
        window.location.href = "#";
    });

});

// Since we use absolute positioning, we need to resize when the website is loaded in order to fit to the current screen size.
$(function (){
    resizeEvent();
});


/* ----------------------------------------------------------- */
/* End of resizing of triangle gallery.
/* ----------------------------------------------------------- */





/* ----------------------------------------------------------- */
/* Scroll effect triangle gallery.
/* ----------------------------------------------------------- */

// This value stores the position of the previous scroll event such that we can know by how much we have scrolled.
var prevScroll = 0;

function scrollEvent() {

    // The nav bar will be 1/7th the size of the current screen height, therefore adjust this value.
    var height = $(this).height();
    var minHeight = Math.floor(height*0.14);

    console.log(minHeight);

    var scroll = $(window).scrollTop();
    var curScroll = scroll - prevScroll;
    prevScroll = scroll;
    var curHeight = parseInt($('#svg1').attr('height'));
    var toChange = 0;

    // If we scroll up, then we only begin extending the triangles at 50px (the size of the nav bar) at the point where the bar begins
    if(curScroll < 0 && prevScroll <= point1 - minHeight){
        toChange = Math.min(point1, curHeight - curScroll);
        $('#svg1').attr('height', toChange);
    }

    // Begin shrinking until we reach a certain point
    else if(curScroll > 0 && curHeight > minHeight){
        toChange = Math.max(minHeight, curHeight - curScroll);
        $('#svg1').attr('height', toChange);
    }

}

// Whenever the window is scrolled we need to update the size of the nav
$(function jQueryScroll (){
    $(window).scroll(function() {
        scrollEvent();
    });
});

// Use this to adjust the page when it is loaded for the first time (may not necessarily be loaded at the top of the page).
$(function (){
    scrollEvent();
});