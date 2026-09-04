<?php
// views/operasional/unit_forklift.php - Operasional Unit Forklift View
$customerFilter = isset($_GET['customer']) ? trim($_GET['customer']) : '';
$jenisFilter = isset($_GET['jenis']) ? trim($_GET['jenis']) : '';
$statusFilter = isset($_GET['status']) ? trim($_GET['status']) : '';

// Data Unit Forklift dengan List Maintenance masing-masing
$allUnits = [
    [
        'unit' => 'Toyota 8FD30',
        'fuel' => 'Diesel',
        'customer' => 'PT. Maju Jaya',
        'serial' => '8FD30-12345',
        'hm' => '4.850',
        'rate' => '50 HM/Bulan',
        'last_update' => '30 Jul 2026',
        'maintenance' => [
            ['name' => 'Ganti Oli Mesin', 'kategori' => 'Umum', 'last_hm' => '1.000 HM', 'interval_hm' => '750 HM', 'due_date' => '10 Agu 2026', 'status' => 'Over Due'],
            ['name' => 'Ganti Filter Solar', 'kategori' => 'Umum', 'last_hm' => '1.000 HM', 'interval_hm' => '800 HM', 'due_date' => '10 Agu 2026', 'status' => 'Over Due'],
            ['name' => 'Overhaul Attachment Clamp', 'kategori' => 'Khusus', 'last_hm' => '1.200 HM', 'interval_hm' => '1500 HM', 'due_date' => '25 Agu 2026', 'status' => 'Due Soon'],
            ['name' => 'Ganti Filter Udara', 'kategori' => 'Umum', 'last_hm' => '760 HM', 'interval_hm' => '1000 HM', 'due_date' => '31 Agu 2026', 'status' => 'Due Soon'],
        ]
    ],
    [
        'unit' => 'Toyota 8FD30',
        'fuel' => 'Diesel',
        'customer' => 'PT. Maju Jaya',
        'serial' => '8FD30-12346',
        'hm' => '4.850',
        'rate' => '50 HM/Bulan',
        'last_update' => '21 Agu 2026',
        'maintenance' => [
            ['name' => 'Ganti Filter Udara', 'kategori' => 'Umum', 'last_hm' => '760 HM', 'interval_hm' => '1000 HM', 'due_date' => '21 Agu 2026', 'status' => 'Due Soon'],
            ['name' => 'Pengecekan Baterai', 'kategori' => 'Umum', 'last_hm' => '500 HM', 'interval_hm' => '1200 HM', 'due_date' => '28 Agu 2026', 'status' => 'Due Soon'],
        ]
    ],
    [
        'unit' => 'Toyota 8FD30',
        'fuel' => 'Diesel',
        'customer' => 'PT. Maju Jaya',
        'serial' => '8FD30-12347',
        'hm' => '4.850',
        'rate' => '50 HM/Bulan',
        'last_update' => '21 Agu 2026',
        'maintenance' => [
            ['name' => 'Pengecekan Sistem Hidrolik', 'kategori' => 'Umum', 'last_hm' => '850 HM', 'interval_hm' => '1000 HM', 'due_date' => '25 Agu 2026', 'status' => 'Due Soon'],
        ]
    ],
    [
        'unit' => 'Toyota 8FD30',
        'fuel' => 'Diesel',
        'customer' => 'PT. Maju Jaya',
        'serial' => '8FD30-12348',
        'hm' => '4.850',
        'rate' => '50 HM/Bulan',
        'last_update' => '21 Agu 2026',
        'maintenance' => [
            ['name' => 'Greasing Mast & Fork', 'kategori' => 'Umum', 'last_hm' => '400 HM', 'interval_hm' => '500 HM', 'due_date' => '29 Agu 2026', 'status' => 'Due Soon'],
        ]
    ],
    [
        'unit' => 'Toyota 8FD30',
        'fuel' => 'Diesel',
        'customer' => 'PT. Maju Jaya',
        'serial' => '8FD30-12349',
        'hm' => '4.850',
        'rate' => '50 HM/Bulan',
        'last_update' => '21 Agu 2026',
        'maintenance' => [
            ['name' => 'Ganti Oli Transmisi', 'kategori' => 'Umum', 'last_hm' => '1200 HM', 'interval_hm' => '1500 HM', 'due_date' => '30 Agu 2026', 'status' => 'Due Soon'],
        ]
    ],
    [
        'unit' => 'Mitsubishi FD30',
        'fuel' => 'Diesel',
        'customer' => 'PT. Mentari Pagi',
        'serial' => 'FD30-33019',
        'hm' => '6.120',
        'rate' => '60 HM/Bulan',
        'last_update' => '15 Agu 2026',
        'maintenance' => [
            ['name' => 'Pengecekan Rem', 'kategori' => 'Umum', 'last_hm' => '900 HM', 'interval_hm' => '1000 HM', 'due_date' => '20 Agu 2026', 'status' => 'Due Soon'],
        ]
    ],
    [
        'unit' => 'Doosan D30S',
        'fuel' => 'Diesel',
        'customer' => 'PT. Nusantara Logistik',
        'serial' => 'D30S-11004',
        'hm' => '5.510',
        'rate' => '45 HM/Bulan',
        'last_update' => '11 Agu 2026',
        'maintenance' => [
            ['name' => 'Ganti Filter Hidrolik', 'kategori' => 'Umum', 'last_hm' => '1100 HM', 'interval_hm' => '1000 HM', 'due_date' => '11 Agu 2026', 'status' => 'Over Due'],
            ['name' => 'Servis Mast & Silinder', 'kategori' => 'Khusus', 'last_hm' => '1150 HM', 'interval_hm' => '1000 HM', 'due_date' => '11 Agu 2026', 'status' => 'Over Due'],
            ['name' => 'Pemeriksaan Rantai Lift', 'kategori' => 'Umum', 'last_hm' => '900 HM', 'interval_hm' => '1000 HM', 'due_date' => '24 Agu 2026', 'status' => 'Due Soon'],
        ]
    ],
    [
        'unit' => 'Toyota 8FD25',
        'fuel' => 'Diesel',
        'customer' => 'PT. Nusantara Logistik',
        'serial' => '8FD25-99201',
        'hm' => '3.200',
        'rate' => '40 HM/Bulan',
        'last_update' => '18 Agu 2026',
        'maintenance' => [
            ['name' => 'Ganti Oli Mesin', 'kategori' => 'Umum', 'last_hm' => '800 HM', 'interval_hm' => '1000 HM', 'due_date' => '26 Agu 2026', 'status' => 'Due Soon'],
        ]
    ],
    [
        'unit' => 'Toyota 8FD30',
        'fuel' => 'Diesel',
        'customer' => 'PT. Toyo Matsu',
        'serial' => '8FD30-77123',
        'hm' => '2.940',
        'rate' => '50 HM/Bulan',
        'last_update' => '05 Agu 2026',
        'maintenance' => [
            ['name' => 'Pembersihan Filter Udara', 'kategori' => 'Umum', 'last_hm' => '450 HM', 'interval_hm' => '500 HM', 'due_date' => '15 Agu 2026', 'status' => 'Due Soon'],
            ['name' => 'Pemeriksaan Tekanan Ban', 'kategori' => 'Umum', 'last_hm' => '200 HM', 'interval_hm' => '300 HM', 'due_date' => '22 Agu 2026', 'status' => 'Due Soon'],
        ]
    ],
    [
        'unit' => 'Komatsu FD30',
        'fuel' => 'Diesel',
        'customer' => 'PT. Robin Jaya',
        'serial' => 'FD30-55412',
        'hm' => '4.100',
        'rate' => '55 HM/Bulan',
        'last_update' => '12 Agu 2026',
        'maintenance' => [
            ['name' => 'Kalibrasi Attachment Side Shift', 'kategori' => 'Khusus', 'last_hm' => '1300 HM', 'interval_hm' => '1000 HM', 'due_date' => '12 Agu 2026', 'status' => 'Over Due'],
            ['name' => 'Ganti Filter Oli', 'kategori' => 'Umum', 'last_hm' => '1250 HM', 'interval_hm' => '1000 HM', 'due_date' => '12 Agu 2026', 'status' => 'Over Due'],
            ['name' => 'Ganti Oli Mesin', 'kategori' => 'Umum', 'last_hm' => '1250 HM', 'interval_hm' => '1000 HM', 'due_date' => '12 Agu 2026', 'status' => 'Over Due'],
        ]
    ],
    [
        'unit' => 'Toyota 8FD30',
        'fuel' => 'Diesel',
        'customer' => 'PT. GatotKaca Logistik',
        'serial' => '8FD30-66231',
        'hm' => '5.800',
        'rate' => '50 HM/Bulan',
        'last_update' => '20 Agu 2026',
        'maintenance' => [
            ['name' => 'Inspeksi Fork Positioner', 'kategori' => 'Khusus', 'last_hm' => '950 HM', 'interval_hm' => '1000 HM', 'due_date' => '20 Agu 2026', 'status' => 'Due Soon'],
            ['name' => 'Ganti Filter Solar', 'kategori' => 'Umum', 'last_hm' => '700 HM', 'interval_hm' => '1000 HM', 'due_date' => '20 Agu 2026', 'status' => 'Due Soon'],
        ]
    ],
    [
        'unit' => 'Mitsubishi FD25',
        'fuel' => 'Diesel',
        'customer' => 'PT. Maju Mundur Makmur',
        'serial' => 'FD25-44102',
        'hm' => '3.750',
        'rate' => '35 HM/Bulan',
        'last_update' => '22 Agu 2026',
        'maintenance' => [
            ['name' => 'Pengecekan Rem', 'kategori' => 'Umum', 'last_hm' => '800 HM', 'interval_hm' => '1000 HM', 'due_date' => '22 Agu 2026', 'status' => 'Due Soon'],
        ]
    ],
    [
        'unit' => 'Doosan D30S',
        'fuel' => 'Diesel',
        'customer' => 'CV. Baja Perkasa',
        'serial' => 'D30S-88319',
        'hm' => '6.400',
        'rate' => '60 HM/Bulan',
        'last_update' => '19 Agu 2026',
        'maintenance' => [
            ['name' => 'Pengecekan Radiator Heavy Duty', 'kategori' => 'Khusus', 'last_hm' => '750 HM', 'interval_hm' => '1000 HM', 'due_date' => '19 Agu 2026', 'status' => 'Due Soon'],
        ]
    ]
];

// Evaluasi status dan kategori khusus tiap unit
foreach ($allUnits as &$u) {
    $hasOverdue = false;
    $hasDueSoon = false;
    $hasKhusus = false;
    if (!empty($u['maintenance'])) {
        foreach ($u['maintenance'] as $m) {
            if ($m['status'] === 'Over Due' || $m['status'] === 'overdue') {
                $hasOverdue = true;
            } elseif ($m['status'] === 'Due Soon' || $m['status'] === 'duesoon') {
                $hasDueSoon = true;
            }
            if (($m['kategori'] ?? '') === 'Khusus') {
                $hasKhusus = true;
            }
        }
    }
    $u['has_khusus'] = $hasKhusus;
    if ($hasOverdue) {
        $u['status'] = 'Over Due';
        $u['badge'] = 'badge-unit-overdue';
        $u['dot'] = 'dot-red';
    } elseif ($hasDueSoon) {
        $u['status'] = 'Due Soon';
        $u['badge'] = 'badge-unit-duesoon';
        $u['dot'] = 'dot-yellow';
    } else {
        $u['status'] = 'Due Soon';
        $u['badge'] = 'badge-unit-duesoon';
        $u['dot'] = 'dot-yellow';
    }
}
unset($u);

// Filter data berdasarkan Customer, Jenis (Khusus / Umum), dan Status
$displayUnits = array_values(array_filter($allUnits, function($item) use ($customerFilter, $jenisFilter, $statusFilter) {
    if (!empty($customerFilter)) {
        if (strcasecmp($item['customer'], $customerFilter) !== 0 && stripos($item['customer'], $customerFilter) === false) {
            return false;
        }
    }
    if (!empty($jenisFilter)) {
        if (strcasecmp($jenisFilter, 'Khusus') === 0 && empty($item['has_khusus'])) {
            return false;
        }
        if (strcasecmp($jenisFilter, 'Umum') === 0 && !empty($item['has_khusus'])) {
            return false;
        }
    }
    if (!empty($statusFilter)) {
        if (strcasecmp($statusFilter, 'Overdue') === 0 && $item['status'] !== 'Over Due') {
            return false;
        }
        if (strcasecmp($statusFilter, 'Due soon') === 0 && $item['status'] !== 'Due Soon') {
            return false;
        }
    }
    return true;
}));

// URUTKAN: Unit yang memiliki status 'Over Due' (harus dieksekusi terlebih dahulu) selalu muncul paling atas!
usort($displayUnits, function($a, $b) {
    $prioA = ($a['status'] === 'Over Due') ? 1 : 2;
    $prioB = ($b['status'] === 'Over Due') ? 1 : 2;
    if ($prioA !== $prioB) {
        return $prioA - $prioB;
    }
    return 0;
});
?>
<!-- MAIN UNIT FORKLIFT CONTENT -->
<main class="dashboard-container">
    <!-- Page Title -->
    <h2 class="page-title">Unit Forklift</h2>

    <!-- Main Container Card -->
    <div class="unit-forklift-main-card">
        <!-- Search, Filters, and Assign Unit Button Bar -->
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-3">
            <div class="d-flex align-items-center flex-wrap gap-3">
                <!-- Search Input Pill -->
                <div class="unit-search-pill">
                    <span class="material-symbols-outlined">search</span>
                    <input type="text" placeholder="Cari Customer atau Unit" id="searchUnitInput" value="">
                </div>

                <!-- Dropdown Customer -->
                <div class="dropdown">
                    <button class="unit-filter-dropdown-btn dropdown-toggle" type="button" id="filterCustomerUnit" data-bs-toggle="dropdown" aria-expanded="false">
                        <span><?= !empty($customerFilter) ? htmlspecialchars($customerFilter) : 'Customer' ?></span>
                        <span class="material-symbols-outlined" style="font-size: 1.1rem; color: #1E293B;">expand_more</span>
                    </button>
                    <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="filterCustomerUnit" style="max-height: 250px; overflow-y: auto;">
                        <li><a class="dropdown-item <?= empty($customerFilter) ? 'fw-bold' : '' ?>" href="index.php?page=unit_forklift">Semua Customer</a></li>
                        <?php
                        $uniqueCustomers = array_values(array_unique(array_column($allUnits, 'customer')));
                        sort($uniqueCustomers);
                        foreach ($uniqueCustomers as $c):
                        ?>
                            <li><a class="dropdown-item <?= ($customerFilter === $c) ? 'fw-bold' : '' ?>" href="index.php?page=unit_forklift&customer=<?= urlencode($c) ?>"><?= htmlspecialchars($c) ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Dropdown Jenis -->
                <div class="dropdown">
                    <button class="unit-filter-dropdown-btn dropdown-toggle" type="button" id="filterJenisUnit" data-bs-toggle="dropdown" aria-expanded="false">
                        <span><?= !empty($jenisFilter) ? htmlspecialchars($jenisFilter) : 'Jenis' ?></span>
                        <span class="material-symbols-outlined" style="font-size: 1.1rem; color: #1E293B;">expand_more</span>
                    </button>
                    <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="filterJenisUnit">
                        <li><a class="dropdown-item <?= empty($jenisFilter) ? 'fw-bold' : '' ?>" href="index.php?page=unit_forklift<?= !empty($customerFilter) ? '&customer=' . urlencode($customerFilter) : '' ?><?= !empty($statusFilter) ? '&status=' . urlencode($statusFilter) : '' ?>">Semua Jenis</a></li>
                        <li><a class="dropdown-item <?= ($jenisFilter === 'Khusus') ? 'fw-bold' : '' ?>" href="index.php?page=unit_forklift&jenis=Khusus<?= !empty($customerFilter) ? '&customer=' . urlencode($customerFilter) : '' ?><?= !empty($statusFilter) ? '&status=' . urlencode($statusFilter) : '' ?>">Khusus</a></li>
                        <li><a class="dropdown-item <?= ($jenisFilter === 'Umum') ? 'fw-bold' : '' ?>" href="index.php?page=unit_forklift&jenis=Umum<?= !empty($customerFilter) ? '&customer=' . urlencode($customerFilter) : '' ?><?= !empty($statusFilter) ? '&status=' . urlencode($statusFilter) : '' ?>">Umum</a></li>
                    </ul>
                </div>

                <!-- Dropdown Status -->
                <div class="dropdown">
                    <button class="unit-filter-dropdown-btn dropdown-toggle" type="button" id="filterStatusUnit" data-bs-toggle="dropdown" aria-expanded="false">
                        <span><?= !empty($statusFilter) ? htmlspecialchars($statusFilter) : 'Status' ?></span>
                        <span class="material-symbols-outlined" style="font-size: 1.1rem; color: #1E293B;">expand_more</span>
                    </button>
                    <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="filterStatusUnit">
                        <li><a class="dropdown-item <?= empty($statusFilter) ? 'fw-bold' : '' ?>" href="index.php?page=unit_forklift<?= !empty($customerFilter) ? '&customer=' . urlencode($customerFilter) : '' ?><?= !empty($jenisFilter) ? '&jenis=' . urlencode($jenisFilter) : '' ?>">Semua Status</a></li>
                        <li><a class="dropdown-item <?= ($statusFilter === 'Overdue') ? 'fw-bold' : '' ?>" href="index.php?page=unit_forklift&status=Overdue<?= !empty($customerFilter) ? '&customer=' . urlencode($customerFilter) : '' ?><?= !empty($jenisFilter) ? '&jenis=' . urlencode($jenisFilter) : '' ?>">Overdue</a></li>
                        <li><a class="dropdown-item <?= ($statusFilter === 'Due soon') ? 'fw-bold' : '' ?>" href="index.php?page=unit_forklift&status=Due+soon<?= !empty($customerFilter) ? '&customer=' . urlencode($customerFilter) : '' ?><?= !empty($jenisFilter) ? '&jenis=' . urlencode($jenisFilter) : '' ?>">Due soon</a></li>
                    </ul>
                </div>

                <!-- Reset Filter Button -->
                <button type="button" class="btn-reset-filter" id="btnResetUnitFilter" onclick="resetUnitFilter();">
                    <span class="material-symbols-outlined">restart_alt</span>
                    <span>Reset</span>
                </button>
            </div>

            <!-- Assign Unit Button -->
            <div>
                <button type="button" class="btn-assign-unit" data-bs-toggle="modal" data-bs-target="#assignUnitModal">
                    <span class="material-symbols-outlined" style="font-size: 1.2rem;">add</span>
                    <span>Assign Unit</span>
                </button>
            </div>
        </div>

        <!-- Table Data Unit Forklift (Sesuai Figma) -->
        <div class="unit-table-wrapper">
            <table class="unit-forklift-table-v2">
                <thead>
                    <tr>
                        <th style="width: 20%;">Unit</th>
                        <th style="width: 20%;">Customer</th>
                        <th style="width: 18%;">Serial Number</th>
                        <th style="width: 13%;">HM Saat Ini</th>
                        <th style="width: 13%;">Pembaruan Terakhir</th>
                        <th style="width: 10%;">Status</th>
                        <th style="width: 6%; text-align: center;"></th>
                    </tr>
                </thead>
                <tbody id="unitForkliftTableBody">
                    <?php if (empty($displayUnits)): ?>
                        <tr>
                            <td colspan="7" class="text-center py-4 text-muted">
                                Tidak ada unit forklift yang cocok dengan filter yang dipilih.
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($displayUnits as $row): ?>
                            <tr onclick="openUnitDetail(this, '<?= htmlspecialchars($row['unit'], ENT_QUOTES) ?>', '<?= htmlspecialchars($row['customer'], ENT_QUOTES) ?>', '<?= htmlspecialchars($row['serial'], ENT_QUOTES) ?>', '<?= htmlspecialchars($row['hm'], ENT_QUOTES) ?>', '<?= htmlspecialchars($row['rate'], ENT_QUOTES) ?>', '<?= htmlspecialchars($row['last_update'], ENT_QUOTES) ?>', <?= htmlspecialchars(json_encode($row['maintenance'] ?? []), ENT_QUOTES, 'UTF-8') ?>)">
                                <td class="fw-bold" style="color: #111827;"><?= htmlspecialchars($row['unit']) ?></td>
                                <td class="fw-bold" style="color: #111827;"><?= htmlspecialchars($row['customer']) ?></td>
                                <td><?= htmlspecialchars($row['serial']) ?></td>
                                <td><?= htmlspecialchars($row['hm']) ?></td>
                                <td><?= htmlspecialchars($row['last_update']) ?></td>
                                <td>
                                    <span class="<?= htmlspecialchars($row['badge']) ?>">
                                        <span class="badge-unit-dot <?= htmlspecialchars($row['dot']) ?>"></span>
                                        <?= htmlspecialchars($row['status']) ?>
                                    </span>
                                </td>
                                <td style="text-align: center;">
                                    <div class="action-icons-group justify-content-center">
                                        <button type="button" class="action-icon-btn icon-edit" title="Edit Unit" onclick="event.stopPropagation(); openEditUnitModal('<?= htmlspecialchars($row['unit']) ?>', '<?= htmlspecialchars($row['customer']) ?>', '<?= htmlspecialchars($row['serial']) ?>', '<?= preg_replace('/[^0-9]/', '', $row['hm']) ?>');">
                                            <span class="material-symbols-outlined">edit</span>
                                        </button>
                                        <button type="button" class="action-icon-btn icon-delete" title="Hapus Unit" onclick="event.stopPropagation(); openDeleteUnitModal('<?= htmlspecialchars($row['unit']) ?>');">
                                            <span class="material-symbols-outlined">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- Solid Bottom Divider Line & Pagination (Otomatis muncul hanya jika baris > 10) -->
        <div class="table-pagination-footer d-flex justify-content-end align-items-center" <?= (count($displayUnits) <= 10) ? 'style="display: none !important;"' : '' ?>>
            <div class="pagination-custom pagination-custom-gold ms-auto">
            </div>
        </div>
    </div>
</main>

<!-- =========================================================
     MODAL DETAIL UNIT FORKLIFT (POPUP SESUAI FIGMA)
     ========================================================= -->
<div class="modal fade" id="unitDetailModal" tabindex="-1" aria-labelledby="unitDetailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-unit-detail-dialog">
        <div class="modal-content modal-unit-detail-content">
            <!-- Modal Header Banner -->
            <div class="modal-unit-detail-header">
                <button type="button" class="modal-unit-detail-close" data-bs-dismiss="modal" aria-label="Close">
                    <span class="material-symbols-outlined">close</span>
                </button>
                <div class="modal-unit-detail-title" id="detailUnitTitle">Toyota 8FD30</div>
                <div class="modal-unit-detail-cust" id="detailUnitCust">PT. Maju Jaya</div>

                <!-- 4 Stats Grid -->
                <div class="modal-unit-detail-stats">
                    <div class="modal-unit-stat-item">
                        <div class="stat-label">Serial Number</div>
                        <div class="stat-val" id="detailUnitSerial">8FD30-12345</div>
                    </div>
                    <div class="modal-unit-stat-item">
                        <div class="stat-label">HM Terakhir</div>
                        <div class="stat-val" id="detailUnitLastHM">4.850</div>
                    </div>
                    <div class="modal-unit-stat-item">
                        <div class="stat-label">Rate/Bulan</div>
                        <div class="stat-val" id="detailUnitRate">50 HM/Bulan</div>
                    </div>
                    <div class="modal-unit-stat-item">
                        <div class="stat-label">Update Terakhir</div>
                        <div class="stat-val" id="detailUnitUpdate">10 Juli 2026</div>
                    </div>
                </div>
            </div>

            <!-- Modal Body: List Maintenance -->
            <div class="modal-unit-detail-body">
                <h4 class="modal-unit-section-title">Daftar Maintenance</h4>

                <div class="table-modal-maint-wrapper">
                    <table class="table-modal-maint">
                        <thead>
                            <tr>
                                <th style="width: 30%;">Jenis Maintenance</th>
                                <th style="width: 12%; text-align: center;">Kategori</th>
                                <th style="width: 14%;">HM Terakhir</th>
                                <th style="width: 14%;">Interval HM</th>
                                <th style="width: 18%;">Jatuh Tempo</th>
                                <th style="width: 12%; text-align: center;">Status</th>
                            </tr>
                        </thead>
                        <tbody id="modalMaintTableBody">
                            <!-- Item 1: Overdue -->
                            <tr class="row-maint-overdue">
                                <td>Ganti Oli Mesin</td>
                                <td style="text-align: center;"><span class="badge-maint-kategori umum">Umum</span></td>
                                <td>1.000 HM</td>
                                <td>750 HM</td>
                                <td>10 Agu 2026</td>
                                <td>
                                    <span class="material-symbols-outlined text-danger" style="font-variation-settings: 'FILL' 1; font-size: 1.25rem;">warning</span>
                                </td>
                            </tr>
                            <!-- Item 2: Overdue -->
                            <tr class="row-maint-overdue">
                                <td>Ganti Filter Solar</td>
                                <td style="text-align: center;"><span class="badge-maint-kategori umum">Umum</span></td>
                                <td>1.000 HM</td>
                                <td>800 HM</td>
                                <td>10 Agu 2026</td>
                                <td>
                                    <span class="material-symbols-outlined text-danger" style="font-variation-settings: 'FILL' 1; font-size: 1.25rem;">warning</span>
                                </td>
                            </tr>
                            <!-- Item 3: Khusus Due Soon -->
                            <tr class="row-maint-duesoon">
                                <td>Overhaul Attachment Clamp</td>
                                <td style="text-align: center;"><span class="badge-maint-kategori khusus">Khusus</span></td>
                                <td>1.200 HM</td>
                                <td>1500 HM</td>
                                <td>25 Agu 2026</td>
                                <td>
                                    <span class="material-symbols-outlined" style="color: #D97706; font-size: 1.25rem;">notifications</span>
                                </td>
                            </tr>
                            <!-- Item 4: Due Soon -->
                            <tr class="row-maint-duesoon">
                                <td>Ganti Filter Udara</td>
                                <td style="text-align: center;"><span class="badge-maint-kategori umum">Umum</span></td>
                                <td>760 HM</td>
                                <td>1000 HM</td>
                                <td>31 Agu 2026</td>
                                <td>
                                    <span class="material-symbols-outlined" style="color: #D97706; font-size: 1.25rem;">notifications</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Legend -->
                <div class="modal-unit-legend d-flex align-items-center gap-4 flex-wrap">
                    <div class="legend-item">
                        <span class="legend-dot dot-red"></span>
                        <span>Over Due - Sudah Lewat Jatuh Tempo</span>
                    </div>
                    <div class="legend-item">
                        <span class="legend-dot dot-yellow"></span>
                        <span>Due Soon - Akan Jatuh Tempo</span>
                    </div>
                    <div class="legend-item">
                        <span class="badge-maint-kategori khusus" style="font-size: 0.68rem;">Khusus</span>
                        <span>Maintenance Khusus Unit</span>
                    </div>
                    <div class="legend-item">
                        <span class="badge-maint-kategori umum" style="font-size: 0.68rem;">Umum</span>
                        <span>Maintenance Standar / Umum</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- =========================================================
     MODAL ASSIGNMENT UNIT FORKLIFT (SESUAI FIGMA)
     ========================================================= -->
<div class="modal fade" id="assignUnitModal" tabindex="-1" aria-labelledby="assignUnitModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-form-unit-dialog">
        <div class="modal-content modal-user-content">
            <h3 class="modal-user-title" id="assignUnitModalLabel">Assignment Unit Forklift</h3>
            <form onsubmit="event.preventDefault();">
                <div class="mb-3">
                    <label class="user-form-label">Customer</label>
                    <select class="user-form-select" id="assignCustomerSelect">
                        <option value="" selected disabled>Pilih Customer</option>
                        <option value="PT. Maju Jaya">PT. Maju Jaya</option>
                        <option value="PT. Mentari Pagi">PT. Mentari Pagi</option>
                        <option value="PT. Nusantara Logistik">PT. Nusantara Logistik</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="user-form-label">Forklift</label>
                    <select class="user-form-select" id="assignForkliftSelect">
                        <option value="" selected disabled>Pilih Forklift</option>
                        <option value="Toyota 8FD30">Toyota 8FD30</option>
                        <option value="Mitsubishi FD30">Mitsubishi FD30</option>
                        <option value="Doosan D30S">Doosan D30S</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="user-form-label">Serial Number</label>
                    <input type="text" class="user-form-input" id="assignSerialInput" placeholder="Contoh: 8FD30-12345">
                </div>
                <div class="mb-3">
                    <label class="user-form-label">Hour Meter Akhir</label>
                    <div class="hm-input-container">
                        <input type="text" class="hm-input-field" id="assignHMInput" placeholder="Contoh: 4850">
                        <span class="hm-input-divider"></span>
                        <span class="hm-input-suffix">HM</span>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="user-form-label">Status Unit</label>
                    <div class="form-check form-check-custom-blue d-flex align-items-center">
                        <input class="form-check-input" type="checkbox" id="assignStatusAktif" checked>
                        <label class="form-check-label" for="assignStatusAktif">Aktif</label>
                    </div>
                </div>
                <div class="d-flex justify-content-end gap-3">
                    <button type="button" class="btn-user-batal" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn-modal-unit-simpan" data-bs-dismiss="modal">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- =========================================================
     MODAL EDIT UNIT FORKLIFT (SESUAI FIGMA)
     ========================================================= -->
<div class="modal fade" id="editUnitModal" tabindex="-1" aria-labelledby="editUnitModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-form-unit-dialog">
        <div class="modal-content modal-user-content">
            <h3 class="modal-user-title" id="editUnitModalLabel">Edit Unit Forklift</h3>
            <form onsubmit="event.preventDefault();">
                <div class="mb-3">
                    <label class="user-form-label">Customer</label>
                    <select class="user-form-select" id="editCustomerSelect">
                        <option value="">Pilih Customer</option>
                        <option value="PT. Maju Jaya" selected>PT. Maju Jaya</option>
                        <option value="PT. Mentari Pagi">PT. Mentari Pagi</option>
                        <option value="PT. Nusantara Logistik">PT. Nusantara Logistik</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="user-form-label">Forklift</label>
                    <select class="user-form-select" id="editForkliftSelect">
                        <option value="">Pilih Forklift</option>
                        <option value="Toyota 8FD30" selected>Toyota 8FD30</option>
                        <option value="Mitsubishi FD30">Mitsubishi FD30</option>
                        <option value="Doosan D30S">Doosan D30S</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="user-form-label">Serial Number</label>
                    <input type="text" class="user-form-input" id="editSerialInput" value="8FD30-12345">
                </div>
                <div class="mb-3">
                    <label class="user-form-label">Hour Meter Akhir</label>
                    <div class="hm-input-container">
                        <input type="text" class="hm-input-field" id="editHMInput" value="4850">
                        <span class="hm-input-divider"></span>
                        <span class="hm-input-suffix">HM</span>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="user-form-label">Status Unit</label>
                    <div class="form-check form-check-custom-blue d-flex align-items-center">
                        <input class="form-check-input" type="checkbox" id="editStatusAktif" checked>
                        <label class="form-check-label" for="editStatusAktif">Aktif</label>
                    </div>
                </div>
                <div class="d-flex justify-content-end gap-3">
                    <button type="button" class="btn-user-batal" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn-modal-unit-simpan" data-bs-dismiss="modal">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- =========================================================
     MODAL DELETE CONFIRMATION (SESUAI FIGMA)
     ========================================================= -->
<div class="modal fade" id="deleteUnitModal" tabindex="-1" aria-labelledby="deleteUnitModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-delete-unit-dialog">
        <div class="modal-content modal-delete-content">
            <h4 class="modal-delete-title">Yakin ingin menghapus?</h4>
            <div class="modal-delete-subtext">Data akan hilang permanen</div>
            <div class="d-flex justify-content-center gap-3">
                <button type="button" class="btn-delete-cancel" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn-delete-confirm" data-bs-dismiss="modal">Yakin</button>
            </div>
        </div>
    </div>
</div>

<script>
function openUnitDetail(rowElement, title, cust, serial, lastHm, rate, lastUpdate, maintenanceData) {
    document.getElementById('detailUnitTitle').textContent = title;
    document.getElementById('detailUnitCust').textContent = cust;
    document.getElementById('detailUnitSerial').textContent = serial;
    document.getElementById('detailUnitLastHM').textContent = lastHm;
    document.getElementById('detailUnitRate').textContent = rate;
    document.getElementById('detailUnitUpdate').textContent = lastUpdate;

    var tbody = document.getElementById('modalMaintTableBody');
    if (tbody && maintenanceData) {
        var list = (typeof maintenanceData === 'string') ? JSON.parse(maintenanceData) : maintenanceData;
        tbody.innerHTML = '';

        // Urutkan item maintenance: yang Over Due HARUS muncul dan dieksekusi terlebih dahulu!
        list.sort(function(a, b) {
            var prioA = (a.status === 'Over Due' || a.status === 'overdue') ? 1 : 2;
            var prioB = (b.status === 'Over Due' || b.status === 'overdue') ? 1 : 2;
            return prioA - prioB;
        });

        list.forEach(function(item) {
            var tr = document.createElement('tr');
            var isOverdue = (item.status === 'Over Due' || item.status === 'overdue');
            tr.className = isOverdue ? 'row-maint-overdue' : 'row-maint-duesoon';

            var iconHtml = isOverdue
                ? '<span class="material-symbols-outlined text-danger" style="font-variation-settings: \'FILL\' 1; font-size: 1.25rem;">warning</span>'
                : '<span class="material-symbols-outlined" style="color: #D97706; font-size: 1.25rem;">notifications</span>';

            var kat = item.kategori || 'Umum';
            var katClass = (kat.toLowerCase() === 'khusus') ? 'khusus' : 'umum';
            var katBadge = '<span class="badge-maint-kategori ' + katClass + '">' + kat + '</span>';

            tr.innerHTML = '<td>' + item.name + '</td>' +
                           '<td style="text-align: center;">' + katBadge + '</td>' +
                           '<td>' + item.last_hm + '</td>' +
                           '<td>' + item.interval_hm + '</td>' +
                           '<td>' + item.due_date + '</td>' +
                           '<td style="text-align: center;">' + iconHtml + '</td>';
            tbody.appendChild(tr);
        });
    }

    var detailModal = new bootstrap.Modal(document.getElementById('unitDetailModal'));
    detailModal.show();
}

function openEditUnitModal(forklift, customer, serial, hm) {
    var custSelect = document.getElementById('editCustomerSelect');
    if (custSelect) custSelect.value = customer;
    
    var forkSelect = document.getElementById('editForkliftSelect');
    if (forkSelect) forkSelect.value = forklift;
    
    var serialInput = document.getElementById('editSerialInput');
    if (serialInput) serialInput.value = serial;
    
    var hmInput = document.getElementById('editHMInput');
    if (hmInput) hmInput.value = hm;

    var editModal = new bootstrap.Modal(document.getElementById('editUnitModal'));
    editModal.show();
}

function openDeleteUnitModal(unitName) {
    var deleteModal = new bootstrap.Modal(document.getElementById('deleteUnitModal'));
    deleteModal.show();
}

function resetUnitFilter() {
    window.location.href = 'index.php?page=unit_forklift';
}
</script>
