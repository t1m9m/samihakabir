<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Samiha_model extends CI_Model {

    function add_category()
    {
        $data['name']               =   $this->input->post('name');
        $data['permalink']          =   $this->input->post('permalink');
        $data['description']        =   $this->input->post('description');
        $data['image_link']         =   $_FILES['image_link']['name'];
        $data['timestamp']          =   time();

        move_uploaded_file($_FILES['image_link']['tmp_name'] , 'uploads/category/' . $data['image_link']);

        $this->db->insert('category', $data);

        $this->session->set_flashdata('success', 'Category successfully added');

        redirect(base_url() . 'samiha/category', 'refresh');
    }

    function edit_category($param = '')
    {
        $data['name']               =   $this->input->post('name');
        $data['permalink']          =   $this->input->post('permalink');
        $data['description']        =   $this->input->post('description');

        $this->db->where('category_id', $param);
        $this->db->update('category', $data);

        $this->session->set_flashdata('success', 'Category successfully updated');

        redirect(base_url() . 'samiha/category', 'refresh');
    }

    function change_category_image($param = '')
    {
        $image_link				    =	$this->db->get_where('category', array('category_id' => $param))->row()->image_link;
        unlink('uploads/category/' . $image_link);

        $data['image_link']         =   $_FILES['image_link']['name'];

        move_uploaded_file($_FILES['image_link']['tmp_name'] , 'uploads/category/' . $data['image_link']);

        $this->db->where('category_id', $param);
        $this->db->update('category', $data);

        $this->session->set_flashdata('success', 'Category image successfully changed');

        redirect(base_url() . 'samiha/category', 'refresh');
    }

    function delete_category($param = '')
    {
        $image_link				    =	$this->db->get_where('category', array('category_id' => $param))->row()->image_link;
		unlink('uploads/category/' . $image_link);

        $this->db->where('category_id', $param);
        $this->db->delete('category');

        $this->session->set_flashdata('success', 'Category successfully deleted');

        redirect(base_url() . 'samiha/category', 'refresh');
    }

    function add_restaurant()
    {
        $data['name']               =   $this->input->post('name');
        $data['permalink']          =   $this->input->post('permalink');
        $data['address']            =   $this->input->post('address');
        $data['image_link']         =   $_FILES['image_link']['name'];
        $data['serial']             =   $this->input->post('serial');
        $data['timestamp']          =   time();

        move_uploaded_file($_FILES['image_link']['tmp_name'] , 'uploads/restaurant/' . $data['image_link']);

        $this->db->insert('restaurant', $data);

        $this->session->set_flashdata('success', 'Restaurant successfully added');

        redirect(base_url() . 'samiha/restaurant', 'refresh');
    }

    function edit_restaurant($param = '')
    {
        $data['name']               =   $this->input->post('name');
        $data['permalink']          =   $this->input->post('permalink');
        $data['address']            =   $this->input->post('address');
        $data['serial']             =   $this->input->post('serial');

        $this->db->where('restaurant_id', $param);
        $this->db->update('restaurant', $data);

        $this->session->set_flashdata('success', 'Restaurant successfully updated');

        redirect(base_url() . 'samiha/restaurant', 'refresh');
    }

    function change_restaurant_image($param = '')
    {
        $image_link				    =	$this->db->get_where('restaurant', array('restaurant_id' => $param))->row()->image_link;
        unlink('uploads/restaurant/' . $image_link);

        $data['image_link']         =   $_FILES['image_link']['name'];

        move_uploaded_file($_FILES['image_link']['tmp_name'] , 'uploads/restaurant/' . $data['image_link']);

        $this->db->where('restaurant_id', $param);
        $this->db->update('restaurant', $data);

        $this->session->set_flashdata('success', 'Restaurant image successfully changed');

        redirect(base_url() . 'samiha/restaurant', 'refresh');
    }

    function delete_restaurant($param = '')
    {
        $image_link			  	    =   $this->db->get_where('restaurant', array('restaurant_id' => $param))->row()->image_link;
		unlink('uploads/restaurant/' . $image_link);

        $this->db->where('restaurant_id', $param);
        $this->db->delete('restaurant');

        $this->session->set_flashdata('success', 'Restaurant successfully deleted');

        redirect(base_url() . 'samiha/restaurant', 'refresh');
    }

    function add_article()
    {
        $data['name']                =   $this->input->post('name');
        $data['permalink']           =   $this->input->post('permalink');
        $data['times']               =   0;
        $data['ambience']            =   $this->input->post('ambience');
        $data['food_review']         =   $this->input->post('food_review');
        $data['restaurant_image']    =   time() . $_FILES['restaurant_image']['name'];
        $data['preview']             =   $this->input->post('preview');
        $data['beverages']           =   $this->input->post('beverages');
        $data['service']             =   $this->input->post('service');
        $data['food_image']          =   time() . $_FILES['food_image']['name'];
        $data['additional_notes']    =   $this->input->post('additional_notes');
        $data['category_id']         =   $this->input->post('category_id');
        $data['restaurant_id']       =   $this->input->post('restaurant_id');
        $data['year']                =   date('Y', time());
        $data['love']                =   0;
        $data['timestamp']           =   time();

        move_uploaded_file($_FILES['restaurant_image']['tmp_name'] , 'uploads/article/' . $data['restaurant_image']);
        move_uploaded_file($_FILES['food_image']['tmp_name'] , 'uploads/article/' . $data['food_image']);

        $this->db->insert('article', $data);

        $this->session->set_flashdata('success', 'Article successfully added');

        redirect(base_url() . 'samiha/article', 'refresh');
    }

    function edit_article($param = '')
    {
        $data['name']                =   $this->input->post('name');
        $data['permalink']           =   $this->input->post('permalink');
        $data['ambience']            =   $this->input->post('ambience');
        $data['food_review']         =   $this->input->post('food_review');
        $data['preview']             =   $this->input->post('preview');
        $data['beverages']           =   $this->input->post('beverages');
        $data['service']             =   $this->input->post('service');
        $data['additional_notes']    =   $this->input->post('additional_notes');
        $data['category_id']         =   $this->input->post('category_id');
        $data['restaurant_id']       =   $this->input->post('restaurant_id');

        $this->db->where('article_id', $param);
        $this->db->update('article', $data);

        $this->session->set_flashdata('success', 'Article successfully updated');

        redirect(base_url() . 'samiha/article', 'refresh');
    }

    function change_article_restaurant_image($param = '')
    {
        $restaurant_image			 =	 $this->db->get_where('article', array('article_id' => $param))->row()->restaurant_image;
        unlink('uploads/article/' . $restaurant_image);

        $data['restaurant_image']    =   time() . $_FILES['restaurant_image']['name'];

        move_uploaded_file($_FILES['restaurant_image']['tmp_name'] , 'uploads/article/' . $data['restaurant_image']);

        $this->db->where('article_id', $param);
        $this->db->update('article', $data);

        $this->session->set_flashdata('success', 'Article restaurant image successfully changed');

        redirect(base_url() . 'samiha/article', 'refresh');
    }

    function change_article_food_image($param = '')
    {
        $food_image			         =	 $this->db->get_where('article', array('article_id' => $param))->row()->food_image;
        unlink('uploads/article/' . $food_image);

        $data['food_image']          =   time() . $_FILES['food_image']['name'];

        move_uploaded_file($_FILES['food_image']['tmp_name'] , 'uploads/article/' . $data['food_image']);

        $this->db->where('article_id', $param);
        $this->db->update('article', $data);

        $this->session->set_flashdata('success', 'Article food image successfully changed');

        redirect(base_url() . 'samiha/article', 'refresh');
    }

    function delete_article($param = '')
    {
        $restaurant_image			 =	 $this->db->get_where('article', array('article_id' => $param))->row()->restaurant_image;
		unlink('uploads/article/' . $restaurant_image);
        $food_image			         =	 $this->db->get_where('article', array('article_id' => $param))->row()->$food_image;
        unlink('uploads/article/' . $food_image);

        $this->db->where('article_id', $param);
        $this->db->delete('article');

        $this->session->set_flashdata('success', 'Article successfully deleted');

        redirect(base_url() . 'samiha/article', 'refresh');
    }

    function edit_comment($param = '')
    {
        $data['status']               =     $this->input->post('status');

        $this->db->where('comment_id', $param);
        $this->db->update('comment', $data);

        $this->session->set_flashdata('success', 'Comment successfully updated');

        redirect(base_url() . 'samiha/comment', 'refresh');
    }

    function delete_comment($param = '')
    {
        $this->db->where('comment_id', $param);
        $this->db->delete('comment');

        $this->session->set_flashdata('success', 'Comment successfully deleted');

        redirect(base_url() . 'samiha/comment', 'refresh');
    }
}
