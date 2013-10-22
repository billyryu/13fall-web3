jQuery(document).ready(function ($) {

    var links = $('.navigation').find('li');
    slide = $('.slide');
    button = $('.button');
    mywindow = $(window);
    htmlbody = $('html,body');


    slide.waypoint(function (event, direction) {

        dataslide = $(this).attr('ryu-slidepage');
        if (direction === 'down') {
            $('.navigation li[ryu-slidepage="' + dataslide + '"]').addClass('active').prev().removeClass('active');
        }
       
        else {
            $('.navigation li[ryu-slidepage="' + dataslide + '"]').addClass('active').next().removeClass('active');
        }

    });

    mywindow.scroll(function () {
        if (mywindow.scrollTop() == 0) {
            $('.navigation li[ryu-slidepage="1"]').addClass('active');
            $('.navigation li[ryu-slidepage="2"]').removeClass('active');
        }
    });




    function goToByScroll(dataslide) {
        htmlbody.animate({
            scrollTop: $('.slide[ryu-slidepage="' + dataslide + '"]').offset().top
        }, 1000, 'easeInOutQuint');
    }

    links.click(function (e) {
        e.preventDefault();
        dataslide = $(this).attr('ryu-slidepage');
        goToByScroll(dataslide);
    });

    button.click(function (e) {
        e.preventDefault();
        dataslide = $(this).attr('ryu-slidepage');
        goToByScroll(dataslide);

    });


});