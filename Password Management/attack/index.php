<?php

$conn = new mysqli("localhost", "root", "", "test");
$usr = $_GET["username"];
$usrPasswd = $_GET["password"];

if (isset($usr)) {
    $query = "INSERT INTO secure_users(username,passwd,mail) VALUES ('$usr', '$usrPasswd', 'demo@demo.fr')";
    if (mysqli_query($conn, $query)) {
        echo "New record created successfully";
    }
}
echo("<br><br><br>");

$sql = "SELECT * FROM secure_users WHERE username = '" . $_GET["username"] . "'";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc())
    echo "username: " . $row["username"] . " - passwd: " . $row["passwd"] . " - mail " . $row["mail"] . "<br>";

$conn->close();
?>