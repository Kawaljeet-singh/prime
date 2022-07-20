<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_walkins extends CI_Controller {

	public function index()
	{
		$layout                = array();
		$layout['all_walkins']   = $this->Walkins_model->getall_walkins_info();
        $layout['maincontent'] = $this->load->view('Walkins_list', $layout, true);
        $this->load->view('admin/layout', $layout);
	}
	public function add_walkins()
	{
		$layout                = array();
        $layout['all_teacher']   = $this->Staff_model->getall_teacher_info();
        $layout['course']   = $this->Dashboard_model->system('2');
        $layout['quali']   = $this->Dashboard_model->system('4');
        $layout['maincontent'] = $this->load->view('add_walkins', $layout, true);
        $this->load->view('admin/layout', $layout);
	}
    public function preview($id)
	{
		$layout                = array();
        $layout['get_info']   = $this->Walkins_model->walkins_info($id);
        $layout['maincontent'] = $this->load->view('preview', $layout, true);
        $this->load->view('admin/layout', $layout);
	}
    public function enroll($id)
	{
		$layout                = array();
        $layout['get_info']   = $this->Walkins_model->walkins_info($id);
        $layout['get_course']   = $this->Course_model->getall_course();
        $layout['get_batch']   = $this->Course_model->getall_batch();
        $layout['get_duration']   = $this->Course_model->getall_duration();
        $layout['all_items']   = $this->Stock_model->getall_stock_info();
        $layout['mode']   = $this->Dashboard_model->system('7');
        $layout['maincontent'] = $this->load->view('Enroll', $layout, true);
        $this->load->view('admin/layout', $layout);
	}
    function fetch_batch()
    {
    if($this->input->post('course_id'))
    {
    $ss=$this->Walkins_model->fetch_batch($this->input->post('course_id'));
    $bb=$this->Walkins_model->fetch_schedule($this->input->post('course_id'));
   
        $obj_merged =array(
        'ss'=> $ss, 'bb'=> $bb);
        print_r(json_encode($obj_merged));
    }
    }
    function fetch_schedule()
    {
    if($this->input->post('due_id'))
    {
    print_r( json_encode($this->Walkins_model->fetch_schedule($this->input->post('due_id'))));
    }
    }
    function fetch_duration()
    {
    if($this->input->post('batch_id'))
    {
    print_r( json_encode($this->Walkins_model->fetch_duration($this->input->post('batch_id'))));
    }
    }
    function fetch_fee()
    {
        if($this->input->post('due_id'))
        {
        print_r( json_encode($this->Walkins_model->fetch_fee($this->input->post('due_id'))));
        }
    }
	public function save_walkins_info()
    {
        $data                       = array();
        $data['stu_fname']         = $this->input->post('s_first_name');
        $data['stu_lname']  = $this->input->post('s_last_name');
        $data['stu_email'] = $this->input->post('s_email');
        $data['stu_phone_a'] = $this->input->post('s_phone_a');
        $data['stu_phone_b'] = $this->input->post('s_phone_b');
        $data['stu_quali'] = $this->input->post('s_qual');
        $data['stu_study'] = $this->input->post('s_study');
        $data['stu_gender'] = $this->input->post('s_gender');
        $data['stu_dob'] = $this->input->post('s_dob');
        $data['stu_interest'] = $this->input->post('s_interest');
        $data['stu_assign_to'] = $this->input->post('s_assign_to');
        $data['stu_address'] = $this->input->post('s_address');
        $data['stu_city'] = $this->input->post('s_city');
        $data['stu_state'] = $this->input->post('s_state');
        $data['stu_zip'] = $this->input->post('s_zip');
        $data['stu_created_by'] = $this->session->userdata('user_uuid');
        $result = $this->Walkins_model->save_walkins_info($data);
        	$ndata=array();
		    $ndata['noti_msg']='New Walkin added';
		    $ndata['noti_title']=$this->input->post('s_first_name').'&nbsp;'.$this->input->post('s_last_name');
		    $ndata['noti_created_by']=$this->session->userdata('user_uuid');
		    $ndata['noti_url']='walkins_list';
		    add_noti($ndata);
        if ($result) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            walkins Entered Successfully.
                                        </div>');
            redirect('add_walkins');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            walkins Entered Successfully.
                                        </div>');
            redirect('add_walkins');
        }

    }
    public function enroll_walkins_info()
    {
        $data                       = array();
        $data['stu_fname']         = $this->input->post('s_first_name');
        $data['stu_lname']  = $this->input->post('s_last_name');
        $data['stu_email'] = $this->input->post('s_email');
        $data['stu_phone_a'] = $this->input->post('s_phone_a');
        $data['stu_phone_b'] = $this->input->post('s_phone_b');
        $data['stu_quali'] = $this->input->post('s_qual');
        $data['stu_study'] = $this->input->post('s_study');
        $data['stu_gender'] = $this->input->post('s_gender');
        $data['stu_dob'] = $this->input->post('s_dob');
      
        $data['stu_address'] = $this->input->post('s_address');
        $data['stu_city'] = $this->input->post('s_city');
        $data['stu_state'] = $this->input->post('s_state');
        $data['stu_zip'] = $this->input->post('s_zip');
        $data['stu_created_by'] = $this->session->userdata('user_uuid');
        $data['stu_status'] = '1';

        $sdata                       = array();
        $sdata['en_course']         = $this->input->post('course');
        $sdata['en_batch']  = $this->input->post('batch');
        $sdata['en_duration'] = $this->input->post('duration');
        $sdata['en_paid'] = $this->input->post('fee_paid');
        $sdata['en_payment_type'] = $this->input->post('pay_mode');
        $sdata['en_stu_uuid'] = $this->input->post('stu_uuid');
        $sdata['en_assign_class'] = $this->input->post('batch_id');
        $sdata['en_created_by'] = $this->session->userdata('user_uuid');

            $ndata=array();
		    $ndata['noti_msg']='New Enrolled';
		    $ndata['noti_title']=$this->input->post('s_first_name').'&nbsp;'.$this->input->post('s_last_name');
		    $ndata['noti_created_by']=$this->session->userdata('user_uuid');
		    $ndata['noti_url']='Student_list';
		    add_noti($ndata);
		    
		    $fdata=array();
		    $fdata['fee_stu_id']= $this->input->post('stu_uuid');
		    $fdata['fee_fees']=$this->input->post('total_fee');
		    $fdata['fee_enroll']=$this->input->post('fee_paid');
		    $fdata['fee_status']=$this->input->post('fee_due');
		    $fdata['fee_mode']=$this->input->post('pay_mode');
		    $fdata['fee_dur']=$this->input->post('duration');
		    $fdata['fee_created_by']=$this->session->userdata('user_uuid');
		    $fresult=$this->Fee_model->save_fee_info($fdata);
            $oddatas=$this->input->post('item');
            $arr=array();
            foreach ($oddatas as $myoddata) 
            {
                $arr['log_item_id']=$myoddata;
                $arr['log_issue_to'] = $this->input->post('stu_uuid');
                $arr['log_user_type'] = '2';
                $arr['log_qty'] = '1';
                $this->Stock_model->updatecount($myoddata);
                $iresult=$this->Walkins_model->stu_item($arr);
            }
        $result = $this->Walkins_model->update_walkins_info($data, $this->input->post('stu_uuid'));
        $sresult = $this->Walkins_model->save_enroll_info($sdata);
        if ($result & $sresult & $iresult & $fresult) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Student Enrolled successfully.</div>');
            redirect('Student_list');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Student Enrolled  failed! Try again</div>');
           redirect('Student_list');
        }
    }
}
