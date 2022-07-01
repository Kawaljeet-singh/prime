<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->get_user();
		
    }
	public function index()
	{
		$this->load->view('login');
	}
	
	public function dashboard()
	{
		$data                = array();
        $data['get_stock']=$this->Dashboard_model->get_stock();
        $data['ttl_w']=$this->Dashboard_model->total_walkin();
        $data['ttl_e']=$this->Dashboard_model->total_enroll();
        $data['today']=$this->Dashboard_model->today();
        $data['month']=$this->Dashboard_model->month();
        $data['year']=$this->Dashboard_model->year();
        $data['dashboard']=$this;
        $data['get_counselor']=$this->Dashboard_model->get_counselor();
		$data['maincontent'] = $this->load->view('dashboard', $data, true);
		$this->load->view('admin/layout', $data);
	}
	public function member_list()
	{
		$this->load->view('member_list');
	}
	public function profile()
	{
		$data=array();
		$data['noti_msg']='test';
		add_noti($data);
	}
	public function work($id)
	{
	    $this->db->select('*');
	   $this->db->where('stu_assign_to',$id);
	    $info=$this->db->get('tbl_student');
	    return $info->num_rows();
	}
	public function student_list()
	{
		$this->load->view('student_list');
	}
	public function add_teacher()
	{
		$this->load->view('add_teacher');
	}
	public function add_student()
	{
		$this->load->view('add_student');
	}
	public function walkins()
	{
		$data                = array();
        $data['maincontent'] = $this->load->view('walkins', $data, true);
        $this->load->view('admin/layout', $data);
	
	}
	public function add_stock()
	{
		$this->load->view('add_stock');
	}
	public function stock_items()
	{
		$this->load->view('stock_items');
	}
	public function add_quantity()
	{
		$this->load->view('add_quantity');
	}
	public function get_user()
    {

        $user_name = $this->session->userdata('user_name');
        $user_id  = $this->session->userdata('user_id');
        $user_uuid    = $this->session->userdata('user_uuid');
		$user_role    = $this->session->userdata('user_role');
		$user_email    = $this->session->userdata('user_email');
		$user_pic    = $this->session->userdata('user_pic');
        if ($user_name == false) {
            redirect('/');
        }

    }
	public function logout()
    {

        $user_name = $this->session->unset_userdata('user_name');
        $user_id  = $this->session->unset_userdata('user_id');
        $user_uuid    = $this->session->unset_userdata('user_uuid');
		$user_role    = $this->session->unset_userdata('user_role');
		$user_email    = $this->session->unset_userdata('user_email');
		$user_pic    = $this->session->unset_userdata('user_pic');
        if ($user_name == false) {
            redirect('/');
        }
    }
}
