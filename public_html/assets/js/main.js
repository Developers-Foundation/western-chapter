
/* ----------------------------------------------------------- */
/* Resizing of triangle gallery.
 /* ----------------------------------------------------------- */

// This point represents the width and height of each equilateral triangle.
// This point will be used late to represent the maximal size of the nav bar.
var TRIANGLE_BASE;
var NAVHEIGHT = 40;
var MOBILE = -1;
var windowHeight;
var windowWidth;
var first = true;

function resizeEvent(){
    windowWidth = $(this).width();
    windowHeight = $(this).height();
    TRIANGLE_BASE = Math.floor(windowWidth/3);
    var halfTriangleBase = Math.floor(windowWidth/6);
    var space = Math.floor(windowWidth * 0.005);
    var windowMid = Math.floor(windowWidth/2) - halfTriangleBase;

    if(windowWidth <= 750){

        // If we are just changing screens to mobile sized we need to switch the navbar.
        if(MOBILE == 0 || MOBILE == -1) {
            MOBILE = 1;
            $('#mobileNav').removeClass('hidden');
            $('#triangleNav').addClass('hidden');
            $('#spacer').css('margin-top', NAVHEIGHT + 30);
        }

    }
    else {

        // If we are just changing screens to desktop sized we need to switch the navbar.
        if(MOBILE == 1 || MOBILE == -1) {
            MOBILE = 0;
            $('#triangleNav').removeClass('hidden');
            $('#mobileNav').addClass('hidden');
        }
        $('#svg1').attr({
            width: windowWidth,
            height: TRIANGLE_BASE
        });

        // We choose 15px as the space between each triangle.
        $('#spacer').css('margin-top', Math.max(TRIANGLE_BASE + 10, windowHeight/2) + "px");

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
            left: (1 * (space + halfTriangleBase) + offset + 10) + "px",
            width: (TRIANGLE_BASE - 2 * offset) + "px"
        });

        $('#triLbl3').css({
            left: (3 * (space + halfTriangleBase) + offset + 10) + "px",
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
var OPACITY;

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


    /* In case we don't want the down button overtop of the lander, I would need this to only fire when the width is greater than 650px.
     $('#downButton').css('top', Math.max(windowHeight * 0.5, windowHeight * 0.8 - scroll) + "px");
     */

    OPACITY = NAVHEIGHT/curHeight;
    $('.scrolledNav').attr('opacity', OPACITY);


    // We only want the labels to appear when the navbar cover is completely opaque.
    if(OPACITY == 1){
        $('.triLbl').removeClass("hidden").css('padding-top', "8px");

    }
    else{
        $('.triLbl').addClass("hidden").css('padding-top', (curHeight * 0.4) + "px");
    }

    if(windowWidth > 750 && scroll > TRIANGLE_BASE * 0.6 && (curHeight != NAVHEIGHT || first)){
        first = false;
        $('#spacer').css('margin-top', TRIANGLE_BASE + 10 + Math.min(scroll, TRIANGLE_BASE - 20) - TRIANGLE_BASE * 0.6 + "px");
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

function smoothScroll(id, adjust){
    if(windowWidth > 750) {
        adjust -= ($('#svg1').attr('height') - NAVHEIGHT) / 1.75;
    }
    $('html, body').animate({
        scrollTop: $(id).offset().top - NAVHEIGHT - adjust
    }, 1000);
}

// These selectors allow us to create links associated with the polygonal images and deal with the hover effect.
/**/
$(function imageSelectors () {

    // Our Story
    $('.im1').on('click', function() {
        smoothScroll('#our-story', windowHeight * -0.12);
    }).hover(function() {
            $('#landerImage1').css('opacity', 0.7);
            $('#triLbl1').removeClass('hidden');
        },
        function(){
            $('#landerImage1').css('opacity', 1.0);
            if(OPACITY != 1) {
                $('#triLbl1').addClass('hidden');
            }
        }
    );

    // Portfolio
    $('.im2').on('click', function() {
        smoothScroll('#portfolio', 0);
    }).hover(function() {
            $('#landerImage2').css('opacity', 0.7);
            $('#triLbl2').removeClass('hidden');
        },
        function(){
            $('#landerImage2').css('opacity', 1.0);
            if(OPACITY != 1) {
                $('#triLbl2').addClass('hidden');
            }
        }
    );

    // Developers' Foundation
    $('.im3').on('click', function() {
        window.location.href = "//developersfoundation.ca";
    }).hover(function() {
            $('#landerImage3').css('opacity', 0.7)
        },
        function(){
            $('#landerImage3').css('opacity', 1.0)
        }
    );

    // Application
    $('.im4').on('click', function() {
        smoothScroll('#application', windowHeight * 0.05);

    }).hover(function() {
            $('#landerImage4').css('opacity', 0.7);
            $('#triLbl3').removeClass('hidden');
        },
        function(){
            $('#landerImage4').css('opacity', 1.0);
            if(OPACITY != 1) {
                $('#triLbl3').addClass('hidden');
            }
        }
    );

    // Our Team
    $('.im5').on('click', function() {
        smoothScroll('#exec-team', 0);
    }).hover(function() {
            $('#landerImage5').css('opacity', 0.7);
            $('#triLbl4').removeClass('hidden');
        },
        function(){
            $('#landerImage5').css('opacity', 1.0);
            if(OPACITY != 1) {
                $('#triLbl4').addClass('hidden');
            }
        }
    );

    $('.scrolledNav').hover(function () {
        $(this).attr('fill', '#b9b2de')
    },
        function () {
            $(this).attr('fill', '#988FCE')
        }
    );


    // TODO: add destinations for application
    $('#std').on('click', function () {
        window.location.href = "#";
    });

    $('#npo').on('click', function () {
        window.location.href = "#";
    });

});

/* ----------------------------------------------------------- */
/* End of jQuery events.
 /* ----------------------------------------------------------- */









/* ----------------------------------------------------------- */
/* Scroll button.
 /* ----------------------------------------------------------- */

var SECTIONS = ['#our-story', '#portfolio', '#application', '#exec-team'];
var SECTIONS_OFFSET = [-0.12, 0, 0.05, 0];
$(function scrollButton () {
    $('#upButton').on('click', determineNextSectionCall);
    $('#downButton').on('click', determineNextSection);
});

function determineNextSection(down){

    var start = down ? 0 : 2;
    var dif = down ? 2 : -2;
    if(down == null){
        down = true;
    }

    var top = $(window).scrollTop();

    for(var i = start; i < start + 4; i = down ? i + 1 : i - 1){
        if(compare($(SECTIONS[i % 4]).offset().top - windowHeight * SECTIONS_OFFSET[i % 4], (top + NAVHEIGHT + dif), down)){
            smoothScroll(SECTIONS[i % 4], windowHeight * SECTIONS_OFFSET[i % 4]);
            break;
        }
        if((down && i == 3) || (!down && i == 0)){
            smoothScroll('#spacer', windowHeight * 0.1);
            break;
        }
    }
}

function determineNextSectionCall(){
    determineNextSection(false);
}

function compare(a, b, greater){
    if(greater){
        return a > b;
    }
    else{
        return a < b;
    }
}

/* ----------------------------------------------------------- */
/* End of scroll button.
 /* ----------------------------------------------------------- */





/* ----------------------------------------------------------- */
/* Nob Mailer START
 /* ----------------------------------------------------------- */
$(document).ready(function () {
    $('form.form-email').submit(function (e) {
        if (e.preventDefault) e.preventDefault();
        else e.returnValue = false;

        var thisForm = $(this).closest('form.form-email');
        var submitButton = thisForm.find('button');
        submitButton.prop("disabled", true);
        var emailField = thisForm.find('.form-input-email');
        var nameField = thisForm.find('.form-input-name');
        var messageField = thisForm.find('.form-input-message');

        if (thisForm.attr('data-form-type').indexOf("nob") > -1) {
            // Nob form
            var sendFrom = emailField.val(),

                // TODO: change this email to where the messages will be sent to:
                sendTo = "psalvato@uwo.ca",
                subject = "Message from " + nameField.val(),
                msg = messageField.val(),
                msgHTML = "<p>" + messageField.val() + "<p>",
                fromName = nameField.val(),

                // TODO: change to the name of the person that the message is being sent to.
                toName = "Fakey McFakeName";

            var sendData = JSON.stringify({
                'sendFrom': sendFrom,
                'fromName': fromName,
                'sendTo': sendTo,
                'toName': toName,
                'subject': subject,
                'msg': msg,
                'msgHTML': msgHTML
            });

            $.ajax({
                url: 'html_elements/mailer.php',
                crossDomain: false,
                data: sendData,
                method: "POST",
                cache: false,
                dataType: 'json',
                contentType: 'application/json; charset=utf-8',
                success: function (data) {
                    // Deal with JSON
                    console.log(data);
                    var returnData = data;

                    submitButton.removeClass("btn-primary");
                    if (returnData.success) {
                        // Throw success msg
                        emailField.val("");
                        nameField.val("");
                        messageField.val("");
                        submitButton.html("Received");
                        submitButton.addClass("btn-success");
                    } else {
                        // Throw error message
                        submitButton.html("Sorry an error occurred");
                        submitButton.addClass("btn-danger");
                    }
                    submitButton.prop("disabled", false);
                },
                error: function (error) {
                    // console.log(sendData);
                    console.log("Email was not sent successfully.");
                    console.log(error);
                    // Throw error message
                    submitButton.html("Sorry an error occured");
                    submitButton.removeClass("btn-primary");
                    submitButton.addClass("btn-danger");
                    submitButton.prop("disabled", false);
                }
            });
        }
    });
});
/* ----------------------------------------------------------- */
/* Nob Mailer END
 /* ----------------------------------------------------------- */