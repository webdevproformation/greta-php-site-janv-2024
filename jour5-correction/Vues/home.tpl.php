<div class="container">
    <section>
        <div id="diapo" class="carousel slide mt-3"  data-bs-ride="carousel">
            <div class="carousel-indicators">
            <?php foreach($data["diapositive"] as $key => $value) : ?>
                <button type="button" data-bs-target="#diapo" data-bs-slide-to="<?= $key ?>" class="active" aria-current="true" aria-label="Slide <?= $key + 1 ?>"></button>
                <?php endforeach ?>
            </div>
            <div class="carousel-inner">
                <?php foreach($data["diapositive"] as $key => $value) : ?>
                <div class="carousel-item <?= $key === 0 ? "active" : ""  ?>">
                <img src="<?= $value ?>" class="d-block w-100 rounded" alt="...">
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

        </div>
    </section>
    <section>
        <h1 class="display-3 my-3">Nos Derniers articles</h1>
        
        <!-- Emmet -->
        <!-- div.row>div.col-3*8>article.card.mb-3>img[src="https://source.unsplash.com/random/400x200/?v$"].card-img-top+.card-body>(h3.card-title>lorem2)+p.card-text>lorem15 -->

        <div class="row">
            <?php foreach($data["articles"] as $key => $value) : ?>
            <div class="col-3">
                <article class="card mb-3">
                    <img src="<?=  $value["img"] ?>" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title"><?= $value["title"] ?></h3>
                        <p class="card-text"><?= $value["contenu"] ?></p>
                    </div>
                </article>
            </div>
           <?php endforeach ?>
        </div>

    </section>
</div>