<?php

class ReservationManager extends DBConnection
{

    public static function create(Reservation $reservation)
    {
        $stmt = self::getDBconnect()->prepare("INSERT INTO reservation (code_reserve, etat, begin, end, date_reserve, id_customer, id_cars, id_staff) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([
            $reservation->getCodeReserve(),
            $reservation->getEtat(),
            $reservation->getBegin(),
            $reservation->getEnd(),
            $reservation->getDateReserve(),
            $reservation->getIdCustomer(),
            $reservation->getIdCars(),
            $reservation->getIdStaff()
        ]);
        return self::getDBconnect()->lastInsertId(); // Retourne l'ID de la nouvelle réservation créée
    }

    public static function getAll()
    {
        $stmt = self::getDBconnect()->prepare("SELECT * FROM reservation");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // Lire une réservation par son ID
    public function read($id)
    {
        $stmt = $this->getDBconnect()->prepare("SELECT * FROM reservation WHERE id = ?");
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        return $row;
    }

    // Ajoutez d'autres méthodes si nécessaire, comme la mise à jour, la suppression, etc.
}
