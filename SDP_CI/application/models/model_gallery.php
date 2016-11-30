<?php
    class model_gallery extends CI_Model{
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        public function update($id,$isi,$show){
            $this->db->where('ID_CONTENT',$id);
            $this->db->update('gallery',array(
                'ISI_CONTENT' => $isi,
                'SHOW_CONTENT' => $show
            ));
        }
        public function fetch_all_show(){
            return $this->db->where('STATUS',1)->where('SHOW_GALLERY',1)->get('gallery')->result();
        }
        public function fetch_all(){
            return $this->db->where('STATUS',1)->get('gallery')->result();
        }
        public function get($id){
            return $this->db->where('ID_GALLERY',$id)->get('gallery')->row();
        }
    }

?>