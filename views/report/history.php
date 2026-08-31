<!-- views/report/history.php - History View -->
<main class="dashboard-container">
    <!-- Header with Title and Export Button -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="page-title mb-0">History</h2>
        <button class="btn fmr-btn-submit d-flex align-items-center" style="gap: 8px;">
            <i class="fa-solid fa-download"></i> Ekspor Laporan
        </button>
    </div>

    <!-- Search, Filters, and Reset Button Bar -->
    <div class="customer-filter-bar">
        
        <!-- Search Input -->
        <div class="search-input-pill">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Cari Customer" id="searchHistoryInput">
        </div>

        <div class="d-flex align-items-center gap-3 flex-wrap">
            <!-- Date Range Picker -->
            <div class="d-flex align-items-center gap-2">
                <div class="date-filter-pill-box">
                    <input type="text" value="01/08/26" readonly>
                    <i class="fa-regular fa-calendar"></i>
                </div>
                <span class="fw-bold" style="color: #94A3B8;">-</span>
                <div class="date-filter-pill-box">
                    <input type="text" value="02/08/26" readonly>
                    <i class="fa-regular fa-calendar"></i>
                </div>
            </div>

            <!-- Dropdown Maintenance -->
            <div class="dropdown">
                <button class="filter-dropdown-btn dropdown-toggle" type="button" id="filterMaintenance" data-bs-toggle="dropdown" aria-expanded="false">
                    <span>Maintenance</span>
                </button>
                <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="filterMaintenance">
                    <li><a class="dropdown-item" href="#">Tune-Up</a></li>
                    <li><a class="dropdown-item" href="#">Overhaul</a></li>
                    <li><a class="dropdown-item" href="#">Break System</a></li>
                </ul>
            </div>

            <!-- Dropdown Tipe Operasi -->
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

            <!-- Reset Button -->
            <button type="button" class="btn-reset-filter" id="btnResetHistory" onclick="document.getElementById('searchHistoryInput').value='';">
                <i class="fa-solid fa-rotate-right"></i>
                <span>Reset</span>
            </button>
        </div>
    </div>

    <!-- History Data Table Card -->
    <div class="customer-table-card">
        <div class="table-responsive">
            <table class="table customer-table" style="min-width: 900px;">
                <thead>
                    <tr>
                        <th style="width: 12%;">Tanggal</th>
                        <th style="width: 15%;">Customer</th>
                        <th style="width: 15%;">Unit</th>
                        <th style="width: 12%;">Maintenance</th>
                        <th style="width: 12%;">Tipe Operasi</th>
                        <th style="width: 10%;">HM</th>
                        <th style="width: 12%;">So No</th>
                        <th style="width: 12%;">Sumber</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr>
                        <td style="color: #475569; font-weight: 500;">01 Agu 2026</td>
                        <td>
                            <div class="fw-bold" style="color: #334155; font-size: 0.85rem;">PT. Toyomatsu</div>
                        </td>
                        <td>
                            <div class="text-dark" style="font-size: 0.85rem;">Toyota 8FD30</div>
                            <div class="text-muted" style="font-size: 0.85rem;">8FD30-11029</div>
                        </td>
                        <td class="fw-bold" style="color: #334155;">Tune Up</td>
                        <td style="color: #475569; font-size: 0.85rem;">Heavy Duty</td>
                        <td style="color: #475569; font-size: 0.85rem;">2.040 HM</td>
                        <td style="color: #475569; font-size: 0.85rem;">
                            <div>SO -</div>
                            <div>2605 - 201</div>
                        </td>
                        <td style="color: #475569; font-size: 0.85rem;">Service with<br>company</td>
                    </tr>
                    <!-- Row 2 -->
                    <tr>
                        <td style="color: #475569; font-weight: 500;">01 Agu 2026</td>
                        <td>
                            <div class="fw-bold" style="color: #334155; font-size: 0.85rem;">PT. Toyomatsu</div>
                        </td>
                        <td>
                            <div class="text-dark" style="font-size: 0.85rem;">Toyota 8FD30</div>
                            <div class="text-muted" style="font-size: 0.85rem;">8FD30-11029</div>
                        </td>
                        <td class="fw-bold" style="color: #334155;">Tune Up</td>
                        <td style="color: #475569; font-size: 0.85rem;">Low Duty</td>
                        <td style="color: #475569; font-size: 0.85rem;">2.040 HM</td>
                        <td style="color: #475569; font-size: 0.85rem;">
                            <div>SO -</div>
                            <div>2605 - 201</div>
                        </td>
                        <td style="color: #475569; font-size: 0.85rem;">Self-Service</td>
                    </tr>
                    <!-- Row 3 -->
                    <tr>
                        <td style="color: #475569; font-weight: 500;">01 Agu 2026</td>
                        <td>
                            <div class="fw-bold" style="color: #334155; font-size: 0.85rem;">PT. Toyomatsu</div>
                        </td>
                        <td>
                            <div class="text-dark" style="font-size: 0.85rem;">Toyota 8FD30</div>
                            <div class="text-muted" style="font-size: 0.85rem;">8FD30-11029</div>
                        </td>
                        <td class="fw-bold" style="color: #334155;">Tune Up</td>
                        <td style="color: #475569; font-size: 0.85rem;">Medium Duty</td>
                        <td style="color: #475569; font-size: 0.85rem;">2.040 HM</td>
                        <td style="color: #475569; font-size: 0.85rem;">
                            <div>SO -</div>
                            <div>2605 - 201</div>
                        </td>
                        <td style="color: #475569; font-size: 0.85rem;">Sparepart</td>
                    </tr>
                    <!-- Row 4 -->
                    <tr>
                        <td style="color: #475569; font-weight: 500;">01 Agu 2026</td>
                        <td>
                            <div class="fw-bold" style="color: #334155; font-size: 0.85rem;">PT. Toyomatsu</div>
                        </td>
                        <td>
                            <div class="text-dark" style="font-size: 0.85rem;">Toyota 8FD30</div>
                            <div class="text-muted" style="font-size: 0.85rem;">8FD30-11029</div>
                        </td>
                        <td class="fw-bold" style="color: #334155;">Tune Up</td>
                        <td style="color: #475569; font-size: 0.85rem;">Low Duty</td>
                        <td style="color: #475569; font-size: 0.85rem;">2.040 HM</td>
                        <td style="color: #475569; font-size: 0.85rem;">
                            <div>SO -</div>
                            <div>2605 - 201</div>
                        </td>
                        <td style="color: #475569; font-size: 0.85rem;">Sparepart</td>
                    </tr>
                    <!-- Row 5 -->
                    <tr>
                        <td style="color: #475569; font-weight: 500;">01 Agu 2026</td>
                        <td>
                            <div class="fw-bold" style="color: #334155; font-size: 0.85rem;">PT. Toyomatsu</div>
                        </td>
                        <td>
                            <div class="text-dark" style="font-size: 0.85rem;">Toyota 8FD30</div>
                            <div class="text-muted" style="font-size: 0.85rem;">8FD30-11029</div>
                        </td>
                        <td class="fw-bold" style="color: #334155;">Tune Up</td>
                        <td style="color: #475569; font-size: 0.85rem;">Medium Duty</td>
                        <td style="color: #475569; font-size: 0.85rem;">2.040 HM</td>
                        <td style="color: #475569; font-size: 0.85rem;">
                            <div>SO -</div>
                            <div>2605 - 201</div>
                        </td>
                        <td style="color: #475569; font-size: 0.85rem;">Service with<br>company</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="table-pagination-footer d-flex justify-content-end align-items-center" style="padding: 28px 36px 36px; border-top: 1px solid #EEF2F6;">
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

