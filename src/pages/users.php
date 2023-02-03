<?php

$sq = $db->prepare("SELECT * FROM users WHERE role = 1 AND verified = 1");
$sq->execute();
$sq->setFetchMode(PDO::FETCH_ASSOC);
$utilisateurs_non = $sq->fetchAll();

$sq = $db->prepare("SELECT * FROM users WHERE role = 1 AND verified = 2");
$sq->execute();
$sq->setFetchMode(PDO::FETCH_ASSOC);
$utilisateurs_ver = $sq->fetchAll();

$sql = $db->prepare("SELECT * FROM users WHERE role = 10");
$sql->execute();
$sql->setFetchMode(PDO::FETCH_ASSOC);
$utilisateurs_manager = $sql->fetchAll();

$quer = $db->prepare("SELECT * FROM users WHERE role = 100");
$quer->execute();
$quer->setFetchMode(PDO::FETCH_ASSOC);
$utilisateurs_s = $quer->fetchAll();
?>

Admins : <br>
<?php foreach($utilisateurs_s as $us){
    echo $us['prenom']; ?><br>
    <?php
}
    ?>

<br> Manager : <br>
<?php foreach($utilisateurs_manager as $use){
    echo $use['prenom']; ?><br>
    <?php
}
    ?>

<br> Utilisateurs non verifiés: <br>
<?php foreach($utilisateurs_non as $uss){
   echo $uss['prenom']; ?><br>
   <?php
}
   ?>

<br> Utilisateurs verifiés: <br>
<?php foreach($utilisateurs_ver as $uss){
   echo $uss['prenom']; ?><br>
   <?php
}
   ?>


