<?php

include "Etudiant.php";
include "Licence.php";

Etudiant::afficherNombreEtudiants();

$etudiant1 = new Etudiant("Antoinette Mentor", array(8, 12, 10, 8, 10, 12, 14, 6));

// var_dump($etudiant1);

// $etudiant1->affiche();

$etudiant2 = new Etudiant("Joseph Patron", array(2, 4, 6, 4, 2, 4, 6, 4));

// $etudiant2->affiche();

Etudiant::afficherNombreEtudiants();

// on instancie Licence

$superpromo = new Licence("2003", "Pascaline Ibarnegaray");

// var_dump($superpromo);

// echo "hr";

$superpromo->ajouterEtudiant($etudiant1);
$superpromo->ajouterEtudiant($etudiant2);

$superpromo->afficherEtudiants();

$superpromo->afficherEtudiantsRecus();

