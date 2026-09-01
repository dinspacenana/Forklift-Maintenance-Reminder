<!-- views/operasional/outstanding.php - Operasional Outstanding View -->
<main class="dashboard-container">
    <h2 class="page-title" style="margin-bottom: 12px; font-size: 1.85rem;">Outstanding</h2>
    <div style="font-size: 1.05rem; font-weight: 600; color: #475569; margin-bottom: 24px;">Terakhir Dicek : 23 Agustus 2026 &nbsp;08:00 WIB</div>

    <!-- Main Card -->
    <div class="user-mgmt-card" style="padding: 24px; border-radius: var(--fmr-radius-lg); background: #FFFFFF; border: 1px solid #E2E8F0; box-shadow: 0 4px 12px rgba(0,0,0,0.02);">
        
        <!-- Action Bar -->
        <div class="d-flex align-items-center mb-4" style="gap: 16px;">
            <button class="btn" style="background-color: #FBBA16; color: #111827; border: none; border-radius: 8px; padding: 10px 18px; font-weight: 700; font-size: 0.9rem; display: inline-flex; align-items: center; gap: 8px;">
                <span class="material-symbols-outlined" style="font-size: 1.25rem; font-weight: bold;">sync</span>
                Cek Data Terkini
            </button>
            
            <div class="search-input-pill" style="min-width: unset; width: 340px; height: 42px; background: #FFFFFF; border: 1.5px solid #94A3B8; border-radius: 24px; padding: 0 16px; display: flex; align-items: center;">
                <span class="material-symbols-outlined" style="color: #94A3B8; font-size: 1.3rem; margin-right: 8px;">search</span>
                <input type="text" placeholder="Cari Customer" style="border: none; outline: none; background: transparent; width: 100%; font-size: 0.9rem; color: #1F2937;">
            </div>
        </div>

        <!-- Table -->
        <table class="customer-table" style="width: 100%; border-collapse: separate; border-spacing: 0;">
            <thead>
                <tr>
                    <th style="background-color: #DCE5EB; color: #111827; font-size: 0.9rem; font-weight: 700; padding: 16px 24px; border-top-left-radius: 12px; border-bottom-left-radius: 12px; width: 20%;">Tanggal Maintenance</th>
                    <th style="background-color: #DCE5EB; color: #111827; font-size: 0.9rem; font-weight: 700; padding: 16px 24px; width: 25%;">Customer</th>
                    <th style="background-color: #DCE5EB; color: #111827; font-size: 0.9rem; font-weight: 700; padding: 16px 24px; width: 30%;">Unit/Serial Number</th>
                    <th style="background-color: #DCE5EB; color: #111827; font-size: 0.9rem; font-weight: 700; padding: 16px 24px; border-top-right-radius: 12px; border-bottom-right-radius: 12px; width: 25%;">Jenis Maintenance</th>
                </tr>
            </thead>
            <tbody>
                <?php for($i=0; $i<5; $i++): ?>
                <tr>
                    <td style="padding: 22px 24px; border-bottom: 1.5px solid #1E293B; font-size: 0.92rem; color: #111827; vertical-align: top;">23/08/2026</td>
                    <td style="padding: 22px 24px; border-bottom: 1.5px solid #1E293B; font-size: 0.92rem; color: #111827; vertical-align: top; font-weight: 600;">PT. Maju Jaya</td>
                    <td style="padding: 22px 24px; border-bottom: 1.5px solid #1E293B; font-size: 0.92rem; color: #111827; vertical-align: top; line-height: 1.4;">
                        <span style="font-weight: 700;">Toyota 8FD30</span><br>
                        <span style="font-size: 0.78rem;">8FD30-12345</span>
                    </td>
                    <td style="padding: 22px 24px; border-bottom: 1.5px solid #1E293B; font-size: 0.92rem; color: #111827; vertical-align: top;">Tune Up</td>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
        <!-- Double line effect at the bottom of the table -->
        <div style="border-bottom: 1.5px solid #1E293B; width: 100%; margin-top: 6px;"></div>

        <!-- Pagination -->
        <div class="table-pagination-footer" style="margin: 0 !important; padding-top: 24px !important; border-top: none !important;">
            <div class="pagination-custom">
                <a href="#" class="btn-prev"><span class="material-symbols-outlined" style="font-size: 1.25rem;">chevron_left</span></a>
                <a href="#" class="active" style="background-color: #FBBA16; color: #111827;">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <span class="page-dots">...</span>
                <a href="#">10</a>
                <a href="#" class="btn-next"><span class="material-symbols-outlined" style="font-size: 1.25rem;">chevron_right</span></a>
            </div>
        </div>
    </div>
</main>
