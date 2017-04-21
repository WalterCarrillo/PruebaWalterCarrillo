<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EstudianteData
 *
 * @author Walter93
 */
include '../Domain/Estudiante.php';

class EstudianteData {

//    Variables de entorno
    private $server;
    private $user;
    private $password;
    private $db;
    private $connection;
    private $isActive;

//    Método constructor de la clase
    public function EstudianteData() {
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

    //    Método que obtiene todos los estudiantes existentes
    public function getAllEstudiantes() {

        $conn = $this->connection;
        $query = "Select * from estudiante";
        $result = mysqli_query($conn, $query);
        $array = array();
        //en cada iteracion guarde en row
        while ($row = mysqli_fetch_assoc($result)) {
            $currentEstudiante = new Estudiante($row['Id'],$row['Sexo'], $row['Recinto'], $row['Promedio'], $row['ColumnaCA'], $row['ColumnaEC'], $row['ColumnaEA']
                    , $row['ColumnaOR'], $row['EjeVerticalCA-EC'], $row['EjeHorizontalEA-OR']
                    , $row['Estilo']);
            array_push($array, $currentEstudiante);
        }
        return $array;
    }

//end getAllEstudiantes
}//end class 