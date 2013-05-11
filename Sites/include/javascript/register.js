	$(document).ready(function() {
		$("div.registerPage #submitRegister").click(function() {
			var username = $("div.registerPage #username").val();
			var password = $("div.registerPage #password").val();
			var firstname = $("div.registerPage #firstname").val();
			var lastname = $("div.registerPage #lastname").val();
			var address = $("div.registerPage #address").val();
			var tel = $("div.registerPage #tel").val();
			var email = $("div.registerPage #email").val();
			var errorMsg = "You forget to field data";
			
			var dataString = '&username=' + username + '&password=' + password;
			dataString += '&firstname=' + firstname + '&lastname=' + lastname;
			dataString += '&address=' + address + '&tel=' + tel + '&email=' + email;
			
			if(username=='')
			{
				$('#username_e').html(errorMsg);
			}
			else if(password==''){
				$('#password_e').html(errorMsg);
			}
			else if(firstname==''){
				$('#firstname_e').html(errorMsg);
			}
			else if(lastname==''){
				$('#lastname_e').html(errorMsg);
			}
			else if(address==''){
				$('#address_e').html(errorMsg);
			}
			else if(tel==''){
				$('#tel_e').html(errorMsg);
			}
			else if(email==''){
				$('#email_e').html(errorMsg);
			}
			else
			{
				var resultRegister =
					$.ajax({
						type: "POST",
						url: "./System/Register/register_proc.php",
						data: dataString,
						success: function(data){
							/*
							$('.success').fadeIn(200).show();
							$('.error').fadeOut(200).hide();
							*/
							
							if(data == "ok"){
								// $('#existEmail').html(data);
								$('#existEmail').html("<div>Register Successful, please check Your email and activite</div>");
								// $('#registerPage').load('../../System/Register/register2.php');
							}
							else if(data == "dumplicate account"){
								$('#existEmail').html("This user is already register");
							}
						}
					});
					// alert("aaa");
				// resultRegister.done(function (msg){
					// $("#existEmail").html(msg);
				// });
				// debugger;
				resultRegister.fail(function (jqXHR, textStatus){
					alert("Request fail : " + textStatus);
				});
			}
			return false; 
		});
	});
