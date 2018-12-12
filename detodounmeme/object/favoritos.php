<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class favoritos {

    public $id;
    public $usuario;
    public $post;
    
    public function __construct($id,$usuario,$post) {
        $this->id=$id;
        $this->usuario=$usuario;
        $this->post=$post;
    }

}