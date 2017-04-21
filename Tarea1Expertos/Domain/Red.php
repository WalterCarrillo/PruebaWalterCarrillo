<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Red
 *
 * @author Walter93
 */
class Red {
    //attributos
    public $idRed;
    public $confiabilidadRed;
    public $numeroLinksRed;
    public $capacidadRed;
    public $costoRed;
    public $claseRed;
    
    //constructor
    public function Red($idRed,$confiabilidadRed,$numeroLinksRed,$capacidadRed,$costoRed,$claseRed) {
        $this->idRed = $idRed;
        $this->confiabilidadRed = $confiabilidadRed;
        $this->numeroLinksRed = $numeroLinksRed;
        $this->capacidadRed = $capacidadRed;
        $this->costoRed = $costoRed;
        $this->claseRed = $claseRed;
    }//end constructor   
}//end class
