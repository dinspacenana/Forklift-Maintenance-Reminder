<?php
// sidebar.php - Sidebar Navigasi FMR
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!-- SIDEBAR -->
<aside class="fmr-sidebar" id="sidebarMenu">
    <!-- Brand / Logo -->
    <div class="sidebar-brand-wrapper">
        <a href="index.php" class="sidebar-brand-link">
            <img src="dist/images/Gemini_Generated_Image_5p4qem5p4qem5p4q-removebg-preview.png" alt="FMR Logo" class="sidebar-brand-logo">
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
            <a href="index.php" class="sidebar-link <?= ($currentPage == 'index.php' || $currentPage == 'home.php' || $currentPage == '') ? 'active' : '' ?>">
                <span class="icon-box"><i class="fa-solid fa-table-cells-large"></i></span>
                <span>Dashboard</span>
            </a>
        </li>
    </ul>

    <!-- Section: Master Data -->
    <div class="sidebar-section-label">Master Data</div>
    <ul class="sidebar-menu">
        <li class="sidebar-item">
            <a href="master_customer.php" class="sidebar-link <?= ($currentPage == 'master_customer.php') ? 'active' : '' ?>">
                <span class="icon-box"><i class="fa-solid fa-user-gear"></i></span>
                <span>Customer</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="master_forklift.php" class="sidebar-link <?= ($currentPage == 'master_forklift.php') ? 'active' : '' ?>">
                <span class="icon-box"><i class="fa-solid fa-truck-ramp-box"></i></span>
                <span>Forklift</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="master_jenis_maintenance.php" class="sidebar-link <?= ($currentPage == 'master_jenis_maintenance.php') ? 'active' : '' ?>">
                <span class="icon-box"><i class="fa-solid fa-wrench"></i></span>
                <span>Jenis Maintenance</span>
            </a>
        </li>
    </ul>

    <!-- Section: Operasional -->
    <div class="sidebar-section-label">Operasional</div>
    <ul class="sidebar-menu">
        <li class="sidebar-item">
            <a href="operasional_input.php" class="sidebar-link <?= ($currentPage == 'operasional_input.php') ? 'active' : '' ?>">
                <span class="icon-box"><i class="fa-regular fa-pen-to-square"></i></span>
                <span>Input Maintenance</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="operasional_unit_forklift.php" class="sidebar-link <?= ($currentPage == 'operasional_unit_forklift.php') ? 'active' : '' ?>">
                <span class="icon-box"><i class="fa-solid fa-truck-ramp-box"></i></span>
                <span>Unit Forklift</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="operasional_jadwal.php" class="sidebar-link <?= ($currentPage == 'operasional_jadwal.php') ? 'active' : '' ?>">
                <span class="icon-box"><i class="fa-regular fa-calendar-days"></i></span>
                <span>Jadwal Maintenance</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="opersional_outstanding.php" class="sidebar-link <?= ($currentPage == 'opersional_outstanding.php') ? 'active' : '' ?>">
                <span class="icon-box"><i class="fa-solid fa-circle-exclamation"></i></span>
                <span>Outstanding</span>
            </a>
        </li>
    </ul>

    <!-- Section: Reminder -->
    <div class="sidebar-section-label">Reminder</div>
    <ul class="sidebar-menu">
        <li class="sidebar-item">
            <a href="reminder.php" class="sidebar-link <?= ($currentPage == 'reminder.php') ? 'active' : '' ?>">
                <span class="icon-box"><i class="fa-regular fa-bell"></i></span>
                <span>Reminder</span>
            </a>
        </li>
    </ul>

    <!-- Section: Administration -->
    <div class="sidebar-section-label">Administration</div>
    <ul class="sidebar-menu">
        <li class="sidebar-item">
            <a href="data-user.php" class="sidebar-link <?= ($currentPage == 'data-user.php') ? 'active' : '' ?>">
                <span class="icon-box"><i class="fa-solid fa-user-group"></i></span>
                <span>User Management</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="setting.php" class="sidebar-link <?= ($currentPage == 'setting.php') ? 'active' : '' ?>">
                <span class="icon-box"><i class="fa-solid fa-gear"></i></span>
                <span>Setting</span>
            </a>
        </li>
    </ul>

    <!-- Section: Report -->
    <div class="sidebar-section-label">Report</div>
    <ul class="sidebar-menu">
        <li class="sidebar-item">
            <a href="inquiry-coba.php" class="sidebar-link <?= ($currentPage == 'inquiry-coba.php') ? 'active' : '' ?>">
                <span class="icon-box"><i class="fa-solid fa-list-check"></i></span>
                <span>History</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="activity-log.php" class="sidebar-link <?= ($currentPage == 'activity-log.php') ? 'active' : '' ?>">
                <span class="icon-box"><i class="fa-regular fa-clock"></i></span>
                <span>Activity Log</span>
            </a>
        </li>
    </ul>
</aside>
