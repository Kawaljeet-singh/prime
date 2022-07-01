<?php

class Dashboard_model extends CI_Model
{

    public function get_stock()
    {
        $this->db->select('*');
        $this->db->from('tbl_stock');
        $this->db->where('st_active','1');
        $this->db->order_by('st_id ', 'DESC');
        $this->db->limit(5);
        $info = $this->db->get();
        return $info->result();
    }
    public function get_counselor()
    {
        $data=array("s_status"=>'1',"s_designation"=>"2");
        $this->db->select('*');
        $this->db->from('tbl_staff');
        $this->db->order_by('staff_id ', 'DESC');
        $this->db->where($data);
        $this->db->limit(5);
        $info = $this->db->get();
        return $info->result();
    }
	public function save_teacher_info($data)
    {
		$this->db->set('staff_uid', 'UUID()', FALSE);
         $this->db->insert('tbl_staff', $data);
		return $this->db->insert_id();
    }
    public function edit_brand_info($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_brand');
        $this->db->where('brand_id', $id);
        $info = $this->db->get();
        return $info->row();
    }
    public function system($id)
    {
        $this->db->where('sc_type', $id);
        $info=$this->db->get('tbl_system_config');
        return $info->result();
    }
    public function total_walkin()
    {
        $query = $this->db->query('SELECT * FROM tbl_student');
        return $query->num_rows();
    }
    public function total_enroll()
    {
        $query = $this->db->query('SELECT * FROM tbl_student where stu_status=0');
        return $query->num_rows();
    }
     public function today()
    {
        $date = new DateTime("now");
        $curr_date = $date->format('Y-m-d ');
        
        $this->db->select('*');
        $this->db->where('DATE(stu_create_date)',$curr_date);
        $this->db->from('tbl_student');
        $info = $this->db->get();
        return $info->num_rows();
    }
      public function month()
    {
        $date = new DateTime("now");
        $curr_date = $date->format('Y-m-d ');
        $this->db->select('*');
        $this->db->where('MONTH(tbl_student.stu_create_date)', date('m'));
        $this->db->from('tbl_student');
        $info = $this->db->get();
        return $info->num_rows();
    }
      public function year()
    {
        $date = new DateTime("now");
        $curr_date = $date->format('Y-m-d ');
        $this->db->select('*');
        $this->db->where('YEAR(tbl_student.stu_create_date)', date('Y'));
        $this->db->from('tbl_student');
        $info = $this->db->get();
        return $info->num_rows();
    }

     public function stu_chart()
    {
        $this->db->select('*,COUNT(tbl_student.stu_status) as cs');
        $this->db->group_by('year(tbl_student.stu_create_date)');
        $this->db->from('tbl_student');
        $info = $this->db->get();
        return $info->result();
    }
    public function stu_mnth()
    {
        $this->db->select('*,COUNT(tbl_student.stu_status) as cs');
        $this->db->where('MONTH(tbl_student.stu_create_date)', date('m'));
        $this->db->group_by('DATE(tbl_student.stu_create_date)');
        $this->db->from('tbl_student');
        $info = $this->db->get();
        return $info->result();
    }
    public function stu_six_mnth()
    {
        $this->db->select('*,COUNT(tbl_student.stu_status) as cs');
        $this->db->where('DATE(tbl_student.stu_create_date) >=', date('m-6'));
        $this->db->group_by('DATE(tbl_student.stu_create_date)');
        $this->db->from('tbl_student');
        $info = $this->db->get();
        return $info->result();
    }
    public function stu_year()
    {
        $this->db->select('*,COUNT(tbl_student.stu_status) as cs');
        $this->db->where('DATE(tbl_student.stu_create_date) >=', date('m-12'));
        $this->db->group_by('DATE(tbl_student.stu_create_date)');
        $this->db->from('tbl_student');
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
