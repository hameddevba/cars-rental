<?php
class MarqueDeVoiture
{
    private $id;
    private $nom;
    private $pays;

    public function __construct(int $id, string $nom, string $pays)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->pays = $pays;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPays(): string
    {
        return $this->pays;
    }
}
