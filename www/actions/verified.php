<?php
require_once __DIR__ . '/../../src/init.php';

$sq = $db->prepare("SELECT email FROM users WHERE verified = ?");
$sq->execute([1]);
$sq->setFetchMode(PDO::FETCH_ASSOC);
$infos_mail = $sq->fetchAll();


foreach ($infos_mail as $infmail) {
    echo $infmail['email'];

}

header("Location /admin.php");