<?php

class Etudiant
{
  private $nom;
  private $notes;

  private $numero;

  private static $nbEtudiants = 0;

  function __construct($nom, $notes)
  {
    $this->nom = $nom;
    $this->notes = $notes;

    $this->numero = ++self::$nbEtudiants;
  }

  static function afficherNombreEtudiants() {
    echo "<hr><p>" . self::$nbEtudiants . " étudiants ont été créés.</p><hr>";
  }

  private function moyenne()
  { 
    if (count($this->notes) === 0) {
      return 0;
    }

    $somme = 0;
    for ($i = 0; $i < count($this->notes); $i++) {
      $somme += $this->notes[$i];
    }

    return $somme / count($this->notes);
  }

  public function recu()
  {
    return $this->moyenne() >= 10;
  }

  public function affiche()
  {
    echo "<p>Étudiant n° " . $this->numero . "</p>";
    echo "<p>Nom de l'étudiant : " . $this->nom . "<p>";
    echo "<p>Notes obtenues :</p>";
    echo "<ul>";

    foreach ($this->notes as $note) {
      echo "<li>" . $note . "</li>";
    }
    echo "</ul>";

    if ($this->recu()) {
      echo "<p>L'étudiant est reçu avec une moyenne de : "
        . $this->moyenne() . ".</p>";
    } else {
      echo "<p>L'étudiant n'est pas reçu.</p>";
    }
  }
}
