<?php 
    $pagesize = 3;
    if (isset($_GET["page"])) {
        $page = $_GET["page"];
    }else{
        $page = 1;
    }
    include_once 'mysql.php';
    $select_allblog = "SELECT count(id) num FROM blog";
    $query_allblog = mysqli_query($con, $select_allblog);
    $result_allblog = mysqli_fetch_assoc($query_allblog);
    $allblog_num =  $result_allblog["num"];//总条数
    $all_page_count = ceil($allblog_num/$pagesize);
    
    $start = ($page-1)*$pagesize;
    //判断地址栏的page值
    if($page<=0){
        $start=1;
    }elseif($page>$all_page_count){
        $start = ($all_page_count-1)*$pagesize;;
    }
    
    $search_blog = "SELECT * FROM blog LIMIT $start,$pagesize";
    $query_search_blog = mysqli_query($con, $search_blog);
    
    $prev = ($page-1)>0?$page-1:1;
    $next = ($page+1)>$all_page_count?$all_page_count:$page+1;
    
    $nowpage_blog_id = 1;
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>联系我们</title>
        <link rel="stylesheet" type="text/css" href="css/common.css">
        <link rel="stylesheet" type="text/css" href="css/blog.css">
        <link rel="stylesheet" href="js/theme/default/layer.css" type="text/css">
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php include_once 'header.php'; ?>
        <section class="blogs">
        	<div class="container">
                <h2>博客</h2>
                <?php while ($search_blog_result = mysqli_fetch_assoc($query_search_blog)){ 
                    $now_blog_id = (($page-1)*3)+$nowpage_blog_id;
                ?>
                <div class="blog_small">
                    <a href="comment.php?id=<?php echo $now_blog_id; ?>&&page=1"><img src="<?php echo $search_blog_result["url"]; ?>"></a>
                    <div class="txt">
                        <h4><?php echo $search_blog_result["title"]; ?></h4>
                        <p><?php echo $search_blog_result["contact"]; ?></p>
                    </div>
                    <a href="comment.php?id=<?php echo $now_blog_id; ?>&&page=1" class="more">了解更多</a>
                </div>
                <?php $nowpage_blog_id++; } ?>
                <div class="count">
                    <p>
                        <a href="blog.php?page=<?php echo $prev; ?>">上一页</a>
                        <?php for($i=1; $i<=$all_page_count; $i++){
                            if($i==$page){
                                echo ' <a href="blog.php?page='.$i.'" style="background: #F896A9">'.$i.'</a>';
                            }else{
                                echo ' <a href="blog.php?page='.$i.'">'.$i.'</a>';
                            }
                         } ?>
                        <a href="blog.php?page=<?php echo $next; ?>">下一页</a>
                    </p>
                </div>
            </div>
        </section>
        <?php include_once 'footer.php'; ?>
    </body>
</html>