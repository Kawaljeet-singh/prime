<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_noti extends CI_Controller {

	public function index()
	{
		$layout                = array();
		$layout['all_noti']   = $this->Noti_model->getall_noti();
        $layout['maincontent'] = $this->load->view('noti_list', $layout, true);
        $this->load->view('admin/layout', $layout);
	}
	public function view($id)
	{
		$layout                = array();
		$layout['all_noti']   = $this->Noti_model->viewall_noti($id);
		$layout['get_name']=get_name($id);
        $layout['maincontent'] = $this->load->view('view_noti', $layout, true);
        $this->load->view('admin/layout', $layout);
	}

}
