<!-- views/report/activity_log.php - Activity Log View -->
<main class="dashboard-container">
    <!-- Header with Title and Export Button -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="page-title mb-0">Log Aktivitas</h2>
        <button class="btn fmr-btn-submit d-flex align-items-center" style="gap: 8px;">
            <span class="material-symbols-outlined">download</span> Ekspor Laporan
        </button>
    </div>

    <!-- Main Container Card -->
    <div class="unit-forklift-main-card">
        
        <!-- Search, Filters, and Reset Button Bar -->
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-3">
            <div class="d-flex align-items-center flex-wrap gap-3">
                <!-- Search Input -->
                <div class="unit-search-pill">
                    <span class="material-symbols-outlined">search</span>
                    <input type="text" placeholder="Cari User" id="searchLogInput">
                </div>

                <!-- Date Range Picker -->
                <div class="d-flex align-items-center gap-2">
                    <div class="date-filter-pill-box" style="padding: 0.35rem 0.75rem; border-radius: 50px; border: 1px solid #E2E8F0; background: #fff; display: flex; align-items: center; gap: 8px;">
                        <input type="text" value="01/08/26" readonly style="border: none; outline: none; background: transparent; width: 70px; font-size: 0.85rem; color: #475569;">
                        <span class="material-symbols-outlined" style="font-size: 1rem; color: #94A3B8;">calendar_today</span>
                    </div>
                    <span class="fw-bold" style="color: #94A3B8;">-</span>
                    <div class="date-filter-pill-box" style="padding: 0.35rem 0.75rem; border-radius: 50px; border: 1px solid #E2E8F0; background: #fff; display: flex; align-items: center; gap: 8px;">
                        <input type="text" value="02/08/26" readonly style="border: none; outline: none; background: transparent; width: 70px; font-size: 0.85rem; color: #475569;">
                        <span class="material-symbols-outlined" style="font-size: 1rem; color: #94A3B8;">calendar_today</span>
                    </div>
                </div>

                <!-- Dropdown Modul -->
                <div class="dropdown">
                    <button class="unit-filter-dropdown-btn dropdown-toggle" type="button" id="filterModul" data-bs-toggle="dropdown" aria-expanded="false">
                        <span>Modul</span>
                        <span class="material-symbols-outlined" style="font-size: 1.1rem; color: #1E293B;">expand_more</span>
                    </button>
                    <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="filterModul">
                        <li><a class="dropdown-item" href="#">Dashboard</a></li>
                        <li><a class="dropdown-item" href="#">Customer</a></li>
                        <li><a class="dropdown-item" href="#">Forklift</a></li>
                        <li><a class="dropdown-item" href="#">Jenis Maintenance</a></li>
                        <li><a class="dropdown-item" href="#">Input Maintenance</a></li>
                        <li><a class="dropdown-item" href="#">Unit Forklift</a></li>
                        <li><a class="dropdown-item" href="#">Jadwal Maintenance</a></li>
                        <li><a class="dropdown-item" href="#">Outstanding</a></li>
                        <li><a class="dropdown-item" href="#">Reminder</a></li>
                        <li><a class="dropdown-item" href="#">Manajemen User</a></li>
                        <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                        <li><a class="dropdown-item" href="#">Riwayat</a></li>
                        <li><a class="dropdown-item" href="#">Log Aktivitas</a></li>
                    </ul>
                </div>

                <!-- Dropdown Aktivitas -->
                <div class="dropdown">
                    <button class="unit-filter-dropdown-btn dropdown-toggle" type="button" id="filterAktivitas" data-bs-toggle="dropdown" aria-expanded="false">
                        <span>Aktivitas</span>
                        <span class="material-symbols-outlined" style="font-size: 1.1rem; color: #1E293B;">expand_more</span>
                    </button>
                    <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="filterAktivitas">
                        <li><a class="dropdown-item" href="#">Login</a></li>
                        <li><a class="dropdown-item" href="#">Tambah</a></li>
                        <li><a class="dropdown-item" href="#">Ubah</a></li>
                        <li><a class="dropdown-item" href="#">Hapus</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>

                <!-- Reset Button -->
                <button type="button" class="btn-reset-filter" id="btnResetLog" onclick="document.getElementById('searchLogInput').value='';">
                    <span class="material-symbols-outlined">restart_alt</span>
                    <span>Reset</span>
                </button>
            </div>
        </div>

        <!-- Activity Log Data Table Card -->
        <div class="unit-table-wrapper">
            <table class="unit-forklift-table-v2" style="min-width: 900px;">
                <thead>
                    <tr>
                        <th style="width: 20%;">Waktu</th>
                        <th style="width: 25%;">User</th>
                        <th style="width: 15%;">Aktivitas</th>
                        <th style="width: 20%;">Modul</th>
                        <th style="width: 20%; text-align: center;">Hasil</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr>
                        <td style="color: #475569; font-weight: 500;">26 - 08 - 19, 18.00</td>
                        <td>
                            <div class="fw-bold" style="color: #334155; font-size: 0.85rem;">Marsha Thalita</div>
                        </td>
                        <td style="color: #334155; font-weight: 600;">Update</td>
                        <td style="color: #475569; font-size: 0.85rem;">Reminder</td>
                        <td class="text-center">
                            <span class="badge-status-aktif-blue" style="border-radius: 20px;">Berhasil</span>
                        </td>
                    </tr>
                    <!-- Row 2 -->
                    <tr>
                        <td style="color: #475569; font-weight: 500;">26 - 08 - 19, 18.00</td>
                        <td>
                            <div class="fw-bold" style="color: #334155; font-size: 0.85rem;">Marsha Thalita</div>
                        </td>
                        <td style="color: #334155; font-weight: 600;">Update</td>
                        <td style="color: #475569; font-size: 0.85rem;">Reminder</td>
                        <td class="text-center">
                            <span class="badge-status-aktif-blue" style="border-radius: 20px;">Berhasil</span>
                        </td>
                    </tr>
                    <!-- Row 3 -->
                    <tr>
                        <td style="color: #475569; font-weight: 500;">26 - 08 - 19, 18.00</td>
                        <td>
                            <div class="fw-bold" style="color: #334155; font-size: 0.85rem;">Marsha Thalita</div>
                        </td>
                        <td style="color: #334155; font-weight: 600;">Update</td>
                        <td style="color: #475569; font-size: 0.85rem;">Reminder</td>
                        <td class="text-center">
                            <span class="badge-status-aktif-blue" style="border-radius: 20px;">Berhasil</span>
                        </td>
                    </tr>
                    <!-- Row 4 -->
                    <tr>
                        <td style="color: #475569; font-weight: 500;">26 - 08 - 19, 18.00</td>
                        <td>
                            <div class="fw-bold" style="color: #334155; font-size: 0.85rem;">Marsha Thalita</div>
                        </td>
                        <td style="color: #334155; font-weight: 600;">Update</td>
                        <td style="color: #475569; font-size: 0.85rem;">Reminder</td>
                        <td class="text-center">
                            <span class="badge-status-aktif-blue" style="border-radius: 20px;">Berhasil</span>
                        </td>
                    </tr>
                    <!-- Row 5 -->
                    <tr>
                        <td style="color: #475569; font-weight: 500;">26 - 08 - 19, 18.00</td>
                        <td>
                            <div class="fw-bold" style="color: #334155; font-size: 0.85rem;">Marsha Thalita</div>
                        </td>
                        <td style="color: #334155; font-weight: 600;">Update</td>
                        <td style="color: #475569; font-size: 0.85rem;">Reminder</td>
                        <td class="text-center">
                            <span class="status-badge over-due" style="min-width: 60px;">Error</span>
                        </td>
                    </tr>
                    <!-- Row 6 -->
                    <tr>
                        <td style="color: #475569; font-weight: 500;">26 - 08 - 19, 18.00</td>
                        <td>
                            <div class="fw-bold" style="color: #334155; font-size: 0.85rem;">Marsha Thalita</div>
                        </td>
                        <td style="color: #334155; font-weight: 600;">Update</td>
                        <td style="color: #475569; font-size: 0.85rem;">Reminder</td>
                        <td class="text-center">
                            <span class="status-badge over-due" style="min-width: 60px;">Error</span>
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
