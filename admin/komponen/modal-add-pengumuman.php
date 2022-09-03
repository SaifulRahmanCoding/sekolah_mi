<!-- Modal -->
<div class="modal fade" id="pengumumanModal" tabindex="-1" aria-labelledby="pengumumanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pengumumanModalLabel">Tambah Pengumuman</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="controllers/pengumumanControllers.php?opsi=input" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <label for="judul" class="mb-1">Judul</label>
                        <input type="text" name="judul" class="form-control" id="judul" required />
                    </div>
                    <div class="form-group mb-3">
                        <label for="ket" class="mb-1">Keterangan</label>
                        <textarea name="ket" id="ket" cols="30" rows="10" class="form-control" required></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="tanggal" class="mb-1">Tanggal Pengumuman/ Agenda</label>
                        <input type="date" name="tanggal" class="form-control" id="" required/>
                    </div>
                    <div class="form-group mb-3">
                        <label for="jam_awal" class="mb-1">Jam Awal</label>
                        <input type="time" name="jam_awal" class="form-control" id="" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="jam_akhir" class="mb-1">Jam Akhir</label>
                        <input type="time" name="jam_akhir" class="form-control" id="" />
                    </div>
                    <div class="form-group mb-2">
                        <label for="jenis" class="mb-1">Jenis</label>
                        <select id="jenis" class="form-select" name="jenis" required>
                            <option value="" selected> - Pilih</option>
                            <option value="pengumuman"> Pengumuman</option>
                            <option value="agenda"> Agenda</option>
                        </select>
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