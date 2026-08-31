<!-- views/operasional/input_maintenance.php - Operasional Input Maintenance View -->
<!-- MAIN CONTENT -->
<main class="dashboard-container">
    <!-- Page Title -->
    <h2 class="page-title">Input Maintenance</h2>

    <!-- Main Outer Wrapper Card -->
    <div class="input-maint-wrapper-card">
        <form onsubmit="event.preventDefault();">
            <div class="row g-4 mb-4">
                <!-- PANEL 1: Informasi Unit & Forklift (Top Left) -->
                <div class="col-12 col-lg-6">
                    <div class="input-maint-sub-card">
                        <h4 class="input-maint-card-title">Informasi Unit & Forklift</h4>

                        <!-- Nama Customer (Search from Portal) -->
                        <div class="mb-3 position-relative">
                            <label for="namaCustomerInput" class="input-maint-label">
                                Nama Customer <span class="text-muted fw-normal" style="font-size: 0.8rem; margin-left: 4px;">(Cari dari portal)</span>
                            </label>
                            <input type="text" class="input-maint-pill" id="namaCustomerInput" placeholder="" autocomplete="off">
                            <div class="text-muted" style="font-size: 0.76rem; margin-top: 5px; color: #64748B;">
                                Ketik minimal 1 karakter untuk mencari customer yang sudah terdaftar di portal
                            </div>

                            <!-- Autocomplete Suggestions List -->
                            <div id="customerSuggestions" class="autocomplete-suggestions" style="display: none;"></div>
                        </div>

                        <!-- Unit Forklift -->
                        <div class="mb-3">
                            <label for="unitForkliftSelect" class="input-maint-label">Unit Forklift</label>
                            <select class="input-maint-select-pill" id="unitForkliftSelect">
                                <option value="" selected disabled></option>
                                <option value="FL-101 (Toyota - 8FD30)">FL-101 (Toyota - 8FD30)</option>
                                <option value="FL-102 (Mitsubishi - FD25N)">FL-102 (Mitsubishi - FD25N)</option>
                                <option value="FL-103 (Komatsu - FG25N)">FL-103 (Komatsu - FG25N)</option>
                                <option value="FL-104 (Komatsu - FD25T-17)">FL-104 (Komatsu - FD25T-17)</option>
                                <option value="FL-105 (Toyota - 8FD15)">FL-105 (Toyota - 8FD15)</option>
                            </select>
                        </div>

                        <!-- Tipe Operasi -->
                        <div>
                            <label for="tipeOperasiInput" class="input-maint-label">Tipe Operasi</label>
                            <input type="text" class="input-maint-pill" id="tipeOperasiInput" style="max-width: 180px;">
                        </div>
                    </div>
                </div>

                <!-- PANEL 2: Detail Eksekusi Maintenance (Top Right) -->
                <div class="col-12 col-lg-6">
                    <div class="input-maint-sub-card">
                        <h4 class="input-maint-card-title">Detail Eksekusi Maintenance</h4>

                        <div class="row g-3 mb-3">
                            <!-- Jenis Maintenance -->
                            <div class="col-12 col-sm-6">
                                <label for="jenisMaintSelect" class="input-maint-label">Jenis Maintenance</label>
                                <select class="input-maint-select-pill" id="jenisMaintSelect">
                                    <option value="" selected disabled></option>
                                    <option value="Overhaul">Overhaul</option>
                                    <option value="Tune Up">Tune Up</option>
                                    <option value="Preventive Service">Preventive Service</option>
                                </select>
                            </div>

                            <!-- Tanggal Maintenance -->
                            <div class="col-12 col-sm-6">
                                <label for="tanggalMaintInput" class="input-maint-label">Tanggal Maintenance</label>
                                <div class="date-input-group">
                                    <input type="date" id="tanggalMaintInput">
                                </div>
                            </div>
                        </div>

                        <!-- Hour Meter Terakhir -->
                        <div class="mb-3">
                            <label for="hourMeterInput" class="input-maint-label">Hour Meter Terakhir</label>
                            <div class="hour-meter-group">
                                <input type="number" id="hourMeterInput" placeholder="">
                                <span class="hm-badge">HM</span>
                            </div>
                        </div>

                        <!-- Radio Service Types -->
                        <div class="maint-radio-group">
                            <label class="custom-radio-item">
                                <input type="radio" name="serviceCategory" value="company" id="radioServiceCompany">
                                <span>Service With Company</span>
                            </label>
                            <label class="custom-radio-item">
                                <input type="radio" name="serviceCategory" value="self" id="radioSelfService">
                                <span>Self-Service</span>
                            </label>
                            <label class="custom-radio-item">
                                <input type="radio" name="serviceCategory" value="sparepart" id="radioSparepart" checked>
                                <span>Sparepart</span>
                            </label>
                        </div>

                        <!-- Dynamic Row: Served By & Sales Order (SO) -->
                        <div class="row g-3" id="dynamicServiceRow">
                            <!-- Served By -->
                            <div class="col-12 col-sm-6" id="servedByContainer" style="display: none;">
                                <label for="servedBySelect" class="input-maint-label">Served By</label>
                                <select class="input-maint-select-pill" id="servedBySelect">
                                    <option value="" selected disabled></option>
                                    <option value="Admin Sales">Admin Sales</option>
                                    <option value="Kepala Toko">Kepala Toko</option>
                                    <option value="Teknisi Lapangan">Teknisi Lapangan</option>
                                </select>
                            </div>

                            <!-- Sales Order (SO) -->
                            <div class="col-12 col-sm-6" id="salesOrderContainer">
                                <label for="salesOrderInput" class="input-maint-label">Sales Order (SO)</label>
                                <input type="text" class="input-maint-pill" id="salesOrderInput">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PANEL 3: Cek Sparepart (Full Width Bottom Card) -->
                <div class="col-12">
                    <div class="input-maint-sub-card">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h4 class="input-maint-card-title mb-0">Cek Sparepart</h4>
                            <button type="button" class="btn-maint-cek">Cek</button>
                        </div>

                        <!-- Sparepart Table -->
                        <div class="table-responsive">
                            <table class="table sparepart-table">
                                <thead>
                                    <tr>
                                        <th style="width: 25%;">Kode Barang</th>
                                        <th style="width: 32%;">Nama Barang</th>
                                        <th style="width: 14%;">Qyt</th>
                                        <th style="width: 14%;">Satuan</th>
                                        <th style="width: 15%;">SO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Row 1 -->
                                    <tr>
                                        <td class="fw-bold">Fc1001G90</td>
                                        <td>Filter Oil Engine</td>
                                        <td>2</td>
                                        <td><span style="border-left: 1.5px solid #CBD5E1; padding-left: 14px;">Pcs</span></td>
                                        <td>26080001</td>
                                    </tr>
                                    <!-- Row 2 -->
                                    <tr>
                                        <td class="fw-bold">ZU001</td>
                                        <td>Oil Engine</td>
                                        <td>1</td>
                                        <td><span style="border-left: 1.5px solid #CBD5E1; padding-left: 14px;">Liter</span></td>
                                        <td>26080001</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons at Bottom Right -->
            <div class="d-flex justify-content-end align-items-center gap-3">
                <button type="button" class="btn-maint-cancel">Batal</button>
                <button type="submit" class="btn-maint-submit">Simpan</button>
            </div>
        </form>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const radioCompany = document.getElementById('radioServiceCompany');
    const radioSelf = document.getElementById('radioSelfService');
    const radioSparepart = document.getElementById('radioSparepart');
    const servedByContainer = document.getElementById('servedByContainer');
    const salesOrderContainer = document.getElementById('salesOrderContainer');
    const dynamicRow = document.getElementById('dynamicServiceRow');

    function updateServiceFields() {
        if (radioCompany && radioCompany.checked) {
            dynamicRow.style.display = 'flex';
            servedByContainer.style.display = 'block';
            salesOrderContainer.style.display = 'block';
            salesOrderContainer.className = 'col-12 col-sm-6';
        } else if (radioSelf && radioSelf.checked) {
            dynamicRow.style.display = 'none';
        } else if (radioSparepart && radioSparepart.checked) {
            dynamicRow.style.display = 'flex';
            servedByContainer.style.display = 'none';
            salesOrderContainer.style.display = 'block';
            salesOrderContainer.className = 'col-12 col-sm-6';
        }
    }

    if (radioCompany) radioCompany.addEventListener('change', updateServiceFields);
    if (radioSelf) radioSelf.addEventListener('change', updateServiceFields);
    if (radioSparepart) radioSparepart.addEventListener('change', updateServiceFields);

    updateServiceFields();

    // Autocomplete Customer Logic
    const customerList = [
        { name: 'PT. Toyo Matsu', duty: 'Heavy Duty', units: ['FL-101 (Toyota - 8FD30)', 'FL-102 (Mitsubishi - FD25N)'] },
        { name: 'PT. Nusantara Logistik', duty: 'Low Duty', units: ['FL-101 (Toyota - 8FD30)', 'FL-104 (Komatsu - FD25T-17)'] },
        { name: 'PT. Robin Jaya', duty: 'Medium Duty', units: ['FL-103 (Komatsu - FG25N)'] },
        { name: 'PT. Maju Jaya', duty: 'Heavy Duty', units: ['FL-101 (Toyota - 8FD30)', 'FL-105 (Toyota - 8FD15)'] },
        { name: 'PT. GatotKaca Logistik', duty: 'Low Duty', units: ['FL-102 (Mitsubishi - FD25N)'] },
        { name: 'PT. Maju Mundur Makmur', duty: 'Heavy Duty', units: ['FL-101 (Toyota - 8FD30)'] },
        { name: 'CV. Baja Perkasa', duty: 'Heavy Duty', units: ['FL-103 (Komatsu - FG25N)', 'FL-104 (Komatsu - FD25T-17)'] }
    ];

    const custInput = document.getElementById('namaCustomerInput');
    const suggestionsBox = document.getElementById('customerSuggestions');
    const tipeOperasiInput = document.getElementById('tipeOperasiInput');
    const unitSelect = document.getElementById('unitForkliftSelect');

    if (custInput && suggestionsBox) {
        custInput.addEventListener('input', function() {
            const query = this.value.trim().toLowerCase();
            if (query.length < 1) {
                suggestionsBox.style.display = 'none';
                return;
            }

            const filtered = customerList.filter(c => c.name.toLowerCase().includes(query));
            if (filtered.length > 0) {
                suggestionsBox.innerHTML = filtered.map(c => 
                    `<div class="autocomplete-item" data-name="${c.name}" data-duty="${c.duty}">${c.name}</div>`
                ).join('');
                suggestionsBox.style.display = 'block';

                suggestionsBox.querySelectorAll('.autocomplete-item').forEach(item => {
                    item.addEventListener('click', function() {
                        custInput.value = this.dataset.name;
                        if (tipeOperasiInput) tipeOperasiInput.value = this.dataset.duty;
                        
                        // Optionally update unit forklift select
                        const custObj = customerList.find(c => c.name === this.dataset.name);
                        if (custObj && unitSelect) {
                            unitSelect.innerHTML = `<option value="" selected disabled></option>` + 
                                custObj.units.map(u => `<option value="${u}">${u}</option>`).join('');
                        }
                        
                        suggestionsBox.style.display = 'none';
                    });
                });
            } else {
                suggestionsBox.innerHTML = `<div class="autocomplete-item text-muted" style="cursor: default; font-weight: normal;">Tidak ada customer ditemukan</div>`;
                suggestionsBox.style.display = 'block';
            }
        });

        document.addEventListener('click', function(e) {
            if (!custInput.contains(e.target) && !suggestionsBox.contains(e.target)) {
                suggestionsBox.style.display = 'none';
            }
        });
    }
});
</script>
