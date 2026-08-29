<?php
// reminder.php - Reminder FMR
include_once __DIR__ . '/header.php';
?>

<!-- MAIN REMINDER CONTENT -->
<main class="dashboard-container">
    <!-- Page Title -->
    <h2 class="page-title" style="font-weight: bold; font-size: 2rem; margin-bottom: 20px;">Reminder</h2>

    <!-- Search, Filters, and Reset Button Bar -->
    <div class="customer-filter-bar mb-4" style="background: white; border-radius: 12px; padding: 15px; display: flex; align-items: center; gap: 15px; flex-wrap: wrap;">
        
        <!-- Search Input -->
        <div class="search-input-pill" style="flex: 1; min-width: 200px; display: flex; align-items: center; border: 1px solid #dee2e6; border-radius: 20px; padding: 8px 15px;">
            <i class="fa-solid fa-magnifying-glass" style="color: #6c757d; margin-right: 10px;"></i>
            <input type="text" placeholder="Masukkan Customer / Unit" style="border: none; outline: none; width: 100%;">
        </div>

        <!-- Date Range Picker (Statis) -->
        <div class="d-flex align-items-center" style="gap: 10px;">
            <div style="border: 1px solid #3b82f6; border-radius: 20px; padding: 8px 15px; display: flex; align-items: center; gap: 10px; background: white;">
                <input type="text" value="01/08/26" readonly style="border: none; outline: none; width: 70px; background: transparent; font-weight: 500;">
                <i class="fa-regular fa-calendar" style="color: #495057;"></i>
            </div>
            <span style="font-weight: bold; color: #495057;">-</span>
            <div style="border: 1px solid #495057; border-radius: 20px; padding: 8px 15px; display: flex; align-items: center; gap: 10px; background: white;">
                <input type="text" value="02/08/26" readonly style="border: none; outline: none; width: 70px; background: transparent; font-weight: 500;">
                <i class="fa-regular fa-calendar" style="color: #495057;"></i>
            </div>
        </div>

        <!-- Dropdown Reminder Type -->
        <div style="border: 1px solid #495057; border-radius: 20px; padding: 8px 15px; background: white;">
            <select style="border: none; outline: none; background: transparent; cursor: pointer; font-weight: 500;">
                <option value="" disabled selected>Reminder Type</option>
                <option value="Email">Email</option>
                <option value="WhatsApp">WhatsApp</option>
            </select>
        </div>

        <!-- Dropdown Status -->
        <div style="border: 1px solid #495057; border-radius: 20px; padding: 8px 15px; background: white;">
            <select style="border: none; outline: none; background: transparent; cursor: pointer; font-weight: 500;">
                <option value="" disabled selected>Status</option>
                <option value="Menunggu">Menunggu</option>
                <option value="Terkirim">Terkirim</option>
            </select>
        </div>

        <!-- Reset Button -->
        <button style="border: 1px solid #adb5bd; border-radius: 20px; padding: 8px 15px; background: white; display: flex; align-items: center; gap: 8px; cursor: pointer; font-weight: 500;">
            <i class="fa-solid fa-arrow-rotate-right"></i>
            Reset
        </button>
    </div>

    <!-- Reminder Data Table Card -->
    <div class="customer-table-card" style="background: white; border-radius: 12px; padding: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        <div class="table-responsive">
            <table class="table" style="vertical-align: middle;">
                <thead style="background-color: #e9ecef; border-bottom: 2px solid #dee2e6;">
                    <tr>
                        <th style="padding: 15px; color: #495057; font-size: 0.9rem;">Customer / Unit</th>
                        <th style="padding: 15px; color: #495057; font-size: 0.9rem;">Maintenance</th>
                        <th style="padding: 15px; color: #495057; font-size: 0.9rem;">Due Date</th>
                        <th style="padding: 15px; color: #495057; font-size: 0.9rem;">Sent Datetime</th>
                        <th style="padding: 15px; color: #495057; font-size: 0.9rem;">Reminder Type</th>
                        <th style="padding: 15px; color: #495057; font-size: 0.9rem;">Status</th>
                        <th style="padding: 15px; color: #495057; font-size: 0.9rem;">Attachment</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr style="border-bottom: 1px solid #dee2e6;">
                        <td style="padding: 15px;">
                            <div style="font-weight: bold; color: #212529;">PT. Toyomatsu</div>
                            <div style="color: #6c757d; font-size: 0.85rem;">Toyota 8FD30-11029</div>
                        </td>
                        <td style="padding: 15px; font-weight: 500;">Tune Up</td>
                        <td style="padding: 15px; color: #495057;">26 Agu 2026</td>
                        <td style="padding: 15px; color: #495057;">
                            <div>26 Agu 2026</div>
                            <div>15.00</div>
                        </td>
                        <td style="padding: 15px; text-align: center;">
                            <i class="fa-brands fa-whatsapp" style="color: #25D366; font-size: 1.5rem;"></i>
                        </td>
                        <td style="padding: 15px;">
                            <span style="background-color: #d1e7dd; color: #0f5132; padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 500;">Terkirim</span>
                        </td>
                        <td style="padding: 15px;">
                            <button data-bs-toggle="modal" data-bs-target="#uploadBuktiModal" style="background-color: #f8f9fa; border: 1px dashed #adb5bd; color: #adb5bd; padding: 5px 15px; border-radius: 20px; display: flex; align-items: center; gap: 8px; font-size: 0.85rem; cursor: pointer;">
                                <i class="fa-solid fa-paperclip"></i> Upload
                            </button>
                        </td>
                    </tr>
                    <!-- Row 2 -->
                    <tr style="border-bottom: 1px solid #dee2e6;">
                        <td style="padding: 15px;">
                            <div style="font-weight: bold; color: #212529;">PT. Toyomatsu</div>
                            <div style="color: #6c757d; font-size: 0.85rem;">Toyota 8FD30-11029</div>
                        </td>
                        <td style="padding: 15px; font-weight: 500;">Tune Up</td>
                        <td style="padding: 15px; color: #495057;">26 Agu 2026</td>
                        <td style="padding: 15px; color: #495057;">
                            <div>26 Agu 2026</div>
                            <div>15.00</div>
                        </td>
                        <td style="padding: 15px; text-align: center;">
                            <i class="fa-regular fa-envelope" style="color: #c99369; font-size: 1.5rem;"></i>
                        </td>
                        <td style="padding: 15px;">
                            <span style="background-color: #d1e7dd; color: #0f5132; padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 500;">Terkirim</span>
                        </td>
                        <td style="padding: 15px;">
                            
                        </td>
                    </tr>
                    <!-- Row 3 -->
                    <tr style="border-bottom: 1px solid #dee2e6;">
                        <td style="padding: 15px;">
                            <div style="font-weight: bold; color: #212529;">PT. Toyomatsu</div>
                            <div style="color: #6c757d; font-size: 0.85rem;">Toyota 8FD30-11029</div>
                        </td>
                        <td style="padding: 15px; font-weight: 500;">Tune Up</td>
                        <td style="padding: 15px; color: #495057;">26 Agu 2026</td>
                        <td style="padding: 15px; color: #495057;">
                            
                        </td>
                        <td style="padding: 15px; text-align: center;">
                            <i class="fa-brands fa-whatsapp" style="color: #25D366; font-size: 1.5rem;"></i>
                        </td>
                        <td style="padding: 15px;">
                            <span style="background-color: #fff3cd; color: #856404; padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 500;">Menunggu</span>
                        </td>
                        <td style="padding: 15px;">
                            <button data-bs-toggle="modal" data-bs-target="#uploadBuktiModal" style="background-color: #e9ecef; border: 1px dashed #ced4da; color: #6c757d; padding: 5px 15px; border-radius: 20px; display: flex; align-items: center; gap: 8px; font-size: 0.85rem; cursor: pointer;">
                                <i class="fa-solid fa-paperclip"></i> Upload
                            </button>
                        </td>
                    </tr>
                    <!-- Row 4 -->
                    <tr style="border-bottom: 1px solid #dee2e6;">
                        <td style="padding: 15px;">
                            <div style="font-weight: bold; color: #212529;">PT. Toyomatsu</div>
                            <div style="color: #6c757d; font-size: 0.85rem;">Toyota 8FD30-11029</div>
                        </td>
                        <td style="padding: 15px; font-weight: 500;">Tune Up</td>
                        <td style="padding: 15px; color: #495057;">26 Agu 2026</td>
                        <td style="padding: 15px; color: #495057;">
                            <div>26 Agu 2026</div>
                            <div>15.00</div>
                        </td>
                        <td style="padding: 15px; text-align: center;">
                            <i class="fa-brands fa-whatsapp" style="color: #25D366; font-size: 1.5rem;"></i>
                        </td>
                        <td style="padding: 15px;">
                            <span style="background-color: #d1e7dd; color: #0f5132; padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 500;">Terkirim</span>
                        </td>
                        <td style="padding: 15px;">
                            <button data-bs-toggle="modal" data-bs-target="#uploadBuktiModal" style="background-color: #f8f9fa; border: 1px dashed #adb5bd; color: #adb5bd; padding: 5px 15px; border-radius: 20px; display: flex; align-items: center; gap: 8px; font-size: 0.85rem; cursor: pointer;">
                                <i class="fa-solid fa-paperclip"></i> Upload
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-end mt-4" style="color: #6c757d; font-weight: 500;">
            <div style="display: flex; gap: 15px; align-items: center;">
                <span style="cursor: pointer;">&lt;</span>
                <span style="background-color: #ffc107; color: #000; padding: 2px 8px; border-radius: 4px; font-weight: bold; cursor: pointer;">1</span>
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
    <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
        <div class="modal-content" style="border-radius: 16px; padding: 10px;">
            <div class="modal-header" style="border-bottom: none; justify-content: center; position: relative;">
                <h5 class="modal-title" id="uploadBuktiModalLabel" style="font-weight: bold;">Upload Bukti Reminder</h5>
            </div>
            <div class="modal-body">
                <!-- Unit Info -->
                <div style="margin-bottom: 15px;">
                    <div style="color: #6ea8fe; font-size: 0.85rem;">PT. Toyomatsu</div>
                    <div style="font-size: 1.25rem; font-weight: bold; color: #212529;">Toyota 8FD30-11029</div>
                </div>
                <hr style="border-color: #dee2e6; margin-bottom: 15px;">

                <!-- Instructions -->
                <p style="color: #6ea8fe; font-size: 0.8rem; margin-bottom: 20px;">
                    Bukti dapat berupa screenshot WhatsApp atau Email. File akan disimpan sebagai attachment reminder ini.
                </p>

                <!-- Upload Area -->
                <div style="border: 2px dashed #9ec5fe; border-radius: 12px; background-color: transparent; padding: 30px; text-align: center; margin-bottom: 5px;">
                    <div style="font-weight: bold; color: #212529;">Pilih file</div>
                    <div style="font-size: 0.8rem; color: #6c757d;">PNG atau JPG</div>
                </div>
                <div style="color: #6ea8fe; font-size: 0.75rem; margin-bottom: 25px;">Belum ada file dipilih</div>

                <!-- Input Datetime -->
                <div style="margin-bottom: 20px;">
                    <label style="font-weight: bold; font-size: 0.9rem; margin-bottom: 8px; display: block; color: #212529;">Sent Datetime</label>
                    <div style="display: flex; gap: 15px;">
                        <!-- Date -->
                        <div style="flex: 1; border: 1px solid #9ec5fe; border-radius: 20px; padding: 8px 15px; display: flex; align-items: center; justify-content: space-between;">
                            <input type="text" value="02/08/26" readonly style="border: none; outline: none; width: 80%; background: transparent; font-weight: 500; color: #495057;">
                            <i class="fa-regular fa-calendar" style="color: #212529;"></i>
                        </div>
                        <!-- Time -->
                        <div style="flex: 1; border: 1px solid #9ec5fe; border-radius: 20px; padding: 8px 15px; display: flex; align-items: center; justify-content: center;">
                            <input type="text" value="12 : 40" readonly style="border: none; outline: none; width: 100%; text-align: center; background: transparent; font-weight: 500; color: #495057;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="border-top: none;">
                <button type="button" class="btn" style="background-color: #ffc107; color: #000; font-weight: bold; border-radius: 20px; padding: 8px 30px; border: none;">Kirim</button>
            </div>
        </div>
    </div>
</div>

<?php
include_once __DIR__ . '/footer.php';
?>
