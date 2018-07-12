<?php

// 创建连接
$conn = new mysqli("racjsrlrsdmr.mysql.sae.sina.com.cn", "test", "123456","test","10145");
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

$conn->query("set names utf8");
$sql="select * from Reservation where type=4 ";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    $num = 1;
    $return = array();
    while ($row = $result->fetch_assoc()) {

        $index = "v".$num;
        $return[$index]['ID'] = $row["Id"];
        $return[$index]['houseID']=$row["houseID"];
        $return[$index]['lessorID']=$row["lessorID"];
        $return[$index]['tenantID']=$row["tenantID"];
        $return[$index]['type']=$row["type"];
        $return[$index]['startDate']=$row["startDate"];
        $return[$index]['rentTime']=$row["rentTime"];
        $return[$index]['number']=$row["number"];
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