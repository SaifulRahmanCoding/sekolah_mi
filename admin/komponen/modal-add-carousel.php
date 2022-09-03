<!-- Modal -->
<div class="modal fade" id="carouselModal" tabindex="-1" aria-labelledby="carouselModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="carouselModalLabel">Tambah Carousel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="controllers/carouselControllers.php?opsi=input" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <label for="foto" class="mb-1">Foto</label>
                        <input type="file" name="foto" class="form-control" id="foto" accept=".jpg,.jpeg" required />
                    </div>
                    <div class="form-group mb-3">
                        <label for="judul" class="mb-1">Judul</label>
                        <input type="text" name="judul" class="form-control" id="judul" required />
                    </div>
                    <div class="form-group mb-3">
                        <label for="sub_judul" class="mb-1">Sub Judul</label>
                        <input type="text" name="sub_judul" class="form-control" id="sub_judul" required />
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