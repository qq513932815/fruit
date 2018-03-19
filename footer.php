<?php
    if(isset($con)){
        mysqli_close($con);
    }
?>

<!-- footer -->
<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
<div class="footer">
    <div class="container">
        <div class="footer_flex">
            <div class="footer_grid">
                <h4>地址</h4>
                <ul>
                    <li>保定市</li>
                    <li>莲池区</li>
                    <li>东风东路999号</li>
                    <li>营业时间 Mon-Fri 9am-6pm</li>
                </ul>
            </div

            ><div class="footer_grid">
                <h4>联系方式</h4>
                <ul>
                    <li>Tel: +1 234-567-890</li>
                    <li>Fax: +1 646-216-9789</li>
                    <li>Email: info@yourdomain.com</li>
                </ul>
            </div

            ><div class="footer_grid">
                <h4>E-Mail Me</h4>
                <div class="email">
                    <input type="text" placehold="Enter Your Email" class="email_input"
                    ><a class="email_btn" href="mailto:513932815@qq.com"></a>
                </div>
            </div>
        </div
        ><div class="footer_logo">
            <img src="images/logo_footer.png">
        </div>
    </div>
</div>
<div class="bottom"></div>
<div class="copy_right">
    <div class="container">
        <p>Copyright © 2015.Company name All rights reserved.</p>
    </div>
</div>
<div class="to_top">
    <a href="javascript:void(0);"><img src="images/arr.png"></a>
</div>
<div class="load_box">
    <div class="line_box">
        <div class="line"></div>
    </div>
    <div class="line_box">
        <div class="line"></div>
    </div>
    <div class="line_box">
        <div class="line"></div>
    </div>
    <div class="line_box">
        <div class="line"></div>
    </div>
    <div class="line_box">
        <div class="line"></div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $(document).scroll(function() {
            var top = $(document).scrollTop();
            var nav = $(".to_top");
            if (top > 0) {
                nav.css("display", "block");
            } else {
                nav.css("display", "none");
            }
        })
        $(".to_top").click(function(event){
            $('body').animate( {scrollTop: 0}, 500);
        });
        $(".load_link").click(function(){
            $(".load_box").css("display", "block");
        });
    });
</script>