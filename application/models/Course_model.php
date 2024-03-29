<?php

class Course_model extends CI_Model
{
    public function getall_course()
    {
        $this->db->select('*');
        $this->db->from('tbl_courses');
        $this->db->where('cr_status','1');
        $info = $this->db->get();
        return $info->result();
    }
    public function getall_batch()
    {
        $this->db->select('*');
        $this->db->from('tbl_batch');
        $this->db->join('tbl_courses','tbl_courses.cr_uuid=tbl_batch.bt_course_id');
        $this->db->where('tbl_batch.bt_status',1);
        $info = $this->db->get();
        return $info->result();
    }
    public function getall_duration()
    {
        $this->db->select('*');
        $this->db->from('tbl_duration');
		$this->db->where('due_status','1');
        $info = $this->db->get();
        return $info->result();
    }
  public function get_schedule()
    {
        $this->db->select('*');
        $this->db->from('tbl_courses');
        $this->db->join('tbl_batch','tbl_courses.cr_uuid=tbl_batch.bt_course_id');
        $this->db->join('tbl_duration','tbl_batch.bt_uuid=tbl_duration.due_batch');
        $this->db->where('tbl_batch.bt_status',1);
        $info = $this->db->get();
        return $info->result();
    }
    public function save_course($data)
    {
		$this->db->set('cr_uuid', 'UUID()', FALSE);
         $this->db->insert('tbl_courses', $data);
		return $this->db->insert_id();
    }
    public function save_batch($data)
    {
		$this->db->set('bt_uuid', 'UUID()', FALSE);
         $this->db->insert('tbl_batch', $data);
		return $this->db->insert_id();
    }
    public function save_duration($data)
    {
		$this->db->set('due_uuid', 'UUID()', FALSE);
         $this->db->insert('tbl_duration', $data);
		return $this->db->insert_id();
    }
     public function save_schedule($data)
    {
		$this->db->set('sch_uuid', 'UUID()', FALSE);
         $this->db->insert('tbl_schedule', $data);
		return $this->db->insert_id();
    }
	public function addstu_cource($id){  
	$this->db->where('sch_uuid', $id);
	$this->db->set('sh_left_stu', 'sh_left_stu + 1', FALSE);
	$this->db->update('tbl_schedule');
	}
    public function deactive_cource($id)
    {
        $this->db->set('cr_status', 0);
        $this->db->where('cr_uuid', $id);
        return $this->db->update('tbl_courses');
    }

    public function deactive_batch($id)
    {
        $this->db->set('bt_status', 0);
        $this->db->where('bt_uuid', $id);
        return $this->db->update('tbl_batch');
    }
	public function deactive_due($id)
    {
        $this->db->set('due_status', 0);
        $this->db->where('due_uuid', $id);
        return $this->db->update('tbl_duration');
    }
}
