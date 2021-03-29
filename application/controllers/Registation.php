<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registation extends CI_Controller {

	
	public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
	$this->load->database();
	//$this->load->model('Registation_model','reistation');
	$this->load->model("RegistationModel");
	$this->load->library('form_validation');
	$this->load->library('session');
	$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		$this->load->view('formregistation');
	}

	public function login()
	{
		$this->load->view('login');
	}

	// public function home()
	// {
	// 	$this->load->view('home');
	// }

	public function savedata()
	{
		
		if($this->input->post('name'))
		{
		         $data=[
                       // 'Code'=> $nextCode,
                        'name'=> html_escape($this->input->post('name')),
                        'email'=> html_escape($this->input->post('email')),
                        'dob'=>html_escape($this->input->post('dob')),
						'password'=>html_escape(md5($this->input->post('password'))),
                        'gender'=>html_escape($this->input->post('gender')),
                        //'UpdatedAt'=>time()
                    ];
                    $data=$this->security->xss_clean($data);
                    if($this->RegistationModel->IsSaved($data)){
                        $this->session->set_flashdata('category_success', 'Data Update Succfully');
                        redirect(base_url("Registation"));

                    }
		}
	}
}
