(function ($) {
    "use strict";
    var mainApp = {

        main_fun: function () {

            //PRE LOADER SCRIPTS
            $(window).load(function () {
                $("#loader").fadeOut();
                $("#pre-div").delay(1000).fadeOut("slow");
            });

            // SLIDER SCRIPTS
            $('#carousel-slider').carousel({
                interval: 2000 //TIME IN MILLI SECONDS
            })
            //  SCROLL SCRIPT FUNCTION FOR NAVBAR 
            $(function () {
                $('.move-me a').bind('click', function (event) { //just pass move-me in design and start scrolling
                    var $anchor = $(this);
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1000, 'easeInOutQuad');
                    event.preventDefault();
                });
            });
                      

            //TESTIMONIAL & SLIDEER SPEED
            $('.carousel').carousel({
                interval: 4000 //TIME IN MILLI SECONDS
            });

           
           
            /*====================================
            WRITE YOUR SCRIPTS HERE
            ======================================*/
        },

        initialization: function () {
            mainApp.main_fun();

        }

    }
    // Initializing ///

    $(document).ready(function () {
        mainApp.main_fun();        
/*		var access_token = $("input[name=access_token]").val();
		var dataStr = $("#confirmform").serialize();
		if(access_token != ''){
			$.ajax({
				type: "POST",
				url: "application/controllers/public/action.php",
				data: dataStr,
				success: function(data){
					$('#showmessage').html('');
					$('#showmessage').html(data);
					$('#viewmessage').modal({
						keyboard: true
					});
				}
			});
		};*/
    });

}(jQuery));
jQuery('#datetimepicker').datetimepicker({
	format:'Y-m-d H:i:00',
	minDate:'0'
});

var limit = 1;

$("#messageform").submit(function() {
	var dataString = $("#messageform").serialize();
	$.ajax({
		type: "POST",
		url: "application/controllers/public/action.php",
		data: dataString,
		success: function(data){
			$('#showmessage').html('');
			$('#showmessage').html(data);
			$('#viewmessage').modal({
				keyboard: true
			});
		}
	});
	return false;
});

$("#loadmore").click(function() {
	var action = 'loadmore_message';
	$.ajax({
		type: "POST",
		url: "application/controllers/public/action.php",
		data: {action: action, limit: limit},
		success: function(data){
			$('#loadhere').html(data);
			limit = limit + 1;
		}
	});
	return false;
});