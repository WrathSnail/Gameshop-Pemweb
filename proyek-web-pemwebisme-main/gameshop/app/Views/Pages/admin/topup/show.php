<?= $this->extend('/layout/templates'); ?>

<?= $this->section('content'); ?>
<div class="container mt-4 pb-5">
    <a href="/topup/new" class="btn btn-primary mb-3">Add New Topup</a>
    <table class="table table-bordered table-striped text-center">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Game</th>
                <th>Topup</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if($topups): ?>
            <?php $i = 1; ?>
            <?php foreach($topups as $topup): ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $topup['title']; ?></td>
                <td><?= $topup['topup_title']; ?></td>
                <td><?= $topup['price']; ?></td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="/topup/edit/<?= $topup['topup_id']; ?>" class="btn btn-warning">Edit</a>
                        <form action="/topup/delete/<?= $topup['topup_id']; ?>" method="post">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">No Data</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>
