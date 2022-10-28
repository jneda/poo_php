<?php

include "Valeur.php";

class Emprunt extends Valeur
{
  private $taux;
  private $terme;

  public function __construct($nom, $prix, $taux, $terme)
  {
    parent::__construct($nom, $prix);
    $this->taux = $taux;
    $this->terme = mktime(24, 0, 0, 12, 31, $terme);
  }

  public function getInfo()
  {
    $reste = round(($this->terme - time()) / 86400); // 86400 ? 24 * 60 * 60 s = 1 jour
    $info = "<h3>Emprunt $this->nom au taux de $this->taux %</h3>";
    $info .= parent::getInfo();
    $info .= "<h4>Échéance : dans $reste jours</h4>";
    return $info;
  } 
}