<?php 

// Exercice 1 : 
$jour = 0;

switch ($jour) {
    case 1:
        echo "Aujourd'hui c'est Lundi.";
        break;

    case 2:
        echo "Aujourd'hui c'est Mardi.";
        break;

    case 3:
        echo "Aujourd'hui c'est Mercredi.";
        break;

    case 4:
        echo "Aujourd'hui c'est Jeudi.";
         break;

    case 5:
        echo "Aujourd'hui c'est Vendredi.";
        break;

    case 6:
        echo "Aujourd'hui c'est Samedi.";
        break;

    case 7:
        echo "Aujourd'hui c'est Dimanche.";
        break;

    default:
        echo "Aujourd'hui c'est mort.";
        break;
}

// Exercice 2 : 

$note = 9;

switch ($note) {
    case $note>=18:
        echo "Excellent (A+)";
        break;

    case $note>=16:
        echo "Très bien (A)";
        break;

    case $note>=14:
        echo "Bien";
        break;

    case $note>=12:
        echo "Assez bien";
         break;

    case $note>=10:
        echo "Passable";
        break;

    default:
        echo "T'as raté ta vie !";
        break;
}