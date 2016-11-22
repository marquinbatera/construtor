<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
	/**
 	* @category Libraries
 	* @package  CodeIgniter 3.0
 	* @author   Yp <purwantoyudi42@gmail.com>
 	* @link     https://timexstudio.com
 	* @license  Protected
 	*/

 	public function __construct()
	{
		parent::__construct();
		$this->load->library('twig');
		$this->twig->add_function('base_url');
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->library('easy_parser');
		$this->load->library('session');
		$this->load->model('construtor/ci_template_model');
		
	}

	public function index()
	{ 
		$logo = $this->ci_template_model->getAllWhere(1, 'id', 'robo');
		$pagina = 'home';
		$data = array(
			'view' => "templates/temp1/editor/home",
			'title' => "Turbosite",
			'head'  => "e-commerce Creator",
			'logo' => $logo,
			'pagina' => $pagina
		);
		//this use easy parse
		$this->easy_parser->parse('construtor/layout_construtor', $data);
	}

	public function detalhe()
	{ 
		$logo = $this->ci_template_model->getAllWhere(1, 'id', 'robo');
		$pagina = 'detalhe';
		$data = array(
			'view' => "templates/temp1/editor/detalhe",
			'title' => "Turbosite",
			'head'  => "e-commerce Creator",
			'logo' => $logo,
			'pagina' => $pagina
		);
		//this use easy parse
		$this->easy_parser->parse('construtor/layout_construtor', $data);
	}

	public function sobre()
	{ 
		$logo = $this->ci_template_model->getAllWhere(1, 'id', 'robo');
		$pagina = 'sobre';
		$data = array(
			'view' => "templates/temp1/editor/sobre",
			'title' => "Turbosite",
			'head'  => "e-commerce Creator",
			'logo' => $logo,
			'pagina' => $pagina
		);
		//this use easy parse
		$this->easy_parser->parse('construtor/layout_construtor', $data);
	}

	public function carrinho()
	{ 
		$logo = $this->ci_template_model->getAllWhere(1, 'id', 'robo');
		$pagina = 'carrinho';
		$data = array(
			'view' => "templates/temp1/editor/carrinho",
			'title' => "Turbosite",
			'head'  => "e-commerce Creator",
			'logo' => $logo,
			'pagina' => $pagina
		);
		//this use easy parse
		$this->easy_parser->parse('construtor/layout_construtor', $data);
	}

	public function grid()
	{ 
		$logo = $this->ci_template_model->getAllWhere(1, 'id', 'robo');
		$pagina = 'grid';
		$data = array(
			'view' => "templates/temp1/editor/grid",
			'title' => "Turbosite",
			'head'  => "e-commerce Creator",
			'logo' => $logo,
			'pagina' => $pagina
		);
		//this use easy parse
		$this->easy_parser->parse('construtor/layout_construtor', $data);
	}

	public function contato()
	{ 
		$logo = $this->ci_template_model->getAllWhere(1, 'id', 'robo');
		$pagina = 'contato';
		$data = array(
			'view' => "templates/temp1/editor/contato",
			'title' => "Turbosite",
			'head'  => "e-commerce Creator",
			'logo' => $logo,
			'pagina' => $pagina
		);
		//this use easy parse
		$this->easy_parser->parse('construtor/layout_construtor', $data);
	}

}