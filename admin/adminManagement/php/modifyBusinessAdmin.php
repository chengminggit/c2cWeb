<?php

$id=$_GET["id"];
$password=$_GET["password"];



$conn = new mysqli("racjsrlrsdmr.mysql.sae.sina.com.cn", "test", "123456","test","10145");
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$conn->query("set names utf8");
$sql="UPDATE BusinessAdmin SET password='$password' WHERE Id = '$id'";
$result = mysqli_query($conn, $sql);
if($result){
    $return= "修改成功";
}
$conn->close();


echo urldecode(json_encode($return))
?>