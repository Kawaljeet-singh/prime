<?php

class Fee_model extends CI_Model
{
    public function getall_fee_info()
    {
        $this->db->select('*');
        $this->db->from('tbl_fee');
        $this->db->order_by('fee_id','DESC');
        $info = $this->db->get();
        return $info->result();
    }
    public function getpending_fee_info()
    {
        $this->db->select('*');
        $this->db->from('tbl_fee');
        $this->db->order_by('fee_id','DESC');
        $this->db->where('fee_status >','0');
        $info = $this->db->get();
        return $info->result();
    }
	public function save_fee_info($data)
    {
		$this->db->set('fee_uuid', 'UUID()', FALSE);
        $this->db->insert('tbl_fee', $data);
		return $this->db->insert_id();
    }
    public function student_info($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_student');
        $this->db->join('tbl_fee','tbl_fee.fee_stu_id=tbl_student.stu_uid');
        $this->db->where(array('stu_id'=> $id,'stu_status'=>'1'));
        $info = $this->db->get();
        return $info->row();
    }
    public function student_info_byid($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_student');
        $this->db->join('tbl_fee','tbl_fee.fee_stu_id=tbl_student.stu_uid');
        $this->db->where(array('stu_uid'=> $id,'stu_status'=>'0'));
        $info = $this->db->get();
        return $info->row();
    }
    public function fee_update($data,$id)
    {
        
        $this->db->where('fee_uuid', $id);
        return $this->db->update('tbl_fee', $data);
    }
    	public function fee_log($data)
    {
		$this->db->set('flog_uid', 'UUID()', FALSE);
        $this->db->insert('tbl_fee_log', $data);
		return $this->db->insert_id();
    }
    public function getfee_info($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_student');
        $this->db->join('tbl_fee','tbl_fee.fee_stu_id=tbl_student.stu_uid');
        $this->db->where('stu_uid', $id);
        $info = $this->db->get();
        return $info->row();
    }
    public function getfee_detail($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_fee_log');
        $this->db->where('flog_stu_id',$id);
        $info = $this->db->get();
        return $info->result();
    }
     public function getname($id)
    {
       $op = $this;
   $op->db->select('*');
   $op->db->where('stu_uid',$id);
   $op->db->from('tbl_student');
   $res = $op->db->get();
   $result =  $res->row();
   echo $result->stu_fname.'&nbsp;'.$result->stu_lname; 
        
    }
    public function edit_stock_info($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_brand');
        $this->db->where('brand_id', $id);
        $info = $this->db->get();
        return $info->row();
    }
    public function updatecount($id)
    {
  	$this->db->set('st_quantity', 'st_quantity-1', FALSE);        
    $where = array('st_uid' =>$id);
    $this->db->where($where);
    $this->db->update('tbl_stock');
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

  

}
