<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_fee extends CI_Controller {

	public function index()
	{
		$layout                = array();
		$layout['square']=$this;
		$layout['all_fee']   = $this->Fee_model->getall_fee_info();
        $layout['maincontent'] = $this->load->view('fee_list', $layout, true);
        $this->load->view('admin/layout', $layout);
	}
	public function pending_fee()
	{
		$layout                = array();
		$layout['square']=$this;
		$layout['all_fee']   = $this->Fee_model->getpending_fee_info();
        $layout['maincontent'] = $this->load->view('pending_fee', $layout, true);
        $this->load->view('admin/layout', $layout);
	}
	public function add_fee($sid=0)
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
	public function save_stock_info()
    {
        $data                       = array();
        $data['st_item']         = $this->input->post('item_name');
        $data['st_created_by'] = $this->session->userdata('user_uuid');
        
        
        $result = $this->Stock_model->save_stock_info($data);
        if ($result) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Record added successfully.
                                        </div>');
            redirect('add_items');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Record created failed! Try again
                                        </div>');
            redirect('add_items');
        }

    }
    public function delete_items($id)
	{
		$data                       = array();
        $data['st_active']  = '0';
        $data['st_created_by'] = $this->session->userdata('user_uuid');

        $result = $this->Stock_model->delete_item_info($id,$data);
        if ($result) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Record Delete successfully.
                                        </div>');
            redirect('stock_list');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Record Delete failed! Try again
                                        </div>');
            redirect('stock_list');
        }
	}
}
