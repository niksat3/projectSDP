<?php
    class model_gallery_home extends CI_Model{
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        public function update($id,$isi,$show){
            $this->db->where('ID_CONTENT',$id);
            $this->db->update('gallery_home',array(
                'ISI_CONTENT' => $isi,
                'SHOW_CONTENT' => $show
            ));
        }
        public function fetch_all_show(){
            return $this->db->where('STATUS',1)->where('SHOW_GALLERY_HOME',1)->get('gallery_home')->result();
        }
        public function fetch_all(){
            return $this->db->where('STATUS',1)->get('gallery_home')->result();
        }
        public function get($id){
            return $this->db->where('ID_GALLERY_HOME',$id)->get('gallery_home')->row();
        }
		public function count_all(){
			return $this->db->count_all_results();
		}
		public function get_random(){
			$random = rand(0,$this->count_all());
			$counter = 0;
			foreach($this->fetch_all_show() as $fetch)
			{
				if($counter==$random)
				{
					return $fetch;
				}
				$counter++;
			}
		}
    }

?>