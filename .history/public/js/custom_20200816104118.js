$(document).ready(function () {
    //slider for sidebar section 
    $("#sidebar_carousel").owlCarousel({
        items: 6,
        dots: false,
        loop: false,
        mouseDrag: false,
        touchDrag: false,
        pullDrag: false,
        rewind: true,
        autoplay: false,
        margin: 0,
        nav: true
    });

    //slider for clearence section 
    // $("#clearence_carousel").owlCarousel({
    //     items: 3,
    //     dots: false,
    //     loop: false,
    //     mouseDrag: false,
    //     touchDrag: false,
    //     pullDrag: false,
    //     rewind: true,
    //     autoplay: false,
    //     nav: true,
    //     responsive: {
    //         0: {
    //             items: 1,
    //             nav: false
    //         },

    //         600: {
    //             items: 3,
    //             nav: false
    //         },

    //         1024: {
    //             items: 3,
    //             nav: true,
    //             loop: true
    //         },

    //         1366: {
    //             items: 5,
    //             nav: true,
    //             loop: false
    //         }
    //     }
    // });


    $('#clearence_carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        nav: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
            },

            1000: {
                items: 3,
            },

            1366: {
                items: 5,
            }
        }
    })

});

