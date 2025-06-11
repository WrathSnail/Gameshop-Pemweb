<?= $this->extend('layout/templates'); ?>

<?= $this->section('content'); ?>

<?php $paymentMethods = [
    [
        "title" => "DANA",
        "NO" => "085741028454"
    ],
    [
        "title" => "OVO",
        "NO" => "081294089237"
    ],
    [
        "title" => "GOPAY",
        "NO" => "081313416420"
    ],
    [
        "title" => "BANK BCA",
        "NO" => "085741028454"
    ],
    [
        "title" => "BANK BNI",
        "NO" => "081294089237"
    ],
    [
        "title" => "BANK BRI",
        "NO" => "081313416420"
    ],
    [
        "title" => "BANK MANDIRI",
        "NO" => "085741028454"
    ]
];
?>

<main class="container mt-4">
    <h1 class="mb-4">Detail Game</h1>
    <div class="d-flex align-items-center gap-5">
        <?php if ($game) : ?>
            <div class="d-flex flex-column align-items-start">
                <img src="/assets/images/games/<?= $game['game_image']; ?>" alt="<?= $game['title']; ?>" class="img-fluid">
                <h3><?= $game['title']; ?></h3>
                <p><?= $game['description']; ?></p>
            </div>
        <?php else : ?>
            <p>No Data</p>
        <?php endif; ?>
    </div>
    <div class="mt-4">
        <form action="/checkout/<?= $game['slug']; ?>" method="post" enctype="multipart/form-data">
            <div class="mb-4">
                <h1>Masukkan informasi ID</h1>
                <label for="gameuser_id">Player ID</label>
                <input type="text" name="gameuser_id" id="gameuser_id" placeholder="Masukkan Player ID" required class="form-control">
                <label for="game_location">Server</label>
                <input type="text" name="game_location" id="game_location" placeholder="Masukkan server (jika tidak ada kosongkan)" required class="form-control">
            </div>
            <div class="mb-4">
                <h1>Pilih Top Up</h1>
                <select name="price" id="price" class="form-control">
                    <?php if ($topups) : ?>
                        <option value="" selected disabled>Pilih Top Up</option>
                        <?php foreach ($topups as $topup) : ?>
                            <option value="<?= $topup['price']; ?>"><?= $topup['topup_title']; ?>, Rp <?= $topup['price']; ?></option>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <option value="" selected disabled>No Data</option>
                    <?php endif; ?>
                </select>
            </div>
            <div class="mb-4">
                <h1>Pilih Pembayaran</h1>
                <select name="payment_method" id="payment_method" class="form-control">
                    <?php if ($paymentMethods) : ?>
                        <?= $i = 0; ?>
                        <option value="" selected disabled>Pilih Pembayaran</option>
                        <?php foreach ($paymentMethods as $payment) : ?>
                            <option value="<?= $payment['title'] ?>"><?= $payment['title']; ?> No Rek <?= $payment['NO'] ?></option>
                            <?= $i++; ?>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <option value="" selected disabled>No Data</option>
                    <?php endif; ?>
                </select>
            </div>
            <div class="mb-4">
                <h1>Bukti Pembayaran</h1>
                <label for="image">Upload Bukti Pembayaran</label>
                <input type="file" name="image" id="image" required class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">
                Beli
            </button>
        </form>
    </div>
</main>

<?= $this->endSection(); ?>
