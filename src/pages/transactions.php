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
        </form>
    </div>
</div>
<div class="transactions">
    <p>transactions :</p><br>
</div>