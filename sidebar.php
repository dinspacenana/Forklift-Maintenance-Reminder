<?php
/**
 * sidebar.php
 * Menu navigasi utama aplikasi.
 * Set variabel $activeMenu di halaman pemanggil untuk menandai menu aktif.
 * Contoh: $activeMenu = 'dashboard';
 */

$activeMenu = $activeMenu ?? '';

function menuActive(string $key, string $active): string
{
    return $key === $active ? 'active' : '';
}
?>
<aside class="app-sidebar" id="appSidebar">
    <div class="sidebar-brand">
        <img src="dist/images/logo.svg" alt="Logo FMR">
        <div>
            <div class="brand-title">FMR</div>
            <div class="brand-subtitle">Forklift Maintenance<br>Reminder</div>
        </div>
    </div>

    <div class="sidebar-section-title">Utama</div>
    <ul class="sidebar-nav">
        <li><a href="home.php" class="nav-link-item <?= menuActive('dashboard', $activeMenu) ?>">
            <i class="bi bi-grid-fill"></i> Dashboard
        </a></li>
    </ul>

    <div class="sidebar-section-title">Master Data</div>
    <ul class="sidebar-nav">
        <li><a href="master_customer.php" class="nav-link-item <?= menuActive('customer', $activeMenu) ?>">
            <i class="bi bi-person-lines-fill"></i> Customer
        </a></li>
        <li><a href="master_forklift.php" class="nav-link-item <?= menuActive('forklift', $activeMenu) ?>">
            <i class="bi bi-truck"></i> Forklift
        </a></li>
        <li><a href="master_jenis.php" class="nav-link-item <?= menuActive('jenis', $activeMenu) ?>">
            <i class="bi bi-wrench-adjustable"></i> Jenis Maintenance
        </a></li>
    </ul>

    <div class="sidebar-section-title">Operasional</div>
    <ul class="sidebar-nav">
        <li><a href="operasional_input.php" class="nav-link-item <?= menuActive('input_maintenance', $activeMenu) ?>">
            <i class="bi bi-pencil-square"></i> Input Maintenance
        </a></li>
        <li><a href="operasional_unit.php" class="nav-link-item <?= menuActive('unit_forklift', $activeMenu) ?>">
            <i class="bi bi-truck-flatbed"></i> Unit Forklift
        </a></li>
        <li><a href="operasional_jadwal.php" class="nav-link-item <?= menuActive('jadwal', $activeMenu) ?>">
            <i class="bi bi-calendar-check"></i> Jadwal Maintenance
        </a></li>
        <li><a href="operasional_outstanding.php" class="nav-link-item <?= menuActive('outstanding', $activeMenu) ?>">
            <i class="bi bi-exclamation-circle"></i> Outstanding
        </a></li>
    </ul>

    <div class="sidebar-section-title">Reminder</div>
    <ul class="sidebar-nav">
        <li><a href="reminder.php" class="nav-link-item <?= menuActive('reminder', $activeMenu) ?>">
            <i class="bi bi-bell-fill"></i> Reminder
        </a></li>
    </ul>

    <div class="sidebar-section-title">Administration</div>
    <ul class="sidebar-nav">
        <li><a href="data-user.php" class="nav-link-item <?= menuActive('user_management', $activeMenu) ?>">
            <i class="bi bi-people-fill"></i> User Management
        </a></li>
        <li><a href="setting.php" class="nav-link-item <?= menuActive('setting', $activeMenu) ?>">
            <i class="bi bi-gear-fill"></i> Setting
        </a></li>
    </ul>

    <div class="sidebar-section-title">Report</div>
    <ul class="sidebar-nav">
        <li><a href="inquiry-daftar-done.php" class="nav-link-item <?= menuActive('history', $activeMenu) ?>">
            <i class="bi bi-clock-history"></i> History
        </a></li>
        <li><a href="activity-log.php" class="nav-link-item <?= menuActive('activity_log', $activeMenu) ?>">
            <i class="bi bi-list-check"></i> Activity Log
        </a></li>
    </ul>
</aside>
