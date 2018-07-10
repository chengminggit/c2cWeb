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
    $conn->query("set names utf8");
    $sql="select * from user where id= $id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
        $sql="SELECT password FROM user WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
/*        if($rst == false){
            $mes =  "该用户不存在";
        }*/
        if($row["password"]==$password){
            $mes =  "登录成功";
            setcookie('logid',$id);
        }
        else{
            $mes =  "密码错误";
            setcookie('logid',"");
        }
    }
    else{
        $mes =  "该用户不存在";
    }
    $conn->close();

    $mes = urlencode($mes);
    echo urldecode(json_encode($mes));
?>

