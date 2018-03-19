<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>视频</title>
        <link rel="stylesheet" type="text/css" href="css/common.css">
        <link rel="stylesheet" type="text/css" href="css/video.css">
        <script src="js/video.js" type="text/javascript"></script>
    </head>
    <body>
        <?php include_once 'header.php'; ?>
        
        <section class="video_player">
            <div class="container">
                <h2>视频</h2>
                <div id="video_box">
                    <video id="video" src="images/video.mp4" width="800" height="400"></video>
                    <div id="control">
                        <div id="play" class="one_icon"></div>
                        <div id="fullscreen" class="one_icon"></div>
                        <span id="time">00:00:00</span>
                        <div id="progress_warp"></div>
                        <span id="totletime">00:00:00</span>
                        <div id="all_voice">
                            <div id="voice" class="one_icon"></div>
                            <div id="change_voice">
                                <div id="voice_warp">
                                    <canvas width="10" height="100" style="position: absolute;" id="voice_canvas"></canvas>
                                </div>
                                <span id="voice_num">100</span>
                            </div>
                        </div>
                        <div id="barrage" class="one_icon"></div>
                        <div id="refresh" class="one_icon" title="重新载入"></div>
                        <div id="barrage" class="one_icon"></div>
                        <a id="download" class="one_icon" href="images/video.zip" title="下载视频"></a>
                    </div>
                </div>
                
            </div>
        </section>

        <?php include_once 'footer.php'; ?>
    </body>
    <script type="text/javascript">
            var canvas = document.getElementById("voice_canvas");
            var ctx = canvas.getContext("2d");
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
                    ctx.lineTo(5,0);
                    ctx.stroke();
        </script>
</html>