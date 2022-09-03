<!-- Modal -->
<div class="modal fade" id="editPengumumanModal<?php echo $pengumuman['id'] ?>" tabindex="-1" aria-labelledby="editPengumumanModal<?php echo $pengumuman['id'] ?>Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPengumumanModal<?php echo $pengumuman['id'] ?>Label">Edit Data pengumum$pengumuman</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="controllers/pengumumanControllers.php?opsi=edit" method="post" enctype="multipart/form-data">
                    <input type="text" name="id" value="<?php echo $pengumuman['id'] ?>" hidden>
                    <div class="form-group mb-3">
                        <label for="judul" class="mb-1">Judul</label>
                        <input type="text" name="judul" class="form-control" id="judul" value="<?php echo $pengumuman['judul'] ?>" required />
                    </div>
                    <div class="form-group mb-3">
                        <label for="ket" class="mb-1">Keterangan</label>
                        <textarea name="ket" id="ket" cols="30" rows="10" class="form-control" required><?php echo $pengumuman['keterangan'] ?></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="tanggal" class="mb-1">Tanggal Pengumuman/ Agenda</label>
                        <input type="date" name="tanggal" class="form-control" id="" value="<?php echo $pengumuman['tanggal'] ?>" required />
                    </div>
                    <div class="form-group mb-3">
                        <label for="jam_awal" class="mb-1">Jam Awal</label>
                        <input type="time" name="jam_awal" class="form-control" id="" value="<?php echo $pengumuman['jam_awal'] ?>" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="jam_akhir" class="mb-1">Jam Akhir</label>
                        <input type="time" name="jam_akhir" class="form-control" id="" value="<?php echo $pengumuman['jam_akhir'] ?>" />
                    </div>
                    <div class="form-group mb-2">
                        <label for="jenis" class="mb-1">Jenis</label>
                        <select id="jenis" class="form-select" name="jenis" required>
                            <option value="pengumuman" <?php echo ($pengumuman['jenis'] == "pengumuman") ? "selected" : ""; ?>> Pengumuman</option>
                            <option value="agenda" <?php echo ($pengumuman['jenis'] == "agenda") ? "selected" : ""; ?>> Agenda</option>
                        </select>
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