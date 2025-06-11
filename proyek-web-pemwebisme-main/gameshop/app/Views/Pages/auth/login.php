<?= $this->extend('/layout/templates'); ?>

<?= $this->section('content'); ?>

<main class="container mt-5">
    <div class="login-container">
        <h2>Login</h2>
        <form action="/login" method="post" class="login-form">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <div class="form-group">
                <input type="submit" value="Login" class="btn btn-primary">
            </div>
        </form>
        <p>Belum memiliki akun? <a href="/register">Daftar</a></p>
        <p>Lupa password? <a href="/forgot-password">Lupa password</a></p>
    </div>
</main>

<?= $this->endSection(); ?>
