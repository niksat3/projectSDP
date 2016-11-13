<?php
	class dashboard extends CI_Controller{
		public function __construct(){
			parent::__construct();
			if(!$this->session->userdata('username')){
			    redirect('adminlogin','refresh');
            }
		}
		public function logout(){
		    $this->session->sess_destroy();
            redirect('adminlogin','refresh');
        }
		public function index(){
		    $this->session->set_userdata('mode','index');
			$this->load->view('dashboard/template');
		}
		public function viewCustomer(){
            $this->load->model('model_customer');
            $data['tambahan'] = $this->model_customer->fetch_all();
            $this->session->set_userdata('mode','customer');
            $this->load->view('dashboard/template',$data);
        }
        public function viewKategori(){
            $this->load->model('model_kategori');
            $data['tambahan'] = $this->model_kategori->fetch_all();
            $this->session->set_userdata('mode','kategori');
            $this->load->view('dashboard/template',$data);
        }
        public function viewMenu(){
            $this->load->model('model_menu');
            $this->load->model('model_kategori');
            $menu = $this->model_menu->fetch_all();
            $kategori= $this->model_kategori->fetch_all();
            //
            $tmpl = array(
                'table_open' => '<table class="table table-hover table-striped">'
            );
            $this->table->set_template($tmpl);
            $this->table->set_heading('Gambar','Nama Menu','Kategori','Harga','Deskripsi','Konfigurasi');
            foreach($menu as $r){
                $kat = $this->model_kategori->get($r->ID_KATEGORI);
                $this->table->add_row('<img src="'.base_url('menuimg/'.$r->ID_MENU.'.jpg?'.rand(0,999)).'" width=100 height=100></img>',$r->NAMA_MENU,$kat->NAMA_KATEGORI,$r->HARGA,$r->DESKRIPSI,form_open('dashboard/menu').form_hidden('id',$r->ID_MENU).form_button('delete','Delete',array('class'=>'btn btn-primary','onclick'=>'confirmbox('.$r->ID_MENU.')')).form_submit('edit','Edit',array(
                        'class' => 'btn btn-primary'
                    )).form_close());
            }
            $data['tambahan'] = $this->table->generate();
            $this->session->set_userdata('mode','menu');
            $this->load->view('dashboard/template',$data);
        }
        public function sendEmail(){
            $this->load->model('model_email');
            $this->model_email->sendEmail('tancejang@gmail.com','effendy','asd7f89a7sd98f79adsas8df798dsa7f9');
        }
        public function verification($user,$authkey){
            $this->load->model('model_customer');
            $this->model_customer->verification($user,$authkey);
        }
        public function menu(){
            if($this->input->post('edit')){
                $data['id'] = $this->input->post('id');
                $this->session->set_userdata('insert',FALSE);
                $this->session->set_userdata('mode','insertMenu');
                $this->load->model('model_menu');
                $this->load->model('model_kategori');
                $data['tambahan'] = array(
                    'menu' => $this->model_menu->get($data['id']),
                    'kategori' => $this->model_kategori->fetch_all()
                );
                $this->load->view('dashboard/template',$data);
            }
            else if($this->input->post('update')){
                $id = $this->input->post('id');
                $id_kat = $this->input->post('id_kat');
                $harga = $this->input->post('harga');
                $nama = $this->input->post('nama');
                $deskripsi = $this->input->post('deskripsi');
				//testupload
				$config['upload_path'] = './menuimg/';
				$config['allowed_types'] = 'jpg';
				$config['max_size']	= '50000';
				$config['max_width']  = '10025';
				$config['max_height']  = '10025';
				$config['file_name'] = $this->input->post('id');
				$config['overwrite'] = TRUE;
				//$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if(!$this->upload->do_upload('gmbr'))
				{
					$this->session->set_flashdata('err',$this->upload->display_errors());
					redirect('dashboard/viewInsertMenu','refresh');
				}
				else{
					$this->load->model('model_menu');
					$this->model_menu->update($id,$id_kat,$nama,$harga,$deskripsi);
				}
                redirect('dashboard/viewMenu','refresh');
            }
            else if($this->input->post('insert')){
                $id_kat = $this->input->post('id_kat');
                $harga = $this->input->post('harga');
                $nama = $this->input->post('nama');
                $deskripsi = $this->input->post('deskripsi');
				//testupload
				$config['upload_path'] = './menuimg/';
				$config['allowed_types'] = 'jpg';
				$config['max_size']	= '50000';
				$config['max_width']  = '10025';
				$config['max_height']  = '10025';
				$config['file_name'] = $this->input->post('id');
				$config['overwrite'] = TRUE;
				//$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if(!$this->upload->do_upload('gmbr'))
				{
					$this->session->set_flashdata('err',$this->upload->display_errors());
					redirect('dashboard/viewInsertMenu','refresh');
				}
				else{
					$this->load->model('model_menu');
					$this->model_menu->insert($id_kat,$nama,$harga,$deskripsi);
				}
                redirect('dashboard/viewMenu','refresh');
            }
        }
        public function viewPromo(){
            $this->load->model('model_promo');
            $data['tambahan'] = $this->model_promo->fetch_all();
            $this->session->set_userdata('mode','promo');
			$this->load->model('model_menu');
            $this->load->view('dashboard/template',$data);
        }
		public function promo(){
			
			$this->load->model('model_promo');
			$this->load->model('model_menu');
			if($this->input->post('edit')){
                $data['id'] = $this->input->post('id');
                $this->session->set_userdata('insert',FALSE);
                $this->session->set_userdata('mode','insertPromo');
                $data['tambahan'] = $this->model_promo->get($data['id']);
                $this->load->view('dashboard/template',$data);
            }else if($this->input->post('update')){
                $id = $this->input->post('id');
                $nama = $this->input->post('nama');
                $deskripsi = $this->input->post('deskripsi');
                $potharga = $this->input->post('potharga');
                $idmenu = $this->input->post('idmenu');
                $name = $this->input->post('nama');
                $this->model_promo->update($id,$nama,$deskripsi,$potharga,$idmenu);
                redirect('dashboard/viewPromo','refresh');
            }
            else if($this->input->post('insert')){
                $id = $this->input->post('id');
                $nama = $this->input->post('nama');
                $deskripsi = $this->input->post('deskripsi');
                $potharga = $this->input->post('potharga');
                $idmenu = $this->input->post('idmenu');
				$this->model_promo->insert($nama,$potharga,$deskripsi,$idmenu);
                redirect('dashboard/viewPromo','refresh');
            }
		}
        public function viewCourier(){
            $this->session->set_userdata('mode','courier');
            $this->load->view('dashboard/template');
        }
		public function editCustomer($kode){
			if($this->input->post('update')){
				$this->load->model('model_customer');
				$id = $this->input->post('id');
				$name = $this->input->post('nama');
				$alamat = $this->input->post('alamat');
				$kota = $this->input->post('kota');
				$notelp = $this->input->post('notelp');
				$this->model_customer->update($id,$name,$alamat,$kota,$notelp);
				redirect('dashboard/viewCustomer','refresh');
			}
			else{
				$this->load->model('model_customer');
				$data['tambahan'] = $this->model_customer->get($kode);
				$this->session->set_userdata('mode','editCust');
				$this->load->view('dashboard/template',$data);
			}
		}
        public function category(){
            if($this->input->post('edit')){
                $data['id'] = $this->input->post('id');
                $this->session->set_userdata('insert',FALSE);
                $this->session->set_userdata('mode','insertKategori');
                $this->load->model('model_kategori');
                $data['tambahan'] = $this->model_kategori->get($data['id']);
                $this->load->view('dashboard/template',$data);
            }else if($this->input->post('update')){
                $id = $this->input->post('id');
                $name = $this->input->post('nama');
                $this->load->model('model_kategori');
                $this->model_kategori->update($id,$name);
                redirect('dashboard/viewKategori','refresh');
            }
            else if($this->input->post('insert')){
                $nama = $this->input->post('nama');
                if($nama != "") {
                    $this->load->model('model_kategori');
                    $this->model_kategori->insert($nama);
                }
                redirect('dashboard/viewKategori','refresh');
            }
        }

        public function customer(){
            if($this->input->post('edit')){
				redirect('dashboard/editCustomer/'.$this->input->post('id'),'refresh');
                //$this->load->view('dashboard/template',$data);
            }else if($this->input->post('update')){

                redirect('dashboard/viewCustomer','refresh');
            }
            else if($this->input->post('insert')){

                redirect('dashboard/viewCustomer','refresh');
            }
        }
        public function viewSuccessVerification(){
            $this->load->view('dashboard/successverification');
        }
        public function delete($id)
        {
            $this->load->model('model_'.$this->session->userdata('mode'),'foo');
            $this->foo->delete($id);
            redirect('dashboard/view'.$this->session->userdata('mode'),'refresh');

        }
		public function viewInsertPromo(){

            $this->session->set_userdata('mode','insertPromo');
            $this->session->set_userdata('insert',TRUE);
            $this->load->model('model_promo');
			$this->load->model('model_menu');
			$data['tambahan'] = $this->model_promo->getNewData();
            $this->load->view('dashboard/template',$data);
        }
        public function viewInsertKategori(){

            $this->session->set_userdata('mode','insertKategori');
            $this->session->set_userdata('insert',TRUE);
            $this->load->model('model_kategori');
            $data['id'] = $this->model_kategori->getlastID()->ID_KATEGORI+1;
            $data['tambahan'] = new stdClass();
            $data['tambahan']->ID_KATEGORI = $data['id'];
            $data['tambahan']->NAMA_KATEGORI = "";
            $this->load->view('dashboard/template',$data);
        }
        public function viewInsertMenu(){

            $this->session->set_userdata('mode','insertMenu');
            $this->session->set_userdata('insert',TRUE);
            $this->load->model('model_menu');
            $this->load->model('model_kategori');
            $data['tambahan'] = array(
                'menu' => $this->model_menu->getNewData(),
                'kategori' => $this->model_kategori->fetch_all()
            );
            $this->load->view('dashboard/template',$data);
        }
	}

?>