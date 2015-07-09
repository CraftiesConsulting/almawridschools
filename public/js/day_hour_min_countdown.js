$(document).ready(function(){

	var date = '11 november 2015 00:00:00';
	$('#countDown').countDownToEvent( { eventDate : date }, function(){
		alert( Date.getDate("11 november 2011 00:00:00") );
	} );

});