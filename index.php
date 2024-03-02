<h1>POO Entreprise</h1>

<?php

//require "Entreprise.php";
//require "Employe.php;

spl_autoload_register(function ($class_name){
    require 'classes/'. $class_name . '.php';
});

$elanFormation = new Entreprise("ELAN FORMATION", "1993-01-01", "14 rue du Rhône",
 "67100", "STRASBOURG");
 $stephane = new Employe("SMAIL", "Stéphane", "stephane@elan-formation.fr", $elanformation);
 $mickael = new Employe("MURMANN", "Mickael", "mickael@elan-formation.fr", $elanFormation);

 // echo $elanFormation;
 //echo $elanFormation->getInfos();
 //echo $stephane->setEntreprise($tf1);
 //echo $stephane->getInfos();

 echo $elanFormation->afficherEmployes();
 