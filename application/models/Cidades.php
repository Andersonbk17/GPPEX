<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Cidades extends CI_Model{

    private $idCidade;
    private $nome;
    private $idEstado;
    
    public function getIdCidade() {
        return $this->idCidade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdEstado() {
        return $this->idEstado;
    }

    public function setIdCidade($idCidade) {
        $this->idCidade = $idCidade;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setIdEstado($idEstado) {
        $this->idEstado = $idEstado;
    }


    public function listarCidades(){
       return $this->db->get('cidade');
        
    }
    
    public function listarCidadesPorEstado($idEstado = NULL){
        $this->db->select('*');
        $this->db->where('idEstado',$idEstado);
             
        return $this->db->get('cidade');
        
    }
    
    
}


