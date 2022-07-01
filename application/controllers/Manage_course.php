<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_course extends CI_Controller {

	public function index()
	{
		$layout                = array();
		$layout['square']=$this;
		$layout['all_courses']   = $this->Course_model->getall_course();
        $layout['maincontent'] = $this->load->view('course_list', $layout, true);
        $this->load->view('admin/layout', $layout);
	}
	
		public function create_course()
	{
		$layout                = array();
	    $layout['all_courses']   = $this->Course_model->getall_course();
		$layout['all_batch']   = $this->Course_model->getall_batch();
		 $layout['days']   = $this->Dashboard_model->system('5');
	    $layout['maincontent'] = $this->load->view('create_course', $layout, true);
        $this->load->view('admin/layout', $layout);
	}
	
		public function create_batch()
	{
		$layout                = array();
	    $layout['all_courses']   = $this->Course_model->getall_course();
		$layout['all_batch']   = $this->Course_model->getall_batch();
		 $layout['days']   = $this->Dashboard_model->system('5');
	    $layout['maincontent'] = $this->load->view('create_batch', $layout, true);
        $this->load->view('admin/layout', $layout);
	}
	public function save_course()
    {
        $data                       = array();
        $data['cr_name']         = $this->input->post('c_name');
        $data['cr_type'] = $this->input->post('c_type');
        $data['cr_created_by'] = $this->session->userdata('user_uuid');
        
        $result = $this->Course_model->save_course($data);
        if ($result) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Record added successfully.
                                        </div>'); 
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Record created failed! Try again
                                        </div>'); 
        }
        redirect('add_course');
    }
		public function save_batch()
    {
        $data                       = array();
        $data['bt_name']         = $this->input->post('b_name');
        $data['bt_course_id'] = $this->input->post('s_id');
        $data['bt_created_by'] = $this->session->userdata('user_uuid');
        
        $result = $this->Course_model->save_batch($data);
        if ($result) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Record added successfully.
                                        </div>'); 
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Record created failed! Try again
                                        </div>'); 
        }
        redirect('add_batch');
    }
    	public function save_duration()
    {
        $data                       = array();
        $data['due_name']         = $this->input->post('duration');
        $data['due_batch'] = $this->input->post('b_id');
        $data['due_fee'] = $this->input->post('fee');
        $data['due_created_by'] = $this->session->userdata('user_uuid');
        
        $result = $this->Course_model->save_duration($data);
        if ($result) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Record added successfully.
                                        </div>'); 
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Record created failed! Try again
                                        </div>'); 
        }
        redirect('add_course');
    }
    public function save_schedule()
    {
        $data                       = array();
        $data['sch_course_id']         = $this->input->post('course_id');
        $data['sch_strt_time'] = $this->input->post('s_time');
        $data['sch_lst_time'] = $this->input->post('l_time');
        $data['sch_created_by'] = $this->session->userdata('user_uuid');
        $data['sch_days'] = $this->input->post('days');
        $data['sch_student_limit'] = $this->input->post('limit');
       
        
        $result = $this->Course_model->save_schedule($data);
        if ($result) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Record added successfully.
                                        </div>'); 
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Record created failed! Try again
                                        </div>'); 
        }
        redirect('add_course');
    }
	public function pending_fee()
	{
		$layout                = array();
		$layout['square']=$this;
		$layout['all_fee']   = $this->Fee_model->getpending_fee_info();
        $layout['maincontent'] = $this->load->view('pending_fee', $layout, true);
        $this->load->view('admin/layout', $layout);
	}
	public function add_course($sid=0)
	{
		$id=$this->input->post('stu_id');
		$layout                = array();
		$layout['mode']   = $this->Dashboard_model->system('7');
    	if ($this->input->server('REQUEST_METHOD') === 'POST')
		{
		$layout['stu_detail']=$this->Fee_model->student_info($this->input->post('stu_id'));
		$layout['maincontent'] = $this->load->view('add_fee', $layout, true);
		}
		else if($sid!='0')
		{
		$layout['stu_detail']=$this->Fee_model->student_info_byid($sid);
        $layout['maincontent'] = $this->load->view('add_fee', $layout, true);
		}
			else if($sid==0) 
		{
	    $layout['maincontent'] = $this->load->view('add_fee', $layout, true);
		}
        $this->load->view('admin/layout', $layout);
	}

    public function add_quantity($id)
	{
		$layout                = array();
        $layout['getitem_info'] =  $this->Fee_model->getitem_info($id);
        $layout['maincontent'] = $this->load->view('add_quantity', $layout, true);
        $this->load->view('admin/layout', $layout);
	}
	 public function fee_detail($id)
	{
		$layout                = array();
        $layout['getitem_detail'] =  $this->Fee_model->getfee_detail($id);
        $layout['square']=$this;
        $layout['getitem_info'] =  $this->Fee_model->getfee_info($id);
        $layout['maincontent'] = $this->load->view('fee_details', $layout, true);
        $this->load->view('admin/layout', $layout);
	}
	public function getname($id)
	{
	    if ($id !='')
	    {
	    return $this->Fee_model->getname($id);
	    }
	    else
	    {
	        return 'Added';
	    }
	}
    public function update_fee()
	{
	    $stu=$this->Fee_model->student_info($this->input->post('st_id'));
	    $id=$stu->stu_uid;
	    $data                       = array();
        $data['flog_fee']         = $this->input->post('fee_amt');
        $data['flog_fee_id']         = $this->input->post('fee_id');
        $data['flog_stu_id']         = $id;
        $data['flog_created_by'] = $this->session->userdata('user_uuid');
        $data['flog_mode'] =$this->input->post('mode');
        $dat                       = array();
        $dat['fee_enroll']         = $this->input->post('fee_amt')+$stu->fee_enroll;
        $dat['fee_status']         = $stu->fee_fees - ($stu->fee_enroll+$this->input->post('fee_amt'));
        $dat['fee_mode']         = $this->input->post('mode');
        $dat['fee_created_by'] = $this->session->userdata('user_uuid');
        $result = $this->Fee_model->fee_log($data);
        $lresult = $this->Fee_model->fee_update($dat,$this->input->post('fee_id'));
            $ndata=array();
		    $ndata['noti_msg']='Fee credit';
		    $ndata['noti_title']=fee_format($this->input->post('fee_amt')).'&nbsp;Credit to &nbsp;'.$stu->stu_fname.'&nbsp;'.$stu->stu_lname;
		    $ndata['noti_created_by']=$this->session->userdata('user_uuid');
		    $ndata['noti_url']='fee_detail/'.$id;
		    add_noti($ndata);
        if ($result) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Fee added successfully.</div>');
            redirect('add_fee/'.$id);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Fee updation failed! Try again</div>');
            redirect('add_fee/'.$id);
        }
	}

    public function delete_course($id)
	{
	  $result = $this->Course_model->deactive_cource($id);
        if ($result) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Record Delete successfully.
                                        </div>');
            redirect('course_list');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Record Delete failed! Try again
                                        </div>');
            redirect('course_list');
        }
	}
	public function delete_batch($id)
	{
        $result = $this->Course_model->deactive_batch($id);
        if ($result) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Record Delete successfully.
                                        </div>');
            redirect('add_batch');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Record Delete failed! Try again
                                        </div>');
            redirect('add_batch');
        }
	}
}
