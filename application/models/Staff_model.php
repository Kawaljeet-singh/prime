<?php

class Staff_model extends CI_Model
{

   

    public function getall_teacher_info()
    {
        $dat=array("s_status"=>"1","s_designation"=>"2");
        $this->db->select('*');
        $this->db->from('tbl_staff');
        $this->db->where($dat);
        $info = $this->db->get();
        return $info->result();
    }
	public function save_teacher_info($data)
    {
		$this->db->set('staff_uid', 'UUID()', FALSE);
         $this->db->insert('tbl_staff', $data);
		return $this->db->insert_id();
    }
    public function view_teacher_info($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_staff');
        $this->db->where('staff_uid', $id);
        $info = $this->db->get();
        return $info->row();
    }
    public function getall_schedule_info($id)
    {
        $dat=array("sch_status"=>"1","sch_user_id"=>$id);
        $this->db->select('*');
        $this->db->from('tbl_schedule');
        $this->db->join('tbl_courses','tbl_schedule.sch_course_id=tbl_courses.cr_uuid');
        $this->db->where($dat);
        $info = $this->db->get();
        return $info->result();
    }
    public function delete_brand_info($id)
    {
        $this->db->where('brand_id', $id);
        return $this->db->delete('tbl_brand');
    }

    public function update_brand_info($data, $id)
    {
        $this->db->where('brand_id', $id);
        return $this->db->update('tbl_brand', $data);
    }

    public function published_brand_info($id)
    {
        $this->db->set('publication_status', 1);
        $this->db->where('brand_id', $id);
        return $this->db->update('tbl_brand');
    }

    public function unpublished_brand_info($id)
    {
        $this->db->set('publication_status', 0);
        $this->db->where('brand_id', $id);
        return $this->db->update('tbl_brand');
    }

}
