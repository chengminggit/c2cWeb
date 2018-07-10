<?php
/**
 * Created by PhpStorm.
 * User: yunlong
 * Date: 2018/7/9
 * Time: 11:25
 */

$conn = new mysqli("racjsrlrsdmr.mysql.sae.sina.com.cn", "test", "123456","test","10145");
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$conn->query("set names utf8");
$sql="select * from house where type = 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // 输出数据
    $num = 1;
    $return = array();
    while ($row = $result->fetch_assoc()) {
       // $mes["ID"] = $row["ID"];
       // $mes["area"]=$row["area"];
        $index = "v".$num;
        //print($index);
        $return[$index]['ID'] = $row["ID"];
        $return[$index]['area']=$row["area"];
        $return[$index]['city']=$row["city"];
        $return[$index]['county']=$row["county"];
        $return[$index]['rent']=$row["rent"];
        $return[$index]['lessorID']=$row["lessorID"];
        $num = $num+1;
    };
}

$conn->close();

/*$array_2 = array(); //多维数组
$array_2['aa']['username']='ericwolf';
$array_2['aa']['age']=25;
$array_2['bb']['username']='eeee';
$array_2['bb']['age']=22;
echo json_encode($array_2);*/

//echo json_encode($return);
foreach ( $return as $key => $value ) {
    foreach ( $return[$key] as $key1 => $value1 )
        $return[$key][$key1] = urlencode ( $value1);
}
echo urldecode(json_encode($return))

?>