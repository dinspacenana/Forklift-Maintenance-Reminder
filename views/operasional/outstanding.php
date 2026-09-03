<?php
// views/operasional/outstanding.php - Operasional Outstanding View

$outstandingList = [
    [
        'date' => '23/08/2026',
        'customer' => 'PT. Maju Jaya',
        'unit' => 'Toyota 8FD30',
        'serial' => '8FD30-12345',
        'maint' => 'Ganti Oli Mesin'
    ],
    [
        'date' => '23/08/2026',
        'customer' => 'PT. Maju Jaya',
        'unit' => 'Toyota 8FD30',
        'serial' => '8FD30-12345',
        'maint' => 'Ganti Filter Solar'
    ],
    [
        'date' => '24/08/2026',
        'customer' => 'PT. Nusantara Logistik',
        'unit' => 'Doosan D30S',
        'serial' => 'D30S-11004',
        'maint' => 'Ganti Filter Hidrolik'
    ],
    [
        'date' => '24/08/2026',
        'customer' => 'PT. Robin Jaya',
        'unit' => 'Komatsu FD30',
        'serial' => 'FD30-55412',
        'maint' => 'Ganti Oli Mesin'
    ],
    [
        'date' => '25/08/2026',
        'customer' => 'PT. Robin Jaya',
        'unit' => 'Komatsu FD30',
        'serial' => 'FD30-55412',
        'maint' => 'Ganti Filter Oli'
    ],
    [
        'date' => '25/08/2026',
        'customer' => 'PT. Toyo Matsu',
        'unit' => 'Toyota 8FD30',
        'serial' => '8FD30-77123',
        'maint' => 'Pembersihan Filter Udara'
    ],
    [
        'date' => '26/08/2026',
        'customer' => 'PT. Mentari Pagi',
        'unit' => 'Mitsubishi FD30',
        'serial' => 'FD30-33019',
        'maint' => 'Pengecekan Rem'
    ],
    [
        'date' => '26/08/2026',
        'customer' => 'PT. Nusantara Logistik',
        'unit' => 'Toyota 8FD25',
        'serial' => '8FD25-99201',
        'maint' => 'Ganti Oli Mesin'
    ],
    [
        'date' => '27/08/2026',
        'customer' => 'PT. GatotKaca Logistik',
        'unit' => 'Toyota 8FD30',
        'serial' => '8FD30-66231',
        'maint' => 'Ganti Filter Solar'
    ],
    [
        'date' => '27/08/2026',
        'customer' => 'PT. Maju Mundur Makmur',
        'unit' => 'Mitsubishi FD25',
        'serial' => 'FD25-44102',
        'maint' => 'Pengecekan Rem'
    ],
    [
        'date' => '28/08/2026',
        'customer' => 'CV. Baja Perkasa',
        'unit' => 'Doosan D30S',
        'serial' => 'D30S-88319',
        'maint' => 'Pengecekan Radiator'
    ],
    [
        'date' => '28/08/2026',
        'customer' => 'PT. Maju Jaya',
        'unit' => 'Toyota 8FD30',
        'serial' => '8FD30-12346',
        'maint' => 'Ganti Filter Udara'
    ],
];
?>
<!-- views/operasional/outstanding.php - Operasional Outstanding View -->
<main class="dashboard-container">
    <h2 class="page-title" style="margin-bottom: 8px;">Outstanding</h2>
    <div style="font-size: 0.95rem; font-weight: 500; color: #64748B; margin-bottom: 24px;">Terakhir Dicek : 23 Agustus 2026 &nbsp;08:00 WIB</div>

    <div class="unit-forklift-main-card">
        <!-- Action & Search Bar -->
        <div class="d-flex align-items-center gap-3 flex-wrap mb-3">
            <button type="button" class="btn-assign-unit" style="border-radius: 10px;">
                <span class="material-symbols-outlined" style="font-size: 1.25rem;">sync</span>
                <span>Cek Data Terkini</span>
            </button>

            <div class="unit-search-pill" style="min-width: 320px;">
                <span class="material-symbols-outlined">search</span>
                <input type="text" placeholder="Cari Customer" id="searchOutstandingInput">
            </div>
        </div>

        <!-- Outstanding Table Card (Konsisten dengan tabel lainnya) -->
        <div class="unit-table-wrapper">
            <table class="unit-forklift-table-v2">
                <thead>
                    <tr>
                        <th style="width: 18%;">Tanggal Maintenance</th>
                        <th style="width: 24%;">Customer</th>
                        <th style="width: 20%;">Unit</th>
                        <th style="width: 18%;">Serial Number</th>
                        <th style="width: 20%;">Jenis Maintenance</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($outstandingList as $row): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['date']) ?></td>
                        <td class="fw-bold" style="color: #111827;"><?= htmlspecialchars($row['customer']) ?></td>
                        <td class="fw-bold" style="color: #111827;"><?= htmlspecialchars($row['unit']) ?></td>
                        <td><?= htmlspecialchars($row['serial']) ?></td>
                        <td><?= htmlspecialchars($row['maint']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Pagination Footer (Otomatis muncul jika baris > 10, sembunyi jika <= 10) -->
        <div class="table-pagination-footer d-flex justify-content-end align-items-center mt-3">
            <div class="pagination-custom ms-auto">
            </div>
        </div>
    </div>
</main>
