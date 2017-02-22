<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User_Authentication extends CI_Controller{

	public function __construct() {
	parent::__construct();

	// Load form helper library
	$this->load->helper('form');

	// Load form validation library
	$this->load->library('form_validation');

	// Load session library
	$this->load->library('session/session');

	//Load Bcrypt library
	$this->load->library('bcrypt');

	// Load database
	$this->load->model('users_model');

	//$this->load->controller('inventory');
	}

	public function user_login_process(){

		
	
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');


		if($this->form_validation->run() == FALSE){
			if(isset($this->session->userdata['logged_in'])){

				redirect('Inventory/admin_page');
			}
			else{
				
				redirect('Inventory/view_login');
			}
		}
		else{

			//$pass = $this->input->post('password');

			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
				);

			$this->load->model('users_model');

			$result = $this->users_model->login($data);

			if($result == TRUE){
				$username = $this->input->post('username');
				$result = $this->users_model->read_user_information($username);

				if($result != FALSE){
					$session_data = array(
						'username' => $result[0]->user_name,
						'user_email' => $result[0]->user_email);

					//Add user in session
					$this->session->set_userdata('logged_in', $session_data);
				
					redirect("Inventory/admin_page");
				}				
			}
			else{
				
				echo $result;
				//redirect("Inventory/err_view_login");
				}
		}
	}

	
}

?>
