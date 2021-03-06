<?php
    class model_content_website extends CI_Model{
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        public function update($id,$isi,$show){
            $this->db->where('ID_CONTENT',$id);
            $this->db->update('content_website',array(
                'ISI_CONTENT' => $isi,
                'SHOW_CONTENT' => $show
            ));
        }
        public function fetch_all(){
            return $this->db->get('content_website')->result();
        }
        public function get($id){
            return $this->db->where('ID_CONTENT',$id)->get('content_website')->row();
        }
    }

?>