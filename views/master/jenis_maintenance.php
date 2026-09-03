<!-- views/master/jenis_maintenance.php - Master Data Jenis Maintenance View -->
<!-- MAIN CONTENT -->
<main class="dashboard-container">
    <!-- Page Title -->
    <h2 class="page-title">Jenis Maintenance</h2>

    <!-- Main Container Card -->
    <div class="unit-forklift-main-card">
        <!-- Search, Filters, and Add Button Bar -->
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-3">
            <div class="d-flex align-items-center flex-wrap gap-3">
                <!-- Search Input Pill -->
                <div class="unit-search-pill">
                    <span class="material-symbols-outlined">search</span>
                    <input type="text" placeholder="Cari Maintenance" id="searchJenisMaintInput" value="">
                </div>

                <!-- Dropdown Tipe Operasi -->
                <div class="dropdown">
                    <button class="unit-filter-dropdown-btn dropdown-toggle" type="button" id="filterTipeOperasi" data-bs-toggle="dropdown" aria-expanded="false">
                        <span>Tipe Operasi</span>
                        <span class="material-symbols-outlined" style="font-size: 1.1rem; color: #1E293B;">expand_more</span>
                    </button>
                    <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="filterTipeOperasi">
                        <li><a class="dropdown-item fw-bold" href="#">Semua Tipe Operasi</a></li>
                        <li><a class="dropdown-item" href="#">Low Duty</a></li>
                        <li><a class="dropdown-item" href="#">Medium Duty</a></li>
                        <li><a class="dropdown-item" href="#">High Duty</a></li>
                    </ul>
                </div>

                <!-- Dropdown Jenis -->
                <div class="dropdown">
                    <button class="unit-filter-dropdown-btn dropdown-toggle" type="button" id="filterJenis" data-bs-toggle="dropdown" aria-expanded="false">
                        <span>Jenis</span>
                        <span class="material-symbols-outlined" style="font-size: 1.1rem; color: #1E293B;">expand_more</span>
                    </button>
                    <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="filterJenis">
                        <li><a class="dropdown-item fw-bold" href="#">Semua Jenis</a></li>
                        <li><a class="dropdown-item" href="#">Umum</a></li>
                        <li><a class="dropdown-item" href="#">Khusus</a></li>
                    </ul>
                </div>

                <!-- Reset Filter Button -->
                <button type="button" class="btn-reset-filter" id="btnResetJenisMaint" onclick="document.getElementById('searchJenisMaintInput').value='';">
                    <span class="material-symbols-outlined">restart_alt</span>
                    <span>Reset</span>
                </button>
            </div>

            <!-- Add Jenis Maintenance Button -->
            <div>
                <button type="button" class="btn-assign-unit" data-bs-toggle="modal" data-bs-target="#addJenisMaintModal" style="background-color: #FBBA16; color: #111827;">
                    <span class="material-symbols-outlined" style="font-size: 1.2rem;">add</span>
                    <span>Jenis Maintenance</span>
                </button>
            </div>
        </div>

        <!-- Table Data -->
        <div class="unit-table-wrapper">
            <table class="unit-forklift-table-v2">
                <thead>
                    <tr>
                        <th style="width: 14%;">Maintenance</th>
                        <th style="width: 10%;">Interval HM</th>
                        <th style="width: 11%;">Interval Month</th>
                        <th style="width: 23%;">List Sparepart</th>
                        <th style="width: 11%;">Created</th>
                        <th style="width: 11%;">Input By</th>
                        <th style="width: 8%;">Jenis</th>
                        <th style="width: 9%;">Tipe Operasi</th>
                        <th style="width: 8%; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr>
                        <td class="fw-bold" style="color: #111827;">Overhaul</td>
                        <td>250 HM</td>
                        <td>1 Bulan</td>
                        <td>Filter Oli, Oli Mesin 15W40</td>
                        <td>24 – 8 – 2026</td>
                        <td>Kepala Toko</td>
                        <td>Khusus</td>
                        <td>Low Duty</td>
                        <td style="text-align: center;">
                            <div class="action-icons-group justify-content-center">
                                <button type="button" class="action-icon-btn" title="Edit Maintenance" data-bs-toggle="modal" data-bs-target="#editJenisMaintModal">
                                    <span class="material-symbols-outlined" style="font-size: 1.15rem; color: #94A3B8;">edit</span>
                                </button>
                                <button type="button" class="action-icon-btn" title="Hapus Maintenance" data-bs-toggle="modal" data-bs-target="#deleteJenisMaintModal">
                                    <span class="material-symbols-outlined" style="font-size: 1.15rem; color: #DC2626;">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 2 -->
                    <tr>
                        <td class="fw-bold" style="color: #111827;">Tune Up</td>
                        <td>500 HM</td>
                        <td>3 Bulan</td>
                        <td>Filter Oli, Oli Mesin</td>
                        <td>24 – 8 – 2026</td>
                        <td>Kepala Toko</td>
                        <td>Umum</td>
                        <td>Medium Duty</td>
                        <td style="text-align: center;">
                            <div class="action-icons-group justify-content-center">
                                <button type="button" class="action-icon-btn" title="Edit Maintenance" data-bs-toggle="modal" data-bs-target="#editJenisMaintModal">
                                    <span class="material-symbols-outlined" style="font-size: 1.15rem; color: #94A3B8;">edit</span>
                                </button>
                                <button type="button" class="action-icon-btn" title="Hapus Maintenance" data-bs-toggle="modal" data-bs-target="#deleteJenisMaintModal">
                                    <span class="material-symbols-outlined" style="font-size: 1.15rem; color: #DC2626;">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 3 -->
                    <tr>
                        <td class="fw-bold" style="color: #111827;">Tune Up</td>
                        <td>1000 HM</td>
                        <td>6 Bulan</td>
                        <td>Filter Oli, Filter Solar, Oli Hidrolik 46</td>
                        <td>24 – 8 – 2026</td>
                        <td>Kepala Toko</td>
                        <td>Khusus</td>
                        <td>Low Duty</td>
                        <td style="text-align: center;">
                            <div class="action-icons-group justify-content-center">
                                <button type="button" class="action-icon-btn" title="Edit Maintenance" data-bs-toggle="modal" data-bs-target="#editJenisMaintModal">
                                    <span class="material-symbols-outlined" style="font-size: 1.15rem; color: #94A3B8;">edit</span>
                                </button>
                                <button type="button" class="action-icon-btn" title="Hapus Maintenance" data-bs-toggle="modal" data-bs-target="#deleteJenisMaintModal">
                                    <span class="material-symbols-outlined" style="font-size: 1.15rem; color: #DC2626;">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 4 -->
                    <tr>
                        <td class="fw-bold" style="color: #111827;">Tune Up</td>
                        <td>250 HM</td>
                        <td>1 Bulan</td>
                        <td>Filter Oli, Oli Mesin 15W40</td>
                        <td>24 – 8 – 2026</td>
                        <td>Kepala Toko</td>
                        <td>Umum</td>
                        <td>Low Duty</td>
                        <td style="text-align: center;">
                            <div class="action-icons-group justify-content-center">
                                <button type="button" class="action-icon-btn" title="Edit Maintenance" data-bs-toggle="modal" data-bs-target="#editJenisMaintModal">
                                    <span class="material-symbols-outlined" style="font-size: 1.15rem; color: #94A3B8;">edit</span>
                                </button>
                                <button type="button" class="action-icon-btn" title="Hapus Maintenance" data-bs-toggle="modal" data-bs-target="#deleteJenisMaintModal">
                                    <span class="material-symbols-outlined" style="font-size: 1.15rem; color: #DC2626;">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 5 -->
                    <tr>
                        <td class="fw-bold" style="color: #111827;">Tune Up</td>
                        <td>250 HM</td>
                        <td>1 Bulan</td>
                        <td>Filter Oli, Oli Mesin 15W40</td>
                        <td>24 – 8 – 2026</td>
                        <td>Kepala Toko</td>
                        <td>Umum</td>
                        <td>Low Duty</td>
                        <td style="text-align: center;">
                            <div class="action-icons-group justify-content-center">
                                <button type="button" class="action-icon-btn" title="Edit Maintenance" data-bs-toggle="modal" data-bs-target="#editJenisMaintModal">
                                    <span class="material-symbols-outlined" style="font-size: 1.15rem; color: #94A3B8;">edit</span>
                                </button>
                                <button type="button" class="action-icon-btn" title="Hapus Maintenance" data-bs-toggle="modal" data-bs-target="#deleteJenisMaintModal">
                                    <span class="material-symbols-outlined" style="font-size: 1.15rem; color: #DC2626;">delete</span>
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
     MODAL 1: Jenis Maintenance Baru
     ========================================================= -->
<div class="modal fade" id="addJenisMaintModal" tabindex="-1" aria-labelledby="addJenisMaintModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 580px;">
        <div class="modal-content modal-user-content">
            <h4 class="modal-user-title" id="addJenisMaintModalLabel">Jenis Maintenance Baru</h4>

            <form onsubmit="event.preventDefault();">
                <!-- Nama Maintenance -->
                <div class="mb-3">
                    <label class="user-form-label">Nama Maintenance</label>
                    <input type="text" class="user-form-input" placeholder="">
                </div>

                <!-- Tipe Operasi & Jenis -->
                <div class="row g-3 mb-3">
                    <div class="col-6">
                        <label class="user-form-label">Tipe Operasi</label>
                        <input type="text" class="user-form-input" placeholder="">
                    </div>
                    <div class="col-6">
                        <label class="user-form-label">Jenis</label>
                        <select class="maint-form-select" id="addMaintJenisSelect" onchange="toggleUnitForkliftField('add')">
                            <option value="Umum">Umum</option>
                            <option value="Khusus">Khusus</option>
                        </select>
                    </div>
                </div>

                <!-- Interval HM & Interval Month -->
                <div class="row g-3 mb-3">
                    <div class="col-6">
                        <label class="user-form-label">Interval HM</label>
                        <div class="maint-hm-input-group">
                            <input type="number" placeholder="">
                            <span class="maint-hm-badge">HM</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="user-form-label">Interval Bulan</label>
                        <input type="text" class="user-form-input" placeholder="">
                    </div>
                </div>

                <!-- Unit Forklift (Khusus) -->
                <div class="mb-3" id="addUnitForkliftContainer" style="display: none;">
                    <label class="user-form-label">Unit Forklift</label>
                    <select class="maint-form-select">
                        <option value="Toyota 8FD30" selected>Toyota 8FD30</option>
                        <option value="Toyota FD50">Toyota FD50</option>
                        <option value="Mitsubishi FD30">Mitsubishi FD30</option>
                    </select>
                </div>

                <!-- List Sparepart yang diganti -->
                <div class="mb-4">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <label class="user-form-label mb-0">Daftar Sparepart yang Diganti</label>
                        <button type="button" class="btn-add-row" onclick="addSparepartRow('addSparepartContainer')">
                            <span class="material-symbols-outlined">add</span> Tambah Baris
                        </button>
                    </div>

                    <div id="addSparepartContainer">
                        <!-- Item 1 -->
                        <div class="sparepart-row-item">
                            <div class="sparepart-badge-num">1</div>
                            <input type="text" class="user-form-input" placeholder="Filter Oli">
                        </div>
                        <!-- Item 2 -->
                        <div class="sparepart-row-item">
                            <div class="sparepart-badge-num">2</div>
                            <input type="text" class="user-form-input" placeholder="Oli Mesin">
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="d-flex justify-content-end align-items-center gap-3 mt-4">
                    <button type="button" class="btn-user-batal" data-bs-dismiss="modal">
                        Batal
                    </button>
                    <button type="button" class="btn-maint-simpan" data-bs-dismiss="modal">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- =========================================================
     MODAL 2: Edit Maintenance
     ========================================================= -->
<div class="modal fade" id="editJenisMaintModal" tabindex="-1" aria-labelledby="editJenisMaintModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 580px;">
        <div class="modal-content modal-user-content">
            <h4 class="modal-user-title" id="editJenisMaintModalLabel">Edit Maintenance</h4>

            <form onsubmit="event.preventDefault();">
                <!-- Nama Maintenance -->
                <div class="mb-3">
                    <label class="user-form-label">Nama Maintenance</label>
                    <input type="text" class="user-form-input" value="Overhaul">
                </div>

                <!-- Tipe Operasi & Jenis -->
                <div class="row g-3 mb-3">
                    <div class="col-6">
                        <label class="user-form-label">Tipe Operasi</label>
                        <input type="text" class="user-form-input" value="Low Duty">
                    </div>
                    <div class="col-6">
                        <label class="user-form-label">Jenis</label>
                        <select class="maint-form-select" id="editMaintJenisSelect" onchange="toggleUnitForkliftField('edit')">
                            <option value="Umum">Umum</option>
                            <option value="Khusus" selected>Khusus</option>
                        </select>
                    </div>
                </div>

                <!-- Interval HM & Interval Month -->
                <div class="row g-3 mb-3">
                    <div class="col-6">
                        <label class="user-form-label">Interval HM</label>
                        <div class="maint-hm-input-group">
                            <input type="number" value="250">
                            <span class="maint-hm-badge">HM</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="user-form-label">Interval Bulan</label>
                        <input type="text" class="user-form-input" value="1 Bulan">
                    </div>
                </div>

                <!-- Unit Forklift (Khusus) -->
                <div class="mb-3" id="editUnitForkliftContainer">
                    <label class="user-form-label">Unit Forklift</label>
                    <select class="maint-form-select">
                        <option value="Toyota 8FD30" selected>Toyota 8FD30</option>
                        <option value="Toyota FD50">Toyota FD50</option>
                        <option value="Mitsubishi FD30">Mitsubishi FD30</option>
                    </select>
                </div>

                <!-- List Sparepart yang diganti -->
                <div class="mb-4">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <label class="user-form-label mb-0">Daftar Sparepart yang Diganti</label>
                        <button type="button" class="btn-add-row" onclick="addSparepartRow('editSparepartContainer')">
                            <span class="material-symbols-outlined">add</span> Tambah Baris
                        </button>
                    </div>

                    <div id="editSparepartContainer">
                        <!-- Item 1 -->
                        <div class="sparepart-row-item">
                            <div class="sparepart-badge-num">1</div>
                            <input type="text" class="user-form-input" placeholder="Filter Oli" value="Filter Oli">
                        </div>
                        <!-- Item 2 -->
                        <div class="sparepart-row-item">
                            <div class="sparepart-badge-num">2</div>
                            <input type="text" class="user-form-input" placeholder="Oli Mesin" value="Oli Mesin 15W40">
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="d-flex justify-content-end align-items-center gap-3 mt-4">
                    <button type="button" class="btn-user-batal" data-bs-dismiss="modal">
                        Batal
                    </button>
                    <button type="button" class="btn-maint-simpan" data-bs-dismiss="modal">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- =========================================================
     MODAL 3: Pop-up Delete Confirmation
     ========================================================= -->
<div class="modal fade" id="deleteJenisMaintModal" tabindex="-1" aria-labelledby="deleteJenisMaintModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 380px;">
        <div class="modal-content modal-delete-content" style="border-radius: 20px; border: none; padding: 24px 20px; text-align: center;">
            <h4 class="modal-delete-title" id="deleteJenisMaintModalLabel" style="font-weight: 800; font-size: 1.25rem; color: #111827; margin-bottom: 8px;">Yakin ingin menghapus?</h4>
            <p class="modal-delete-subtext" style="color: #64748B; font-size: 0.88rem; margin-bottom: 24px;">Data akan hilang permanen</p>

            <div class="d-flex justify-content-center align-items-center gap-3">
                <button type="button" class="btn-delete-cancel" data-bs-dismiss="modal" style="background-color: #FBBA16; color: #111827; font-weight: 700; font-size: 0.88rem; border-radius: 10px; padding: 8px 30px; border: none;">
                    Batal
                </button>
                <button type="button" class="btn-delete-confirm" data-bs-dismiss="modal" style="background-color: #EF4444; color: #FFFFFF; font-weight: 700; font-size: 0.88rem; border-radius: 10px; padding: 8px 30px; border: none;">
                    Yakin
                </button>
            </div>
        </div>
    </div>
</div>

<script>
function toggleUnitForkliftField(mode) {
    const select = document.getElementById(mode === 'add' ? 'addMaintJenisSelect' : 'editMaintJenisSelect');
    const container = document.getElementById(mode === 'add' ? 'addUnitForkliftContainer' : 'editUnitForkliftContainer');
    if (select && container) {
        container.style.display = select.value === 'Khusus' ? 'block' : 'none';
    }
}

function addSparepartRow(containerId) {
    const container = document.getElementById(containerId);
    if (!container) return;
    const currentCount = container.children.length + 1;
    
    const row = document.createElement('div');
    row.className = 'sparepart-row-item';
    row.innerHTML = `
        <div class="sparepart-badge-num">${currentCount}</div>
        <input type="text" class="user-form-input" placeholder="Nama sparepart">
    `;
    container.appendChild(row);
}
</script>
