<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_stock extends CI_Controller {

	public function index()
	{
		$layout                = array();
		$layout['all_items']   = $this->Stock_model->getall_stock_info();
        $layout['maincontent'] = $this->load->view('stock_list', $layout, true);
        $this->load->view('admin/layout', $layout);
	}
	public function add_items()
	{
		
		$layout                = array();
        $layout['maincontent'] = $this->load->view('add_stock', $layout, true);
        $this->load->view('admin/layout', $layout);
	}
    public function add_quantity($id)
	{
		$layout                = array();
        $layout['getitem_info'] =  $this->Stock_model->getitem_info($id);
        $layout['maincontent'] = $this->load->view('add_quantity', $layout, true);
        $this->load->view('admin/layout', $layout);
	}
	 public function item_detail($id)
	{
		$layout                = array();
        $layout['getitem_detail'] =  $this->Stock_model->getitem_detail($id);
        $layout['square']=$this;
        $layout['getitem_info'] =  $this->Stock_model->getitem_info($id);
        $layout['maincontent'] = $this->load->view('stock_details', $layout, true);
        $this->load->view('admin/layout', $layout);
	}
	public function getname($id)
	{
	    if ($id !='')
	    {
	    return $this->Stock_model->getname($id);
	    }
	    else
	    {
	        return 'Added';
	    }
	}
    public function save_quantity($id)
	{
	    $data                       = array();
        $data['st_quantity']         = $this->input->post('quantity') + $this->input->post('instock') ;
        $data['st_created_by'] = $this->session->userdata('user_uuid');
        $dat                       = array();
        $dat['log_item_id']         = $id;
        $dat['log_qty']         = $this->input->post('quantity');
        $dat['log_created_by'] = $this->session->userdata('user_uuid');
        $result = $this->Stock_model->save_quantity($dat,$data,$id);
            $ndata=array();
		    $ndata['noti_msg']='Quantity added';
		    $ndata['noti_title']=$this->input->post('quantity').'&nbsp;'.$this->input->post('item');
		    $ndata['noti_created_by']=$this->session->userdata('user_uuid');
		    $ndata['noti_url']='detail/'.$id;
		    add_noti($ndata);
        if ($result) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Record added successfully.</div>');
            redirect('add_quantity/'.$id);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Record created failed! Try again</div>');
            redirect('add_quantity/'.$id);
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
