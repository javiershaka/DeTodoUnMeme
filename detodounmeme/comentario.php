<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class comentario {
    public $id;
    public $usuario;
    public $post;
    public $comentario;
    public $fecha;

    public function __construct($id,$usuario,$post,$comentario,$fecha) {
        $this->id=$id;
        $this->usuario=$usuario;
        $this->post=$post;
        $this->comentario=$comentario;
        $this->fecha=$fecha;
    }

}

