<?php
    /**
     * Created by PhpStorm.
     * User: zzy
     * Date: 2018/7/4
     * Time: 20:36
     */

    $tidentify = $_GET['tidentify'];
    $lid = $_GET['lid'];
    $lidentify = $_GET['lidentify'];
    $hid = $_GET['hid'];
    $sdate = $_GET['sdate'];
    $rent = $_GET['rent'];
    $number = $_GET['number'];
    $cookieid = $_COOKIE["logid"];

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
    $sql = "select max(Id) as id from Reservation";
    $result = $conn->query($sql);
    $raw = $result->fetch_assoc();
    $id = $raw["id"]+1;
    $sql= "INSERT INTO Reservation  VALUES ('$id', '$hid', '$lid','$lidentify','$cookieid','$tidentify','1','$sdate','$rent','$number')";
    $result = $conn->query($sql);
    $conn->close();
?>

