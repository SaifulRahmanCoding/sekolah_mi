<div id="carouselMI" class="carousel slide" data-bs-ride="carousel">
    <?php
    $s_carousel = mysqli_query($db, "SELECT * FROM carousel");
    $i = 1;
    $j = 0;
    $k = 1;
    ?>
    <div class="carousel-indicators">
        <?php
        foreach ($s_carousel as $btn_carousel) {
            $btn_active = ($j == 0) ? "active" : " ";
            ?>
            <button type="button" data-bs-target="#carouselMI" data-bs-slide-to="<?php echo $j?>" class="<?php echo $btn_active ?>" aria-current="true" aria-label="Slide <?php echo $k ?>"></button>
        <?php $j++; $k++; } ?> 
    </div>
    <div class="carousel-inner">
        <?php
        foreach ($s_carousel as $carousel) {
            $carousel_active = ($i == 1) ? "active" : " ";
            $pecah_path = explode('../../', $carousel['foto']); ?>
            <div class="carousel-item <?php echo $carousel_active ?>" data-bs-interval="10000">
                <div class="overlay-carousel"></div>
                <img src="<?php echo $pecah_path[1] ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2><?php echo $carousel['judul'] ?></h2>
                    <p><?php echo $carousel['sub_judul'] ?></p>
                </div>
            </div>
        <?php $i++;
        } ?>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselMI" data-bs-slide="prev">
        <span class="icon-arrow-left fa-slider p-2" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselMI" data-bs-slide="next">
        <span class="icon-arrow-right fa-slider p-2" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>