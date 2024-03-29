<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= isset($data["title"]) ? $data["title"] : "" ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <header class="bg-primary">
        <nav class="container navbar navbar-expand navbar-dark">
            <span class="navbar-brand">
                Mon premier MVC
            </span>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/jour3-tp/" class="nav-link active">Accueil</a>
                </li>
                <li class="nav-item ">
                    <a href="/jour3-tp/presentation" class="nav-link  " >Qui sommes nous ?</a>
                </li>
                <li class="nav-item">
                    <a href="/jour3-tp/contact" class="nav-link">Nous contacter</a>
                </li>
            </ul>
        </nav>
    </header>  
    