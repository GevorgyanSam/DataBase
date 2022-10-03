"use strict";

$(document).ready(function() {

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

        $(".scroll").css({
            transform: "translateY(" + ($(window).scrollTop() * 0.35) + "px)"
        })

    }

})