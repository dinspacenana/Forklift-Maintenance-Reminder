<!-- tab_user.php - Konten Tab User -->
<!-- Filter Bar -->
<div class="user-filter-bar">
    <div class="d-flex align-items-center gap-3 flex-wrap">
        <!-- Search Input -->
        <div class="search-input-pill" style="min-width: 280px;">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Cari Username atau Nama" id="searchUserInput">
        </div>

        <!-- Filter Dropdown: Role -->
        <div class="dropdown">
            <button class="filter-dropdown-btn dropdown-toggle" type="button" id="filterUserRole" data-bs-toggle="dropdown" aria-expanded="false" style="min-width: 110px; justify-content: space-between;">
                <span>Role</span>
            </button>
            <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="filterUserRole" style="background-color: #1E3E5B;">
                <li><a class="dropdown-item text-white active" href="#" style="background-color: #164E63;">Administrator</a></li>
                <li><a class="dropdown-item text-white" href="#">Kepala Toko</a></li>
                <li><a class="dropdown-item text-white" href="#">Admin Sales</a></li>
            </ul>
        </div>

        <!-- Filter Dropdown: Status -->
        <div class="dropdown">
            <button class="filter-dropdown-btn dropdown-toggle" type="button" id="filterUserStatus" data-bs-toggle="dropdown" aria-expanded="false" style="min-width: 110px; justify-content: space-between;">
                <span>Status</span>
            </button>
            <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="filterUserStatus" style="background-color: #1E3E5B;">
                <li><a class="dropdown-item text-white active" href="#" style="background-color: #164E63;">Aktif</a></li>
                <li><a class="dropdown-item text-white" href="#">Nonaktif</a></li>
            </ul>
        </div>

        <!-- Reset Button -->
        <button type="button" class="btn-reset-filter" onclick="document.getElementById('searchUserInput').value='';">
            <i class="fa-solid fa-rotate-right"></i>
            <span>Reset</span>
        </button>
    </div>

    <!-- Add User Button -->
    <button type="button" class="btn-add-user" data-bs-toggle="modal" data-bs-target="#addUserModal">
        <i class="fa-solid fa-plus"></i> Add User
    </button>
</div>

<!-- Table Data User -->
<div class="table-responsive">
    <table class="table user-table">
        <thead>
            <tr>
                <th style="width: 17%;">Nama</th>
                <th style="width: 11%;">Username</th>
                <th style="width: 13%;">Role</th>
                <th style="width: 15%;">Created Datetime</th>
                <th style="width: 13%;">Created By</th>
                <th style="width: 10%;">Status</th>
                <th style="width: 13%;">Last Online At</th>
                <th style="width: 8%; text-align: center;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Row 1 -->
            <tr>
                <td class="fw-bold">Marsha Thalita</td>
                <td>marsha</td>
                <td><span class="badge-role">Administrator</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td>Administrator</td>
                <td><span class="badge-status-aktif-blue">Aktif</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td class="text-center">
                    <div class="action-icons-group justify-content-center">
                        <button class="action-icon-btn icon-edit" title="Edit User" data-bs-toggle="modal" data-bs-target="#editUserModal">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        <button class="action-icon-btn icon-delete" title="Hapus User" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </div>
                </td>
            </tr>

            <!-- Row 2 -->
            <tr>
                <td class="fw-bold">Dina Ayu</td>
                <td>dina</td>
                <td><span class="badge-role">Administrator</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td>Administrator</td>
                <td><span class="badge-status-aktif-blue">Aktif</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td class="text-center">
                    <div class="action-icons-group justify-content-center">
                        <button class="action-icon-btn icon-edit" title="Edit User" data-bs-toggle="modal" data-bs-target="#editUserModal">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        <button class="action-icon-btn icon-delete" title="Hapus User" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </div>
                </td>
            </tr>

            <!-- Row 3 -->
            <tr>
                <td class="fw-bold">Arqueeny Zahra</td>
                <td>lita</td>
                <td><span class="badge-role">Kepala Toko</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td>Administrator</td>
                <td><span class="badge-status-nonaktif-gray">Nonaktif</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td class="text-center">
                    <div class="action-icons-group justify-content-center">
                        <button class="action-icon-btn icon-edit" title="Edit User" data-bs-toggle="modal" data-bs-target="#editUserModal">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        <button class="action-icon-btn icon-delete" title="Hapus User" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </div>
                </td>
            </tr>

            <!-- Row 4 -->
            <tr>
                <td class="fw-bold">Navyza Marcha</td>
                <td>caca</td>
                <td><span class="badge-role">Admin Sales</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td>Administrator</td>
                <td><span class="badge-status-aktif-blue">Aktif</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td class="text-center">
                    <div class="action-icons-group justify-content-center">
                        <button class="action-icon-btn icon-edit" title="Edit User" data-bs-toggle="modal" data-bs-target="#editUserModal">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        <button class="action-icon-btn icon-delete" title="Hapus User" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </div>
                </td>
            </tr>

            <!-- Row 5 -->
            <tr>
                <td class="fw-bold">Salman Alfarizqi</td>
                <td>salman</td>
                <td><span class="badge-role">Administrator</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td>Administrator</td>
                <td><span class="badge-status-nonaktif-gray">Nonaktif</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td class="text-center">
                    <div class="action-icons-group justify-content-center">
                        <button class="action-icon-btn icon-edit" title="Edit User" data-bs-toggle="modal" data-bs-target="#editUserModal">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        <button class="action-icon-btn icon-delete" title="Hapus User" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </div>
                </td>
            </tr>

            <!-- Row 6 -->
            <tr>
                <td class="fw-bold">Reza Ardiansyah</td>
                <td>reza</td>
                <td><span class="badge-role">Kepala Toko</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td>Administrator</td>
                <td><span class="badge-status-aktif-blue">Aktif</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td class="text-center">
                    <div class="action-icons-group justify-content-center">
                        <button class="action-icon-btn icon-edit" title="Edit User" data-bs-toggle="modal" data-bs-target="#editUserModal">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        <button class="action-icon-btn icon-delete" title="Hapus User" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </div>
                </td>
            </tr>

            <!-- Row 7 -->
            <tr>
                <td class="fw-bold">Andhika Lingga</td>
                <td>rio</td>
                <td><span class="badge-role">Admin Sales</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td>Administrator</td>
                <td><span class="badge-status-aktif-blue">Aktif</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td class="text-center">
                    <div class="action-icons-group justify-content-center">
                        <button class="action-icon-btn icon-edit" title="Edit User" data-bs-toggle="modal" data-bs-target="#editUserModal">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        <button class="action-icon-btn icon-delete" title="Hapus User" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </div>
                </td>
            </tr>

            <!-- Row 8 -->
            <tr>
                <td class="fw-bold">Aldy</td>
                <td>aldy</td>
                <td><span class="badge-role">Admin Sales</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td>Administrator</td>
                <td><span class="badge-status-aktif-blue">Aktif</span></td>
                <td>26 – 08 – 03, 18.00</td>
                <td class="text-center">
                    <div class="action-icons-group justify-content-center">
                        <button class="action-icon-btn icon-edit" title="Edit User" data-bs-toggle="modal" data-bs-target="#editUserModal">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        <button class="action-icon-btn icon-delete" title="Hapus User" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </div>
                </td>
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

<!-- =========================================================
     MODAL: Add New User
     ========================================================= -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 540px;">
        <div class="modal-content modal-user-content">
            <h4 class="modal-user-title" id="addUserModalLabel">Add New User</h4>

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
                            <label class="user-form-label">Expiration Date</label>
                            <div class="mb-2">
                                <label class="custom-checkbox-item">
                                    <input type="checkbox" id="addForever">
                                    <span>Forever</span>
                                </label>
                            </div>
                            <div class="user-date-input-group">
                                <input type="text" value="02/08/26" id="addExpDate">
                                <i class="fa-regular fa-calendar-days"></i>
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

                <!-- Submit Button -->
                <div class="d-flex justify-content-end mt-4">
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
                            <label class="user-form-label">Expiration Date</label>
                            <div class="mb-2">
                                <label class="custom-checkbox-item">
                                    <input type="checkbox" id="editForever">
                                    <span>Forever</span>
                                </label>
                            </div>
                            <div class="user-date-input-group">
                                <input type="text" value="02/08/26" id="editExpDate">
                                <i class="fa-regular fa-calendar-days"></i>
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

                <!-- Submit Button -->
                <div class="d-flex justify-content-end mt-4">
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
});
</script>
