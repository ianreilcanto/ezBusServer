<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{
	   $this->session->isLogin;
       if($this->session->isLogin > 0){
		
			redirect( base_url().'admin');

	   }else{
			
			$this->load->view('common/header');
			$this->load->view('login');
			$this->load->view('common/footer');  
	   }
	}

	public function checkCredentials(){

		$this->load->model('login_model');


		if(isset($_POST)){
			$username = $_POST['username'];
			$password = $_POST['password'];
	
	
			$isLogin = $this->login_model->checkCredentials($username,$password);
	
			$this->session->isLogin = $isLogin;
	
			if($this->session->isLogin > 0){
			 	redirect( base_url().'admin');
			}else{
				redirect( base_url());
			}
		}else{
			print_r($_POST);
		}

		
	}

	public function logout(){
		$this->session->sess_destroy();

		redirect( base_url() );
	}
}
