<!-- views/master/forklift.php - Master Data Forklift View -->
<!-- MAIN FORKLIFT CONTENT -->
<main class="dashboard-container">
    <!-- Page Title -->
    <h2 class="page-title">Forklift</h2>

    <!-- Main Container Card -->
    <div class="unit-forklift-main-card">
        <!-- Search, Filters, and Add Button Bar -->
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-3">
            <div class="d-flex align-items-center flex-wrap gap-3">
                <!-- Search Input -->
                <div class="unit-search-pill">
                    <span class="material-symbols-outlined">search</span>
                    <input type="text" placeholder="Cari Forklift" id="searchForkliftInput">
                </div>

                <!-- Filter: Merek Dropdown -->
                <div class="dropdown">
                    <button class="unit-filter-dropdown-btn dropdown-toggle" type="button" id="filterForklift" data-bs-toggle="dropdown" aria-expanded="false">
                        <span id="selectedMerekText">Semua</span>
                        <span class="material-symbols-outlined" style="font-size: 1.1rem; color: #1E293B;">expand_more</span>
                    </button>
                    <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="filterForklift">
                        <li><a class="dropdown-item active" href="#" data-merek="semua">Semua</a></li>
                        <li><a class="dropdown-item" href="#" data-merek="Toyota">Toyota</a></li>
                        <li><a class="dropdown-item" href="#" data-merek="Mitsubishi">Mitsubishi</a></li>
                        <li><a class="dropdown-item" href="#" data-merek="Komatsu">Komatsu</a></li>
                        <li><a class="dropdown-item" href="#" data-merek="Doosan">Doosan</a></li>
                        <li><a class="dropdown-item" href="#" data-merek="TCM">TCM</a></li>
                    </ul>
                </div>

                <!-- Filter: Tipe Operasi -->
                <div class="dropdown">
                    <button class="unit-filter-dropdown-btn dropdown-toggle" type="button" id="filterTipeOperasi" data-bs-toggle="dropdown" aria-expanded="false">
                        <span id="selectedTipeOperasiText">Tipe Operasi</span>
                        <span class="material-symbols-outlined" style="font-size: 1.1rem; color: #1E293B;">expand_more</span>
                    </button>
                    <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="filterTipeOperasi">
                        <li><a class="dropdown-item active" href="#" data-tipe="semua">Semua Tipe Operasi</a></li>
                        <li><a class="dropdown-item" href="#" data-tipe="Heavy Duty">Heavy Duty</a></li>
                        <li><a class="dropdown-item" href="#" data-tipe="Medium Duty">Medium Duty</a></li>
                        <li><a class="dropdown-item" href="#" data-tipe="Low Duty">Low Duty</a></li>
                    </ul>
                </div>

                <!-- Reset Button -->
                <button type="button" class="btn-reset-filter" id="btnResetForklift">
                    <span class="material-symbols-outlined">restart_alt</span>
                    <span>Reset</span>
                </button>
            </div>

            <!-- Add Forklift Button -->
            <div>
                <button type="button" class="btn-assign-unit" data-bs-toggle="modal" data-bs-target="#addForkliftModal" style="background-color: #FBBA16; color: #111827;">
                    <span class="material-symbols-outlined" style="font-size: 1.2rem;">add</span>
                    <span>Tambah Forklift</span>
                </button>
            </div>
        </div>

        <!-- Forklift Data Table Card -->
        <div class="unit-table-wrapper">
            <table class="unit-forklift-table-v2">
                <thead>
                    <tr>
                        <th style="width: 18%;">Nama Forklift</th>
                        <th style="width: 13%;">Tipe</th>
                        <th style="width: 13%;">Engine</th>
                        <th style="width: 14%;">Tipe Operasi</th>
                        <th style="width: 14%;">Waktu Dibuat</th>
                        <th style="width: 14%;">Dibuat Oleh</th>
                        <th style="width: 8%; text-align: center;">Status</th>
                        <th style="width: 6%; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr data-merek="Toyota" data-tipe-operasi="Heavy Duty">
                        <td style="color: #111827; font-weight: 600;">Toyota</td>
                        <td>8FD30</td>
                        <td>4Y</td>
                        <td><span style="color: #334155; font-weight: 500;">Heavy Duty</span></td>
                        <td>24 – 8 – 2026</td>
                        <td>Kepala Toko</td>
                        <td class="text-center">
                            <span class="badge-status-green">Aktif</span>
                        </td>
                        <td class="text-center">
                            <div class="action-icons-group justify-content-center">
                                <button type="button" class="action-icon-btn icon-edit" title="Edit Forklift" data-bs-toggle="modal" data-bs-target="#editForkliftModal">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <button type="button" class="action-icon-btn icon-delete" title="Hapus Forklift" data-bs-toggle="modal" data-bs-target="#deleteForkliftModal">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 2 -->
                    <tr data-merek="Mitsubishi" data-tipe-operasi="Medium Duty">
                        <td style="color: #111827; font-weight: 600;">Mitsubishi</td>
                        <td>FD25N</td>
                        <td>S4S</td>
                        <td><span style="color: #334155; font-weight: 500;">Medium Duty</span></td>
                        <td>24 – 8 – 2026</td>
                        <td>Kepala Toko</td>
                        <td class="text-center">
                            <span class="badge-status-green">Aktif</span>
                        </td>
                        <td class="text-center">
                            <div class="action-icons-group justify-content-center">
                                <button type="button" class="action-icon-btn icon-edit" title="Edit Forklift" data-bs-toggle="modal" data-bs-target="#editForkliftModal">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <button type="button" class="action-icon-btn icon-delete" title="Hapus Forklift" data-bs-toggle="modal" data-bs-target="#deleteForkliftModal">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 3 -->
                    <tr data-merek="Komatsu" data-tipe-operasi="Low Duty">
                        <td style="color: #111827; font-weight: 600;">Komatsu</td>
                        <td>FG25N</td>
                        <td>K21</td>
                        <td><span style="color: #334155; font-weight: 500;">Low Duty</span></td>
                        <td>24 – 8 – 2026</td>
                        <td>Kepala Toko</td>
                        <td class="text-center">
                            <span class="badge-status-green">Aktif</span>
                        </td>
                        <td class="text-center">
                            <div class="action-icons-group justify-content-center">
                                <button type="button" class="action-icon-btn icon-edit" title="Edit Forklift" data-bs-toggle="modal" data-bs-target="#editForkliftModal">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <button type="button" class="action-icon-btn icon-delete" title="Hapus Forklift" data-bs-toggle="modal" data-bs-target="#deleteForkliftModal">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 4 -->
                    <tr data-merek="Komatsu" data-tipe-operasi="Heavy Duty">
                        <td style="color: #111827; font-weight: 600;">Komatsu</td>
                        <td>FD25T-17</td>
                        <td>4D94E</td>
                        <td><span style="color: #334155; font-weight: 500;">Heavy Duty</span></td>
                        <td>24 – 8 – 2026</td>
                        <td>Kepala Toko</td>
                        <td class="text-center">
                            <span class="badge-status-green">Aktif</span>
                        </td>
                        <td class="text-center">
                            <div class="action-icons-group justify-content-center">
                                <button type="button" class="action-icon-btn icon-edit" title="Edit Forklift" data-bs-toggle="modal" data-bs-target="#editForkliftModal">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <button type="button" class="action-icon-btn icon-delete" title="Hapus Forklift" data-bs-toggle="modal" data-bs-target="#deleteForkliftModal">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 5 -->
                    <tr data-merek="Toyota" data-tipe-operasi="Low Duty">
                        <td style="color: #111827; font-weight: 600;">Toyota</td>
                        <td>8FD15</td>
                        <td>1DZ-II</td>
                        <td><span style="color: #334155; font-weight: 500;">Low Duty</span></td>
                        <td>24 – 8 – 2026</td>
                        <td>Kepala Toko</td>
                        <td class="text-center">
                            <span class="badge-status-green">Aktif</span>
                        </td>
                        <td class="text-center">
                            <div class="action-icons-group justify-content-center">
                                <button type="button" class="action-icon-btn icon-edit" title="Edit Forklift" data-bs-toggle="modal" data-bs-target="#editForkliftModal">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <button type="button" class="action-icon-btn icon-delete" title="Hapus Forklift" data-bs-toggle="modal" data-bs-target="#deleteForkliftModal">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 6 -->
                    <tr data-merek="Toyota" data-tipe-operasi="Heavy Duty">
                        <td style="color: #111827; font-weight: 600;">Toyota</td>
                        <td>8FD35</td>
                        <td>3Z</td>
                        <td><span style="color: #334155; font-weight: 500;">Heavy Duty</span></td>
                        <td>24 – 8 – 2026</td>
                        <td>Kepala Toko</td>
                        <td class="text-center">
                            <span class="badge-status-green">Aktif</span>
                        </td>
                        <td class="text-center">
                            <div class="action-icons-group justify-content-center">
                                <button type="button" class="action-icon-btn icon-edit" title="Edit Forklift" data-bs-toggle="modal" data-bs-target="#editForkliftModal">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <button type="button" class="action-icon-btn icon-delete" title="Hapus Forklift" data-bs-toggle="modal" data-bs-target="#deleteForkliftModal">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 7 -->
                    <tr data-merek="Toyota" data-tipe-operasi="Heavy Duty">
                        <td style="color: #111827; font-weight: 600;">Toyota</td>
                        <td>FD50</td>
                        <td>14Z-II</td>
                        <td><span style="color: #334155; font-weight: 500;">Heavy Duty</span></td>
                        <td>24 – 8 – 2026</td>
                        <td>Kepala Toko</td>
                        <td class="text-center">
                            <span class="badge-status-green">Aktif</span>
                        </td>
                        <td class="text-center">
                            <div class="action-icons-group justify-content-center">
                                <button type="button" class="action-icon-btn icon-edit" title="Edit Forklift" data-bs-toggle="modal" data-bs-target="#editForkliftModal">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <button type="button" class="action-icon-btn icon-delete" title="Hapus Forklift" data-bs-toggle="modal" data-bs-target="#deleteForkliftModal">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 8 -->
                    <tr data-merek="Komatsu" data-tipe-operasi="Medium Duty">
                        <td style="color: #111827; font-weight: 600;">Komatsu</td>
                        <td>FD30T-17</td>
                        <td>4D94LE</td>
                        <td><span style="color: #334155; font-weight: 500;">Medium Duty</span></td>
                        <td>25 – 8 – 2026</td>
                        <td>Admin Sales</td>
                        <td class="text-center">
                            <span class="badge-status-green">Aktif</span>
                        </td>
                        <td class="text-center">
                            <div class="action-icons-group justify-content-center">
                                <button type="button" class="action-icon-btn icon-edit" title="Edit Forklift" data-bs-toggle="modal" data-bs-target="#editForkliftModal">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <button type="button" class="action-icon-btn icon-delete" title="Hapus Forklift" data-bs-toggle="modal" data-bs-target="#deleteForkliftModal">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 9 -->
                    <tr data-merek="Doosan" data-tipe-operasi="Medium Duty">
                        <td style="color: #111827; font-weight: 600;">Doosan</td>
                        <td>D30S-5</td>
                        <td>G424I</td>
                        <td><span style="color: #334155; font-weight: 500;">Medium Duty</span></td>
                        <td>26 – 8 – 2026</td>
                        <td>Kepala Toko</td>
                        <td class="text-center">
                            <span class="badge-status-green">Aktif</span>
                        </td>
                        <td class="text-center">
                            <div class="action-icons-group justify-content-center">
                                <button type="button" class="action-icon-btn icon-edit" title="Edit Forklift" data-bs-toggle="modal" data-bs-target="#editForkliftModal">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <button type="button" class="action-icon-btn icon-delete" title="Hapus Forklift" data-bs-toggle="modal" data-bs-target="#deleteForkliftModal">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 10 -->
                    <tr data-merek="Mitsubishi" data-tipe-operasi="Heavy Duty">
                        <td style="color: #111827; font-weight: 600;">Mitsubishi</td>
                        <td>FD35</td>
                        <td>S4S</td>
                        <td><span style="color: #334155; font-weight: 500;">Heavy Duty</span></td>
                        <td>27 – 8 – 2026</td>
                        <td>Admin Sales</td>
                        <td class="text-center">
                            <span class="badge-status-gray">Nonaktif</span>
                        </td>
                        <td class="text-center">
                            <div class="action-icons-group justify-content-center">
                                <button type="button" class="action-icon-btn icon-edit" title="Edit Forklift" data-bs-toggle="modal" data-bs-target="#editForkliftModal">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <button type="button" class="action-icon-btn icon-delete" title="Hapus Forklift" data-bs-toggle="modal" data-bs-target="#deleteForkliftModal">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 11 -->
                    <tr data-merek="TCM" data-tipe-operasi="Medium Duty">
                        <td style="color: #111827; font-weight: 600;">TCM</td>
                        <td>FD30T3Z</td>
                        <td>Isuzu C240</td>
                        <td><span style="color: #334155; font-weight: 500;">Medium Duty</span></td>
                        <td>28 – 8 – 2026</td>
                        <td>Kepala Toko</td>
                        <td class="text-center">
                            <span class="badge-status-green">Aktif</span>
                        </td>
                        <td class="text-center">
                            <div class="action-icons-group justify-content-center">
                                <button type="button" class="action-icon-btn icon-edit" title="Edit Forklift" data-bs-toggle="modal" data-bs-target="#editForkliftModal">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <button type="button" class="action-icon-btn icon-delete" title="Hapus Forklift" data-bs-toggle="modal" data-bs-target="#deleteForkliftModal">
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
     MODAL 1: Add Forklift
     ========================================================= -->
<div class="modal fade" id="addForkliftModal" tabindex="-1" aria-labelledby="addForkliftModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 520px;">
        <div class="modal-content modal-user-content">
            <h4 class="modal-user-title" id="addForkliftModalLabel">Tambah Forklift</h4>

            <form onsubmit="event.preventDefault();">
                <div class="row g-3 mb-3">
                    <!-- Nama Forklift Field -->
                    <div class="col-6">
                        <label for="addNamaForklift" class="user-form-label">Nama Forklift</label>
                        <input type="text" class="user-form-input" id="addNamaForklift" placeholder="Contoh: Toyota">
                    </div>

                    <!-- Engine Field -->
                    <div class="col-6">
                        <label for="addEngine" class="user-form-label">Engine</label>
                        <input type="text" class="user-form-input" id="addEngine" placeholder="Contoh: 4Y">
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <!-- Tipe Field -->
                    <div class="col-6">
                        <label for="addType" class="user-form-label">Tipe</label>
                        <input type="text" class="user-form-input" id="addType" placeholder="Contoh: 8FD30">
                    </div>

                    <!-- Tipe Operasi Field -->
                    <div class="col-6">
                        <label for="addTipeOperasi" class="user-form-label">Tipe Operasi</label>
                        <select class="user-form-input" id="addTipeOperasi" style="padding: 0 16px; cursor: pointer;">
                            <option value="Heavy Duty" selected>Heavy Duty</option>
                            <option value="Medium Duty">Medium Duty</option>
                            <option value="Low Duty">Low Duty</option>
                        </select>
                    </div>
                </div>

                <div class="row g-3 mb-4">
                    <!-- Status Checkbox -->
                    <div class="col-12">
                        <label class="user-form-label">Status</label>
                        <div class="mt-2">
                            <label class="custom-checkbox-item">
                                <input type="checkbox" id="addForkliftStatus" checked>
                                <span>Aktif</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="d-flex justify-content-end align-items-center gap-3">
                    <button type="button" class="btn-user-batal" data-bs-dismiss="modal">
                        Batal
                    </button>
                    <button type="button" class="btn-forklift-save" data-bs-dismiss="modal">
                        Simpan Unit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- =========================================================
     MODAL 2: Edit Forklift
     ========================================================= -->
<div class="modal fade" id="editForkliftModal" tabindex="-1" aria-labelledby="editForkliftModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 520px;">
        <div class="modal-content modal-user-content">
            <h4 class="modal-user-title" id="editForkliftModalLabel">Ubah Forklift</h4>

            <form onsubmit="event.preventDefault();">
                <div class="row g-3 mb-3">
                    <!-- Nama Forklift Field -->
                    <div class="col-6">
                        <label for="editNamaForklift" class="user-form-label">Nama Forklift</label>
                        <input type="text" class="user-form-input" id="editNamaForklift" value="Toyota">
                    </div>

                    <!-- Engine Field -->
                    <div class="col-6">
                        <label for="editEngine" class="user-form-label">Engine</label>
                        <input type="text" class="user-form-input" id="editEngine" value="4Y">
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <!-- Tipe Field -->
                    <div class="col-6">
                        <label for="editType" class="user-form-label">Tipe</label>
                        <input type="text" class="user-form-input" id="editType" value="8FD30">
                    </div>

                    <!-- Tipe Operasi Field -->
                    <div class="col-6">
                        <label for="editTipeOperasi" class="user-form-label">Tipe Operasi</label>
                        <select class="user-form-input" id="editTipeOperasi" style="padding: 0 16px; cursor: pointer;">
                            <option value="Heavy Duty" selected>Heavy Duty</option>
                            <option value="Medium Duty">Medium Duty</option>
                            <option value="Low Duty">Low Duty</option>
                        </select>
                    </div>
                </div>

                <div class="row g-3 mb-4">
                    <!-- Status Checkbox -->
                    <div class="col-12">
                        <label class="user-form-label">Status</label>
                        <div class="mt-2">
                            <label class="custom-checkbox-item">
                                <input type="checkbox" id="editForkliftStatus" checked>
                                <span>Aktif</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="d-flex justify-content-end align-items-center gap-3">
                    <button type="button" class="btn-user-batal" data-bs-dismiss="modal">
                        Batal
                    </button>
                    <button type="button" class="btn-forklift-save" data-bs-dismiss="modal">
                        Simpan Unit
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
            <h4 class="modal-delete-title" id="deleteForkliftModalLabel">Yakin ingin menghapus?</h4>
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
    const searchInput = document.getElementById('searchForkliftInput');
    const merekItems = document.querySelectorAll('#filterForklift + .dropdown-menu .dropdown-item');
    const tipeItems = document.querySelectorAll('#filterTipeOperasi + .dropdown-menu .dropdown-item');
    const selectedMerekText = document.getElementById('selectedMerekText');
    const selectedTipeText = document.getElementById('selectedTipeOperasiText');
    const btnReset = document.getElementById('btnResetForklift');
    const rows = document.querySelectorAll('.unit-forklift-table-v2 tbody tr');

    let currentMerek = 'semua';
    let currentTipe = 'semua';

    function filterTable() {
        const query = searchInput ? searchInput.value.toLowerCase().trim() : '';
        rows.forEach(row => {
            const merek = (row.dataset.merek || '').toLowerCase();
            const tipe = (row.dataset.tipeOperasi || '').toLowerCase();
            const textContent = row.textContent.toLowerCase();

            const matchSearch = !query || textContent.includes(query);
            const matchMerek = (currentMerek === 'semua') || (merek === currentMerek.toLowerCase());
            const matchTipe = (currentTipe === 'semua') || (tipe === currentTipe.toLowerCase());

            if (matchSearch && matchMerek && matchTipe) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }

    if (searchInput) {
        searchInput.addEventListener('input', filterTable);
    }

    merekItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            merekItems.forEach(i => i.classList.remove('active'));
            this.classList.add('active');
            currentMerek = this.dataset.merek || this.textContent.trim();
            if (selectedMerekText) selectedMerekText.textContent = this.textContent.trim();
            filterTable();
        });
    });

    tipeItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            tipeItems.forEach(i => i.classList.remove('active'));
            this.classList.add('active');
            currentTipe = this.dataset.tipe || this.textContent.trim();
            if (selectedTipeText) selectedTipeText.textContent = this.textContent.trim() === 'Semua Tipe Operasi' ? 'Tipe Operasi' : this.textContent.trim();
            filterTable();
        });
    });

    if (btnReset) {
        btnReset.addEventListener('click', function() {
            if (searchInput) searchInput.value = '';
            currentMerek = 'semua';
            currentTipe = 'semua';
            if (selectedMerekText) selectedMerekText.textContent = 'Semua';
            if (selectedTipeText) selectedTipeText.textContent = 'Tipe Operasi';
            merekItems.forEach(i => i.classList.toggle('active', i.dataset.merek === 'semua'));
            tipeItems.forEach(i => i.classList.toggle('active', i.dataset.tipe === 'semua'));
            filterTable();
        });
    }
});
</script>
