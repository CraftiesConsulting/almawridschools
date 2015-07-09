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


	$(".group4").colorbox({rel:'group4', slideshow:false});

    //$('#cboxSlideshow').
    $('button#cboxClose').addClass('btn btn-danger');

});
