<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    // System Login
    function login($param = '')
    {
        $email				    =	$this->input->post('email');
        $password			    =	$this->input->post('password');
        $query				    =	$this->db->get_where('admin', array('email' => $email , 'password' => $password));

        if ($query->num_rows() > 0) // checking with db admin table
        {
            $admin_row	        =	$query->row();

            $this->session->set_userdata('admin_id' , $admin_row->admin_id);
            $this->session->set_userdata('auth_type' , 'admin');

            redirect(base_url() . 'samiha', 'refresh');
        }
        else
        {
            $this->session->set_flashdata('login_failed', 'Incorrect Email or Password');
            redirect(base_url() . 'samiha/login' , 'refresh');
        }
    }

    // System Logout
    function logout()
    {
        $this->session->unset_userdata('alumnus_id');
        $this->session->unset_userdata('auth_type');

        $this->session->sess_destroy();

        redirect(base_url() . 'samiha/login', 'refresh');
    }
}
