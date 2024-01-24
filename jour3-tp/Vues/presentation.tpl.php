<div class="container">
    <h1><?= $data["h1"] ?></h1>
    <section class="row">
        <div class="col">
            <?php foreach($data["p"] as $key => $value) :?>
                <p><?= $value ?></p>
            <?php endforeach ?>
        </div>
        <div class="col">
            <img src="https://source.unsplash.com/random/600x100?v1" alt="" class="w-100 rounded mb-3">
            <img src="https://source.unsplash.com/random/600x100?v2" alt="" class="w-100 rounded mb-3">
            <img src="https://source.unsplash.com/random/600x100?v3" alt="" class="w-100 rounded mb-3">
            <img src="https://source.unsplash.com/random/600x100?v4" alt="" class="w-100 rounded mb-3">
        </div>
    </section>

</div>