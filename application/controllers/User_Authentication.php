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

	// Load database
	$this->load->model('inventory_model');

	$this->load->controller('inventory');
	}

	public function user_login_process(){

		
	
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');


		if($this->form_validation->run() == FALSE){
			if(isset($this->session->userdata['logged_in'])){

				//$invObj = new Inventory();

				//$this->inventory->admin_page();
				//header("location:".base_url("Inventory/admin_page"));
			}
			else{
				//$this->inventory->view_login();
				//header("location:".base_url("Inventory/view_login"));
			}
		}
		else{
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
				);

			$this->load->model('inventory_model');
			$result = $this->inventory_model->login($data);

			if($result == TRUE){
				$username = $this->input->post('username');
				$result = $this->inventory_model->read_user_information($username);

				if($result != FALSE){
					$session_data = array(
						'username' => $result[0]->user_name,
						'user_email' => $result[0]->user_email);

					//Add user in session
					$this->session->set_userdata('logged_in', $session_data);
				
					//$invObj = new Inventory();
					//$invObj->admin_page();
					//header("location:".base_url("Inventory/admin_page"));
					//$this->load->view('Admin_page');
					
					$this->inventory->admin_page();
				}				
			}
			else{
				//$data = array(
				//	'error_message' => 'Invalid Username/Password');
				//$this->load->view('login', $data);
				//header("location:".base_url("Inventory/err_view_login"));
				}
		}
	}

	/*public function logout(){

		//Removing
		$sess_array = array(
			'username' => '');
		$this->session->unset_userdata('logged_in', $sess_array);
		$data['message_display'] = 'Successfully Logout';
		 header("location:".base_url("Inventory/view_login"));
	}*/
}

?>
