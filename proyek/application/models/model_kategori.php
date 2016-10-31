<?php
    class model_kategori extends CI_Model{
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        public function insert($nama){
            $this->db->insert('kategori',array(
                'NAMA_KATEGORI' => $nama
            ));
        }
        public function delete($id){
            $this->db->delete('kategori',array(
                'ID_KATEGORI' => $id
            ));
        }
        public function fetch_all(){
            return $this->db->get('kategori')->result();
        }
    }

?>