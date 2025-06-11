<?= $this->extend('layout/templates'); ?>

<?= $this->section('content'); ?>
<div class="container mt-4">
    <a href="/game" class="btn btn-secondary">Back</a>
    <form action="/game/create" method="post" class="mt-4" style="display: flex; flex-direction: column; gap: 10px;" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Title" required>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" class="form-control" placeholder="Description" required>
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control" required>
        <button type="submit" class="btn btn-primary">Add Game</button>
    </form>
</div>

<?= $this->endSection(); ?>
