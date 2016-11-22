<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ci_template_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->tb = "tb_edicao_layout";
		$this->tb_config = "tb_config";
		
	}

	public function getGroups()
	{
		$this->db->select('*');
		$this->db->from('groups');
		return $this->db->get()->result_array();
	}

	public function getAll($tabela)
	{
		$this->db->select('*');
		$this->db->from($tabela);
		return $this->db->get()->result_array();
	}

	public function getAllWhere($condicao, $campo, $tabela)
	{
		$this->db->select('*');
		$this->db->from($tabela);
		$this->db->where($campo, $condicao);
		return $this->db->get()->result_array();
	}

	public function getAllWhereOrder($condicao, $campo, $ordem, $tabela)
	{
		$this->db->select('*');
		$this->db->from($tabela);
		$this->db->where($campo, $condicao);
		$this->db->order_by($ordem, 'ASC');
		return $this->db->get()->result_array();
	}
	
	public function setTemplate($dados)
	{
		$this->db->insert( $this->tb, $dados);
		return $this->db->insert_id();
	}

	public function setAll($dados, $tabela)
	{
		$this->db->insert($tabela, $dados);
		return $this->db->insert_id();
	}
	
	public function getUserList()
	{
		$this->db->select('*');
		$this->db->from($this->tb);
		return $this->db->get()->result_array();
	}

	public function updateAll($id, $campo, $dados, $tabela)
	{
		$this->db->where($campo, $id);
		$this->db->update($tabela, $dados);
		// return;
	}

	public function deleteData($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->tb);
		return;
	}

	public function deleteAll($id, $campo, $tabela)
	{
		$this->db->where($campo, $id);
		$this->db->delete($tabela);
		return;
	}

	public function setConfigTemplate($tabela,$dados){
		$this->db->insert( $tabela, $dados);
		return $this->db->insert_id();
	}

	public function getDataConfig($idUsr, $loja = null){
		$this->db->select($this->tb.'.id_usuario, '.$this->tb.'.nome_loja, '.$this->tb.'.dominio, '.$this->tb.'.tipo_loja, '.$this->tb.'.url, '.$this->tb_config.'.id AS id_config, '
			.$this->tb_config.'.id_edicao_layout, '.$this->tb_config.'.pagina, '.$this->tb_config.'.configs');
		$this->db->from($this->tb);
		$this->db->join("tb_config", $this->tb.'.id ='.$this->tb_config.".id_edicao_layout");
		$this->db->where($this->tb.'.id_usuario', $idUsr);
		if($loja != null){
			$this->db->where($this->tb.'.id', $loja);
		}
		return $this->db->get()->result_array();
	}


	//---------------- FUNCOES EXEMPLO -----------------
	public function setProdutosRelac($data)
	{
		$this->db->insert_batch('TB_PRODUTOS_RELACIONADOS', $data);
	}

	public function getProdutoRelacionados($id_produto)
	{
		$this->db->select('*');
		$this->db->from($this->tb_relacionados);
		$this->db->join($this->tb, $this->tb_relacionados.'.id_produto_relacionado ='.$this->tb.".id_produto");
		$this->db->where($this->tb_relacionados.'.id_produto', $id_produto);
		return $this->db->get()->result_array();
	}

	public function getImagens($id)
	{
		$this->db->select('*');
		$this->db->from('TB_IMAGENS_PRODUTOS');
		$this->db->where('id_produto', $id);
		return $this->db->get()->result_array();
	}

	public function getProdutosPagination($pagina)
	{
		$pagina = ($pagina=='' or $pagina ==1 )?0:$pagina;
		$calc = ($pagina>1)?(9*($pagina-1)):($pagina);

		$this->db->select('*');
		$this->db->from($this->tb);
		$this->db->join($this->tb_cat_produtos, $this->tb_cat_produtos.'.id_produto = '.$this->tb.".id_produto", 'left');
		$this->db->where($this->tb.".status", 1);
		$this->db->limit(9, $calc);
		$this->db->order_by($this->tb.".id_produto", 'ASC');
		return $this->db->get()->result_array();
	}

	public function atualizaDestaques($id, $dados)
	{
		$this->db->where('id', $id);
		$this->db->update('TB_PRODUTOS_DESTAQUE', $dados);
		return;
	}

	public function excluirDestaques($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('TB_PRODUTOS_DESTAQUE');
		return;
	}

	
}
