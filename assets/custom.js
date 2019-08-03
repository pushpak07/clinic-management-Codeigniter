$(document).ready(function () {

'use strict';

$(".se-pre-con").fadeOut("slow");


//summernote
$('#summernote').summernote({
    height: 300, // set editor height
    minHeight: null, // set minimum height of editor
    maxHeight: null, // set maximum height of editor
    focus: true                  // set focus to editable area after initializing summernote
});

// tiemt picker
    $('#basic_example_1').timepicker();
    $('#basic_example_2').timepicker();

//date picker
    $(".datepicker1").datepicker(
        {
            dateFormat: 'yy-mm-dd',
            showMonths: true,
            changeMonth: true,
            changeYear: true,
            yearRange: "-100:+0"
    });


    $(".datepicker2").datepicker({dateFormat: 'yy-mm-dd'});

    $(".datepicker3").datepicker(
    {
    showOtherMonths: true,
    selectOtherMonths: true,
    dateFormat: 'yy-mm-dd',
    minDate: 0
    });


                //counter
                $('.count-number').counterUp({
                    delay: 10,
                    time: 5000
                });

                var colors = d3.scale.category10();

               

                //Chat list
                $('.chat_list').slimScroll({
                    size: '3px',
                    height: '305px',
                    allowPageScroll: true,
                    railVisible: true
                });

                // Message
                $('.message_inner').slimScroll({
                    size: '3px',
                    height: '320px',
                    allowPageScroll: true,
                    railVisible: true
                            // position: 'left'
                });

                //emojionearea
                $(".emojionearea").emojioneArea({
                    pickerPosition: "top",
                    tonesStyle: "radio"
                });

                //monthly calender
                $('#m_calendar').monthly({
                    mode: 'event',
                    //jsonUrl: 'events.json',
                    //dataType: 'json'
                    xmlUrl: 'events.xml'
                });
 
});




    

        




