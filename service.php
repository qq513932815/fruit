<?php
    include_once 'mysql.php';
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>服务</title>
        <link rel="stylesheet" type="text/css" href="css/common.css">
        <link rel="stylesheet" type="text/css" href="css/service.css">
    </head>
    <body>
        <?php include_once 'header.php'; ?>

        <section class="need_help">
            <div class="container">
                <h2>需要什么帮助</h2>

                <div class="help_section">
                    <div class="help_icon">
                        <img src="images/help-img1.png">
                    </div>
                    <h3>最好的服务</h3>
                    <p>在这里，我们将秉承“客户就是上帝”的理念，全心全意为您提供最好的服务， “我们不断钻研,为的就是能把平度电网建设得更好,这样才能为每一位用电客户提供最好的服务。”</p>
                </div
                ><div class="help_section">
                   <div class="help_icon">
                        <img src="images/help-img2.png">
                    </div>
                    <h3>意见&&建议</h3>
                    <p>衷心的感谢您对我们的信任和支持。为了不断提高我们的服务质量，完善我们的工作，为了给您提供更加优质的服务，在致以我们诚挚问候的同时，请您在百忙之中填写以下意见反馈表。谢谢!</p>
                </div
                ><div class="help_section">
                     <div class="help_icon">
                        <img src="images/help-img3.png">
                    </div>
                    <h3>喜欢请收藏我们的网站</h3>
                    <p>温馨提示：请做好详细的收藏分类哦~这个工作应该从一开始使用收藏夹就完成，然后在以后的使用中严格按照标准归类网址。否则随着网址的增多，整理工作会越来越复杂。</p>
                </div
                ><div class="help_section">
                     <div class="help_icon">
                        <img src="images/help-img4.png">
                    </div>
                    <h3>不断更新自身</h3>
                    <p>有创新，一个网站才能在这个行业内长久的生存下去，而长久的生存下去并不断发展，一直我就是我们所坚持的终极目标，并不断的向这个目标靠近，相信有一天我们可以做到！</p>
                </div>
            </div>
        </section>

        <section class="service_list">
            <div class="container">
                <h2>服务列表</h2>
                <p>这是一大段文案我也不知道写啥百度翻译也没法翻译反正就是不会写巴拉巴拉巴拉巴贝拉把巴拉巴拉白萝卜一年多以前，和农夫山泉创始人钟睒睒一起去长白山，飞机上他和我说，他要做一款中国国家领导人接待外宾时桌子上放的水今天，他做到了！！”钱江晚报记者的朋友圈，前些天有位前辈“大慰平生”发了这一段文字。矿泉水，早已经是人们日常生活中最常消费的饮品，即便顶尖规格的会议中也少不了它的身影。一瓶水的方寸之间，能做出什么样的文章？在刚刚过去的G20杭州峰会期间，频频出现在镜头里的农夫山泉给出了这么一个答案：质量、设计、细节的追求，“毫升”之间的匠心独运。</p>
                <div class="list">
                    <ul>
                        <?php for($s1=1; $s1<=6; $s1++){ 
                            $service1_select = "SELECT * FROM servicelist WHERE id=$s1;";
                            $service1_query = mysqli_query($con, $service1_select);
                            $service1_result = mysqli_fetch_assoc($service1_query);
                        ?>
                        <li><span><img src="images/icon3.png"><a href="service.php"><?php echo $service1_result["server"]; ?></a></span></li>
                        <?php } ?>
                    </ul>
                </div

                ><div class="list">
                    <ul>
                        <?php for($s2=7; $s2<=12; $s2++){ 
                            $service2_select = "SELECT * FROM servicelist WHERE id=$s2;";
                            $service2_query = mysqli_query($con, $service2_select);
                            $service2_result = mysqli_fetch_assoc($service2_query);
                        ?>
                        <li><span><img src="images/icon3.png"><a href="service.php"><?php echo $service2_result["server"]; ?></a></span></li>
                        <?php } ?>
                    </ul>
                </div

                ><div class="list">
                    <ul>
                        <?php for($s3=13; $s3<=18; $s3++){ 
                            $service3_select = "SELECT * FROM servicelist WHERE id=$s3;";
                            $service3_query = mysqli_query($con, $service3_select);
                            $service3_result = mysqli_fetch_assoc($service3_query);
                        ?>
                        <li><span><img src="images/icon3.png"><a href="service.php"><?php echo $service3_result["server"]; ?></a></span></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </section>

        <section class="special_service">
            <div class="container">
                <h2>特色服务</h2>
                
                <div class="special_service_list">
                    <div class="list_num">
                        <p>01</p>
                    </div>
                    <div class="list_details">
                        <h3>Application Host Helper Service</h3>
                        <p>为 IIS 提供管理服务，例如配置历史记录和应用程序池帐户映射。如果停止此服务，则配置历史记录将无法工作，也无法用特定于应用程序池的访问控制项锁定文件或目录。IIS相关的东西，如果普通用户建议禁用IIS相关的东西，如果普通用户建议禁用。</p>
                    </div>
                </div

                ><div class="special_service_list">
                    <div class="list_num">
                        <p>02</p>
                    </div>
                    <div class="list_details">
                        <h3>Application Layer Gateway Service</h3>
                        <p>为 Internet 连接共享提供第三方协议插件的支持。该服务的默认运行方式是手动，如果你连接了网络，则该服务会自动启动，不建议更改。XP中也有该服务，作用差不多，是系统自带防火墙和开启ICS共享上网的依赖服务，如果装有第三方防火墙且不需要用ICS方式共享上网，可以禁用掉。</p>
                    </div>
                </div

                ><div class="special_service_list">
                    <div class="list_num">
                        <p>03</p>
                    </div>
                    <div class="list_details">
                        <h3>Certificate Propagation</h3>
                        <p>CNG 密钥隔离服务宿主在LSA进程中。如一般原则所要求该服务为私钥和相关加密操作提供密钥进程隔离。该服务在与一般原则要求相一致的安全进程中存储和使用生存期长的密钥。如果Wired AutoConfig/WLAN AutoConfig两个服务被打开，而且使用了EAP那么这个服务将被使用</p>
                    </div>
                </div

                ><div class="special_service_list list_details_line2">
                    <div class="list_num">
                        <p>04</p>
                    </div>
                    <div class="list_details">
                        <h3>SNMP Trap</h3>
                        <p>接收本地或远程简单网络管理协议(SNMP)代理程序生成的陷阱消息并将消息转发到此计算机上运行的 SNMP 管理程序。如果此服务被停用，此计算机上基于SNMP的程序将不会接收SNMP陷阱消息。如果此服务被禁用，任何依赖它的服务将无法启动。不是网管的话建议关闭。</p>
                    </div>
                </div

                ><div class="special_service_list list_details_line2">
                    <div class="list_num">
                        <p>05</p>
                    </div>
                    <div class="list_details">
                        <h3>IP Helper</h3>
                        <p>在 IPv4 网络上提供自动的 IPv6 连接。如果停止此服务，则在计算机连接到本地 IPv6 网络时，该计算机将只具有 IPv6 连接。主要是提供IPv6的支持，说白了就是让IPv4和IPv6相互兼容，现在的情况下不是特别需要，其实设置成Disabled 也无妨。</p>
                    </div>
                </div

                ><div class="special_service_list list_details_line2">
                    <div class="list_num">
                        <p>06</p>
                    </div>
                    <div class="list_details">
                        <h3>Link-Layer Topology Discovery Mapper</h3>
                        <p>创建网络映射，它由 PC 和设备拓扑(连接)信息以及说明每个 PC 和设备的元数据组成。如果禁用此服务，则网络映射将不能正常工作。应该是支持LLTD  技术，可以精确地显示支持LLTD的设备在网络结构中的位置，比如Vista的无线地图，保持默认手动。</p>
                    </div>
                </div>

            </div>
        </section>
        <?php include_once 'footer.php'; ?>
    </body>

</html>