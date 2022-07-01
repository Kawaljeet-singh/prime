<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdminLogin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('adminlogin_model');
        $this->user_login_check();
    }
    public function index()
    {
        $this->load->view('login');
    }

    public function admin_login_check()
    {

        $this->form_validation->set_rules('user_email', 'User Email', 'required|valid_email');
        $this->form_validation->set_rules('user_password', 'User Password', 'required');

        if ($this->form_validation->run() == true) {
            $data                  = array();
            $data['user_name']    = $this->input->post('user_email');
            $data['password'] = md5($this->input->post('user_password'));

            $result = $this->adminlogin_model->admin_login_check($data);

            if ($result) {
               
                $this->session->set_userdata('user_name', $result->s_first_name.'&nbsp;'.$result->s_last_name);
                $this->session->set_userdata('user_id', $result->id);
                $this->session->set_userdata('user_uuid', $result->uuid);
                $this->session->set_userdata('user_role', $result->role);
                $this->session->set_userdata('user_email', $result->email);
                $this->session->set_userdata('user_pic', $result->attachment_id);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('message', 'Your Email Or Password Does Not Match');
                redirect('/');
            }
        } else {
            $this->session->set_flashdata('message', validation_errors());
            redirect('/');
        }

    }

    public function user_login_check()
    {
        $user_name = $this->session->userdata('user_name');
        $user_id  = $this->session->userdata('user_id');
        $user_uuid    = $this->session->userdata('user_uuid');
        $user_role    = $this->session->userdata('user_role');
        $user_email    = $this->session->userdata('user_email');
        $user_pic    = $this->session->userdata('user_pic');
        if ($user_name == true) {
            redirect('dashboard');
        }
    }

}
