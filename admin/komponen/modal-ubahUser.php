<!-- Modal -->
<div class="modal fade" id="ubahUserModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ubahUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <!-- header -->
            <div class="modal-header">
                <h5 class="modal-title fw-bolder" id="ubahUserModalLabel">Ubah Data Akun</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- end header -->

            <div class="modal-body ps-4">
                <!-- form -->
                <form action="controllers/akunControllers.php?opsi=update" method="POST">
                    <!-- id -->
                    <?php
                    $sessionNama = $_SESSION['nama'];
                    $s_user = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM user WHERE username = '$sessionNama'"));
                    ?>
                    <input name="id" id="id" class="form-control bg-light" type="number" value="<?php echo $s_user['id']; ?>" hidden required>

                    <div class="form-group mb-1 d-flex align-items-center">
                        <label for="username" class="mb-2 col-3 pt-2 pb-2 text-start">Username</label>

                        <input name="username" id="username" class="form-control bg-light" type="text" value="<?php echo $sessionNama ?>" required>
                    </div>

                    <div class="form-group mb-1 d-flex align-items-center">
                        <label for="pass_lama" class="mb-2 col-3 pt-2 pb-2 text-start">Password Lama</label>

                        <input name="pass_lama" id="pass_lama" class="form-control bg-light" type="text" placeholder="Ketik Password Lama" required>
                    </div>

                    <div class="form-group mb-1 d-flex align-items-center">
                        <label for="pass_baru" class="mb-2 col-3 pt-2 pb-2 text-start">Password Baru</label>

                        <input name="pass_baru" id="pass_baru" class="form-control bg-light" type="text" placeholder="Ketik Password Baru" required>
                    </div>
            </div>
            <!-- end modal body -->

            <!-- footer -->
            <div class="modal-footer justify-content-center">
                <input type="submit" name="submit" value="Ubah Data" class="btn btn-dark text-white col-11 p-2 mb-3">

                </form>
                <!-- end form -->
            </div>
            <!-- end footer -->

        </div>
    </div>
</div>