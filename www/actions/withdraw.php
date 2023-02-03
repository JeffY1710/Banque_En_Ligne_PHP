<?php

require_once __DIR__ . '/../../src/init.php';

$current_id = $user['id'];

if(empty($_POST['withdraw'])){
    set_errors('Veuillez entrer un montant', '/transactions.php');
}

if($_POST['withdraw'] == 0){
    set_errors('Vous etes pauvre', '/transactions.php');
}

$quer = $db->prepare("INSERT INTO withdraw(withdraw_id, montant, currency) VALUES (?,?,?)");
$quer->execute([$current_id, $_POST['withdraw'],$_POST['symbol_withdraw']]);



header('Location: /transactions.php');
