<?php

class Valeur
{
  // attributs

  protected $nom;
  protected $prix;

  // constructeur

  public function __construct($nom, $prix)
  {
    $this->nom = $nom;
    $this->prix = $prix;
  }

  // méthodes

  protected function getInfo()
  {
    $info = "<h4>Le prix de $this->nom est de $this->prix brouzoufs.</h4>";
    return $info;
  }
}