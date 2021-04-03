<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/home
	 *	- or -
	 * 		http://example.com/index.php/home/index
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

	public function index()
	{
		//Dados a serem passados ao arquivo PHP que será aberto pelo index deste controller
		$dados['title'] = $this->title;
		$dados['pagina'] = "home_sys_v";
		$this->load->view('pages/sistema/'.$dados['pagina'], $dados);
	}
	
	public function perfume()
	{
		//Consultas no banco para serem exibidas na tela principal
		$dados['rs_perfumes'] = $this->CRUD_model->lista_perfume();
		$dados['rs_fragancias'] = $this->CRUD_model->lista_fragancia();
		
		//Dados a serem passados ao arquivo PHP que será aberto pelo index deste controller
		$dados['title'] = $this->title;
		$dados['pagina'] = "perfume_v";
		$this->load->view('pages/sistema/'.$dados['pagina'], $dados);
	}
	
	public function materia()
	{
		//Consultas no banco para serem exibidas na tela principal
		$dados['rs_materia_prima'] = $this->CRUD_model->lista_materia();
		$dados['rs_tipo_mp'] = $this->CRUD_model->lista_tipo_mp();
		
		//Dados a serem passados ao arquivo PHP que será aberto pelo index deste controller
		$dados['title'] = $this->title;
		$dados['pagina'] = "materia_v";
		$this->load->view('pages/sistema/'.$dados['pagina'], $dados);
	}
	
	public function pedido()
	{
		//Consultas no banco para serem exibidas na tela principal
		$dados['rs_pedidos'] = $this->CRUD_model->lista_pedido();
		$dados['rs_perfumes'] = $this->CRUD_model->lista_perfume();
		$dados['rs_estoque'] = $this->CRUD_model->lista_estoque();
		
		//Dados a serem passados ao arquivo PHP que será aberto pelo index deste controller
		$dados['title'] = $this->title;
		$dados['pagina'] = "pedido_v";
		$this->load->view('pages/sistema/'.$dados['pagina'], $dados);
	}
	
	public function relatorio_perfume()
	{
		//Consultas no banco para serem exibidas na tela principal
		$dados['rs_pedidos'] = $this->CRUD_model->lista_pedido();
		$dados['relatorio'] = "relatorio_perfume";
		
		//Dados a serem passados ao arquivo PHP que será aberto pelo index deste controller
		$dados['title'] = $this->title;
		$dados['pagina'] = "relatorio_v";
		$this->load->view('pages/sistema/'.$dados['pagina'], $dados);
	}
	
	public function sobre()
	{
		$dados['title'] = $this->title;
		$dados['pagina'] = "sobre_v";
		$this->load->view('pages/sistema/'.$dados['pagina'], $dados);
	}
}
