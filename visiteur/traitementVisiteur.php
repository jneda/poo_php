<?php

include "Visiteur.php";

// programme principal

echo '
<style>
  body {
    color: linen;
    background: #1B1212;
    font-family: sans-serif;
    font-size: 150%;
    line-height: 1.5;
  }

  code {
    border: 1px solid linen;
    padding: 0.2rem;
  }

  .derniere-visite {
    font-size: 80%;
    color: grey;
  }
</style>
';

// on instancie et on utilise les méthodes

echo "<p>Instances de Visiteur existantes : " . Visiteur::getCompteur() . ".</p>";

$visiteur = new Visiteur("Régis Expert", "yololo");

echo '<pre><code>$visiteur = new Visiteur("Régis Expert", "yololo");</code></pre>';

echo "<p>Instances de Visiteur existantes : " . Visiteur::getCompteur() . ".</p>";

echo '<p>Bienvenue ' . $visiteur->getNom() . ' !</p>';

echo '<p class="derniere-visite">(Dernière visite le '
  . $visiteur->getDerniereVisite() . ')<p>';
