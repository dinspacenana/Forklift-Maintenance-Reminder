<?php
// reminder.php - Reminder FMR
include_once __DIR__ . '/header.php';
?>

<!-- MAIN REMINDER CONTENT -->
<main class="dashboard-container">
    <!-- Page Title -->
    <h2 class="page-title">Reminder</h2>

    <!-- Search, Filters, and Reset Button Bar -->
    <div class="customer-filter-bar">
        
        <!-- Search Input -->
        <div class="search-input-pill">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Masukkan Customer / Unit" id="searchReminderInput">
        </div>

        <div class="d-flex align-items-center gap-3 flex-wrap">
            <!-- Date Range Picker (Statis) -->
            <div class="d-flex align-items-center gap-2">
                <div class="filter-dropdown-btn d-flex align-items-center gap-2" style="cursor: default; padding: 6px 14px;">
                    <input type="text" value="01/08/26" readonly style="border: none; outline: none; width: 60px; background: transparent; font-weight: 500; font-size: 0.85rem; color: #475569;">
                    <i class="fa-regular fa-calendar" style="color: #64748B;"></i>
                </div>
                <span class="fw-bold" style="color: #94A3B8;">-</span>
                <div class="filter-dropdown-btn d-flex align-items-center gap-2" style="cursor: default; padding: 6px 14px; background-color: white; border-color: #dee2e6;">
                    <input type="text" value="02/08/26" readonly style="border: none; outline: none; width: 60px; background: transparent; font-weight: 500; font-size: 0.85rem; color: #475569;">
                    <i class="fa-regular fa-calendar" style="color: #64748B;"></i>
                </div>
            </div>

            <!-- Dropdown Reminder Type -->
            <div class="dropdown">
                <button class="filter-dropdown-btn dropdown-toggle" type="button" id="filterReminderType" data-bs-toggle="dropdown" aria-expanded="false">
                    <span>Reminder Type</span>
                </button>
                <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="filterReminderType">
                    <li><a class="dropdown-item" href="#">Email</a></li>
                    <li><a class="dropdown-item" href="#">WhatsApp</a></li>
                </ul>
            </div>

            <!-- Dropdown Status -->
            <div class="dropdown">
                <button class="filter-dropdown-btn dropdown-toggle" type="button" id="filterStatus" data-bs-toggle="dropdown" aria-expanded="false">
                    <span>Status</span>
                </button>
                <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="filterStatus">
                    <li><a class="dropdown-item" href="#">Menunggu</a></li>
                    <li><a class="dropdown-item" href="#">Terkirim</a></li>
                </ul>
            </div>

            <!-- Reset Button -->
            <button type="button" class="filter-dropdown-btn d-flex align-items-center gap-2">
                <i class="fa-solid fa-arrow-rotate-right" style="color: #64748B;"></i> Reset
            </button>
        </div>
    </div>

    <!-- Reminder Data Table Card -->
    <div class="customer-table-card">
        <div class="table-responsive">
            <table class="table customer-table">
                <thead>
                    <tr>
                        <th style="width: 20%;">Customer / Unit</th>
                        <th style="width: 15%;">Maintenance</th>
                        <th style="width: 15%;">Due Date</th>
                        <th style="width: 15%;">Sent Datetime</th>
                        <th style="width: 12%; text-align: center;">Reminder Type</th>
                        <th style="width: 10%;">Status</th>
                        <th style="width: 13%;">Attachment</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr>
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
                            <i class="fa-brands fa-whatsapp type-icon-wa"></i>
                        </td>
                        <td>
                            <span class="status-badge sukses">Terkirim</span>
                        </td>
                        <td>
                            <button data-bs-toggle="modal" data-bs-target="#uploadBuktiModal" class="btn btn-sm btn-outline-secondary rounded-pill" style="font-size: 0.8rem; display: flex; align-items: center; gap: 6px;">
                                <i class="fa-solid fa-paperclip"></i> Upload
                            </button>
                        </td>
                    </tr>
                    <!-- Row 2 -->
                    <tr>
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
                            <i class="fa-regular fa-envelope type-icon-mail"></i>
                        </td>
                        <td>
                            <span class="status-badge sukses">Terkirim</span>
                        </td>
                        <td>
                            
                        </td>
                    </tr>
                    <!-- Row 3 -->
                    <tr>
                        <td>
                            <div class="fw-bold">PT. Toyomatsu</div>
                            <div class="text-muted" style="font-size: 0.85rem;">Toyota 8FD30-11029</div>
                        </td>
                        <td class="fw-bold" style="color: #334155;">Tune Up</td>
                        <td style="color: #475569;">26 Agu 2026</td>
                        <td style="color: #475569;">
                            
                        </td>
                        <td class="text-center">
                            <i class="fa-brands fa-whatsapp type-icon-wa"></i>
                        </td>
                        <td>
                            <span class="status-badge due-soon">Menunggu</span>
                        </td>
                        <td>
                            <button data-bs-toggle="modal" data-bs-target="#uploadBuktiModal" class="btn btn-sm btn-outline-secondary rounded-pill" style="font-size: 0.8rem; display: flex; align-items: center; gap: 6px;">
                                <i class="fa-solid fa-paperclip"></i> Upload
                            </button>
                        </td>
                    </tr>
                    <!-- Row 4 -->
                    <tr>
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
                            <i class="fa-brands fa-whatsapp type-icon-wa"></i>
                        </td>
                        <td>
                            <span class="status-badge sukses">Terkirim</span>
                        </td>
                        <td>
                            <button data-bs-toggle="modal" data-bs-target="#uploadBuktiModal" class="btn btn-sm btn-outline-secondary rounded-pill" style="font-size: 0.8rem; display: flex; align-items: center; gap: 6px;">
                                <i class="fa-solid fa-paperclip"></i> Upload
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-end mt-4">
            <div class="d-flex gap-2 align-items-center" style="font-size: 0.85rem; font-weight: 500; color: #64748B;">
                <span style="cursor: pointer;">&lt;</span>
                <span style="background-color: #F59E0B; color: #fff; padding: 2px 8px; border-radius: 4px; font-weight: bold; cursor: pointer;">1</span>
                <span style="cursor: pointer;">2</span>
                <span style="cursor: pointer;">3</span>
                <span style="cursor: pointer;">4</span>
                <span>...</span>
                <span style="cursor: pointer;">10</span>
                <span style="cursor: pointer;">&gt;</span>
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
                    <label class="reminder-modal-datetime-label">Sent Datetime</label>
                    <div class="reminder-modal-datetime-group">
                        <!-- Date -->
                        <div class="reminder-modal-date-input">
                            <input type="text" value="02/08/26" readonly class="reminder-modal-date-field">
                            <i class="fa-regular fa-calendar" style="color: #212529;"></i>
                        </div>
                        <!-- Time -->
                        <div class="reminder-modal-time-input">
                            <input type="text" value="12 : 40" readonly class="reminder-modal-time-field">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer reminder-modal-footer">
                <button type="button" class="btn reminder-modal-btn-submit">Kirim</button>
            </div>
        </div>
    </div>
</div>

<?php
include_once __DIR__ . '/footer.php';
?>
