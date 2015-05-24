<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesquisas extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
            
                $opcaoLateral ['opcaoLateral']= "pesquisa";
              //  $opcaoLateral = array('opcaoLateral'   => 'principal');
		$this->load->view('/includes/html_header');
                $this->load->view('/includes/html_footer');
                 $this->load->view('listar_pesquisas');
               // $this->load->view('/includes/menu');
                $this->load->view('includes/menu',$opcaoLateral);
	}
}
