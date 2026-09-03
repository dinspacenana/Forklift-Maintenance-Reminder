<?php
// includes/footer.php - Footer & Modal Profil Akun
?>
    </div><!-- /.fmr-main -->
</div><!-- /.fmr-layout -->

<!-- MODAL: Profil Akun -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 440px;">
        <div class="modal-content fmr-modal-content">
            <!-- Modal Header -->
            <div class="modal-header fmr-modal-header">
                <h5 class="modal-title fmr-modal-title" id="profileModalLabel">Profil Akun</h5>
            </div>

            <!-- Modal Body -->
            <div class="modal-body fmr-modal-body">
                <!-- Avatar with Camera Icon Overlay -->
                <div class="avatar-edit-container">
                    <img src="assets/images/avatar.svg" alt="Andi Wijaya" class="avatar-edit-img" onerror="this.src='dist/images/avatar.svg'">
                    <div class="avatar-camera-btn" title="Ubah Foto Profil">
                        <span class="material-symbols-outlined">photo_camera</span>
                    </div>
                </div>

                <!-- Profile Form -->
                <form onsubmit="event.preventDefault();">
                    <div class="mb-3">
                        <label for="profileNameInput" class="fmr-form-label">Nama</label>
                        <div class="fmr-input-wrapper">
                            <input type="text" class="fmr-form-control" id="profileNameInput" value="Andi Wijaya">
                            <span class="material-symbols-outlined fmr-input-edit-icon">edit</span>
                        </div>
                        <p class="fmr-form-subtext">Masuk sebagai Administrator.</p>
                    </div>

                    <!-- Action Button -->
                    <div class="d-flex justify-content-end align-items-center gap-2 mt-4">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal" style="border-radius: 10px; font-weight: 600; padding: 7px 22px;">Batal</button>
                        <button type="button" class="fmr-btn-submit" data-bs-dismiss="modal">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- MODAL: Logout Confirmation -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
        <div class="modal-content fmr-modal-content">
            <!-- Modal Header -->
            <div class="modal-header fmr-modal-header border-0 pb-0">
                <h5 class="modal-title fmr-modal-title" id="logoutModalLabel">Konfirmasi Keluar</h5>
            </div>

            <!-- Modal Body -->
            <div class="modal-body fmr-modal-body pt-3">
                <p class="mb-4">Apakah Anda yakin ingin keluar dari sistem?</p>
                <div class="d-flex justify-content-end gap-2">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal" style="border-radius: 10px; font-weight: 600;">Batal</button>
                    <a href="login.php" class="btn btn-danger" style="border-radius: 10px; font-weight: 600;">Keluar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap 5 Bundle JS (Local) -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Universal Table Pagination Script -->
<script src="assets/js/table-pagination.js"></script>

<!-- Custom Datepicker Script for dd/mm/yyyy consistency -->
<script src="assets/js/custom-datepicker.js"></script>

</body>
</html>
