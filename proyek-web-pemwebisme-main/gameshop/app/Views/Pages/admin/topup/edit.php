<?= $this->extend('layout/templates'); ?>

<?= $this->section('content'); ?>
<div class="container mt-4">
    <a href="/topup" class="btn btn-secondary">Back</a>
    <form action="/topup/update/<?= $topup['topup_id']; ?>" method="post" class="mt-4" style="display:flex; flex-direction:column; gap:5px" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <label for="game_id">Game</label>
        <select name="game_id" id="game_id" class="form-control" required>
            <?php if($games): ?>
                <?php foreach($games as $game): ?>
                    <option value="<?= $game['game_id']; ?>" <?php if($game['game_id'] == $topup['game_id']) echo 'selected'; ?>>
                        <?= $game['title']; ?>
                    </option>
                <?php endforeach; ?>
             <?php else: ?>
                <option value="" disabled>No Data</option>
            <?php endif; ?>
        </select>
        <label for="title">Name</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="26 Diamond" value="<?= $topup['topup_title']; ?>" required>
        <label for="price">Price</label>
        <input type="number" name="price" id="price" class="form-control" placeholder="Price" value="<?= $topup['price']; ?>" required>
        <button type="submit" class="btn btn-primary">Update Topup</button>
    </form>
</div>

<?= $this->endSection(); ?>
