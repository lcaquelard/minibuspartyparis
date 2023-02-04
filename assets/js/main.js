/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (main.css in this case)
import '../scss/main.scss';

// start the Stimulus application
import './bootstrap';

import './jquery.min';
import './slick.min';

import $ from 'jquery';

$(window).ready(function() {
    $('#index_slider').slick({
        infinite:true,
        slidesToShow: 3,
        slidesToScroll: 1,
        speed:300,
        autoplay: true,
        autoplaySpeed: 5000,
        swipeToSlide: true,
        variableWidth: true,
        centerMode: true,
        responsive: [
            {
                breakpoint:600,
                settings:{
                    slidesToShow:1
                }
            }
        ],
    });
    $('#index_slider.slider img.slick-slide').on('click', function(){
        let index = $(this).data('slick-index');
        let id = $(this).closest(".slider").attr('id');
        let modal = $('.modal.'+id);
        let slider = modal.find('.slider');
        console.log(slider);
        modal.addClass('active');
        if (slider.hasClass('slick-initialized')){
            slider.slick('slickGoTo', index, true);
        } else {
            slider.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                swipeToSlide: true,
                initialSlide: index
            });
        }
    });


    $('#catering_slider').slick({
        infinite:true,
        slidesToShow: 4,
        slidesToScroll: 1,
        speed:300,
        autoplay: true,
        autoplaySpeed: 5000,
        swipeToSlide: true,
        variableWidth: true,
        centerMode: true,
        responsive: [
            {
                breakpoint:600,
                settings:{
                    slidesToShow:1
                }
            }
        ],
    });
    $('#catering_slider.slider img.slick-slide').on('click', function(){
        let index = $(this).data('slick-index');
        let id = $(this).closest(".slider").attr('id');
        let modal = $('.modal.'+id);
        let slider = modal.find('.slider');
        console.log(slider);
        modal.addClass('active');
        if (slider.hasClass('slick-initialized')){
            slider.slick('slickGoTo', index, true);
        } else {
            slider.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                swipeToSlide: true,
                initialSlide: index
            });
        }
    });

    $('.modal .close').on('click', function(){
        $(this).parent().removeClass('active');
    });
    $(document).on('keydown', function(event) {
        if (event.key === "Escape") {
            $('.modal.active').removeClass('active');
        }
    });
});

// Recursively gathers the images accessed by the templates and then iteratively transposes these to the public build
//const imagesContext = require.context('../images', true, /\.(png|jpg|jpeg|gif|ico|svg|webp)$/);
//imagesContext.keys().forEach(imagesContext);

