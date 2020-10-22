<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Hello dear</title>
</head>
<body>
<p>
    <?php
    session_start();
    ?>
    Page config pour <?php echo $_SESSION['prenom']; ?> !<br />
</p>

</body>
</html>