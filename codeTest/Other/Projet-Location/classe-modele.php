<?php

class ModèleDeVoiture
{
    private $id;
    private $marque;
    private $modele;
    private $description;
    private $photo;

    public function __construct(int $id, string $marque, string $modele, string $description, string $photo)
    {
        $this->id = $id;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->description = $description;
        $this->photo = $photo;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getMarque(): string
    {
        return $this->marque;
    }

    public function getModele(): string
    {
        return $this->modele;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPhoto(): string
    {
        return $this->photo;
    }
}