<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2018/7/11
 * Time: 17:26
 */
$conn = new mysqli("racjsrlrsdmr.mysql.sae.sina.com.cn", "test", "123456","test","10145");
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$conn->query("set names utf8");
$sql="select id, name, nickname, telephone, address, credit, permission from user order by permission desc";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    $num = 1;
    $return = array();
    while ($row = $result->fetch_assoc()) {

        $index = "v".$num;
        $return[$index]['ID'] = $row["id"];
        $return[$index]['name']=$row["name"];
        $return[$index]['nickname']=$row["nickname"];
        $return[$index]['telephone']=$row["telephone"];
        $return[$index]['address']=$row["address"];
        $return[$index]['credit']=$row["credit"];
        $return[$index]['permission']=$row["permission"];
        if($row["permission"]==1){
            $return[$index]['permission']="已启用";
        }
        else{
            $return[$index]['permission']="已禁用，该账号无法登录";
        }

        $num = $num+1;
    };
}
foreach ( $return as $key => $value ) {
    foreach ( $return[$key] as $key1 => $value1 )
        $return[$key][$key1] = urlencode ( $value1);
}
echo urldecode(json_encode($return))
?>