<?php

class Licence
{
  private $annee;
  private $responsable;
  private $listeEtudiants;

  public function __construct($annee, $responsable)
  {
    $this->annee = $annee;
    $this->responsable = $responsable;
    $this->listeEtudiants = array();
  }

  public function ajouterEtudiant($etudiant)
  {
    // var_dump($this->listeEtudiants);
    $this->listeEtudiants[] = $etudiant;
  }

  public function afficherEtudiants() {
    echo "<hr><h2>Liste des étudiants</h2>";
    foreach ($this->listeEtudiants as $etudiant) {
      $etudiant->affiche();
    }
    echo "<hr>";
  }

  public function afficherEtudiantsReçus()
  {
    echo "<hr><h2>Liste des étudiants reçus</h2>";
    foreach ($this->listeEtudiants as $etudiant) {
      if ($etudiant->recu()) {
        $etudiant->affiche();
      }
    }
    echo "<hr>";
  }
}

?>