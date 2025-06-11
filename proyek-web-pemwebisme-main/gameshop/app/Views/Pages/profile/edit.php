<?= $this->extend('layout/templates'); ?>

<?= $this->section('content'); ?>
    
<div class="container mt-5">
    <a href="/profile">
        <button class="btn btn-secondary">Back</button>
    </a>
    <form action="/profile/update/<?= session()->get('user_id'); ?>" method="post" class="mt-3">
        <?= csrf_field(); ?>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="<?= $user['name']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="<?= $user['email']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
    <form action="/profile/update-password/<?= $user['user_id']; ?>" method="post" class="mt-3">
        <?= csrf_field(); ?>
        <div class="mb-3">
            <label for="old_password" class="form-label">Old Password</label>
            <input type="password" name="old_password" id="old_password" class="form-control" placeholder="Old Password" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">New Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="New Password" required>
        </div>
        <div class="mb-3">
            <label for="confirm_password" class="form-label">Confirm Password</label>
            <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Password</button>
    </form>
</div>

<?= $this->endSection(); ?>
