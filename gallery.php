<?php
include_once 'mysql.php';

$gallery_list_url_select = "SELECT * FROM blog;";
$gallery_list_url_query = mysqli_query($con, $gallery_list_url_select);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>画廊</title>
        <link rel="stylesheet" type="text/css" href="css/common.css">
        <link rel="stylesheet" type="text/css" href="css/gallery.css">
    </head>
    <body>
        <?php include_once 'header.php'; ?>
        <section class="gallery">
            <div class="container">
                <h2>画廊</h2>
                <div class="gallery_lists">
                    <?php while($gallery_list_url_result = mysqli_fetch_assoc($gallery_list_url_query)){?>
                    <div class="gallery_list">
                        <a class="load_link" href="comment.php?id=<?php echo $gallery_list_url_result["id"]; ?>"><img src="<?php echo $gallery_list_url_result["url"];?>">
                            <div class="gallery_mark">
                                <h4><?php echo $gallery_list_url_result["title"];?></h4>
                                <p><?php echo $gallery_list_url_result["contact"];?></p>
                            </div>
                        </a>
                    </div>
                    <?php }?>
                </div>
            </div>
        </section>
        <?php include_once 'footer.php'; ?>
    </body>
</html>