<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Estudiante
 *
 * @author Walter93
 */
class Estudiante {
    //attributos
    public $idEstudiante;
    public $sexoEstudiante;
    public $recintoEstudiante;
    public $promedioEstudiante;
    public $columnaCAEstudiante;
    public $columnaECEstudiante;
    public $columnaEAEstudiante;
    public $columnaOREstudiante;
    public $ejeVerticalCA_ECEstudiante;
    public $ejeHorizontalEA_OREstudiante;
    public $estiloEstudiante;

    
    //constructor
    public function Estudiante($idEstudiante,$sexoEstudiante,$recintoEstudiante,$promedioEstudiante,$columnaCAEstudiante,$columnaECEstudiante,
            $columnaEAEstudiante,$columnaOREstudiante,$ejeVerticalCA_ECEstudiante,$ejeHorizontalEA_OREstudiante,$estiloEstudiante) {
        
        $this->idEstudiante = $idEstudiante;
        $this->sexoEstudiante = $sexoEstudiante;
        $this->recintoEstudiante = $recintoEstudiante;
        $this->promedioEstudiante = $promedioEstudiante;
        $this->columnaCAEstudiante = $columnaCAEstudiante;
        $this->columnaECEstudiante = $columnaECEstudiante;
        $this->columnaEAEstudiante = $columnaEAEstudiante;
        $this->columnaOREstudiante = $columnaOREstudiante;
        $this->ejeVerticalCA_ECEstudiante = $ejeVerticalCA_ECEstudiante;
        $this->ejeHorizontalEA_OREstudiante = $ejeHorizontalEA_OREstudiante;
        $this->estiloEstudiante = $estiloEstudiante;

    }//end constructor   
}//end class