document.addEventListener('DOMContentLoaded', function() {

    // Window Width
    var windowWidth = $(window).width();

    // Window Height
    var windowHeight = $(window).height();

// Smooth Scrolling

    var scrollLink = $('.scroll');

    scrollLink.click(function(e) {
        e.preventDefault();
        $('body,html').animate({
            scrollTop: $(this.hash).offset().top
        }, 750)
    })

// Navigation Color Change

    $(window).scroll(function() {

        var scroll = $(window).scrollTop();

        if (scroll > windowHeight - 80) {
            $("header").addClass("header-white");
        } else {
            $("header").removeClass("header-white");
        }

    });

// Active Link Switch

    $(window).scroll(function() {
        var scrollbarLocation = $(this).scrollTop();

        scrollLink.each(function() {
            var sectionOffset = $(this.hash).offset().top

            if ( sectionOffset <= scrollbarLocation) {
                $(this).addClass('active');
                $(this).parent().siblings().children().removeClass('active');
            }
        })

    })

// Burger Menu

    const navSlide = ()=>{
        const burger = document.querySelector('.burger');
        const nav = document.querySelector('.nav-bar');

        burger.addEventListener('click', () => {
            nav.classList.toggle('nav-active');
            burger.classList.toggle('toggle');
        });
    } 
    navSlide();

}, false);

    