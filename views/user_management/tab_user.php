<!-- tab_user.php - Konten Tab User -->
<!-- Filter Bar -->
<div class="user-filter-bar">
    <div class="d-flex align-items-center gap-3 flex-wrap">
        <!-- Search Input -->
        <div class="unit-search-pill" style="min-width: 280px;">
            <span class="material-symbols-outlined">search</span>
            <input type="text" placeholder="Cari Username atau Nama" id="searchUserInput">
        </div>

        <!-- Filter Dropdown: Role -->
        <div class="dropdown">
            <button class="unit-filter-dropdown-btn dropdown-toggle" type="button" id="filterUserRole" data-bs-toggle="dropdown" aria-expanded="false">
                <span id="selectedUserRoleText">Role</span>
                <span class="material-symbols-outlined" style="font-size: 1.1rem; color: #1E293B;">expand_more</span>
            </button>
            <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="filterUserRole">
                <li><a class="dropdown-item" href="#" data-role="Administrator">Administrator</a></li>
                <li><a class="dropdown-item" href="#" data-role="Kepala Toko">Kepala Toko</a></li>
                <li><a class="dropdown-item" href="#" data-role="Admin Sales">Admin Sales</a></li>
            </ul>
        </div>

        <!-- Filter Dropdown: Status -->
        <div class="dropdown">
            <button class="unit-filter-dropdown-btn dropdown-toggle" type="button" id="filterUserStatus" data-bs-toggle="dropdown" aria-expanded="false">
                <span id="selectedUserStatusText">Status</span>
                <span class="material-symbols-outlined" style="font-size: 1.1rem; color: #1E293B;">expand_more</span>
            </button>
            <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="filterUserStatus">
                <li><a class="dropdown-item" href="#" data-status="Aktif">Aktif</a></li>
                <li><a class="dropdown-item" href="#" data-status="Nonaktif">Nonaktif</a></li>
            </ul>
        </div>

        <!-- Reset Button -->
        <button type="button" class="btn-reset-filter" id="btnResetUser">
            <span class="material-symbols-outlined">restart_alt</span>
            <span>Reset</span>
        </button>
    </div>

    <!-- Add User Button -->
    <button type="button" class="btn-add-user" data-bs-toggle="modal" data-bs-target="#addUserModal">
        <span class="material-symbols-outlined">add</span> Tambah User
    </button>
</div>

<!-- Table Data User -->
<div class="table-responsive">
    <table class="table user-table">
        <thead>
            <tr>
                <th style="width: 13%;">Username</th>
                <th style="width: 17%;">Nama</th>
                <th style="width: 13%;">Role</th>
                <th style="width: 15%;">Waktu Dibuat</th>
                <th style="width: 13%;">Dibuat Oleh</th>
                <th style="width: 10%;">Status</th>
                <th style="width: 13%;">Terakhir Online</th>
                <th style="width: 8%; text-align: center;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Row 1 -->
            <tr data-role="Administrator" data-status="Aktif">
                <td class="fw-bold">marsha</td>
                <td>Marsha Thalita</td>
                <td><span class="badge-role">Administrator</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td>Administrator</td>
                <td><span class="badge-status-aktif-blue">Aktif</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td style="text-align: center;">
                    <div class="action-icons-group justify-content-center">
                        <button class="action-icon-btn icon-edit" title="Edit User" data-bs-toggle="modal" data-bs-target="#editUserModal">
                            <span class="material-symbols-outlined">edit</span>
                        </button>
                        <button class="action-icon-btn icon-delete" title="Hapus User" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                            <span class="material-symbols-outlined">delete</span>
                        </button>
                    </div>
                </td>
            </tr>

            <!-- Row 2 -->
            <tr data-role="Administrator" data-status="Aktif">
                <td class="fw-bold">dina</td>
                <td>Dina Ayu</td>
                <td><span class="badge-role">Administrator</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td>Administrator</td>
                <td><span class="badge-status-aktif-blue">Aktif</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td style="text-align: center;">
                    <div class="action-icons-group justify-content-center">
                        <button class="action-icon-btn icon-edit" title="Edit User" data-bs-toggle="modal" data-bs-target="#editUserModal">
                            <span class="material-symbols-outlined">edit</span>
                        </button>
                        <button class="action-icon-btn icon-delete" title="Hapus User" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                            <span class="material-symbols-outlined">delete</span>
                        </button>
                    </div>
                </td>
            </tr>

            <!-- Row 3 -->
            <tr data-role="Kepala Toko" data-status="Nonaktif">
                <td class="fw-bold">lita</td>
                <td>Arqueeny Zahra</td>
                <td><span class="badge-role">Kepala Toko</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td>Administrator</td>
                <td><span class="badge-status-nonaktif-gray">Nonaktif</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td class="text-center">
                    <div class="action-icons-group justify-content-center">
                        <button class="action-icon-btn icon-edit" title="Edit User" data-bs-toggle="modal" data-bs-target="#editUserModal">
                            <span class="material-symbols-outlined">edit</span>
                        </button>
                        <button class="action-icon-btn icon-delete" title="Hapus User" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                            <span class="material-symbols-outlined">delete</span>
                        </button>
                    </div>
                </td>
            </tr>

            <!-- Row 4 -->
            <tr data-role="Admin Sales" data-status="Aktif">
                <td class="fw-bold">caca</td>
                <td>Navyza Marcha</td>
                <td><span class="badge-role">Admin Sales</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td>Administrator</td>
                <td><span class="badge-status-aktif-blue">Aktif</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td class="text-center">
                    <div class="action-icons-group justify-content-center">
                        <button class="action-icon-btn icon-edit" title="Edit User" data-bs-toggle="modal" data-bs-target="#editUserModal">
                            <span class="material-symbols-outlined">edit</span>
                        </button>
                        <button class="action-icon-btn icon-delete" title="Hapus User" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                            <span class="material-symbols-outlined">delete</span>
                        </button>
                    </div>
                </td>
            </tr>

            <!-- Row 5 -->
            <tr data-role="Administrator" data-status="Nonaktif">
                <td class="fw-bold">salman</td>
                <td>Salman Alfarizqi</td>
                <td><span class="badge-role">Administrator</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td>Administrator</td>
                <td><span class="badge-status-nonaktif-gray">Nonaktif</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td class="text-center">
                    <div class="action-icons-group justify-content-center">
                        <button class="action-icon-btn icon-edit" title="Edit User" data-bs-toggle="modal" data-bs-target="#editUserModal">
                            <span class="material-symbols-outlined">edit</span>
                        </button>
                        <button class="action-icon-btn icon-delete" title="Hapus User" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                            <span class="material-symbols-outlined">delete</span>
                        </button>
                    </div>
                </td>
            </tr>

            <!-- Row 6 -->
            <tr data-role="Kepala Toko" data-status="Aktif">
                <td class="fw-bold">reza</td>
                <td>Reza Ardiansyah</td>
                <td><span class="badge-role">Kepala Toko</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td>Administrator</td>
                <td><span class="badge-status-aktif-blue">Aktif</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td class="text-center">
                    <div class="action-icons-group justify-content-center">
                        <button class="action-icon-btn icon-edit" title="Edit User" data-bs-toggle="modal" data-bs-target="#editUserModal">
                            <span class="material-symbols-outlined">edit</span>
                        </button>
                        <button class="action-icon-btn icon-delete" title="Hapus User" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                            <span class="material-symbols-outlined">delete</span>
                        </button>
                    </div>
                </td>
            </tr>

            <!-- Row 7 -->
            <tr data-role="Admin Sales" data-status="Aktif">
                <td class="fw-bold">rio</td>
                <td>Andhika Lingga</td>
                <td><span class="badge-role">Admin Sales</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td>Administrator</td>
                <td><span class="badge-status-aktif-blue">Aktif</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td class="text-center">
                    <div class="action-icons-group justify-content-center">
                        <button class="action-icon-btn icon-edit" title="Edit User" data-bs-toggle="modal" data-bs-target="#editUserModal">
                            <span class="material-symbols-outlined">edit</span>
                        </button>
                        <button class="action-icon-btn icon-delete" title="Hapus User" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                            <span class="material-symbols-outlined">delete</span>
                        </button>
                    </div>
                </td>
            </tr>

            <!-- Row 8 -->
            <tr data-role="Admin Sales" data-status="Aktif">
                <td class="fw-bold">aldy</td>
                <td>Aldy</td>
                <td><span class="badge-role">Admin Sales</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td>Administrator</td>
                <td><span class="badge-status-aktif-blue">Aktif</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td class="text-center">
                    <div class="action-icons-group justify-content-center">
                        <button class="action-icon-btn icon-edit" title="Edit User" data-bs-toggle="modal" data-bs-target="#editUserModal">
                            <span class="material-symbols-outlined">edit</span>
                        </button>
                        <button class="action-icon-btn icon-delete" title="Hapus User" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                            <span class="material-symbols-outlined">delete</span>
                        </button>
                    </div>
                </td>
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

<!-- =========================================================
     MODAL: Add New User
     ========================================================= -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 540px;">
        <div class="modal-content modal-user-content">
            <h4 class="modal-user-title" id="addUserModalLabel">Tambah User Baru</h4>

            <form onsubmit="event.preventDefault();">
                <div class="row g-3 mb-3">
                    <!-- Left Column -->
                    <div class="col-6">
                        <!-- Username (Search from Portal) -->
                        <div class="mb-3 position-relative">
                            <label for="addUsername" class="user-form-label">
                                Username <span class="text-muted fw-normal" style="font-size: 0.8rem; margin-left: 4px;">(Cari dari portal)</span>
                            </label>
                            <input type="text" class="user-form-input" id="addUsername" placeholder="Masukkan Username" autocomplete="off">
                            <div class="text-muted" style="font-size: 0.74rem; margin-top: 5px; color: #64748B; line-height: 1.3;">
                                Ketik minimal 1 karakter untuk mencari username yang sudah terdaftar di portal
                            </div>

                            <!-- Autocomplete Suggestions List -->
                            <div id="userSuggestions" class="autocomplete-suggestions" style="display: none;"></div>
                        </div>

                        <!-- Expiration Date -->
                        <div>
                            <label class="user-form-label">Tanggal Kedaluwarsa</label>
                            <div class="mb-2">
                                <label class="custom-checkbox-item">
                                    <input type="checkbox" id="addForever" checked>
                                    <span>Selamanya</span>
                                </label>
                            </div>
                            <div class="user-date-input-group" id="addGroupWrapper">
                                <input type="text" id="addExpDate" disabled style="background-color: transparent; cursor: not-allowed; color: #6b7280; width: 100%; border: none; outline: none; padding-left: 18px;">
                                <span class="material-symbols-outlined" style="cursor: pointer;">calendar_today</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-6">
                        <!-- Role -->
                        <div class="mb-3">
                            <label for="addUserRole" class="user-form-label">Role</label>
                            <select class="user-form-select" id="addUserRole">
                                <option value="" selected disabled>Pilih Role</option>
                                <option value="Administrator">Administrator</option>
                                <option value="Kepala Toko">Kepala Toko</option>
                                <option value="Admin Sales">Admin Sales</option>
                            </select>
                        </div>

                        <!-- Status Akun -->
                        <div>
                            <label class="user-form-label">Status Akun</label>
                            <label class="custom-checkbox-item mt-1">
                                <input type="checkbox" id="addStatusAkun" checked>
                                <span>Akun Aktif</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="d-flex justify-content-end align-items-center gap-3 mt-4">
                    <button type="button" class="btn-user-batal" data-bs-dismiss="modal">
                        Batal
                    </button>
                    <button type="button" class="btn-forklift-save" data-bs-dismiss="modal">
                        Simpan User
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- =========================================================
     MODAL: Edit User
     ========================================================= -->
<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 540px;">
        <div class="modal-content modal-user-content">
            <h4 class="modal-user-title" id="editUserModalLabel">Edit User</h4>

            <form onsubmit="event.preventDefault();">
                <div class="row g-3 mb-3">
                    <!-- Left Column -->
                    <div class="col-6">
                        <!-- Username -->
                        <div class="mb-3">
                            <label for="editUsername" class="user-form-label">Username</label>
                            <input type="text" class="user-form-input" id="editUsername" value="marsha">
                        </div>

                        <!-- Nama -->
                        <div class="mb-3">
                            <label for="editNama" class="user-form-label">Nama</label>
                            <input type="text" class="user-form-input" id="editNama" value="Marsha Thalita">
                        </div>

                        <!-- Expiration Date -->
                        <div>
                            <label class="user-form-label">Tanggal Kedaluwarsa</label>
                            <div class="mb-2">
                                <label class="custom-checkbox-item">
                                    <input type="checkbox" id="editForever" checked>
                                    <span>Selamanya</span>
                                </label>
                            </div>
                            <div class="user-date-input-group" id="editGroupWrapper">
                                <input type="text" id="editExpDate" disabled style="background-color: transparent; cursor: not-allowed; color: #6b7280; width: 100%; border: none; outline: none; padding-left: 18px;">
                                <span class="material-symbols-outlined" style="cursor: pointer;">calendar_today</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-6">
                        <!-- Role -->
                        <div class="mb-3">
                            <label for="editUserRole" class="user-form-label">Role</label>
                            <select class="user-form-select" id="editUserRole">
                                <option value="Administrator" selected>Administrator</option>
                                <option value="Kepala Toko">Kepala Toko</option>
                                <option value="Admin Sales">Admin Sales</option>
                            </select>
                        </div>

                        <!-- Status Akun -->
                        <div>
                            <label class="user-form-label">Status Akun</label>
                            <label class="custom-checkbox-item mt-1">
                                <input type="checkbox" id="editStatusAkun" checked>
                                <span>Akun Aktif</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="d-flex justify-content-end align-items-center gap-3 mt-4">
                    <button type="button" class="btn-user-batal" data-bs-dismiss="modal">
                        Batal
                    </button>
                    <button type="button" class="btn-forklift-save" data-bs-dismiss="modal">
                        Simpan User
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- =========================================================
     MODAL: Delete Confirmation
     ========================================================= -->
<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 380px;">
        <div class="modal-content modal-delete-content" style="border-radius: 24px; padding: 32px 28px; text-align: center; border: none; box-shadow: 0 20px 45px rgba(0,0,0,0.15);">
            <h4 class="modal-delete-title" id="deleteUserModalLabel" style="font-weight: 800; font-size: 1.25rem; color: #111827; margin-bottom: 8px;">Yakin ingin menghapus?</h4>
            <p class="modal-delete-subtext" style="color: #64748B; font-size: 0.85rem; margin-bottom: 24px;">Data akan hilang permanen</p>

            <div class="d-flex justify-content-center align-items-center gap-3">
                <button type="button" class="btn-delete-cancel" data-bs-dismiss="modal" style="background-color: #FBBA16; color: #111827; font-weight: 700; font-size: 0.88rem; border-radius: 10px; padding: 8px 30px; border: none;">
                    Batal
                </button>
                <button type="button" class="btn-delete-confirm" data-bs-dismiss="modal" style="background-color: #EF4444; color: #FFFFFF; font-weight: 700; font-size: 0.88rem; border-radius: 10px; padding: 8px 30px; border: none;">
                    Yakin
                </button>
            </div>
        </div>
    </div>
</div>

<style>
.user-date-input-group input[type="date"]::-webkit-calendar-picker-indicator {
    display: none;
    -webkit-appearance: none;
}
.user-date-input-group input::placeholder {
    color: #6b7280;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const userPortalList = [
        { username: 'marsha', name: 'Marsha Thalita', role: 'Administrator' },
        { username: 'dina', name: 'Dina Ayu', role: 'Administrator' },
        { username: 'lita', name: 'Arqueeny Zahra', role: 'Kepala Toko' },
        { username: 'caca', name: 'Navyza Marcha', role: 'Admin Sales' },
        { username: 'salman', name: 'Salman Alfarizqi', role: 'Administrator' },
        { username: 'reza', name: 'Reza Ardiansyah', role: 'Kepala Toko' },
        { username: 'rio', name: 'Andhika Lingga', role: 'Admin Sales' },
        { username: 'aldy', name: 'Aldy', role: 'Admin Sales' },
        { username: 'agus', name: 'Agus Pratama', role: 'Operator' },
        { username: 'budi', name: 'Budi Santoso', role: 'Mekanik' }
    ];

    const usernameInput = document.getElementById('addUsername');
    const userSuggestions = document.getElementById('userSuggestions');
    const userRoleSelect = document.getElementById('addUserRole');

    if (usernameInput && userSuggestions) {
        usernameInput.addEventListener('input', function() {
            const query = this.value.trim().toLowerCase();
            if (query.length < 1) {
                userSuggestions.style.display = 'none';
                return;
            }

            const filtered = userPortalList.filter(u => 
                u.username.toLowerCase().includes(query) || u.name.toLowerCase().includes(query)
            );

            if (filtered.length > 0) {
                userSuggestions.innerHTML = filtered.map(u => 
                    `<div class="autocomplete-item" data-username="${u.username}" data-role="${u.role}">
                        <span class="fw-bold">${u.username}</span> <span class="text-muted" style="font-size: 0.8rem;">(${u.name})</span>
                    </div>`
                ).join('');
                userSuggestions.style.display = 'block';

                userSuggestions.querySelectorAll('.autocomplete-item').forEach(item => {
                    item.addEventListener('click', function() {
                        usernameInput.value = this.dataset.username;
                        if (userRoleSelect && this.dataset.role) {
                            userRoleSelect.value = this.dataset.role;
                        }
                        userSuggestions.style.display = 'none';
                    });
                });
            } else {
                userSuggestions.innerHTML = `<div class="autocomplete-item text-muted" style="cursor: default; font-weight: normal;">Tidak ada username ditemukan</div>`;
                userSuggestions.style.display = 'block';
            }
        });

        document.addEventListener('click', function(e) {
            if (!usernameInput.contains(e.target) && !userSuggestions.contains(e.target)) {
                userSuggestions.style.display = 'none';
            }
        });
    }

    // Expiration date toggle logic
    function handleExpDateToggle(checkboxId, dateInputId, wrapperId) {
        const cb = document.getElementById(checkboxId);
        const dt = document.getElementById(dateInputId);
        const wrap = document.getElementById(wrapperId);
        if (!cb || !dt || !wrap) return;

        dt.placeholder = 'dd/mm/yyyy';

        // Create a hidden date input to act as the native picker
        const hiddenPicker = document.createElement('input');
        hiddenPicker.type = 'date';
        hiddenPicker.style.position = 'absolute';
        hiddenPicker.style.opacity = '0';
        hiddenPicker.style.width = '1px';
        hiddenPicker.style.height = '1px';
        hiddenPicker.style.bottom = '0';
        hiddenPicker.style.right = '0';
        hiddenPicker.style.pointerEvents = 'none';
        hiddenPicker.tabIndex = -1;
        wrap.style.position = 'relative';
        wrap.appendChild(hiddenPicker);

        hiddenPicker.addEventListener('change', function() {
            if (this.value) {
                const parts = this.value.split('-'); // YYYY-MM-DD
                if (parts.length === 3) {
                    dt.value = `${parts[2]}/${parts[1]}/${parts[0]}`;
                }
            }
        });

        // Trigger picker when clicking the calendar icon
        const icon = wrap.querySelector('.material-symbols-outlined');
        if (icon) {
            icon.onclick = function() {
                if (!dt.disabled) {
                    try { hiddenPicker.showPicker(); } catch (e) {}
                }
            };
        }

        function update() {
            if (cb.checked) {
                dt.disabled = true;
                wrap.style.backgroundColor = '#e9ecef';
                dt.style.cursor = 'not-allowed';
                dt.style.color = '#6b7280';
                
                if (dt.value) {
                    dt.dataset.oldValue = dt.value;
                }
                dt.value = '';
            } else {
                dt.disabled = false;
                wrap.style.backgroundColor = '#FFFFFF';
                dt.style.cursor = 'text';
                dt.style.color = '#111827';
                
                if (dt.dataset.oldValue) {
                    dt.value = dt.dataset.oldValue;
                }
            }
        }

        cb.addEventListener('change', update);
        update();
    }

    handleExpDateToggle('addForever', 'addExpDate', 'addGroupWrapper');
    handleExpDateToggle('editForever', 'editExpDate', 'editGroupWrapper');

    // Filter Table User (Search, Role, Status)
    const searchUserInput = document.getElementById('searchUserInput');
    const roleItems = document.querySelectorAll('#filterUserRole + .dropdown-menu .dropdown-item');
    const statusItems = document.querySelectorAll('#filterUserStatus + .dropdown-menu .dropdown-item');
    const selectedUserRoleText = document.getElementById('selectedUserRoleText');
    const selectedUserStatusText = document.getElementById('selectedUserStatusText');
    const btnResetUser = document.getElementById('btnResetUser');
    const userRows = document.querySelectorAll('.user-table tbody tr');

    let currentUserRole = 'semua';
    let currentUserStatus = 'semua';

    function filterUserTable() {
        const query = searchUserInput ? searchUserInput.value.toLowerCase().trim() : '';
        userRows.forEach(row => {
            const role = (row.dataset.role || '').toLowerCase();
            const status = (row.dataset.status || '').toLowerCase();
            const textContent = row.textContent.toLowerCase();

            const matchSearch = !query || textContent.includes(query);
            const matchRole = (currentUserRole === 'semua') || (role === currentUserRole.toLowerCase());
            const matchStatus = (currentUserStatus === 'semua') || (status === currentUserStatus.toLowerCase());

            if (matchSearch && matchRole && matchStatus) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }

    const btnFilterRole = document.getElementById('filterUserRole');
    const btnFilterStatus = document.getElementById('filterUserStatus');

    function updateButtonColors() {
        if (btnFilterRole) btnFilterRole.classList.toggle('filter-active', currentUserRole !== 'semua');
        if (btnFilterStatus) btnFilterStatus.classList.toggle('filter-active', currentUserStatus !== 'semua');
    }

    if (searchUserInput) {
        searchUserInput.addEventListener('input', filterUserTable);
    }

    roleItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            roleItems.forEach(i => i.classList.remove('active'));
            this.classList.add('active');
            currentUserRole = this.dataset.role || this.textContent.trim();
            if (selectedUserRoleText) {
                selectedUserRoleText.textContent = this.textContent.trim() === 'Semua Role' ? 'Role' : this.textContent.trim();
            }
            updateButtonColors();
            filterUserTable();
        });
    });

    statusItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            statusItems.forEach(i => i.classList.remove('active'));
            this.classList.add('active');
            currentUserStatus = this.dataset.status || this.textContent.trim();
            if (selectedUserStatusText) {
                selectedUserStatusText.textContent = this.textContent.trim() === 'Semua Status' ? 'Status' : this.textContent.trim();
            }
            updateButtonColors();
            filterUserTable();
        });
    });

    if (btnResetUser) {
        btnResetUser.addEventListener('click', function() {
            if (searchUserInput) searchUserInput.value = '';
            currentUserRole = 'semua';
            currentUserStatus = 'semua';
            if (selectedUserRoleText) selectedUserRoleText.textContent = 'Role';
            if (selectedUserStatusText) selectedUserStatusText.textContent = 'Status';
            roleItems.forEach(i => i.classList.toggle('active', i.dataset.role === 'semua'));
            statusItems.forEach(i => i.classList.toggle('active', i.dataset.status === 'semua'));
            updateButtonColors();
            filterUserTable();
        });
    }
});
</script>
