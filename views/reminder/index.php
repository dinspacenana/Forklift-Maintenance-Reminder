<!-- views/reminder/index.php - Reminder View -->
<!-- MAIN REMINDER CONTENT -->
<main class="dashboard-container">
    <!-- Page Title -->
    <h2 class="page-title">Reminder</h2>

    <!-- Main Container Card -->
    <div class="unit-forklift-main-card">
        
        <!-- Search, Filters, and Reset Button Bar -->
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-3">
            <div class="d-flex align-items-center flex-wrap gap-3">
                <!-- Search Input -->
                <div class="unit-search-pill">
                    <span class="material-symbols-outlined">search</span>
                    <input type="text" placeholder="Masukkan Customer / Unit" id="searchReminderInput">
                </div>

                <!-- Date Range Picker -->
                <div class="d-flex align-items-center gap-2">
                    <div class="date-filter-pill-box">
                        <input type="text" value="01/08/2026" readonly>
                        <span class="material-symbols-outlined">calendar_today</span>
                    </div>
                    <span class="date-range-separator">-</span>
                    <div class="date-filter-pill-box">
                        <input type="text" value="02/08/2026" readonly>
                        <span class="material-symbols-outlined">calendar_today</span>
                    </div>
                </div>

                <!-- Dropdown Reminder Type -->
                <div class="dropdown">
                    <button class="unit-filter-dropdown-btn dropdown-toggle" type="button" id="filterReminderType" data-bs-toggle="dropdown" aria-expanded="false">
                        <span>Tipe Reminder</span>
                        <span class="material-symbols-outlined" style="font-size: 1.1rem; color: #1E293B;">expand_more</span>
                    </button>
                    <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="filterReminderType">
                        <li><a class="dropdown-item" href="#">Semua Tipe</a></li>
                        <li><a class="dropdown-item" href="#">Email</a></li>
                        <li><a class="dropdown-item" href="#">WhatsApp</a></li>
                    </ul>
                </div>

                <!-- Dropdown Status -->
                <div class="dropdown">
                    <button class="unit-filter-dropdown-btn dropdown-toggle" type="button" id="filterStatus" data-bs-toggle="dropdown" aria-expanded="false">
                        <span>Semua Status</span>
                        <span class="material-symbols-outlined" style="font-size: 1.1rem; color: #1E293B;">expand_more</span>
                    </button>
                    <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="filterStatus">
                        <li><a class="dropdown-item" href="#">Semua Status</a></li>
                        <li><a class="dropdown-item" href="#">Menunggu</a></li>
                        <li><a class="dropdown-item" href="#">Terkirim</a></li>
                        <li><a class="dropdown-item" href="#">Gagal</a></li>
                    </ul>
                </div>

                <!-- Reset Button -->
                <button type="button" class="btn-reset-filter" id="btnResetReminder">
                    <span class="material-symbols-outlined">restart_alt</span>
                    <span>Reset</span>
                </button>
            </div>
        </div>

        <!-- Reminder Data Table Card -->
        <div class="unit-table-wrapper">
            <table class="unit-forklift-table-v2" id="reminderTable">
                <thead>
                    <tr>
                        <th style="width: 20%;">Customer / Unit</th>
                        <th style="width: 15%;">Maintenance</th>
                        <th style="width: 15%;">Jatuh Tempo</th>
                        <th style="width: 15%;">Waktu Pengiriman</th>
                        <th style="width: 12%; text-align: center;">Tipe Reminder</th>
                        <th style="width: 10%;">Status</th>
                        <th style="width: 13%;">Lampiran</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- === DATA MENUNGGU (Belum Terkirim - Tampil Default) === -->
                    <tr class="reminder-row" data-status="Menunggu" data-type="WhatsApp">
                        <td>
                            <div class="fw-bold">PT. Toyomatsu</div>
                            <div class="text-muted" style="font-size: 0.85rem;">Toyota 8FD30-11029</div>
                        </td>
                        <td class="fw-bold" style="color: #334155;">Tune Up</td>
                        <td style="color: #475569;">26 Agu 2026</td>
                        <td style="color: #475569;">
                            <div>26 Agu 2026</div>
                            <div class="text-muted" style="font-size: 0.85rem;">15.00</div>
                        </td>
                        <td class="text-center">
                            <span class="material-symbols-outlined type-icon-wa">chat</span>
                        </td>
                        <td>
                            <span class="status-badge due-soon">Menunggu</span>
                        </td>
                        <td>
                            <button data-bs-toggle="modal" data-bs-target="#uploadBuktiModal" class="btn btn-sm btn-outline-secondary rounded-pill" style="font-size: 0.8rem; display: flex; align-items: center; gap: 6px;">
                                <span class="material-symbols-outlined" style="font-size: 16px;">attach_file</span> Upload
                            </button>
                        </td>
                    </tr>
                    <tr class="reminder-row" data-status="Menunggu" data-type="WhatsApp">
                        <td>
                            <div class="fw-bold">PT. Maju Jaya</div>
                            <div class="text-muted" style="font-size: 0.85rem;">Toyota 7FDF25-24510</div>
                        </td>
                        <td class="fw-bold" style="color: #334155;">Overhaul</td>
                        <td style="color: #475569;">28 Agu 2026</td>
                        <td style="color: #475569;">
                            <div>28 Agu 2026</div>
                            <div class="text-muted" style="font-size: 0.85rem;">10.00</div>
                        </td>
                        <td class="text-center">
                            <span class="material-symbols-outlined type-icon-wa">chat</span>
                        </td>
                        <td>
                            <span class="status-badge due-soon">Menunggu</span>
                        </td>
                        <td>
                            <button data-bs-toggle="modal" data-bs-target="#uploadBuktiModal" class="btn btn-sm btn-outline-secondary rounded-pill" style="font-size: 0.8rem; display: flex; align-items: center; gap: 6px;">
                                <span class="material-symbols-outlined" style="font-size: 16px;">attach_file</span> Upload
                            </button>
                        </td>
                    </tr>
                    <tr class="reminder-row" data-status="Menunggu" data-type="Email">
                        <td>
                            <div class="fw-bold">PT. Robin Jaya</div>
                            <div class="text-muted" style="font-size: 0.85rem;">Mitsubishi FD30NT-10492</div>
                        </td>
                        <td class="fw-bold" style="color: #334155;">Break System</td>
                        <td style="color: #475569;">30 Agu 2026</td>
                        <td style="color: #475569;">
                            <div>30 Agu 2026</div>
                            <div class="text-muted" style="font-size: 0.85rem;">14.00</div>
                        </td>
                        <td class="text-center">
                            <span class="material-symbols-outlined type-icon-mail">mail</span>
                        </td>
                        <td>
                            <span class="status-badge due-soon">Menunggu</span>
                        </td>
                        <td>
                            <button data-bs-toggle="modal" data-bs-target="#uploadBuktiModal" class="btn btn-sm btn-outline-secondary rounded-pill" style="font-size: 0.8rem; display: flex; align-items: center; gap: 6px;">
                                <span class="material-symbols-outlined" style="font-size: 16px;">attach_file</span> Upload
                            </button>
                        </td>
                    </tr>
                    <tr class="reminder-row" data-status="Menunggu" data-type="WhatsApp">
                        <td>
                            <div class="fw-bold">PT. Wijaya Putra</div>
                            <div class="text-muted" style="font-size: 0.85rem;">Komatsu FD25T-17-59821</div>
                        </td>
                        <td class="fw-bold" style="color: #334155;">Tune Up</td>
                        <td style="color: #475569;">02 Sep 2026</td>
                        <td style="color: #475569;">
                            <div>02 Sep 2026</div>
                            <div class="text-muted" style="font-size: 0.85rem;">09.00</div>
                        </td>
                        <td class="text-center">
                            <span class="material-symbols-outlined type-icon-wa">chat</span>
                        </td>
                        <td>
                            <span class="status-badge due-soon">Menunggu</span>
                        </td>
                        <td>
                            <button data-bs-toggle="modal" data-bs-target="#uploadBuktiModal" class="btn btn-sm btn-outline-secondary rounded-pill" style="font-size: 0.8rem; display: flex; align-items: center; gap: 6px;">
                                <span class="material-symbols-outlined" style="font-size: 16px;">attach_file</span> Upload
                            </button>
                        </td>
                    </tr>

                    <!-- === DATA TERKIRIM (Muncul saat filter Terkirim dipilih) === -->
                    <tr class="reminder-row" data-status="Terkirim" data-type="WhatsApp" style="display: none;">
                        <td>
                            <div class="fw-bold">PT. Toyomatsu</div>
                            <div class="text-muted" style="font-size: 0.85rem;">Toyota 8FD30-11029</div>
                        </td>
                        <td class="fw-bold" style="color: #334155;">Tune Up</td>
                        <td style="color: #475569;">20 Agu 2026</td>
                        <td style="color: #475569;">
                            <div>20 Agu 2026</div>
                            <div class="text-muted" style="font-size: 0.85rem;">15.00</div>
                        </td>
                        <td class="text-center">
                            <span class="material-symbols-outlined type-icon-wa">chat</span>
                        </td>
                        <td>
                            <span class="status-badge sukses">Terkirim</span>
                        </td>
                        <td>
                            <button data-bs-toggle="modal" data-bs-target="#uploadBuktiModal" class="btn btn-sm btn-outline-secondary rounded-pill" style="font-size: 0.8rem; display: flex; align-items: center; gap: 6px;">
                                <span class="material-symbols-outlined" style="font-size: 16px;">attach_file</span> Upload
                            </button>
                        </td>
                    </tr>
                    <tr class="reminder-row" data-status="Terkirim" data-type="Email" style="display: none;">
                        <td>
                            <div class="fw-bold">PT. Toyomatsu</div>
                            <div class="text-muted" style="font-size: 0.85rem;">Toyota 8FD30-11029</div>
                        </td>
                        <td class="fw-bold" style="color: #334155;">Break System</td>
                        <td style="color: #475569;">20 Agu 2026</td>
                        <td style="color: #475569;">
                            <div>20 Agu 2026</div>
                            <div class="text-muted" style="font-size: 0.85rem;">15.00</div>
                        </td>
                        <td class="text-center">
                            <span class="material-symbols-outlined type-icon-mail">mail</span>
                        </td>
                        <td>
                            <span class="status-badge sukses">Terkirim</span>
                        </td>
                        <td>
                            <button data-bs-toggle="modal" data-bs-target="#uploadBuktiModal" class="btn btn-sm btn-outline-secondary rounded-pill" style="font-size: 0.8rem; display: flex; align-items: center; gap: 6px;">
                                <span class="material-symbols-outlined" style="font-size: 16px;">attach_file</span> Upload
                            </button>
                        </td>
                    </tr>
                    <tr class="reminder-row" data-status="Terkirim" data-type="Email" style="display: none;">
                        <td>
                            <div class="fw-bold">PT. Jeon Grup</div>
                            <div class="text-muted" style="font-size: 0.85rem;">Toyota 8FD25-18234</div>
                        </td>
                        <td class="fw-bold" style="color: #334155;">Tune Up</td>
                        <td style="color: #475569;">19 Agu 2026</td>
                        <td style="color: #475569;">
                            <div>19 Agu 2026</div>
                            <div class="text-muted" style="font-size: 0.85rem;">11.30</div>
                        </td>
                        <td class="text-center">
                            <span class="material-symbols-outlined type-icon-mail">mail</span>
                        </td>
                        <td>
                            <span class="status-badge sukses">Terkirim</span>
                        </td>
                        <td>
                            <button data-bs-toggle="modal" data-bs-target="#uploadBuktiModal" class="btn btn-sm btn-outline-secondary rounded-pill" style="font-size: 0.8rem; display: flex; align-items: center; gap: 6px;">
                                <span class="material-symbols-outlined" style="font-size: 16px;">attach_file</span> Upload
                            </button>
                        </td>
                    </tr>
                    <tr class="reminder-row" data-status="Terkirim" data-type="WhatsApp" style="display: none;">
                        <td>
                            <div class="fw-bold">PT. Berkah Sentosa</div>
                            <div class="text-muted" style="font-size: 0.85rem;">TCM FD30T3Z-99120</div>
                        </td>
                        <td class="fw-bold" style="color: #334155;">Overhaul</td>
                        <td style="color: #475569;">18 Agu 2026</td>
                        <td style="color: #475569;">
                            <div>18 Agu 2026</div>
                            <div class="text-muted" style="font-size: 0.85rem;">08.45</div>
                        </td>
                        <td class="text-center">
                            <span class="material-symbols-outlined type-icon-wa">chat</span>
                        </td>
                        <td>
                            <span class="status-badge sukses">Terkirim</span>
                        </td>
                        <td>
                            <button data-bs-toggle="modal" data-bs-target="#uploadBuktiModal" class="btn btn-sm btn-outline-secondary rounded-pill" style="font-size: 0.8rem; display: flex; align-items: center; gap: 6px;">
                                <span class="material-symbols-outlined" style="font-size: 16px;">attach_file</span> Upload
                            </button>
                        </td>
                    </tr>

                    <!-- === DATA GAGAL (Muncul saat filter Gagal dipilih atau Semua Status) === -->
                    <tr class="reminder-row" data-status="Gagal" data-type="WhatsApp">
                        <td>
                            <div class="fw-bold">PT. Toyomatsu</div>
                            <div class="text-muted" style="font-size: 0.85rem;">Toyota 8FD30-11029</div>
                        </td>
                        <td class="fw-bold" style="color: #334155;">Break System</td>
                        <td style="color: #475569;">15 Agu 2026</td>
                        <td style="color: #475569;">
                            <div>15 Agu 2026</div>
                            <div class="text-muted" style="font-size: 0.85rem;">15.00</div>
                        </td>
                        <td class="text-center">
                            <span class="material-symbols-outlined type-icon-wa">chat</span>
                        </td>
                        <td>
                            <span class="status-badge gagal">Gagal</span>
                        </td>
                        <td>
                            <button data-bs-toggle="modal" data-bs-target="#uploadBuktiModal" class="btn btn-sm btn-outline-secondary rounded-pill" style="font-size: 0.8rem; display: flex; align-items: center; gap: 6px;">
                                <span class="material-symbols-outlined" style="font-size: 16px;">attach_file</span> Upload
                            </button>
                        </td>
                    </tr>
                    <tr class="reminder-row" data-status="Gagal" data-type="Email">
                        <td>
                            <div class="fw-bold">PT. Indo Abadi</div>
                            <div class="text-muted" style="font-size: 0.85rem;">Komatsu FD30T-16-30211</div>
                        </td>
                        <td class="fw-bold" style="color: #334155;">Overhaul</td>
                        <td style="color: #475569;">14 Agu 2026</td>
                        <td style="color: #475569;">
                            <div>14 Agu 2026</div>
                            <div class="text-muted" style="font-size: 0.85rem;">13.00</div>
                        </td>
                        <td class="text-center">
                            <span class="material-symbols-outlined type-icon-mail">mail</span>
                        </td>
                        <td>
                            <span class="status-badge gagal">Gagal</span>
                        </td>
                        <td>
                            <button data-bs-toggle="modal" data-bs-target="#uploadBuktiModal" class="btn btn-sm btn-outline-secondary rounded-pill" style="font-size: 0.8rem; display: flex; align-items: center; gap: 6px;">
                                <span class="material-symbols-outlined" style="font-size: 16px;">attach_file</span> Upload
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="table-pagination-footer d-flex justify-content-end align-items-center mt-3">
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

<!-- Modal Upload Bukti Reminder -->
<div class="modal fade" id="uploadBuktiModal" tabindex="-1" aria-labelledby="uploadBuktiModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered reminder-modal-dialog">
        <div class="modal-content reminder-modal-content">
            <div class="modal-header reminder-modal-header">
                <h5 class="modal-title reminder-modal-title" id="uploadBuktiModalLabel">Upload Bukti Reminder</h5>
            </div>
            <div class="modal-body">
                <!-- Unit Info -->
                <div class="mb-3">
                    <div class="reminder-modal-unit-cust">PT. Toyomatsu</div>
                    <div class="reminder-modal-unit-name">Toyota 8FD30-11029</div>
                </div>
                <hr class="reminder-modal-hr">

                <!-- Instructions -->
                <p class="reminder-modal-instruction">
                    Bukti dapat berupa screenshot WhatsApp atau Email. File akan disimpan sebagai attachment reminder ini.
                </p>

                <!-- Upload Area -->
                <div class="reminder-modal-upload-area">
                    <div class="reminder-modal-upload-title">Pilih file</div>
                    <div class="reminder-modal-upload-subtitle">PNG atau JPG</div>
                </div>
                <div class="reminder-modal-upload-status">Belum ada file dipilih</div>

                <!-- Input Datetime -->
                <div class="mb-4">
                    <label class="reminder-modal-datetime-label">Waktu Pengiriman</label>
                    <div class="reminder-modal-datetime-group">
                        <!-- Date -->
                        <div class="reminder-modal-date-input">
                            <input type="text" value="02/08/26" readonly class="reminder-modal-date-field">
                            <span class="material-symbols-outlined" style="color: #212529; font-size: 18px;">calendar_today</span>
                        </div>
                        <!-- Time -->
                        <div class="reminder-modal-time-input">
                            <input type="text" value="12 : 40" readonly class="reminder-modal-time-field">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer reminder-modal-footer d-flex justify-content-end gap-2">
                <button type="button" class="btn reminder-modal-btn-cancel" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn reminder-modal-btn-submit" data-bs-dismiss="modal">Kirim</button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const table = document.getElementById('reminderTable');
    const card = table ? table.closest('.unit-forklift-main-card') : null;
    const rows = Array.from(document.querySelectorAll('.reminder-row'));
    const searchInput = document.getElementById('searchReminderInput');
    const filterStatusBtn = document.querySelector('#filterStatus span');
    const filterTypeBtn = document.querySelector('#filterReminderType span');
    const filterStatusItems = document.querySelectorAll('#filterStatus + .dropdown-menu .dropdown-item');
    const filterTypeItems = document.querySelectorAll('#filterReminderType + .dropdown-menu .dropdown-item');
    const btnReset = document.getElementById('btnResetReminder');

    let currentStatus = 'Semua Status';
    let currentType = 'Semua Tipe';

    function runFilter() {
        const query = searchInput ? searchInput.value.toLowerCase().trim() : '';

        const filterFn = function(row) {
            // Status check
            const rowStatus = (row.dataset.status || '').trim().toLowerCase();
            const targetStatus = currentStatus.trim().toLowerCase();

            let matchStatus = false;
            if (targetStatus === 'semua status') {
                // Di filter Semua Status: yang Terkirim TIDAK muncul, hanya Menunggu dan Gagal yang muncul
                matchStatus = (rowStatus === 'menunggu' || rowStatus === 'gagal');
            } else if (targetStatus === 'terkirim') {
                // Hanya muncul ketika filter Terkirim dipilih
                matchStatus = (rowStatus === 'terkirim');
            } else {
                // Filter Menunggu atau Gagal spesifik
                matchStatus = (rowStatus === targetStatus);
            }

            // Type check
            const rowType = (row.dataset.type || '').trim().toLowerCase();
            const targetType = currentType.trim().toLowerCase();
            const matchType = (targetType === 'semua tipe' || targetType === 'tipe reminder' || rowType === targetType);

            // Search query check
            const text = row.textContent.toLowerCase();
            const matchQuery = !query || text.includes(query);

            return matchStatus && matchType && matchQuery;
        };

        if (card && typeof card.__applyFilter === 'function') {
            card.__applyFilter(filterFn);
        } else {
            rows.forEach(row => {
                row.style.display = filterFn(row) ? '' : 'none';
            });
        }
    }

    // Status filter dropdown
    filterStatusItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            const status = this.textContent.trim();
            currentStatus = status;
            if (filterStatusBtn) filterStatusBtn.textContent = status;
            runFilter();
        });
    });

    // Type filter dropdown
    filterTypeItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            const type = this.textContent.trim();
            currentType = type;
            if (filterTypeBtn) filterTypeBtn.textContent = (type === 'Semua Tipe' ? 'Tipe Reminder' : type);
            runFilter();
        });
    });

    // Live search input
    if (searchInput) {
        searchInput.addEventListener('input', runFilter);
    }

    // Reset button
    if (btnReset) {
        btnReset.addEventListener('click', function(e) {
            e.preventDefault();
            if (searchInput) searchInput.value = '';
            currentStatus = 'Semua Status';
            currentType = 'Semua Tipe';
            if (filterStatusBtn) filterStatusBtn.textContent = 'Semua Status';
            if (filterTypeBtn) filterTypeBtn.textContent = 'Tipe Reminder';
            runFilter();
        });
    }

    // Run filter immediately on initial load (Semua Status menampilkan Menunggu & Gagal, tanpa Terkirim)
    runFilter();
    setTimeout(runFilter, 50);
});
</script>
