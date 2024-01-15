<?php

class Customer
{
    private $id;
    private $nni;
    private $nom;
    private $prenom;
    private $email;
    private $tel;
    private $date_nai;
    private $permi;
    private $photo_id;

    public function __construct($nni, $nom, $prenom, $email, $tel, $date_nai, $permi, $photo_id, $id = null)
    {
        $this->id = $id;
        $this->nni = $nni;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->tel = $tel;
        $this->date_nai = $date_nai;
        $this->permi = $permi;
        $this->photo_id = $photo_id;
    }

    // Getters and setters for private properties

    public function getId()
    {
        return $this->id;
    }

    public function getNni()
    {
        return $this->nni;
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

    public function getDateNai()
    {
        return $this->date_nai;
    }

    public function getPermi()
    {
        return $this->permi;
    }

    public function getPhotoId()
    {
        return $this->photo_id;
    }


}
