<?php

class Noti_model extends CI_Model
{
    public function getall_noti()
    {
        $this->db->select('*');
        $this->db->from('tbl_notification');
        $this->db->join('tbl_staff','tbl_notification.noti_created_by=tbl_staff.staff_uid','LEFT');
        $this->db->order_by('noti_id','DESC');
        $info = $this->db->get();
        return $info->result();
    }
    
    public function viewall_noti($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_notification');
        $this->db->join('tbl_staff','tbl_notification.noti_created_by=tbl_staff.staff_uid','LEFT');
        $this->db->where('noti_created_by',$id);
        $this->db->order_by('noti_id','DESC');
        $info = $this->db->get();
        return $info->result();
    }
}
