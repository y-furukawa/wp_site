

$(function () {
    $(".menu_btn").on("click", function () {
        $(".sp_nav").toggleClass("on");
    });

    $(window).on("resize", function () {
        $(".sp_nav").removeClass("on")
    });

    $('.bxslider_menu').bxSlider({
        slideWidth: 600,
        slideHeigth: 1000,
        minSlides: 5,
        mode: "fade",
        pause: 100,
        pagerCustom: '.custom-thumb',
        responsive: true

    });

    $('.bxslider_text').bxSlider({
        slideWidth: 300,
        mode: "fade",
        pagerCustom: '.custom-thumb'

    });
    // $('.bxslider_key').bxSlider({
    //     auto: true,
    //     slideWidth: 640,
    //     minSlides: 4,
    //     mode: "fade",
    //     caption: true,
    // });


    var counter = $('.bxslider_number').bxSlider({
        mode: 'vertical',
        slideWidth: 70,
        speed: 3000
    });



    // $(window).on("click", function () {
    //     counter.goToNextSlide();
    // })

    //keyのスライダー
    $('#vegas').vegas({
        slides: [
            { src: '/curry_marche/wp-content/themes/curry_marche/common/img/top_key00.jpg' },
            { src: '/curry_marche/wp-content/themes/curry_marche/common/img/top_key02.jpg' },
            { src: '/curry_marche/wp-content/themes/curry_marche/common/img/top_key03.jpg' },
            { src: '/curry_marche/wp-content/themes/curry_marche/common/img/top_key04.jpg' }
        ], timer: false,
        delay: 6000,
        transitionDuration: 3000,
        walk: function () { counter.goToNextSlide() }

    });


});