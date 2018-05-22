$(document).ready(function(){
	$(".btn-update").click(function(){

		record =$("#update_form").serialize();
		//console.log(record);
		$.post("../controllers/password-action.php",record).success(function(res){
			$(".msg_update").html(res);
		})
	})

	$(".btn-brand").click(function(){

		record =$("#brand_form").serialize();
		//console.log(record);
		$.post("../controllers/brand-action.php",record).success(function(res){
			$(".msg_brand").html(res);
		})
	})
})