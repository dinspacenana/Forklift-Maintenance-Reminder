<?php
/**
 * home.php
 * Dashboard Administrator - Forklift Maintenance Reminder (FMR)
 * Tahap 1 (Prototype): seluruh data masih dummy/static.
 */

require_once __DIR__ . '/functions.php';
requireLogin();

$pageTitle  = 'Dashboard';
$activeMenu = 'dashboard';

// ---------------------------------------------------------------
// DUMMY DATA (belum dari database)
// ---------------------------------------------------------------
$summary = [
    'total_forklift' => 14,
    'due_soon'       => 25,
    'overdue'        => 3,
    'outstanding'    => 1,
];

$jadwalReminder = [
    ['customer' => 'PT. Maju Jaya',    'kota' => 'Surabaya', 'maintenance' => 'Ganti Oli Mesin',   'jatuh_tempo' => '20 Agu 2026', 'tipe' => 'wa',   'status' => 'due-soon', 'status_label' => 'Due Soon'],
    ['customer' => 'PT. Robin Jaya',   'kota' => 'Surabaya', 'maintenance' => 'Ganti Filter Udara','jatuh_tempo' => '15 Agu 2026', 'tipe' => 'mail', 'status' => 'over-due',  'status_label' => 'Over Due'],
    ['customer' => 'PT. Wijaya Putra', 'kota' => 'Surabaya', 'maintenance' => 'Ganti Filter Oli',  'jatuh_tempo' => '21 Agu 2026', 'tipe' => 'wa',   'status' => 'over-due',  'status_label' => 'Over Due'],
    ['customer' => 'PT. Jeon Grup',    'kota' => 'Surabaya', 'maintenance' => 'Ganti Filter Solar','jatuh_tempo' => '1 Sep 2026',  'tipe' => 'mail', 'status' => 'h7',        'status_label' => 'H-7'],
    ['customer' => 'PT. Jeon Grup',    'kota' => 'Surabaya', 'maintenance' => 'Ganti Filter Solar','jatuh_tempo' => '1 Sep 2026',  'tipe' => 'mail', 'status' => 'h7',        'status_label' => 'H-7'],
];

$reminderTerkirim = [
    ['customer' => 'PT Maju Jaya',           'maintenance' => 'Ganti Oli Mesin',     'tipe' => 'wa',   'jam' => '08:16', 'status' => 'sukses'],
    ['customer' => 'PT. Nusantara Logistik', 'maintenance' => 'Preventive Service',  'tipe' => 'mail', 'jam' => '11:44', 'status' => 'gagal'],
    ['customer' => 'PT Wijaya Putra',        'maintenance' => 'Ganti Filter Oli',    'tipe' => 'wa',   'jam' => '08:34', 'status' => 'sukses'],
    ['customer' => 'PT Maju Jaya',           'maintenance' => 'Ganti Oli Mesin',     'tipe' => 'wa',   'jam' => '08:16', 'status' => 'sukses'],
];

$totalTerkirim = 12;
$totalGagal    = 2;
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title><?= e($pageTitle) ?> - <?= e(APP_NAME) ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="preconnect" href="https://fonts.googleapis.com">
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

            <!-- WELCOME BANNER -->
            <div class="welcome-banner">
                <span class="decor-circle c1"></span>
                <span class="decor-circle c2"></span>
                <div class="banner-date">Senin, 10 Agustus 2026</div>
                <h2>Selamat Datang, Administrator</h2>
                <p>Pantau seluruh Customer dari satu layar — reminder H-7 berbasis Hour Meter atau Waktu.</p>
            </div>

            <!-- SUMMARY CARDS -->
            <div class="row g-3 mb-4">
                <div class="col-6 col-lg-3">
                    <div class="summary-card card-blue">
                        <div class="summary-icon"><i class="bi bi-truck"></i></div>
                        <div>
                            <div class="summary-label">Total Forklift</div>
                            <div class="summary-value"><?= e(str_pad($summary['total_forklift'], 2, '0', STR_PAD_LEFT)) ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="summary-card card-orange">
                        <div class="summary-icon"><i class="bi bi-hourglass-split"></i></div>
                        <div>
                            <div class="summary-label">Due Soon</div>
                            <div class="summary-value"><?= e(str_pad($summary['due_soon'], 2, '0', STR_PAD_LEFT)) ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="summary-card card-red">
                        <div class="summary-icon"><i class="bi bi-exclamation-triangle-fill"></i></div>
                        <div>
                            <div class="summary-label">Overdue</div>
                            <div class="summary-value"><?= e(str_pad($summary['overdue'], 2, '0', STR_PAD_LEFT)) ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="summary-card card-red">
                        <div class="summary-icon"><i class="bi bi-exclamation-circle-fill"></i></div>
                        <div>
                            <div class="summary-label">Outstanding</div>
                            <div class="summary-value"><?= e(str_pad($summary['outstanding'], 2, '0', STR_PAD_LEFT)) ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TABLE + REMINDER PANEL -->
            <div class="row g-3">
                <div class="col-lg-7">
                    <div class="content-card">
                        <p class="card-title-fmr mb-3">Jadwal Reminder Maintenance Terdekat</p>

                        <div class="table-responsive">
                            <table class="table table-fmr mb-0">
                                <thead>
                                    <tr>
                                        <th>Customer</th>
                                        <th>Maintenance</th>
                                        <th>Jatuh Tempo</th>
                                        <th>Tipe Reminder</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($jadwalReminder as $row): ?>
                                    <tr>
                                        <td>
                                            <div class="cust-name"><?= e($row['customer']) ?></div>
                                            <div class="cust-city"><?= e($row['kota']) ?></div>
                                        </td>
                                        <td><?= e($row['maintenance']) ?></td>
                                        <td><?= e($row['jatuh_tempo']) ?></td>
                                        <td>
                                            <?php if ($row['tipe'] === 'wa'): ?>
                                                <span class="reminder-type-icon wa"><i class="bi bi-whatsapp"></i></span>
                                            <?php else: ?>
                                                <span class="reminder-type-icon mail"><i class="bi bi-envelope-fill"></i></span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <span class="badge-status <?= e($row['status']) ?>"><?= e($row['status_label']) ?></span>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="content-card">
                        <p class="card-title-fmr mb-0">Reminder Terkirim Hari ini</p>
                        <p class="card-subtitle-fmr">Aktivitas Pengiriman Reminder pada 23 Agustus 2026</p>

                        <div class="d-flex gap-2 mb-2">
                            <span class="reminder-summary-badge success-badge">
                                <i class="bi bi-check-circle-fill"></i> <?= (int)$totalTerkirim ?> Terkirim
                            </span>
                            <span class="reminder-summary-badge danger-badge">
                                <i class="bi bi-x-circle-fill"></i> <?= (int)$totalGagal ?> Gagal
                            </span>
                        </div>

                        <div class="reminder-tabs">
                            <span class="tab-item active" data-tab="semua">Semua</span>
                            <span class="tab-item" data-tab="wa">WhatsApp</span>
                            <span class="tab-item" data-tab="mail">Email</span>
                        </div>

                        <div>
                            <?php foreach ($reminderTerkirim as $item): ?>
                                <div class="reminder-list-item" data-type="<?= e($item['tipe']) ?>">
                                    <div class="d-flex align-items-center gap-3">
                                        <?php if ($item['tipe'] === 'wa'): ?>
                                            <span class="reminder-type-icon wa"><i class="bi bi-whatsapp"></i></span>
                                        <?php else: ?>
                                            <span class="reminder-type-icon mail"><i class="bi bi-envelope-fill"></i></span>
                                        <?php endif; ?>
                                        <div>
                                            <div class="r-name"><?= e($item['customer']) ?></div>
                                            <div class="r-detail"><?= e($item['maintenance']) ?></div>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <div class="r-time mb-1"><?= e($item['jam']) ?></div>
                                        <?php if ($item['status'] === 'sukses'): ?>
                                            <span class="badge-sukses">Sukses</span>
                                        <?php else: ?>
                                            <span class="badge-gagal">Gagal</span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <script>
            // Filter tab Reminder Terkirim (Semua / WhatsApp / Email) - client-side, data masih dummy
            document.querySelectorAll('.reminder-tabs .tab-item').forEach(function (tab) {
                tab.addEventListener('click', function () {
                    document.querySelectorAll('.reminder-tabs .tab-item').forEach(t => t.classList.remove('active'));
                    this.classList.add('active');

                    const filter = this.dataset.tab;
                    document.querySelectorAll('.reminder-list-item').forEach(function (item) {
                        if (filter === 'semua' || item.dataset.type === filter) {
                            item.style.display = 'flex';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        </script>

<?php include __DIR__ . '/footer.php'; ?>
