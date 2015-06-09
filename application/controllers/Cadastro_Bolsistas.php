<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro_Bolsistas extends CI_Controller {

    public function index() {
        //$this->db->select('*');
        //$this->db->where('ativo',1);
        //$dados['bolsistas'] = $this->db->get('bolsistas')->result();

        /*     IMPORTAÇÕES    */
        // parent::__construct();


        $this->load->helper('form');

        $this->load->library('form_validation');


        $this->importacoes();



        // $this->buscarCidadeAjax(2);
        //print_r($this->buscarCidadeAjax(2));
    }

    public function importacoes() {
        /*    FIM IMPORTAÇÕES   */

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
        $this->load->view('cadastro_bolsistas', $dados); //envia array de dados
        $this->load->view('includes/menu', $opcaoLateral); //nome da opção selecionada a esquerda
        $this->load->view('includes/html_footer');
    }

    public function cadastro() {

        //validacoes
        $this->load->library('form_validation');
        $this->form_validation->set_rules('situacaoMilitarBolsista', 'SituacaoMiitar', 'trim|required|strtolower');
        // $this->form_validation->set_rules('nomeCAmpoForm', 'NOmehumano', 'validacoes');


        if ($this->form_validation->run() == TRUE):
            //$dados = elements(array('username', 'senha'), $this->input->post());
            //$dados['senha'] = md5($dados['senha']);
            //$this->crud->do_insert($dados);
            echo "Validação ok, inserir no bd";


        endif;

        redirect('Bolsistas');
        
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

    public function buscarCidadeAjax($idEstado = null) {
        //print_r( $dados ['cidads'] = $this->Cidades->listarCidadesPorEstado($idEstado)->result());
        return $dados ['cidads'] = $this->Cidades->listarCidadesPorEstado($idEstado)->result();
        //print_r($dados);
    }

}
