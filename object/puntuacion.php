<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class puntuacion {
    public $id;
    public $usuario;
    public $post;
    public $puntaje;

    function __construct($id,$usuario,$post,$puntaje) {
        $this->id=$id;
        $this->usuario=$usuario;
        $this->post=$post;
        $this->puntaje=$puntaje;
    }

}

