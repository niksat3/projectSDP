<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_content_website','mcw');
		$this->load->model('model_gallery','mg');
		$this->load->model('model_gallery_home','mgh');
		$this->load->model('model_opening_hours','moh');
		$this->load->model('model_kategori','mk');
		$this->load->model('model_menu','mn');
		$this->load->model('model_customer','mc');
		$this->load->model('model_booking','mb');
		$this->load->model('model_transaksi','mt');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('cart');
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
		$passing['gallery_home'] = $this->mgh->fetch_all_show();
		$passing['ico'] = $this->mcw->get('ICON')->ISI_CONTENT;
		$this->load->view("home",$passing);
	}
	
	public function about()
	{
		$passing['galrandom'] = $this->mgh->get_random();
		$passing['header'] = $this->mcw->get('ABOUT_HEADER')->ISI_CONTENT;
		$passing['content'] = $this->mcw->get('ABOUT_CONTENT')->ISI_CONTENT;
		$passing['opendays'] = $this->moh->fetch_all();
		$passing['ico'] = $this->mcw->get('ICON')->ISI_CONTENT;
		$this->load->view('about',$passing);
	}
	
	public function menu()
	{
		$passing['galrandom'] = $this->mgh->get_random();
		$passing['kategori'] = $this->mk->fetch_all();
		$passing['menu'] = $this->mn->fetch_all();
		$passing['message'] = '';
		$passing['ico'] = $this->mcw->get('ICON')->ISI_CONTENT;
		$this->load->view('menu',$passing);
	}
	
	public function order()
	{
		if(!$this->session->userdata('user')) redirect('Controller');
		$passing['kategori'] = $this->mk->fetch_all();
		$passing['menu'] = $this->mn->fetch_all();
		$passing['message'] = '';
		$passing['ico'] = $this->mcw->get('ICON')->ISI_CONTENT;
		if($this->input->post('AddToCart'))
		{
			$id = $this->input->post('id_menu');
			$qty = $this->input->post('order');
			$price = $this->input->post('harga_menu');
			$name = $this->input->post('nama_menu');
			$link = $this->input->post('link_picture');
			$deskripsi = $this->input->post('deskripsi');
			$data = array(
				'id' => $id,
				'qty' => $qty,
				'price' => $price,
				'name' => $name,
				'options' => array('link_picture'=>$link,'deskripsi'=>$deskripsi)
			);
			if($this->cart->insert($data))
				$this->session->set_flashdata('insert','success');
			else
				$this->session->set_flashdata('insert','failed');
		}
		$this->load->view('order',$passing);
	}
	
	public function orderhistory()
	{
		$passing['ico'] = $this->mcw->get('ICON')->ISI_CONTENT;
		$passing['htrans'] = $this->mt->get_h_where_customer($this->session->userdata('id'));
		$this->load->view('orderhistory',$passing);
	}
	
	public function gallery()
	{
		$counter = 0;
		$passing['gallery'] = array();
		$passing['ico'] = $this->mcw->get('ICON')->ISI_CONTENT;
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
		$passing['galrandom'] = $this->mgh->get_random();
		$passing['ico'] = $this->mcw->get('ICON')->ISI_CONTENT;
		$this->load->view('events',$passing);
	}
	
	public function reservation()
	{
		$passing['galrandom'] = $this->mgh->get_random();
		if(!$this->session->userdata('user')) redirect('Controller');
		$passing['ico'] = $this->mcw->get('ICON')->ISI_CONTENT;
		$this->load->view('reservation',$passing);
	}
	
	public function contact()
	{
		$passing['galrandom'] = $this->mgh->get_random();
		$passing['ico'] = $this->mcw->get('ICON')->ISI_CONTENT;
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
		$passing['galrandom'] = $this->mgh->get_random();
		$passing['ico'] = $this->mcw->get('ICON')->ISI_CONTENT;
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
		$passing['galrandom'] = $this->mgh->get_random();
		$passing['ico'] = $this->mcw->get('ICON')->ISI_CONTENT;
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
		$this->load->view('register',$passing);
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
		$this->cart->destroy();
		redirect('Controller');
	}
	
	public function cart()
	{
		$passing['ico'] = $this->mcw->get('ICON')->ISI_CONTENT;
		$passing['kategori'] = $this->mk->fetch_all();
		$passing['menu'] = $this->mn->fetch_all();
		$passing['message'] = '';
		if($this->input->post('checkout'))
		{
			$this->cart->destroy();
			redirect('Controller/order');
		}
		$this->load->view('cart',$passing);
	}
	
}
