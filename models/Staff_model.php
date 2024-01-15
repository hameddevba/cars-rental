<?php

class Staff
{
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $tel;
    private $profile;

    public function __construct($nom, $prenom, $email, $tel, $profile)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->tel = $tel;
        $this->profile = $profile;
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getTel()
    {
        return $this->tel;
    }

    public function getProfile()
    {
        return $this->profile;
    }

    // Setters (optionnels)
    public function setId($id)
    {
        $this->id = $id;
    }

    // ... autres setters pour les autres propriétés
}
