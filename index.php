<?php
/**
 * index.php
 * Halaman Login - Forklift Maintenance Reminder (FMR)
 * Tahap 1 (Prototype): autentikasi dummy.
 */

require_once __DIR__ . '/functions.php';

// Jika sudah login, langsung arahkan ke dashboard
if (isLoggedIn()) {
    redirect('home.php');
}

// Ambil pesan error login (jika ada) lalu hapus dari session
$loginError = $_SESSION['login_error'] ?? null;
unset($_SESSION['login_error']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Login - <?= e(APP_NAME) ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Bootstrap 5 CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="dist/css/style.css">
</head>
<body>

<div class="login-wrapper">
    <div class="login-card">
        <img src="dist/images/logo.svg" alt="Logo FMR" class="login-logo">
        <h1 class="login-title">Forklift Maintenance Reminder</h1>
        <p class="login-subtitle">Sistem Pengingat Perawatan Forklift</p>

        <?php if ($loginError): ?>
            <div class="alert alert-danger py-2" role="alert">
                <?= e($loginError) ?>
            </div>
        <?php endif; ?>

        <form action="modules/auth_action.php" method="POST" autocomplete="off">
            <input type="hidden" name="action" value="login">

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                    <input type="text" class="form-control" id="username" name="username"
                           placeholder="Masukkan Username" required autofocus>
                </div>
            </div>

            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                    <input type="password" class="form-control" id="password" name="password"
                           placeholder="Masukkan password" required>
                    <span class="input-group-text toggle-password" id="togglePassword">
                        <i class="bi bi-eye-slash"></i>
                    </span>
                </div>
            </div>

            <button type="submit" class="btn btn-fmr">Masuk</button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Toggle show/hide password
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');

    togglePassword.addEventListener('click', function () {
        const isPassword = passwordInput.getAttribute('type') === 'password';
        passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
        this.querySelector('i').classList.toggle('bi-eye-slash');
        this.querySelector('i').classList.toggle('bi-eye');
    });
</script>
</body>
</html>
