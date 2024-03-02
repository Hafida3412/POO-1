<?php

class Employe {
    private string $nom;
    private string $prenom;
    private string $email;

    public function __construct(string $nom, string $prenom, string $email){
        $this->nom =$nom;
        $this->prenom = $prenom;
        $this->email = $email;
    }
    
    }