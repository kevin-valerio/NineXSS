<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Hello dear</title>
</head>
<body>
<p>
    Salut
    <script>
        sessionStorage.setItem('session_name', "Kevin Valerio");
        sessionStorage.setItem('session_sessionID', "123456");
    </script>

    (peut-être t'appeles-tu) <?php if (isset($_GET["name"])) echo($_GET["name"]); ?> ?
    Va sur <a href="config.php">config.php</a> pour accéder à tes parametres
</p>

</body>
</html>