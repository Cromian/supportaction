$(document).ready(function() {
	
	$("#random-link").click(function(){
		$('#refresh-link').click();
	});
	
	//Refresh Link
	$("#refresh-link").click(function(){
		location.reload();
	});

	//Footer Date
	$("#footer-date").text( (new Date).getFullYear() );

});
