<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Usuario extends CI_Model {

    private $idUsuaro;
    private $usuario;
    private $senha;
    private $ativo;

    public function getIdUsuaro() {
        return $this->idUsuaro;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getAtivo() {
        return $this->ativo;
    }

    public function setIdUsuaro($idUsuaro) {
        $this->idUsuaro = $idUsuaro;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setAtivo($ativo) {
        $this->ativo = $ativo;
    }

    public function listarUsuarios() {
        return $this->db->get('usuarios'); //retorna os usuarios cadastrados
    }

    public function salvar($dados = NULL) {

        if ($dados != NULL){

            $this->db->insert('usuarios', $dados);
            //$this->session->set_flashdata('cadastrook', 'Cadastro efetuado com sucesso');
            //redirect('crud/create');
        }
       
    }

}
