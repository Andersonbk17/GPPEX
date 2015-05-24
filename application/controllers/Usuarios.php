<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function index() {
        //$this->db->select('*');
        //$this->db->where('ativo',1);
        //$dados['bolsistas'] = $this->db->get('bolsistas')->result();

        $this->load->model('Usuario');
        
        $dados['usuarios'] = $this->Usuario->listarUsuarios()->result();
        
        
        
        $opcaoLateral ['opcaoLateral'] = "usuarios";
        $this->load->view('includes/html_header');
        //$this->load->view('listar_bolsistas',$dados);
        $this->load->view('listar_usuarios',$dados);
        $this->load->view('includes/menu', $opcaoLateral);
        $this->load->view('includes/html_footer');
    }
    
    public function alterar(){}
    public function excluir(){}
    

}
