<?= $this->extend('layout/templates'); ?>

<?= $this->section('content'); ?>
<div class="container mt-4">
    <a href="/user" class="btn btn-secondary">Back</a>
    <form action="/user/create" method="post" class="mt-4" style="display:flex; flex-direction:column; gap:5px" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        <label for="confirm_password">Password Confirm</label>
        <input type="password" name="confirm_password" id="password_confirm" class="form-control" placeholder="Password Confirm" required>
        <button type="submit" class="btn btn-primary mt-3">Add User</button>
    </form>
</div>

<?= $this->endSection(); ?>
