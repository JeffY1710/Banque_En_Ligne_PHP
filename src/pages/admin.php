<?php


$sq = $db->prepare("SELECT id,prenom,email FROM users WHERE verified = ?");
$sq->execute([1]);
$sq->setFetchMode(PDO::FETCH_ASSOC);
$infos = $sq->fetchAll();



foreach ($infos as $info) {
    array_push($unverified,$info['id']);
    echo $info['prenom'], " ", $info['email']," ",$info['id'];
    echo "<form action ='/actions/verified.php'>
            <button>Vérifier l'utilisateur</button>
        </form>
        <form action:'/actions/annuler.php'>
            <button>Annuler</button><br><br>
        </form>
        </div>";
}
?>