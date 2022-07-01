<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_student extends CI_Controller {

	public function index()
	{
		$layout                = array();
		$layout['all_student']   = $this->Student_model->getall_student_info();
        $layout['maincontent'] = $this->load->view('Student_list', $layout, true);
        $this->load->view('admin/layout', $layout);
	}
	public function add_walkins()
	{
		$layout                = array();
        $layout['all_teacher']   = $this->Staff_model->getall_teacher_info();
        $layout['maincontent'] = $this->load->view('add_walkins', $layout, true);
        $this->load->view('admin/layout', $layout);
	}
    public function idcard($id)
	{
		$layout                = array();
        $layout['get_info']   = $this->Student_model->walkins_info($id);
        $getinfo=$this->Student_model->walkins_info($id);
        $this->load->view('idcard', $layout);
        $html = $this->output->get_output();
        		// Load pdf library
		$this->load->library('pdf');
		$this->pdf->loadHtml($html);
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->render();
		// Output the generated PDF (1 = download and 0 = preview)
	return	$this->pdf->stream("Prime ID card ".$getinfo->stu_id.".pdf", array("Attachment"=> 0));
	}
    public function enroll($id)
	{
		$layout                = array();
        $layout['get_info']   = $this->Walkins_model->walkins_info($id);
        $layout['get_course']   = $this->Course_model->getall_course();
        $layout['get_batch']   = $this->Course_model->getall_batch();
        $layout['get_duration']   = $this->Course_model->getall_duration();
        $layout['all_items']   = $this->Stock_model->getall_stock_info();
        $layout['maincontent'] = $this->load->view('Enroll', $layout, true);
        $this->load->view('admin/layout', $layout);
	}
    function fetch_batch()
    {
    if($this->input->post('course_id'))
    {
    print_r( json_encode($this->Walkins_model->fetch_batch($this->input->post('course_id'))));
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

    
}