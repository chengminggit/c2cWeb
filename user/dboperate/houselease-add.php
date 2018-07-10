<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2018/7/5
 * Time: 9:24
 */
$cookieid = $_COOKIE["logid"];
$city = $_GET['city'];
$county = $_GET['county'];
$street = $_GET['street'];
$area = $_GET['area'];
$rent = $_GET['rent'];
$type = $_GET['type'];

//$lessorID = 1001;
//$city = '威海';
//$county = '环翠区';
//$street = '怡园街道';
//$area = 100;
//$rent = 1000;
//$type = 3;
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
$sql = "select max(ID) as id from house";
$result = $conn->query($sql);
$raw = $result->fetch_assoc();
$id = $raw["id"]+1;
$conn->query("set names utf8");
$sql= "INSERT INTO house (ID, lessorID, status, city, county, street, area, rent, discount,house.type) VALUES ('$id','$cookieid', 1,'$city', '$county', '$street', '$area', '$rent', 1, '$type')";

$result = $conn->query($sql);
$conn->close();
//echo json_encode("1");
?>

