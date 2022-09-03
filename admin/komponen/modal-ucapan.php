<?php
$s_ucapan = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM ucapan"));
$pecah_path_ucapan = (empty($s_ucapan['foto'])) ? "" : explode('../../', $s_ucapan['foto']);
?>
<!-- Modal -->
<div class="modal fade" id="ucapanModal" tabindex="-1" aria-labelledby="ucapanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ucapanModalLabel">Data Ucapan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="controllers/lainControllers.php?jenis=ucapan" method="post" enctype="multipart/form-data">
                    <h5 class="fw-bolder">Preview Foto</h5>
                    <img src="<?php echo (empty($s_ucapan['foto'])) ? "../assets/img/avatar.jpg" : "../$pecah_path_ucapan[1]"; ?>" class="img-fluid mb-2" alt="...">
                    <div class="form-group mb-2">
                        <label for="foto" class="mb-1">Foto</label>
                        <input type="file" name="foto" class="form-control" id="foto" />
                    </div>
                    <div class="form-group mb-2">
                        <label for="judul" class="mb-1">Judul</label>
                        <input type="text" name="judul" class="form-control" id="judul" value="<?php echo (empty($s_ucapan['judul'])) ? "" : $s_ucapan['judul']; ?>" />
                    </div>
                    <div class="form-group mb-2">
                        <label for="konten" class="mb-1">Konten</label>
                        <textarea name="konten" id="konten" cols="30" rows="10" class="form-control"><?php echo (empty($s_ucapan['konten'])) ? "" : $s_ucapan['konten']; ?></textarea>
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