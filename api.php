<?php
    $id = $_POST["count_id"];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbthread";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $now = date("Y-m-d H:i:s");
    $stmt = $conn->prepare("update testing set receivedate=? where count_id=".$id);
    $stmt->bind_param("s", $date);

    $date=$now;
    $stmt->execute();
    echo "Received";
    $conn->close();
?>