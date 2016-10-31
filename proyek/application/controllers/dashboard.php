<?php
	class dashboard extends CI_Controller{
		public function __construct(){
			parent::__construct();
			if(!$this->session->userdata('username')){
			    redirect('adminlogin','refresh');
            }
		}
		public function logout(){
		    
        }
		public function index(){
		    $this->session->set_userdata('mode','index');
			$this->load->view('dashboard/template');
		}
		public function viewCustomer(){
            $this->session->set_userdata('mode','customer');
            $this->load->view('dashboard/template');
        }
        public function viewCategory(){
            $this->session->set_userdata('mode','category');
            $this->load->view('dashboard/template');
        }
        public function viewMenu(){
            $this->session->set_userdata('mode','menu');
            $this->load->view('dashboard/template');
        }
        public function viewPromo(){
            $this->session->set_userdata('mode','promo');
            $this->load->view('dashboard/template');
        }
        public function viewCourier(){
            $this->session->set_userdata('mode','courier');
            $this->load->view('dashboard/template');
        }
	}

?>