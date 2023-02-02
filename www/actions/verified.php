<?php
require_once __DIR__ . '/../../src/init.php';

$sq = $db->prepare("SELECT id FROM users WHERE verified = 1");
$sq->execute();
$sq->setFetchMode(PDO::FETCH_ASSOC);
$infos_mail = $sq->fetchAll();


foreach ($infos_mail as $infmail) {
    $temp = $infmail['id'];
    $request = $db->prepare("UPDATE users SET verified = 2 WHERE id = ?");
    $request->execute([]);

}

header("Location /admin.php");