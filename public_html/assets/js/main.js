
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
    var space = Math.floor(width * 0.005);
    var mid = Math.floor(width/2) - point2;

    $('#svg1').attr({
        width: width,
        height: point1
    });

    $('#spacer').css('margin-top', point1 + 15);

    // Resize the shape of the polygon (the triangles)

    // Equilateral triangles
    $('.poly1').attr('points', point2 + ",0 0," + point1 + " " + point1 + "," + point1);
    $('.poly2').attr('points', "0,0 " + point1 + ",0 " + point2 + "," + point1);

    // Square end triangles
    $('.poly5').attr('points', "0,0 " + point2 +",0 " + point1 +"," + point1 + " 0," + point1);
    $('.poly6').attr('points', point1 + ",0 " + point1 + "," + point1 + " 0," + point1 + " " + point2 + ",0");


    // Retranslate and resize based on the window size.
    $('.im1').attr({
        width: point1,
        height: point1,
        transform: "translate(" + (mid - 2*(point2 + space)) + ", 0)"
    });

    $('.im2').attr({
        width: point1,
        height: point1,
        transform: "translate(" + (mid - 1*(point2 + space)) + ", 0)"
    });

    $('.im3').attr({
        width: point1,
        height: point1,
        transform: "translate(" + (mid) + ", 0)"
    });

    $('.im4').attr({
        width: point1,
        height: point1,
        transform: "translate(" + (mid + 1*(point2 + space)) + ", 0)"
    });

    $('.im5').attr({
        width: point1,
        height: point1,
        transform: "translate(" + (mid + 2*(point2 + space)) + ", 0)"
    });



    // Positioning of the labels in the center of the nav
    // var navHeight = Math.floor($(this).height() * 0.07);
    var navHeight = $(this).height() * 0.07;
    var offset = (navHeight / Math.sqrt(3));           // adj=(height/tan(60)) since we are dealing with right angles

    $('.triLbl').css('height', navHeight + "px");

    $('#triLbl1').css({
        left: 0 + "px",
        width: point2 + "px"
    });

    $('#triLbl2').css({
        left: (1*(space + point2) + offset) + "px",
        width: (point1 - 2*offset) + "px"
    });

    $('#triLbl3').css({
        left: (3*(space + point2) + offset) + "px",
        width: (point1 - 2*offset) + "px"
    });

    $('#triLbl4').css({
        left: (5*(space + point2)) + "px",
        width: point2 + "px"
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
    var minHeight = Math.floor($(this).height() * 0.07);

    var scroll = $(window).scrollTop();
    var curScroll = scroll - prevScroll;
    prevScroll = scroll;
    var curHeight = parseInt($('#svg1').attr('height'));

    // If we scroll up, then we only begin extending the triangles at the point where the bar begins
    if(curScroll < 0 && prevScroll <= point1 - minHeight){
        curHeight = Math.min(point1, curHeight - curScroll);
        $('#svg1').attr('height', curHeight);
    }

    // Begin shrinking until we reach a certain point
    else if(curScroll > 0 && curHeight > minHeight){
        curHeight = Math.max(minHeight, curHeight - curScroll);
        $('#svg1').attr('height', curHeight);
    }

    var opacity = minHeight/curHeight;
    $('.scrolledNav').attr('opacity', opacity);




    // We only want the labels to appear when the navbar cover is completely opaque
    if(opacity == 1){
        $('#triLabels').removeClass("hidden");



        var padding = Math.floor(minHeight/3.5);

        $('.triLbl').css({
            "padding-top": padding + "px",
            "padding-bottom": padding + "px",
            "font-size": padding + 2 + "px"
        });



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

// Use this to adjust the page when it is loaded for the first time (may not necessarily be loaded at the top of the page).
$(function (){
    scrollEvent();
});

/* ----------------------------------------------------------- */
/* End of scroll effect triangle gallery.
 /* ----------------------------------------------------------- */







/* ----------------------------------------------------------- */
/* jQuery events.
 /* ----------------------------------------------------------- */

// These selectors allow us to create links associated with the polygonal images and deal with the hover effect.
$(function imageSelectors () {

    $('.im1').on('click', function() {
        window.location.href = "//developersfoundation.ca";
    }).hover(function() {
            $(this).css('opacity', 0.7)
        },
        function(){
            $(this).css('opacity', 1.0)
        }
    );

    $('.im2').on('click', function() {
        window.location.href = "#";
    }).hover(function() {
            $(this).css('opacity', 0.7)
        },
        function(){
            $(this).css('opacity', 1.0)
        }
    );

    $('.im3').on('click', function() {
        window.location.href = "#";
    }).hover(function() {
            $(this).css('opacity', 0.7)
        },
        function(){
            $(this).css('opacity', 1.0)
        }
    );

    $('.im4').on('click', function() {
        window.location.href = "#";
    }).hover(function() {
            $(this).css('opacity', 0.7)
        },
        function(){
            $(this).css('opacity', 1.0)
        }
    );

    $('.im5').on('click', function() {
        window.location.href = "#";
    }).hover(function() {
            $(this).css('opacity', 0.7)
        },
        function(){
            $(this).css('opacity', 1.0)
        }
    );

});

/* ----------------------------------------------------------- */
/* End of jQuery events.
 /* ----------------------------------------------------------- */
