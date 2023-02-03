<?php

require_once __DIR__ . '/../../src/init.php';

$current_id = $user['id'];

if(empty($_POST['deposit'])){
    set_errors('Veuillez entrer un montant', '/transactions.php');
}

if($_POST['deposit'] == 0){
    set_errors('Vous etes pauvre', '/transactions.php');
}

$quer = $db->prepare("INSERT INTO deposit(deposit_id, montant, currency) VALUES (?,?,?)");
$quer->execute([$current_id, $_POST['deposit'],$_POST['symbol_deposit']]);



header('Location: /transactions.php');
