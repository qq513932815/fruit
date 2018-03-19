<?php 
$bid = $_POST["bid"];
$username = $_POST["username"];
$face = $_POST["face"];
$ctime = $_POST["time"];
$comment = $_POST["user_input"];

include_once 'mysql.php';

$userinput_insert = "INSERT INTO comment(bid,username,face,ctime,comment) VALUES ($bid,'$username','$face',$ctime,'$comment');";
$userinput_insert_query = mysqli_query($con, $userinput_insert);
if($userinput_insert_query=="1"){
    echo '30000';//插入成功！
}else{
    echo '30001';//插入失败！
}