(function($){
	$.fn.countDownToEvent = function(options, callback){

		this_select = this;
		var settings = { eventDate: null };
		if (options) {
			$.extend(settings, options);
		};

			
		function countdown_exec(){
			 currentDate = Math.floor(Date.now() / 1000);
			 eventDate = Date.parse(settings['eventDate']) / 1000;
			
			if (eventDate <= currentDate) {
				callback.call(this);
				clearInterval(interval);
			};
			seconds = eventDate - currentDate;
			days = Math.floor(seconds/(60*60*24));
			seconds -= days*60*60*24;

			hours = Math.floor(seconds / (60*60));
			seconds -= hours*60*60;

			minutes = Math.floor(seconds/60);
			seconds -= minutes*60;

			days = ( String(days).length < 2 ) ? '0' + days : days;
			hours = ( String(hours).length < 2 ) ? '0' + hours : hours;
			minutes = ( String(minutes).length < 2 ) ? '0' + minutes : minutes;
			seconds = ( String(seconds).length < 2 ) ? '0' + seconds : seconds;

			this_select.find('.days').text(days);
			this_select.find('.hours').text(hours);
			this_select.find('.minutes').text(minutes);
			this_select.find('.seconds').text(seconds);
		}
			
		countdown_exec();
		interval = setInterval(countdown_exec, 1000);

	}
		
})(jQuery);