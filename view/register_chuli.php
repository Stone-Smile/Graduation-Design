<?php
require './conn.php';
$user = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];

echo $user;
 //判断是否存在用户
$sql="select username from user where username='$user'";
$res=mysqli_query($link,$sql);
if(mysqli_num_rows($res)>0){
    echo json_encode(array(
        "resultCode"=>2,
        "message"=>"已经存在该用户",
    ));
    die;
}

//注册
$sql = "insert into user values(null,'$user','$password','$gender','$phone')";
if(mysqli_query($link,$sql)){
    echo "<script>alert('注册成功!');location.href='index.php'</script>";
} else {
    echo "<script>alert('注册失败!');location.href='register.php'</script>";
}
?>