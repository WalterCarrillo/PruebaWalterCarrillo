<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EstudianteBusiness
 *
 * @author Walter93
 */
include '../Data/EstudianteData.php';

class EstudianteBusiness {
    
     /*variable para BD*/
    private $estudianteData;
    
    /*constructor*/
    function EstudianteBusiness() {
        $this->estudianteData = new EstudianteData();
    }//end constructor
    
    
    /*obtener todos los Estudiantes*/
    function getAllEstudiantes(){
        $this->estudianteData->connect();
        /*enviar al controlador el array en formato json*/
        echo json_encode($this->estudianteData->getAllEstudiantes());
        $this->estudianteData->close();
    }
 

}//end class

/*se obtiene la acción a realizar (insert,update,select,delete)*/
$action = $_POST['action'];
$redBusiness = new EstudianteBusiness();
if ($action == "getAllEstudiantes") {
    /*se crea la instancia y se llama al método*/
    $redBusiness->getAllEstudiantes();
} 