<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// xxx' OR '1'='1'-- -
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM foo WHERE username = '" . $_GET["username"] . "'";
$result = $conn->query($sql);

if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}

while ($row = $result->fetch_assoc()) {
    echo "username: " . $row["username"] . " - passwd: " . $row["passwd"] . " - mail " . $row["mail"] . "<br>";
}

$conn->close();
?>