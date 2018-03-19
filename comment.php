<?php
$pagesize = 3;
if (isset($_GET["id"])) {
    $blogid = $_GET["id"];
} else {
    $blogid = 1;
}

if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}
include_once 'mysql.php';
$blog_allnum_select = "SELECT COUNT(id) num FROM blog";
$blog_allnum_query = mysqli_query($con, $blog_allnum_select);
$blog_allnum_result = mysqli_fetch_assoc($blog_allnum_query); //数据库中博客总条数

$now_blog_comment_select = "SELECT COUNT(id) num FROM comment WHERE bid=$blogid;";
$now_blog_comment_query = mysqli_query($con, $now_blog_comment_select);
$now_blog_comment_result = mysqli_fetch_assoc($now_blog_comment_query); //当前blogid下共有多少条评论
$allblog_num =  $now_blog_comment_result["num"];//总条数
$all_page_count = ceil($allblog_num/$pagesize);

//评论分页
$start = ($page-1)*$pagesize;
    //判断地址栏的page值
    if($page<=0){
        $start=1;
    }elseif($page>$all_page_count){
        $start = ($all_page_count-1)*$pagesize;
    }
$prev = ($page-1)>0?$page-1:1;
$next = ($page+1)>$all_page_count?$all_page_count:$page+1;

$blog_artical_select = "SELECT url,title,publictime,contact FROM blog WHERE id=$blogid";
$blog_artical_query = mysqli_query($con, $blog_artical_select);
$blog_artical_result = mysqli_fetch_assoc($blog_artical_query);

$blog_detial_select = "SELECT 
                            b.id,
                            c.bid,c.username,c.face,c.ctime,c.comment 
                            FROM blog b 
                            LEFT JOIN comment c 
                            ON b.id=c.bid
                            WHERE c.bid=$blogid
                            LIMIT $start,$pagesize;";
$blog_detial_query = mysqli_query($con, $blog_detial_select);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>评论</title>
        <link rel="stylesheet" type="text/css" href="css/common.css">
        <link rel="stylesheet" type="text/css" href="css/comment.css">
        <link rel="stylesheet" href="js/theme/default/layer.css" type="text/css">
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="js/layer.js" type="text/javascript"></script>
        <script src="js/comment_submit.js" type="text/javascript"></script>
    </head>
    <body>
        <?php include_once 'header.php'; ?>
        <section class="comment">
            <input type="hidden" value="<?php echo $blogid; ?>" id="now_id">
            <div class="container">
                <h2>博客</h2>
                <div class="article_flex">
                    <div class="article">
                        <div class="article_img">
                            <img src="<?php echo $blog_artical_result["url"]; ?>">
                        </div>
                        <h3><?php echo $blog_artical_result["title"]; ?></h3>
                        <p class="publictime">发表于&nbsp;<span><?php echo date('Y年m月d日', $blog_artical_result["publictime"]); ?></span></p>
                        <p class="article_details"><?php echo $blog_artical_result["contact"]; ?></p>
                    </div>
                    <div class="article_list">
                        <h3>相关文章</h3>

                        <?php
                        for ($i = 1; $i <= 4; $i++) {
                            $show_num = rand(1, $blog_allnum_result["num"]);
                            $show_select = "SELECT * FROM blog WHERE id=$show_num";
                            $show_query = mysqli_query($con, $show_select);
                            $show_result = mysqli_fetch_assoc($show_query);
                            ?>
                            <div class="article_list_details">
                                <div class="article_list_details_img">
                                    <a class="load_link" href="comment.php?id=<?php echo $show_num; ?>"><img src="<?php echo $show_result["url"]; ?>"></a>
                                </div>
                                <div class="article_list_details_txt">
                                    <h4><a class="load_link" href="comment.php?id=<?php echo $show_num; ?>"><?php echo $show_result["title"]; ?></a></h4>
                                    <p><a class="load_link" href="comment.php?id=<?php echo $show_num; ?>"><?php echo $show_result["contact"]; ?></a></p>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container">
                <div class="content_list_box">

                    <?php if ($now_blog_comment_result["num"] == "0") { ?>
                        <div class="content_list">
                            <p class="none_content">还没有用户评论，赶快抢个沙发吧！</p>
                        </div>
                        <?php
                    } else {
                        while ($blog_detial_result = mysqli_fetch_assoc($blog_detial_query)) {
                            ?>
                            <div class="content_list">
                                <div class="user_image">
                                    <img src="<?php echo $blog_detial_result["face"]; ?>">
                                </div>
                                <div class="content_detial">
                                    <h4 class="user_name"><?php echo $blog_detial_result["username"]; ?></h4>
                                    <p class="content_txt"><?php echo $blog_detial_result["comment"]; ?></p>
                                    <p class="content_time"><?php echo date('Y年m月d日 H时m分', $blog_detial_result["ctime"]); ?></p>
                                </div>
                            </div>
                        <?php }
                        ?>
                        <div class="count" style="margin-top: 30px;">
                            <p>
                                <a class="load_link" href="comment.php?id=<?php echo $blogid; ?>&&page=<?php echo $prev; ?>">上一页</a>
                                <?php for($i=1; $i<=$all_page_count; $i++){
                                    if($i==$page){
                                        echo ' <a class="load_link" href="comment.php?id='.$blogid.'&&page=' . $i . '" style="background: #F896A9">' . $i . '</a>';
                                    }else{
                                        echo ' <a class="load_link" href="comment.php?id='.$blogid.'&&page=' . $i . '">' . $i . '</a>';
                                    }
                                }
                                ?>
                                <a class="load_link" href="comment.php?id=<?php echo $blogid; ?>&&page=<?php echo $next; ?>">下一页</a>
                            </p>
                        </div>
                    <?php }
                    ?>

                </div>
                <div class="content_input">
                    <textarea placeholder="请发表您的评论" id="comment_userinput"></textarea>
                    <p><a class="load_link" href="javascript:void(0);" id="comment_submit">提交</a></p>
                </div>

            </div>
        </section>
        <?php include_once 'footer.php'; ?>
    </body>
</html>