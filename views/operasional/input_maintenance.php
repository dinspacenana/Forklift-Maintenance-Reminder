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

                        <!-- Nama Customer -->
                        <div class="mb-3 position-relative">
                            <label for="namaCustomerInput" class="user-form-label">
                                Nama Customer
                            </label>
                            <input type="text" class="user-form-input" id="namaCustomerInput" placeholder="Masukkan Customer" autocomplete="off">
                            <div class="text-muted" style="font-size: 0.74rem; margin-top: 5px; color: #64748B; line-height: 1.3;">
                                Ketik minimal 1 karakter untuk mencari customer yang sudah terdaftar
                            </div>

                            <!-- Autocomplete Suggestions List -->
                            <div id="customerSuggestions" class="autocomplete-suggestions" style="display: none;"></div>
                        </div>

                        <!-- Unit Forklift -->
                        <div class="mb-3">
                            <label for="unitForkliftSelect" class="user-form-label">Unit Forklift</label>
                            <select class="user-form-select" id="unitForkliftSelect" disabled style="background-color: transparent; cursor: not-allowed; color: #6b7280;">
                                <option value="" selected disabled>Pilih Unit Forklift</option>
                            </select>
                        </div>

                        <!-- Tipe Operasi -->
                        <div>
                            <label for="tipeOperasiInput" class="user-form-label">Tipe Operasi</label>
                            <input type="text" class="user-form-input" id="tipeOperasiInput" placeholder="Tipe Operasi" style="max-width: 180px; background-color: transparent; cursor: not-allowed; color: #6b7280;" readonly>
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
                                <label for="jenisMaintSelect" class="user-form-label">Jenis Maintenance</label>
                                <select class="user-form-select" id="jenisMaintSelect">
                                    <option value="" selected disabled>Pilih Jenis Maintenance</option>
                                    <option value="Overhaul">Overhaul</option>
                                    <option value="Tune Up">Tune Up</option>
                                    <option value="Preventive Service">Preventive Service</option>
                                </select>
                            </div>

                            <!-- Tanggal Maintenance -->
                            <div class="col-12 col-sm-6">
                                <label for="tanggalMaintInput" class="user-form-label">Tanggal Maintenance</label>
                                <div class="user-date-input-group">
                                    <input type="date" id="tanggalMaintInput" style="width: 100%; border: none; outline: none; background: transparent; padding-left: 18px;" class="hide-native-date-icon">
                                    <span class="material-symbols-outlined" style="cursor: pointer; color: #64748B; margin-right: 14px;" onclick="document.getElementById('tanggalMaintInput').showPicker()">calendar_today</span>
                                </div>
                            </div>
                        </div>

                        <!-- Hour Meter Terakhir -->
                        <div class="mb-3">
                            <label for="hourMeterInput" class="user-form-label">Hour Meter Terakhir</label>
                            <div class="user-date-input-group">
                                <input type="number" id="hourMeterInput" placeholder="Masukkan HM" min="0" step="250" style="width: 100%; border: none; outline: none; background: transparent;">
                                <span class="hm-badge" style="margin-left: auto;">HM</span>
                            </div>
                        </div>

                        <!-- Radio Service Types -->
                        <div class="maint-radio-group">
                            <label class="custom-radio-item">
                                <input type="radio" name="serviceCategory" value="company" id="radioServiceCompany">
                                <span>Servis Perusahaan</span>
                            </label>
                            <label class="custom-radio-item">
                                <input type="radio" name="serviceCategory" value="self" id="radioSelfService">
                                <span>Servis Mandiri</span>
                            </label>
                            <label class="custom-radio-item">
                                <input type="radio" name="serviceCategory" value="sparepart" id="radioSparepart">
                                <span>Sparepart</span>
                            </label>
                        </div>

                        <!-- Dynamic Row: Dilayani Oleh & Sales Order (SO) -->
                        <div class="row g-3" id="dynamicServiceRow">
                            <!-- Dilayani Oleh -->
                            <div class="col-12 col-sm-6" id="servedByContainer" style="display: none;">
                                <label for="servedBySelect" class="user-form-label">Dilayani Oleh</label>
                                <select class="user-form-select" id="servedBySelect">
                                    <option value="" selected disabled>Pilih PIC Service</option>
                                    <option value="Admin Sales">Admin Sales</option>
                                    <option value="Kepala Toko">Kepala Toko</option>
                                    <option value="Teknisi Lapangan">Teknisi Lapangan</option>
                                </select>
                            </div>

                            <!-- Sales Order (SO) -->
                            <div class="col-12 col-sm-6" id="salesOrderContainer">
                                <label for="salesOrderInput" class="user-form-label">Sales Order (SO)</label>
                                <input type="text" class="user-form-input" id="salesOrderInput" placeholder="Masukkan No. SO">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PANEL 3: Cek Sparepart (Full Width Bottom Card) -->
                <div class="col-12">
                    <div class="input-maint-sub-card">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h4 class="input-maint-card-title mb-0">Cek Sparepart</h4>
                            <button type="button" class="btn-maint-cek" id="btnCekSparepart" disabled style="background-color: #d1d5db; border-color: #d1d5db; cursor: not-allowed; color: #6b7280;">Cek</button>
                        </div>
                        
                        <!-- Hint text for Sparepart -->
                        <div id="cekSparepartHint" style="padding: 20px; text-align: center; color: #64748B; font-size: 0.88rem; background-color: #F8FAFC; border: 1px dashed #CBD5E1; border-radius: 12px;">
                            <span class="material-symbols-outlined align-middle me-1" style="font-size: 1.1rem; color: #94A3B8;">info</span>
                            Pilih Unit Forklift terlebih dahulu untuk memunculkan daftar sparepart.
                        </div>

                        <!-- Sparepart Table -->
                        <div class="table-responsive" id="sparepartTableContainer" style="display: none;">
                            <table class="table sparepart-table">
                                <thead>
                                    <tr>
                                        <th style="width: 25%;">Kode Barang</th>
                                        <th style="width: 32%;">Nama Barang</th>
                                        <th style="width: 14%;">Jumlah</th>
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
        } else {
            dynamicRow.style.display = 'none';
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
            if (unitSelect) {
                unitSelect.innerHTML = `<option value="" selected disabled>Pilih Customer Dahulu</option>`;
                unitSelect.disabled = true;
                unitSelect.style.backgroundColor = 'transparent';
                unitSelect.style.cursor = 'not-allowed';
                unitSelect.style.color = '#6b7280';
            }
            if (tipeOperasiInput) tipeOperasiInput.value = '';
            if (typeof checkEnableCekButton === 'function') checkEnableCekButton();

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
                        
                        // Populate and enable unit forklift select
                        const custObj = customerList.find(c => c.name === this.dataset.name);
                        if (custObj && unitSelect) {
                            unitSelect.innerHTML = `<option value="" selected disabled>Pilih Unit Forklift</option>` + 
                                custObj.units.map(u => `<option value="${u}">${u}</option>`).join('');
                            unitSelect.disabled = false;
                            unitSelect.style.backgroundColor = '#FFFFFF';
                            unitSelect.style.cursor = 'pointer';
                            unitSelect.style.color = '#111827';
                        }
                        
                        suggestionsBox.style.display = 'none';
                        if (typeof checkEnableCekButton === 'function') checkEnableCekButton();
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

    // Button Cek Logic
    const btnCekSparepart = document.getElementById('btnCekSparepart');
    const sparepartTableContainer = document.getElementById('sparepartTableContainer');
    const jenisMaintSelect = document.getElementById('jenisMaintSelect');
    const cekSparepartHint = document.getElementById('cekSparepartHint');

    function checkEnableCekButton() {
        if (custInput && unitSelect && 
            custInput.value.trim() !== '' && 
            unitSelect.value !== '') {
            btnCekSparepart.disabled = false;
            btnCekSparepart.style.backgroundColor = '';
            btnCekSparepart.style.borderColor = '';
            btnCekSparepart.style.cursor = 'pointer';
            btnCekSparepart.style.color = '';
            if (cekSparepartHint) cekSparepartHint.innerHTML = '<span class="material-symbols-outlined align-middle me-1" style="font-size: 1.1rem; color: #3B82F6;">info</span> Klik tombol Cek untuk menampilkan daftar sparepart.';
        } else {
            btnCekSparepart.disabled = true;
            btnCekSparepart.style.backgroundColor = '#d1d5db';
            btnCekSparepart.style.borderColor = '#d1d5db';
            btnCekSparepart.style.cursor = 'not-allowed';
            btnCekSparepart.style.color = '#6b7280';
            if (cekSparepartHint) {
                cekSparepartHint.innerHTML = '<span class="material-symbols-outlined align-middle me-1" style="font-size: 1.1rem; color: #94A3B8;">info</span> Pilih Unit Forklift terlebih dahulu untuk memunculkan daftar sparepart.';
                cekSparepartHint.style.display = 'block';
            }
            if (sparepartTableContainer) sparepartTableContainer.style.display = 'none';
        }
    }

    if (custInput) custInput.addEventListener('input', checkEnableCekButton);
    if (unitSelect) unitSelect.addEventListener('change', checkEnableCekButton);
    if (jenisMaintSelect) jenisMaintSelect.addEventListener('change', checkEnableCekButton);

    if (btnCekSparepart) {
        btnCekSparepart.addEventListener('click', function() {
            if (!this.disabled && sparepartTableContainer) {
                sparepartTableContainer.style.display = 'block';
                if (cekSparepartHint) cekSparepartHint.style.display = 'none';
            }
        });
    }

    // HM Validation Logic
    const toastHTML = `
    <div class="position-fixed p-3" style="z-index: 1050; top: 20px; right: 20px;">
        <div id="hmErrorToast" class="toast align-items-center border-0 shadow-sm" role="alert" aria-live="assertive" aria-atomic="true" style="background-color: #FEF2F2; border-left: 4px solid #EF4444 !important; border-radius: 8px;">
            <div class="d-flex">
                <div class="toast-body" style="color: #991B1B; font-weight: 500; font-size: 0.88rem; font-family: 'Inter', sans-serif;">
                    <span class="material-symbols-outlined align-middle me-2" style="font-size: 1.2rem; color: #EF4444;">error</span>
                    Nilai HM tidak boleh lebih kecil atau sama dengan HM Terakhir.
                </div>
                <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close" style="filter: none; opacity: 0.8;"></button>
            </div>
        </div>
    </div>`;
    document.body.insertAdjacentHTML('beforeend', toastHTML);

    const form = document.querySelector('form');
    const hourMeterInput = document.getElementById('hourMeterInput');
    const lastHM = 5000; // Simulasi nilai last HM

    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            if (hourMeterInput && hourMeterInput.value !== '') {
                if (parseInt(hourMeterInput.value) <= lastHM) {
                    const toastEl = document.getElementById('hmErrorToast');
                    if (typeof bootstrap !== 'undefined') {
                        const toast = new bootstrap.Toast(toastEl);
                        toast.show();
                    } else {
                        toastEl.classList.add('show');
                        setTimeout(() => toastEl.classList.remove('show'), 3000);
                    }
                } else {
                    // Berhasil disubmit
                    alert('Data berhasil disimpan!');
                }
            }
        });
    }
});
</script>
