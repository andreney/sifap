<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/report
	 *	- or -
	 * 		http://example.com/index.php/report/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	//Declaração para que os modelos fiquem disponíveis e não precisem ser novamente chamados
	public function __construct($config = array())
	{
		parent::__construct($config);
		$this->load->model("CRUD_model");
	}
	
	public $title = "Sistema de Fábrica de Perfume - SIFAP";

	public function relatorio_perfume()
	{
		$this->load->library('Pdf');
		
		$dados['rs_pedidos'] = $this->CRUD_model->somatorio_perfumes();
		
		$dados['title'] = $this->title;
		$dados['pagina'] = "report_perfume_v";
		$this->load->view('pages/relatorio/'.$dados['pagina'], $dados);
	}
	
	public function relatorio_fragrancia()
	{
		$this->load->library('Pdf');
		
		$dados['rs_pedidos'] = $this->CRUD_model->somatorio_fragancias();
		
		$dados['title'] = $this->title;
		$dados['pagina'] = "report_fragrancia_v";
		$this->load->view('pages/relatorio/'.$dados['pagina'], $dados);
	}
}
