<!-- views/report/history.php - History View -->
<main class="dashboard-container">
    <!-- Header with Title and Export Button -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="page-title mb-0">History</h2>
        <button class="btn fmr-btn-submit d-flex align-items-center" style="gap: 8px;">
            <span class="material-symbols-outlined">download</span> Ekspor Laporan
        </button>
    </div>

    <!-- Search, Filters, and Reset Button Bar -->
    <div class="customer-filter-bar">
        
        <!-- Search Input -->
        <div class="search-input-pill">
            <span class="material-symbols-outlined">search</span>
            <input type="text" placeholder="Cari Customer" id="searchHistoryInput">
        </div>

        <div class="d-flex align-items-center gap-3 flex-wrap">
            <!-- Date Range Picker -->
            <div class="d-flex align-items-center gap-2">
                <div class="date-filter-pill-box">
                    <input type="text" value="01/08/26" readonly>
                    <span class="material-symbols-outlined">calendar_today</span>
                </div>
                <span class="fw-bold" style="color: #94A3B8;">-</span>
                <div class="date-filter-pill-box">
                    <input type="text" value="02/08/26" readonly>
                    <span class="material-symbols-outlined">calendar_today</span>
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
                <span class="material-symbols-outlined">restart_alt</span>
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
                    <tr class="history-row" style="cursor: pointer;" 
                        data-customer="PT. Toyomatsu" 
                        data-unit="Toyota 8FD30 (8FD30-11029)" 
                        data-operation="Heavy Duty" 
                        data-maintenance="Tune Up" 
                        data-date="01 Agu 2026" 
                        data-hm="2.040 HM" 
                        data-source="Service with company" 
                        data-spareparts="Filter Oli, Filter Udara, Oli Mesin" 
                        data-servedby="Budi Santoso" 
                        data-so="SO-2605-201">
                        <td style="color: #475569; font-weight: 500;">01 Agu 2026</td>
                        <td>
                            <div class="fw-bold" style="color: #334155; font-size: 0.85rem;">PT. Toyomatsu</div>
                        </td>
                        <td>
                            <div class="text-dark" style="font-size: 0.85rem;">Toyota 8FD30</div>
                            <div class="text-muted" style="font-size: 0.85rem;">8FD30-11029</div>
                        </td>
                        <td style="color: #334155; font-size: 0.85rem;">Tune Up</td>
                        <td style="color: #475569; font-size: 0.85rem;">Heavy Duty</td>
                        <td style="color: #475569; font-size: 0.85rem;">2.040 HM</td>
                        <td style="color: #475569; font-size: 0.85rem;">
                            <div>SO -</div>
                            <div>2605 - 201</div>
                        </td>
                        <td style="color: #475569; font-size: 0.85rem;">Service with<br>company</td>
                    </tr>
                    <!-- Row 2 -->
                    <tr class="history-row" style="cursor: pointer;" 
                        data-customer="PT. Toyomatsu" 
                        data-unit="Toyota 8FD30 (8FD30-11029)" 
                        data-operation="Low Duty" 
                        data-maintenance="Tune Up" 
                        data-date="01 Agu 2026" 
                        data-hm="2.040 HM" 
                        data-source="Self-Service" 
                        data-spareparts="Filter Oli" 
                        data-servedby="-" 
                        data-so="-">
                        <td style="color: #475569; font-weight: 500;">01 Agu 2026</td>
                        <td>
                            <div class="fw-bold" style="color: #334155; font-size: 0.85rem;">PT. Toyomatsu</div>
                        </td>
                        <td>
                            <div class="text-dark" style="font-size: 0.85rem;">Toyota 8FD30</div>
                            <div class="text-muted" style="font-size: 0.85rem;">8FD30-11029</div>
                        </td>
                        <td style="color: #334155; font-size: 0.85rem;">Tune Up</td>
                        <td style="color: #475569; font-size: 0.85rem;">Low Duty</td>
                        <td style="color: #475569; font-size: 0.85rem;">2.040 HM</td>
                        <td style="color: #475569; font-size: 0.85rem;">
                            <div>-</div>
                        </td>
                        <td style="color: #475569; font-size: 0.85rem;">Self-Service</td>
                    </tr>
                    <!-- Row 3 -->
                    <tr class="history-row" style="cursor: pointer;" 
                        data-customer="PT. Toyomatsu" 
                        data-unit="Toyota 8FD30 (8FD30-11029)" 
                        data-operation="Medium Duty" 
                        data-maintenance="Tune Up" 
                        data-date="01 Agu 2026" 
                        data-hm="2.040 HM" 
                        data-source="Sparepart" 
                        data-spareparts="Kampas Rem" 
                        data-servedby="-" 
                        data-so="SO-2605-202">
                        <td style="color: #475569; font-weight: 500;">01 Agu 2026</td>
                        <td>
                            <div class="fw-bold" style="color: #334155; font-size: 0.85rem;">PT. Toyomatsu</div>
                        </td>
                        <td>
                            <div class="text-dark" style="font-size: 0.85rem;">Toyota 8FD30</div>
                            <div class="text-muted" style="font-size: 0.85rem;">8FD30-11029</div>
                        </td>
                        <td style="color: #334155; font-size: 0.85rem;">Tune Up</td>
                        <td style="color: #475569; font-size: 0.85rem;">Medium Duty</td>
                        <td style="color: #475569; font-size: 0.85rem;">2.040 HM</td>
                        <td style="color: #475569; font-size: 0.85rem;">
                            <div>SO -</div>
                            <div>2605 - 202</div>
                        </td>
                        <td style="color: #475569; font-size: 0.85rem;">Sparepart</td>
                    </tr>
                    <!-- Row 4 -->
                    <tr class="history-row" style="cursor: pointer;" 
                        data-customer="PT. Toyomatsu" 
                        data-unit="Toyota 8FD30 (8FD30-11029)" 
                        data-operation="Low Duty" 
                        data-maintenance="Tune Up" 
                        data-date="01 Agu 2026" 
                        data-hm="2.040 HM" 
                        data-source="Sparepart" 
                        data-spareparts="Oli Hidrolik" 
                        data-servedby="-" 
                        data-so="SO-2605-203">
                        <td style="color: #475569; font-weight: 500;">01 Agu 2026</td>
                        <td>
                            <div class="fw-bold" style="color: #334155; font-size: 0.85rem;">PT. Toyomatsu</div>
                        </td>
                        <td>
                            <div class="text-dark" style="font-size: 0.85rem;">Toyota 8FD30</div>
                            <div class="text-muted" style="font-size: 0.85rem;">8FD30-11029</div>
                        </td>
                        <td style="color: #334155; font-size: 0.85rem;">Tune Up</td>
                        <td style="color: #475569; font-size: 0.85rem;">Low Duty</td>
                        <td style="color: #475569; font-size: 0.85rem;">2.040 HM</td>
                        <td style="color: #475569; font-size: 0.85rem;">
                            <div>SO -</div>
                            <div>2605 - 203</div>
                        </td>
                        <td style="color: #475569; font-size: 0.85rem;">Sparepart</td>
                    </tr>
                    <!-- Row 5 -->
                    <tr class="history-row" style="cursor: pointer;" 
                        data-customer="PT. Toyomatsu" 
                        data-unit="Toyota 8FD30 (8FD30-11029)" 
                        data-operation="Medium Duty" 
                        data-maintenance="Tune Up" 
                        data-date="01 Agu 2026" 
                        data-hm="2.040 HM" 
                        data-source="Service with company" 
                        data-spareparts="V-Belt, Bearing" 
                        data-servedby="Andi Kurniawan" 
                        data-so="SO-2605-204">
                        <td style="color: #475569; font-weight: 500;">01 Agu 2026</td>
                        <td>
                            <div class="fw-bold" style="color: #334155; font-size: 0.85rem;">PT. Toyomatsu</div>
                        </td>
                        <td>
                            <div class="text-dark" style="font-size: 0.85rem;">Toyota 8FD30</div>
                            <div class="text-muted" style="font-size: 0.85rem;">8FD30-11029</div>
                        </td>
                        <td style="color: #334155; font-size: 0.85rem;">Tune Up</td>
                        <td style="color: #475569; font-size: 0.85rem;">Medium Duty</td>
                        <td style="color: #475569; font-size: 0.85rem;">2.040 HM</td>
                        <td style="color: #475569; font-size: 0.85rem;">
                            <div>SO -</div>
                            <div>2605 - 204</div>
                        </td>
                        <td style="color: #475569; font-size: 0.85rem;">Service with<br>company</td>
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

    <!-- Detail History Modal -->
    <div class="modal fade" id="historyDetailModal" tabindex="-1" aria-labelledby="historyDetailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 820px;">
            <div class="modal-content modal-customer-content">
                <h4 class="modal-customer-title" id="historyDetailModalLabel">Informasi Detail Maintenance</h4>

                <div class="row g-3 mb-4">
                    <!-- Left Column -->
                    <div class="col-12 col-md-6">
                        <!-- Customer & Unit -->
                        <div class="customer-info-box mb-3">
                            <div class="customer-code-name-row">
                                <div style="flex: 1;">
                                    <div class="info-sub-label">Customer</div>
                                    <div class="info-val-large" id="detailCustomer" style="font-size: 1.1rem;">-</div>
                                </div>
                                <div class="box-vertical-divider"></div>
                                <div style="flex: 1.5;">
                                    <div class="info-sub-label">Unit Forklift</div>
                                    <div class="info-val-large" id="detailUnit" style="font-size: 1.1rem;">-</div>
                                </div>
                            </div>
                        </div>

                        <!-- Maintenance Info -->
                        <div class="customer-info-box">
                            <div class="contact-info-grid" style="grid-template-columns: 1fr; gap: 16px;">
                                <div class="contact-info-item">
                                    <div class="contact-label">Tipe Operasi</div>
                                    <div class="contact-val" id="detailOperation">-</div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-label">Jenis Maintenance</div>
                                    <div class="contact-val" id="detailMaintenance">-</div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-label">HM Terakhir</div>
                                    <div class="contact-val" id="detailHM">-</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-12 col-md-6">
                        <!-- Date & Source -->
                        <div class="customer-info-box mb-3">
                            <div class="customer-code-name-row">
                                <div style="flex: 1;">
                                    <div class="info-sub-label">Tanggal Maintenance</div>
                                    <div class="info-val-large" id="detailDate" style="font-size: 1.1rem;">-</div>
                                </div>
                                <div class="box-vertical-divider"></div>
                                <div style="flex: 1;">
                                    <div class="info-sub-label">Sumber</div>
                                    <div class="info-val-large" id="detailSource" style="font-size: 1.1rem;">-</div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Info -->
                        <div class="customer-info-box">
                            <div class="contact-info-grid" style="grid-template-columns: 1fr; gap: 16px;">
                                <div class="contact-info-item" id="detailServedByContainer" style="display: none;">
                                    <div class="contact-label">Served By</div>
                                    <div class="contact-val" id="detailServedBy">-</div>
                                </div>
                                <div class="contact-info-item" id="detailSOContainer" style="display: none;">
                                    <div class="contact-label">Sales Order (SO)</div>
                                    <div class="contact-val" id="detailSO">-</div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-label">List Sparepart</div>
                                    <div class="contact-val" id="detailSpareparts">-</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Button -->
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn-modal-back" data-bs-dismiss="modal">
                        Kembali
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const historyRows = document.querySelectorAll('.history-row');
        
        // Pastikan bootstrap dimuat sebelum inisialisasi modal
        if (typeof bootstrap !== 'undefined') {
            const modal = new bootstrap.Modal(document.getElementById('historyDetailModal'));
            
            historyRows.forEach(row => {
                row.addEventListener('click', function() {
                    // Get data from attributes
                    const customer = this.getAttribute('data-customer') || '-';
                    const unit = this.getAttribute('data-unit') || '-';
                    const operation = this.getAttribute('data-operation') || '-';
                    const maintenance = this.getAttribute('data-maintenance') || '-';
                    const date = this.getAttribute('data-date') || '-';
                    const hm = this.getAttribute('data-hm') || '-';
                    const source = this.getAttribute('data-source') || '-';
                    const spareparts = this.getAttribute('data-spareparts') || '-';
                    const servedby = this.getAttribute('data-servedby') || '-';
                    const so = this.getAttribute('data-so') || '-';

                    // Populate modal fields
                    document.getElementById('detailCustomer').textContent = customer;
                    document.getElementById('detailUnit').textContent = unit;
                    document.getElementById('detailOperation').textContent = operation;
                    document.getElementById('detailMaintenance').textContent = maintenance;
                    document.getElementById('detailDate').textContent = date;
                    document.getElementById('detailHM').textContent = hm;
                    document.getElementById('detailSource').textContent = source;
                    
                    // Format spareparts list if it contains commas
                    if (spareparts !== '-') {
                        const partsArray = spareparts.split(',');
                        if (partsArray.length > 1) {
                            document.getElementById('detailSpareparts').innerHTML = '<ul class="mb-0 ps-3">' + partsArray.map(p => `<li>${p.trim()}</li>`).join('') + '</ul>';
                        } else {
                            document.getElementById('detailSpareparts').textContent = spareparts;
                        }
                    } else {
                        document.getElementById('detailSpareparts').textContent = '-';
                    }

                    // Handle conditional fields
                    const servedByContainer = document.getElementById('detailServedByContainer');
                    const soContainer = document.getElementById('detailSOContainer');

                    servedByContainer.style.display = 'none';
                    soContainer.style.display = 'none';

                    const sourceLower = source.toLowerCase();
                    if (sourceLower.includes('service with company')) {
                        servedByContainer.style.display = 'block';
                        document.getElementById('detailServedBy').textContent = servedby;
                        
                        soContainer.style.display = 'block';
                        document.getElementById('detailSO').textContent = so;
                    } else if (sourceLower.includes('sparepart')) {
                        soContainer.style.display = 'block';
                        document.getElementById('detailSO').textContent = so;
                    }
                    // if self service, both remain hidden

                    // Show modal
                    modal.show();
                });
            });
        } else {
            console.error('Bootstrap JS tidak ditemukan!');
        }
    });
</script>

