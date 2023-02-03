<!-- <?php


$sq = $db->prepare("SELECT deposit_id FROM deposit");
$sq->execute();
$sq->setFetchMode(PDO::FETCH_ASSOC);
$userId = $sq->fetchAll();

$sql = $db->prepare("SELECT id, prenom FROM users");
$sql->execute();
$sql->setFetchMode(PDO::FETCH_ASSOC);
$userr = $sql->fetchAll();

echo $userId[0]['deposit_id'];
die;

foreach ($userId as $u) {
    foreach ($userr as $i) {
        if($u == $i){
            
        }
    }
}

?> -->