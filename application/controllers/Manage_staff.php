<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_staff extends CI_Controller {

	public function index()
	{
		$layout                = array();
		$layout['all_teacher']   = $this->Staff_model->getall_teacher_info();
        $layout['maincontent'] = $this->load->view('member_list', $layout, true);
        $this->load->view('admin/layout', $layout);
	}
	public function add_teacher()
	{
		
		$layout                = array();
        $layout['system']   = $this->Dashboard_model->system('1');
        $layout['holi']   = $this->Dashboard_model->system('3');
        $layout['maincontent'] = $this->load->view('add_teacher', $layout, true);
        $this->load->view('admin/layout', $layout);
	}
	public function save_teacher_infos()
    {
        $data                       = array();
        $data['s_first_name']         = $this->input->post('firstname');
        $data['s_last_name']  = $this->input->post('lastname');
        $data['s_email'] = $this->input->post('email');
        $data['s_phone'] = $this->input->post('phone');
        $data['s_doj'] = $this->input->post('doj');
        $data['s_dob'] = $this->input->post('dob');
        $data['s_designation'] = $this->input->post('designation');
        $data['s_holiday'] = $this->input->post('holiday');
        $data['s_salary'] = $this->input->post('salary');
        $data['s_security'] = $this->input->post('security');
        $data['s_address'] = $this->input->post('address');
        $data['s_city'] = $this->input->post('city');
        $data['s_zip'] = $this->input->post('zip');
        $data['created_by'] = $this->session->userdata('user_uuid');    

        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('doj', 'Date of Joining', 'trim|required');
        $this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required');
        $this->form_validation->set_rules('designation', 'Designation', 'trim|required');
        $this->form_validation->set_rules('holiday', 'Holiday', 'trim|required');
        $this->form_validation->set_rules('salary', 'Salary', 'trim|required');
        $this->form_validation->set_rules('security', 'Security', 'trim|required');
        $this->form_validation->set_rules('address', 'address', 'trim|required');
        $this->form_validation->set_rules('city', 'city', 'trim|required');
        $this->form_validation->set_rules('zip', 'zip', 'trim|required');

		if (!empty($_FILES['photo']['name'])) {
            $config['upload_path']   = './profile/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = 4096;
            $config['max_width']     = 2000;
            $config['max_height']    = 2000;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('photo')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('message', $error);
                redirect('add_teacher');
            } else {
                $post_image            = $this->upload->data();
                $data['photo'] = $post_image['file_name'];
            }
        }
        if ($this->form_validation->run() == true) {
            $result = $this->Staff_model->save_teacher_info($data);
            if ($result) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                                Teacher ID created. Password will sent to email OR phone number.
                                            </div>');
                redirect('add_teacher');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                                Teacher created failed! Try again
                                            </div>');
                redirect('add_teacher');
            }
        } else {
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
                                                '.validation_errors().'
                                            </div>' );
            redirect('add_teacher');
        }

    }
    public function view_teacher($id)
	{
		
		$layout                = array();
        $layout['staff_info']   = $this->Staff_model->view_teacher_info($id);
        $layout['sch_info']   = $this->Staff_model->getall_schedule_info($id);
        $layout['maincontent'] = $this->load->view('profile', $layout, true);
        $this->load->view('admin/layout', $layout);
	}
	    public function save_teacher_info() {
        $from_email = "email@example.com";
        $to_email = "kawaljit2191@gmail.com";
        //Load email library
        $this->load->library('email');
        $this->email->from($from_email, 'Identification');
        $this->email->to($to_email);
        $this->email->subject('Send Email Codeigniter');
        $this->email->message('The email send using codeigniter library');
        //Send mail
        if($this->email->send())
            $this->session->set_flashdata("email_sent","Congragulation Email Send Successfully.");
        else
            $this->session->set_flashdata("email_sent","You have encountered an error");
        $this->load->view('contact_email_form');
    }
}
