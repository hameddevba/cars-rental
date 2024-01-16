<?php

class Cars
{
    private $id;
    private $immatriculation;
    private $brand;
    private $modele;
    private $annee;
    private $couleur;
    private $engin;//exemple diesel essence hybride
    private $transmission;
    private $price;
    private $category;
    private $description;
    // private $image;

    public function __construct($brand, $modele, $an, $immatri, $couleur, $transmission, $category, $engin, $price, $description)
    {
        $this->brand = $brand;
        $this->modele = $modele;
        $this->annee = $an;
        $this->immatriculation = $immatri;
        $this->couleur = $couleur;
        $this->transmission = $transmission;
        $this->category = $category;
        $this->engin = $engin;
        $this->price = $price;
        $this->description = $description;
    }


    //
    // public function __construct($arr)
    // {
    //     $this->brand = trim($arr["brand"]);
    //     $this->immatriculation = trim($arr['immatri'])
    // }

  


    public function getId(): int
    {
        return $this->id;
    }

    public function getImmatriculation(): string
    {
        return $this->immatriculation;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getModele(): string
    {
        return $this->modele;
    }

    public function getAnnee(): string
    {
        return $this->annee;
    }

    public function getCouleur(): string
    {
        return $this->couleur;
    }

    public function getEngin(): string
    {
        return $this->engin;
    }

    public function getTransmission(): string
    {
        return $this->transmission;
    }

    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    public function setEngin(string $engin): void
    {
        $this->engin = $engin;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

//     public function getImage(): array
//     {
//         return $this->image;
//     }

//     public function setImage(array $image): void
//     {
//         $this->image = $image;
//     }

}
