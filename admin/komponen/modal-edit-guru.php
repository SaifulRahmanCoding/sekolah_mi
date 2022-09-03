<!-- Modal -->
<div class="modal fade" id="editGuruModal<?php echo $guru['id'] ?>" tabindex="-1" aria-labelledby="editGuruModal<?php echo $guru['id'] ?>Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editGuruModal<?php echo $guru['id'] ?>Label">Edit Data Guru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="controllers/guruControllers.php?opsi=edit" method="post" enctype="multipart/form-data">
                    <h5 class="fw-bolder">Preview Foto</h5>
                    <img src="<?php echo "../$pecah_path[1]" ?>" class="img-fluid mb-3" alt="...">
                    <input type="text" name="id" class="form-control" id="id" value="<?php echo $guru['id'] ?>" hidden />
                    <div class="form-group mb-3">
                        <label for="foto" class="mb-1">Foto</label>
                        <input type="file" name="foto" class="form-control" id="foto" accept=".jpg,.jpeg" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="nama" class="mb-1">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $guru['nama'] ?>" required />
                    </div>
                    <div class="form-group mb-3">
                        <label for="jabatan" class="mb-1">Sub Judul</label>
                        <input type="text" name="jabatan" class="form-control" id="jabatan" value="<?php echo $guru['jabatan'] ?>" required />
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