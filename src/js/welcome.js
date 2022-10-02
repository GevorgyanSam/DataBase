"use strict";

$(document).ready(function() {

    $(".animationParent").delay(4000).fadeOut(0, function() {

        $(".documentParent").css({
            display: "block",
        });

    })

    $(window).scroll(() => {

        NavScroll();
        HomeContent();

    })

    function NavScroll() {

        if($(window).scrollTop() > 0) {
            $(".navParent").addClass("active");
        } else {
            $(".navParent").removeClass("active");
        }

    }

    function HomeContent() {

        $(".homeScroll").css({
            transform: "translateY(" + ($(window).scrollTop() * 0.35) + "px)"
        })

    }

})