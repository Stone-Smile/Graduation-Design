<?php
header("content-type:text/html;charset=utf8");
require './conn.php';

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sqll="select * from user where username = '$username'";
    $sql= mysqli_query($link,$sqll);
    $row = mysqli_fetch_assoc($sql);
    // $profile = $row['profile'];
    if(empty($row)){
        echo "<script>alert('用户名不存在!');location.href='login.php'</script>";
    } else if($row['password'] === $password && $row['username'] === $username){
        //登录成功，将登录name,profile存入session
        // session_start();
        // $_SESSION['u_username'] = $username;
        // $_SESSION['profile'] = $profile;
        // var_dump($_SESSION['username']);
        // var_dump($_SESSION['profile']);
        echo "<script>alert('登录成功!');location.href='index.php'</script>";
    } else {
        echo "<script>alert('密码错误!');location.href='login.php'</script>";
    }
} else {
    echo "<script>alert('非法操作');location.href='login.php'</script>";
}
?>