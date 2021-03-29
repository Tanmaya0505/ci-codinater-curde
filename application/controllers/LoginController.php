<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	
	public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
	$this->load->database();
	//$this->load->model('Registation_model','reistation');
	$this->load->model("LoginModel");
	$this->load->library('form_validation');
	$this->load->library('session');
	$this->load->helper(array('form', 'url'));
	}
	
	public function login()
	{
		$this->load->view('login');
	}

	public function home()
	{
		if(isset($this->session->userdata['loggedIn'])){
			$result['data']=$this->LoginModel->display_record();
			$this->load->view('home',$result);
		}
		else{
			redirect('login');
		}
	}
	/*Delete Record*/
   public function deletedata($id)
	{
		if (null != $id) {
			$qa=$this->LoginModel->deleterecords($id);
			//print_r($qa); exit();
			echo "Date deleted successfully !";
			redirect(base_url("home"));
		}
		else {
            redirect(base_url("home"));
            exit();
        }
	}
	public function logout(){
		if(isset($this->session->userdata['loggedIn'])){
			$this->session->unset_userdata('loggedIn');
        	redirect('');
		}
	}
	public function edited($id){
		if(isset($this->session->userdata['loggedIn'])){
			$result['editdata']=$this->LoginModel->edite_record($id);
			$this->load->view('edite',$result);
		}
		else{
			redirect('login');
		}
	}
	public function loginsubmit()
	{
		//echo "aaaaaaaa";
		
		$data = array(
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password')
			  );
		   $result = $this->LoginModel->Login($data);
		  //print_r ($result); exit();
		   if ($result == TRUE) {
			   $newdata = array(
						'id'=>$result[0]->ID,
						'name'  => $result[0]->name,
						'email'     => $result[0]->email
				);
			  // print_r($newdata); exit();

				$this->session->set_userdata('loggedIn',$newdata);
				redirect(base_url('home'));
		   }
		   else
		   {
			   $this->session->set_flashdata('category_error', 'Invalid Username or Password');
               redirect(base_url("login"));
		   }
	}
}
