<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_study_visa extends CI_Controller {

	public function index()
	{
		$layout                = array();
		$layout['all_student']   = $this->Student_model->getall_visa_info();
        $layout['maincontent'] = $this->load->view('Visa_list', $layout, true);
        $this->load->view('admin/layout', $layout);
	}
	
    public function preview($id)
	{
		$layout                = array();
        $layout['get_info']   = $this->Walkins_model->walkins_info($id);
        $layout['maincontent'] = $this->load->view('Study_visa', $layout, true);
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
        $layout['maincontent'] = $this->load->view('Study_visa', $layout, true);
        $this->load->view('admin/layout', $layout);
	}
   
    public function enroll_visa_info()
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
        $data['stu_status'] = '0';

        $sdata                       = array();
        $sdata['visa_int']         = $this->input->post('int_country');
        $sdata['visa_city']  = $this->input->post('stu_city');
        $sdata['visa_study'] = $this->input->post('latest_study');
        $sdata['visa_stu_uid'] = $this->input->post('stu_uuid');
        $sdata['visa_created_by'] = $this->session->userdata('user_uuid');

            $ndata=array();
		    $ndata['noti_msg']='New Enrollment';
		    $ndata['noti_title']=$this->input->post('s_first_name').'&nbsp;'.$this->input->post('s_last_name');
		    $ndata['noti_created_by']=$this->session->userdata('user_uuid');
		    $ndata['noti_url']='Visa_info_list';
		    add_noti($ndata);
        
        $result = $this->Walkins_model->update_walkins_info($data, $this->input->post('stu_uuid'));
        $sresult = $this->Walkins_model->save_visa_info($sdata);
        if ($result & $sresult) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Record added successfully.
                                        </div>');
            redirect('study_visa/'.$this->input->post('stu_uuid'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Record added  failed! Try again
                                        </div>');
            redirect('study_visa/'.$this->input->post('stu_uuid'));
        }
    }
}
