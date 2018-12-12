<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuario
 *
 * @author javiershaka
 */
class usuario {
    //put your code here
    public $id;
    public $nombre;
    public $edad;
    public $sexo;
    public $correo;
    public $contrasena;
    
    public function __construct($id,$nombre,$edad,$sexo,$correo,$conrasena) {
        $this->id=$id;
        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->sexo=$sexo;
        $this->correo=$correo;
        $this->contrasena=$conrasena;
        
    }
    
}
