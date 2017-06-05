<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$page_data['page_name']		=	'home';
		$page_data['header_class']	=	'tt-nav transparent-header';
		$this->load->view('blog/index', $page_data);
	}

	function search()
	{
		$page_data['term']			=	$this->input->post('term');
		$page_data['page_name']		=	'search';
		$page_data['header_class']	=	'tt-nav nav-border-bottom';
		$this->load->view('blog/index', $page_data);
	}

	function category($param = '')
	{
		$category_id				=	$this->db->get_where('category', array('permalink' => $param))->row()->category_id;

		$this->blog_model->paginate('category', 'article', '6', $category_id, $param);
	}

	function articles()
	{
		$this->blog_model->paginate_articles('articles', 'article', '6');
	}

	function article($param = '')
	{
		$this->blog_model->article_view_count($param);

		$page_data['permalink']		=	$param;
		$page_data['page_name']		=	'article';
		$page_data['header_class']	=	'tt-nav nav-border-bottom';
		$this->load->view('blog/index', $page_data);
	}

	function loved_the_article()
	{
		$article_id 				=	$this->input->post('article_id');
		$love 						= 	$this->db->get_where('article', array('article_id' => $article_id))->row()->love;

		$data['love']				=	$love + 1;

		$this->db->where('article_id', $article_id);
		$this->db->update('article', $data);

		// flashdata

		echo '1';
	}

	function comment($param = '')
	{
		$this->blog_model->comment($param);
	}

	function restaurant($param = '')
	{
		$restaurant_id				=	$this->db->get_where('restaurant', array('permalink' => $param))->row()->restaurant_id;

		$this->blog_model->paginate('restaurant', 'article', '6', $restaurant_id, $param);
	}

	function contact($param = '')
	{
		if ($param) { $this->blog_model->send_message(); }

		$page_data['page_name']		=	'contact';
		$page_data['header_class']	=	'tt-nav nav-border-bottom';
		$this->load->view('blog/index', $page_data);
	}
}
