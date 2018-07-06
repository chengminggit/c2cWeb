<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2018/7/6
 * Time: 10:33
 */

$phone = $_GET['phone'];
$password = $_GET['password'];
$conn = new mysqli("racjsrlrsdmr.mysql.sae.sina.com.cn", "test", "123456","test","10145");
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
else{
    echo("连接成功");
}
$conn->query("set names utf8");
$sql= "INSERT INTO register (phone, password) VALUES ('$phone', '$password')";

$result = $conn->query($sql);
$conn->close();
echo json_encode("1");
?>
