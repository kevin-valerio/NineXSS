<?php


try {

    $dbh = new PDO('mysql:host=localhost;dbname=test', 'root', '');

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $q = "SELECT * FROM foo WHERE username = :username";
    $sth = $dbh->prepare($q);
    $sth->bindParam(':username', $_GET["username"]);
    $sth->execute();
    $sth->setFetchMode(PDO::FETCH_ASSOC);

    $result = $sth->fetchColumn(3);
    print("mail=$result\n");


} catch (PDOException $e) {
    die('Error establishing connection with database');
}

?>