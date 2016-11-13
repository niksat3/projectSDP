<?php
	class adminlogin extends CI_Controller{
		public function __construct(){
			parent::__construct();
		}
		public function index(){
			$data['status']= "";
			$this->load->view('admin/login',$data);
		}
		public function login(){
			if($this->input->post('login')){
				$user = $this->input->post('username');
				$pass = $this->input->post('password');
				if($user == "admin" && $pass =="admin"){
				    $this->session->set_userdata('username','admin');
					redirect('dashboard','refresh');
				}
				else{
					$data['status']= "Incorrect Username or Password";
					$this->load->view('admin/login',$data);
				}
			}
		}
	}

?>