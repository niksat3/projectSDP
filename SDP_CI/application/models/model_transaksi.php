<?php
    class model_transaksi extends CI_Model{
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        public function fetch_all_h(){
            return $this->db->get('h_transaksi')->result();
        }
        public function fetch_all_d(){
            return $this->db->get('d_transaksi')->result();
        }
        public function delete($id){
            $this->db->where('ID_PROMO',$id);
            $this->db->update('promo',array(
                'STATUS_PROMO' => 0
            ));
        }
        public function update($id,$nama,$deskripsi,$potharga,$idmenu){
            $this->db->where('ID_PROMO',$id)->update('promo',array(
                'NAMA_PROMO' => $nama,
                'DESKRIPSI_PROMO' => $deskripsi,
                'POTONGAN_HARGA' => $potharga,
                'ID_MENU' => $idmenu
            ));
        }
        public function insert($nama,$harga,$deskripsi,$idmenu){
            $this->db->insert('promo',array(
                'NAMA_PROMO' => $nama,
                'DESKRIPSI_PROMO' => $deskripsi,
                'POTONGAN_HARGA' => $harga,
                'ID_MENU' => $idmenu,
                'STATUS_PROMO' => 1
            ));
        }
        public function get_d($id){
            return $this->db->where('ID_TRANSAKSI',$id)->get('d_transaksi')->result();
        }
        public function get_h($id){
            return $this->db->where('ID_TRANSAKSI',$id)->get('h_transaksi')->row();
        }
        public function get_h_where_customer($id){
			$today = date('y-m-d');
			$beforetoday = Date('y-m-d', strtotime("-7 days"));
            return $this->db->where('ID_CUSTOMER',$id)->where('TANGGAL_TRANSAKSI >= ',$beforetoday)->get('h_transaksi')->result();
        }
    }

?>