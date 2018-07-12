<?php
/**
 * Created by PhpStorm.
 * User: yunlong
 * Date: 2018/7/11
 * Time: 14:00
 */
$star = $_GET['num'];
$content = $_GET['evaluation'];
$tid = $_COOKIE["logid"];
$rid = 10005;

//$servername = "localhost";
//$username = "test";
//$password = "123456";
//$dbname = "login";
// 创建连接
$conn = new mysqli("racjsrlrsdmr.mysql.sae.sina.com.cn", "test", "123456","test","10145");
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$conn->query("set names utf8");
$sql = "select max(id) as id from evaluation";
$result = $conn->query($sql);
$raw = $result->fetch_assoc();
$id = $raw["id"]+1;

$sql = "select distinct lessorID from Reservation where Reservation.ID = '$rid'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$lid = $row["lessorID"];

$sql = "insert into evaluation VALUES ('$id','$rid','$lid','$tid','$star','$content')";
$result = $conn->query($sql);

$sql = "select star from evaluation,Reservation where Reservation.ID = '$rid' and evaluation.reservationid = Reservation.ID";
$result = mysqli_query($conn, $sql);
$num = $result->num_rows;
$newcredit = 0;
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $newcredit =$newcredit+$row["star"];
    };
}
$newcredit = (int)($newcredit/$num);
$sql = "update user set credit='$newcredit' where id= '$lid'";
$result = $conn->query($sql);
$mes = "评价成功";
$mes = urlencode($mes);
echo urldecode(json_encode($mes));
$conn->close();
