<div class="container">
    <h1><?= $data["h1"] ?></h1>
    <section class="row">
        <div class="col">
            <?php foreach($data["p"] as $key => $value) :?>
                <p><?= $value ?></p>
            <?php endforeach ?>
        </div>
        <div class="col">
            <?php foreach($data["images"] as $key => $value) : ?>
            <img src="<?= $value ?>" alt="" class="w-100 rounded mb-3">
            <?php endforeach ?>
        </div>
    </section>
</div>