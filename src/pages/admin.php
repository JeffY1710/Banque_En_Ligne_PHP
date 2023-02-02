<?php
$sq = $db->prepare("SELECT prenom,email FROM users WHERE verified = ?");
$sq->execute([1]);
$sq->setFetchMode(PDO::FETCH_ASSOC);
$infos = $sq->fetchAll();


$i = 1;

foreach ($infos as $info) {
    echo "<div id=" . $i++ .  ">";
    echo $info['prenom'], " ", $info['email'];
    echo "<form action ='/actions/verified.php'>
            <button>Vérifier l'utilisateur</button>
        </form>
        <form action:'/actions/annuler.php'>
            <button>Annuler</button><br><br>
        </form>
        </div>";
}
?>