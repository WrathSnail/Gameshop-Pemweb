<?= $this->extend('/layout/templates'); ?>

<?= $this->section('content'); ?>

<div class="container mt-4">
    <a href="/user/new" class="btn btn-primary mb-3">Add New User</a>
    <table class="table table-bordered table-striped text-center">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if($users): ?>
            <?php $i = 1; ?>
            <?php foreach($users as $user): ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $user['name']; ?></td>
                <td><?= $user['email']; ?></td>
                <td><?= $user['role']; ?></td>
                <td><?= $user['created_at']; ?></td>
                <td><?= $user['updated_at']; ?></td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="/user/edit/<?= $user['user_id']; ?>" class="btn btn-warning">Edit</a>
                        <form action="/user/delete/<?= $user['user_id']; ?>" method="post">
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
</div>

<?= $this->endSection(); ?>
