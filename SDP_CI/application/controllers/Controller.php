<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_content_website','mcw');
		$this->load->model('model_gallery','mg');
		$this->load->model('model_opening_hours','moh');
		$this->load->model('model_kategori','mk');
		$this->load->model('model_menu','mn');
		$this->load->model('model_customer','mc');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
	}
	
	public function index()
	{
		$passing['address'] = $this->mcw->get('HOME_ADDRESS')->ISI_CONTENT;
		$passing['phone'] = $this->mcw->get('HOME_PHONE')->ISI_CONTENT;
		$passing['facebook'] = $this->mcw->get('LINK_FB')->ISI_CONTENT;
		$passing['twitter'] = $this->mcw->get('LINK_TWITTER')->ISI_CONTENT;
		$passing['google'] = $this->mcw->get('LINK_GPLUS')->ISI_CONTENT;
		$passing['pinterest'] = $this->mcw->get('LINK_PINTEREST')->ISI_CONTENT;
		$passing['linkedin'] = $this->mcw->get('LINK_LINKEDIN')->ISI_CONTENT;
		$passing['upcoming'] = $this->mcw->get('UPCOMING_EVENTS')->ISI_CONTENT;
		$this->load->view("home",$passing);
	}
	
	public function about()
	{
		$passing['header'] = $this->mcw->get('ABOUT_HEADER')->ISI_CONTENT;
		$passing['content'] = $this->mcw->get('ABOUT_CONTENT')->ISI_CONTENT;
		$passing['opendays'] = $this->moh->fetch_all();
		$this->load->view('about',$passing);
	}
	
	public function menu()
	{
		$passing['kategori'] = $this->mk->fetch_all();
		$passing['menu'] = $this->mn->fetch_all();
		$this->load->view('menu',$passing);
	}
	
	public function gallery()
	{
		$counter = 0;
		$passing['gallery'] = array();
		foreach($this->mg->fetch_all_show() as $gal)
		{
			$passing['gallery'][$counter]['image'] = $gal->LINK_GALLERY;
			$passing['gallery'][$counter]['thumb'] = $gal->LINK_GALLERY;
			$passing['gallery'][$counter]['title'] = $gal->NAME_GALLERY;
			$counter++;
		}
		$this->load->view('gallery',$passing);
	}
	
	public function events()
	{
		
		$this->load->view('events');
	}
	
	public function reservation()
	{
		$this->load->view('reservation');
	}
	
	public function contact()
	{
		$passing['address'] = $this->mcw->get('ADDRESS_CONTACT')->ISI_CONTENT;
		$passing['phone'] = $this->mcw->get('PHONE_CONTACT')->ISI_CONTENT;
		$passing['email'] = $this->mcw->get('EMAIL_CONTACT')->ISI_CONTENT;
		$passing['facebook'] = $this->mcw->get('LINK_FB')->ISI_CONTENT;
		$passing['twitter'] = $this->mcw->get('LINK_TWITTER')->ISI_CONTENT;
		$passing['googleplus'] = $this->mcw->get('LINK_GPLUS')->ISI_CONTENT;
		$passing['pinterest'] = $this->mcw->get('LINK_PINTEREST')->ISI_CONTENT;
		$passing['linkedin'] = $this->mcw->get('LINK_LINKEDIN')->ISI_CONTENT;
		$this->load->view('contact',$passing);
	}
	
	public function login()
	{
		$passing['message'] = '';
		if($this->input->post('Login'))
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$result = $this->mc->login($username,$password);
			print_r($result);
			if($result!=null)
			{
				$this->session->set_userdata('id',$result->ID_CUSTOMER);
				$this->session->set_userdata('username',$result->USERNAME_CUSTOMER);
				$this->session->set_userdata('email',$result->EMAIL_CUSTOMER);
				$this->session->set_userdata('user',$result->NAMA_CUSTOMER);
				$this->session->set_userdata('alamat',$result->ALAMAT_CUSTOMER);
				$this->session->set_userdata('kota',$result->KOTA_CUSTOMER);
				$this->session->set_userdata('notelp',$result->NO_TELP_CUSTOMER);
				redirect('Controller');
			}
		}
		else $this->load->view('login',$passing);
	}
	
	public function register()
	{
		$passing['message'] = '';
		if($this->input->post('Register'))
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$email = $this->input->post('email');
			$name = $this->input->post('name');
			$alamat = $this->input->post('adrress');
			$kota = $this->input->post('city');
			$notelp = $this->input->post('phone');
			$this->mc->register($username,$password,$email,$name,$alamat,$kota,$notelp);
		}
		else $this->load->view('register',$passing);
	}
	
	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('user');
		$this->session->unset_userdata('alamat');
		$this->session->unset_userdata('kota');
		$this->session->unset_userdata('notelp');
		redirect('Controller');
	}
	
}
