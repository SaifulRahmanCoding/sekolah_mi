<?php
$s_about = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM about"));
$pecah_path_about = (empty($s_about['foto'])) ? "" : explode('../../', $s_about['foto']);
?>
<!-- Modal -->
<div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="aboutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="aboutModalLabel">Data About</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="controllers/lainControllers.php?jenis=about" method="post" enctype="multipart/form-data">
                    <h5 class="fw-bolder">Preview</h5>
                    <img src="<?php echo (empty($s_about['foto'])) ? "../assets/img/no_image.jpg" : "../$pecah_path_about[1]"; ?>" alt="">
                    <div class="form-group mb-3">
                        <label for="foto" class="mb-1">Foto</label>
                        <input type="file" name="foto" class="form-control" id="foto" accept=".jpg,.jpeg" />
                    </div>
                    <div class="form-group mb-2">
                        <label for="judul" class="mb-1">Judul</label>
                        <input type="text" name="judul" class="form-control" id="judul" value="<?php echo (empty($s_about['judul'])) ? "" : $s_about['judul']; ?>" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="keterangan" class="mb-1">keterangan</label><br>
                        <span class="text-danger">Setiap beralih paragraf, gunakan '/n'</span>
                        <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control" required><?php echo (empty($s_about['keterangan'])) ? "" : $s_about['keterangan']; ?></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <input type="submit" value="Ubah Data" class="btn btn-primary btn-sm">
                </form>
            </div>
        </div>
    </div>
</div>