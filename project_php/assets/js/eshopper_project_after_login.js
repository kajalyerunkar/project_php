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

	$(".btn-product").click(function(){
		//create an obj of given form
		formobj=document.getElementById("product_form");
		//alert(formobj);
		//alert(1);
		//create an obj of form data
		dataobj = new FormData(formobj);
		alert(dataobj);
		$.ajax({
			
			data:dataobj,
			url:"../controllers/product-action.php",
			type:"post",
			contentType:false,
			processData:false,
			success:function(response){
				$(".msg_product").html(response);
			},
			error:function(errmsg){
				console.log(errmsg);
				}
			});
		// $.post("../controllers/product-action.php",record).success(function(res){
		// 	$(".msg_product").html(res);
		})



})