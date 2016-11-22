<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Visual extends CI_Controller {
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
		$this->load->model('ci_template_model');
		
	}

	public function index()
	{ 
		$logo = $this->ci_template_model->getAllWhere(1, 'id', 'robo');
		$data = array(
			'logo' => $logo
		);
		$this->load->view('templates/temp1/visual/home', $data);
	}

	public function detalhe()
	{ 
		$logo = $this->ci_template_model->getAllWhere(1, 'id', 'robo');
		$data = array(
			'logo' => $logo
		);
		$this->load->view('templates/temp1/visual/detalhe', $data);
	}

	public function sobre()
	{ 
		$logo = $this->ci_template_model->getAllWhere(1, 'id', 'robo');
		$data = array(
			'logo' => $logo
		);
		$this->load->view('templates/temp1/visual/sobre', $data);
	}

	public function carrinho()
	{ 
		$logo = $this->ci_template_model->getAllWhere(1, 'id', 'robo');
		$data = array(
			'logo' => $logo
		);
		$this->load->view('templates/temp1/visual/carrinho', $data);
	}

	public function grid()
	{ 
		$logo = $this->ci_template_model->getAllWhere(1, 'id', 'robo');
		$data = array(
			'logo' => $logo
		);
		$this->load->view('templates/temp1/visual/grid', $data);
	}

	public function contato()
	{ 
		$logo = $this->ci_template_model->getAllWhere(1, 'id', 'robo');
		$data = array(
			'logo' => $logo
		);
		$this->load->view('templates/temp1/visual/contato', $data);
	}

}