jQuery('#frmRegister').on('submit',function(e){
	jQuery('.error_field').html('');
	jQuery('#register_submit').attr('disabled',true);
	jQuery('#form_msg').html('Please wait...');
	jQuery.ajax({
		url:'login_register_submit.php',
		type:'post',
		data:jQuery('#frmRegister').serialize(),
		success:function(result){
			jQuery('#form_msg').html('');
			jQuery('#register_submit').attr('disabled',false);
			var data=jQuery.parseJSON(result);
			if(data.status=='error'){
				jQuery('#'+data.field).html(data.msg);
			}
			if(data.status=='success'){
				jQuery('#'+data.field).html(data.msg);
				jQuery('#frmRegister')[0].reset();
			}
		}
		
	});
	e.preventDefault();
});	


jQuery('#frmLogin').on('submit',function(e){
	jQuery('.error_field').html('');
	jQuery('#login_submit').attr('disabled',true);
	jQuery('#form_login_msg').html('Please wait...');
	jQuery.ajax({
		url:'login_register_submit.php',
		type:'post',
		data:jQuery('#frmLogin').serialize(),
		success:function(result){
			jQuery('#form_login_msg').html('');
			jQuery('#login_submit').attr('disabled',false);
			var data=jQuery.parseJSON(result);
			if(data.status=='error'){
				jQuery('#form_login_msg').html(data.msg);
			}
			if(data.status=='success'){
				//jQuery('#form_login_msg').html(data.msg);
				window.location.href='index.php';
			}
		}
		
	});
	e.preventDefault();
});	







// function add_to_cart(id,type){
// 	var qty=jQuery('#qty'+id).val();
// 	var attr=jQuery('input[name="radio_'+id+'"]:checked').val();
// 	var is_attr_checked='';
// 	if(typeof attr=== 'undefined'){
// 		is_attr_checked='no';
// 	}
// 	if(qty>0 && is_attr_checked!='no'){
// 		jQuery.ajax({
// 			url:FRONT_SITE_PATH+'manage_cart',
// 			type:'post',
// 			data:'qty='+qty+'&attt='+attr+'&type='+type,
// 			success:function(result){
// 				swal("Congratulation!", "Dish added successfully", "success");
// 				jQuery('#shop_added_msg_'+attr).html('(Added -'+qty+')');
// 			}
// 		});
// 	}else{
// 		swal("Error", "Please select qty and dish item", "error");
// 	}
// }