
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
        <title>果汁网</title>
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="css/common.css">
        <style type="text/css">
            @media only screen and (max-width:1515px) {
                /*footer*/
                .footer_flex {
                    width: 100%;
                }
                .footer_logo {
                    float: none;
                    width: 100%;
                    text-align: center;
                }
            }
            @media only screen and (max-width:780px) {
                body {
                    width: 100%;
                    min-width: auto;
                }

                .container {
                    width: 90%;
                }

                .carouse2 > .container > h3,
                .carouse3 > .container > h3,
                .carouse4 > .container > h3
                {
                    width: 100%;
                }

                /*顶部*/
                .header_top{
                    background: #fff;
                }
                .header_top,
                .header_top > .container,
                .header_top_left,
                .header_top_mid,
                .header_top_right {
                    display: none;
                }

                .navgation ul {
                    display: flex;
                    height: 100%;
                    margin-top: 2%;
                }

                .navgation ul li {
                    width: 33%;
                    height: 26px;
                }

                .navgation ul li a {
                    font-size: 10px;
                    width: 40px;
                    line-height: 26px;
                    margin: 0;
                }

                /*轮播图*/
                .car_txt {
                    margin: 0;
                    width: 100%;
                }

                .car_txt > p {
                    width: 100%;
                    height: auto;
                }

                .car_link {
                    margin-left: 0;
                    width: 100%;
                }

                /*欢迎光临*/
                .wel_img,
                .wel_img > a > img {
                    width: 100%;
                    height: 100%;
                }

                /*特色饮品*/
                figcaption {
                    display: none;
                }

                .big_box {
                    background-color: rgba(0,0,0,0);
                    height: auto;
                }

                .small_box {
                    width: 100%;
                    float: none;
                    height: auto;
                    background: #fff;
                }

                .bgimg > img {
                    width: 100%;
                }

                .sb3 {
                    padding: 40px 35px 40px 35px;
                }

                .sb4 {
                    border-color: #F896A9;
                }

                .text > h4 {
                    text-align: center;
                }

                .text > p {
                    font-size: 10px;
                }

                /*特色活动*/
                .active,
                .actives {
                    display: block;
                }

                .active_left,
                .actives,
                .active_right {
                    width: 100%;
                }

                .active_right {
                    margin-top: 20px;
                }

                .actives_apple,
                .actives_txt {
                    display: inline-block;
                }

                .actives_apple > img {
                    width: 100%;
                }

                .actives_time {
                    top: 50%;
                    left: 20%;
                }

                .actives_time > p {
                    font-size: 15px;
                }

                .logo_img > a > img,/*logo*/
                .active_right > img {
                    width: 100%;
                }

                /*footer*/
                .email_input {
                    width: 76%;
                }

                .email_btn {
                    width: 20%;
                }
            }

            @media only screen and (max-width:740px) {
                .footer_flex,
                .footer_grid {
                    display: block;
                }

                .footer_logo {
                    text-align: left;
                }

                .footer_logo > img {
                    width: 100%;
                }

                .footer_grid {
                    width: 100%;
                }

                .email_input {
                    width: 194px;
                    padding: 12px 7% 11px 10px;
                }

                .email_btn {
                    width: 45px;
                    right: 0;
                    left: 149px;
                }
            }

            @media only screen and (max-width:360px) {
                /*轮播图*/
                .car_txt > p {
                    overflow: hidden;
                    text-overflow: ellipsis;
                    display: -webkit-box;
                    -webkit-line-clamp: 12;
                    -webkit-box-orient: vertical;
                }

                /*特色活动*/
                .actives_apple,
                .actives_txt {
                    display: block;
                }

                .actives_txt {
                    width: 100%;
                }

                .actives_txt > h4 {
                    text-align: center;
                }

                .actives_apple {
                    margin: 0 auto;
                }
            }

            @media only screen and (max-width:335px) {
                .car_link > li  {
                    width: 30%;
                }

                .car_link > li > a {
                    width: 90%;
                }

                .actives_time > p {
                    font-size: .4em;
                }
            }
        </style>
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                $(".a1").click(function() {
                    $(".a2,.a3").css('background', '#fff');
                    $(".a1").css('background', '#f896a9');
                    $(".text1").show();
                    $(".text2").hide();
                    $(".text3").hide();
                });
                $(".a2").click(function() {
                    $(".a1,.a3").css('background', '#fff');
                    $(".a2").css('background', '#f896a9');
                    $(".text1").hide();
                    $(".text2").show();
                    $(".text3").hide();
                });
                $(".a3").click(function() {
                    $(".a2,.a1").css('background', '#fff');
                    $(".a3").css('background', '#f896a9');
                    $(".text1").hide();
                    $(".text2").hide();
                    $(".text3").show();
                });
            });
        </script>
    </head>
    <body>
        <?php include_once 'header.php'; ?>
        <section class="carousel">
            <div class="container">
                <div class="car_txt text1">
                    <h3>Cherry Juice</h3>
                    <h4>有一种微苦果汁叫樱桃果汁</h4>
                    <p>樱桃果实软而多汁，易损伤腐烂，且收获期短，但必须在成熟期采收。它的贮藏期也短，不超过2～3周。除鲜食外，还可加工成樱桃果汁。为保证果汁有良好风味和颜色。要选择完好、无损、新鲜果实，如有腐烂，则产品常散发出类似苯甲醛气味。如在成熟期采收和加工，可获得最佳品质和最高出汁率。否则，果汁不仅味酸，而且颜色差。果汁榨取可采用三种方法：新鲜樱桃热压榨、新鲜樱桃冷压榨和樱桃解冻后的冷压榨。为改进樱桃果汁风味，需要对酸、甜度进行调整，使果汁风味接近于鲜果，但调整范围不宜过大</p>
                    <a href="comment.php?id=5" class="more">了解更多</a>
                </div>
                <div class="car_txt text2">
                    <h3>lemon Juice</h3>
                    <h4>还有一种巨酸果汁叫做柠檬汁</h4>
                    <p>柠檬汁是新鲜柠檬经榨挤后得到的汁液，酸味极浓，伴有淡淡的苦涩和清香味道。柠檬汁含有糖类、维生素c、维生素B1、B2，烟酸、钙、磷、铁等营养成分。<br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;柠檬汁为常用饮品，亦是上等调味品，常用于西式菜肴和面点的制作中。柠檬果汁具有止咳、化痰、生津健脾等功效，能增强免疫力、延缓衰老。柠檬具有高度碱性，是很好的治疗疾病的良药，具有止咳、化痰、生津健脾。且对于人体的血液循环以及钙质的吸收有相当大的助益，其丰富的维生素C，不但能够预防癌症、降低胆固醇、预防食物中毒、消除疲劳、增强免疫力、延缓衰老、保持肌肤弹性，还能预防糖尿病、高血压、贫血、感冒、骨质疏松症等等。[1] </p>
                    <a href="comment.php?id=6" class="more">了解更多</a>
                </div>
                <div class="car_txt text3">
                    <h3>Orange Juice</h3>
                    <h4>最好喝的果汁还是橙汁吧！</h4>
                    <p>橙汁（Orange juice），是以橙子为原料经过榨汁机压榨得到的果汁饮料。新鲜而营养价值高，可经过冷冻的方法饮用或直接饮用[1] 。<br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;功效作用方面，柑橘类水果汁，特别是橙和橘子汁中的黄酮能有效抑制乳腺癌、肺癌等细胞的增生。经常饮用橙汁也可以有效预防某些慢性疾病、维持心肌功能以及降低血压。研究显示，每天喝3杯橙汁可以增加体内高密度脂蛋白（HDL）的含量，从而降低患心脏病的可能。此外，在服药期间吃一些橙子或饮橙汁，可增加机体对药物的吸收量，从而使药效加倍。</p>
                    <a href="comment.php?id=6" class="more">了解更多</a>
                </div>
                <ul class="car_link">
                    <li><a href="javascript:void(0);" class="a1" style="background: #f896a9;"></a></li>
                    <li><a href="javascript:void(0);" class="a2"></a></li>
                    <li><a href="javascript:void(0);" class="a3"></a></li>
                </ul>
            </div>
        </section>

        <!-- 欢迎光临 -->
        <section class="carouse2">
            <div class="container">
                <h3>欢迎光临</h3>
                <div class="wel_img">
                    <a href="#"><img src="images/1.jpg"></a>
                </div>
                <h4>猕猴桃橙汁</h4>
                <p>猕猴桃（学名：Actinidia chinensis Planch），也称奇异果（奇异果是猕猴桃的一个人工选育品种，因使用广泛而成为了猕猴桃的代称）。世界猕猴桃原产地在中国湖北省宜昌市夷陵区雾渡河镇[1]  ，2008年11月6日，在新西兰举行的国际猕猴桃大会上，世界19个国家200多位专家一致认定：中国是猕猴桃的原生中心，世界猕猴桃原产地在湖北宜昌市夷陵区雾渡河镇。<br/>
                    橙子（学名：Citrus sinensis 英语：orange），是芸香科柑橘属植物橙树的果实，亦称为黄果、柑子、金环、柳丁。橙子是一种柑果，是柚子（Citrus maxima）与橘子的杂交品种。有很高的食用，药用价值。
                </p>
            </div>
        </section>

        <!-- 特色饮品 -->
        <section class="carouse3">
            <div class="container">
                <h3>特色饮品</h3>
                <div class="big_box">
                    <div class="small_box box">
                        <figure class="bgimg sb1">
                            <img src="images/4.jpg">
                            <figcaption>
                                <h4>FRUIT CRUSH</h4>
                                <p>In sit amet sapien eros Integer quibusdam et aut officiis debitis aut rerum in tincidunt labore et dolore magna aliqua</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="small_box sb2">
                        <div class="text">
                            <h4>夏天的水果————西瓜</h4>
                            <p>西瓜（学名：Citrullus lanatus (Thunb.) Matsum. et Nakai）一年生蔓生藤本；茎、枝粗壮，具明显的棱。卷须较粗壮，具短柔毛，叶柄粗，密被柔毛；叶片纸质，轮廓三角状卵形，带白绿色，两面具短硬毛，叶片基部心形。雌雄同株。雌、雄花均单生于叶腋。雄花花梗长3-4厘米，密被黄褐色长柔毛；花萼筒宽钟形；花冠淡黄色；雄蕊近离生，花丝短，药室折曲。雌花：花萼和花冠与雄花同；子房卵形，柱头肾形。果实大型，近于球形或椭圆形，肉质，多汁，果皮光滑，色泽及纹饰各式。种子多数，卵形，黑色、红色，两面平滑，基部钝圆，通常边缘稍拱起，花果期夏季。</p>
                        </div>
                    </div>
                    <div class="small_box sb3 text">
                        <h4>草莓草莓草莓汁</h4>
                        <p>草莓汁是以草莓为主要原料制作而成的饮品。选择充分成熟的莓果清洗干净，然后放入榨汁机中分离汁液，或将草莓放进容器中人工碎捣成浆状，倒入不锈钢锅或铝锅中、加入少量水升温煮沸后，迅速熄火降温，待5～6分钟后，用3～4层纱布过滤，并用器具协助将汁挤压尽。</p>
                    </div>
                    <div class="small_box box">
                        <figure class="bgimg sb4">
                            <img src="images/3.jpg">
                            <figcaption>
                                <h4>FRUIT CRUSH</h4>
                                <p>In sit amet sapien eros Integer quibusdam et aut officiis debitis aut rerum in tincidunt labore et dolore magna aliqua</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section>

        <!-- 特色活动 -->
        <section class="carouse4">
            <div class="container">
                <h3>营养价值</h3>
                <div class="active">
                    <div class="active_left">
                        
                        <?php
                        
                        include_once 'mysql.php';
                        $nutritive_artical_select = "SELECT * FROM nutritive";
                        $nutritive_artical_query = mysqli_query($con, $nutritive_artical_select);

                        for($a=1; $a<=3; $a++){ 
                            if($a=="2"){
                                $actives_mid = "actives_mid";
                            }else{
                                $actives_mid = "";
                            }
                            $Nutritive_artical_result = mysqli_fetch_assoc($nutritive_artical_query);
                        ?>
                        <div class="actives <?php echo $actives_mid; ?>">
                            <div class="actives_apple">
                                <img src="images/apple.png">
                                <div class="actives_time">
                                    <p><?php echo $Nutritive_artical_result["time"]; ?></p>
                                </div>
                            </div
                            ><div class="actives_txt">
                                <h4><?php echo $Nutritive_artical_result["title"]; ?></h4>
                                <p><?php echo $Nutritive_artical_result["article"]; ?></p>
                            </div>
                        </div>
                        <?php } ?>
                        
                    </div>
                    <div class="active_right">
                        <img src="images/2.jpg">
                    </div>
                </div>
            </div>
        </section>

        <?php include_once 'footer.php'; ?>
    </body>
</html>