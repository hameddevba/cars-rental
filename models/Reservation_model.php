<?php

class Reservation
{
    private $id;
    private $code_reserve;
    private $etat;
    private $begin;
    private $end;
    private $date_reserve;
    private $id_customer;
    private $id_cars;
    private $id_staff;

    public function __construct($code_reserve, $etat, $begin, $end, $date_reserve, $id_customer, $id_cars, $id_staff, $id = null)
    {
        $this->id = $id;
        $this->code_reserve = $code_reserve;
        $this->etat = $etat;
        $this->begin = $begin;
        $this->end = $end;
        $this->date_reserve = $date_reserve;
        $this->id_customer = $id_customer;
        $this->id_cars = $id_cars;
        $this->id_staff = $id_staff;
    }

    // Getters and setters for private properties

    public function getId()
    {
        return $this->id;
    }

    public function getCodeReserve()
    {
        return $this->code_reserve;
    }

    public function getEtat()
    {
        return $this->etat;
    }

    public function getBegin()
    {
        return $this->begin;
    }

    public function getEnd()
    {
        return $this->end;
    }

    public function getDateReserve()
    {
        return $this->date_reserve;
    }

    public function getIdCustomer()
    {
        return $this->id_customer;
    }

    public function getIdCars()
    {
        return $this->id_cars;
    }

    public function getIdStaff()
    {
        return $this->id_staff;
    }

    // Other methods as needed (e.g., save to database, update, delete, etc.)
}
