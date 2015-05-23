<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Cursos extends CI_Model{
    
    private $idCurso;
    Private $nome;
    
    public function getIdCurso() {
        return $this->idCurso;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setIdCurso($idCurso) {
        $this->idCurso = $idCurso;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

public function listarCursos(){
    
    //$this->db->select('SELECT * FROM curso ORDER BY NOME');
    
    $this->db->order_by('nome', 'ASC');//detalhes da query
    
    return $this->db->get('curso');//tabela em que vai ser buscado
    
}
    
}