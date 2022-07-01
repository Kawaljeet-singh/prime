<?php


function get_profile($para){
   $op = & get_instance();
   $op->db->select($para);
   $op->db->from('tbl_staff');
   $res = $op->db->get();
   $result =  $res->row();
   
   echo $result->$para;
}

 function get_media()
 {
   $CI =& get_instance();
   $id= $CI->session->userdata('user_pic'); 
   $op = & get_instance();
   $op->db->select('attach_name');
   $op->db->where('attach_uid',$id);
   $op->db->from('tbl_attachment');
   $res = $op->db->get();
   $result =  $res->row();
   echo $result->attach_name;
 }
 function get_photo($id)
 {
   $CI =& get_instance();
  
   $op = & get_instance();
   $op->db->select('attach_name');
   $op->db->where('attach_uid',$id);
   $op->db->from('tbl_attachment');
   $res = $op->db->get();
   $result =  $res->row();
   return $result->attach_name;
 }
  function get_name($id)
 {
   $CI =& get_instance();
  
   $op = & get_instance();
   $op->db->select('*');
   $op->db->where('staff_uid',$id);
   $op->db->from('tbl_staff');
   $res = $op->db->get();
   $result =  $res->row();
   return $result->s_first_name.'&nbsp;'.$result->s_last_name;
 }
   function get_user($arg){
      $CI =& get_instance();
      return $CI->session->userdata($arg); 
   }

   function add_noti($para){
      $op = & get_instance();
      $op->db->set('noti_uuid', 'UUID()', FALSE);
      $op->db->insert('tbl_notification',$para);
      return $op->db->insert_id();
   }
   function getall_notifications()
   {
      $op = & get_instance();
      $op->db->select('*');
      $op->db->from('tbl_notification');
      $op->db->where('noti_status','1');
      $op->db->order_by('noti_id','DESC');
      $info = $op->db->get();
      return $info->result();
   }
    function get_batchname($id)
   {
   $op = & get_instance();
   $op->db->select('bt_name');
   $op->db->where('bt_uuid',$id);
   $op->db->from('tbl_batch');
   $res = $op->db->get();
   $result =  $res->row();
   echo $result->bt_name;
   }
   function get_coursename($id)
   {
   $op = & get_instance();
   $op->db->select('cr_name');
   $op->db->where('cr_uuid',$id);
   $op->db->from('tbl_courses');
   $res = $op->db->get();
   $result =  $res->row();
   echo $result->cr_name;
   }

   function get_duration($id)
   {
   $op = & get_instance();
   $op->db->select('due_name');
   $op->db->where('due_uuid',$id);
   $op->db->from('tbl_duration');
   $res = $op->db->get();
   $result =  $res->row();
   return $result->due_name;
   }
   function date_new($datetime,$full = false)
   {
      $now = new DateTime;
      $ago = new DateTime($datetime);
      $diff = $now->diff($ago);
  
      $diff->w = floor($diff->d / 7);
      $diff->d -= $diff->w * 7;
  
      $string = array(
          'y' => 'year',
          'm' => 'month',
          'w' => 'week',
          'd' => 'day',
          'h' => 'hour',
          'i' => 'minute',
          's' => 'second',
      );
      foreach ($string as $k => &$v) {
          if ($diff->$k) {
              $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
          } else {
              unset($string[$k]);
          }
      }
  
      if (!$full) $string = array_slice($string, 0, 1);
      return $string ? implode(', ', $string) . ' ago' : 'just now';

   }
   function get_sys($id)
 {
   $CI =& get_instance();
   $op = & get_instance();
   $op->db->select('sc_name');
   $op->db->where('sc_id',$id);
   $op->db->from('tbl_system_config');
   $res = $op->db->get();
   $result =  $res->row();
   echo $result->sc_name;
 }
 function fee_format($amt)
 {
    $fmt = new NumberFormatter('en_IN', NumberFormatter::CURRENCY);
    return $fmt->formatCurrency($amt, "INR");
 }