<?php 
    include_once 'mysql.php';
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>联系我们</title>
        <link rel="stylesheet" type="text/css" href="css/common.css">
        <link rel="stylesheet" type="text/css" href="css/contact.css">
        <link rel="stylesheet" href="js/theme/default/layer.css" type="text/css">
        <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=fjaOXUMMkuP8W39G7RbjdsNxpfTULEUH"></script>
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="js/layer.js" type="text/javascript"></script>
        <script src="js/contact_submit.js" type="text/javascript"></script>
    </head>
    <body>
        <?php include_once 'header.php'; ?>
        <section class="contactus">
        	<div class="container">
        		<h2>联系我们</h2>
                <div class="userinput">
                    <p>你的名字</p>
                    <input type="text" class="suggestion_name">
                    <p>你的电子邮箱</p>
                    <input type="text" class="suggestion_email">
                    <p>你的意见</p>
                    <input type="text" class="suggestion_sgs">
                    <a href="javascript:void(0);" id="submit_suggestion">提交</a>
                </div>
                <div class="position">
                    <h4>我们的位置</h4>
                    <p> &nbsp;&nbsp;&nbsp;&nbsp;我们位于保定市军校广场，保定有“京畿重地”之称，是京津冀地区中心城市之一，北邻北京市和张家口市，东接廊坊市和沧州市，南与石家庄市和衡水市相连，西部与山西省接壤。
                    </p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;保定以“保卫大都，安定天下”得名，素有“北控三关南达九省畿辅重地，都南屏翰”之称。清代，保定为直隶省省会，是直隶总督驻地，在此后200多年间为中国近代史上的区域性政治中心新中国成立后曾两度为河北省省会保定也是传说中尧帝的故乡，有着3000多年的历史是历史上燕国、中山国、后燕立都之地境内文物古迹众多，如大慈阁、直隶总督署、清西陵等</p>
                </div>
        	</div>
        </section>
        <section class="map">
            <div class="container">
                <div id="allmap"></div>
            </div>
        </section>
        <?php include_once 'footer.php'; ?>
    </body>
    <script type="text/javascript">
        // 百度地图API功能
        var map = new BMap.Map("allmap");    // 创建Map实例
        map.centerAndZoom(new BMap.Point(115.550904,38.873351), 17);  // 初始化地图,设置中心点坐标和地图级别
        //添加地图类型控件
        map.addControl(new BMap.MapTypeControl({
            mapTypes:[
                BMAP_NORMAL_MAP,
                BMAP_HYBRID_MAP
            ]}));     
        map.setCurrentCity("保定市");          // 设置地图显示的城市 此项是必须设置的
        map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
    </script>
</html>