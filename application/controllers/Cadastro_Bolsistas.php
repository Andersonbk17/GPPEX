<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro_Bolsistas extends CI_Controller {

    public function index() {
        //$this->db->select('*');
        //$this->db->where('ativo',1);
        //$dados['bolsistas'] = $this->db->get('bolsistas')->result();

        $this->load->model('Cursos', 'cursos');
        $this->load->model('Nacionalidades', 'nacional');
        $this->load->model('Campus');
        $this->load->model('Cidades');

        $dados['cursos'] = $this->cursos->listarCursos()->result(); // transformou o result() objeto em array nao sei como mas funfa
      //  $cursosCadastrados = $this->cursos->listarCursos()->result_array();

        $dados['campus'] = $this->Campus->listarCampus()->result();
        $dados ['nacionalidades'] = $this->nacional->listarNacionalidades()->result();
        //$dados ['cidades'] = $this->Cidades->listarCidades()->result();
        //foreach ($cursosCadastrados as $aa) {
        //    echo $aa->nome;
       // };
       //print_r($cursosCadastrados);

       //echo $cursosCadastrados[1]->nome;
        
        $opcaoLateral ['opcaoLateral'] = "bolsistas";
        $this->load->view('includes/html_header');
        //$this->load->view('listar_bolsistas',$dados);
        $this->load->view('cadastro_bolsistas', $dados);
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
