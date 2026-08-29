<?php
// data-user.php - User Management & Role Access FMR
include_once __DIR__ . '/header.php';

// Tab active switcher
$activeTab = isset($_GET['tab']) && $_GET['tab'] === 'role' ? 'role' : 'user';
?>

<!-- MAIN USER MANAGEMENT CONTENT -->
<main class="dashboard-container">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="page-title mb-0">User Management</h2>
        <?php if ($activeTab === 'role'): ?>
            <button type="button" class="btn-add-user" data-bs-toggle="modal" data-bs-target="#addRoleModal">
                <i class="fa-solid fa-plus"></i> Add Role
            </button>
        <?php endif; ?>
    </div>

    <!-- Main Container Card -->
    <div class="user-mgmt-card">
        <!-- Navigation Tab Pills -->
        <div class="user-tabs-nav">
            <a href="data-user.php?tab=user" class="tab-pill-btn <?= $activeTab === 'user' ? 'active' : 'inactive' ?>">
                User
            </a>
            <a href="data-user.php?tab=role" class="tab-pill-btn <?= $activeTab === 'role' ? 'active' : 'inactive' ?>">
                Role & Akses
            </a>
        </div>

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

<?php
include_once __DIR__ . '/footer.php';
?>
