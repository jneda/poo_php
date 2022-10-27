<?php

class Visiteur // déclaration de la classe
{
  // déclaration des attributs
  private $nom;
  private $motDePasse;
  public $derniereVisite;

  // attribut statique
  private static $compteur = 0;

  // constructeur
  function __construct($nom, $motDePasse)
  {
    $this->nom = $nom;
    $this->motDePasse = $motDePasse;
    $this->derniereVisite = time();

    self::$compteur++;
  }

  //méthodes

  // obtenir la valeur du compteur d'instances
  static function getCompteur()
  {
    return self::$compteur;
  }

  // obtenir la date de la dernière visite
  function getDerniereVisite()
  {
    return(date("M d Y", $this->derniereVisite));
  }

  // obtenir le nom du visiteur
  function getNom()
  {
    return $this->nom;
  }

  // modifier le nom du visiteur
  function setNom($nom)
  {
    $this->nom = $nom;
  }
}
