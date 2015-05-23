<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Campus extends CI_Model {

    private $id;
    private $nome;
    private $ativo;

   
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getAtivo() {
        return $this->ativo;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setAtivo($ativo) {
        $this->ativo = $ativo;
    }

        public function listarCampus() {
        $this->db->order_by('nome', 'ASC');
            return $this->db->get('campus');
    }

}