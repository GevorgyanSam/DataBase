"use strict";$(document).ready((function(){$(".animationParent").delay(4e3).fadeOut(0,(function(){$(".documentParent").css({display:"block"})})),$(window).scroll((()=>{$(window).scrollTop()>0?$(".navParent").addClass("active"):$(".navParent").removeClass("active"),$(".homeScroll").css({transform:"translateY("+.35*$(window).scrollTop()+"px)"})}))}));