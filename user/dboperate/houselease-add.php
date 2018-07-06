<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2018/7/5
 * Time: 9:24
 */
$name = $_GET['lessorName'];
$phone = $_GET['lessorPhone'];
$communityName = $_GET['county'];
$rent = $_GET['rent'];
$time = $_GET['rentTime'];
$houseType = $_GET['houseType'];

/*if($_GET['communityName']==null ||$_GET['communityName']=="" ){
    $communityName = "字段为空";
}*/

$conn = new mysqli("racjsrlrsdmr.mysql.sae.sina.com.cn", "test", "123456","test","10145");
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
else{
    echo("连接成功");
}
$conn->query("set names utf8");
$sql= "INSERT INTO houseInfo (lessorName, lessorPhone, cName, rent, rentTime, houseType) VALUES ('$name', '$phone', '$communityName', '$rent', '$time', '$houseType')";

$result = $conn->query($sql);
$conn->close();
echo json_encode("1");
?>

