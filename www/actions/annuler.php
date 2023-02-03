<?php
require_once __DIR__ . '/../../src/init.php';

$sq = $db->prepare("SELECT id FROM users WHERE verified = 1");
$sq->execute();
$sq->setFetchMode(PDO::FETCH_ASSOC);
$info_mail = $sq->fetchAll();

$unverifie = [];

for($i = 0;$i<count($info_mail);$i++){
    array_push($unverifie,$info_mail[$i]["id"]);
    
}

if($unverifie != null){
    $request = $db->prepare('UPDATE users SET verified = 3 WHERE id = ?');
    $request->execute([$unverifie[0]]);
}


header("Location: /admin.php");