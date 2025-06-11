<?= $this->extend('layout/templates'); ?>

<?= $this->section('content'); ?>

<main class="container mt-5">
    <div class="profile-container">
        <h2>Profile</h2>
        <div class="profile">
            <div class="profile-info">
                <h3><?= $user['name']; ?></h3>
                <p><?= $user['email']; ?></p>
                <a href="/profile/edit/<?= session()->get('user_id'); ?>" class="btn btn-primary">Edit Profile</a>
            </div>
        </div>
    </div>
    <div class="mt-5">
        <h1>Transaction Table</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Game</th>
                    <th scope="col">Game ID</th>
                    <th scope="col">Payment Method</th>
                    <th scope="col">Total Payment</th>
                    <th scope="col">Payment Image</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($transactions) : ?>
                    <?php $i = 1; ?>
                    <?php foreach ($transactions as $transaction) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $transaction['title']; ?></td>
                            <td><?= $transaction['gameuser_id']; ?></td>
                            <td><?= $transaction['payment_method']; ?></td>
                            <td><?= $transaction['total_payment']; ?></td>
                            <td>
                                <img src="assets/images/transactions/<?= $transaction['payment_image']; ?>" alt="" style="width:100px">
                            </td>
                            <td><?= $transaction['created_at']; ?></td>
                            <td><?= $transaction['updated_at']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="8">No Data</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</main>

<?= $this->endSection(); ?>
