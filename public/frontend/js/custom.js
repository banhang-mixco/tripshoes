//profile
$(document).ready(function(){

});



//send email to reset password
$(document).ready(function(){
	$formsignup = $('form#signupform');
	$formsignup.submit(function(e){
		e.preventDefault();
		var name = $formsignup.find('input#name').val();
		var email = $formsignup.find('input#email').val();
		var password = $formsignup.find('input#password').val();
		var age = $formsignup.find('input#age').val();
		var country = $formsignup.find('input#country').val();
		var code = $formsignup.find('input#code').val();
		var url = $(this).attr('action');

		$.ajax({
			url: url,
	        type: 'POST',
	        data: {name: name, email: email, password: password, age: age, country: country, code: code},
	        dataType: 'json',
	        success: function(data){
	        	if(data.code == 0){
	        		var errors = data.errors;
	        		for(var key in errors){
	        			var $id = $formsignup.find('#' + key);
	        			var i;
	        			$finddiv = $formsignup.find($id).parent();
	        			$finddiv.addClass('has-error');
	        			if(errors.hasOwnProperty(key)){
	        				if(errors[key].length>0){
                                for(i=0; i<errors[key].length;i++){
                                	html = '';
                                	html += '<span class="help-block mb-0">';
                                	html += errors[key][i];
                                	html += '</span>';
                                	$finddiv.append(html);
								}
                            }
	        			}
	        		}
	        	}
	        },
	        error:function(){

	        }
		});
	});
});


//signin
$(document).ready(function(){
	//ajax validation
	$formsignin = $('form#formsignin');
	$formsignin.submit(function(e){
		e.preventDefault();
		
		var email = $formsignin.find('input#email').val();
		var password = $formsignin.find('input#password').val();
		var url = $(this).attr('action');

		$.ajax({
			url: url,
	        type: 'POST',
	        data: {email: email, password: password},
	        dataType: 'json',
	        success: function(data){
	        	
	        	$formsignin.find('.form-group').each(function(){
	        		$(this).removeClass('has-error');
	        		$(this).find('.help-block').remove();
	        	});
	        	if(data.code == 0){

	        		var errors = data.errors;
	        		for(var key in errors){

	        			var $id = $formsignin.find('#' + key);

	        			var i;
	        			$finddiv = $formsignin.find($id).parent();
	        			$finddiv.addClass('has-error');
	        			
	        			if(errors.hasOwnProperty(key)){
	        				if(errors[key].length>0){
                                for(i=0; i<errors[key].length;i++){
                                	html = '';
                                	html += '<span class="help-block mb-0">';
                                	html += errors[key][i];
                                	html += '</span>';
                                	$finddiv.append(html);
								}
                            }
	        			}
	        		}else if(data.code==1){
	        			window.location.href = '/';
	        		}
	        	}
	        },
	        error:function(){

	        }
		});
	});
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

	//ajax validation
	$formsignup = $('form#signupform');
	$formsignup.submit(function(e){
		e.preventDefault();
		var name = $formsignup.find('input#name').val();
		var email = $formsignup.find('input#email').val();
		var password = $formsignup.find('input#password').val();
		var age = $formsignup.find('input#age').val();
		var country = $formsignup.find('input#country').val();
		var code = $formsignup.find('input#code').val();
		var url = $(this).attr('action');

		$.ajax({
			url: url,
	        type: 'POST',
	        data: {name: name, email: email, password: password, age: age, country: country, code: code},
	        dataType: 'json',
	        success: function(data){
	        	if(data.code == 0){
	        		var errors = data.errors;
	        		for(var key in errors){
	        			var $id = $formsignup.find('#' + key);
	        			var i;
	        			$finddiv = $formsignup.find($id).parent();
	        			$finddiv.addClass('has-error');
	        			if(errors.hasOwnProperty(key)){
	        				if(errors[key].length>0){
                                for(i=0; i<errors[key].length;i++){
                                	html = '';
                                	html += '<span class="help-block mb-0">';
                                	html += errors[key][i];
                                	html += '</span>';
                                	$finddiv.append(html);
								}
                            }
	        			}
	        		}
	        	}
	        },
	        error:function(){

	        }
		});
		console.log('hello');
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

