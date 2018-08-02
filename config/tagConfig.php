<?php
$db_user = "root";
$db_passwd = "qlalfqjsgh";

//connect to sql
$conn = new mysqli("localhost", $db_user, $db_passwd, "week5");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//query statement
//this is for inserting
//$sql = "insert into test values ('아이디', '비밀번호');";
$sql = "SELECT content FROM notice WHERE type = 0";
$result = $conn->query($sql);
$noticeArray = array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($noticeArray, $row["content"]);
    }
} else {
    echo "0 results";
}
//print_r($noticeArray) . "<br>";
$test = 10;

echo json_encode($noticeArray);

$conn->close();

?>
