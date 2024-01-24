<div class="container">
    <h1><?= $data["h1"] ?></h1>

    <section class="carousel slide" id="diapo" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php foreach($data["diapositives"] as $key => $value) : ?>
            <div class="carousel-item <?= $key === 0 ? "active" : "" ?>">
                <img src="<?= $value ?>" alt="" class="d-block w-100">
            </div>
           <?php endforeach ?>
        </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#diapo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#diapo" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
    </section>
</div>
