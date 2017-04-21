<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Profesor
 *
 * @author Walter93
 */
class Profesor {
    //attributos
    public $idProfesor;
    public $edadProfesor;
    public $generoProfesor;
    public $autoevaluacionProfesor;
    public $cantidadCursoProfesor;
    public $especializacionProfesor;
    public $habilidadesProfesor;
    public $experienciaEnseñanzaProfesor;
    public $experienciaWebProfesor;
    public $claseProfesor;
    
    //constructor
    public function Profesor($idProfesor,$edadProfesor,$generoProfesor,$autoevaluacionProfesor,$cantidadCursoProfesor,
            $especializacionProfesor,$habilidadesProfesor,$experienciaEnseñanzaProfesor,$experienciaWebProfesor,$claseProfesor) {
        $this->idProfesor = $idProfesor;
        $this->edadProfesor = $edadProfesor;
        $this->generoProfesor = $generoProfesor;
        $this->autoevaluacionProfesor = $autoevaluacionProfesor;
        $this->cantidadCursoProfesor = $cantidadCursoProfesor;
        $this->especializacionProfesor = $especializacionProfesor;
        $this->habilidadesProfesor = $habilidadesProfesor;
        $this->experienciaEnseñanzaProfesor = $experienciaEnseñanzaProfesor;
        $this->experienciaWebProfesor = $experienciaWebProfesor;
        $this->claseProfesor = $claseProfesor;
    }//end constructor   
}//end class
