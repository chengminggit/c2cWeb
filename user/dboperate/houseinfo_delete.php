<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2018/7/5
 * Time: 17:05
 */
$id = $_GET['id'];

// 创建连接
$conn = new mysqli("racjsrlrsdmr.mysql.sae.sina.com.cn", "test", "123456","test","10145");
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
else{
    echo("连接成功");
}
$conn->query("set names utf8");
$sql= "DELETE FROM house WHERE house.ID = '$id'";

$result = $conn->query($sql);
$conn->close();
echo json_encode("1");
?>
