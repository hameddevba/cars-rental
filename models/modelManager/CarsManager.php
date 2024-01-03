<?php

require "config/DBConnection.php";
// require "../Cars_model.php";

class CarsManager extends DBConnection{

   public static function create(Cars $car)
    {
        $stmt = self::getDBconnect()->prepare("INSERT INTO cars (brand, model, category, transmission, engin, couleur, annee, price,immatriculation, description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([
            $car->getBrand(),
            $car->getModele(),  // Assuming modele is the same as model
            $car->getCategory(),
            $car->getTransmission(),
            $car->getEngin(),
            $car->getCouleur(),
            $car->getAnnee(),
            $car->getPrice(),
            $car->getImmatriculation(),
            $car->getDescription()
        ]);
        return self::getDBconnect()->lastInsertId(); // Return the ID of the newly created car
    }

    public static function getAll()
    {
        $stmt = self::getDBconnect()->prepare("SELECT * FROM cars");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    
    // Read a car by ID
    public function read($id)
    {
        $stmt = $this->getDBconnect()->prepare("SELECT * FROM cars WHERE id = ?");
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        return $row;
    }


    // Update an existing car
    public function update(Cars $car)
    {
        $stmt = $this->getDBconnect()->prepare("UPDATE cars SET immatriculation = ?, brand = ?, modele = ?, annee = ?, couleur = ?, engin = ?, transmission = ?, price = ?, category = ?, description = ?, image = ? WHERE id = ?");
        $stmt->execute([
            $car->getImmatriculation(),
            $car->getBrand(),
            $car->getModele(),
            $car->getAnnee(),
            $car->getCouleur(),
            $car->getEngin(),
            $car->getTransmission(),
            $car->getPrice(),
            $car->getCategory(),
            $car->getDescription(),
         
            $car->getId()
        ]);
        return $stmt->rowCount() > 0; // Return true if update was successful
    }

    /* Delete a car */
    public function delete($id)
    {
        $stmt = $this->getDBconnect()->prepare("DELETE FROM cars WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->rowCount() > 0; // Return true if deletion was successful
    }

    public function readPaginated($pageNumber = 1, $pageSize = 10)
    {
        $offset = ($pageNumber - 1) * $pageSize;
        $stmt = $this->getDBconnect()->prepare("SELECT * FROM cars LIMIT ? OFFSET ?");
        $stmt->execute([$pageSize, $offset]);
        $rows = $stmt->fetchAll();

        // ... (create Cars objects and return them)
    }


    public function readFiltered($criteria)
    {
        $whereClause = "";
        $params = [];
        foreach ($criteria as $key => $value) {
            $whereClause .= " AND $key = ?";
            $params[] = $value;
        }

        $stmt = $this->getDBconnect()->prepare("SELECT * FROM cars WHERE 1 = 1 $whereClause");
        $stmt->execute($params);
        $rows = $stmt->fetchAll();

        // ... (create Cars objects and return them)
    }

    public function readSorted($orderBy = 'id', $orderDirection = 'ASC')
    {
        $stmt = $this->getDBconnect()->prepare("SELECT * FROM cars ORDER BY $orderBy $orderDirection");
        $stmt->execute();
        $rows = $stmt->fetchAll();

        // ... (create Cars objects and return them)
    }
}


