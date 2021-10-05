<?php

namespace services;

use \PDO;

class ConexionDB
{
    private const DNS_DB ="mysql:host=127.0.0.1;port=3306;dbname=mineria";
    private const USER ="root";
    private const PASS ="";
    private static $conn;

    private function __construct()
    {
    }

    public static function getConn() : PDO{
        if(self::$conn == null){
            self::$conn = new PDO(self::DNS_DB, self::USER, self::PASS);
        }
        return self::$conn;
    }

    public static function close(){
        self::$conn = null;
    }

}