<?php

class Booking_model extends CI_Model{
    public function getBooking($id = null){
        if($id === null){
            return $this->db->get('booking')->result_array();
        }else{
            return $this->db->get_where('booking', ['id' => $id])->result_array();
        }
    }

    public function deleteBooking($id){
        $this->db->delete('booking', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function createBooking($data){
        $this->db->insert('booking', $data);
        return $this->db->affected_rows();
    }
    
    public function updateBooking($data, $id){
        $this->db->update('booking', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }
}

?>