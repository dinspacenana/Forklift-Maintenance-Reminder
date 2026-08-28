<?php
// footer.php - Footer & Modal Profil Akun
?>
    </div><!-- /.fmr-main -->
</div><!-- /.fmr-layout -->

<!-- MODAL: Profil Akun -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 440px;">
        <div class="modal-content fmr-modal-content">
            <!-- Modal Header -->
            <div class="modal-header fmr-modal-header d-flex justify-content-between align-items-center">
                <h5 class="modal-title fmr-modal-title" id="profileModalLabel">Profil Akun</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body fmr-modal-body">
                <!-- Avatar with Camera Icon Overlay -->
                <div class="avatar-edit-container">
                    <img src="dist/images/avatar.svg" alt="Andi Wijaya" class="avatar-edit-img">
                    <div class="avatar-camera-btn" title="Ubah Foto Profil">
                        <i class="fa-solid fa-camera"></i>
                    </div>
                </div>

                <!-- Profile Form -->
                <form onsubmit="event.preventDefault();">
                    <div class="mb-3">
                        <label for="profileNameInput" class="fmr-form-label">Nama</label>
                        <div class="fmr-input-wrapper">
                            <input type="text" class="fmr-form-control" id="profileNameInput" value="Andi Wijaya">
                            <i class="fa-solid fa-pencil fmr-input-edit-icon"></i>
                        </div>
                        <p class="fmr-form-subtext">Logged as Administrator.</p>
                    </div>

                    <!-- Action Button -->
                    <div class="d-flex justify-content-end mt-4">
                        <button type="button" class="fmr-btn-submit" data-bs-dismiss="modal">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap 5 Bundle JS (Includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
