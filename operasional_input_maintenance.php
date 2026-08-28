<?php
// operasional_input_maintenance.php - Operasional Input Maintenance FMR
include_once __DIR__ . '/header.php';
?>

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
                        <div class="mb-3">
                            <label for="namaCustomerSelect" class="input-maint-label">Nama Customer</label>
                            <select class="input-maint-select-pill" id="namaCustomerSelect">
                                <option value="" selected disabled></option>
                                <option value="PT. Toyo Matsu">PT. Toyo Matsu</option>
                                <option value="PT. Nusantara Logistik">PT. Nusantara Logistik</option>
                                <option value="PT. Robin Jaya">PT. Robin Jaya</option>
                                <option value="PT. Maju Jaya">PT. Maju Jaya</option>
                                <option value="PT. GatotKaca Logistik">PT. GatotKaca Logistik</option>
                                <option value="PT. Maju Mundur Makmur">PT. Maju Mundur Makmur</option>
                                <option value="CV. Baja Perkasa">CV. Baja Perkasa</option>
                                <option value="PT. Jeon Grup">PT. Jeon Grup</option>
                            </select>
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
                            <input type="text" class="input-maint-pill" id="tipeOperasiInput" style="max-width: 160px;">
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
                                    <option value="Ganti Oli Mesin">Ganti Oli Mesin</option>
                                    <option value="Ganti Filter Udara">Ganti Filter Udara</option>
                                    <option value="Ganti Filter Oli">Ganti Filter Oli</option>
                                    <option value="Ganti Filter Solar">Ganti Filter Solar</option>
                                    <option value="Preventive Service">Preventive Service</option>
                                </select>
                            </div>

                            <!-- Tanggal Maintenance -->
                            <div class="col-12 col-sm-6">
                                <label for="tanggalMaintInput" class="input-maint-label">Tanggal Maintenance</label>
                                <div class="date-input-group">
                                    <input type="text" id="tanggalMaintInput" placeholder="YYYY-MM-DD">
                                    <i class="fa-regular fa-calendar-days"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Hour Meter Terakhir -->
                        <div class="mb-3">
                            <label for="hourMeterInput" class="input-maint-label">Hour Meter Terakhir</label>
                            <div class="hour-meter-group">
                                <input type="number" id="hourMeterInput">
                                <span class="hm-badge">HM</span>
                            </div>
                        </div>

                        <!-- Radio Service Types -->
                        <div class="maint-radio-group">
                            <label class="custom-radio-item">
                                <input type="radio" name="serviceCategory" value="company" id="radioServiceCompany" checked>
                                <span>Service With Company</span>
                            </label>
                            <label class="custom-radio-item">
                                <input type="radio" name="serviceCategory" value="self" id="radioSelfService">
                                <span>Self-Service</span>
                            </label>
                            <label class="custom-radio-item">
                                <input type="radio" name="serviceCategory" value="sparepart" id="radioSparepart">
                                <span>Sparepart</span>
                            </label>
                        </div>

                        <!-- Dynamic Row: Served By & Sales Order -->
                        <div class="row g-3" id="dynamicServiceRow">
                            <!-- Served By -->
                            <div class="col-12 col-sm-6" id="servedByContainer">
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

                <!-- PANEL 3: Cek Sparepart (Bottom Left) -->
                <div class="col-12 col-lg-6">
                    <div class="input-maint-sub-card">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <h4 class="input-maint-card-title mb-0">Cek Sparepart</h4>
                            <button type="button" class="btn-maint-cek">Cek</button>
                        </div>

                        <!-- Sparepart Table -->
                        <div class="sparepart-table-wrapper">
                            <table class="table sparepart-table">
                                <thead>
                                    <tr>
                                        <th style="width: 25%;">Kode Barang</th>
                                        <th style="width: 35%;">Nama Barang</th>
                                        <th style="width: 10%; text-align: center;">Qyt</th>
                                        <th style="width: 12%; text-align: center;">Satuan</th>
                                        <th style="width: 18%; text-align: end;">SO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Row 1 -->
                                    <tr>
                                        <td>Fc1001G90</td>
                                        <td>Filter Oil Engine</td>
                                        <td class="text-center" style="border-right: 1.5px solid #1E293B;">2</td>
                                        <td class="text-center">Pcs</td>
                                        <td class="text-end">26080001</td>
                                    </tr>
                                    <!-- Row 2 -->
                                    <tr>
                                        <td>ZU001</td>
                                        <td>Oil Engine</td>
                                        <td class="text-center" style="border-right: 1.5px solid #1E293B;">1</td>
                                        <td class="text-center">Liter</td>
                                        <td class="text-end">26080001</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- PANEL 4: Catatan (Bottom Right) -->
                <div class="col-12 col-lg-6">
                    <div class="input-maint-sub-card">
                        <h4 class="input-maint-card-title">Catatan</h4>
                        <label for="catatanRemarkText" class="input-maint-label">Catatan / Remark</label>
                        <textarea class="catatan-textarea" id="catatanRemarkText"></textarea>
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
});
</script>

<?php
include_once __DIR__ . '/footer.php';
?>
