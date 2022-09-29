"use strict";

$(document).ready(function() {

    $(".animationParent").delay(4000).fadeOut(0, function() {

        $(".documentParent").css({
            display: "block",
        });

    })

})