<?php

require_once __DIR__ . '/../../src/init.php';


if (!isset($_POST['mail_destinataire'])) {
	set_errors('Veuillez remplir les champs','/upgrade.php');
}


if(empty($_POST['mail_destinataire'])){
    set_errors('Veuillez entrer un email','/upgrade.php');
}

if (filter_var($_POST['mail_destinataire'], FILTER_VALIDATE_EMAIL) === false) {
	set_errors('Email invalide', '/upgrade.php');
}

$temp_role = 0;

if($_POST['selecteur'] == "manager"){
    $temp_role = 10;
} elseif ($_POST['selecteur'] == "admin") {
    $temp_role = 100;
} else{
    $temp_role = 1;
}

$quer = $db->prepare('SELECT email FROM users WHERE email = ?');
$quer->execute([$_POST['mail_destinataire']]);
$quer->setFetchMode(PDO::FETCH_ASSOC);
$Email = $quer->fetch();

$queries = $db->prepare('SELECT * FROM users WHERE email = ?');
$queries->execute([$_POST['mail_destinataire']]);
$queries->setFetchMode(PDO::FETCH_ASSOC);
$info = $queries->fetch();

if($temp_role == $info['role']){
    set_errors('Cet utilisateur a deja ce role','/upgrade.php');
}



if($Email !== false){
    $request = $db->prepare('UPDATE users SET role = ?, verified = 2 WHERE email = ?');
    $request->execute([$temp_role,$_POST['mail_destinataire']]);
} else {
    set_errors('User does not exist','/upgrade.php');
}



header("Location: /upgrade.php");
