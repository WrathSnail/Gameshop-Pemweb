<?= $this->extend('/layout/templates'); ?>

<?= $this->section('content'); ?>
<div class="container mt-4">
    <a href="/transaction/new" class="btn btn-primary mb-3">Add New Transaction</a>
    <table class="table table-bordered table-striped text-center">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Game</th>
                <th>User</th>
                <th>Game ID</th>
                <th>Server</th>
                <th>Payment Method</th>
                <th>Total Payment</th>
                <th>Payment Image</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if($transactions): ?>
            <?php $i = 1; ?>
            <?php foreach($transactions as $transaction): ?>
            <tr >
                <td><?= $i++; ?></td>
                <td><?= $transaction['title']; ?></td>
                <td><?= $transaction['name']; ?></td>
                <td><?= $transaction['gameuser_id']; ?></td>
                <td><?= $transaction['game_location']; ?></td>
                <td><?= $transaction['payment_method']; ?></td>
                <td><?= $transaction['total_payment']; ?></td>
                <td>
                    <img src="/assets/images/transactions/<?= $transaction['payment_image']; ?>" alt="<?= $transaction['payment_image']; ?>" width="100px">
                </td>
                <td><?= $transaction['created_at']; ?></td>
                <td><?= $transaction['updated_at']; ?></td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="/transaction/edit/<?= $transaction['transaction_id']; ?>" class="btn btn-warning">Edit</a>
                        <form action="/transaction/delete/<?= $transaction['transaction_id']; ?>" method="post">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="11">No Data</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>
