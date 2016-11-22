<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class Template extends CI_controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('twig');
		$this->twig->add_function('base_url');
		//use library easy parse
		$this->load->library('easy_parser');
		$this->load->library('session');
		$this->load->model('ci_template_model');
	}

	public function index()
	{

		
	}

	public function salvaOrdem()
	{
		$idpag = $this->input->post('idpag');
		$ordem = $this->input->post('ordem');
		$bloco = $this->input->post('bloco');

		$dados = array(
			'id_pag' => $idpag,
			'ordem' => $ordem,
			'bloco' => $bloco
		);

		$idOrdem = $this->ci_template_model->setAll($dados, 'tb_posicao');
	}
	public function salvaEstilos()
	{
		$idpag = $this->input->post('idpag');
		$idtipo = $this->input->post('idtipo');
		$idElemento = $this->input->post('idelemento');
		$classeEstilo = $this->input->post('claseestilo');
		$estilos = $this->input->post('estilos');

		$dados = array(
			'id_pag' => $idpag,
			'id_tipo' => $idtipo,
			'id_elemento' => $idElemento,
			'classe_estilo' => $classeEstilo,
			'estilos' => $estilos
		);
		
		$validaCadastro = $this->ci_template_model->getAllWhere($classeEstilo,'classe_estilo','tb_estilos');
		if(empty($validaCadastro)){

			$idEstilos = $this->ci_template_model->setAll($dados, 'tb_estilos');

		}else{
			$this->ci_template_model->updateAll($classeEstilo, 'classe_estilo', $dados, 'tb_estilos');
		}
	}

	public function montaTemplate()
	{
		$this->load->model('ci_bloco_model');
		$posicao = $this->ci_template_model->getAllWhereOrder('home', 'id_pag', 'ordem','tb_posicao');
		$estilos = $this->ci_template_model->getAllWhere('home', 'id_pag', 'tb_estilos');

		$css = "<style>";
		foreach ($estilos as $values) {
			$estilosimportant = str_replace(";"," !important;",$values['estilos']);
			$css .= ".".$values['classe_estilo']."{".$estilosimportant."}";
		}
		$css .= "</style>";

		for($i=0;$i<count($posicao);$i++){
			$conte[$posicao[$i]['ordem']] = $posicao[$i]['bloco'];
		}

		
		$data = array(
			'view' => "templates/temp1/teste",
			'title' => "Turbosite",
			'head'  => "e-commerce Creator",
			'conteudo' => $conte,
			'estilos' => $estilos,
			'css' => $css
		);
		//this use easy parse
		$this->easy_parser->parse('layout_principal', $data);
	}

	public function preenche_styles()
	{
		$pagina = $this->input->post('pag');

		$styles = $this->ci_template_model->getAllWhere($pagina, 'id_pag', 'tb_estilos');
		$footer = $this->ci_template_model->getAllWhere('footer', 'id_pag', 'tb_estilos');
		$menu = $this->ci_template_model->getAllWhere('menu', 'id_pag', 'tb_estilos');
		$fundo = $this->ci_template_model->getAllWhere('fundo', 'id_pag', 'tb_estilos');
		$links = $this->ci_template_model->getAllWhere('links', 'id_pag', 'tb_estilos');
		
		$data['conteudo'] = $styles;
		$data['footer'] = $footer;
		$data['menu'] = $menu;
		$data['fundo'] = $fundo;
		$data['links'] = $links;

		echo json_encode($data);
	}

	public function limparStyles()
	{
		$elemento = $this->input->post('elemento');
		$retorno = $this->ci_template_model->deleteAll($elemento, 'id_tipo', 'tb_estilos');
		echo json_encode($retorno);
	}
	public function teste()
	{
		$pagina = 'home';
		$data = array(
			'view' => "templates/temp2/editor/home",
			'title' => "Turbosite",
			'head'  => "e-commerce Creator",
			'pagina' => $pagina
		);
		//this use easy parse
		$this->easy_parser->parse('layout_principal', $data);
	}
}