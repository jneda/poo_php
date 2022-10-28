<?php

include "Etudiant.php";
include "Licence.php";

// on n'a pas encore instancié d'Etudiant

Etudiant::afficherNombreEtudiants(); // affiche 0

// on crée quelques instances d'Etudiant

$etudiant1 = new Etudiant("Antoinette Mentor", array(
  8, 12, 10, 8, 10, 12, 14, 6
));

$etudiant2 = new Etudiant("Joseph Patron", array(2, 4, 6, 4, 2, 4, 6, 4));

$etudiant3 = new Etudiant("Hercule Tyran", array(11, 8, 13));

$etudiant4 = new Etudiant("Denise Professeur", array());

// on affiche à nouveau le nombre d'instances d'Etudiant

Etudiant::afficherNombreEtudiants(); // affiche 4

// on instancie un objet de classe Licence

$superpromo = new Licence("2003", "Pascaline Ibarnegaray");

// on remplit sa liste d'Etudiants

$superpromo->ajouterEtudiant($etudiant1);
$superpromo->ajouterEtudiant($etudiant2);
$superpromo->ajouterEtudiant($etudiant3);
$superpromo->ajouterEtudiant($etudiant4);

// on affiche pour tester

$superpromo->afficherEtudiants();

$superpromo->afficherEtudiantsRecus();

