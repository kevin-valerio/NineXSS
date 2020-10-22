<?php


$secure = false; // on veut l'activer, mais le serveur local pour la démo n'est qu'en HTTP
$httponly = true;
$samesite = 'lax';

session_set_cookie_params(33333, '/; samesite='.$samesite, $_SERVER['HTTP_HOST'], $secure, $httponly);
session_start();


$_SESSION['prenom'] = 'Jean';
 $_SESSION['nom'] = 'Dupont';
 $_SESSION['age'] = 24;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Hello dear</title>
</head>
<body>
<p>
    Salut <?php echo $_SESSION['prenom']; ?> !<br />  (peut-être t'appeles-tu) <?php echo($_GET["name"]); ?> ?
    Va sur <a href="config.php">config.php</a> pour accéder à tes parametres
</p>

</body>
</html>