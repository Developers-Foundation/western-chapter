
/* ----------------------------------------------------------- */
/* Resizing of triangle gallery.
 /* ----------------------------------------------------------- */

// This point represents the width and height of each equilateral triangle.
// This point will be used late to represent the maximal size of the nav bar.
var TRIANGLE_BASE;
var NAVHEIGHT = 40;
var MOBILE = -1;

function resizeEvent(){
    var windowWidth = $(this).width();
    TRIANGLE_BASE = Math.floor(windowWidth/3);
    var halfTriangleBase = Math.floor(windowWidth/6);
    var space = Math.floor(windowWidth * 0.005);
    var windowMid = Math.floor(windowWidth/2) - halfTriangleBase;

    if(windowWidth <= 820){

        // If we are just changing screens to mobile sized we need to switch the navbar.
        if(MOBILE == 0 || MOBILE == -1) {
            MOBILE = 1;
            $('#mobileNav').removeClass('hidden');
            $('#triangleNav').addClass('hidden');
            $('#spacer').css('margin-top', NAVHEIGHT);
        }

    }
    else {

        // If we are just changing screens to desktop sized we need to switch the navbar.
        if(MOBILE == 1 || MOBILE == -1) {
            MOBILE = 0;
            $('#triangleNav').removeClass('hidden');
            $('#spacer').removeClass('hidden');
            $('#mobileNav').addClass('hidden');
        }
        $('#svg1').attr({
            width: windowWidth,
            height: TRIANGLE_BASE
        });

        // We choose 15px as the space between each triangle.
        $('#spacer').css('margin-top', TRIANGLE_BASE + 10);

        // Resize the shape of the polygon (the triangles)

        // Equilateral triangles
        $('.poly1').attr('points', halfTriangleBase + ",0 0," + TRIANGLE_BASE + " " + TRIANGLE_BASE + "," + TRIANGLE_BASE);
        $('.poly2').attr('points', "0,0 " + TRIANGLE_BASE + ",0 " + halfTriangleBase + "," + TRIANGLE_BASE);

        // Square end triangles
        $('.poly5').attr('points', "0,0 " + halfTriangleBase + ",0 " + TRIANGLE_BASE + "," + TRIANGLE_BASE + " 0," + TRIANGLE_BASE);
        $('.poly6').attr('points', TRIANGLE_BASE + ",0 " + TRIANGLE_BASE + "," + TRIANGLE_BASE + " 0," + TRIANGLE_BASE + " " + halfTriangleBase + ",0");


        // Retranslate and resize based on the window size.
        $('.im1').attr({
            width: TRIANGLE_BASE,
            height: TRIANGLE_BASE,
            transform: "translate(" + (windowMid - 2 * (halfTriangleBase + space)) + ", 0)"
        });

        $('.im2').attr({
            width: TRIANGLE_BASE,
            height: TRIANGLE_BASE,
            transform: "translate(" + (windowMid - 1 * (halfTriangleBase + space)) + ", 0)"
        });

        $('.im3').attr({
            width: TRIANGLE_BASE,
            height: TRIANGLE_BASE,
            transform: "translate(" + (windowMid) + ", 0)"
        });

        $('.im4').attr({
            width: TRIANGLE_BASE,
            height: TRIANGLE_BASE,
            transform: "translate(" + (windowMid + 1 * (halfTriangleBase + space)) + ", 0)"
        });

        $('.im5').attr({
            width: TRIANGLE_BASE,
            height: TRIANGLE_BASE,
            transform: "translate(" + (windowMid + 2 * (halfTriangleBase + space)) + ", 0)"
        });


        // Positioning of the labels in the center of the nav
        var offset = (NAVHEIGHT / Math.sqrt(3));           // adj=(height/tan(60)) since we are dealing with right angles

        $('#triLbl1').css({
            left: 0 + "px",
            width: halfTriangleBase + "px"
        });

        $('#triLbl2').css({
            left: (1 * (space + halfTriangleBase) + offset) + "px",
            width: (TRIANGLE_BASE - 2 * offset) + "px"
        });

        $('#triLbl3').css({
            left: (3 * (space + halfTriangleBase) + offset) + "px",
            width: (TRIANGLE_BASE - 2 * offset) + "px"
        });

        $('#triLbl4').css({
            left: (5 * (space + halfTriangleBase)) + "px",
            width: halfTriangleBase + "px"
        });


        // Whenever the screen is resized, we must also treat this event as if there was a scroll to reinitialize the nav bar.
        prevScroll = 0;
        scrollEvent();
    }
}


// Whenever a window is resized we need to update the sizes of the triangles (for responsiveness)
$(function jQueryResize (){
    $(window).resize(function(){
        resizeEvent();
    })
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

    var scroll = $(window).scrollTop();
    var curScroll = scroll - prevScroll;
    prevScroll = scroll;
    var curHeight = parseInt($('#svg1').attr('height'));

    // If we scroll up, then we only begin extending the triangles at the point where the bar begins
    if(curScroll < 0 && prevScroll <= TRIANGLE_BASE - NAVHEIGHT){
        curHeight = Math.min(TRIANGLE_BASE, curHeight - curScroll);
        $('#svg1').attr('height', curHeight);
    }

    // Begin shrinking until we reach a certain point
    else if(curScroll > 0 && curHeight > NAVHEIGHT){
        curHeight = Math.max(NAVHEIGHT, curHeight - curScroll);
        $('#svg1').attr('height', curHeight);
    }

    var opacity = NAVHEIGHT/curHeight;
    $('.scrolledNav').attr('opacity', opacity);



    // We only want the labels to appear when the navbar cover is completely opaque.
    if(opacity == 1){
        $('#triLabels').removeClass("hidden");
    }
    else{
        $('#triLabels').addClass("hidden")
    }



}

// Whenever the window is scrolled we need to update the size of the nav
$(function jQueryScroll (){
    $(window).scroll(function() {
        scrollEvent();
    });
});


/* ----------------------------------------------------------- */
/* End of scroll effect triangle gallery.
 /* ----------------------------------------------------------- */







/* ----------------------------------------------------------- */
/* jQuery events.
 /* ----------------------------------------------------------- */

function smoothScroll(id){
    $('html').animate({
        scrollTop: $(id).offset().top - 50
    }, 1000);
}

// These selectors allow us to create links associated with the polygonal images and deal with the hover effect.
/**/
$(function imageSelectors () {

    // Sponsors
    $('.im1').on('click', function() {
        smoothScroll('#');
    }).hover(function() {
            $(this).css('opacity', 0.7)
        },
        function(){
            $(this).css('opacity', 1.0)
        }
    );

    // Our Story
    $('.im2').on('click', function() {
        smoothScroll('#');

    }).hover(function() {
            $(this).css('opacity', 0.7)
        },
        function(){
            $(this).css('opacity', 1.0)
        }
    );

    // Developers' Foundation
    $('.im3').on('click', function() {
        window.location.href = "//developersfoundation.ca";
    }).hover(function() {
            $(this).css('opacity', 0.7)
        },
        function(){
            $(this).css('opacity', 1.0)
        }
    );

    // Our Team and Work
    $('.im4').on('click', function() {
        smoothScroll('#');

    }).hover(function() {
            $(this).css('opacity', 0.7)
        },
        function(){
            $(this).css('opacity', 1.0)
        }
    );

    // Application
    $('.im5').on('click', function() {
        smoothScroll('#');
    }).hover(function() {
            $(this).css('opacity', 0.7)
        },
        function(){
            $(this).css('opacity', 1.0)
        }
    );

});
/**/
/* ----------------------------------------------------------- */
/* End of jQuery events.
 /* ----------------------------------------------------------- */
