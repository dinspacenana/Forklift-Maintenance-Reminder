<?php
// includes/header.php - Header & Topbar FMR
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
    
    <!-- Bootstrap 5 CSS (Local) -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    
    <!-- Google Material Symbols (Google Icons) -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
    <!-- Custom Stylesheet with Cache Busting -->
    <link rel="stylesheet" href="assets/css/style.css?v=<?= time(); ?>">
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
                    <img src="assets/images/avatar.svg" alt="Andi Wijaya" class="topbar-user-avatar" onerror="this.src='dist/images/avatar.svg'">
                    <div class="topbar-user-info d-none d-sm-flex">
                        <span class="topbar-user-name">Andi Wijaya</span>
                        <span class="topbar-user-role">Administrator</span>
                    </div> 
                </button>

                <!-- Profile Dropdown Content -->
                <ul class="dropdown-menu dropdown-menu-end fmr-profile-dropdown" aria-labelledby="userProfileDropdown">
                    <!-- Dropdown Header Info -->
                    <li class="dropdown-user-header">
                        <img src="assets/images/avatar.svg" alt="Andi Wijaya" onerror="this.src='dist/images/avatar.svg'">
                        <div class="dropdown-user-details">
                            <span class="name">Andi Wijaya</span>
                            <span class="role">Administrator</span>
                        </div>
                    </li>
                    
                    <!-- Menu Items -->
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#profileModal">
                            <span class="material-symbols-outlined">person</span>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item text-danger" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#logoutModal">
                            <span class="material-symbols-outlined">logout</span>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </header>
