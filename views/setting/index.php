<!-- views/setting/index.php - Settings View -->
<main class="dashboard-container">
    <!-- Page Title -->
    <h2 class="page-title">Settings</h2>

    <!-- Settings Main Card -->
    <div class="settings-card">
        <!-- Subtitle -->
        <div class="settings-subtitle">
            Kontrol panel mode pengiriman reminder & Target jatuh tempo
        </div>

        <form onsubmit="event.preventDefault();">
            <!-- Row 1: Mode Pengiriman Email -->
            <div class="settings-row">
                <label class="settings-label">Mode Pengiriman Email</label>
                <div class="settings-control-group">
                    <div class="dropdown">
                        <button class="settings-pill-select dropdown-toggle" type="button" id="dropdownEmailMode" data-bs-toggle="dropdown" aria-expanded="false">
                            <span id="selectedEmailModeText">Pilih Mode</span>
                        </button>
                        <ul class="dropdown-menu settings-dropdown-menu" aria-labelledby="dropdownEmailMode">
                            <li><a class="dropdown-item" href="#" data-mode="Semi Automatic">Semi Automatic</a></li>
                            <li><a class="dropdown-item" href="#" data-mode="Full Automatic">Full Automatic</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Row 2: Reminder Generated Date -->
            <div class="settings-row">
                <label class="settings-label">Reminder Generated Date</label>
                <div class="settings-control-group">
                    <div class="settings-pill-input-box">
                        <span class="settings-pill-prefix">H -</span>
                        <input type="number" id="reminderGenDays" placeholder="Harus angka" min="0" oninput="this.value = Math.abs(this.value)">
                    </div>
                    <span class="settings-trailing-text">From Maintenance Due Date</span>
                </div>
            </div>

            <!-- Row 3: Due Soon status starts at -->
            <div class="settings-row">
                <label class="settings-label">Due Soon status starts at</label>
                <div class="settings-control-group">
                    <div class="settings-pill-input-box">
                        <input type="number" id="dueSoonHm" placeholder="Harus angka" min="0" oninput="this.value = Math.abs(this.value)">
                        <span class="settings-pill-suffix">HM</span>
                    </div>
                    <span class="settings-trailing-text">Before Maintenance Due Date</span>
                </div>
            </div>

            <!-- Row 4: Last Checked Date Time -->
            <div class="settings-row">
                <label class="settings-label">Last Checked Date Time</label>
                <div class="settings-control-group align-items-start">
                    <div>
                        <div class="settings-datetime-box">
                            2026 - 08 - 05
                        </div>
                        <div class="settings-updated-by">
                            Updated by : Marsha Dina
                        </div>
                    </div>
                    <div>
                        <div class="settings-datetime-box">
                            13 : 45 : 20
                        </div>
                    </div>
                </div>
            </div>

            <!-- Submit Button (Bottom Right) -->
            <div class="d-flex justify-content-end mt-4">
                <button type="submit" class="btn-setting-save">
                    Simpan Setting
                </button>
            </div>
        </form>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const dropdownItems = document.querySelectorAll('.settings-dropdown-menu .dropdown-item');
    const selectedText = document.getElementById('selectedEmailModeText');

    dropdownItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            dropdownItems.forEach(i => i.classList.remove('active'));
            this.classList.add('active');
            if (selectedText) {
                selectedText.textContent = this.dataset.mode || this.textContent.trim();
                selectedText.style.color = '#111827';
                selectedText.style.fontWeight = '600';
            }
        });
    });
});
</script>
