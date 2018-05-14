$(document).ready(function(){
	//alert(1);
	$(".btn-login").click(function(){
		//alert(1);
		record = $("#login_form").serialize();
		//console.log(record);
		$.post("../controllers/login-action.php",record).success(
			function(response){

				if(response=="ok"){
					window.location.href="index.php";
				}
				else{
					$(".msg_login").html(response);
				}
			})

	})

	$(".btn-register").click(function(){
		//alert(1);
		record = $("#register_form").serialize();
		//console.log(record);
		$.post("../controllers/register-action.php",record).success(
		function(response){

		$(".msg_register").html(response);
		})

	})
})
