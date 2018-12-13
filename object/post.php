<?php


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class post {

    public $id;
    public $idUsuario;
    public $descripcion;
    public $imagen;
    public $fecha;
    public $etiqueta;
    public $vistas;

    public function __construct($id,$idUsuario,$descripcion,$imagen,$fecha,$etiqueta,$vistas) {
        
        $this->id=$id;
        $this->idUsuario=$idUsuario;
        $this->descripcion=$descripcion;
        $this->imagen=$imagen;
        $this->fecha=$fecha;
        $this->etiqueta=$etiqueta;
        $this->vistas=$vistas;
    }

}
