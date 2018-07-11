<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2018/7/4
 * Time: 20:36
 */

    $name = $_GET['name'];
    $phone = $_GET['phone'];
    $time = $_GET['time'];
    $cookieid = $_COOKIE["logid"];
    $hid = 1002;
    $state = $_GET['state'];
/*    $name = "大橙子";
    $phone = 17622236510;
    $time = 2016-12-12;*/


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
    $sql = "select max(Id) as id from orderlist";
    $result = $conn->query($sql);
    $raw = $result->fetch_assoc();
    $id = $raw["id"]+1;
    $sql = "select distinct lessorID from house where house.ID = '$hid'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $lid = $row["lessorID"];
    $conn->query("set names utf8");
    $sql= "INSERT INTO orderlist (id,lessorid,tenantid,houseID,phone,time,name,type) VALUES ('$id','$lid','$cookieid','$hid','$phone','$time','$name',$state )";
    $result = $conn->query($sql);
    $conn->close();
    echo json_encode($result);
?>

