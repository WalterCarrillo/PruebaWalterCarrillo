<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EstiloBusiness
 *
 * @author Walter93
 */
include '../Data/EstiloData.php';

class EstiloBusiness {
    
     /*variable para BD*/
    private $estiloData;
    
    /*constructor*/
    function EstiloBusiness() {
        $this->estiloData = new EstiloData();
    }//end constructor
    
    
    /*obtener todos los Estilos*/
    function getAllEstilos(){
        $this->estiloData->connect();
        /*enviar al controlador el array en formato json*/
        echo json_encode($this->estiloData->getAllEstilos());
        $this->estiloData->close();
    }
 

}//end class

/*se obtiene la acción a realizar (insert,update,select,delete)*/
$action = $_POST['action'];
$redBusiness = new EstiloBusiness();
if ($action == "getAllEstilos") {
    /*se crea la instancia y se llama al método*/
    $redBusiness->getAllEstilos();
} 