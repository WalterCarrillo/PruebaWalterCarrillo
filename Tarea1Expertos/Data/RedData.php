<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RedData
 *
 * @author Walter93
 */
include '../Domain/Red.php';
include '../Domain/Profesor.php';

class RedData {

    //    Variables de entorno
    private $server;
    private $user;
    private $password;
    private $db;
    private $connection;
    private $isActive;

//    Método constructor de la clase
    public function RedData() {
        $this->isActive = false;
        $this->server = "163.178.107.130";
        $this->user = "adm";
        $this->password = "saucr.092";
        $this->db = "exptarea1";
    }

//    Método que realiza la conexión con la BD
    public function connect() {
        $this->connection = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        return $this->connection;
    }

//    Método que cierra la conexión con la BD  
    public function close() {
        mysqli_close($this->connection);
    }

    /*     * ********************************************************** */

    //    Método que obtiene todas las redes existentes
    public function getAllRedes() {
        $conn = $this->connection;
        $query = "Select * from red";
        $result = mysqli_query($conn, $query);
        $array = array();
        //en cada iteracion guarde en row
        while ($row = mysqli_fetch_assoc($result)) {
            $currentRed= new Red($row['Id'], $row['Confiabilidad'], $row['NumeroDeLinks'], $row['Capacidad'], $row['Costo'], $row['Clase']);
            array_push($array, $currentRed); 
        }
        return $array;
    }

//end getAllRedes
}

//end class 
