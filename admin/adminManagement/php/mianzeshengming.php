<?php
    $title = $_GET['title'];
    $password = $_GET['password'];
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
    $sql= "INSERT INTO mianzeshengming (title, password, desc) VALUES ('$title', '$password', '$text')";

    $result = $conn->query($sql);
    $conn->close();
    echo json_encode("1");
?>