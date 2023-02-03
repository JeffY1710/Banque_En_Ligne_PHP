<?php
require_once __DIR__ . '/../../src/init.php';

$sq = $db->prepare("SELECT id FROM users WHERE verified = 1");
$sq->execute();
$sq->setFetchMode(PDO::FETCH_ASSOC);
$infos_mail = $sq->fetchAll();

$unverified = [];

for($i = 0;$i<count($infos_mail);$i++){
    array_push($unverified,$infos_mail[$i]["id"]);
}

if($unverified != null){
    $request = $db->prepare('UPDATE users SET verified = 2 WHERE id = ?');
    $request->execute([$unverified[0]]);
}


header("Location: /admin.php");