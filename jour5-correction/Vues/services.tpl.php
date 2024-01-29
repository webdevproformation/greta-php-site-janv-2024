<div class="container">
    <h1 class="text-center my-3"> <?= $data["h1"]  ?></h1>
    <div class="row">
        <!-- .col-4*3>article.card.text-center>(h2>lorem1)+(h3>lorem1)+(ul.list-unstyled>li*4>lorem2)+button>lorem1 -->
        <?php foreach($data["produits"] as $key => $value) : ?>
        <div class="col-4">
            <article class="card text-center">
                <h2 class="card-header h4 <?= $value["title"]["style"] ?>">
                    <?= $value["title"]["label"] ?>
                </h2>
                <div class="card-body">
                    <h3><?= $value["sous-titre"] ?></h3>
                    <ul class="list-unstyled">
                        <?php foreach($value["elements"] as $key2 => $value2 ) : ?>
                                <li><?= $value2 ?></li>
                        <?php endforeach ?>
                    </ul>
                    <button class="w-100 btn <?= $value["btn"]["style"] ?>"><?= $value["btn"]["label"] ?></button>
                </div>
            </article>
        </div>
        <?php endforeach ?>
    </div>
</div>