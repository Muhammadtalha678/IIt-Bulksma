<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('category_model','category');
		if (!$this->session->userdata('is_login')) {
			redirect('/admin','refresh');
		}
	}
	public function index()
	{
		$data['title'] = 'Manage Category';
		$data['maincontent'] = 'admin/category/index';
		$data['categories'] = $this->category->get_all();
		$this->load->library('pagination');
		if ($this->input->get('search')) {
			$this->db->like('title', $this->input->get('search'), 'BOTH');
		}
	
	$config['base_url'] = base_url().'admin/category/index';
	$config['total_rows'] = $this->category->count_all();
	$config['per_page'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 10;
	$config['uri_segment'] = 4;
	$config['num_links'] = 5;
	
	
	$this->pagination->initialize($config);
	$uri_segment = $this->uri->segment(4);
	if ($this->input->get('search')) {
			$this->db->like('title', $this->input->get('search'), 'BOTH');
		}
	$data['categories'] = $this->category->get_data($config['per_page'],$uri_segment);
	// var_dump($data['categories']  );exit();
		$this->load->view('admin/layout/master',$data);
	}
	public function add()
	{
		
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->form_validation->set_rules('create_date', 'Date ', 'required');
			$this->form_validation->set_rules('title', 'title', 'required');
			$this->form_validation->set_rules('slug', 'slug', 'required');
			if ($this->form_validation->run() == TRUE) {
				$values=[
				'create_date' => $this->input->post('create_date'),
				'title' => $this->input->post('title'),
				'slug' => $this->input->post('slug'),
				'status' => $this->input->post('status'),
				'meta_description' => $this->input->post('meta_description'),
				'meta_keywords' => $this->input->post('meta_keywords'),
			];
			$this->category->create($values);
			redirect('/admin/category/','refresh');
			}
		}
		$data['title'] = 'Add Category';
		$data['maincontent'] = 'admin/category/add_category';
		$this->load->view('admin/layout/master',$data);
	}
	public function edit($categoryId)
	{
		$data['title'] = 'Edit Category';
		$data['categoryData'] = $this->category->getData($categoryId);
		$data['maincontent'] = 'admin/category/edit';
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$values=[
				'create_date' => $this->input->post('create_date'),
				'title' => $this->input->post('title'),
				'slug' => $this->input->post('slug'),
				'status' => $this->input->post('status'),
				'meta_description' => $this->input->post('meta_description'),
				'meta_keywords' => $this->input->post('meta_keywords'),
			];
			$this->category->update($categoryId, $values);
			redirect('/admin/category/','refresh');
		}
		$this->load->view('admin/layout/master',$data);
	}
	public function delete($categoryId)
	{
		$this->category->remove($categoryId);
		redirect('/admin/category','refresh');
}
public function status($categoryId){
	$row = $this->category->getData($categoryId);
	$newstatus = ($row->status == 'DEACTIVE') ? 'ACTIVE' : 'DEACTIVE' ;
	$values= ['status' => $newstatus];
	$this->category->update($categoryId,$values);
	redirect('/admin/category','refresh');
	}
	


	
	

}
// public function add()
	// 	{
		// 		$data['title'] = 'Add Category';
		// 		$data['maincontent'] = 'admin/category/add_category';
		// 		$this->load->view('admin/layout/master',$data);
		// 		if ($this->input->server('REQUEST_METHOD') == 'POST') {
				// 				$values=[
				// 				'create_date' => $this->input->post('create_date'),
				// 				'title' => $this->input->post('title'),
				// 				'slug' => $this->input->post('slug'),
				// 				'status' => $this->input->post('status'),
				// 				'meta_description' => $this->input->post('meta_description'),
				// 				'meta_keywords' => $this->input->post('meta_keywords'),
			// 			];
			
			// 			$this->category->create($values);
			// 			redirect('/admin/category/','refresh');
		// 		}
	// 	}