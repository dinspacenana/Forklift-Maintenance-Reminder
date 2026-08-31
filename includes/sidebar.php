<?php
// includes/sidebar.php - Sidebar Navigasi FMR
$currentPage = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
?>
<!-- SIDEBAR -->
<aside class="fmr-sidebar" id="sidebarMenu">
    <!-- Brand / Logo -->
    <div class="sidebar-brand-wrapper">
        <a href="index.php" class="sidebar-brand-link">
            <img src="assets/images/Gemini_Generated_Image_5p4qem5p4qem5p4q-removebg-preview.png" alt="FMR Logo" class="sidebar-brand-logo" onerror="this.src='dist/images/Gemini_Generated_Image_5p4qem5p4qem5p4q-removebg-preview.png'">
            <div class="sidebar-brand-text">
                <div class="brand-title-fmr">FMR</div>
                <div class="brand-subtitle-fmr">Forklift Maintenance<br>Reminder</div>
            </div>
        </a>
    </div>

    <!-- Section: Utama -->
    <div class="sidebar-section-label">Utama</div>
    <ul class="sidebar-menu">
        <li class="sidebar-item">
            <a href="index.php?page=dashboard" class="sidebar-link <?= ($currentPage === 'dashboard' || $currentPage === '') ? 'active' : '' ?>">
                <span class="icon-box"><i class="fa-solid fa-table-cells-large"></i></span>
                <span>Dashboard</span>
            </a>
        </li>
    </ul>

    <!-- Section: Master Data -->
    <div class="sidebar-section-label">Master Data</div>
    <ul class="sidebar-menu">
        <li class="sidebar-item">
            <a href="index.php?page=customer" class="sidebar-link <?= ($currentPage === 'customer') ? 'active' : '' ?>">
                <span class="icon-box"><i class="fa-solid fa-user-check"></i></span>
                <span>Customer</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="index.php?page=forklift" class="sidebar-link <?= ($currentPage === 'forklift') ? 'active' : '' ?>">
                <span class="icon-box"><i class="fa-solid fa-truck-ramp-box"></i></span>
                <span>Forklift</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="index.php?page=jenis_maintenance" class="sidebar-link <?= ($currentPage === 'jenis_maintenance') ? 'active' : '' ?>">
                <span class="icon-box"><i class="fa-solid fa-wrench"></i></span>
                <span>Jenis Maintenance</span>
            </a>
        </li>
    </ul>

    <!-- Section: Operasional -->
    <div class="sidebar-section-label">Operasional</div>
    <ul class="sidebar-menu">
        <li class="sidebar-item">
            <a href="index.php?page=input_maintenance" class="sidebar-link <?= ($currentPage === 'input_maintenance') ? 'active' : '' ?>">
                <span class="icon-box"><i class="fa-regular fa-pen-to-square"></i></span>
                <span>Input Maintenance</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="index.php?page=unit_forklift" class="sidebar-link <?= ($currentPage === 'unit_forklift') ? 'active' : '' ?>">
                <span class="icon-box"><i class="fa-solid fa-truck-ramp-box"></i></span>
                <span>Unit Forklift</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="index.php?page=outstanding" class="sidebar-link <?= ($currentPage === 'outstanding') ? 'active' : '' ?>">
                <span class="icon-box"><i class="fa-solid fa-exclamation"></i></span>
                <span>Outstanding</span>
            </a>
        </li>
    </ul>

    <!-- Section: Reminder -->
    <div class="sidebar-section-label">Reminder</div>
    <ul class="sidebar-menu">
        <li class="sidebar-item">
            <a href="index.php?page=reminder" class="sidebar-link <?= ($currentPage === 'reminder') ? 'active' : '' ?>">
                <span class="icon-box"><i class="fa-regular fa-bell"></i></span>
                <span>Reminder</span>
            </a>
        </li>
    </ul>

    <!-- Section: Administration -->
    <div class="sidebar-section-label">Administration</div>
    <ul class="sidebar-menu">
        <li class="sidebar-item">
            <a href="index.php?page=user" class="sidebar-link <?= ($currentPage === 'user') ? 'active' : '' ?>">
                <span class="icon-box"><i class="fa-solid fa-user-group"></i></span>
                <span>User Management</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="index.php?page=setting" class="sidebar-link <?= ($currentPage === 'setting') ? 'active' : '' ?>">
                <span class="icon-box"><i class="fa-solid fa-gear"></i></span>
                <span>Setting</span>
            </a>
        </li>
    </ul>

    <!-- Section: Report -->
    <div class="sidebar-section-label">Report</div>
    <ul class="sidebar-menu">
        <li class="sidebar-item">
            <a href="index.php?page=history" class="sidebar-link <?= ($currentPage === 'history') ? 'active' : '' ?>">
                <span class="icon-box"><i class="fa-solid fa-list-check"></i></span>
                <span>History</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="index.php?page=activity_log" class="sidebar-link <?= ($currentPage === 'activity_log') ? 'active' : '' ?>">
                <span class="icon-box"><i class="fa-regular fa-clock"></i></span>
                <span>Activity Log</span>
            </a>
        </li>
    </ul>
</aside>
