<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Message extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('message_model','message');
		$this->load->model('category_model' , 'category');
		if (!$this->session->userdata('is_login')) {
			redirect('/admin','refresh');
		}
	}
	
	public function index()
	{
		$this->load->library('pagination');
		
		$config['base_url'] =  base_url().'admin/message/index';
		if ($this->input->get('search')) {
			$this->db->like('title', $this->input->get('search'), 'BOTH');
		}
		$config['total_rows'] = $this->message->count_all();
		$config['per_page'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 10;
		$config['uri_segment'] = $this->uri->segment(4);
		$config['num_links'] = 3;
		$this->pagination->initialize($config);
		
		
		$data['title'] = 'Manage Message';
		$data['maincontent'] = '/admin/message/index';
		if ($this->input->get('search')) {
			$this->db->like('title', $this->input->get('search'), 'BOTH');
		}
		$data['messageData'] = $this->message->get_all($config['per_page'],$this->uri->segment(5));
		$data['categoryData'] = $this->category->category_array();
		// var_dump($data['categoryData']);exit();
		$this->load->view('/admin/layout/master',$data);
	}
	public function add(){
		$data['title'] = 'Add Message';
		$data['maincontent'] = '/admin/message/add_message';
		$data['categories'] = $this->category->get_all();
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->form_validation->set_rules('create_date', 'Date', 'required');
			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('slug', 'Slug', 'required');
			$this->form_validation->set_rules('category_id', 'Select category', 'required');
			if ($this->form_validation->run() == TRUE) {
				
		$values=[
			'create_date' => $this->input->post('create_date'),
			'title' => $this->input->post('title'),
			'slug' => $this->input->post('slug'),
			'status' => $this->input->post('status'),
			'message' => $this->input->post('message'),
			'meta_description' => $this->input->post('meta_description'),
			'meta_keywords' => $this->input->post('meta_keywords'),
			'category_id' => $this->input->post('category_id')
		];
		// $this->load->model('message_model');
		$this->message->create($values);
		redirect('/admin/message/','refresh');
			}
		}
		$this->load->view('/admin/layout/master',$data);
	}
	public function edit($messageId){
		$data['title'] = 'Edit Message';
		$data['messageData'] = $this->message->getData($messageId);
		$data['categories'] = $this->category->get_all();
		$data['maincontent'] = '/admin/message/edit_message';
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$values = [
			'create_date' => $this->input->post('create_date'),
			'title' => $this->input->post('title'),
			'slug' => $this->input->post('slug'),
			'status' => $this->input->post('status'),
			'message' => $this->input->post('message'),
			'meta_description' => $this->input->post('meta_description'),
			'meta_keywords' => $this->input->post('meta_keywords'),
			'category_id' => $this->input->post('category_id')
		];
		$this->message->update($messageId,$values);
		redirect('/admin/message','refresh');
		}
		$this->load->view('/admin/layout/master', $data);
	}
	public function status($messageId)
	{
		$row = $this->message->getData($messageId);
		$newStatus = ($row->status == 'DEACTIVATE') ? 'ACTIVATE' : 'DEACTIVATE' ;
		$values = ['status' => $newStatus];
		$this->message->update($messageId, $values);
		redirect('/admin/message/','refresh');
	}
	public function delete($messageId)
	{
		$this->message->remove($messageId);
		redirect('/admin/message/','refresh');
	}
}