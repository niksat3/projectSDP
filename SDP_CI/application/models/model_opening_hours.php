<?php
    class model_opening_hours extends CI_Model{
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        public function update($id,$day,$time,$show,$status){
            $this->db->where('ID_OPENING_HOURS',$id);
            $this->db->update('opening_hours',array(
                'DAY_OPENED' => $day,
                'TIME_OPENED' => $time,
				'SHOW_OPENING_HOURS' => $show,
				'STATUS' => $status
            ));
        }
        public function fetch_all_show(){
            return $this->db->where('STATUS',1)->where('SHOW_OPENING_HOURS',1)->get('opening_hours')->result();
        }
        public function fetch_all(){
            return $this->db->where('STATUS',1)->get('opening_hours')->result();
        }
        public function get($id){
            return $this->db->where('ID_OPENING_HOURS',$id)->get('opening_hours')->row();
        }
    }

?>