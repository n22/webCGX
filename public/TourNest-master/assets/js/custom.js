$(document).ready(function(){

	"use strict";



        /*==================================

* Author        : "ThemeSine"

* Template Name : Travel HTML Template

* Version       : 1.0

==================================== */


        /*=========== TABLE OF CONTENTS ===========

1. Scroll To Top
2. Range js
3. Countdown timer
4. owl carousel
5. datepicker
6. Smooth Scroll spy
7. Animation support
======================================*/


    // 1. Scroll To Top

		$(window).on('scroll',function () {

			if ($(this).scrollTop() > 600) {

				$('.return-to-top').fadeIn();

			} else {

				$('.return-to-top').fadeOut();

			}

		});

		$('.return-to-top').on('click',function(){

				$('html, body').animate({

				scrollTop: 0

			}, 1500);

			return false;

		});

    // 2. range js

        $( "#slider-range" ).slider({
            range: true,
            min: 0,
            max: 12000,
            values: [ 2677, 9241 ],
            slide: function( event, ui ) {
            $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
        });
        $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
        " - $" + $( "#slider-range" ).slider( "values", 1 ) );


        // Quantity Buttons Shop

        $(".qtyplus").on("click", function(){
        var b = $(this).parents(".quantity-form").find("input.qty"),
                c = parseInt(b.val(), 10) + 1,
                d = parseInt(b.attr("max"), 10);
            d || (d = 9999999999), c <= d && (b.val(c), b.change())
        });
        $(".qtyminus").on("click", function(){
            var b = $(this).parents(".quantity-form").find("input.qty"),
                c = parseInt(b.val(), 10) - 1,
                d = parseInt(b.attr("min"), 10);
            d || (d = 1), c >= d && (b.val(c), b.change())
        });


    // 3.Countdown timer

        function makeTimer() {

                var endTime = new Date("March 7, 2018 12:00:00 PDT");
                var endTime = (Date.parse(endTime)) / 1000;

                var now = new Date();
                var now = (Date.parse(now) / 1000);

                var timeLeft = endTime - now;

                var days = Math.floor(timeLeft / 86400);
                var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
                var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
                var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

                if (hours < "10") { hours = "0" + hours; }
                if (minutes < "10") { minutes = "0" + minutes; }
                if (seconds < "10") { seconds = "0" + seconds; }

                $("#days").html(days + '<span class="camp">Days</span>');
                $("#hours").html(hours + '<span class="camp">Hour</span>');
                $("#minutes").html(minutes + '<span class="camp">Minute</span>');
                $("#seconds").html(seconds + '<span class="camp">Second</span>');

        }

        setInterval(function() { makeTimer(); }, 1000);

    // 4. owl carousel

        // i. #testimonial-carousel


        var owl=$('#testemonial-carousel');
        owl.owlCarousel({
            // items: 4,
            loop: true,
            margin: 0,
            center: true,
            autoplay: true,
            slideTransition: 'linear',
            autoplayTimeout: 0,
            autoplaySpeed: 3000,
            autoplayHoverPause: false,

            // items:3,
            // margin:0,

            // loop:true,
            // autoplay: true,
            // autoplayTimeout: 2000,
            // smartSpeed:4000,

            //nav:false,
            //navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
            // center: true,
            dots:false,
            // stagePadding: 100,
            // autoplayHoverPause:true,

            responsiveClass:true,
            responsive:{
                600:{
                    items:5
                }
            }
        });

        var owl=$('#testemonial-carousel2');
        owl.owlCarousel({
            // items: 4,
            rtl: true,
            loop: true,
            center: true,
            margin: 0,
            autoplay: true,
            slideTransition: 'linear',
            autoplayTimeout: 0,
            autoplaySpeed: 3000,
            autoplayHoverPause: false,

            // items:2,
            // margin:0,
            // loop:true,
            // autoplay: true,
            // autoplayTimeout: 2000,
            // smartSpeed:4000,

            //nav:false,
            //navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
            // center: true,
            dots:false,
            // autoplayHoverPause:true,

            responsiveClass:true,
            responsive:{
                600:{
                    items:5
                }
            }
        });

    // 5. datepicker
            $('[data-toggle="datepicker"]').datepicker();

    // 6. Smooth Scroll spy

        $('.header-area').sticky({
           topSpacing:0
        });

        //=============

        $('li.smooth-menu a').bind("click", function(event) {
            event.preventDefault();
            var anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $(anchor.attr('href')).offset().top - -1
            }, 1200,'easeInOutExpo');
        });

        $('body').scrollspy({
            target:'.navbar-collapse',
            offset:0
        });

    // 7.animation support

        $(window).load(function(){

            $(".about-us-txt h2").removeClass("animated fadeInUp").css({'opacity':'0'});
            $(".about-us-txt h4").removeClass("animated fadeInDown").css({'opacity':'0'});
        });

        $(window).load(function(){

            $(".about-us-txt h2").addClass("animated fadeInUp").css({'opacity':'0'});
            $(".about-us-txt h4").addClass("animated fadeInDown").css({'opacity':'0'});

        });


});

