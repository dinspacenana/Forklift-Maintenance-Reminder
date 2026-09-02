<?php
// login.php - Halaman Login Forklift Maintenance Reminder (FMR)
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Forklift Maintenance Reminder</title>
    
    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS (Local) -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    
    <!-- Google Material Symbols (Google Icons) -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css?v=<?= time(); ?>">
</head>
<body class="login-body">

    <div class="login-card-container">
        <!-- Logo Emblem -->
        <img src="assets/images/Gemini_Generated_Image_5p4qem5p4qem5p4q-removebg-preview.png" alt="Forklift Maintenance Reminder Logo" class="login-logo-img" onerror="this.src='dist/images/Gemini_Generated_Image_5p4qem5p4qem5p4q-removebg-preview.png'">

        <!-- Title & Subtitle -->
        <h1 class="login-main-title">Forklift Maintenance Reminder</h1>
        <p class="login-sub-title">Sistem Pengingat Perawatan Forklift</p>

        <!-- Login Form -->
        <form action="index.php" method="POST">
            <!-- Username Input -->
            <div class="login-field-group">
                <label for="username" class="login-input-label">Username</label>
                <div class="login-input-box">
                    <span class="login-field-icon">
                        <span class="material-symbols-outlined">person</span>
                    </span>
                    <input 
                        type="text" 
                        id="username" 
                        name="username" 
                        class="login-text-input" 
                        placeholder="Masukkan Username" 
                        autocomplete="username" 
                        required>
                </div>
            </div>

            <!-- Password Input -->
            <div class="login-field-group">
                <label for="password" class="login-input-label">Password</label>
                <div class="login-input-box">
                    <span class="login-field-icon">
                        <span class="material-symbols-outlined">lock</span>
                    </span>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        class="login-text-input" 
                        placeholder="Masukkan Password" 
                        autocomplete="current-password" 
                        required>
                    <button type="button" class="login-toggle-password" id="togglePasswordBtn" title="Tampilkan Password" aria-label="Toggle password visibility">
                        <span class="material-symbols-outlined" id="togglePasswordIcon">visibility</span>
                    </button>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn-login-submit">Masuk</button>
        </form>
    </div>

    <!-- Bootstrap 5 Bundle JS (Local) -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Password Visibility Toggle Script -->
    <script>
        const togglePasswordBtn = document.getElementById('togglePasswordBtn');
        const passwordInput = document.getElementById('password');
        const togglePasswordIcon = document.getElementById('togglePasswordIcon');

        if (togglePasswordBtn && passwordInput && togglePasswordIcon) {
            togglePasswordBtn.addEventListener('click', function() {
                const isPassword = passwordInput.type === 'password';
                passwordInput.type = isPassword ? 'text' : 'password';
                togglePasswordIcon.textContent = isPassword ? 'visibility_off' : 'visibility';
                togglePasswordBtn.title = isPassword ? 'Sembunyikan Password' : 'Tampilkan Password';
            });
        }
    </script>
</body>
</html>
