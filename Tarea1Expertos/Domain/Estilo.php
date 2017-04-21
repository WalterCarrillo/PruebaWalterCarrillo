<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Estilo
 *
 * @author Walter93
 */
class Estilo {
        //attributos
    public $idEstilo;
    public $recintoEstilo;
    public $columnaCAEstilo;
    public $columnaECEstilo;
    public $columnaEAEstilo;
    public $columnaOREstilo;
    public $ejeVerticalCA_ECEstilo;
    public $ejeHorizontalEA_OREstilo;
    public $Estilo;

    
    //constructor
    public function Estilo($idEstilo,$recintoEstilo,$columnaCAEstilo,$columnaECEstilo,$columnaEAEstilo,
            $columnaOREstilo,$ejeVerticalCA_ECEstilo,$ejeHorizontalEA_OREstilo,$Estilo) {
        $this->idEstilo = $idEstilo;
        $this->recintoEstilo = $recintoEstilo;
        $this->columnaCAEstilo = $columnaCAEstilo;
        $this->columnaECEstilo = $columnaECEstilo;
        $this->columnaEAEstilo = $columnaEAEstilo;
        $this->columnaOREstilo = $columnaOREstilo;
        $this->ejeVerticalCA_ECEstilo = $ejeVerticalCA_ECEstilo;
        $this->ejeHorizontalEA_OREstilo = $ejeHorizontalEA_OREstilo;
        $this->Estilo = $Estilo;

    }//end constructor   
}//end class