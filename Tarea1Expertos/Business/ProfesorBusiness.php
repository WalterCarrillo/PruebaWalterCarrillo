<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProfesorBusiness
 *
 * @author Walter93
 */
include '../Data/ProfesorData.php';

class ProfesorBusiness {
    
     /*variable para BD*/
    private $profesorData;
    
    /*constructor*/
    function ProfesorBusiness() {
        $this->profesorData = new ProfesorData();
    }//end constructor
    
    
    /*obtener todos los Profesores*/
    function getAllProfesores(){
        $this->profesorData->connect();
        /*enviar al controlador el array en formato json*/
        echo json_encode($this->profesorData->getAllProfesores());
        $this->profesorData->close();
    }
 

}//end class

/*se obtiene la acción a realizar (insert,update,select,delete)*/
$action = $_POST['action'];
$profesorBusiness = new ProfesorBusiness();
if ($action == "getAllProfesores") {
    /*se crea la instancia y se llama al método*/
    $profesorBusiness->getAllProfesores();
} 