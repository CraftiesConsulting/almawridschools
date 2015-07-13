/*

My Custom JS
============

Author:  Alaba Mustapha

*/




$(document).ready(function(){

    $(document).ready(function(){

        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items:4,
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true
        });
        //$('.play').on('click',function(){
        //    owl.trigger('autoplay.play.owl',[2000])
        //})
        //$('.stop').on('click',function(){
        //    owl.trigger('autoplay.stop.owl')
        //})
    });


	$(".student").colorbox({rel:'student', slideshow:false});
    $(".staff").colorbox({rel:'staff', slideshow:false});

    //$('#cboxSlideshow').
    $('button#cboxClose').addClass('btn btn-danger');

});
