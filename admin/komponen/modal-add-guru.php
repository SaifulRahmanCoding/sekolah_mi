<!-- Modal -->
<div class="modal fade" id="guruModal" tabindex="-1" aria-labelledby="guruModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="guruModalLabel">Tambah guru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="controllers/guruControllers.php?opsi=input" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <label for="foto" class="mb-1">Foto</label>
                        <input type="file" name="foto" class="form-control" id="foto" accept=".jpg,.jpeg" required />
                    </div>
                    <div class="form-group mb-3">
                        <label for="nama" class="mb-1">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" required />
                    </div>
                    <div class="form-group mb-3">
                        <label for="jabatan" class="mb-1">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" id="jabatan" required />
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