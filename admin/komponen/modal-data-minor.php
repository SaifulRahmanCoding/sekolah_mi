<?php
$s_dMinor = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM data_minor"));
$pecah_path_dMinor = (empty($s_dMinor['logo'])) ? "" : explode('../../', $s_dMinor['logo']);
?>
<!-- Modal -->
<div class="modal fade" id="dataMinor" tabindex="-1" aria-labelledby="dataMinorLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dataMinorLabel">Data Minor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="controllers/lainControllers.php?jenis=dataMinor" method="post" enctype="multipart/form-data">
                    <h5 class="fw-bolder">Preview Logo</h5>
                    <img src="<?php echo (empty($s_dMinor['logo'])) ? "../assets/img/no_image.jpg" : "../$pecah_path_dMinor[1]"; ?>" class="img-fluid mb-2" alt="...">
                    <span class="text-danger">usahakan ukuran logo 1:1 atau Kotak</span>
                    <div class="form-group mb-2">
                        <label for="logo" class="mb-1">logo</label>
                        <input type="file" name="logo" class="form-control" id="logo" accept=".png" />
                    </div>
                    <div class="form-group mb-2">
                        <label for="telp" class="mb-1">telp</label>
                        <input type="telp" name="telp" class="form-control" id="telp" value="<?php echo (empty($s_dMinor['telp'])) ? "" : $s_dMinor['telp']; ?>" />
                    </div>
                    <div class="form-group mb-2">
                        <label for="email" class="mb-1">email</label>
                        <input type="email" name="email" class="form-control" id="email" value="<?php echo (empty($s_dMinor['email'])) ? "" : $s_dMinor['email']; ?>" />
                    </div>
                    <div class="form-group mb-2">
                        <label for="alamat" class="mb-1">alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo (empty($s_dMinor['alamat'])) ? "" : $s_dMinor['alamat']; ?>" />
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