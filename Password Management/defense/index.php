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

$usr = $_GET["username"];

if (isset($usr)) {

    $pepper = "F3DcxH9BvAXO0iiHORMwTgUHBJc0YVyk6DIrVbHH"; //Random string as pepper
    $options = [
        'cost' => 12, //Better security. Recommanded
    ];

    $usrPasswd = password_hash(hash("sha256", $pepper . $password), PASSWORD_DEFAULT, $options);

    $query = "INSERT INTO secure_users(username,passwd,mail) VALUES ('$usr', '$usrPasswd', 'demo@demo.fr')";
    if (mysqli_query($conn, $query)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "" . mysqli_error($conn);
    }

}
echo("<br>");
echo("<br>");
echo("<br>");

$sql = "SELECT * FROM secure_users WHERE username = '" . $_GET["username"] . "'";
$result = $conn->query($sql);

if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}

while ($row = $result->fetch_assoc()) {
    echo "username: " . $row["username"] . " - passwd: " . $row["passwd"] . " - mail " . $row["mail"] . "<br>";
}


$conn->close();

?>