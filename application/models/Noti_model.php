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
	 public function add_attachment($data)
    {
        $this->db->set('attach_uid', 'UUID()', FALSE);
        $this->db->insert('tbl_attachment', $data);
		$id=$this->db->insert_id();
		  
	   $this->db->select('attach_uid');
	   $this->db->where('attach_id',$id);
	   $this->db->from('tbl_attachment');
	   $res = $this->db->get();
	   $result =  $res->row();
	  return $result->attach_uid;
	}
}
