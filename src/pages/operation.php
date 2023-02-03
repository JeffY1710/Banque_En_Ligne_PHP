<?php


$sq = $db->prepare("SELECT prenom,email FROM users WHERE verified = 1");
$sq->execute();
$sq->setFetchMode(PDO::FETCH_ASSOC);
$infos = $sq->fetchAll();



foreach ($infos as $info) {
    echo $info['prenom'], " ", $info['email'];
    echo "<form action ='/actions/verified.php'>
            <button>Vérifier l'utilisateur</button>
        </form>
        <form action ='/actions/annuler.php'>
            <button>Annuler</button><br><br>
        </form>
        </div>";
}
?>