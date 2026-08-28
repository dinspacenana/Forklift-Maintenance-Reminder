<?php
// master_customer.php - Master Data Customer FMR
include_once __DIR__ . '/header.php';
?>

<!-- MAIN CUSTOMER CONTENT -->
<main class="dashboard-container">
    <!-- Page Title -->
    <h2 class="page-title">Customer</h2>

    <!-- Search, Filters, and Add Button Bar -->
    <div class="customer-filter-bar">
        <!-- Search Input -->
        <div class="search-input-pill">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Cari Customer" id="searchCustomerInput">
        </div>

        <div class="d-flex align-items-center gap-3 flex-wrap">
            <!-- Filter: Tipe Operasi -->
            <div class="dropdown">
                <button class="filter-dropdown-btn dropdown-toggle" type="button" id="filterTipeOperasi" data-bs-toggle="dropdown" aria-expanded="false">
                    <span>Tipe Operasi</span>
                </button>
                <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="filterTipeOperasi">
                    <li><a class="dropdown-item" href="#">Low Duty</a></li>
                    <li><a class="dropdown-item" href="#">Medium Duty</a></li>
                    <li><a class="dropdown-item" href="#">Heavy Duty</a></li>
                </ul>
            </div>

            <!-- Filter: Status -->
            <div class="dropdown">
                <button class="filter-dropdown-btn dropdown-toggle" type="button" id="filterStatus" data-bs-toggle="dropdown" aria-expanded="false">
                    <span>Status</span>
                </button>
                <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="filterStatus">
                    <li><a class="dropdown-item" href="#">Aktif</a></li>
                    <li><a class="dropdown-item" href="#">Nonaktif</a></li>
                </ul>
            </div>

            <!-- Add Customer Button -->
            <button type="button" class="btn-add-customer" data-bs-toggle="modal" data-bs-target="#addCustomerModal">
                <i class="fa-solid fa-plus"></i> Add Customer
            </button>
        </div>
    </div>

    <!-- Customer Data Table Card -->
    <div class="customer-table-card">
        <div class="table-responsive">
            <table class="table customer-table">
                <thead>
                    <tr>
                        <th style="width: 10%;">Code</th>
                        <th style="width: 22%;">Customer</th>
                        <th style="width: 14%;">Tipe Operasi</th>
                        <th style="width: 18%;">Created Datetime</th>
                        <th style="width: 14%;">Created By</th>
                        <th style="width: 10%;">Status</th>
                        <th style="width: 12%; text-align: start;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr>
                        <td class="fw-bold">TM-001</td>
                        <td class="fw-bold">PT. Toyo Matsu</td>
                        <td>Heavy Duty</td>
                        <td>26 – 08 – 03, 18.00</td>
                        <td>Admin Sales</td>
                        <td>
                            <span class="status-pill-badge aktif">Aktif</span>
                        </td>
                        <td>
                            <div class="action-icons-group">
                                <button class="action-icon-btn icon-view" title="Lihat Detail (Read-Only)" data-bs-toggle="modal" data-bs-target="#detailCustomerModal">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button class="action-icon-btn icon-edit" title="Edit Customer (Update)" data-bs-toggle="modal" data-bs-target="#editCustomerModal">
                                    <i class="fa-solid fa-pencil"></i>
                                </button>
                                <button class="action-icon-btn icon-forklift" title="Unit Forklift">
                                    <i class="fa-solid fa-truck-ramp-box"></i>
                                </button>
                                <button class="action-icon-btn icon-delete" title="Hapus Customer" data-bs-toggle="modal" data-bs-target="#deleteCustomerModal">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 2 -->
                    <tr>
                        <td class="fw-bold">NL-002</td>
                        <td class="fw-bold">PT. Nusantara Logistik</td>
                        <td>Low Duty</td>
                        <td>26 – 08 – 03, 18.00</td>
                        <td>Kepala Toko</td>
                        <td>
                            <span class="status-pill-badge aktif">Aktif</span>
                        </td>
                        <td>
                            <div class="action-icons-group">
                                <button class="action-icon-btn icon-view" title="Lihat Detail (Read-Only)" data-bs-toggle="modal" data-bs-target="#detailCustomerModal">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button class="action-icon-btn icon-edit" title="Edit Customer (Update)" data-bs-toggle="modal" data-bs-target="#editCustomerModal">
                                    <i class="fa-solid fa-pencil"></i>
                                </button>
                                <button class="action-icon-btn icon-forklift" title="Unit Forklift">
                                    <i class="fa-solid fa-truck-ramp-box"></i>
                                </button>
                                <button class="action-icon-btn icon-delete" title="Hapus Customer" data-bs-toggle="modal" data-bs-target="#deleteCustomerModal">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 3 -->
                    <tr>
                        <td class="fw-bold">RJ-003</td>
                        <td class="fw-bold">PT. Robin Jaya</td>
                        <td>Medium Duty</td>
                        <td>26 – 08 – 03, 18.00</td>
                        <td>Kepala Toko</td>
                        <td>
                            <span class="status-pill-badge nonaktif">Non-Aktif</span>
                        </td>
                        <td>
                            <div class="action-icons-group">
                                <button class="action-icon-btn icon-view" title="Lihat Detail (Read-Only)" data-bs-toggle="modal" data-bs-target="#detailCustomerModal">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button class="action-icon-btn icon-edit" title="Edit Customer (Update)" data-bs-toggle="modal" data-bs-target="#editCustomerModal">
                                    <i class="fa-solid fa-pencil"></i>
                                </button>
                                <button class="action-icon-btn icon-forklift" title="Unit Forklift">
                                    <i class="fa-solid fa-truck-ramp-box"></i>
                                </button>
                                <button class="action-icon-btn icon-delete" title="Hapus Customer" data-bs-toggle="modal" data-bs-target="#deleteCustomerModal">
                                    <i class="fa-solid fa-trash-can"></i>
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
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button class="action-icon-btn icon-edit" title="Edit Customer (Update)" data-bs-toggle="modal" data-bs-target="#editCustomerModal">
                                    <i class="fa-solid fa-pencil"></i>
                                </button>
                                <button class="action-icon-btn icon-forklift" title="Unit Forklift">
                                    <i class="fa-solid fa-truck-ramp-box"></i>
                                </button>
                                <button class="action-icon-btn icon-delete" title="Hapus Customer" data-bs-toggle="modal" data-bs-target="#deleteCustomerModal">
                                    <i class="fa-solid fa-trash-can"></i>
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
                            <span class="status-pill-badge nonaktif">Non-Aktif</span>
                        </td>
                        <td>
                            <div class="action-icons-group">
                                <button class="action-icon-btn icon-view" title="Lihat Detail (Read-Only)" data-bs-toggle="modal" data-bs-target="#detailCustomerModal">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button class="action-icon-btn icon-edit" title="Edit Customer (Update)" data-bs-toggle="modal" data-bs-target="#editCustomerModal">
                                    <i class="fa-solid fa-pencil"></i>
                                </button>
                                <button class="action-icon-btn icon-forklift" title="Unit Forklift">
                                    <i class="fa-solid fa-truck-ramp-box"></i>
                                </button>
                                <button class="action-icon-btn icon-delete" title="Hapus Customer" data-bs-toggle="modal" data-bs-target="#deleteCustomerModal">
                                    <i class="fa-solid fa-trash-can"></i>
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
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button class="action-icon-btn icon-edit" title="Edit Customer (Update)" data-bs-toggle="modal" data-bs-target="#editCustomerModal">
                                    <i class="fa-solid fa-pencil"></i>
                                </button>
                                <button class="action-icon-btn icon-forklift" title="Unit Forklift">
                                    <i class="fa-solid fa-truck-ramp-box"></i>
                                </button>
                                <button class="action-icon-btn icon-delete" title="Hapus Customer" data-bs-toggle="modal" data-bs-target="#deleteCustomerModal">
                                    <i class="fa-solid fa-trash-can"></i>
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
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button class="action-icon-btn icon-edit" title="Edit Customer (Update)" data-bs-toggle="modal" data-bs-target="#editCustomerModal">
                                    <i class="fa-solid fa-pencil"></i>
                                </button>
                                <button class="action-icon-btn icon-forklift" title="Unit Forklift">
                                    <i class="fa-solid fa-truck-ramp-box"></i>
                                </button>
                                <button class="action-icon-btn icon-delete" title="Hapus Customer" data-bs-toggle="modal" data-bs-target="#deleteCustomerModal">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 8 -->
                    <tr>
                        <td class="fw-bold">TM-001</td>
                        <td class="fw-bold">PT. Jeon Grup</td>
                        <td>Medium Duty</td>
                        <td>26 – 08 – 03, 18.00</td>
                        <td>Admin Sales</td>
                        <td>
                            <span class="status-pill-badge aktif">Aktif</span>
                        </td>
                        <td>
                            <div class="action-icons-group">
                                <button class="action-icon-btn icon-view" title="Lihat Detail (Read-Only)" data-bs-toggle="modal" data-bs-target="#detailCustomerModal">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button class="action-icon-btn icon-edit" title="Edit Customer (Update)" data-bs-toggle="modal" data-bs-target="#editCustomerModal">
                                    <i class="fa-solid fa-pencil"></i>
                                </button>
                                <button class="action-icon-btn icon-forklift" title="Unit Forklift">
                                    <i class="fa-solid fa-truck-ramp-box"></i>
                                </button>
                                <button class="action-icon-btn icon-delete" title="Hapus Customer" data-bs-toggle="modal" data-bs-target="#deleteCustomerModal">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

<!-- =========================================================
     MODAL 1: Informasi Detail Customer (READ-ONLY)
     ========================================================= -->
<div class="modal fade" id="detailCustomerModal" tabindex="-1" aria-labelledby="detailCustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 840px;">
        <div class="modal-content modal-customer-content">
            <h4 class="modal-customer-title" id="detailCustomerModalLabel">Informasi Detail Customer</h4>

            <div class="row g-3 mb-3">
                <!-- Left Column (Customer Code, Name, Address) -->
                <div class="col-12 col-md-6">
                    <!-- Code & Name Box -->
                    <div class="customer-info-box mb-3">
                        <div class="customer-code-name-row">
                            <div>
                                <div class="info-sub-label">Code Customer</div>
                                <div class="info-val-large">TM-001</div>
                            </div>
                            <div class="box-vertical-divider"></div>
                            <div>
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
                                    <td><span class="status-pill-badge aktif" style="padding: 2px 10px; font-size: 0.7rem;">Aktif</span></td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">FL-101</td>
                                    <td>Toyota</td>
                                    <td>12345</td>
                                    <td>Diesel</td>
                                    <td>8 Ton</td>
                                    <td><span class="status-pill-badge aktif" style="padding: 2px 10px; font-size: 0.7rem;">Aktif</span></td>
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
                        <span>Created : 26 – 08 – 03, 18.00</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="info-pill-box">
                        <span>Input By : Administrator</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="info-pill-box">
                        <span>Status : <span class="status-text-highlight">Aktif</span></span>
                    </div>
                </div>
            </div>

            <!-- Action Button -->
            <div class="d-flex justify-content-end">
                <button type="button" class="btn-modal-back" data-bs-dismiss="modal">
                    Back
                </button>
            </div>
        </div>
    </div>
</div>

<!-- =========================================================
     MODAL 2: Edit Detail Customer (EDITABLE / UPDATE)
     ========================================================= -->
<div class="modal fade" id="editCustomerModal" tabindex="-1" aria-labelledby="editCustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 740px;">
        <div class="modal-content modal-customer-content">
            <h4 class="modal-customer-title" id="editCustomerModalLabel">Edit Detail Customer</h4>

            <form onsubmit="event.preventDefault();">
                <div class="row g-3">
                    <!-- Left Column -->
                    <div class="col-12 col-md-7">
                        <!-- Code & Name Box -->
                        <div class="customer-info-box mb-3">
                            <div class="customer-code-name-row">
                                <div>
                                    <div class="info-sub-label">Code Customer</div>
                                    <div class="info-val-large">TM-001</div>
                                </div>
                                <div class="box-vertical-divider"></div>
                                <div>
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

                    <!-- Right Column -->
                    <div class="col-12 col-md-5">
                        <!-- Tipe Operasi Select Box -->
                        <div class="select-box-wrapper mb-3">
                            <select class="custom-modal-select" id="editTipeOperasi">
                                <option value="Heavy Duty" selected>Heavy Duty</option>
                                <option value="Medium Duty">Medium Duty</option>
                                <option value="Low Duty">Low Duty</option>
                            </select>
                        </div>

                        <!-- Status Radio Card -->
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

                <!-- Action Buttons -->
                <div class="d-flex justify-content-end align-items-center gap-3 mt-4">
                    <button type="button" class="btn-modal-sync">
                        <i class="fa-solid fa-arrows-rotate"></i> Sinkronisasi
                    </button>
                    <button type="button" class="btn-modal-save" data-bs-dismiss="modal">
                        Simpan
                    </button>
                    <button type="button" class="btn-modal-back" data-bs-dismiss="modal">
                        Back
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- =========================================================
     MODAL 3: Add Customer
     ========================================================= -->
<div class="modal fade" id="addCustomerModal" tabindex="-1" aria-labelledby="addCustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 740px;">
        <div class="modal-content modal-customer-content">
            <h4 class="modal-customer-title" id="addCustomerModalLabel">Add Customer</h4>

            <form onsubmit="event.preventDefault();">
                <div class="row g-3">
                    <!-- Left Column -->
                    <div class="col-12 col-md-7">
                        <!-- Code & Name Box -->
                        <div class="customer-info-box mb-3">
                            <div class="customer-code-name-row">
                                <div>
                                    <div class="info-sub-label">Code Customer</div>
                                    <div class="info-val-large">TM-001</div>
                                </div>
                                <div class="box-vertical-divider"></div>
                                <div>
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

                    <!-- Right Column -->
                    <div class="col-12 col-md-5">
                        <!-- Tipe Operasi Select Box -->
                        <div class="select-box-wrapper mb-3">
                            <select class="custom-modal-select" id="addTipeOperasi">
                                <option value="Heavy Duty" selected>Heavy Duty</option>
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
                    <button type="button" class="btn-modal-sync">
                        <i class="fa-solid fa-arrows-rotate"></i> Sinkronisasi
                    </button>
                    <button type="button" class="btn-modal-save" data-bs-dismiss="modal">
                        Simpan
                    </button>
                    <button type="button" class="btn-modal-back" data-bs-dismiss="modal">
                        Back
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- =========================================================
     MODAL 4: Delete Confirmation Pop-up
     ========================================================= -->
<div class="modal fade" id="deleteCustomerModal" tabindex="-1" aria-labelledby="deleteCustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
        <div class="modal-content modal-delete-content">
            <h4 class="modal-delete-title" id="deleteCustomerModalLabel">Yakin ingin mengapus?</h4>
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

<?php
include_once __DIR__ . '/footer.php';
?>
