<?php
/**
 * master_customer.php
 * Placeholder halaman - akan diimplementasikan pada tahap berikutnya.
 */
require_once __DIR__ . '/functions.php';
requireLogin();

$pageTitle = 'Segera Hadir';
$activeMenu = '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title><?= e($pageTitle) ?> - <?= e(APP_NAME) ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="dist/css/style.css">
</head>
<body>
<div class="app-wrapper">
    <?php include __DIR__ . '/sidebar.php'; ?>
    <div class="app-content">
        <?php include __DIR__ . '/header.php'; ?>
        <main class="page-body">
            <div class="content-card text-center py-5">
                <i class="bi bi-cone-striped display-4 text-warning mb-3 d-block"></i>
                <h4 class="fw-bold mb-2">Halaman Ini Belum Tersedia</h4>
                <p class="text-muted mb-0">Fitur ini akan dibangun pada tahap pengembangan berikutnya.</p>
            </div>
        </main>
<?php include __DIR__ . '/footer.php'; ?>
