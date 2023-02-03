<?php

require_once __DIR__ . '/../../src/init.php';

$current_id = $user['id'];


$quer = $db->prepare("INSERT INTO deposit(deposit_id, montant, currency) VALUES (?,?,?)");
$quer->execute([$current_id, $POST['deposit'],$POST['symbol_deposit']]);


header('Location: /transactions.php');
