<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "shopping";
 
// ��������
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("����ʧ��: " . mysqli_connect_error());
}
 
$sql = "SELECT Id, Item, UnitePrice FROM shopping";
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) {
    // �������
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["Id"]. " - Name: " . $row["Item"]. " " . $row["UnitePrice"]. "<br>";
    }
} else {
    echo "0 ���";
}
 
mysqli_close($conn);
?>