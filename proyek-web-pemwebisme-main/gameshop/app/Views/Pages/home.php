<!-- Home.php -->

<?= $this->extend('layout/templates'); ?>

<?= $this->section('content'); ?>

<header class="bg-dark text-white text-center py-5">
    <h1 class="display-4">Gameshop</h1>
    <p class="lead">Halaman Utama</p>
</header>

<main class="container mt-5">
    <h2 class="mb-4">Daftar Games</h2>
    <div class="row">
        <?php if ($games): ?>
            <?php foreach ($games as $game): ?>
                <div class="col-md-4 mb-4">
                    <a href="/<?= $game['slug']; ?>" class="card text-decoration-none">
                        <img src="/assets/images/games/<?= $game['game_image']; ?>" alt="<?= $game['title']; ?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?= $game['title']; ?></h5>
                            <p class="card-text"><?= $game['description']; ?></p>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No Data</p>
        <?php endif; ?>
    </div>
</main>

<?= $this->endSection(); ?>
