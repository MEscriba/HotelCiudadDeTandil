<?php

class HabModel {

    private $db;
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_hotel;charset=utf8', 'root', '');
    }
    /**
     * Devuelve la lista de habitaciones completa.
     */
    public function getAll() {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM habitaciones ORDER BY nro_habitacion ASC");
        $query->execute();

        // 3. obtengo los resultados
        $habitaciones = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $habitaciones;
    }  
    /**
     * Inserta una habitacion en la base de datos.
     */
    public function insertHab($nro_habitacion, $cant_camas, $descripcion, $ocupacion) {
        $query = $this->db->prepare("INSERT INTO habitaciones (nro_habitacion, cant_camas, descripcion, ocupada) VALUES (?, ?, ?, ?)");
        $query->execute([$nro_habitacion, $cant_camas, $descripcion, $ocupacion]);

        return $this->db->lastInsertId();
    }
}

