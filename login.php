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
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Font Awesome 6 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="dist/css/style.css">
</head>
<body class="login-body">

    <div class="login-card-container">
        <!-- Logo Emblem -->
        <img src="dist/images/Gemini_Generated_Image_5p4qem5p4qem5p4q-removebg-preview.png" alt="Forklift Maintenance Reminder Logo" class="login-logo-img">

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
                        <i class="fa-solid fa-user"></i>
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
                        <i class="fa-solid fa-lock"></i>
                    </span>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        class="login-text-input" 
                        placeholder="Masukkan password" 
                        autocomplete="current-password" 
                        required>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn-login-submit">Masuk</button>
        </form>
    </div>

    <!-- Bootstrap 5 Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
