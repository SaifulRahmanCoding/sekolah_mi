<!-- Modal -->
<div class="modal fade" id="editDokumentasiModal<?php echo $dokumentasi['id'] ?>" tabindex="-1" aria-labelledby="editDokumentasiModal<?php echo $dokumentasi['id'] ?>Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDokumentasiModal<?php echo $dokumentasi['id'] ?>Label">Edit Dokumentasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="controllers/dokumentasiControllers.php?opsi=edit" method="post" enctype="multipart/form-data">
                    <h5 class="fw-bolder">Preview Foto</h5>
                    <img src="<?php echo "../$pecah_path[1]" ?>" class="mb-3" style="max-height: 250px !important;"/>

                    <div class="form-group mb-3">
                        <input type="text" name="id" value="<?php echo $dokumentasi['id'] ?>" hidden>
                        <label for="foto" class="mb-1">Foto</label>
                        <input type="file" name="foto" class="form-control" id="foto" accept=".jpg,.jpeg"/>
                    </div>
                    <div class="form-group mb-3">
                        <label for="keterangan" class="mb-1">keterangan</label>
                        <input type="text" name="keterangan" class="form-control" id="keterangan" value="<?php echo $dokumentasi['ket'] ?>" required />
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                <input type="submit" value="Tambah Data" class="btn btn-primary btn-sm">
                </form>
            </div>
        </div>
    </div>
</div>