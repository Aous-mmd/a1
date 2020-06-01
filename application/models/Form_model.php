<?php
class Form_model extends CI_Model
{
    function creat($data) {
        return $this->db->insert('order', $data);
    }
    function get_all() {
        return $this->db->get('order')->result_array();
    }
    function read($id) {
        return $this->db->get_where('order', array('id'=>$id));
    }
    function update($id,$data) {
        
    }
    function delete($id) {
        
    }
}