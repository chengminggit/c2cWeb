<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2018/7/6
 * Time: 10:33
 */

$phone = $_GET['phone'];
$password = $_GET['password'];
$conn = new mysqli("racjsrlrsdmr.mysql.sae.sina.com.cn", "test", "123456","test","10145");
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$conn->query("set names utf8");
$sql = "select * from user where telephone= '$phone'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){
    $mes = array('first'=>'手机号已存在');
}
else{
    $sql = "select max(id) as id from user";
    $result = $conn->query($sql);
    $raw = $result->fetch_assoc();
    $id = $raw["id"]+1;
    $sql= "INSERT INTO user (id,telephone, password) VALUES ('$id','$phone', '$password')";
    $result = $conn->query($sql);
    $mes = array('first'=>'注册成功','m'=>$id);
}
$conn->close();
foreach ( $mes as $key => $value ) {
    $mes[$key] = urlencode ( $value );
}
echo urldecode(json_encode($mes));
?>
