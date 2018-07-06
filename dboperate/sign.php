<?php


    $id = $_GET['id'];
    $password = $_GET['password'];

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
    $sql="select id from Tenant where id=10 limit 1";
    $rst = $conn->query($sql);
    if($rst){
        $sql="SELECT password FROM Tenant WHERE Id=$id";
        $rst = $conn->query($sql);

        if($rst){
            echo "登录成功";
            setcookie('mycookie',$id);
        }
        else{
            echo "密码错误";
        }
    }
    else{
        echo "该用户不存在";
    }
    $conn->close();
?>

