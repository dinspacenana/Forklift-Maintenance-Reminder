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
                        <input type="text" value="" placeholder="dd/mm/yyyy" readonly>
                        <span class="material-symbols-outlined">calendar_today</span>
                    </div>
                    <span class="date-range-separator">-</span>
                    <div class="date-filter-pill-box">
                        <input type="text" value="" placeholder="dd/mm/yyyy" readonly>
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
                        <li><a class="dropdown-item" href="#">Email</a></li>
                        <li><a class="dropdown-item" href="#">WhatsApp</a></li>
                    </ul>
                </div>

                <!-- Dropdown Status -->
                <div class="dropdown">
                    <button class="unit-filter-dropdown-btn dropdown-toggle" type="button" id="filterStatus" data-bs-toggle="dropdown" aria-expanded="false">
                        <span>Status</span>
                        <span class="material-symbols-outlined" style="font-size: 1.1rem; color: #1E293B;">expand_more</span>
                    </button>
                    <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="filterStatus">
                        <li><a class="dropdown-item" href="#">Menunggu</a></li>
                        <li><a class="dropdown-item" href="#">Belum Terkirim</a></li>
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
                    <!-- === DATA BELUM TERKIRIM (Sudah Memasuki Due Date Reminder H-7) === -->
                    <tr class="reminder-row" data-status="Belum Terkirim" data-type="WhatsApp" data-customer="PT. Toyomatsu" data-unit="Toyota 8FD30-11029" data-maintenance="Tune Up" data-jatuh-tempo="26 Agu 2026" data-waktu-pengiriman="-" data-telp="0812-3456-7890" data-email="toyomatsu@gmail.com" title="Klik baris untuk salin format WhatsApp PT. Toyomatsu">
                        <td>
                            <div class="fw-bold">PT. Toyomatsu</div>
                            <div class="text-muted" style="font-size: 0.85rem;">Toyota 8FD30-11029</div>
                        </td>
                        <td class="fw-bold" style="color: #334155;">Tune Up</td>
                        <td style="color: #475569;">26 Agu 2026</td>
                        <td style="color: #475569;">-</td>
                        <td class="text-center">
                            <span class="material-symbols-outlined type-icon-wa">chat</span>
                        </td>
                        <td>
                            <span class="status-badge belum-terkirim">Belum Terkirim</span>
                        </td>
                        <td>
                            <button data-bs-toggle="modal" data-bs-target="#uploadBuktiModal" class="btn btn-sm btn-outline-secondary rounded-pill" style="font-size: 0.8rem; display: flex; align-items: center; gap: 6px;">
                                <span class="material-symbols-outlined" style="font-size: 16px;">attach_file</span> Upload
                            </button>
                        </td>
                    </tr>
                    <tr class="reminder-row" data-status="Belum Terkirim" data-type="WhatsApp" data-customer="PT. Maju Jaya" data-unit="Toyota 7FDF25-24510" data-maintenance="Overhaul" data-jatuh-tempo="28 Agu 2026" data-waktu-pengiriman="-" data-telp="0818-4321-9012" data-email="contact@majujaya.com" title="Klik baris untuk salin format WhatsApp PT. Maju Jaya">
                        <td>
                            <div class="fw-bold">PT. Maju Jaya</div>
                            <div class="text-muted" style="font-size: 0.85rem;">Toyota 7FDF25-24510</div>
                        </td>
                        <td class="fw-bold" style="color: #334155;">Overhaul</td>
                        <td style="color: #475569;">28 Agu 2026</td>
                        <td style="color: #475569;">-</td>
                        <td class="text-center">
                            <span class="material-symbols-outlined type-icon-wa">chat</span>
                        </td>
                        <td>
                            <span class="status-badge belum-terkirim">Belum Terkirim</span>
                        </td>
                        <td>
                            <button data-bs-toggle="modal" data-bs-target="#uploadBuktiModal" class="btn btn-sm btn-outline-secondary rounded-pill" style="font-size: 0.8rem; display: flex; align-items: center; gap: 6px;">
                                <span class="material-symbols-outlined" style="font-size: 16px;">attach_file</span> Upload
                            </button>
                        </td>
                    </tr>

                    <!-- === DATA MENUNGGU (Muncul saat filter Menunggu dipilih) === -->
                    <tr class="reminder-row" data-status="Menunggu" data-type="Email" data-customer="PT. Robin Jaya" data-unit="Mitsubishi FD30NT-10492" data-maintenance="Break System" data-jatuh-tempo="02 Sep 2026" data-waktu-pengiriman="-" data-telp="0817-4890-1234" data-email="info@robinjaya.co.id" style="display: none;" title="Klik baris untuk salin format Email PT. Robin Jaya">
                        <td>
                            <div class="fw-bold">PT. Robin Jaya</div>
                            <div class="text-muted" style="font-size: 0.85rem;">Mitsubishi FD30NT-10492</div>
                        </td>
                        <td class="fw-bold" style="color: #334155;">Break System</td>
                        <td style="color: #475569;">02 Sep 2026</td>
                        <td style="color: #475569;">-</td>
                        <td class="text-center">
                            <span class="material-symbols-outlined type-icon-mail">mail</span>
                        </td>
                        <td>
                            <span class="status-badge menunggu">Menunggu</span>
                        </td>
                        <td>
                            <button data-bs-toggle="modal" data-bs-target="#uploadBuktiModal" class="btn btn-sm btn-outline-secondary rounded-pill" style="font-size: 0.8rem; display: flex; align-items: center; gap: 6px;">
                                <span class="material-symbols-outlined" style="font-size: 16px;">attach_file</span> Upload
                            </button>
                        </td>
                    </tr>
                    <tr class="reminder-row" data-status="Menunggu" data-type="WhatsApp" data-customer="PT. Wijaya Putra" data-unit="Komatsu FD25T-17-59821" data-maintenance="Tune Up" data-jatuh-tempo="08 Sep 2026" data-waktu-pengiriman="-" data-telp="0815-6789-0123" data-email="admin@wijayaputra.co.id" style="display: none;" title="Klik baris untuk salin format WhatsApp PT. Wijaya Putra">
                        <td>
                            <div class="fw-bold">PT. Wijaya Putra</div>
                            <div class="text-muted" style="font-size: 0.85rem;">Komatsu FD25T-17-59821</div>
                        </td>
                        <td class="fw-bold" style="color: #334155;">Tune Up</td>
                        <td style="color: #475569;">08 Sep 2026</td>
                        <td style="color: #475569;">-</td>
                        <td class="text-center">
                            <span class="material-symbols-outlined type-icon-wa">chat</span>
                        </td>
                        <td>
                            <span class="status-badge menunggu">Menunggu</span>
                        </td>
                        <td>
                            <button data-bs-toggle="modal" data-bs-target="#uploadBuktiModal" class="btn btn-sm btn-outline-secondary rounded-pill" style="font-size: 0.8rem; display: flex; align-items: center; gap: 6px;">
                                <span class="material-symbols-outlined" style="font-size: 16px;">attach_file</span> Upload
                            </button>
                        </td>
                    </tr>

                    <!-- === DATA TERKIRIM (Muncul saat filter Terkirim dipilih) === -->
                    <tr class="reminder-row" data-status="Terkirim" data-type="WhatsApp" data-customer="PT. Toyomatsu" data-unit="Toyota 8FD30-11029" data-maintenance="Tune Up" data-jatuh-tempo="20 Agu 2026" data-waktu-pengiriman="20 Agu 2026 15.00" data-telp="0812-3456-7890" data-email="toyomatsu@gmail.com" style="display: none;" title="Klik baris untuk salin format WhatsApp PT. Toyomatsu">
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
                            <span class="badge-lampiran-terupload">
                                <span class="material-symbols-outlined">check_circle</span> Terupload
                            </span>
                        </td>
                    </tr>
                    <tr class="reminder-row" data-status="Terkirim" data-type="Email" data-customer="PT. Toyomatsu" data-unit="Toyota 8FD30-11029" data-maintenance="Break System" data-jatuh-tempo="20 Agu 2026" data-waktu-pengiriman="20 Agu 2026 15.00" data-telp="0812-3456-7890" data-email="toyomatsu@gmail.com" style="display: none;" title="Klik baris untuk salin format Email PT. Toyomatsu">
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
                            <span class="badge-lampiran-terupload">
                                <span class="material-symbols-outlined">check_circle</span> Terupload
                            </span>
                        </td>
                    </tr>
                    <tr class="reminder-row" data-status="Terkirim" data-type="Email" data-customer="PT. Jeon Grup" data-unit="Toyota 8FD25-18234" data-maintenance="Tune Up" data-jatuh-tempo="19 Agu 2026" data-waktu-pengiriman="19 Agu 2026 11.30" data-telp="0819-9887-7665" data-email="ops@jeongrup.com" style="display: none;" title="Klik baris untuk salin format Email PT. Jeon Grup">
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
                            <span class="badge-lampiran-terupload">
                                <span class="material-symbols-outlined">check_circle</span> Terupload
                            </span>
                        </td>
                    </tr>
                    <tr class="reminder-row" data-status="Terkirim" data-type="WhatsApp" data-customer="PT. Berkah Sentosa" data-unit="TCM FD30T3Z-99120" data-maintenance="Overhaul" data-jatuh-tempo="18 Agu 2026" data-waktu-pengiriman="18 Agu 2026 08.45" data-telp="0813-4567-8901" data-email="berkahsentosa@gmail.com" style="display: none;" title="Klik baris untuk salin format WhatsApp PT. Berkah Sentosa">
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
                            <span class="badge-lampiran-terupload">
                                <span class="material-symbols-outlined">check_circle</span> Terupload
                            </span>
                        </td>
                    </tr>

                    <!-- === DATA GAGAL (Muncul saat filter Gagal dipilih atau Semua Status) === -->
                    <tr class="reminder-row" data-status="Gagal" data-type="WhatsApp" data-customer="PT. Toyomatsu" data-unit="Toyota 8FD30-11029" data-maintenance="Break System" data-jatuh-tempo="15 Agu 2026" data-waktu-pengiriman="15 Agu 2026 15.00" data-telp="0812-3456-7890" data-email="toyomatsu@gmail.com" title="Klik baris untuk salin format WhatsApp PT. Toyomatsu">
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
                    <tr class="reminder-row" data-status="Gagal" data-type="Email" data-customer="PT. Indo Abadi" data-unit="Komatsu FD30T-16-30211" data-maintenance="Overhaul" data-jatuh-tempo="14 Agu 2026" data-waktu-pengiriman="14 Agu 2026 13.00" data-telp="0814-5678-9012" data-email="logistik@indoabadi.com" title="Klik baris untuk salin format Email PT. Indo Abadi">
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

<!-- Floating Toast Notifikasi Salin Template Reminder -->
<div class="reminder-toast-container" id="reminderToastContainer">
    <div class="reminder-toast" id="reminderToast">
        <div class="reminder-toast-icon wa" id="reminderToastIcon">
            <span class="material-symbols-outlined" id="reminderToastIconSymbol">chat</span>
        </div>
        <div class="reminder-toast-content">
            <div class="reminder-toast-title">
                <span id="reminderToastTitle">Disalin ke Clipboard!</span>
                <span class="reminder-toast-badge wa" id="reminderToastBadge">WhatsApp</span>
            </div>
            <div class="reminder-toast-desc" id="reminderToastDesc">Format reminder siap ditempel (Ctrl+V).</div>
        </div>
        <button type="button" class="reminder-toast-close" id="reminderToastClose" title="Tutup">
            <span class="material-symbols-outlined" style="font-size: 18px;">close</span>
        </button>
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

    let currentStatus = 'Default';
    let currentType = 'Semua Tipe';

    function runFilter() {
        const query = searchInput ? searchInput.value.toLowerCase().trim() : '';

        const filterFn = function(row) {
            // Status check
            const rowStatus = (row.dataset.status || '').trim().toLowerCase();
            const targetStatus = currentStatus.trim().toLowerCase();

            let matchStatus = false;
            if (targetStatus === 'default' || targetStatus === 'status') {
                // Default: hanya Belum Terkirim dan Gagal yang tampil
                matchStatus = (rowStatus === 'belum terkirim' || rowStatus === 'belum-terkirim' || rowStatus === 'gagal');
            } else if (targetStatus === 'menunggu') {
                matchStatus = (rowStatus === 'menunggu');
            } else if (targetStatus === 'belum terkirim') {
                matchStatus = (rowStatus === 'belum terkirim' || rowStatus === 'belum-terkirim');
            } else if (targetStatus === 'terkirim') {
                matchStatus = (rowStatus === 'terkirim');
            } else if (targetStatus === 'gagal') {
                matchStatus = (rowStatus === 'gagal');
            } else {
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

    const btnFilterType = document.getElementById('filterReminderType');
    const btnFilterStatus = document.getElementById('filterStatus');

    function updateButtonColors() {
        if (btnFilterType) btnFilterType.classList.toggle('filter-active', currentType !== 'Semua Tipe');
        if (btnFilterStatus) btnFilterStatus.classList.toggle('filter-active', currentStatus !== 'Default' && currentStatus !== 'Status');
    }

    // Status filter dropdown
    filterStatusItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            const status = this.textContent.trim();
            currentStatus = status;
            if (filterStatusBtn) filterStatusBtn.textContent = status;
            updateButtonColors();
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
            updateButtonColors();
            runFilter();
        });
    });

    // Live search input
    if (searchInput) {
        searchInput.addEventListener('input', runFilter);
    }

    // Date filter mockup toggle (untuk melihat efek warna hitam saat dipilih)
    const dateFilters = document.querySelectorAll('.date-filter-pill-box');
    dateFilters.forEach(filter => {
        filter.addEventListener('click', function() {
            this.classList.toggle('filter-active');
            const input = this.querySelector('input');
            if (this.classList.contains('filter-active')) {
                input.value = '15/08/2026'; // Simulasi tanggal terpilih
            } else {
                input.value = ''; // Kembali ke placeholder
            }
        });
    });

    // Reset button
    if (btnReset) {
        btnReset.addEventListener('click', function(e) {
            e.preventDefault();
            if (searchInput) searchInput.value = '';
            currentStatus = 'Default';
            currentType = 'Semua Tipe';
            if (filterStatusBtn) filterStatusBtn.textContent = 'Status';
            if (filterTypeBtn) filterTypeBtn.textContent = 'Tipe Reminder';
            updateButtonColors();
            
            // Reset mockup date filters
            dateFilters.forEach(filter => {
                filter.classList.remove('filter-active');
                filter.querySelector('input').value = '';
            });

            runFilter();
        });
    }

    // === AUTO COPY TO CLIPBOARD ON ROW CLICK ===
    const toastEl = document.getElementById('reminderToast');
    const toastTitle = document.getElementById('reminderToastTitle');
    const toastBadge = document.getElementById('reminderToastBadge');
    const toastDesc = document.getElementById('reminderToastDesc');
    const toastIcon = document.getElementById('reminderToastIcon');
    const toastIconSymbol = document.getElementById('reminderToastIconSymbol');
    const toastCloseBtn = document.getElementById('reminderToastClose');
    let toastTimer = null;

    function hideToast() {
        if (toastEl) {
            toastEl.classList.remove('show');
        }
    }

    if (toastCloseBtn) {
        toastCloseBtn.addEventListener('click', hideToast);
    }

    function showReminderToast(type, customer) {
        if (!toastEl) return;
        if (toastTimer) clearTimeout(toastTimer);

        const isWa = (type || '').toLowerCase() === 'whatsapp';

        if (toastBadge) {
            toastBadge.textContent = isWa ? 'WhatsApp' : 'Email';
            toastBadge.className = 'reminder-toast-badge ' + (isWa ? 'wa' : 'mail');
        }

        if (toastIcon) {
            toastIcon.className = 'reminder-toast-icon ' + (isWa ? 'wa' : 'mail');
        }

        if (toastIconSymbol) {
            toastIconSymbol.textContent = isWa ? 'chat' : 'mail';
        }

        if (toastTitle) {
            toastTitle.textContent = 'Disalin ke Clipboard!';
        }

        if (toastDesc) {
            toastDesc.textContent = `Pesan reminder ${isWa ? 'WhatsApp' : 'Email'} [${customer}] siap di-paste (Ctrl+V).`;
        }

        toastEl.classList.add('show');

        toastTimer = setTimeout(() => {
            hideToast();
        }, 2800);
    }

    function copyToClipboard(text) {
        if (navigator.clipboard && window.isSecureContext) {
            navigator.clipboard.writeText(text).catch(() => {
                fallbackCopy(text);
            });
        } else {
            fallbackCopy(text);
        }
    }

    function fallbackCopy(text) {
        const tempTextarea = document.createElement('textarea');
        tempTextarea.value = text;
        tempTextarea.style.position = 'fixed';
        tempTextarea.style.left = '-9999px';
        tempTextarea.style.top = '-9999px';
        document.body.appendChild(tempTextarea);
        tempTextarea.focus();
        tempTextarea.select();
        try {
            document.execCommand('copy');
        } catch (e) {
            console.error('Gagal menyalin:', e);
        }
        document.body.removeChild(tempTextarea);
    }

    // Modal Upload dynamic title update
    document.querySelectorAll('[data-bs-target="#uploadBuktiModal"]').forEach(btn => {
        btn.addEventListener('click', function(e) {
            const row = this.closest('.reminder-row');
            if (!row) return;
            const custName = row.dataset.customer || (row.querySelector('.fw-bold') ? row.querySelector('.fw-bold').textContent.trim() : 'PT. Toyomatsu');
            const unitName = row.dataset.unit || (row.querySelector('.text-muted') ? row.querySelector('.text-muted').textContent.trim() : 'Toyota 8FD30-11029');
            
            const modalCust = document.querySelector('.reminder-modal-unit-cust');
            const modalUnit = document.querySelector('.reminder-modal-unit-name');
            if (modalCust) modalCust.textContent = custName;
            if (modalUnit) modalUnit.textContent = unitName;
        });
    });

    // Row Click Copy Listener
    rows.forEach(row => {
        row.addEventListener('click', function(e) {
            // Jangan jalankan copy jika user mengklik tombol upload, modal trigger, badge, dropdown, link atau input
            if (e.target.closest('button, .btn, a, input, select, textarea, [data-bs-toggle="modal"]')) {
                return;
            }

            const customer = this.dataset.customer || (this.querySelector('.fw-bold') ? this.querySelector('.fw-bold').textContent.trim() : '');
            const unit = this.dataset.unit || (this.querySelector('.text-muted') ? this.querySelector('.text-muted').textContent.trim() : '');
            const maintenance = this.dataset.maintenance || (this.cells[1] ? this.cells[1].textContent.trim() : '');
            const jatuhTempo = this.dataset.jatuhTempo || (this.cells[2] ? this.cells[2].textContent.trim() : '');
            const type = (this.dataset.type || 'WhatsApp').trim();
            const status = (this.dataset.status || 'Menunggu').trim();
            const telp = this.dataset.telp || '-';
            const email = this.dataset.email || '-';

            let formattedText = '';
            if (type.toLowerCase() === 'whatsapp') {
                formattedText = `*PEMBERITAHUAN JADWAL MAINTENANCE FORKLIFT*

Yth. *${customer}*,
Berikut kami sampaikan jadwal reminder pemeliharaan (maintenance) untuk unit forklift Anda:

📋 *Detail Maintenance:*
• Customer: ${customer}
• Kontak: ${telp}
• Unit Forklift: ${unit}
• Jenis Maintenance: ${maintenance}
• Tanggal Jatuh Tempo: ${jatuhTempo}
• Saluran: WhatsApp
• Status: ${status}

Mohon bantuan Bapak/Ibu untuk mempersiapkan unit sebelum tanggal jatuh tempo tersebut agar proses maintenance dapat terlaksana tepat waktu.

Terima kasih atas perhatian dan kerja samanya.
_Tim Maintenance Forklift_`;
            } else {
                formattedText = `Subjek: Pengingat Jadwal Maintenance Forklift - ${customer}

Kepada Yth. Tim ${customer},

Melalui email ini, kami ingin mengingatkan jadwal pemeliharaan (maintenance) berkala untuk unit forklift perusahaan Anda:

Detail Maintenance:
- Customer: ${customer}
- Email: ${email}
- Unit Forklift: ${unit}
- Jenis Maintenance: ${maintenance}
- Tanggal Jatuh Tempo: ${jatuhTempo}
- Saluran Pengingat: Email
- Status: ${status}

Mohon kesediaan Bapak/Ibu untuk mengondisikan unit pada tanggal jatuh tempo tersebut agar inspeksi & service berjalan lancar. Apabila terdapat koordinasi jadwal lebih lanjut, silakan membalas email ini.

Atas perhatian dan kerja samanya, kami ucapkan terima kasih.

Hormat kami,
Tim Maintenance Forklift`;
            }

            // Copy to clipboard
            copyToClipboard(formattedText);

            // Efek visual klik baris
            rows.forEach(r => r.classList.remove('row-copied-active'));
            this.classList.add('row-copied-active');
            setTimeout(() => {
                this.classList.remove('row-copied-active');
            }, 2000);

            // Tampilkan floating toast
            showReminderToast(type, customer);
        });
    });

    // Run filter immediately on initial load (Semua Status menampilkan Menunggu & Gagal, tanpa Terkirim)
    runFilter();
    setTimeout(runFilter, 50);
});
</script>
