<?php
$seo = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM seo"));

if (is_null($seo)) {
    $seo['description'] = "";
    $seo['keywords'] = "";
    $seo['author'] = "";
    $seo['robots_index'] = 1;
    $seo['robots_follow'] = 1;
}
?>
<!-- Modal -->
<div class="modal fade" id="seoModal" tabindex="-1" aria-labelledby="seoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="seoModalLabel">Data S.E.O (Untuk Optimasi Search Engine Google)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="controllers/lainControllers.php?jenis=seo" method="POST" enctype="multipart/form-data">

                    <div class="form-group mb-3">
                        <label for="author" class="mb-2">Author</label>
                        <input name="author" id="author" class="form-control" type="text" value="<?php echo $seo['author'] ?>" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="description" class="mb-2">Deskripsi</label>
                        <textarea name="description" id="description" class="form-control" cols="30" rows="10" required><?php echo $seo['description'] ?></textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="keywords" class="mb-2">Keywords / Kata Kunci</label>
                        <textarea name="keywords" id="keywords" class="form-control" required><?php echo $seo['keywords'] ?></textarea>
                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        <div class="form-group mb-3 me-5">
                            <label for="robots" class="mb-2">Robots Index</label>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="robots_index" id="index" value="1" required <?php echo ($seo['robots_index'] ? "checked" : "") ?>>
                                <label class="form-check-label" for="index">Index</label>
                            </div>

                            <div class="form-check disabled">
                                <input class="form-check-input" type="radio" name="robots_index" id="noindex" value="0" required <?php echo (!$seo['robots_index'] ? "checked" : "") ?>>
                                <label class="form-check-label" for="noindex">No-Index</label>
                            </div>
                        </div>

                        <div class="form-group mb-3 ms-5">
                            <label for="robots" class="mb-2">Robots Follow</label>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="robots_follow" id="follow" value="1" required <?php echo ($seo['robots_follow'] ? "checked" : "") ?>>
                                <label class="form-check-label" for="follow">Follow</label>
                            </div>

                            <div class="form-check disabled">
                                <input class="form-check-input" type="radio" name="robots_follow" id="nofollow" value="0" required <?php echo (!$seo['robots_follow'] ? "checked" : "") ?>>
                                <label class="form-check-label" for="nofollow">No-Follow</label>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <input type="submit" name="submit" value="Ubah Data" class="btn btn-sm btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>