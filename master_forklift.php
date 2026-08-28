<?php
// master_forklift.php - Master Data Forklift FMR
include_once __DIR__ . '/header.php';
?>

<!-- MAIN FORKLIFT CONTENT -->
<main class="dashboard-container">
    <!-- Page Title -->
    <h2 class="page-title">Forklift</h2>

    <!-- Search, Filters, and Add Button Bar -->
    <div class="customer-filter-bar">
        <!-- Search Input -->
        <div class="search-input-pill">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Search" id="searchForkliftInput">
        </div>

        <div class="d-flex align-items-center gap-3 flex-wrap">
            <!-- Filter: Semua Dropdown -->
            <div class="dropdown">
                <button class="filter-dropdown-btn dropdown-toggle" type="button" id="filterForklift" data-bs-toggle="dropdown" aria-expanded="false" style="min-width: 140px; justify-content: space-between;">
                    <span>Semua</span>
                    <i class="fa-solid fa-chevron-down ms-1" style="font-size: 0.75rem;"></i>
                </button>
                <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="filterForklift">
                    <li><a class="dropdown-item active" href="#">Semua</a></li>
                    <li><a class="dropdown-item" href="#">Toyota</a></li>
                    <li><a class="dropdown-item" href="#">Mitsubishi</a></li>
                    <li><a class="dropdown-item" href="#">Komatsu</a></li>
                </ul>
            </div>

            <!-- Add Unit Button -->
            <button type="button" class="btn-add-customer" data-bs-toggle="modal" data-bs-target="#addForkliftModal">
                <i class="fa-solid fa-plus"></i> Unit
            </button>
        </div>
    </div>

    <!-- Forklift Data Table Card -->
    <div class="forklift-table-card">
        <div class="table-responsive">
            <table class="table forklift-table">
                <thead>
                    <tr>
                        <th style="width: 22%;">Nama Forklift</th>
                        <th style="width: 16%;">Type</th>
                        <th style="width: 16%;">Engine</th>
                        <th style="width: 16%;">Created</th>
                        <th style="width: 16%;">Input By</th>
                        <th style="width: 14%; text-align: center;">Status</th>
                        <th style="width: 10%; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr>
                        <td>Toyota</td>
                        <td>8FD30</td>
                        <td>4Y</td>
                        <td>24 – 8 – 2026</td>
                        <td>Kepala Toko</td>
                        <td class="text-center">
                            <span class="badge-status-green">Aktif</span>
                        </td>
                        <td class="text-center">
                            <div class="action-icons-group justify-content-center">
                                <button class="action-icon-btn icon-edit" title="Edit Unit" data-bs-toggle="modal" data-bs-target="#editForkliftModal">
                                    <i class="fa-solid fa-pencil"></i>
                                </button>
                                <button class="action-icon-btn icon-delete" title="Hapus Unit" data-bs-toggle="modal" data-bs-target="#deleteForkliftModal">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 2 -->
                    <tr>
                        <td>Mitsubishi</td>
                        <td>FD25N</td>
                        <td>S4S</td>
                        <td>24 – 8 – 2026</td>
                        <td>Kepala Toko</td>
                        <td class="text-center">
                            <span class="badge-status-green">Aktif</span>
                        </td>
                        <td class="text-center">
                            <div class="action-icons-group justify-content-center">
                                <button class="action-icon-btn icon-edit" title="Edit Unit" data-bs-toggle="modal" data-bs-target="#editForkliftModal">
                                    <i class="fa-solid fa-pencil"></i>
                                </button>
                                <button class="action-icon-btn icon-delete" title="Hapus Unit" data-bs-toggle="modal" data-bs-target="#deleteForkliftModal">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 3 -->
                    <tr>
                        <td>Komatsu</td>
                        <td>FG25N</td>
                        <td>K21</td>
                        <td>24 – 8 – 2026</td>
                        <td>Kepala Toko</td>
                        <td class="text-center">
                            <span class="badge-status-green">Aktif</span>
                        </td>
                        <td class="text-center">
                            <div class="action-icons-group justify-content-center">
                                <button class="action-icon-btn icon-edit" title="Edit Unit" data-bs-toggle="modal" data-bs-target="#editForkliftModal">
                                    <i class="fa-solid fa-pencil"></i>
                                </button>
                                <button class="action-icon-btn icon-delete" title="Hapus Unit" data-bs-toggle="modal" data-bs-target="#deleteForkliftModal">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 4 -->
                    <tr>
                        <td>Komatsu</td>
                        <td>FD25T-17</td>
                        <td>4D94E</td>
                        <td>24 – 8 – 2026</td>
                        <td>Kepala Toko</td>
                        <td class="text-center">
                            <span class="badge-status-green">Aktif</span>
                        </td>
                        <td class="text-center">
                            <div class="action-icons-group justify-content-center">
                                <button class="action-icon-btn icon-edit" title="Edit Unit" data-bs-toggle="modal" data-bs-target="#editForkliftModal">
                                    <i class="fa-solid fa-pencil"></i>
                                </button>
                                <button class="action-icon-btn icon-delete" title="Hapus Unit" data-bs-toggle="modal" data-bs-target="#deleteForkliftModal">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 5 -->
                    <tr>
                        <td>Toyota</td>
                        <td>8FD15</td>
                        <td>1DZ-II</td>
                        <td>24 – 8 – 2026</td>
                        <td>Kepala Toko</td>
                        <td class="text-center">
                            <span class="badge-status-green">Aktif</span>
                        </td>
                        <td class="text-center">
                            <div class="action-icons-group justify-content-center">
                                <button class="action-icon-btn icon-edit" title="Edit Unit" data-bs-toggle="modal" data-bs-target="#editForkliftModal">
                                    <i class="fa-solid fa-pencil"></i>
                                </button>
                                <button class="action-icon-btn icon-delete" title="Hapus Unit" data-bs-toggle="modal" data-bs-target="#deleteForkliftModal">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 6 -->
                    <tr>
                        <td>Toyota</td>
                        <td>8FD25</td>
                        <td>1DZ-II</td>
                        <td>24 – 8 – 2026</td>
                        <td>Kepala Toko</td>
                        <td class="text-center">
                            <span class="badge-status-green">Aktif</span>
                        </td>
                        <td class="text-center">
                            <div class="action-icons-group justify-content-center">
                                <button class="action-icon-btn icon-edit" title="Edit Unit" data-bs-toggle="modal" data-bs-target="#editForkliftModal">
                                    <i class="fa-solid fa-pencil"></i>
                                </button>
                                <button class="action-icon-btn icon-delete" title="Hapus Unit" data-bs-toggle="modal" data-bs-target="#deleteForkliftModal">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 7 -->
                    <tr>
                        <td>Toyota</td>
                        <td>8FD35</td>
                        <td>3Z</td>
                        <td>24 – 8 – 2026</td>
                        <td>Kepala Toko</td>
                        <td class="text-center">
                            <span class="badge-status-green">Aktif</span>
                        </td>
                        <td class="text-center">
                            <div class="action-icons-group justify-content-center">
                                <button class="action-icon-btn icon-edit" title="Edit Unit" data-bs-toggle="modal" data-bs-target="#editForkliftModal">
                                    <i class="fa-solid fa-pencil"></i>
                                </button>
                                <button class="action-icon-btn icon-delete" title="Hapus Unit" data-bs-toggle="modal" data-bs-target="#deleteForkliftModal">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 8 -->
                    <tr>
                        <td>Toyota</td>
                        <td>FD50</td>
                        <td>14Z-II</td>
                        <td>24 – 8 – 2026</td>
                        <td>Kepala Toko</td>
                        <td class="text-center">
                            <span class="badge-status-green">Aktif</span>
                        </td>
                        <td class="text-center">
                            <div class="action-icons-group justify-content-center">
                                <button class="action-icon-btn icon-edit" title="Edit Unit" data-bs-toggle="modal" data-bs-target="#editForkliftModal">
                                    <i class="fa-solid fa-pencil"></i>
                                </button>
                                <button class="action-icon-btn icon-delete" title="Hapus Unit" data-bs-toggle="modal" data-bs-target="#deleteForkliftModal">
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
     MODAL 1: Tambah Unit
     ========================================================= -->
<div class="modal fade" id="addForkliftModal" tabindex="-1" aria-labelledby="addForkliftModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 540px;">
        <div class="modal-content modal-forklift-content">
            <h4 class="modal-forklift-title" id="addForkliftModalLabel">Tambah Unit</h4>

            <form onsubmit="event.preventDefault();">
                <div class="row g-3 mb-3">
                    <!-- Unit Field -->
                    <div class="col-6">
                        <label for="addUnitCode" class="forklift-form-label">Unit</label>
                        <input type="text" class="forklift-form-input" id="addUnitCode">
                    </div>

                    <!-- Nama Forklift Field -->
                    <div class="col-6">
                        <label for="addNamaForklift" class="forklift-form-label">Nama Forklift</label>
                        <input type="text" class="forklift-form-input" id="addNamaForklift">
                    </div>

                    <!-- Type Field -->
                    <div class="col-6">
                        <label for="addType" class="forklift-form-label">Type</label>
                        <input type="text" class="forklift-form-input" id="addType">
                    </div>

                    <!-- Engine Field -->
                    <div class="col-6">
                        <label for="addEngine" class="forklift-form-label">Engine</label>
                        <input type="text" class="forklift-form-input" id="addEngine">
                    </div>
                </div>

                <!-- Status Radio Group -->
                <div class="mb-4">
                    <label class="forklift-form-label">Status</label>
                    <div class="d-flex align-items-center gap-4">
                        <label class="custom-radio-item">
                            <input type="radio" name="addForkliftStatus" value="Aktif" checked>
                            <span>Aktif</span>
                        </label>
                        <label class="custom-radio-item">
                            <input type="radio" name="addForkliftStatus" value="Non-Aktif">
                            <span>Non-Aktif</span>
                        </label>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn-forklift-save" data-bs-dismiss="modal">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- =========================================================
     MODAL 2: Edit Unit
     ========================================================= -->
<div class="modal fade" id="editForkliftModal" tabindex="-1" aria-labelledby="editForkliftModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 540px;">
        <div class="modal-content modal-forklift-content">
            <h4 class="modal-forklift-title" id="editForkliftModalLabel">Edit Unit</h4>

            <form onsubmit="event.preventDefault();">
                <div class="row g-3 mb-3">
                    <!-- Unit Field -->
                    <div class="col-6">
                        <label for="editUnitCode" class="forklift-form-label">Unit</label>
                        <input type="text" class="forklift-form-input" id="editUnitCode" value="FL-101">
                    </div>

                    <!-- Nama Forklift Field -->
                    <div class="col-6">
                        <label for="editNamaForklift" class="forklift-form-label">Nama Forklift</label>
                        <input type="text" class="forklift-form-input" id="editNamaForklift" value="Toyota">
                    </div>

                    <!-- Type Field -->
                    <div class="col-6">
                        <label for="editType" class="forklift-form-label">Type</label>
                        <input type="text" class="forklift-form-input" id="editType" value="8FD30">
                    </div>

                    <!-- Engine Field -->
                    <div class="col-6">
                        <label for="editEngine" class="forklift-form-label">Engine</label>
                        <input type="text" class="forklift-form-input" id="editEngine" value="4Y">
                    </div>
                </div>

                <!-- Status Radio Group -->
                <div class="mb-4">
                    <label class="forklift-form-label">Status</label>
                    <div class="d-flex align-items-center gap-4">
                        <label class="custom-radio-item">
                            <input type="radio" name="editForkliftStatus" value="Aktif" checked>
                            <span>Aktif</span>
                        </label>
                        <label class="custom-radio-item">
                            <input type="radio" name="editForkliftStatus" value="Non-Aktif">
                            <span>Non-Aktif</span>
                        </label>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn-forklift-save" data-bs-dismiss="modal">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- =========================================================
     MODAL 3: Delete Confirmation Pop-up
     ========================================================= -->
<div class="modal fade" id="deleteForkliftModal" tabindex="-1" aria-labelledby="deleteForkliftModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
        <div class="modal-content modal-delete-content">
            <h4 class="modal-delete-title" id="deleteForkliftModalLabel">Yakin ingin mengapus?</h4>
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
