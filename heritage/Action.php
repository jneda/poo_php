<?php

include "Valeur.php";

class Action extends Valeur
{
  // protected $nom; // <- attributs hérités de Valeur
  // protected $prix;

  private $bourse;

  public function __construct($nom, $prix, $bourse="Tombouctou")
  {
    parent::__construct($nom, $prix);
    $this->bourse = $bourse;
  }

  // méthodes héritées de la classe mère

  // méthodes propres à cette classe-ci

  public function getInfo() {
    $message = "<h4>Action $this->nom cotée à la bourse de $this->bourse :</h4>"
      . parent::getInfo();
    return $message;
  }
}