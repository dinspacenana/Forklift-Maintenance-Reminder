<?php
// views/user_management/index.php - User Management View
$activeTab = isset($_GET['tab']) && $_GET['tab'] === 'role' ? 'role' : 'user';
?>

<!-- MAIN USER MANAGEMENT CONTENT -->
<main class="dashboard-container">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="page-title mb-0">Manajemen User</h2>
        <?php if ($activeTab === 'role'): ?>
            <button type="button" class="btn-add-user" data-bs-toggle="modal" data-bs-target="#addRoleModal">
                <span class="material-symbols-outlined">add</span> Tambah Role
            </button>
        <?php endif; ?>
    </div>

    <!-- Navigation Tab Pills (Outside Card) -->
    <div class="user-tabs-nav">
        <a href="index.php?page=user&tab=user" class="tab-pill-btn <?= $activeTab === 'user' ? 'active' : 'inactive' ?>">
            User
        </a>
        <a href="index.php?page=user&tab=role" class="tab-pill-btn <?= $activeTab === 'role' ? 'active' : 'inactive' ?>">
            Role & Akses
        </a>
    </div>

    <!-- Main Container Card -->
    <div class="user-mgmt-card">
        <!-- Dynamic Tab Content -->
        <?php
        if ($activeTab === 'role') {
            include __DIR__ . '/tab_role.php';
        } else {
            include __DIR__ . '/tab_user.php';
        }
        ?>
    </div>
</main>
