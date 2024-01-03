<?php

abstract class DBConnection
{
    private static $pdo;  // Change to static for singleton connection

    private static function setBdd()
    {
        self::$pdo = new PDO("mysql:host=localhost;dbname=appmanager;charset=utf8", "itkann", "itkann");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Use exceptions for better error handling
    }

    protected static function getDBconnect()
    {
        if (self::$pdo === null) {
            self::setBdd();
        }
        return self::$pdo;
    }
}