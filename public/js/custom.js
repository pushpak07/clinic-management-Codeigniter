$.datepicker.regional['it'] = {
    closeText: 'Chiudi', // set a close button text
    currentText: 'Oggi', // set today text
    monthNames: ['Gennaio','Febbraio','Marzo','Aprile','Maggio','Giugno',   'Luglio','Agosto','Settembre','Ottobre','Novembre','Dicembre'], // set month names
    monthNamesShort: ['Gen','Feb','Mar','Apr','Mag','Giu','Lug','Ago','Set','Ott','Nov','Dic'], // set short month names
    dayNames: ['Domenica','Luned&#236','Marted&#236','Mercoled&#236','Gioved&#236','Venerd&#236','Sabato'], // set days names
    dayNamesShort: ['Dom','Lun','Mar','Mer','Gio','Ven','Sab'], // set short day names
    dayNamesMin: ['Do','Lu','Ma','Me','Gio','Ve','Sa'], // set more short days names
    dateFormat: 'dd/mm/yy' // set format date
};

$.datepicker.setDefaults($.datepicker.regional['it']);

$(document).ready(function () {
    
'use strict';

    //sticky navbar
    var $header = $('nav');
    $(window).scroll(function () {
        var scroll = $(this).scrollTop();
        if (scroll >= 40) {
            $header.addClass('navbar-fixed-top');
            $('body').addClass('add-nav-padding');
        }
        else {
            $header.removeClass('navbar-fixed-top');
            $('body').removeClass('add-nav-padding');
        }
    });

    //owl carousel
    var owl = $("#owl-slider");
    owl.owlCarousel({
       autoPlay: 4000,
        navigation: true,
        pagination: false,
        singleItem: true,
        transitionStyle: "fade",
        navigationText: [
            "<i class='fa fa-arrow-right'></i>",
            "<i class='fa fa-arrow-left'></i>"
        ],
        eforeInit: function (elem) {
            //Parameter elem pointing to $("#owl-demo")
            random(elem);
        }
    });
    //
      $("#owl-youtube").owlCarousel({
     
          autoPlay: 3000, //Set AutoPlay to 3 seconds
     
          items : 4,
          itemsDesktop : [1199,3],
          itemsDesktopSmall : [979,3]
     
      });
     



    //datepicker
    $("#datepicker").datepicker({dateFormat: 'yy-mm-dd'});
    $("#datepicker2").datepicker({
            dateFormat: 'yy-mm-dd',
            showOtherMonths: true,
            selectOtherMonths: true,
            changeMonth: true,
            changeYear: true
        });
    $(".datepicker3").datepicker(
    {
        dateFormat: 'yy-mm-dd',
        showMonths: true,
        minDate: 0
    });

    //counter
    $('.count').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

    //tab
        $('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');

        $('.tab ul.tabs li a').click(function (g) {
            var tab = $(this).closest('.tab'),
                    index = $(this).closest('li').index();

            tab.find('ul.tabs > li').removeClass('current');
            $(this).closest('li').addClass('current');

            tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
            tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();

            g.preventDefault();
        });





    /* ---------------------------------------------
     Youtube Video
     --------------------------------------------- */
    var api_key = 'AIzaSyAroKpLQWTON6y34m5VqGcLCPtOmfLBqh4';

    // Start all players on the page with default options
    $('.RYPP').rypp('AIzaSyAroKpLQWTON6y34m5VqGcLCPtOmfLBqh4');

    // Start two players by ID, with default settings
    $('#rypp-demo-1').rypp(api_key, {
        autoplay: false,
        autonext: false,
        loop: false,
        mute: true
    });

//https://www.googleapis.com/youtube/v3/channels?part=contentDetails&mine=true&key=AIzaSyAroKpLQWTON6y34m5VqGcLCPtOmfLBqh4

});












