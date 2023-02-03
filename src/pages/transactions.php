<?php
    if ($errors !== false) {
		echo '<p>' . $errors . '</p>';
	} ?>
<div class="main">
    <div class="deposit">
        <form action="/actions/deposit.php" method="post">
            Deposit : <input type="number" placeholder="montant" name="deposit" min="0">
            <select name="symbol_deposit">
                <option value="EUR">EUR</option>
                <option value="USD">USD</option>
                <option value="BTC">BTC</option>
            </select><br>
            <button type="submit">Ask for deposit</button><br><br>
        </form>
    </div>
    <div class="withdraw">
        <form action="/actions/withdraw.php" method="post">
            Withdraw : <input type="number" placeholder="montant" name="withdraw" min="0">
            <select name="symbol_withdraw">
                <option value="EUR">EUR</option>
                <option value="USD">USD</option>
                <option value="BTC">BTC</option>
            </select><br>
            <button type="submit">Ask for withdraw</button><br><br>
        </form>
    </div>
    <div class="trans">
        <form action="/actions/transfer.php" method="post">
            Tranfer : <input type="number" placeholder="montant" min="0">
            <select name="symbol_transfer">
                <option value="EUR">EUR</option>
                <option value="USD">USD</option>
                <option value="BTC">BTC</option>
            </select><br>
            Reciever IBAN: <input type="text" placeholder="iban" name="id_receiver">
            <button type="submit">Transfer</button><br><br>
        </form>
    </div>
</div><br>
<div class="transactions">
    Mes transactions: <br><br>
    <?php
    $id = $user['id'];

    $sq = $db->prepare("SELECT deposit_id,montant,currency FROM deposit WHERE deposit_id = ?");
    $sq->execute([$id]);
    $sq->setFetchMode(PDO::FETCH_ASSOC);
    $userId = $sq->fetchAll();


    $sql = $db->prepare("SELECT withdraw_id,montant,currency FROM withdraw WHERE withdraw_id = ?");
    $sql->execute([$id]);
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    $userIdr = $sql->fetchAll();
    


    foreach ($userId as $u) {
        echo "Depot", " ";
        echo $u['montant'], " ";
        echo $u['currency'];?><br><?php
    }
    foreach ($userIdr as $u) {
        echo "Retrait", " ";
        echo $u['montant'], " ";
        echo $u['currency'];?><br><?php
    }
    ?>
</div>