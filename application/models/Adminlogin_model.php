<?php

class Adminlogin_Model extends CI_Model
{
    public function admin_login_check($data)
    {
        $this->db->select('*');
        $this->db->from('prime_login');
        $this->db->join('tbl_staff', 'tbl_staff.staff_uid=prime_login.uuid');
        $this->db->where($data);
        $info          = $this->db->get();
        return $result = $info->row();
    }
}
