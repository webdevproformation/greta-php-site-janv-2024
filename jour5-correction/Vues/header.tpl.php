<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= isset($data["title"]) ? $data["title"] : '' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <header class="bg-dark">
        <nav class="container navbar navbar-expand navbar-dark" >
            <span class="navbar-brand">
                TP MVC
            </span>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="/jour5-correction/" class="nav-link <?= $nomTemplate === "home" ? 'active' : '' ?>" >Accueil</a>
                </li>
                <li class="nav-item">
                    <a href="/jour5-correction/services" class="nav-link  <?= $nomTemplate === "services" ? 'active' : '' ?>" >Service</a>
                </li>
                <li class="nav-item">
                    <a href="/jour5-correction/connexion" class="nav-link  <?= $nomTemplate === "connexion" ? 'active' : '' ?>" >Connexion</a>
                </li>
            </ul>
        </nav>
    </header>