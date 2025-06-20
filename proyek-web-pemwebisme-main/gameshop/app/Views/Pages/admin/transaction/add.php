<?= $this->extend('layout/templates'); ?>

<?= $this->section('content'); ?>
<div class="container mt-4">
    <a href="/transaction" class="btn btn-secondary">Back</a>
    <form action="/transaction/create" method="post" class="mt-4" style="display:flex; flex-direction:column; gap:5px" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <label for="game_id">Game</label>
        <select name="game_id" id="game_id" class="form-control" required>
            <option value="">-- Select Game --</option>
            <?php if($games): ?>
                <?php foreach($games as $game): ?>
                    <option value="<?= $game['game_id']; ?>"><?= $game['title']; ?></option>
                <?php endforeach; ?>
            <?php else: ?>
                <option value="" disabled>No Data</option>
            <?php endif; ?>
        </select>
        <label for="user_id">User</label>
        <select name="user_id" id="user_id" class="form-control" required>
            <option value="">-- Select User --</option>
            <?php if($users): ?>
                <?php foreach($users as $user): ?>
                    <option value="<?= $user['user_id']; ?>"><?= $user['name']; ?></option>
                <?php endforeach; ?>
            <?php else: ?>
                <option value="" disabled>No Data</option>
            <?php endif; ?>
        </select>
        <label for="gameuser_id">Game ID</label>
        <input type="text" name="gameuser_id" id="gameuser_id" class="form-control" placeholder="13092844" required>
        <label for="game_location">Server</label>
        <input type="text" name="game_location" id="game_location" class="form-control" placeholder="Server" required>
        <label for="payment_method">Payment Method</label>
        <input type="text" name="payment_method" id="payment_method" class="form-control" placeholder="Payment Method" required>
        <label for="total_payment">Total Payment</label>
        <input type="number" name="total_payment" id="total_payment" class="form-control" placeholder="Total Payment" required>
        <label for="image">Payment Image</label>
        <input type="file" name="image" id="image" class="form-control" required>
        <button type="submit" class="btn btn-primary mt-3">Add Transaction</button>
    </form>
</div>

<?= $this->endSection(); ?>
