$(function() {
	$("#submit_suggestion").click(function() {
		var suggestion_name = $(".suggestion_name").val();
		var suggestion_email = $(".suggestion_email").val();
		var suggestion_sgs = $(".suggestion_sgs").val();
		
		$.ajax({
			url:"suggestion.php",
			type:"POST",
			data:{suggestion_name:suggestion_name,suggestion_email:suggestion_email,suggestion_sgs:suggestion_sgs},
			success:function(data) {

				//姓名错误提示
            	if(data=="10001"){
            		layer.msg('姓名不能为空！', {icon: 5});
            	}else if (data=="10002"){
            		layer.msg('姓名格式不正确！', {icon: 5});
            	}else

            	//电子邮箱错误提示
            	if(data=="10011"){
            		layer.msg('邮箱不能为空！', {icon: 5});
            	}else if (data=="10012"){
            		layer.msg('邮箱格式不正确！', {icon: 5});
            	}else

            	//建议错误提示
            	if(data=="10031"){
            		layer.msg('建议不能为空！', {icon: 5});
            	}else if(data=="10000"){
            		layer.msg('提交成功！', {icon: 6});
            		$(".suggestion_name").val("");
            		$(".suggestion_email").val("");
            		$(".suggestion_sgs").val("");
            	}
			},
			error:function(){

			}
		});

	});
});