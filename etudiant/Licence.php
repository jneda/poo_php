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
    // on contrôle que l'argument est valide avant de toucher à la liste
    if (is_a($etudiant, "Etudiant")) {
      array_push($this->listeEtudiants, $etudiant);
    }
  }

  public function afficherEtudiants() {
    echo "<hr><h2>Liste des étudiants</h2>";
    foreach ($this->listeEtudiants as $etudiant) {
      $etudiant->affiche();
    }
    echo "<hr>";
  }

  public function afficherEtudiantsRecus()
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