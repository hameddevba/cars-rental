<?php

class Voiture
{
    private $id;
    private $immatriculation;
    private $marque;
    private $modele;
    private $annee;
    private $couleur;
    private $carburant;
    private $puissance;

    public function __construct(int $id, string $immatriculation, string $marque, string $modele, int $annee, string $couleur, string $carburant, int $puissance)
    {
        $this->id = $id;
        $this->immatriculation = $immatriculation;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->couleur = $couleur;
        $this->carburant = $carburant;
        $this->puissance = $puissance;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getImmatriculation(): string
    {
        return $this->immatriculation;
    }

    public function getMarque(): string
    {
        return $this->marque;
    }

    public function getModele(): string
    {
        return $this->modele;
    }

    public function getAnnee(): int
    {
        return $this->annee;
    }

    public function getCouleur(): string
    {
        return $this->couleur;
    }

    public function getCarburant(): string
    {
        return $this->carburant;
    }

    public function getPuissance(): int
    {
        return $this->puissance;
    }
}