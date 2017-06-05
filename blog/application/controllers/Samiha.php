<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Samiha extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('auth_type') != 'admin')
			{ redirect(base_url() . 'samiha/login', 'refresh'); }

		$page_data['page_name']		=	'dashboard';
		$this->load->view('samiha/index', $page_data);
	}

	function add_category()
	{
		if ($this->session->userdata('auth_type') != 'admin')
			{ redirect(base_url() . 'samiha/login', 'refresh'); }

		$page_data['page_name']		=	'add_category';
		$this->load->view('samiha/index', $page_data);
	}

	function category($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('auth_type') != 'admin')
			{ redirect(base_url() . 'samiha/login', 'refresh'); }

		if ($param1 == 'add') { $this->samiha_model->add_category(); }
		elseif ($param1 == 'edit') { $this->samiha_model->edit_category($param2); }
		elseif ($param1 == 'image') { $this->samiha_model->change_category_image($param2); }
		elseif ($param1 == 'delete') { $this->samiha_model->delete_category($param2); }

		$page_data['page_name']		=	'category';
		$this->load->view('samiha/index', $page_data);
	}

	function add_restaurant()
	{
		if ($this->session->userdata('auth_type') != 'admin')
			{ redirect(base_url() . 'samiha/login', 'refresh'); }

		$page_data['page_name']		=	'add_restaurant';
		$this->load->view('samiha/index', $page_data);
	}

	function restaurant($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('auth_type') != 'admin')
			{ redirect(base_url() . 'samiha/login', 'refresh'); }

		if ($param1 == 'add') { $this->samiha_model->add_restaurant(); }
		elseif ($param1 == 'edit') { $this->samiha_model->edit_restaurant($param2); }
		elseif ($param1 == 'image') { $this->samiha_model->change_restaurant_image($param2); }
		elseif ($param1 == 'delete') { $this->samiha_model->delete_restaurant($param2); }

		$page_data['page_name']		=	'restaurant';
		$this->load->view('samiha/index', $page_data);
	}

	function add_article()
	{
		if ($this->session->userdata('auth_type') != 'admin')
			{ redirect(base_url() . 'samiha/login', 'refresh'); }

		$page_data['page_name']		=	'add_article';
		$this->load->view('samiha/index', $page_data);
	}

	function article($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('auth_type') != 'admin')
			{ redirect(base_url() . 'samiha/login', 'refresh'); }

		if ($param1 == 'add') { $this->samiha_model->add_article(); }
		elseif ($param1 == 'edit') { $this->samiha_model->edit_article($param2); }
		elseif ($param1 == 'restaurant_image') { $this->samiha_model->change_article_restaurant_image($param2); }
		elseif ($param1 == 'food_image') { $this->samiha_model->change_article_food_image($param2); }
		elseif ($param1 == 'delete') { $this->samiha_model->delete_article($param2); }

		$page_data['page_name']		=	'article';
		$this->load->view('samiha/index', $page_data);
	}

	function comment($param1 = '', $param2 = '')
    {
		if ($this->session->userdata('auth_type') != 'admin')
			{ redirect(base_url() . 'samiha/login', 'refresh'); }

		if ($param1 == 'edit') { $this->samiha_model->edit_comment($param2); }
		elseif ($param1 == 'delete') { $this->samiha_model->delete_comment($param2); }

        $page_data['page_name']		=	'comment';
		$this->load->view('samiha/index', $page_data);
    }

    function message()
    {
		if ($this->session->userdata('auth_type') != 'admin')
			{ redirect(base_url() . 'samiha/login', 'refresh'); }
			
        $page_data['page_name']		=	'message';
		$this->load->view('samiha/index', $page_data);
    }

	function login()
	{
		$this->load->view('samiha/login');
	}
}
