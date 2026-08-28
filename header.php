<?php
// header.php - Header & Topbar FMR
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FMR / Administrator - Dashboard</title>
    
    <!-- Google Fonts: Poppins, Playfair Display & Oleo Script Swash Caps -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps:wght@400;700&family=Playfair+Display:ital,wght@1,700;1,900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Font Awesome 6 Pro / Free CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="dist/css/style.css">
</head>
<body>

<div class="fmr-layout">
    <!-- Include Sidebar -->
    <?php include_once __DIR__ . '/sidebar.php'; ?>

    <!-- Main Content Wrapper -->
    <div class="fmr-main">
        <!-- Topbar / Header -->
        <header class="fmr-topbar">
            <!-- Left: Breadcrumb / Section Title -->
            <h1 class="topbar-breadcrumb">FMR / Administrator</h1>

            <!-- Right: User Profile Dropdown -->
            <div class="dropdown">
                <button class="topbar-user-btn dropdown-toggle" type="button" id="userProfileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="dist/images/avatar.svg" alt="Andi Wijaya" class="topbar-user-avatar">
                    <div class="topbar-user-info d-none d-sm-flex">
                        <span class="topbar-user-name">Andi Wijaya</span>
                        <span class="topbar-user-role">Administrator</span>
                        </div> 
                </button>

                <!-- Profile Dropdown Content -->
                <ul class="dropdown-menu dropdown-menu-end fmr-profile-dropdown" aria-labelledby="userProfileDropdown">
                    <!-- Dropdown Header Info -->
                    <li class="dropdown-user-header">
                        <img src="dist/images/avatar.svg" alt="Andi Wijaya">
                        <div class="dropdown-user-details">
                            <span class="name">Andi Wijaya</span>
                            <span class="role">Administrator</span>
                        </div>
                    </li>
                    
                    <!-- Menu Items -->
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#profileModal">
                            <i class="fa-regular fa-user"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item text-danger" href="login.php">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </header>
