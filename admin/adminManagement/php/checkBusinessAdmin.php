<?php

$conn = new mysqli("racjsrlrsdmr.mysql.sae.sina.com.cn", "test", "123456","test","10145");
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$conn->query("set names utf8");
$sql="select * from BusinessAdmin order by permission desc";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    $num = 1;
    $return = array();
    while ($row = $result->fetch_assoc()) {

        $index = "v".$num;
        $return[$index]['ID'] = $row["Id"];
        $return[$index]['password']=$row["password"];
        if($row["permission"]==1){
            $return[$index]['permission']="已启用";
        }
        else{
            $return[$index]['permission']="已禁用，该账号无法登录";
        }

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