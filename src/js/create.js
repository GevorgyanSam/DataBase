"use strict";

$(document).ready(function() {

    let header = $("#header"),
        description = $("#description"),
        file = $("#file"),
        headerError = $(".headerError"),
        descriptionError = $(".descriptionError"),
        fileError = $(".fileError");

        header.keyup(function() {
            keyupFunc(header, headerError);
        })

        description.keyup(function() {
            keyupFunc(description, descriptionError);
        })

        function keyupFunc(input, inputError) {

            if(input.val().length == 0) {
                input.css({
                    borderBottom: "1px solid red",
                })
                inputError.css({
                    display: "block",
                })
            } else {
                input.css({
                    borderBottom: "1px solid rgb(31, 153, 31)",
                })
                inputError.css({
                    display: "none",
                })
            }

        }

})