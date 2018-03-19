$(function(){
    $("#comment_submit").click(function(){

        //随机姓名
        var xing_array = new Array('赵', '钱', '孙', '李', '周', '吴', '郑', '王', '冯', '陈', '楮', '卫', '蒋', '沈', '韩', '杨',
                            '朱', '秦', '尤', '许', '何', '吕', '施', '张', '孔', '曹', '严', '华', '金', '魏', '陶', '姜',
                            '戚', '谢', '邹', '喻', '柏', '水', '窦', '章', '云', '苏', '潘', '葛', '奚', '范', '彭', '郎',
                            '鲁', '韦', '昌', '马', '苗', '凤', '花', '方', '俞', '任', '袁', '柳', '酆', '鲍', '史', '唐',
                            '年', '爱', '阳', '佟', '商', '牟', '佘', '佴', '伯', '赏');
        var ming_array = new Array('去','啊','人','我','他','好','的','分','个','还','前','群','呵','否','给','和','座','能','从',
                            '说','个','撒旦','而','人头','统一','帮你','测试','速度','如果','恶搞','阿森','挨饿','别人','出去',
                            '发个','立即','下次','差别','不能','奶妈','路口','科技','就好','很高','官方','发的','但是','仨','破',
                            '内容','同学','我还','人不','没呢','女王','测','昨天','那个','然后','黑铁','分','我的','强化','小时');
        var xing = xing_array[parseInt(xing_array.length*Math.random())];
        var ming = ming_array[parseInt(ming_array.length*Math.random())];

        //随机头像
        var face_num = parseInt(20*Math.random());

    	var bid = $("#now_id").val();
    	var username = xing+ming;
    	var face = "images/face/"+face_num+".jpg";
    	var time = Math.round(new Date().getTime()/1000);
    	var user_input = $("#comment_userinput").val();

    	if (user_input=="") {
    		layer.msg('评论不能为空！', {icon: 5});
    		return;
    	}else {
    		$.ajax({
    			url:"comment_submit.php",
    			type:"POST",
    			data:{bid:bid,username:username,face:face,time:time,user_input:user_input},
    			success:function(data){
    				if(data=="30000"){
    					layer.msg('评论成功！', {icon: 6});
                        $(".load_box").css("display", "block");
    					$("#comment_userinput").val("");
    					setTimeout(function () {
    					        history.go();
    					    }, 2000);
    				}else if(data=="30001"){
    					layer.msg('评论失败！', {icon: 5});
    				}else {
    					layer.msg('未知错误！', {icon: 5});
    				}
    			}
    		});
    	}
    	
    });
});