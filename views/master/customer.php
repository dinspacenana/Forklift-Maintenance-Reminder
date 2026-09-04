<!-- views/master/customer.php - Master Data Customer View -->
<!-- MAIN CUSTOMER CONTENT -->
<main class="dashboard-container">
    <!-- Page Title -->
    <h2 class="page-title">Customer</h2>

    <!-- Main Container Card -->
    <div class="unit-forklift-main-card">
        <!-- Search, Filters, and Add Button Bar -->
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-3">
            <div class="d-flex align-items-center flex-wrap gap-3">
                <!-- Search Input -->
                <div class="unit-search-pill">
                    <span class="material-symbols-outlined">search</span>
                    <input type="text" placeholder="Cari Customer" id="searchCustomerInput">
                </div>

                <!-- Filter: Tipe Operasi -->
                <div class="dropdown">
                    <button class="unit-filter-dropdown-btn dropdown-toggle" type="button" id="filterTipeOperasi" data-bs-toggle="dropdown" aria-expanded="false">
                        <span>Tipe Operasi</span>
                        <span class="material-symbols-outlined" style="font-size: 1.1rem; color: #1E293B;">expand_more</span>
                    </button>
                    <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="filterTipeOperasi">
                        <li><a class="dropdown-item" href="#">Heavy Duty</a></li>
                        <li><a class="dropdown-item" href="#">Medium Duty</a></li>
                        <li><a class="dropdown-item" href="#">Low Duty</a></li>
                    </ul>
                </div>

                <!-- Filter: Status -->
                <div class="dropdown">
                    <button class="unit-filter-dropdown-btn dropdown-toggle" type="button" id="filterStatus" data-bs-toggle="dropdown" aria-expanded="false">
                        <span>Status</span>
                        <span class="material-symbols-outlined" style="font-size: 1.1rem; color: #1E293B;">expand_more</span>
                    </button>
                    <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="filterStatus">
                        <li><a class="dropdown-item" href="#">Aktif</a></li>
                        <li><a class="dropdown-item" href="#">Nonaktif</a></li>
                    </ul>
                </div>

                <!-- Reset Button -->
                <button type="button" class="btn-reset-filter" id="btnResetCustomer">
                    <span class="material-symbols-outlined">restart_alt</span>
                    <span>Reset</span>
                </button>
            </div>

            <!-- Add Customer Button -->
            <div>
                <button type="button" class="btn-assign-unit" data-bs-toggle="modal" data-bs-target="#addCustomerModal" style="background-color: #FBBA16; color: #111827;">
                    <span class="material-symbols-outlined" style="font-size: 1.2rem;">add</span>
                    <span>Customer</span>
                </button>
            </div>
        </div>

        <!-- Customer Data Table Card -->
        <div class="unit-table-wrapper">
            <table class="unit-forklift-table-v2">
                <thead>
                    <tr>
                        <th style="width: 10%;">Kode</th>
                        <th style="width: 22%;">Customer</th>
                        <th style="width: 14%;">Tipe Operasi</th>
                        <th style="width: 18%;">Waktu Dibuat</th>
                        <th style="width: 14%;">Dibuat Oleh</th>
                        <th style="width: 10%;">Status</th>
                        <th style="width: 12%; text-align: start;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr>
                        <td class="fw-bold" style="color: #111827;">TM-001</td>
                        <td class="fw-bold" style="color: #111827;">PT. Toyo Matsu</td>
                        <td>Heavy Duty</td>
                        <td>26 – 08 – 03, 18.00</td>
                        <td>Admin Sales</td>
                        <td>
                            <span class="status-pill-badge aktif">Aktif</span>
                        </td>
                        <td>
                            <div class="action-icons-group">
                                <button type="button" class="action-icon-btn icon-view" title="Lihat Detail (Read-Only)" data-bs-toggle="modal" data-bs-target="#detailCustomerModal">
                                    <span class="material-symbols-outlined">visibility</span>
                                </button>
                                <button type="button" class="action-icon-btn icon-edit" title="Edit Customer (Update)" data-bs-toggle="modal" data-bs-target="#editCustomerModal">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <a href="index.php?page=unit_forklift&customer=<?= urlencode('PT. Toyo Matsu') ?>" class="action-icon-btn icon-forklift" title="Lihat Unit Forklift">
                                    <span class="material-symbols-outlined">forklift</span>
                                </a>
                                <button type="button" class="action-icon-btn icon-delete" title="Hapus Customer" data-bs-toggle="modal" data-bs-target="#deleteCustomerModal">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 2 -->
                    <tr>
                        <td class="fw-bold" style="color: #111827;">NL-002</td>
                        <td class="fw-bold" style="color: #111827;">PT. Nusantara Logistik</td>
                        <td>Low Duty</td>
                        <td>26 – 08 – 03, 18.00</td>
                        <td>Kepala Toko</td>
                        <td>
                            <span class="status-pill-badge aktif">Aktif</span>
                        </td>
                        <td>
                            <div class="action-icons-group">
                                <button type="button" class="action-icon-btn icon-view" title="Lihat Detail (Read-Only)" data-bs-toggle="modal" data-bs-target="#detailCustomerModal">
                                    <span class="material-symbols-outlined">visibility</span>
                                </button>
                                <button type="button" class="action-icon-btn icon-edit" title="Edit Customer (Update)" data-bs-toggle="modal" data-bs-target="#editCustomerModal">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <a href="index.php?page=unit_forklift&customer=<?= urlencode('PT. Nusantara Logistik') ?>" class="action-icon-btn icon-forklift" title="Lihat Unit Forklift">
                                    <span class="material-symbols-outlined">forklift</span>
                                </a>
                                <button type="button" class="action-icon-btn icon-delete" title="Hapus Customer" data-bs-toggle="modal" data-bs-target="#deleteCustomerModal">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 3 -->
                    <tr>
                        <td class="fw-bold" style="color: #111827;">RJ-003</td>
                        <td class="fw-bold" style="color: #111827;">PT. Robin Jaya</td>
                        <td>Medium Duty</td>
                        <td>26 – 08 – 03, 18.00</td>
                        <td>Kepala Toko</td>
                        <td>
                            <span class="status-pill-badge nonaktif">Nonaktif</span>
                        </td>
                        <td>
                            <div class="action-icons-group">
                                <button type="button" class="action-icon-btn icon-view" title="Lihat Detail (Read-Only)" data-bs-toggle="modal" data-bs-target="#detailCustomerModal">
                                    <span class="material-symbols-outlined">visibility</span>
                                </button>
                                <button type="button" class="action-icon-btn icon-edit" title="Edit Customer (Update)" data-bs-toggle="modal" data-bs-target="#editCustomerModal">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <a href="index.php?page=unit_forklift&customer=<?= urlencode('PT. Robin Jaya') ?>" class="action-icon-btn icon-forklift" title="Lihat Unit Forklift">
                                    <span class="material-symbols-outlined">forklift</span>
                                </a>
                                <button type="button" class="action-icon-btn icon-delete" title="Hapus Customer" data-bs-toggle="modal" data-bs-target="#deleteCustomerModal">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 4 -->
                    <tr>
                        <td class="fw-bold">MJ-004</td>
                        <td class="fw-bold">PT. Maju Jaya</td>
                        <td>Heavy Duty</td>
                        <td>26 – 08 – 03, 18.00</td>
                        <td>Admin Sales</td>
                        <td>
                            <span class="status-pill-badge aktif">Aktif</span>
                        </td>
                        <td>
                            <div class="action-icons-group">
                                <button class="action-icon-btn icon-view" title="Lihat Detail (Read-Only)" data-bs-toggle="modal" data-bs-target="#detailCustomerModal">
                                    <span class="material-symbols-outlined">visibility</span>
                                </button>
                                <button class="action-icon-btn icon-edit" title="Edit Customer (Update)" data-bs-toggle="modal" data-bs-target="#editCustomerModal">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <a href="index.php?page=unit_forklift&customer=<?= urlencode('PT. Maju Jaya') ?>" class="action-icon-btn icon-forklift" title="Lihat Unit Forklift">
                                    <span class="material-symbols-outlined">forklift</span>
                                </a>
                                <button class="action-icon-btn icon-delete" title="Hapus Customer" data-bs-toggle="modal" data-bs-target="#deleteCustomerModal">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 5 -->
                    <tr>
                        <td class="fw-bold">GL-005</td>
                        <td class="fw-bold">PT. GatotKaca Logistik</td>
                        <td>Low Duty</td>
                        <td>26 – 08 – 03, 18.00</td>
                        <td>Kepala Toko</td>
                        <td>
                            <span class="status-pill-badge nonaktif">Nonaktif</span>
                        </td>
                        <td>
                            <div class="action-icons-group">
                                <button class="action-icon-btn icon-view" title="Lihat Detail (Read-Only)" data-bs-toggle="modal" data-bs-target="#detailCustomerModal">
                                    <span class="material-symbols-outlined">visibility</span>
                                </button>
                                <button class="action-icon-btn icon-edit" title="Edit Customer (Update)" data-bs-toggle="modal" data-bs-target="#editCustomerModal">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <a href="index.php?page=unit_forklift&customer=<?= urlencode('PT. GatotKaca Logistik') ?>" class="action-icon-btn icon-forklift" title="Lihat Unit Forklift">
                                    <span class="material-symbols-outlined">forklift</span>
                                </a>
                                <button class="action-icon-btn icon-delete" title="Hapus Customer" data-bs-toggle="modal" data-bs-target="#deleteCustomerModal">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 6 -->
                    <tr>
                        <td class="fw-bold">MMM-006</td>
                        <td class="fw-bold">PT. Maju Mundur Makmur</td>
                        <td>Heavy Duty</td>
                        <td>26 – 08 – 03, 18.00</td>
                        <td>Admin Sales</td>
                        <td>
                            <span class="status-pill-badge aktif">Aktif</span>
                        </td>
                        <td>
                            <div class="action-icons-group">
                                <button class="action-icon-btn icon-view" title="Lihat Detail (Read-Only)" data-bs-toggle="modal" data-bs-target="#detailCustomerModal">
                                    <span class="material-symbols-outlined">visibility</span>
                                </button>
                                <button class="action-icon-btn icon-edit" title="Edit Customer (Update)" data-bs-toggle="modal" data-bs-target="#editCustomerModal">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <a href="index.php?page=unit_forklift&customer=<?= urlencode('PT. Maju Mundur Makmur') ?>" class="action-icon-btn icon-forklift" title="Lihat Unit Forklift">
                                    <span class="material-symbols-outlined">forklift</span>
                                </a>
                                <button class="action-icon-btn icon-delete" title="Hapus Customer" data-bs-toggle="modal" data-bs-target="#deleteCustomerModal">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 7 -->
                    <tr>
                        <td class="fw-bold">BP-007</td>
                        <td class="fw-bold">CV. Baja Perkasa</td>
                        <td>Heavy Duty</td>
                        <td>26 – 08 – 03, 18.00</td>
                        <td>Kepala Toko</td>
                        <td>
                            <span class="status-pill-badge aktif">Aktif</span>
                        </td>
                        <td>
                            <div class="action-icons-group">
                                <button class="action-icon-btn icon-view" title="Lihat Detail (Read-Only)" data-bs-toggle="modal" data-bs-target="#detailCustomerModal">
                                    <span class="material-symbols-outlined">visibility</span>
                                </button>
                                <button class="action-icon-btn icon-edit" title="Edit Customer (Update)" data-bs-toggle="modal" data-bs-target="#editCustomerModal">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <a href="index.php?page=unit_forklift&customer=<?= urlencode('CV. Baja Perkasa') ?>" class="action-icon-btn icon-forklift" title="Lihat Unit Forklift">
                                    <span class="material-symbols-outlined">forklift</span>
                                </a>
                                <button class="action-icon-btn icon-delete" title="Hapus Customer" data-bs-toggle="modal" data-bs-target="#deleteCustomerModal">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </td>
                    <!-- Row 8 -->
                    <tr>
                        <td class="fw-bold">SA-008</td>
                        <td class="fw-bold">PT. Sentosa Abadi</td>
                        <td>Medium Duty</td>
                        <td>26 – 08 – 03, 18.00</td>
                        <td>Admin Sales</td>
                        <td>
                            <span class="status-pill-badge aktif">Aktif</span>
                        </td>
                        <td>
                            <div class="action-icons-group">
                                <button class="action-icon-btn icon-view" title="Lihat Detail (Read-Only)" data-bs-toggle="modal" data-bs-target="#detailCustomerModal">
                                    <span class="material-symbols-outlined">visibility</span>
                                </button>
                                <button class="action-icon-btn icon-edit" title="Edit Customer (Update)" data-bs-toggle="modal" data-bs-target="#editCustomerModal">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <a href="index.php?page=unit_forklift&customer=<?= urlencode('PT. Sentosa Abadi') ?>" class="action-icon-btn icon-forklift" title="Lihat Unit Forklift">
                                    <span class="material-symbols-outlined">forklift</span>
                                </a>
                                <button class="action-icon-btn icon-delete" title="Hapus Customer" data-bs-toggle="modal" data-bs-target="#deleteCustomerModal">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 9 -->
                    <tr>
                        <td class="fw-bold">CT-009</td>
                        <td class="fw-bold">PT. Cahaya Terang</td>
                        <td>Low Duty</td>
                        <td>26 – 08 – 03, 18.00</td>
                        <td>Kepala Toko</td>
                        <td>
                            <span class="status-pill-badge aktif">Aktif</span>
                        </td>
                        <td>
                            <div class="action-icons-group">
                                <button class="action-icon-btn icon-view" title="Lihat Detail (Read-Only)" data-bs-toggle="modal" data-bs-target="#detailCustomerModal">
                                    <span class="material-symbols-outlined">visibility</span>
                                </button>
                                <button class="action-icon-btn icon-edit" title="Edit Customer (Update)" data-bs-toggle="modal" data-bs-target="#editCustomerModal">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <a href="index.php?page=unit_forklift&customer=<?= urlencode('PT. Cahaya Terang') ?>" class="action-icon-btn icon-forklift" title="Lihat Unit Forklift">
                                    <span class="material-symbols-outlined">forklift</span>
                                </a>
                                <button class="action-icon-btn icon-delete" title="Hapus Customer" data-bs-toggle="modal" data-bs-target="#deleteCustomerModal">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 10 -->
                    <tr>
                        <td class="fw-bold">MS-010</td>
                        <td class="fw-bold">PT. Mitra Sejahtera</td>
                        <td>Heavy Duty</td>
                        <td>26 – 08 – 03, 18.00</td>
                        <td>Admin Sales</td>
                        <td>
                            <span class="status-pill-badge nonaktif">Nonaktif</span>
                        </td>
                        <td>
                            <div class="action-icons-group">
                                <button class="action-icon-btn icon-view" title="Lihat Detail (Read-Only)" data-bs-toggle="modal" data-bs-target="#detailCustomerModal">
                                    <span class="material-symbols-outlined">visibility</span>
                                </button>
                                <button class="action-icon-btn icon-edit" title="Edit Customer (Update)" data-bs-toggle="modal" data-bs-target="#editCustomerModal">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <a href="index.php?page=unit_forklift&customer=<?= urlencode('PT. Mitra Sejahtera') ?>" class="action-icon-btn icon-forklift" title="Lihat Unit Forklift">
                                    <span class="material-symbols-outlined">forklift</span>
                                </a>
                                <button class="action-icon-btn icon-delete" title="Hapus Customer" data-bs-toggle="modal" data-bs-target="#deleteCustomerModal">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 11 -->
                    <tr>
                        <td class="fw-bold">PL-011</td>
                        <td class="fw-bold">PT. Prima Logistik</td>
                        <td>Medium Duty</td>
                        <td>26 – 08 – 03, 18.00</td>
                        <td>Kepala Toko</td>
                        <td>
                            <span class="status-pill-badge aktif">Aktif</span>
                        </td>
                        <td>
                            <div class="action-icons-group">
                                <button class="action-icon-btn icon-view" title="Lihat Detail (Read-Only)" data-bs-toggle="modal" data-bs-target="#detailCustomerModal">
                                    <span class="material-symbols-outlined">visibility</span>
                                </button>
                                <button class="action-icon-btn icon-edit" title="Edit Customer (Update)" data-bs-toggle="modal" data-bs-target="#editCustomerModal">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <a href="index.php?page=unit_forklift&customer=<?= urlencode('PT. Prima Logistik') ?>" class="action-icon-btn icon-forklift" title="Lihat Unit Forklift">
                                    <span class="material-symbols-outlined">forklift</span>
                                </a>
                                <button class="action-icon-btn icon-delete" title="Hapus Customer" data-bs-toggle="modal" data-bs-target="#deleteCustomerModal">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="table-pagination-footer d-flex justify-content-end align-items-center">
            <div class="pagination-custom ms-auto">
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
     MODAL 1: Informasi Detail Customer (READ-ONLY)
     ========================================================= -->
<div class="modal fade" id="detailCustomerModal" tabindex="-1" aria-labelledby="detailCustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 820px;">
        <div class="modal-content modal-user-content">
            <h4 class="modal-user-title" id="detailCustomerModalLabel">Informasi Detail Customer</h4>

            <div class="row g-3 mb-3">
                <!-- Left Column (Customer Code, Name, Address) -->
                <div class="col-12 col-md-6">
                    <!-- Code & Name Box -->
                    <div class="customer-info-box mb-3">
                        <div class="customer-code-name-row">
                            <div style="flex: 1;">
                                <div class="info-sub-label">Kode Customer</div>
                                <div class="info-val-large">TM-001</div>
                            </div>
                            <div class="box-vertical-divider"></div>
                            <div style="flex: 1.5;">
                                <div class="info-sub-label">Nama Customer</div>
                                <div class="info-val-large">PT. Toyo Matsu</div>
                            </div>
                        </div>
                    </div>

                    <!-- Address, Phone, Email Box -->
                    <div class="customer-info-box">
                        <div class="address-title">Alamat</div>
                        <div class="address-desc">JL. Raden Saleh No.4 6, Surabaya, Jawa Timur, Indonesia</div>
                        <div class="contact-info-grid">
                            <div class="contact-info-item">
                                <div class="contact-label">No. Telp</div>
                                <div class="contact-val">081-2345678</div>
                            </div>
                            <div class="contact-info-item">
                                <div class="contact-label">Email</div>
                                <div class="contact-val">Toyomatsu@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column (Unit Forklift Mini-Table) -->
                <div class="col-12 col-md-6">
                    <div class="unit-forklift-header-title">Unit Forklift</div>
                    <div class="unit-forklift-card-box">
                        <table class="table unit-forklift-table">
                            <thead>
                                <tr>
                                    <th>Unit</th>
                                    <th>Nama</th>
                                    <th>Tipe</th>
                                    <th>Mesin</th>
                                    <th>Kaps.</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold">FL-101</td>
                                    <td>Toyota</td>
                                    <td>12345</td>
                                    <td>Electric</td>
                                    <td>12 Ton</td>
                                    <td><span class="badge-status-aktif-blue" style="padding: 2px 10px; font-size: 0.72rem;">Aktif</span></td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">FL-101</td>
                                    <td>Toyota</td>
                                    <td>12345</td>
                                    <td>Diesel</td>
                                    <td>8 Ton</td>
                                    <td><span class="badge-status-aktif-blue" style="padding: 2px 10px; font-size: 0.72rem;">Aktif</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Bottom Row: 4 Info Pills -->
            <div class="row g-3 mb-4">
                <div class="col-6 col-md-3">
                    <div class="info-pill-box">
                        <span>Heavy Duty</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="info-pill-box">
                        <span>Dibuat : 26 – 08 – 03, 18.00</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="info-pill-box">
                        <span>Dibuat Oleh : Administrator</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="info-pill-box">
                        <span>Status : <span style="color: #0284C7; font-weight: 700;">Aktif</span></span>
                    </div>
                </div>
            </div>

            <!-- Action Button -->
            <div class="d-flex justify-content-end">
                <button type="button" class="btn-user-batal" data-bs-dismiss="modal">
                    Kembali
                </button>
            </div>
        </div>
    </div>
</div>

<!-- =========================================================
     MODAL 2: Add Customer
     ========================================================= -->
<div class="modal fade" id="addCustomerModal" tabindex="-1" aria-labelledby="addCustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 780px;">
        <div class="modal-content modal-user-content">
            <h4 class="modal-user-title" id="addCustomerModalLabel">Tambah Customer</h4>

            <form onsubmit="event.preventDefault();">
                <div class="row g-3">
                    <!-- Left Column -->
                    <div class="col-12 col-md-7">
                        <!-- Code & Name Box (Inputs for either Kode or Nama) -->
                        <div class="customer-info-box mb-3">
                            <div class="customer-code-name-row" style="align-items: flex-start;">
                                <div style="flex: 0 0 115px;">
                                    <label for="inputKodeCustomer" class="info-sub-label mb-1" style="display: block; cursor: pointer;">Kode Customer</label>
                                    <input type="text" class="customer-info-input" id="inputKodeCustomer" placeholder="Contoh: TM-001" autocomplete="off">
                                </div>
                                <div class="box-vertical-divider" id="customerBoxDivider" style="height: 38px; margin: 0 16px;"></div>
                                <div style="flex: 1; min-width: 0;">
                                    <label for="inputNamaCustomer" class="info-sub-label mb-1" style="display: block; cursor: pointer;">Nama Customer</label>
                                    <textarea class="customer-info-input" id="inputNamaCustomer" rows="1" placeholder="Contoh: PT. Toyo Matsu" autocomplete="off" style="resize: none; overflow: hidden; height: 26px; display: block;"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Address, Phone, Email Box -->
                        <div class="customer-info-box">
                            <div class="address-title">Alamat</div>
                            <div class="address-desc" id="addAlamatCustomer" style="color: #94A3B8; font-weight: 500;">-</div>
                            <div class="contact-info-grid">
                                <div class="contact-info-item">
                                    <div class="contact-label">No. Telp</div>
                                    <div class="contact-val" id="addTelpCustomer" style="color: #94A3B8; font-weight: 500;">-</div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-label">Email</div>
                                    <div class="contact-val" id="addEmailCustomer" style="color: #94A3B8; font-weight: 500;">-</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-12 col-md-5">
                        <!-- Tipe Operasi Select Box -->
                        <div class="select-box-wrapper mb-3">
                            <select class="user-form-select" id="addTipeOperasi">
                                <option value="" selected disabled>Pilih Tipe Operasi</option>
                                <option value="Heavy Duty">Heavy Duty</option>
                                <option value="Medium Duty">Medium Duty</option>
                                <option value="Low Duty">Low Duty</option>
                            </select>
                        </div>

                        <!-- Status Radio Card -->
                        <div class="status-radio-card">
                            <div class="status-radio-title">Status</div>
                            <div class="status-radio-group">
                                <label class="custom-radio-item">
                                    <input type="radio" name="addStatus" value="Aktif" checked>
                                    <span>Aktif</span>
                                </label>
                                <label class="custom-radio-item">
                                    <input type="radio" name="addStatus" value="Non-Aktif">
                                    <span>Non-Aktif</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="d-flex justify-content-end align-items-center gap-3 mt-4">
                    <button type="button" class="btn-modal-sync" id="btnCekCustomer" disabled>
                        <span class="material-symbols-outlined">search</span> Cek
                    </button>
                    <button type="button" class="btn-forklift-save" data-bs-dismiss="modal">
                        Simpan
                    </button>
                    <button type="button" class="btn-user-batal" data-bs-dismiss="modal">
                        Kembali
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- =========================================================
     MODAL 3: Edit Detail Customer (Pop-up menyusul)
     ========================================================= -->
<div class="modal fade" id="editCustomerModal" tabindex="-1" aria-labelledby="editCustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 780px;">
        <div class="modal-content modal-user-content">
            <h4 class="modal-user-title" id="editCustomerModalLabel">Ubah Detail Customer</h4>

            <form onsubmit="event.preventDefault();">
                <div class="row g-3">
                    <div class="col-12 col-md-7">
                        <div class="customer-info-box mb-3">
                            <div class="customer-code-name-row">
                                <div style="flex: 1;">
                                    <div class="info-sub-label">Kode Customer</div>
                                    <div class="info-val-large">TM-001</div>
                                </div>
                                <div class="box-vertical-divider"></div>
                                <div style="flex: 1.5;">
                                    <div class="info-sub-label">Nama Customer</div>
                                    <div class="info-val-large">PT. Toyo Matsu</div>
                                </div>
                            </div>
                        </div>

                        <div class="customer-info-box">
                            <div class="address-title">Alamat</div>
                            <div class="address-desc">JL. Raden Saleh No.4 6, Surabaya, Jawa Timur, Indonesia</div>
                            <div class="contact-info-grid">
                                <div class="contact-info-item">
                                    <div class="contact-label">No. Telp</div>
                                    <div class="contact-val">081-2345678</div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-label">Email</div>
                                    <div class="contact-val">Toyomatsu@gmail.com</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-5">
                        <div class="select-box-wrapper mb-3">
                            <select class="user-form-select" id="editTipeOperasi">
                                <option value="Heavy Duty" selected>Heavy Duty</option>
                                <option value="Medium Duty">Medium Duty</option>
                                <option value="Low Duty">Low Duty</option>
                            </select>
                        </div>

                        <div class="status-radio-card">
                            <div class="status-radio-title">Status</div>
                            <div class="status-radio-group">
                                <label class="custom-radio-item">
                                    <input type="radio" name="editStatus" value="Aktif" checked>
                                    <span>Aktif</span>
                                </label>
                                <label class="custom-radio-item">
                                    <input type="radio" name="editStatus" value="Non-Aktif">
                                    <span>Non-Aktif</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end align-items-center gap-3 mt-4">
                    <button type="button" class="btn-modal-sync">
                        <span class="material-symbols-outlined">sync</span> Sinkronisasi
                    </button>
                    <button type="button" class="btn-forklift-save" data-bs-dismiss="modal">
                        Simpan
                    </button>
                    <button type="button" class="btn-user-batal" data-bs-dismiss="modal">
                        Kembali
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- =========================================================
     MODAL 4: Delete Confirmation Pop-up (Menyusul)
     ========================================================= -->
<div class="modal fade" id="deleteCustomerModal" tabindex="-1" aria-labelledby="deleteCustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
        <div class="modal-content modal-delete-content">
            <h4 class="modal-delete-title" id="deleteCustomerModalLabel">Yakin ingin menghapus?</h4>
            <p class="modal-delete-subtext">Data akan hilang permanen</p>

            <div class="d-flex justify-content-center align-items-center gap-3">
                <button type="button" class="btn-delete-cancel" data-bs-dismiss="modal">
                    Batal
                </button>
                <button type="button" class="btn-delete-confirm" data-bs-dismiss="modal">
                    Yakin
                </button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Database Referensi Customer untuk Simulasi Pengecekan
    const customerData = [
        {
            kode: 'TM-001',
            nama: 'PT. Toyo Matsu',
            alamat: 'JL. Raden Saleh No.4 6, Surabaya, Jawa Timur, Indonesia',
            telp: '081-2345678',
            email: 'Toyomatsu@gmail.com',
            tipe: 'Heavy Duty'
        },
        {
            kode: 'NL-002',
            nama: 'PT. Nusantara Logistik',
            alamat: 'Kawasan Industri Rungkut Blok A-12, Surabaya',
            telp: '031-8987654',
            email: 'nusantara.logistik@gmail.com',
            tipe: 'Low Duty'
        },
        {
            kode: 'RJ-003',
            nama: 'PT. Robin Jaya',
            alamat: 'Jl. Margomulyo Indah Kav. 18, Surabaya',
            telp: '031-7489012',
            email: 'info@robinjaya.co.id',
            tipe: 'Medium Duty'
        },
        {
            kode: 'MP-004',
            nama: 'PT. Mentari Pagi',
            alamat: 'Jl. Raya Darmo Permai III No. 8, Surabaya',
            telp: '081-3345567',
            email: 'mentari.pagi@gmail.com',
            tipe: 'Medium Duty'
        },
        {
            kode: 'MJ-005',
            nama: 'PT. Maju Jaya',
            alamat: 'Jl. Industri SIER No. 25, Surabaya',
            telp: '031-8432190',
            email: 'contact@majujaya.com',
            tipe: 'Heavy Duty'
        }
    ];

    const inputKode = document.getElementById('inputKodeCustomer');
    const inputNama = document.getElementById('inputNamaCustomer');
    const btnCek = document.getElementById('btnCekCustomer');
    const addModal = document.getElementById('addCustomerModal');

    // Cek status input untuk mengaktifkan/menonaktifkan tombol Cek
    function updateCekButtonState() {
        if (!btnCek) return;
        const hasKode = inputKode && inputKode.value.trim().length > 0;
        const hasNama = inputNama && inputNama.value.trim().length > 0;

        btnCek.disabled = !(hasKode || hasNama);
    }

    // Auto-adjust tinggi textarea Nama Customer agar nama panjang tidak terpotong
    function adjustNamaTextareaHeight() {
        if (!inputNama) return;
        inputNama.style.height = 'auto';
        const newHeight = Math.max(26, inputNama.scrollHeight);
        inputNama.style.height = newHeight + 'px';
        const divider = document.getElementById('customerBoxDivider');
        if (divider) {
            divider.style.height = Math.max(38, newHeight + 8) + 'px';
        }
    }

    if (inputKode) {
        inputKode.addEventListener('input', updateCekButtonState);
    }
    if (inputNama) {
        inputNama.addEventListener('input', function() {
            updateCekButtonState();
            adjustNamaTextareaHeight();
        });
    }

    // Klik Tombol Cek
    if (btnCek) {
        btnCek.addEventListener('click', function() {
            if (this.disabled) return;

            const icon = this.querySelector('.material-symbols-outlined');
            if (icon) {
                icon.style.transition = 'transform 0.4s ease';
                icon.style.transform = 'scale(1.25)';
            }

            const qKode = inputKode ? inputKode.value.trim().toLowerCase() : '';
            const qNama = inputNama ? inputNama.value.trim().toLowerCase() : '';

            // Cari kecocokan data
            let matched = customerData.find(c => {
                const matchKode = qKode && c.kode.toLowerCase().includes(qKode);
                const matchNama = qNama && c.nama.toLowerCase().includes(qNama);
                return matchKode || matchNama;
            });

            // Fallback cerdas jika user memasukkan kode/nama baru
            if (!matched) {
                matched = {
                    kode: inputKode && inputKode.value.trim() ? inputKode.value.trim().toUpperCase() : 'TM-001',
                    nama: inputNama && inputNama.value.trim() ? inputNama.value.trim() : 'PT. Toyo Matsu',
                    alamat: 'JL. Raden Saleh No.4 6, Surabaya, Jawa Timur, Indonesia',
                    telp: '081-2345678',
                    email: 'Toyomatsu@gmail.com',
                    tipe: 'Heavy Duty'
                };
            }

            // Lengkapi input jika salah satunya kosong
            if (inputKode) inputKode.value = matched.kode;
            if (inputNama) {
                inputNama.value = matched.nama;
                adjustNamaTextareaHeight();
            }

            // Munculkan detail informasi customer
            const alamat = document.getElementById('addAlamatCustomer');
            const telp = document.getElementById('addTelpCustomer');
            const email = document.getElementById('addEmailCustomer');
            const tipe = document.getElementById('addTipeOperasi');

            if (alamat) {
                alamat.textContent = matched.alamat;
                alamat.style.color = '#334155';
                alamat.style.fontWeight = '500';
            }
            if (telp) {
                telp.textContent = matched.telp;
                telp.style.color = '#111827';
                telp.style.fontWeight = '600';
            }
            if (email) {
                email.textContent = matched.email;
                email.style.color = '#111827';
                email.style.fontWeight = '600';
            }
            if (tipe && matched.tipe) {
                tipe.value = matched.tipe;
            }

            setTimeout(() => {
                if (icon) {
                    icon.style.transition = 'none';
                    icon.style.transform = 'none';
                }
            }, 400);
        });
    }

    // Reset kembali ke keadaan kosong saat modal ditutup
    if (addModal) {
        addModal.addEventListener('hidden.bs.modal', function() {
            if (inputKode) inputKode.value = '';
            if (inputNama) {
                inputNama.value = '';
                inputNama.style.height = '26px';
            }
            const divider = document.getElementById('customerBoxDivider');
            if (divider) divider.style.height = '38px';

            if (btnCek) btnCek.disabled = true;

            const alamat = document.getElementById('addAlamatCustomer');
            const telp = document.getElementById('addTelpCustomer');
            const email = document.getElementById('addEmailCustomer');
            const tipe = document.getElementById('addTipeOperasi');

            if (alamat) {
                alamat.textContent = '-';
                alamat.style.color = '#94A3B8';
                alamat.style.fontWeight = '500';
            }
            if (telp) {
                telp.textContent = '-';
                telp.style.color = '#94A3B8';
                telp.style.fontWeight = '500';
            }
            if (email) {
                email.textContent = '-';
                email.style.color = '#94A3B8';
                email.style.fontWeight = '500';
            }
            if (tipe) {
                tipe.value = '';
            }
        });
    }

    // Filter dan Pencarian Tabel Customer
    const cardCustomer = document.querySelector('.unit-forklift-main-card');
    const searchInput = document.getElementById('searchCustomerInput');
    const filterTipeBtn = document.querySelector('#filterTipeOperasi span');
    const filterStatusBtn = document.querySelector('#filterStatus span');
    const filterTipeItems = document.querySelectorAll('#filterTipeOperasi + .dropdown-menu .dropdown-item');
    const filterStatusItems = document.querySelectorAll('#filterStatus + .dropdown-menu .dropdown-item');
    const btnResetCustomer = document.getElementById('btnResetCustomer');
    const tableRows = document.querySelectorAll('.unit-forklift-table-v2 tbody tr');

    let selectedTipe = 'Semua Tipe';
    let selectedStatus = 'Semua Status';

    function applyCustomerFilter() {
        const query = searchInput ? searchInput.value.toLowerCase().trim() : '';

        const filterFn = function(row) {
            const text = row.textContent.toLowerCase();
            const matchSearch = !query || text.includes(query);

            let matchTipe = true;
            if (selectedTipe !== 'Semua Tipe' && selectedTipe !== 'Tipe Operasi') {
                matchTipe = text.includes(selectedTipe.toLowerCase());
            }

            let matchStatus = true;
            if (selectedStatus !== 'Semua Status' && selectedStatus !== 'Status') {
                const statusBadge = row.querySelector('.status-pill-badge');
                const rowStatus = statusBadge ? statusBadge.textContent.trim().toLowerCase() : '';
                matchStatus = (rowStatus === selectedStatus.toLowerCase());
            }

            return matchSearch && matchTipe && matchStatus;
        };

        if (cardCustomer && typeof cardCustomer.__applyFilter === 'function') {
            cardCustomer.__applyFilter(filterFn);
        } else {
            tableRows.forEach(row => {
                row.style.display = filterFn(row) ? '' : 'none';
            });
        }
    }

    if (searchInput) {
        searchInput.addEventListener('input', applyCustomerFilter);
    }

    const btnFilterTipe = document.getElementById('filterTipeOperasi');
    const btnFilterStatus = document.getElementById('filterStatus');

    function updateButtonColors() {
        if (btnFilterTipe) {
            btnFilterTipe.classList.toggle('filter-active', selectedTipe !== 'Semua Tipe');
        }
        if (btnFilterStatus) {
            btnFilterStatus.classList.toggle('filter-active', selectedStatus !== 'Semua Status');
        }
    }

    filterTipeItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            selectedTipe = this.textContent.trim();
            if (filterTipeBtn) filterTipeBtn.textContent = (selectedTipe === 'Semua Tipe' ? 'Tipe Operasi' : selectedTipe);
            updateButtonColors();
            applyCustomerFilter();
        });
    });

    filterStatusItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            selectedStatus = this.textContent.trim();
            if (filterStatusBtn) filterStatusBtn.textContent = (selectedStatus === 'Semua Status' ? 'Status' : selectedStatus);
            updateButtonColors();
            applyCustomerFilter();
        });
    });

    if (btnResetCustomer) {
        btnResetCustomer.addEventListener('click', function(e) {
            e.preventDefault();
            if (searchInput) searchInput.value = '';
            selectedTipe = 'Semua Tipe';
            selectedStatus = 'Semua Status';
            if (filterTipeBtn) filterTipeBtn.textContent = 'Tipe Operasi';
            if (filterStatusBtn) filterStatusBtn.textContent = 'Status';
            updateButtonColors();
            applyCustomerFilter();
        });
    }
});
</script>
