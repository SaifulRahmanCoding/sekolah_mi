<?php
$visiMisi = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM visi_misi"));

if (is_null($visiMisi)) {
    $visiMisi['visi'] = "";
    $visiMisi['misi'] = "";
    $visiMisi['tujuan'] = "";
}
?>
<!-- Modal -->
<div class="modal fade" id="visiMisiModal" tabindex="-1" aria-labelledby="visiMisiModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="visiMisiModalLabel">Visi, Misi dan Tujuan Sekolah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-danger">Setiap Point dipisahkan dengan tanda koma ','</p>
                <form action="controllers/lainControllers.php?jenis=visiMisi" method="post">
                    <div class="form-group mb-4">
                        <label for="visi" class="mb-2 fw-bolder">Visi</label>
                        <textarea name="visi" id="visi" cols="30" rows="6" class="form-control"><?php echo $visiMisi['visi'] ?></textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label for="misi" class="mb-2 fw-bolder">Misi</label>
                        <textarea name="misi" id="misi" cols="30" rows="6" class="form-control"><?php echo $visiMisi['misi'] ?></textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label for="tujuan" class="mb-2 fw-bolder">Tujuan</label>
                        <textarea name="tujuan" id="tujuan" cols="30" rows="6" class="form-control"><?php echo $visiMisi['tujuan'] ?></textarea>
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