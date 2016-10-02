//profile
$(document).ready(function(){

});



//send email to reset password
$(document).ready(function(){

});

//signup

$(document).ready(function(){
	var url = window.location.href;
	var host = window.location.host; // sogtvt.atk
    var protocol = window.location.protocol;
    var pathname = window.location.pathname;
	
	if(pathname == '/signup'){
		$('#signup').modal('show');
	}
});

//tick button to add or minus ticket
$(document).ready(function(){
	$('.number_ticket a.plus').click(function(e){
		e.preventDefault();
		//console.log($(this).parent().find('.ticket').text());
		var findticket = $(this).parent().find('.ticket');
		var number_ticket = parseInt(findticket.text());
		if(number_ticket < 20){
			number_ticket = number_ticket + 1;
		}
		findticket.text(number_ticket);

	});

	$('.number_ticket a.minus').click(function(e){
		e.preventDefault();
		//console.log($(this).parent().find('.ticket').text());
		var findticket = $(this).parent().find('.ticket');
		var number_ticket = parseInt(findticket.text());
		if(number_ticket > 1){
			number_ticket = number_ticket - 1;
		}
		findticket.text(number_ticket);

	});
});

//resetPassword
$(document).ready(function(){
	var url = window.location.href;
	var host = window.location.host; // sogtvt.atk
    var protocol = window.location.protocol;
    var pathname = window.location.pathname;
	
	if(pathname == '/resetPassword'){
		$('#resetPassword').modal('show');
	}
});

