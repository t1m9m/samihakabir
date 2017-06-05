<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {

    function article_view_count($param = '')
    {
        $article_id                 =   $this->db->get_where('article', array('permalink' => $param))->row()->article_id;
        $article_view               =   $this->db->get_where('article', array('permalink' => $param))->row()->times;

        $data['times']              =   $article_view + 1;

        $this->db->where('article_id', $article_id);
        $this->db->update('article', $data);
    }

    function comment($param = '')
    {
        $data['article_id']			=	$param;
		$data['name']				=	$this->input->post('name');
		$data['email']				=	$this->input->post('email');
		$data['comment']			=	$this->input->post('comment');
		$data['status']				=	0;
		$data['timestamp']			=	time();

		$this->db->insert('comment', $data);

		$this->session->set_flashdata('success', 'We have received your comment. It will be published ASAP');

        redirect(base_url() . 'article/' . $this->db->get_where('article', array('article_id' => $param))->row()->permalink, 'refresh');
    }

    function send_message()
    {
        $data['name']       =   $this->input->post('name');
        $data['email']      =   $this->input->post('email');
        $data['subject']    =   $this->input->post('subject');
        $data['message']    =   $this->input->post('message');
        $data['timestamp']  =   time();

        $this->db->insert('message', $data);

        $this->session->set_flashdata('success', 'We have received your messsage. We will get back to you ASAP');

        redirect(base_url() . 'contact', 'refresh');
    }

    // This function paginates the events in events page
	function paginate($page_name, $db_name, $per_page, $where_id, $permalink)
	{
		$config['base_url'] 		=	base_url() . $page_name . '/' . $permalink;
        $config['total_rows']		= 	$this->db->get_where($db_name, array($page_name . '_id' => $where_id))->num_rows();
        $config['per_page'] 		=	$per_page;
        $config['uri_segment'] 		= 	3;
        $config['cur_tag_open']		= 	'&nbsp;<span class="current waves-effect waves-light">';
        $config['cur_tag_close'] 	= 	'</span>&nbsp;';
    	$config['num_links'] 		= 	round($config['total_rows'] / $config['per_page']);
        // $config['prev_tag_open']    =   '';
        // $config['prev_tag_close']   =   '&nbsp;';
        // $config['next_tag_open']    =   '&nbsp;';
        // $config['next_tag_close']   =   '';

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $this->db->limit($config['per_page'], $page);
        $db_data 				    = 	$this->db->get_where($db_name, array($page_name . '_id' => $where_id));
        if ($db_data->num_rows() > 0) {
            foreach ($db_data->result_array() as $row) {
                $data[] = $row;
            }
            $page_data[$page_name] =   $data;
        }

        $str_pages 					= 	$this->pagination->create_links();
		$page_data['pages'] 		= 	explode('&nbsp;', $str_pages);
		$page_data['page_name']		=	$page_name;
		$page_data['header_class']	=	'tt-nav nav-border-bottom';

		$this->load->view('blog/index', $page_data);
	}

    function paginate_articles($page_name, $db_name, $per_page)
    {
        $config['base_url'] 		=	base_url() . $page_name;
        $config['total_rows']		= 	$this->db->get_where($db_name)->num_rows();
        $config['per_page'] 		=	$per_page;
        $config['uri_segment'] 		= 	2;
        $config['cur_tag_open']		= 	'&nbsp;<span class="current waves-effect waves-light">';
        $config['cur_tag_close'] 	= 	'</span>&nbsp;';
    	$config['num_links'] 		= 	round($config['total_rows'] / $config['per_page']);

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $this->db->limit($config['per_page'], $page);
        $db_data 				    = 	$this->db->get_where($db_name);
        if ($db_data->num_rows() > 0) {
            foreach ($db_data->result_array() as $row) {
                $data[] = $row;
            }
            $page_data[$page_name] =   $data;
        }

        $str_pages 					= 	$this->pagination->create_links();
		$page_data['pages'] 		= 	explode('&nbsp;', $str_pages);
		$page_data['page_name']		=	$page_name;
		$page_data['header_class']	=	'tt-nav nav-border-bottom';

		$this->load->view('blog/index', $page_data);
    }
}
