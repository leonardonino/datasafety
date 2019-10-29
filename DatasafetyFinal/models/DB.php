<?php

class DB
{
    public static function conexion()
    {
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=cualquiera;charset=utf8;', 'root', '');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
