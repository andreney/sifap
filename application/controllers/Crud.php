<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	/**
	* Index Page for this controller.
	*
	* Maps to the following URL
	* 		http://example.com/index.php/crud
	*	- or -
	* 		http://example.com/index.php/crud/index
	*	- or -
	* Since this controller is set as the default controller in
	* config/routes.php, it's displayed at http://example.com/
	*
	* So any other public methods not prefixed with an underscore will
	* map to /index.php/welcome/<method_name>
	* @see https://codeigniter.com/user_guide/general/urls.html
	*/
	//Declaração para que os modelos fiquem disponíveis e não precisem ser novamente chamados
	public function __construct()
	{
		Parent::__construct();
		$this->load->model("CRUD_model");
	}
	
	//Função para retirar caracteres especiais, de campos como cpf, cnpj e telefone
	public function limpaChar($valor){
		$valor = trim($valor);
		$valor = str_replace(".", "", $valor);
		$valor = str_replace("-", "", $valor);
		$valor = str_replace("/", "", $valor);
		$valor = str_replace("'", "", $valor);
		$valor = str_replace("(", "", $valor);
		$valor = str_replace(")", "", $valor);
		$valor = str_replace(" ", "", $valor);
		return $valor;
	}
	
	//Função para formatar o valor em R$ do formulário a inserir no mysql, o tipo de campo no MySQL estará como decimal
	public function formataMoedaMySQL($valor){
		$valor = str_replace(".", "", $valor);
		$valor = str_replace(",", ".", $valor);
		return $valor;
	}
	
	//Função para formatar o valor em R$ do formulário a inserir no mysql, o tipo de campo no MySQL estará como decimal
	public function formataDataEUA($dataBr){
		$data_format = $dataBr;
		$data_format = implode("-",array_reverse(explode("/",$data_format)));
		$data_format = date("Y-m-d", strtotime($data_format));
		return $data_format;
	}
	
	/*
	** Início Controles do Perfume
	*/
	//Cadastro de Perfume
	public function cadastro_perfume()
	{
		//Recebe os dados para tratamento
		//$variavel = $this->limpaChar($this->input->post("campo"));
		
		$dados = array(
			'nome_perf' => $this->input->post("addNome"),
			'qtd_h2o_perf' => $this->input->post("addQtdAgua"),
			'qtd_alcool_perf' => $this->input->post("addQtdAlcool"),
			'qtd_frag_perf' => $this->input->post("addQtdFragancia"),
			'id_mp_fk' => $this->input->post("addTipoFragancia")
		);
		if($this->CRUD_model->cadastra_perfume($dados)){
			$this->session->set_flashdata("cadastro_true", "Cadastro realizado com sucesso!");
			redirect(site_url('home/perfume'));
		}else{
			$this->session->set_flashdata("cadastro_false", "Dados incorretos ou inválidos!");
			redirect(site_url('home/perfume'));
		}
	}
	
	public function atualiza_perfume()
	{
		//Recebe os dados para tratamento
		//$variavel = $this->limpaChar($this->input->post("campo"));
		$id_perfume = $this->input->post("updId");
		
		$dados = array(
			'nome_perf' => $this->input->post("updNome"),
			'qtd_h2o_perf' => $this->input->post("updQtdAgua"),
			'qtd_alcool_perf' => $this->input->post("updQtdAlcool"),
			'qtd_frag_perf' => $this->input->post("updQtdFragancia"),
			'id_mp_fk' => $this->input->post("updTipoFragancia")
		);
		$update = $this->CRUD_model->atualiza_perfume($dados, $id_perfume);
		if(update){
			$this->session->set_flashdata("atualiza_true", "Edição realizada com sucesso!");
			redirect(site_url('home/perfume'));
		}else{
			$this->session->set_flashdata("atualiza_false", "Erro ao atualizar os dados!");
			redirect(site_url('home/perfume'));
		}
	}
	/*
	** Final Controles do Perfume
	*/
	
	/*
	** Início Controles de Matéria Prima
	*/
	//Cadastro de Perfume
	public function cadastro_mp()
	{
		//Recebe os dados para tratamento
		//$variavel = $this->limpaChar($this->input->post("campo"));
		
		$dados = array(
			'descricao_mp' => $this->input->post("addNome"),
			'estoque_mp' => $this->input->post("addQtdEstoque"),
			'id_tipo_fk' => 3
		);
		if($this->CRUD_model->cadastra_materia($dados)){
			$this->session->set_flashdata("cadastro_true", "Cadastro realizado com sucesso!");
			redirect(site_url('home/materia'));
		}else{
			$this->session->set_flashdata("cadastro_false", "Dados incorretos ou inválidos!");
			redirect(site_url('home/materia'));
		}
	}
	
	public function atualiza_mp()
	{
		//Recebe os dados para tratamento
		//$variavel = $this->limpaChar($this->input->post("campo"));
		$id_mp = $this->input->post("updId");
		
		$dados = array(
			'descricao_mp' => $this->input->post("updNome")
		);
		$update = $this->CRUD_model->atualiza_materia($dados, $id_mp);
		if($update){
			$this->session->set_flashdata("atualiza_true", "Edição realizada com sucesso!");
			redirect(site_url('home/materia'));
		}else{
			$this->session->set_flashdata("atualiza_false", "Erro ao atualizar os dados!");
			redirect(site_url('home/materia'));
		}
	}
	
	public function adiciona_mais_mp()
	{
		//Recebe os dados para tratamento
		//$variavel = $this->limpaChar($this->input->post("campo"));
		$idMateria = $this->input->post("updIdMore");
		$qtdAdicionar = $this->input->post("addMoreMP");
		$materiaAtual = $this->CRUD_model->localizar_mp($idMateria);
		$estoqueAtualizado = $materiaAtual['estoque_mp'] + $qtdAdicionar;
		$dados = array(
			'estoque_mp' => $estoqueAtualizado
		);
	
		$update = $this->CRUD_model->atualiza_estoque($dados, $idMateria);
		if($update){
			$this->session->set_flashdata("atualiza_true", "Estoque atualizado com sucesso!");
			redirect(site_url('home/materia'));
		}else{
			$this->session->set_flashdata("atualiza_false", "Erro ao atualizar os dados!");
			redirect(site_url('home/materia'));
		}
	}
	/*
	** Final Controles de Matéria Prima
	*/
	
	/*
	** Início Controles Aleatórios
	*/
	//Buscar Perfume usado no ajax para recuperar os dados da composição do perfume
	public function encontrar_perfume()
	{
		$output = '';
		$query = '';
		if($this->input->post('query')){
			$query = $this->input->post('query');
		}
		$data = $this->CRUD_model->localizar_perfume($query);
		if($data){
			$output = '<input type="hidden" name="qtdagua" id="qtdagua" value="'.$data['qtd_h2o_perf'].'"> <input type="hidden" name="qtdalcool" id="qtdalcool" value="'.$data['qtd_alcool_perf'].'"> <input type="hidden" name="qtdfrag" id="qtdfrag" value="'.$data['qtd_frag_perf'].'"> <input type="hidden" name="idmp" id="idmp" value="'.$data['id_mp_fk'].'">';
		}
		echo $output;
	}
	
	public function cadastro_pedido()
	{
		//Recebe os dados para tratamento
		//$variavel = $this->limpaChar($this->input->post("campo"));
		
		$dados_pedido = array(
			'id_perf_fk' => $this->input->post("addPerfume"),
			'solicitante_ped' => $this->input->post("addSolicitante"),
			'data_ped' => $this->formataDataEUA($this->input->post("addDataPed")),
			'qtd_ped' => $this->input->post("addQuantidade")
		);
		
		$idFragrancia = $this->input->post("idmp");
		$estoqueAguaUpd = array(
			'estoque_mp' => $this->input->post("updEstoqueAgua")
		);
		$estoqueAlcoolUpd = array(
			'estoque_mp' => $this->input->post("updEstoqueAlcool")
		);
		$estoqueFragUpd = array(
			'estoque_mp' => $this->input->post("updEstoqueFrag")
		);
		if($this->CRUD_model->cadastra_pedido($dados_pedido)){
			$updateAgua = $this->CRUD_model->atualiza_estoque($estoqueAguaUpd, 1);
			$updateAlcool = $this->CRUD_model->atualiza_estoque($estoqueAlcoolUpd, 2);
			$updateFrag = $this->CRUD_model->atualiza_estoque($estoqueFragUpd, $idFragrancia);
			if($updateAgua && $updateAlcool && $updateFrag){
				$mensagemAtualizaEstoque = " e estoque atualizado!";
			}else{
				$mensagemAtualizaEstoque = ", mas, erro ao atualizar!";
			}
			$this->session->set_flashdata("cadastro_true", "Cadastro realizado com sucesso".$mensagemAtualizaEstoque);
			redirect(site_url('home/pedido'));
		}else{
			$this->session->set_flashdata("cadastro_false", "Dados incorretos ou inválidos!");
			redirect(site_url('home/pedido'));
		}
		/*echo "Parábens vc enviou o pedido<br>";
		echo "Estoque de agua atualizado".$this->input->post("qtdProdAgua")."<br>";
		echo "Estoque de alcool atualizado".$this->input->post("qtdProdAlcool")."<br>";
		echo "Estoque de fragrancia atualizado".$this->input->post("qtdProdFrag")."<br>";*/
	}
	/*
	** Final Controles Aleatórios
	*/
}
