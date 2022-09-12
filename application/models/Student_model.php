<?php

class Student_model extends CI_Model
{
    public function getall_student_info($id)
    {
        $this->db->select('*,SUM(fee_fees) AS paid');
        $this->db->from('tbl_student');
        $this->db->join('tbl_enrollment','tbl_enrollment.en_stu_uuid=tbl_student.stu_uid');
        $this->db->join('tbl_fee','tbl_fee.fee_stu_id=tbl_student.stu_uid');
        $this->db->where(array('tbl_student.stu_interest'=>'3','tbl_student.stu_status'=>$id));
        $this->db->order_by('stu_id','DESC');
        $this->db->group_by('stu_id');
        $info = $this->db->get();
        return $info->result();
    }
    
    public function getall_visa_info()
    {
        $this->db->select('*');
        $this->db->from('tbl_student');
        $this->db->join('tbl_visa','tbl_visa.visa_stu_uid=tbl_student.stu_uid');
        $this->db->where(array('tbl_student.stu_interest'=>'4','tbl_student.stu_status'=>'0'));
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
    public function student_info($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_student');
          $this->db->where(array('stu_uid'=> $id,'stu_status'=>'0'));
        $info = $this->db->get();
        return $info->row();
    }
		 public function study_info($id)
		 {
			$this->db->select('*');
			$this->db->from('tbl_enrollment');
			$this->db->where(array('tbl_enrollment.en_stu_uuid'=> $id));
			$this->db->join('tbl_courses','tbl_enrollment.en_course=tbl_courses.cr_uuid');
			$this->db->join('tbl_batch','tbl_enrollment.en_batch=tbl_batch.bt_uuid');
			$this->db->join('tbl_duration','tbl_enrollment.en_duration=tbl_duration.due_uuid');
			$this->db->join('tbl_schedule','tbl_enrollment.en_class_id=tbl_schedule.sch_uuid');
			
		  return $this->db->get()->result();
		 }
    function fetch_batch($id)
    {
     $this->db->where('bt_course_id', $id);
     $query = $this->db->get('tbl_batch');
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
