<?php

class Walkins_model extends CI_Model
{
    public function getall_walkins_info()
    {
        $this->db->select('*');
        $this->db->from('tbl_student');
        $this->db->where('stu_status','0');
        $this->db->order_by('stu_id','DESC');
        $info = $this->db->get();
        return $info->result();
    }
	public function save_walkins_info($data)
    {
		$this->db->set('stu_uid', 'UUID()', FALSE);
         $this->db->insert('tbl_student', $data);
		return $this->db->insert_id();
    }
    public function update_walkins_info($data,$id)
    {
		$this->db->where('stu_uid', $id);
        return $this->db->update('tbl_student', $data);
    }
    public function save_enroll_info($data)
    {
		$this->db->set('en_uuid', 'UUID()', FALSE);
         $this->db->insert('tbl_enrollment', $data);
		return $this->db->insert_id();
    }
    public function save_visa_info($data)
    {
		$this->db->set('visa_uuid', 'UUID()', FALSE);
         $this->db->insert('tbl_visa', $data);
		return $this->db->insert_id();
    }
    public function walkins_info($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_student');
        $this->db->where(array('stu_uid'=> $id,'stu_status'=>'0'));
        $info = $this->db->get();
        return $info->row();
    }
    public function stu_item($arr)
    {
        $this->db->set('log_uuid', 'UUID()', FALSE);
        return $this->db->insert('tbl_logbook',$arr);
    }
    function fetch_batch($id)
    {
     $this->db->where('bt_course_id', $id);
     $query = $this->db->get('tbl_batch');
     return $query->result();
    }
    function fetch_schedule($id)
    {
     $this->db->where('sch_course_id', $id);
     $query = $this->db->get('tbl_schedule');
     return $query->result();
    }
    function fetch_duration($id)
    {
     $this->db->where('due_batch', $id);
     $query = $this->db->get('tbl_duration');
     return $query->result();
    }   
    function fetch_fee($id)
    {
     $this->db->where('due_uuid', $id);
     $query = $this->db->get('tbl_duration');
     return $query->row();
    }
  

}
