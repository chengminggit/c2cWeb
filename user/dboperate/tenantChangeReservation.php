<?php

$id=$_GET["id"];



$conn = new mysqli("racjsrlrsdmr.mysql.sae.sina.com.cn", "test", "123456","test","10145");
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$conn->query("set names utf8");

$sql="Select * from Reservation WHERE Id = '$id'";
$result = mysqli_query($conn, $sql);
$raw = $result->fetch_assoc();

if($raw["type"]==1){
    $sql="UPDATE Reservation SET type=2 WHERE Id = '$id'";
}
else{
    $sql="UPDATE Reservation SET type=1 WHERE Id = '$id'";
}

$result = mysqli_query($conn, $sql);
if($result){
    $return= "修改成功";
}
$conn->close();


echo urldecode(json_encode($return))
?><?php
/**
 * Created by PhpStorm.
 * User: yunlong
 * Date: 2018/7/12
 * Time: 19:44
 */