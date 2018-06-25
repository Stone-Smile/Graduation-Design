<?php
require './conn.php';
$user = $_POST['name'];
$sql = "select username from user where username = '$user'";
$res = mysqli_query($link,$sql);
$num = mysqli_num_rows($res);
if($num > 0){
    echo json_encode(array(
        "resultCode"=>1,
        "message"=>"已经存在该用户名",
    ));
} else {
    echo json_encode(array(
        "resultCode"=>2,
        "message"=>"该用户名可以注册",
    ));
}

?>