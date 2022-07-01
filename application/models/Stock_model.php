<?php

class Stock_model extends CI_Model
{
    public function getall_stock_info()
    {
        $this->db->select('*');
        $this->db->from('tbl_stock');
        $this->db->where('st_active','1');
        $info = $this->db->get();
        return $info->result();
    }
	public function save_stock_info($data)
    {
		$this->db->set('st_uid', 'UUID()', FALSE);
         $this->db->insert('tbl_stock', $data);
		return $this->db->insert_id();
    }
    public function save_quantity($dat,$data,$id)
    {
        $this->db->where('st_uid',$id);
        $this->db->update('tbl_stock', $data);
        $this->db->set('log_uuid', 'UUID()', FALSE);
		$this->db->insert('tbl_logbook', $dat);
		return $this->db->insert_id();
    }
    public function getitem_info($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_stock');
        $this->db->where('st_uid', $id);
        $info = $this->db->get();
        return $info->row();
    }
    public function getitem_detail($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_logbook');
        $this->db->where('log_item_id',$id);
        $this->db->order_by('log_date','DESC');
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
   echo $result->stu_fname.'&nbsp;'.$result->stu_lname.'<br>(student)'; 
        
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
      public function delete_item_info($id,$data)
    {
        $this->db->where('st_uid', $id);
        return $this->db->update('tbl_stock',$data);
    }
}
