<?php
class CRUD_model extends CI_Model {

	/**
	 * Modelo CRUD do sistema.
	 * Criação 27/07/2020
	 **/
	 
	/*
	** Início CRUD referente a tabela tb_perfume
	*/
	//Cadastra novo perfume
	public function cadastra_perfume($dados)
	{
		return $this->db->insert("tb_perfume", $dados);
    }
	
	//Listar todos perfumes
	public function lista_perfume()
	{
		$this->db->select('p.*, mp.descricao_mp');
		$this->db->join('tb_materia_prima mp', 'mp.id_mp_pk = p.id_mp_fk', 'left');
		$this->db->join('tb_tipo_mp t', 't.id_tipo_pk = mp.id_tipo_fk', 'left');
		$rsperfume = $this->db->get("tb_perfume p")->result_array();
		return $rsperfume;
    }
	
	//Busca perfume
	public function localizar_perfume($idRegistro)
	{
		$this->db->select('p.*');
		$this->db->join('tb_materia_prima mp', 'mp.id_mp_pk = p.id_mp_fk', 'left');
		$this->db->join('tb_tipo_mp t', 't.id_tipo_pk = mp.id_tipo_fk', 'left');
		$this->db->where('p.id_perf_pk', $idRegistro);
		$rsperfume = $this->db->get("tb_perfume p")->row_array();
		return $rsperfume;
    }
	
	//Atualizar dados do perfume
	public function atualiza_perfume($dados_perfume, $id_registro)
	{
		$this->db->where('id_perf_pk', $id_registro);
		$resultado_atualizacao = $this->db->update("tb_perfume", $dados_perfume);
		if($resultado_atualizacao){
			return true;
		}else{
			return false;
		}
	}
	/*
	** Final CRUD referente a tabela tb_perfume
	*/
	
	/*
	** Início CRUD referente a tabela tb_tipo_mp
	*/
	//Cadastra novo tipo de matéria prima
	public function cadastra_tipo_mp($dados)
	{
		return $this->db->insert("tb_tipo_mp", $dados);
    }
	
	//Listar todo tipo de matéria prima
	public function lista_tipo_mp()
	{
		$rstipos = $this->db->get("tb_tipo_mp")->result_array();
		return $rstipos;
    }
	
	
	//Atualizar dados de tipo de matéria prima
	public function atualiza_tipo_mp($dados_tipo, $id_registro)
	{
		$this->db->where('id_tipo_pk', $id_registro);
		$resultado_atualizacao = $this->db->update("tb_tipo_mp", $dados_perfume);
		if($resultado_atualizacao){
			return true;
		}else{
			return false;
		}
	}
	/*
	** Final CRUD referente a tabela tb_tipo_mp
	*/
	
	/*
	** Início CRUD referente a tabela tb_materia_prima
	*/
	//Cadastra nova matéria prima
	public function cadastra_materia($dados)
	{
		return $this->db->insert("tb_materia_prima", $dados);
    }
	
	//Listar todas matérias prima
	public function lista_materia()
	{
		$this->db->select('mp.*, t.descricao_tipo');
		$this->db->join('tb_tipo_mp t', 't.id_tipo_pk = mp.id_tipo_fk', 'left');
		$this->db->order_by('id_mp_pk',"asc");
		$rsmateria = $this->db->get("tb_materia_prima mp")->result_array();
		return $rsmateria;
    }
	
	//Busca matéria prima
	public function localizar_mp($idRegistro)
	{
		$this->db->select('mp.*');
		$this->db->join('tb_tipo_mp t', 't.id_tipo_pk = mp.id_tipo_fk', 'left');
		$this->db->where('mp.id_mp_pk', $idRegistro);
		$rsmateria = $this->db->get("tb_materia_prima mp")->row_array();
		return $rsmateria;
    }
	
	//Atualizar dados de matéria prima
	public function atualiza_materia($dados_mp, $id_registro)
	{
		$this->db->where('id_mp_pk', $id_registro);
		$resultado_atualizacao = $this->db->update("tb_materia_prima", $dados_mp);
		if($resultado_atualizacao){
			return true;
		}else{
			return false;
		}
	}
	/*
	** Final CRUD referente a tabela tb_materia_prima
	*/
	
	/*
	** Início CRUD referente a fragância
	*/
	//Listar todas matérias prima
	public function lista_fragancia()
	{
		$this->db->select('mp.*, t.descricao_tipo');
		$this->db->join('tb_tipo_mp t', 't.id_tipo_pk = mp.id_tipo_fk', 'left');
		$this->db->where('mp.id_tipo_fk', 3);
		$rsfragancia = $this->db->get("tb_materia_prima mp")->result_array();
		return $rsfragancia;
    }
	/*
	** Final CRUD referente a fragância
	*/
	
	/*
	** Início CRUD referente aos Pedidos
	*/
	//Listar todos pedidos
	public function lista_pedido()
	{
		$this->db->select('pd.*, p.*, mp.*');
		$this->db->join('tb_perfume p', 'p.id_perf_pk = pd.id_perf_fk', 'left');
		$this->db->join('tb_materia_prima mp', 'mp.id_mp_pk = p.id_mp_fk', 'left');
		$rspedido = $this->db->get("tb_pedido pd")->result_array();
		return $rspedido;
    }
	
	public function lista_estoque()
	{
		$this->db->select('mp.*');
		$this->db->order_by('mp.id_mp_pk',"asc");
		$this->db->where('mp.estoque_mp > 0');
		$rsmateria = $this->db->get("tb_materia_prima mp")->result_array();
		return $rsmateria;
    }
	
	public function estoque_producao($idPerfume)
	{
		$this->db->select('mp.*');
		$this->db->join('tb_perfume p', 'p.id_mp_fk = mp.id_mp_pk', 'left');
		$this->db->where('mp.estoque_mp > 0');
		$this->db->where("mp.id_mp_pk=1 OR mp.id_mp_pk=2 OR mp.id_mp_pk=$idPerfume");
		$rsmateria = $this->db->get("tb_materia_prima mp")->result_array();
		return $rsmateria;
    }
	
	public function cadastra_pedido($dados)
	{
		return $this->db->insert("tb_pedido", $dados);
    }
	
	public function atualiza_estoque($dados_estoque, $id_registro)
	{
		$this->db->where('id_mp_pk', $id_registro);
		$resultado_atualizacao = $this->db->update("tb_materia_prima", $dados_estoque);
		if($resultado_atualizacao){
			return true;
		}else{
			return false;
		}
	}
	
	//Contagem para relatórios
	public function somatorio_perfumes()
	{
		$this->db->select('p.nome_perf, COUNT(pd.id_perf_fk) AS total_pedidos');
		$this->db->join('tb_perfume p', 'p.id_perf_pk = pd.id_perf_fk', 'left');
		$this->db->join('tb_materia_prima mp', 'mp.id_mp_pk = p.id_mp_fk', 'left');
		$this->db->group_by('pd.id_perf_fk');
		$this->db->order_by('total_pedidos', 'DESC');
		$rspedido = $this->db->get("tb_pedido pd")->result_array();
		return $rspedido;
    }
	
	public function somatorio_fragancias()
	{
		$this->db->select('mp.descricao_mp, COUNT(p.id_mp_fk) AS total_pedidos');
		$this->db->join('tb_perfume p', 'p.id_perf_pk = pd.id_perf_fk', 'left');
		$this->db->join('tb_materia_prima mp', 'mp.id_mp_pk = p.id_mp_fk', 'left');
		$this->db->group_by('mp.id_mp_pk');
		$this->db->order_by('total_pedidos', 'DESC');
		$rspedido = $this->db->get("tb_pedido pd")->result_array();
		return $rspedido;
    }
	/*
	** Final CRUD referente aos Pedidos
	*/
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	/*
	* Início Gerar dados para gráficos
	*/
	public function quantidade_usuarios_ativos()
	{
		$this->db->where('status_usr', 1);
		$this->db->from('tb_usuario');
		return $this->db->count_all_results();
    }
	
	public function quantidade_usuarios()
	{
		$this->db->from('tb_usuario');
		return $this->db->count_all_results();
    }
	
	public function quantidade_pesquisadores()
	{
		$this->db->from('tb_pesquisador');
		return $this->db->count_all_results();
    }
	
	public function quantidade_termos_ativos()
	{
		$this->db->where('status_term', 1);
		$this->db->from('tb_termo');
		return $this->db->count_all_results();
    }
	
	public function quantidade_termos()
	{
		$this->db->from('tb_termo');
		return $this->db->count_all_results();
    }
	
	public function dados_termos_ano()
	{
		$this->db->where("YEAR(t.dt_registro_term)", date('Y'));
		$termos = $this->db->get('tb_termo t')->result_array();
		return $termos;
    }
	
	public function parcelas_pagas_ano()
	{
		$this->db->where('p.id_stt_fk', 1);
		$this->db->where("YEAR(p.dt_pag_parc)", date('Y'));
		$parcela = $this->db->get('tb_parcelas p')->result_array();
		return $parcela;
    }
	
	public function parcelas_pagas_mes()
	{
		$this->db->select('MONTH(dt_pag_parc) mes, SUM(vlr_atual_parc) somar_pagas');
		$this->db->where("YEAR(p.dt_pag_parc)", date('Y'));
		$this->db->group_by("MONTH(dt_pag_parc)");
		$parcela = $this->db->get('tb_parcelas p')->result_array();
		return $parcela;
    }
	
	public function qtd_parcelas_mes()
	{
		$this->db->select('MONTH(dt_venc_parc) mes, COUNT(id_parc_pk) qtd_parcelas');
		$this->db->where("YEAR(p.dt_venc_parc)", date('Y'));
		$this->db->group_by("MONTH(dt_venc_parc)");
		$parcela = $this->db->get('tb_parcelas p')->result_array();
		return $parcela;
    }
	
	public function verifica_parcelas_pagas($idtermo)
	{
		$this->db->where('p.id_stt_fk', 1);
		$this->db->where('p.id_term_fk', $idtermo);
		$parcela = $this->db->get('tb_parcelas p')->result_array();
		return $parcela;
    }
	/*
	* Final Gerar dados para gráficos
	*/
}