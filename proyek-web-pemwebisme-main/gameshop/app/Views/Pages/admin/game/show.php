<?= $this->extend('layout/templates'); ?>

<?= $this->section('content'); ?>
<main class="container mt-4">
    <a href="/game/new" class="btn btn-primary mb-3">Add New Game</a>
    <table class="table table-bordered table-striped text-center">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Game</th>
                <th>Deskripsi</th>
                <th>Sampul</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if($games): ?>
                <?php $i = 1; ?>
                <?php foreach($games as $game): ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $game['title']; ?></td>
                        <td><?= $game['description']; ?></td>
                        <td>
                            <img src="assets/images/games/<?= $game['game_image']; ?>" alt="" style="width:100px" class="img-fluid">
                        </td>
                        <td><?= $game['created_at']; ?></td>
                        <td><?= $game['updated_at']; ?></td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="/game/edit/<?= $game['slug']; ?>" class="btn btn-warning">Edit</a>
                                <form action="/game/delete/<?= $game['slug']; ?>" method="post">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">No Data</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</main>
<?= $this->endSection(); ?>
