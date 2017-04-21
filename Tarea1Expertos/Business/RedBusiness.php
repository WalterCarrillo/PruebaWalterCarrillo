<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RedBusiness
 *
 * @author Walter93
 */
  
include '../Data/RedData.php';

class RedBusiness {
    
     /*variable para BD*/
    private $redData;
    
    /*constructor*/
    function RedBusiness() {
        $this->redData = new RedData();
    }//end constructor
    
    
    /*obtener todos las Redes*/
    function getAllRedes(){
        $this->redData->connect();
        /*enviar al controlador el array en formato json*/
        echo json_encode($this->redData->getAllRedes());
        $this->redData->close();
    }
 

}//end class

/*se obtiene la acción a realizar (insert,update,select,delete)*/
$action = $_POST['action'];
$redBusiness = new RedBusiness();
if ($action == "getAllRedes") {
    /*se crea la instancia y se llama al método*/
    $redBusiness->getAllRedes();
} 

