<?php

// 创建连接
$conn = new mysqli("racjsrlrsdmr.mysql.sae.sina.com.cn", "test", "123456","test","10145");
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

$conn->query("set names utf8");
$sql="select * from orderlist order by type";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    $num = 1;
    $return = array();
    while ($row = $result->fetch_assoc()) {

        $index = "v".$num;
        $return[$index]['Id'] = $row["Id"];
        $return[$index]['houseID']=$row["houseID"];
        $return[$index]['type']=$row["type"];
        $return[$index]['phone']=$row["phone"];
        $return[$index]['time']=$row["time"];
        $return[$index]['name']=$row["name"];
        $num = $num+1;
    };
}
$conn->close();

foreach ( $return as $key => $value ) {
    foreach ( $return[$key] as $key1 => $value1 )
        $return[$key][$key1] = urlencode ( $value1);
}
echo urldecode(json_encode($return))
?>