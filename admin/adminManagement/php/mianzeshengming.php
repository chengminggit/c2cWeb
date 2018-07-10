<?php
    $title = $_GET['title'];
    $text = $_GET['text'];


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
    else{
        echo("连接成功");
    }
    $conn->query("set names utf8");
    $sql = "select max(id) as id from mianzeshengming";
    $result = $conn->query($sql);
    $raw = $result->fetch_assoc();
    $id = $raw["id"]+1;
    $sql= "INSERT INTO mianzeshengming VALUES ('$id','$title','$text')";
    $result = $conn->query($sql);
    $conn->close();
?>