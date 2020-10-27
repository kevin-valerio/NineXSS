<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Hello dear</title>
</head>
<body>
<?php

session_start();
$_SESSION["prenom"] = "Jean";

?>

<p>
    Salut
    (peut-être t'appeles-tu) <?php if (isset($_GET["name"])) echo($_GET["name"]); ?> ?
    Va sur <a href="config.php">config.php</a> pour accéder à tes parametres

<p>Session ID :
    <script>document.write(sessionStorage.getItem('session_sessionID'))</script>
    (but you can't do anything with, little hacker)
</p>

<hr>
</p>

</body>
</html>