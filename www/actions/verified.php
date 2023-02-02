<?php
require_once __DIR__ . '/../../src/init.php';

$sq = $db->prepare("SELECT id,email FROM users WHERE verified = ?");
$sq->execute([1]);
$sq->setFetchMode(PDO::FETCH_ASSOC);
$infos_mail = $sq->fetchAll();


foreach ($infos_mail as $infmail) {
    $temp = $infmail['id'];
    $request = $db->prepare("UPDATE users SET verified = 2 ");

}

header("Location /admin.php");