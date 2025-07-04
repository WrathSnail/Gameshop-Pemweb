<?= $this->extend('layout/templates'); ?>

<?= $this->section('content'); ?>

<main class="container mt-5">
    <div class="register-container">
        <h2>Register</h2>
        <form action="/register" method="post" class="register-form">
            
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="confirm_password">Konfirmasi Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
            </div>

            <div class="form-group">
                <input type="submit" value="Register" class="btn btn-primary">
            </div>
        </form>
        <p>Sudah memiliki akun? <a href="/login">Login</a></p>
    </div>
</main>

<?= $this->endSection(); ?>
