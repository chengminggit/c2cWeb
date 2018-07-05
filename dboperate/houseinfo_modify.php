<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2018/7/5
 * Time: 17:52
 */
$id = $_GET["id"];
$city = $_GET["city"];
$county = $_GET["county"];
$street = $_GET["street"];
$rent = $_GET["rent"];
$area = $_GET["area"];
$type = $_GET["type"];

// 创建连接
$conn = new mysqli("racjsrlrsdmr.mysql.sae.sina.com.cn", "test", "123456","test","10145");
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$conn->query("set names utf8");
$sql=  "UPDATE house SET ID = '$id', city = '$city', county = '$county', street = '$street', area = '$area', rent = '$rent', type = '$type' WHERE house.ID = $id";
$result = $conn->query($sql);
$conn->close();
echo json_encode("1");
?>