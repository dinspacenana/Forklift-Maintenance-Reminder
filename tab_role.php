<!-- tab_role.php - Konten Tab Role & Akses -->
<!-- Horizontal Tab Divider -->
<hr class="user-tab-divider">

<!-- Role Cards Grid (2 Columns) -->
<div class="row g-4 mb-4">
    <!-- Card 1: Administrator -->
    <div class="col-12 col-md-6">
        <div class="role-card">
            <div>
                <h4 class="role-title">Administrator</h4>
                <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                    <span class="badge-role-users">2 user</span>
                    <span class="badge-role-access">50 akses aktif</span>
                </div>
                <div class="role-date-text">
                    Diinput: 03 Agu 2026, 13.52
                </div>
            </div>
            <div class="d-flex justify-content-end align-items-center gap-2 mt-4 pt-2">
                <button type="button" class="btn-role-edit" data-bs-toggle="modal" data-bs-target="#editRoleModal">
                    <i class="fa-solid fa-pencil"></i> Edit
                </button>
                <button type="button" class="btn-role-akses" data-bs-toggle="modal" data-bs-target="#hakAksesModal">
                    <i class="fa-solid fa-key"></i> Akses
                </button>
            </div>
        </div>
    </div>

    <!-- Card 2: Kepala Toko -->
    <div class="col-12 col-md-6">
        <div class="role-card">
            <div>
                <h4 class="role-title">Kepala Toko</h4>
                <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                    <span class="badge-role-users">2 user</span>
                    <span class="badge-role-access">50 akses aktif</span>
                </div>
                <div class="role-date-text">
                    Diinput: 05 Agu 2026, 13.52
                </div>
            </div>
            <div class="d-flex justify-content-end align-items-center gap-2 mt-4 pt-2">
                <button type="button" class="btn-role-edit" data-bs-toggle="modal" data-bs-target="#editRoleModal">
                    <i class="fa-solid fa-pencil"></i> Edit
                </button>
                <button type="button" class="btn-role-akses" data-bs-toggle="modal" data-bs-target="#hakAksesModal">
                    <i class="fa-solid fa-key"></i> Akses
                </button>
            </div>
        </div>
    </div>

    <!-- Card 3: Admin Sales -->
    <div class="col-12 col-md-6">
        <div class="role-card">
            <div>
                <h4 class="role-title">Admin Sales</h4>
                <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                    <span class="badge-role-users">5 user</span>
                    <span class="badge-role-access">20 akses aktif</span>
                </div>
                <div class="role-date-text">
                    Diinput: 08 Agu 2026, 13.52
                </div>
            </div>
            <div class="d-flex justify-content-end align-items-center gap-2 mt-4 pt-2">
                <button type="button" class="btn-role-edit" data-bs-toggle="modal" data-bs-target="#editRoleModal">
                    <i class="fa-solid fa-pencil"></i> Edit
                </button>
                <button type="button" class="btn-role-akses" data-bs-toggle="modal" data-bs-target="#hakAksesModal">
                    <i class="fa-solid fa-key"></i> Akses
                </button>
            </div>
        </div>
    </div>
</div>

<!-- =========================================================
     MODAL 1: Edit Role
     ========================================================= -->
<div class="modal fade" id="editRoleModal" tabindex="-1" aria-labelledby="editRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 520px;">
        <div class="modal-content modal-user-content">
            <h4 class="modal-user-title" id="editRoleModalLabel">Edit Role</h4>

            <form onsubmit="event.preventDefault();">
                <div class="row g-3 mb-4">
                    <div class="col-6">
                        <label for="editRoleName" class="user-form-label">Nama Role</label>
                        <input type="text" class="user-form-input" id="editRoleName" value="Administrator">
                    </div>
                    <div class="col-6">
                        <label for="editRoleSelect" class="user-form-label">Role</label>
                        <select class="user-form-select" id="editRoleSelect">
                            <option value="Administrator" selected>Administrator</option>
                            <option value="Kepala Toko">Kepala Toko</option>
                            <option value="Admin Sales">Admin Sales</option>
                        </select>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn-forklift-save" data-bs-dismiss="modal">
                        Simpan User
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- =========================================================
     MODAL 2: Add Role
     ========================================================= -->
<div class="modal fade" id="addRoleModal" tabindex="-1" aria-labelledby="addRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 540px;">
        <div class="modal-content modal-user-content">
            <h4 class="modal-user-title" id="addRoleModalLabel">Add Role</h4>

            <form onsubmit="event.preventDefault();">
                <div class="row g-3 mb-3">
                    <div class="col-6">
                        <label for="addRoleName" class="user-form-label">Nama Role</label>
                        <input type="text" class="user-form-input" id="addRoleName" value="Administrator">
                    </div>
                    <div class="col-6">
                        <label for="addRoleSelect" class="user-form-label">Role</label>
                        <select class="user-form-select" id="addRoleSelect">
                            <option value="Administrator" selected>Administrator</option>
                            <option value="Kepala Toko">Kepala Toko</option>
                            <option value="Admin Sales">Admin Sales</option>
                        </select>
                    </div>
                </div>

                <!-- Permissions Section -->
                <div class="mb-4">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <label class="user-form-label mb-0">Permissions</label>
                        <div class="d-flex align-items-center gap-2">
                            <button type="button" class="btn-permission-action" onclick="toggleAllRoleChecks(true)">Select All</button>
                            <button type="button" class="btn-permission-action" onclick="toggleAllRoleChecks(false)">Clear All</button>
                        </div>
                    </div>

                    <!-- Checklist Items -->
                    <div class="d-flex flex-column gap-2" id="rolePermContainer">
                        <div class="perm-pill-item">
                            <input type="checkbox" name="role_perm[]" value="Enable" checked>
                            <span class="perm-pill-box">Enable</span>
                        </div>
                        <div class="perm-pill-item">
                            <input type="checkbox" name="role_perm[]" value="Update Role" checked>
                            <span class="perm-pill-box">Update Role</span>
                        </div>
                        <div class="perm-pill-item">
                            <input type="checkbox" name="role_perm[]" value="Update Customer">
                            <span class="perm-pill-box">Update Customer</span>
                        </div>
                        <div class="perm-pill-item">
                            <input type="checkbox" name="role_perm[]" value="Update Forklift">
                            <span class="perm-pill-box">Update Forklift</span>
                        </div>
                        <div class="perm-pill-item">
                            <input type="checkbox" name="role_perm[]" value="Update Jenis Maintenance" checked>
                            <span class="perm-pill-box">Update Jenis Maintenance</span>
                        </div>
                        <div class="perm-pill-item">
                            <input type="checkbox" name="role_perm[]" value="Manage Setting" checked>
                            <span class="perm-pill-box">Manage Setting</span>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn-forklift-save" data-bs-dismiss="modal">
                        Buat Role
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- =========================================================
     MODAL 3: Hak Akses
     ========================================================= -->
<div class="modal fade" id="hakAksesModal" tabindex="-1" aria-labelledby="hakAksesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 520px;">
        <div class="modal-content modal-user-content">
            <h4 class="modal-user-title" id="hakAksesModalLabel">Hak Akses</h4>

            <form onsubmit="event.preventDefault();">
                <div class="mb-4">
                    <div class="hak-akses-box-container">
                        <h6 class="fw-bold mb-3" style="color: #111827; font-size: 0.95rem;">View</h6>

                        <div class="d-flex flex-column gap-2">
                            <!-- Item 1 -->
                            <div class="hak-akses-pill-item">
                                <span class="perm-pill-box">can_view_dashboard</span>
                                <input type="checkbox" name="hak_akses[]" value="can_view_dashboard" checked>
                            </div>
                            <!-- Item 2 -->
                            <div class="hak-akses-pill-item">
                                <span class="perm-pill-box">can_view_customer</span>
                                <input type="checkbox" name="hak_akses[]" value="can_view_customer" checked>
                            </div>
                            <!-- Item 3 -->
                            <div class="hak-akses-pill-item">
                                <span class="perm-pill-box">can_view_forklift</span>
                                <input type="checkbox" name="hak_akses[]" value="can_view_forklift">
                            </div>
                            <!-- Item 4 -->
                            <div class="hak-akses-pill-item">
                                <span class="perm-pill-box">can_view_jenis_maintenance</span>
                                <input type="checkbox" name="hak_akses[]" value="can_view_jenis_maintenance">
                            </div>
                            <!-- Item 5 -->
                            <div class="hak-akses-pill-item">
                                <span class="perm-pill-box">can_view_jadwal_maintenance</span>
                                <input type="checkbox" name="hak_akses[]" value="can_view_jadwal_maintenance" checked>
                            </div>
                            <!-- Item 6 -->
                            <div class="hak-akses-pill-item">
                                <span class="perm-pill-box">can_view_reminder</span>
                                <input type="checkbox" name="hak_akses[]" value="can_view_reminder" checked>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn-forklift-save" data-bs-dismiss="modal">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function toggleAllRoleChecks(status) {
    const checks = document.querySelectorAll('input[name="role_perm[]"]');
    checks.forEach(c => c.checked = status);
}

function toggleAllAccessChecks(status) {
    const checks = document.querySelectorAll('input[name="hak_akses[]"]');
    checks.forEach(c => c.checked = status);
}
</script>
