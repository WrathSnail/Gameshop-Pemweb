<?= $this->extend('layout/templates'); ?>

<?= $this->section('content'); ?>
<div class="container mt-4">
    <a href="/game" class="btn btn-secondary">Back</a>
    <form action="/game/update/<?= $game['slug']; ?>" method="post" class="mt-4" style="display: flex; flex-direction: column; gap: 10px;" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <label for="title">Judul</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Judul" value="<?= $game['title']; ?>" required>
        <label for="description">Deskripsi</label>
        <input type="text" name="description" id="description" class="form-control" placeholder="Deskripsi" value="<?= $game['description']; ?>" required>
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control">
        <button type="submit" class="btn btn-primary">Update Game</button>
    </form>
</div>

<?= $this->endSection(); ?>
