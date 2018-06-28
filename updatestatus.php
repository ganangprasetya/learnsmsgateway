<?php
sleep(10);
$sn = "localhost";
$un = "root";
$pw = "";
$db = "csr";
$conn = new mysqli($sn,$un,$pw,$db);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE messagemt SET status=10, delivereddate=now(), deliveredstatus='SENT' WHERE messageid='".$_POST['messageid']."'";
$conn->query($sql);
// $sql2 = "UPDATE messagemt2 SET status=10, delivereddate=now(), deliveredstatus='SENT' WHERE messageid='".$_POST['messageid']."'";
// $conn->query($sql2);
$conn->close();
?>