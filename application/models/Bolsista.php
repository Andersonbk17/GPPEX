<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Bolsista extends CI_Model{
    
    private $id;
    
    
    
    public function listarBolsistas() {
        return $this->db->get('bosistas'); //retorna os usuarios cadastrados
    }
}