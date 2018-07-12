<?php

$id=$_GET["id"];

$conn = new mysqli("racjsrlrsdmr.mysql.sae.sina.com.cn", "test", "123456","test","10145");
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$conn->query("set names utf8");
$sql="delete from BusinessAdmin WHERE Id = '$id'";
$result = mysqli_query($conn, $sql);
if($result){
    $return= "删除成功";
}
$conn->close();


echo urldecode(json_encode($return))
?>