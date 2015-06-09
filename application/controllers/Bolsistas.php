<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bolsistas extends CI_Controller {

    public function index() {
        //$this->db->select('*');
        //$this->db->where('ativo',1);
        //$dados['bolsistas'] = $this->db->get('bolsistas')->result();

        $this->load->model('Bolsista');

        $dados['bolsista'] = $this->Bolsista->listarBolsistas()->result();
        

        $opcaoLateral ['opcaoLateral'] = "bolsistas";
        $this->load->view('includes/html_header');
        //$this->load->view('listar_bolsistas',$dados);
        $this->load->view('listar_bolsistas', $dados);
        $this->load->view('includes/menu', $opcaoLateral);
        $this->load->view('includes/html_footer');
    }

    public function cadastro() {

        $opcaoLateral ['opcaoLateral'] = "usuario";
        //$this->load->view('../view/includes/html_header');
        //$this->load->view(base_url().'aplication/views/includes/html_header');
        $this->load->view('cadastro_usuarios');
        //$this->load->view('includes/menu',$opcaoLateral);
        //	$this->load->view('includes/html_footer');
    }

    public function cadastrar() {
        //PEGANDO VALOES DOS CAMPOS		 
        $data['username'] = $this->input->post('nome');
        $data['password'] = md5($this->input->post('senha')); //criptografado
        $data['email'] = $this->input->post('email');
        $data['ativo'] = 1;

        if ($this->db->insert('user', $data)) {

            redirect('usuario');
        } else {
            redirect('usuario');
        }
    }

    public function excluir($id = null) {
        $this->db->where('id', $id);

        if ($this->db->delete('user')) {

            redirect('usuario');
        } else {
            redirect('usuario');
        }
    }

}
