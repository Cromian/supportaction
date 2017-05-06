$(document).ready(function() {

	$('#random-link').click(function(){
		location.reload(true);
	});

	//Footer Date
	$("#footer-date").text( (new Date).getFullYear() );

});
