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
	

	//form validation ajax
	$formsignup = $('form#signupform');
	$formsignup.submit(function(e){
		e.preventDefault();

		var name = $formsignup.find('input#name').val();
		console.log(name);
		var email = $formsignup.find('input#email').val();
		var password = $formsignup.find('input#password').val();
		var age = $formsignup.find('input#age').val();
		var country = $formsignup.find('input#country').val();
		var code = $formsignup.find('input#code').val();
		var url = $(this).attr('action');
		//console.log(url);
		$.ajax({
			url: url,
	        type: 'POST',
	        data: {name: name, email: email, password: password, age: age, country: country, code: code},
	        dataType: 'text',
	        success: function(data){
	        	console.log(data);
	        	/*if(data.code == 0){
	        		var errors = data.errors;
	        		for(var key in errors){
	        			var i;
	        			if(errors.hasOwnProperty(key)){

	        			}
	        		}
	        	}*/
	        },
	        error:function(){

	        }
		});
	});
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

