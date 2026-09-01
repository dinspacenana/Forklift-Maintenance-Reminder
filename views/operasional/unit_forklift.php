<?php
// views/operasional/unit_forklift.php - Operasional Unit Forklift View
$customerFilter = isset($_GET['customer']) ? trim($_GET['customer']) : '';

// Data Unit Forklift
$allUnits = [
    [
        'unit' => 'Toyota 8FD30',
        'fuel' => 'Diesel',
        'customer' => 'PT. Maju Jaya',
        'serial' => '8FD30-12345',
        'hm' => '4.850',
        'rate' => '50 HM/Bulan',
        'last_update' => '30 Jul 2026',
        'status' => 'Due Soon',
        'badge' => 'badge-unit-duesoon',
        'dot' => 'dot-yellow'
    ],
    [
        'unit' => 'Toyota 8FD30',
        'fuel' => 'Diesel',
        'customer' => 'PT. Maju Jaya',
        'serial' => '8FD30-12345',
        'hm' => '4.850',
        'rate' => '50 HM/Bulan',
        'last_update' => '21 Agu 2026',
        'status' => 'Due Soon',
        'badge' => 'badge-unit-duesoon',
        'dot' => 'dot-yellow'
    ],
    [
        'unit' => 'Toyota 8FD30',
        'fuel' => 'Diesel',
        'customer' => 'PT. Maju Jaya',
        'serial' => '8FD30-12345',
        'hm' => '4.850',
        'rate' => '50 HM/Bulan',
        'last_update' => '21 Agu 2026',
        'status' => 'Due Soon',
        'badge' => 'badge-unit-duesoon',
        'dot' => 'dot-yellow'
    ],
    [
        'unit' => 'Toyota 8FD30',
        'fuel' => 'Diesel',
        'customer' => 'PT. Maju Jaya',
        'serial' => '8FD30-12345',
        'hm' => '4.850',
        'rate' => '50 HM/Bulan',
        'last_update' => '21 Agu 2026',
        'status' => 'Due Soon',
        'badge' => 'badge-unit-duesoon',
        'dot' => 'dot-yellow'
    ],
    [
        'unit' => 'Toyota 8FD30',
        'fuel' => 'Diesel',
        'customer' => 'PT. Maju Jaya',
        'serial' => '8FD30-12345',
        'hm' => '4.850',
        'rate' => '50 HM/Bulan',
        'last_update' => '21 Agu 2026',
        'status' => 'Due Soon',
        'badge' => 'badge-unit-duesoon',
        'dot' => 'dot-yellow'
    ],
    [
        'unit' => 'Mitsubishi FD30',
        'fuel' => 'Diesel',
        'customer' => 'PT. Mentari Pagi',
        'serial' => 'FD30-33019',
        'hm' => '6.120',
        'rate' => '60 HM/Bulan',
        'last_update' => '15 Agu 2026',
        'status' => 'Due Soon',
        'badge' => 'badge-unit-duesoon',
        'dot' => 'dot-yellow'
    ],
    [
        'unit' => 'Doosan D30S',
        'fuel' => 'Diesel',
        'customer' => 'PT. Nusantara Logistik',
        'serial' => 'D30S-11004',
        'hm' => '5.510',
        'rate' => '45 HM/Bulan',
        'last_update' => '11 Agu 2026',
        'status' => 'Over Due',
        'badge' => 'badge-unit-overdue',
        'dot' => 'dot-red'
    ],
    [
        'unit' => 'Toyota 8FD25',
        'fuel' => 'Diesel',
        'customer' => 'PT. Nusantara Logistik',
        'serial' => '8FD25-99201',
        'hm' => '3.200',
        'rate' => '40 HM/Bulan',
        'last_update' => '18 Agu 2026',
        'status' => 'Due Soon',
        'badge' => 'badge-unit-duesoon',
        'dot' => 'dot-yellow'
    ],
    [
        'unit' => 'Toyota 8FD30',
        'fuel' => 'Diesel',
        'customer' => 'PT. Toyo Matsu',
        'serial' => '8FD30-77123',
        'hm' => '2.940',
        'rate' => '50 HM/Bulan',
        'last_update' => '05 Agu 2026',
        'status' => 'Due Soon',
        'badge' => 'badge-unit-duesoon',
        'dot' => 'dot-yellow'
    ],
    [
        'unit' => 'Komatsu FD30',
        'fuel' => 'Diesel',
        'customer' => 'PT. Robin Jaya',
        'serial' => 'FD30-55412',
        'hm' => '4.100',
        'rate' => '55 HM/Bulan',
        'last_update' => '12 Agu 2026',
        'status' => 'Over Due',
        'badge' => 'badge-unit-overdue',
        'dot' => 'dot-red'
    ],
    [
        'unit' => 'Toyota 8FD30',
        'fuel' => 'Diesel',
        'customer' => 'PT. GatotKaca Logistik',
        'serial' => '8FD30-66231',
        'hm' => '5.800',
        'rate' => '50 HM/Bulan',
        'last_update' => '20 Agu 2026',
        'status' => 'Due Soon',
        'badge' => 'badge-unit-duesoon',
        'dot' => 'dot-yellow'
    ],
    [
        'unit' => 'Mitsubishi FD25',
        'fuel' => 'Diesel',
        'customer' => 'PT. Maju Mundur Makmur',
        'serial' => 'FD25-44102',
        'hm' => '3.750',
        'rate' => '35 HM/Bulan',
        'last_update' => '22 Agu 2026',
        'status' => 'Due Soon',
        'badge' => 'badge-unit-duesoon',
        'dot' => 'dot-yellow'
    ],
    [
        'unit' => 'Doosan D30S',
        'fuel' => 'Diesel',
        'customer' => 'CV. Baja Perkasa',
        'serial' => 'D30S-88319',
        'hm' => '6.400',
        'rate' => '60 HM/Bulan',
        'last_update' => '19 Agu 2026',
        'status' => 'Due Soon',
        'badge' => 'badge-unit-duesoon',
        'dot' => 'dot-yellow'
    ]
];

// Determine units to display
if (!empty($customerFilter)) {
    $displayUnits = array_values(array_filter($allUnits, function($item) use ($customerFilter) {
        return strcasecmp($item['customer'], $customerFilter) === 0;
    }));
    if (empty($displayUnits)) {
        $displayUnits = array_values(array_filter($allUnits, function($item) use ($customerFilter) {
            return stripos($item['customer'], $customerFilter) !== false;
        }));
    }
} else {
    // Default mixed view (Toyota PT Maju Jaya, Mitsubishi PT Mentari Pagi, Doosan PT Nusantara Logistik, etc.)
    $displayUnits = [
        [
            'unit' => 'Toyota 8FD30',
            'fuel' => 'Diesel',
            'customer' => 'PT. Maju Jaya',
            'serial' => '8FD30-12345',
            'hm' => '4.850',
            'rate' => '50 HM/Bulan',
            'last_update' => '10 Jul 2026',
            'status' => 'Over Due',
            'badge' => 'badge-unit-overdue',
            'dot' => 'dot-red'
        ],
        $allUnits[5], // Mitsubishi FD30 - PT. Mentari Pagi
        $allUnits[6], // Doosan D30S - PT. Nusantara Logistik
        $allUnits[1], // Toyota 8FD30 - PT. Maju Jaya
        $allUnits[2], // Toyota 8FD30 - PT. Maju Jaya
        $allUnits[3], // Toyota 8FD30 - PT. Maju Jaya
    ];
}
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

                <!-- Dropdown Jenis -->
                <div class="dropdown">
                    <button class="unit-filter-dropdown-btn dropdown-toggle" type="button" id="filterJenisUnit" data-bs-toggle="dropdown" aria-expanded="false">
                        <span>Jenis</span>
                        <span class="material-symbols-outlined" style="font-size: 1.1rem; color: #1E293B;">expand_more</span>
                    </button>
                    <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="filterJenisUnit">
                        <li><a class="dropdown-item" href="#">Umum</a></li>
                        <li><a class="dropdown-item" href="#">Khusus</a></li>
                    </ul>
                </div>

                <!-- Dropdown Status -->
                <div class="dropdown">
                    <button class="unit-filter-dropdown-btn dropdown-toggle" type="button" id="filterStatusUnit" data-bs-toggle="dropdown" aria-expanded="false">
                        <span>Status</span>
                        <span class="material-symbols-outlined" style="font-size: 1.1rem; color: #1E293B;">expand_more</span>
                    </button>
                    <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="filterStatusUnit">
                        <li><a class="dropdown-item" href="#">Due soon</a></li>
                        <li><a class="dropdown-item" href="#">Overdue</a></li>
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
                        <th style="width: 13%;">Current HM</th>
                        <th style="width: 13%;">Last Update</th>
                        <th style="width: 10%;">Status</th>
                        <th style="width: 6%; text-align: center;"></th>
                    </tr>
                </thead>
                <tbody id="unitForkliftTableBody">
                    <?php if (empty($displayUnits)): ?>
                        <tr>
                            <td colspan="7" class="text-center py-4 text-muted">
                                Tidak ada unit forklift untuk customer ini.
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($displayUnits as $row): ?>
                            <tr onclick="openUnitDetail(this, '<?= htmlspecialchars($row['unit']) ?>', '<?= htmlspecialchars($row['customer']) ?>', '<?= htmlspecialchars($row['serial']) ?>', '<?= htmlspecialchars($row['hm']) ?>', '<?= htmlspecialchars($row['rate']) ?>', '<?= htmlspecialchars($row['last_update']) ?>')">
                                <td>
                                    <div class="fw-bold" style="color: #111827;"><?= htmlspecialchars($row['unit']) ?></div>
                                    <div class="text-muted" style="font-size: 0.8rem;"><?= htmlspecialchars($row['fuel']) ?></div>
                                </td>
                                <td><?= htmlspecialchars($row['customer']) ?></td>
                                <td class="fw-bold" style="color: #111827;"><?= htmlspecialchars($row['serial']) ?></td>
                                <td class="fw-bold" style="color: #111827;"><?= htmlspecialchars($row['hm']) ?></td>
                                <td><?= htmlspecialchars($row['last_update']) ?></td>
                                <td>
                                    <span class="<?= htmlspecialchars($row['badge']) ?>">
                                        <span class="badge-unit-dot <?= htmlspecialchars($row['dot']) ?>"></span>
                                        <?= htmlspecialchars($row['status']) ?>
                                    </span>
                                </td>
                                <td style="text-align: center;">
                                    <div class="action-icons-group justify-content-center">
                                        <button type="button" class="action-icon-btn" title="Edit Unit" onclick="event.stopPropagation(); openEditUnitModal('<?= htmlspecialchars($row['unit']) ?>', '<?= htmlspecialchars($row['customer']) ?>', '<?= htmlspecialchars($row['serial']) ?>', '<?= preg_replace('/[^0-9]/', '', $row['hm']) ?>');">
                                            <span class="material-symbols-outlined" style="font-size: 1.15rem; color: #94A3B8;">edit</span>
                                        </button>
                                        <button type="button" class="action-icon-btn" title="Hapus Unit" onclick="event.stopPropagation(); openDeleteUnitModal('<?= htmlspecialchars($row['unit']) ?>');">
                                            <span class="material-symbols-outlined" style="font-size: 1.15rem; color: #DC2626;">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- Solid Bottom Divider Line -->
        <hr class="unit-divider-bottom">

        <!-- Pagination -->
        <div class="d-flex justify-content-end align-items-center">
            <div class="pagination-custom pagination-custom-gold">
                <a href="#" class="page-arrow">&lt;</a>
                <a href="#" class="page-num active">1</a>
                <a href="#" class="page-num">2</a>
                <a href="#" class="page-num">3</a>
                <a href="#" class="page-num">4</a>
                <span class="page-dots">...</span>
                <a href="#" class="page-num">10</a>
                <a href="#" class="page-arrow">&gt;</a>
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
                        <div class="stat-label">Last HM</div>
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
                <h4 class="modal-unit-section-title">List Maintenance</h4>

                <div class="table-modal-maint-wrapper">
                    <table class="table-modal-maint">
                        <thead>
                            <tr>
                                <th style="width: 32%;">Jenis Maintenance</th>
                                <th style="width: 17%;">Last HM</th>
                                <th style="width: 17%;">Interval HM</th>
                                <th style="width: 22%;">Jatuh Tempo</th>
                                <th style="width: 12%; text-align: center;">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Item 1: Overdue -->
                            <tr class="row-maint-overdue">
                                <td>Ganti Oli Mesin</td>
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
                                <td>1.000 HM</td>
                                <td>800 HM</td>
                                <td>10 Agu 2026</td>
                                <td>
                                    <span class="material-symbols-outlined text-danger" style="font-variation-settings: 'FILL' 1; font-size: 1.25rem;">warning</span>
                                </td>
                            </tr>
                            <!-- Item 3: Due Soon -->
                            <tr class="row-maint-duesoon">
                                <td>Ganti Filter Udara</td>
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
                <div class="modal-unit-legend">
                    <div class="legend-item">
                        <span class="legend-dot dot-red"></span>
                        <span>Over Due - Sudah Lewat Jatuh Tempo</span>
                    </div>
                    <div class="legend-item">
                        <span class="legend-dot dot-yellow"></span>
                        <span>Due Soon - Akan Jatuh Tempo</span>
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
        <div class="modal-content modal-form-unit-content">
            <h3 class="modal-form-unit-title" id="assignUnitModalLabel">Assignment Unit Forklift</h3>
            <form onsubmit="event.preventDefault();">
                <div class="mb-3">
                    <label class="form-unit-label">Customer</label>
                    <select class="form-unit-select" id="assignCustomerSelect">
                        <option value="" selected disabled></option>
                        <option value="PT. Maju Jaya">PT. Maju Jaya</option>
                        <option value="PT. Mentari Pagi">PT. Mentari Pagi</option>
                        <option value="PT. Nusantara Logistik">PT. Nusantara Logistik</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-unit-label">Forklift</label>
                    <select class="form-unit-select" id="assignForkliftSelect">
                        <option value="" selected disabled></option>
                        <option value="Toyota 8FD30">Toyota 8FD30 (Diesel)</option>
                        <option value="Mitsubishi FD30">Mitsubishi FD30 (Diesel)</option>
                        <option value="Doosan D30S">Doosan D30S (Diesel)</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-unit-label">Serial Number</label>
                    <input type="text" class="form-unit-input" id="assignSerialInput" placeholder="">
                </div>
                <div class="mb-3">
                    <label class="form-unit-label">Hour Meter Ahkir</label>
                    <div class="hm-input-container">
                        <input type="text" class="hm-input-field" id="assignHMInput" placeholder="">
                        <span class="hm-input-divider"></span>
                        <span class="hm-input-suffix">HM</span>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-unit-label">Status Unit</label>
                    <div class="form-check form-check-custom-blue d-flex align-items-center">
                        <input class="form-check-input" type="checkbox" id="assignStatusAktif" checked>
                        <label class="form-check-label" for="assignStatusAktif">Aktif</label>
                    </div>
                </div>
                <div class="d-flex justify-content-end gap-3">
                    <button type="button" class="btn-modal-unit-batal" data-bs-dismiss="modal">Batal</button>
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
        <div class="modal-content modal-form-unit-content">
            <h3 class="modal-form-unit-title" id="editUnitModalLabel">Edit Unit Forklift</h3>
            <form onsubmit="event.preventDefault();">
                <div class="mb-3">
                    <label class="form-unit-label">Customer</label>
                    <select class="form-unit-select" id="editCustomerSelect">
                        <option value="">Pilih Customer</option>
                        <option value="PT. Maju Jaya" selected>PT. Maju Jaya</option>
                        <option value="PT. Mentari Pagi">PT. Mentari Pagi</option>
                        <option value="PT. Nusantara Logistik">PT. Nusantara Logistik</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-unit-label">Forklift</label>
                    <select class="form-unit-select" id="editForkliftSelect">
                        <option value="">Pilih Forklift</option>
                        <option value="Toyota 8FD30" selected>Toyota 8FD30</option>
                        <option value="Mitsubishi FD30">Mitsubishi FD30</option>
                        <option value="Doosan D30S">Doosan D30S</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-unit-label">Serial Number</label>
                    <input type="text" class="form-unit-input" id="editSerialInput" value="8FD30-12345">
                </div>
                <div class="mb-3">
                    <label class="form-unit-label">Hour Meter Ahkir</label>
                    <div class="hm-input-container">
                        <input type="text" class="hm-input-field" id="editHMInput" value="4850">
                        <span class="hm-input-divider"></span>
                        <span class="hm-input-suffix">HM</span>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-unit-label">Status Unit</label>
                    <div class="form-check form-check-custom-blue d-flex align-items-center">
                        <input class="form-check-input" type="checkbox" id="editStatusAktif" checked>
                        <label class="form-check-label" for="editStatusAktif">Aktif</label>
                    </div>
                </div>
                <div class="d-flex justify-content-end gap-3">
                    <button type="button" class="btn-modal-unit-batal" data-bs-dismiss="modal">Batal</button>
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
        <div class="modal-content modal-delete-unit-content">
            <h4 class="modal-delete-unit-title">Yakin ingin mengapus?</h4>
            <div class="modal-delete-unit-desc">Data akan hilang permanen</div>
            <div class="d-flex justify-content-center gap-3">
                <button type="button" class="btn-modal-delete-batal" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn-modal-delete-yakin" data-bs-dismiss="modal">Yakin</button>
            </div>
        </div>
    </div>
</div>

<script>
function openUnitDetail(rowElement, title, cust, serial, lastHm, rate, lastUpdate) {
    document.getElementById('detailUnitTitle').textContent = title;
    document.getElementById('detailUnitCust').textContent = cust;
    document.getElementById('detailUnitSerial').textContent = serial;
    document.getElementById('detailUnitLastHM').textContent = lastHm;
    document.getElementById('detailUnitRate').textContent = rate;
    document.getElementById('detailUnitUpdate').textContent = lastUpdate;

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

// Live search on Unit Forklift table
document.addEventListener('DOMContentLoaded', function() {
    var searchInput = document.getElementById('searchUnitInput');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            var filter = this.value.toLowerCase().trim();
            var rows = document.querySelectorAll('#unitForkliftTableBody tr');
            rows.forEach(function(row) {
                var text = row.textContent.toLowerCase();
                row.style.display = text.includes(filter) ? '' : 'none';
            });
        });
    }
});
</script>
