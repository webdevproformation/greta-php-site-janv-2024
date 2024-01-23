<?php  

// créer deux fichiers 
// 04-lib.php
// 04-index.php 
echo __DIR__ ; 
function genererTitre( string $texte ):string{
    return "<h1>$texte</h1>";
}

function genererArticle( string $titre , string $auteur) :string{
    return "<article>
                <h2>$titre</h2>
                <p>écrit par : $auteur</p>
            </article>";
}