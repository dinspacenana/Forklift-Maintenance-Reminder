<?php
/**
 * header.php
 * Topbar aplikasi. Membutuhkan $pageTitle (opsional) dari halaman pemanggil.
 * File ini harus dipanggil setelah functions.php di-require dan session aktif.
 */

$pageTitle = $pageTitle ?? 'Dashboard';
?>
<header class="app-topbar">
    <div class="d-flex align-items-center gap-2">
        <button class="btn d-lg-none me-2" id="sidebarToggle" type="button" aria-label="Toggle sidebar">
            <i class="bi bi-list fs-4"></i>
        </button>
        <p class="topbar-title"><?= e(APP_SHORT) ?> / <?= e(currentUserRole()) ?></p>
    </div>

    <div class="dropdown">
        <button class="topbar-user" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://ui-avatars.com/api/?name=<?= urlencode(currentUserName()) ?>&background=83A8BD&color=fff"
                 alt="Avatar">
            <span class="text-start">
                <span class="d-block user-name"><?= e(currentUserName()) ?></span>
                <span class="d-block user-role"><?= e(currentUserRole()) ?></span>
            </span>
            <i class="bi bi-chevron-down text-muted ms-1"></i>
        </button>

        <ul class="dropdown-menu dropdown-menu-end topbar-user-menu">
            <li>
                <div class="dropdown-header-block">
                    <img src="https://ui-avatars.com/api/?name=<?= urlencode(currentUserName()) ?>&background=83A8BD&color=fff"
                         alt="Avatar">
                    <div>
                        <span class="d-block user-name"><?= e(currentUserName()) ?></span>
                        <span class="d-block user-role"><?= e(currentUserRole()) ?></span>
                    </div>
                </div>
            </li>
            <li>
                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#profileModal">
                    <i class="bi bi-person"></i> Profile
                </a>
            </li>
            <li>
                <a class="dropdown-item text-danger" href="modules/auth_action.php?action=logout">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </a>
            </li>
        </ul>
    </div>
</header>
