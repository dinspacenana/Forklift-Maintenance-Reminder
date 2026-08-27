<?php
/**
 * footer.php
 * Penutup layout: modal Profile + script Bootstrap + script custom.
 */
?>
    </div><!-- /.app-content -->
</div><!-- /.app-wrapper -->

<!-- Modal Profil (dummy, belum terhubung ke database) -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 18px; border:none;">
            <div class="modal-body p-4">
                <h5 class="fw-bold mb-4">Profil Akun</h5>

                <div class="text-center mb-4">
                    <div class="position-relative d-inline-block">
                        <img src="https://ui-avatars.com/api/?name=<?= urlencode(currentUserName()) ?>&background=83A8BD&color=fff&size=128"
                             alt="Avatar" style="width:96px;height:96px;border-radius:50%;object-fit:cover;">
                        <span class="position-absolute bottom-0 end-0 bg-white rounded-circle p-1 shadow-sm">
                            <i class="bi bi-camera-fill text-primary"></i>
                        </span>
                    </div>
                </div>

                <label class="form-label fw-semibold">Nama</label>
                <div class="input-group mb-2">
                    <input type="text" class="form-control" value="<?= e(currentUserName()) ?>" readonly>
                    <span class="input-group-text bg-white"><i class="bi bi-pencil"></i></span>
                </div>
                <p class="text-muted small mb-4">Logged as <?= e(currentUserRole()) ?>.</p>

                <div class="text-end">
                    <button type="button" class="btn btn-fmr" style="width:auto;padding-inline:28px;" data-bs-dismiss="modal">
                        Simpan
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Toggle sidebar (mobile)
    const sidebarToggle = document.getElementById('sidebarToggle');
    const appSidebar = document.getElementById('appSidebar');

    if (sidebarToggle && appSidebar) {
        sidebarToggle.addEventListener('click', function () {
            appSidebar.classList.toggle('show');
        });
    }
</script>
</body>
</html>
