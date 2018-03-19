<?php 
    include_once 'mysql.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>关于我们</title>
        <link rel="stylesheet" type="text/css" href="css/common.css">
        <link rel="stylesheet" type="text/css" href="css/about.css">
    </head>
    <body>
        <?php include_once 'header.php'; ?>
        
        <section class="aboutus">
            <div class="container">
                <h2>关于我们</h2>
                <div class="left_img">
                    <img src="images/6.jpg">
                </div>
                <div class="right_txt">
                    <h4>我们只生产有中国特色社会主义的果汁</h4>
                    <p>这是一大段文案我也不知道写啥 百度翻译也没法翻译 反正就是不会写 巴拉巴拉巴拉巴贝拉把巴拉巴拉白萝卜 “一年多以前，和农夫山泉创始人钟睒睒一起去长白山，飞机上他和我说，他要做一款中国国家领导人接待外宾时桌子上放的水今天，他做到了！”钱江晚报记者的朋友圈，前些天有位前辈“大慰平生”发了这一段文字。矿泉水，早已经是人们日常生活中最常消费的饮品，即便顶尖规格的会议中也少不了它的身影。一瓶水的方寸之间，能做出什么样的文章？在刚刚过去的G20杭州峰会期间，频频出现在镜头里的农夫山泉给出了这么一个答案：质量、设计、细节的追求，“毫升”之间的匠心独运。
                    </p>
                    <p>连农夫山泉总裁办公室主任钟晓晓也感到意外，在全世界媒体对G20杭州峰会每一处细节都不放过的报道之中，在主会场、茶歇区、新闻中心、各大接待酒店以及国宴餐桌上，都能看到农夫山泉饮品的身影作为G20杭州峰会的工作和厨房用水的农夫山泉倒突然有了几分“网红”的待遇。</p>
                </div>
            </div>
        </section>

        <section class="ourteam">
            <div class="container">
                <h2>我们的团队</h2>
                <div class="all_team">
                    <?php 
                        for($imgid=1; $imgid<5; $imgid++){
                            $team_face = "SELECT url FROM team_face WHERE id=$imgid";
                            $search_team_face = mysqli_query($con, $team_face);
                            $team_face_result = mysqli_fetch_assoc($search_team_face);
                    ?>
                    <div>
                        <img src="<?php echo $team_face_result["url"]; ?>">
                        <div class="mark"></div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <section class="ourskill">
            <div class="container">
                <div class="skill_left">
                    <h3>我们的优势</h3>
                    <div class="kill_smallbox">
                        <p class="left_botton">1</p>
                        <div class="left_txt">
                            <h4><a href="#">我们只生产有中国特色社会主义的果汁</a></h4>
                            <p>这是一大段文案我也不知道写啥 百度翻译也没法翻译 反正就是不会写巴拉巴拉巴拉巴贝拉把巴拉巴拉白萝卜“一年多以前，和农夫山泉创始人钟睒睒一起去长白山，飞机上他和我说，他要做一款中国国家领导人接待外宾时桌子上放的水今天，他做到了！</p>
                        </div>
                    </div>

                    <div class="kill_smallbox">
                        <p class="left_botton">2</p>
                        <div class="left_txt">
                            <h4><a href="#">我们只生产有中国特色社会主义的果汁</a></h4>
                            <p>这是一大段文案我也不知道写啥 百度翻译也没法翻译 反正就是不会写巴拉巴拉巴拉巴贝拉把巴拉巴拉白萝卜“一年多以前，和农夫山泉创始人钟睒睒一起去长白山，飞机上他和我说，他要做一款中国国家领导人接待外宾时桌子上放的水今天，他做到了！</p>
                        </div>
                    </div>

                    <div class="kill_smallbox">
                        <p class="left_botton">3</p>
                        <div class="left_txt">
                            <h4><a href="#">我们只生产有中国特色社会主义的果汁</a></h4>
                            <p>这是一大段文案我也不知道写啥 百度翻译也没法翻译 反正就是不会写巴拉巴拉巴拉巴贝拉把巴拉巴拉白萝卜“一年多以前，和农夫山泉创始人钟睒睒一起去长白山，飞机上他和我说，他要做一款中国国家领导人接待外宾时桌子上放的水今天，他做到了！</p>
                        </div>
                    </div>
                </div>

                <div class="skill_right">
                    <h3>我们的技能</h3>
                    <div class="skill_right_top">
                        <h4><a href="#">我们只生产有中国特色社会主义的果汁</a></h4>
                        <p>这是一大段文案我也不知道写啥百度翻译也没法翻译反正就是不会写巴拉巴拉巴拉巴贝拉把巴拉巴拉白萝卜一年多以前，和农夫山泉创始人钟睒睒一起去长白山，飞机上他和我说，他要做一款中国国家领导人接待外宾时桌子上放的水今天，他做到了！！”钱江晚报记者的朋友圈，前些天有位前辈“大慰平生”发了这一段文字。矿泉水，早已经是人们日常生活中最常消费的饮品，即便顶尖规格的会议中也少不了它的身影。一瓶水的方寸之间，能做出什么样的文章？在刚刚过去的G20杭州峰会期间，频频出现在镜头里的农夫山泉给出了这么一个答案：质量、设计、细节的追求，“毫升”之间的匠心独运。</p>
                    </div>
                    <div class="skill_right_bt">
                        <ul>
                            <li><span><img src="images/icon3.png"><a href="#">乱七八糟的广告 巴拉巴拉巴拉巴贝拉把巴拉巴</a></span></li>
                            <li><span><img src="images/icon3.png"><a href="#">乱七八糟的广告 巴拉巴拉巴拉巴贝拉把巴拉巴</a></span></li>
                            <li><span><img src="images/icon3.png"><a href="#">乱七八糟的广告 巴拉巴拉巴拉巴贝拉把巴拉巴</a></span></li>
                            <li><span><img src="images/icon3.png"><a href="#">乱七八糟的广告 巴拉巴拉巴拉巴贝拉把巴拉巴</a></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <?php include_once 'footer.php'; ?>
    </body>
</html>