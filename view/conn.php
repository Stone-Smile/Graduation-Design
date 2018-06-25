<?php
header('content-type:text/html;charset=utf-8');
$db_host = 'localhost';
$db_user = 'root';
$db_pwd = '123456';
$db_name = 'medicinal';
$link = mysqli_connect($db_host,$db_user,$db_pwd,$db_name);
mysqli_query($link,'set names utf8');
?>