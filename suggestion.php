<?php
    $suggestion_name = $_POST["suggestion_name"];
    $suggestion_email = $_POST["suggestion_email"];
    $suggestion_sgs = $_POST["suggestion_sgs"];
    
    if(empty($suggestion_name)){
        echo '10001';//姓名为空
        return;
//    }  elseif(!preg_match("/^.{2,4})$/", $suggestion_name, $arr)) {
//        echo '10002';//姓名格式错误
//        return;
    }  else {}
    
    if(empty($suggestion_email)){
        echo '10011';//邮箱为空
        return;
    }  elseif(!preg_match("/^(\w)+(\.\w+)*@(\w)+((\.\w{2,3}){1,3})$/", $suggestion_email, $arr)) {
        echo '10012';//邮箱格式错误
        return;
    }  else {}
    
    if(empty($suggestion_sgs)){
        echo '10031';//建议为空
        return;
    }  else {}
    
    include_once 'mysql.php';
    
    $ist_suggestion = "INSERT INTO contact (name,email,suggestion) VALUES('$suggestion_name','$suggestion_email','$suggestion_sgs')";
    $query_ist_suggestion = mysqli_query($con, $ist_suggestion);
    if($query_ist_suggestion=="1"){
        echo '10000';
    }
    
?>