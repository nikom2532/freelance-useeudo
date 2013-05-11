//AJAX for submit to login
/*
$(function() {
	$(".submitLogin").click(function() {
		var username = $("#username").val();
		var password = $("#password").val();
		var dataString = '&username=' + username + '&password=' + password;
		
		if(username=='' || password=='')
		{
			$('.loginError').fadeIn(200).show();
		}
		else
		{
			$.ajax({
				type: "POST",
				url: "./System/login/login.php",
				data: dataString,
				success: function(data){
					// alert(data);
					$('.loginError').fadeOut(200).hide();
					$('#login').fadeIn(200).hide();
				}
			});
		}
		return false;
	});
});
*/