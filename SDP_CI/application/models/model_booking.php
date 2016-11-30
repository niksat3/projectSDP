<?php
    class model_booking extends CI_Model{
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        public function delete($id){
            $this->db->where('ID_BOOKING',$id);
			$this->db->delete('booking');
        }
        public function update($id_booking,$id_customer,$id_meja,$tanggal_booking,$qty){
            $this->db->where('ID_BOOKING',$id_booking);
            $this->db->update('booking',array(
                'ID_CUSTOMER' => $id_customer,
                'ID_MEJA' => $id_meja,
                'TANGGAL_BOOKING' => date('Y-m-d H:i:s', strtotime($tanggal_booking)),
                'QTY' => $qty
            ));
        }
        public function insert($id_customer,$id_meja,$tanggal_booking,$qty){
            $this->db->insert('booking',array(
				'ID_BOOKING' => '',
                'ID_CUSTOMER' => $id_customer,
                'ID_MEJA' => $id_meja,
                'TANGGAL_BOOKING' => date('Y-m-d H:i:s', strtotime($tanggal_booking)),
                'QTY' => $qty
            ));
        }
        public function fetch_all(){
            return $this->db->get_where('customer',array('STATUS_CUSTOMER'=>1))->result();
        }
        public function get($id){
            return $this->db->where('ID_CUSTOMER',$id)->get('customer')->row();
        }
    }

?>