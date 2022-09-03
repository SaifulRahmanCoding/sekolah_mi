<!-- Modal -->
<div class="modal fade" id="dokumentasiModal" tabindex="-1" aria-labelledby="dokumentasiModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dokumentasiModalLabel">Tambah dokumentasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="controllers/dokumentasiControllers.php?opsi=input" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <label for="foto" class="mb-1">Foto</label>
                        <input type="file" name="foto" class="form-control" id="foto" accept=".jpg,.jpeg" required />
                    </div>
                    <div class="form-group mb-3">
                        <label for="keterangan" class="mb-1">keterangan</label>
                        <input type="text" name="keterangan" class="form-control" id="keterangan" required />
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