<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller {
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
		$user = $this->ion_auth->user()->row()->id;
		$template = $this->ci_template_model->getAllWhere($user, 'id_usuario', 'tb_edicao_layout');

		$data = array(
			'view' => "profile/lojaList",
			'title' => "Turbosite",
			'head'  => "E-commerce Creator",
			'template' => $template
		);
		//this use easy parse
		$this->easy_parser->parse('layout_profile', $data);
	}

	public function exclusao()
	{
		$id = $this->input->post('id');

		$this->ci_template_model->deleteAll($id, 'id', 'tb_edicao_layout');
		$this->ci_template_model->deleteAll($id, 'id_edicao_layout', 'tb_config');

		$this->session->set_flashdata('message', 'Exclusão realizada com sucesso!');
		$this->session->set_flashdata('alert', 'success');
		// }else{
		// 	$this->session->set_flashdata('message', 'Falha ao excluir loja, tente novamente!');
		// 	$this->session->set_flashdata('alert', 'danger');
		// }
		

	}

}