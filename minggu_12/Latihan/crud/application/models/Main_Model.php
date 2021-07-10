<?php
class Main_Model extends CI_Model
{
	function view_by_id($table = '', $condition = '', $row = 'row')
    {
        if ($row == 'row') {
            if ($condition) {
                return $this->db->where($condition)->get($table)->row();
            } else {
                return $this->db->get($table)->row();
            }
        } else {
            if ($condition) {
                return $this->db->where($condition)->get($table)->result();
            } else {
                return $this->db->get($table)->result();
            }
        }
    }

    function process_data($table = '', $data = '', $condition = '')
    {
        if ($condition) {
            $this->db->where($condition)->update($table, $data);
        } else {
            $this->db->insert($table, $data);
        }
        return $this->db->affected_rows();
    }
}