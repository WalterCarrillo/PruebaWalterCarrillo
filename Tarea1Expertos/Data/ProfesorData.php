<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProfesorData
 *
 * @author Walter93
 */
include '../Domain/Profesor.php';

class ProfesorData {

//    Variables de entorno
    private $server;
    private $user;
    private $password;
    private $db;
    private $connection;
    private $isActive;

//    Método constructor de la clase
    public function ProfesorData() {
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

    //    Método que obtiene todas los profesores existentes
    public function getAllProfesores() {
        $conn = $this->connection;
        $query = "Select * from profesor";
        $result = mysqli_query($conn, $query);
        $array = array();
        //en cada iteracion guarde en row
        while ($row = mysqli_fetch_assoc($result)) {
            $currentProfesor = new Profesor($row['Id'],$row['Edad'], $row['Genero'], $row['Autoevaluacion'], $row['CantidadCurso'], $row['Especializacion'], $row['Habilidades']
                    , $row['Experiencia'], $row['ExperienciaWeb'], $row['Clase']);
            array_push($array, $currentProfesor);
        }
        return $array;
        
        
    }//end getAllProfesores
}//end class 
  
