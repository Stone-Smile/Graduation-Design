<?php
header("content-type:text/html;charset=utf8");
session_start();
if(isset($_SESSION['username'])){
    unset($_SESSION['username']);
    unset($_SESSION['profile']);
    session_destroy();
    echo "<script>alert('退出成功!');location.href='index.php'</script>";
}


?>


