<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2018/7/10
 * Time: 17:23
 */

    $title = $_GET['title'];
    $text = $_GET['text'];
    $password = $_GET['password'];


    // 创建连接
    $conn = new mysqli("racjsrlrsdmr.mysql.sae.sina.com.cn", "test", "123456","test","10145");
    // Check connection
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    }

    $conn->query("set names utf8");
    $sql = "select max(ID) as id from ScenicSpot";
    $result = $conn->query($sql);
    $raw = $result->fetch_assoc();
    $id = $raw["id"]+1;
    $sql= "INSERT INTO ScenicSpot VALUES ('$id','$title','$text')";
    $result = $conn->query($sql);
    $conn->close();

$return = "增加成功";
echo urldecode(json_encode($return));
?>