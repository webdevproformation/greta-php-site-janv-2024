<div class="container">
    <h1><?= $data["h1"] ?></h1>
    <form method="post">
        <div class="mb-3">
            <label for="titre">titre</label>
            <input type="text" name="titre" class="form-control" id="titre">
        </div>
        <div class="mb-3">
            <label for="contenu">contenu</label>
            <textarea name="contenu" id="contenu" cols="30" rows="10" class="form-control"></textarea>
        </div><!-- http://192.168.15.22/jour7-tp/admin/article/new -->
        <div class="mb-3">
            <label for="img">url image</label>
            <input type="text" name="img" class="form-control" id="img">
        </div>
        <div class="text-end">
            <input type="submit" class="btn btn-primary" value="créer nouvel article">
        </div>
    </form>
</div>