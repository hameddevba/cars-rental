<?php

class Manager
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function query(string $sql, array $params = [])
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }

    public function insert(string $table, array $data)
    {
        $sql = 'INSERT INTO `' . $table . '` (`' . implode('`, `', array_keys($data)) . '`) VALUES (' . implode(', ', array_fill(0, count($data), '?')) . ')';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);
        return $this->pdo->lastInsertId();
    }

    public function update(string $table, array $data, array $where)
    {
        $sql = 'UPDATE `' . $table . '` SET ';
        $params = [];
        foreach ($data as $key => $value) {
            $sql .= '`' . $key . '` = ?, ';
            $params[] = $value;
        }
        $sql = substr($sql, 0, -2);
        $sql .= ' WHERE ';
        $where_clauses = [];
        foreach ($where as $key => $value) {
            $where_clauses[] = '`' . $key . '` = ?';
            $params[] = $value;
        }
        $sql .= implode(' AND ', $where_clauses);
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($params);
    }

    public function delete(string $table, array $where)
    {
        $sql = 'DELETE FROM `' . $table . '` WHERE ';
        $where_clauses = [];
        foreach ($where as $key => $value) {
            $where_clauses[] = '`' . $key . '` = ?';
            $params[] = $value;
        }
        $sql .= implode(' AND ', $where_clauses);
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($params);
    }

    public function getVoituresParMarque(string $marque): array
    {
        $sql = 'SELECT * FROM voiture WHERE marque = :marque';
        $params = ['marque' => $marque];
        $voitures = $this->query($sql, $params);

        return $voitures;
    }


    public function getVoituresParModele(string $modele): array
    {
        $sql = 'SELECT * FROM voiture WHERE modele = :modele';
        $params = ['modele' => $modele];
        $voitures = $this->query($sql, $params);

        return $voitures;
    }

    public function getVoituresParAnnee(int $annee): array
    {
         $sql = "SELECT * FROM voiture WHERE annee = :annee";
         $params = ["annee" => $annee];
         $voitures = $this->query($sql, $params);
         return $voitures;
    }

}




// Cette classe permet de gérer les requêtes SQL CRUD. Elle prend en charge les bases de données MySQL.

// Méthodes

// query() : exécute une requête SQL SELECT et renvoie un tableau de résultats.
// insert() : insère une nouvelle ligne dans une table.
// update() : met à jour une ligne dans une table.
// delete() : supprime une ligne dans une table.



// Exemple d'utilisation 


// Récupère toutes les voitures
$manager = new Manager($pdo);
$voitures = $manager->query('SELECT * FROM voiture');

// Insère une nouvelle voiture
$data = [
    'immatriculation' => 'AB-123-CD',
    'marque' => 'Renault',
    'modele' => 'Clio',
    'annee' => 2023,
    'couleur' => 'Bleu',
    'carburant' => 'Diesel',
    'puissance' => 100,
];
$id = $manager->insert('voiture', $data);

// Met à jour une voiture
$data = [
    'couleur' => 'Rouge',
];
$where = [
    'id' => $id,
];
$manager->update('voiture', $data, $where);

// Supprime une voiture
$where = [
    'id' => $id,
];
$manager->delete('voiture', $where);


// lien source -> https://github.com/pstryk82/wpforms-lite-to-db