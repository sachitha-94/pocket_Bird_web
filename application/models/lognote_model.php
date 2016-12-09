<?php
class lognote_model extends CI_Model  {

    public function user_insert($data) {

        $this->db->insert('users', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }

    }

    public function get_lognote(){
        $query = $this->db->where("note_ID",1);
        $query = $this->db->get("log_note_detail");
        return $query->result();
    }
}
?>