<?= $this->extend('layout/templates'); ?>

<?= $this->section('content'); ?>
<div class="container mt-4">
    <a href="/user" class="btn btn-secondary">Back</a>
    <form action="/user/update/<?= $user['user_id']; ?>" method="post" class="mt-4" style="display:flex; flex-direction:column; gap:5px" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="<?= $user['name']; ?>" required>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="<?= $user['email']; ?>" required>
        <label for="role">Role</label>
        <select name="role" id="role" class="form-control" required>
            <option value="admin" <?= $user['role'] == 'admin' ? 'selected' : ''; ?>>Admin</option>
            <option value="user" <?= $user['role'] == 'user' ? 'selected' : ''; ?>>User</option>
        </select>
        <button type="submit" class="btn btn-primary mt-3">Update User</button>
    </form>
    <form action="/user/update-password/<?= $user['user_id']; ?>" method="post" style="display:flex; flex-direction:column; gap:5px" enctype="multipart/form-data">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        <label for="confirm_password">Konfirmasi Password</label>
        <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Konfirmasi Password" required>
        <button type="submit" class="btn btn-primary mt-3">Update Password</button>
    </form>
</div>

<?= $this->endSection(); ?>
