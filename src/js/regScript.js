"use strict";

$(document).ready(function() {

    let name = $("#name");
    let nameIcon = $("#nameIcon");
    let lastName = $("#lastName");
    let lastNameIcon = $("#lastNameIcon");
    let email = $("#email");
    let emailIcon = $("#emailIcon");
    let userName = $("#userName");
    let userNameIcon = $("#userNameIcon");
    let password = $("#password");
    let passwordIcon = $("#passwordIcon");
    let eye = $("#eye");
    let passwordConfirm = $("#passwordConfirm");
    let passwordConfirmIcon = $("#passwordConfirmIcon");
    let eyeConfirm = $("#eyeConfirm");

    name.keyup(function() {

        if (name.val().length >= 1) {
            name.addClass("active");
            nameIcon.addClass("active");
            $(".errName").css({
                display: "none",
            });
        } else {
            name.removeClass("active");
            nameIcon.removeClass("active");
            $(".errName").css({
                display: "block",
            });
        }

    })

    lastName.keyup(function() {

        if (lastName.val().length >= 1) {
            lastName.addClass("active");
            lastNameIcon.addClass("active");
            $(".errLastName").css({
                display: "none",
            });
        } else {
            lastName.removeClass("active");
            lastNameIcon.removeClass("active");
            $(".errLastName").css({
                display: "block",
            });
        }

    })

    email.keyup(function() {

        if (email.val().length >= 1) {
            email.addClass("active");
            emailIcon.addClass("active");
            $(".errEmail").css({
                display: "none",
            });
        } else {
            email.removeClass("active");
            emailIcon.removeClass("active");
            $(".errEmail").css({
                display: "block",
            });
        }

    })

    userName.keyup(function() {

        if (userName.val().length >= 3) {
            userName.addClass("active");
            userNameIcon.addClass("active");
        } else {
            userName.removeClass("active");
            userNameIcon.removeClass("active");
        }

        if (userName.val().length >= 1) {
            $(".errUserName").css({
                display: "none",
            });
        } else {
            $(".errUserName").css({
                display: "block",
            });
        }

    })

    password.keyup(function() {

        if (password.val().length >= 8) {
            password.addClass("active");
            passwordIcon.addClass("active");
            $(".errPassword").css({
                display: "none",
            });
        } else {
            password.removeClass("active");
            passwordIcon.removeClass("active");
            $(".errPassword").css({
                display: "block",
            });
        }

        if (password.val().length >= 1) {
            eye.css({
                display: "block",
            });
        } else {
            eye.css({
                display: "none",
            });
        }

    })

    eye.click(function() {

        if (eye.hasClass("fa-eye-slash")) {
            eye.removeClass("fa-eye-slash");
            eye.addClass("fa-eye");
            eye.css({
                right: "11px",
            })
            password.attr("type", "text");
        } else if (eye.hasClass("fa-eye")) {
            eye.removeClass("fa-eye");
            eye.addClass("fa-eye-slash");
            eye.css({
                right: "10px",
            })
            password.attr("type", "password");
        }

    })

    passwordConfirm.keyup(function() {

        if (passwordConfirm.val() === password.val() && passwordConfirm.val() != "") {
            passwordConfirm.addClass("active");
            passwordConfirmIcon.addClass("active");
            $(".errPasswordConfirm").css({
                display: "none",
            });
        } else {
            passwordConfirm.removeClass("active");
            passwordConfirmIcon.removeClass("active");
            $(".errPasswordConfirm").css({
                display: "block",
            });
        }

        if (passwordConfirm.val().length >= 1) {
            eyeConfirm.css({
                display: "block",
            })
        } else {
            eyeConfirm.css({
                display: "none",
            })
        }

    })

    eyeConfirm.click(function() {

        if (eyeConfirm.hasClass("fa-eye-slash")) {
            eyeConfirm.removeClass("fa-eye-slash");
            eyeConfirm.addClass("fa-eye");
            eyeConfirm.css({
                right: "11px",
            })
            passwordConfirm.attr("type", "text");
        } else if (eyeConfirm.hasClass("fa-eye")) {
            eyeConfirm.removeClass("fa-eye");
            eyeConfirm.addClass("fa-eye-slash");
            eyeConfirm.css({
                right: "10px",
            })
            passwordConfirm.attr("type", "password");
        }

    })

})