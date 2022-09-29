"use strict";

$(document).ready(function() {

    let login = $("#login");
    let password = $("#password");
    let loginIcon = $("#loginIcon");
    let passwordIcon = $("#passwordIcon");
    let eye = $("#eye");

    login.keyup(function() {

        if(login.val().length >= 3) {
            login.addClass("active");
            loginIcon.addClass("active");
        } else {
            login.removeClass("active");
            loginIcon.removeClass("active");
        }
        
    })

    password.keyup(function() {

        if(password.val().length >= 8) {
            password.addClass("active");
            passwordIcon.addClass("active");
        } else {
            password.removeClass("active");
            passwordIcon.removeClass("active");
        }

        if(password.val().length >= 1) {
            eye.css({
                display: "block",
            })
        } else {
            eye.css({
                display: "none",
            })
        }

    })

    eye.click(function() {

        if(eye.hasClass("fa-eye-slash")) {
            eye.removeClass("fa-eye-slash");
            eye.addClass("fa-eye");
            eye.css({
                right: "11px",
            })
            password.attr("type", "text");
        } else if(eye.hasClass("fa-eye")) {
            eye.removeClass("fa-eye");
            eye.addClass("fa-eye-slash");
            eye.css({
                right: "10px",
            })
            password.attr("type", "password");
        }

    })

})