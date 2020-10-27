<?php
session_start();
$_SESSION['prenom'] = 'Jean';
$_SESSION['nom'] = 'Dupont';
$_SESSION['age'] = 24;
?>

<p>
    Salut <?php echo $_SESSION['prenom']; ?> !<br />  (peut-être t'appeles-tu) <?php echo($_GET["name"]); ?> ?
    Va sur <a href="config.php">config.php</a> pour accéder à tes parametres
</p>