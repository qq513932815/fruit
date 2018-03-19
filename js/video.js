window.onload = function(){
	var video_box = document.getElementById("video_box");
	var video = document.getElementById("video");
	var play = document.getElementById("play");
	var fullscreen = document.getElementById("fullscreen");
	var control = document.getElementById("control");
	var time = document.getElementById("time");
	var totletime = document.getElementById("totletime");
	totletime.innerText = calcTime(this.video.duration);
	var progress_warp = document.getElementById("progress_warp");
	var refresh = document.getElementById("refresh");

	var all_voice = document.getElementById("all_voice");
	var voice = document.getElementById("voice");
	var voice_warp = document.getElementById("voice_warp");

	// var download = document.getElementById("download");

	//事件监听（绑定）
	video_box.addEventListener("mouseover",show_control);
	video_box.addEventListener("mouseout",hide_control);
	video.addEventListener("click", video_play);
	video.addEventListener("dblclick", video_fullscreen);
	play.addEventListener("click", video_play);
	fullscreen.addEventListener("click", video_fullscreen);
	video.addEventListener("timeupdate", timeupdate);
	progress_warp.addEventListener("click", change_time);
	refresh.addEventListener("click", refresh_video);
	// download.addEventListener("click", downLoad);

	all_voice.addEventListener("mouseover", show_voice_ctl);
	all_voice.addEventListener("mouseout", hide_voice_ctl);
	voice.addEventListener("click", is_no_voice);
	voice_warp.addEventListener("click", voice_change);

	//视频播放
	function video_play(){
		if(video.paused){
			video.play();
			play.style.backgroundImage = "url('images/player/pause.png')";
		}else{
			video.pause();
			play.style.backgroundImage = "url('images/player/play.png')";
		}
	}

	//视频全屏
	function video_fullscreen(){
		if(video.requestFullscreen){
			video.requestFullscreen();
		}else if(video.webkitRequestFullscreen){
			video.webkitRequestFullscreen();
		}else if (video.mozRequestFullscreen) {
			video.mozRequestFullscreen();
		}
		fullscreen.removeEventListener("click", video_fullscreen);
		fullscreen.style.backgroundImage = "url('images/player/quit_fullscreen.png')";
		fullscreen.addEventListener("click", quit_fullscreen);
	}

	//退出全屏
	function quit_fullscreen(){
		var de = document;
		if(de.exitFullscreen){
			de.exitFullscreen();
		}else if(de.webkitCancelFullScreen){
			de.webkitCancelFullScreen();
		}else if(de.mozRequestFullscreen){
			de.mozRequestFullscreen();
		}
		fullscreen.removeEventListener("click", quit_fullscreen);
		fullscreen.style.backgroundImage = "url('images/player/fullscreen.png')";
		fullscreen.addEventListener("click", video_fullscreen);
	}

	//显示、隐藏控制器
	function show_control(){
		control.style.display = 'block';
	}

	function hide_control(){
		control.style.display = 'none';
	}
	function timeupdate(){
		time.innerText = calcTime(this.currentTime);

		var rate = this.currentTime / this.duration;
		var x_pos = rate * 400;

		progress.pos = x_pos;
		progress.render();
	}

	//时间格式转换
	function calcTime(time){
		var video_time = Math.floor(time);
		//获取小时
		var hours = 0;
		var minutes = 0;
		var seconds = 0;

		hours = Math.floor(video_time / 3600);
		video_time -= hours * 3600;
		minutes = Math.floor(video_time / 60);
		video_time -= minutes * 60;
		seconds = video_time;

		if(hours<10){
			hours = "0"+hours;
		}
		if(minutes<10){
			minutes = "0"+minutes;
		}
		if(seconds<10){
			seconds = "0"+seconds;
		}

		return hours + ":" + minutes + ":" + seconds;
	}

	//中级知识点
	var progress = new Progress();

	function Progress(){
		//声明一个函数对象
		var canvas = document.createElement("canvas");
		var ctx = canvas.getContext("2d");

		canvas.width = 400;
		canvas.height = 10;

		canvas.style.position = 'absolute';
		progress_warp.appendChild(canvas);

		//函数的属性
		this.pos = 5;
		//对象的方法
		this.render = function(){
			//绘图
			ctx.clearRect(0,0,canvas.width,canvas.height);
			ctx.beginPath();
			ctx.lineWidth = 10;//线条高度

			var color = ctx.createLinearGradient(0,0,400,10);
			color.addColorStop(0, "red");
			color.addColorStop(.2, "orange");
			color.addColorStop(.4, "yellow");
			color.addColorStop(.6, "green");
			color.addColorStop(.8, "blue");
			color.addColorStop(1, "purple");

			ctx.strokeStyle = color;//描边颜色
			ctx.lineCap = "round";//圆角
			ctx.moveTo(0,5);
			ctx.lineTo(this.pos, 5);
			ctx.stroke();
		}
	}

	//改变时间
	function change_time(){
		var x_pos = event.offsetX;
		var rate = x_pos / 400;
		progress.pos = x_pos;
		video.currentTime = rate * video.duration;
		progress.render();
	}

	//重载视频
	function refresh_video(){
		video.load();
	}

	//改变音量

	//控制条显示隐藏
	var show_voice_ctl = new show_voice_ctl();
	function show_voice_ctl(){
		change_voice.style.height = "130px";
		change_voice.style.display = "block";

		// //声明一个函数对象
		var canvas = document.getElementById("voice_canvas");
		var ctx = canvas.getContext("2d");

		// //函数的属性
		this.voice_pos = 0;
		// //对象的方法
		this.voice_render = function(){
		// 	//绘图
			ctx.clearRect(0,0,canvas.width,canvas.height);
			ctx.beginPath();
			ctx.lineWidth = 10;//线条高度

			var color = ctx.createLinearGradient(10,95,0,0);
			color.addColorStop(0, "red");
			color.addColorStop(.2, "orange");
			color.addColorStop(.4, "yellow");
			color.addColorStop(.6, "green");
			color.addColorStop(.8, "blue");
			color.addColorStop(1, "purple");

			ctx.strokeStyle = color;//描边颜色
			ctx.lineCap = "round";//圆角
			ctx.moveTo(5,100);
			ctx.lineTo(5,this.voice_pos);
			ctx.stroke();
		}
	}
	function hide_voice_ctl(){
		change_voice.style.height = "40px";
		change_voice.style.display = "none";
	}

	//图标变化
	function is_no_voice(){
		if(!video.muted){
			video.muted = true;
			voice.style.backgroundImage = "url('images/player/voice_none.png')";
			voice_num.innerText = 0;
			ctx.clearRect(0,0,canvas.width,canvas.height);
		}else if(video.muted){
			video.muted = false;
			voice.style.backgroundImage = "url('images/player/voice.png')";
			video.volume = 1;
			voice_update();
		}
		
	}

	function voice_change(){
		var voice_y_pos = 100-event.offsetY;
		var rate = voice_y_pos / 100;
		show_voice_ctl.voice_pos = 100-voice_y_pos;
		video.volume = rate;
		show_voice_ctl.voice_render();
		voice_update();
	}
	function voice_update(){
		var voice_y_pos = 100-event.offsetY;
		voice_num.innerText = voice_y_pos;
	}

}