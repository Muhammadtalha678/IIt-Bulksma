<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Subscriber extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->model('subscriber_model','subscriber');
			if (!$this->session->userdata('is_login')) {
				redirect('/admin','refresh');
			}
		}
	
		public function index()
		{
			if ($this->input->get('search')) {
				$this->db->like('full_name', $this->input->get('search'), 'BOTH');
			}
			$config['base_url'] = base_url().'/admin/subscriber/index';
			$config['total_rows'] = $this->subscriber->count_all();
			$config['per_page'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 10 ;
			$config['uri_segment'] = 4;
			$config['num_links'] = 5;
			
			
			$this->pagination->initialize($config);
			$uri_segment = $this->uri->segment(4);
			if ($this->input->get('search')) {
				$this->db->like('full_name', $this->input->get('search'), 'BOTH');
			}
			$data['subsData'] = $this->subscriber->getAllSubsData($config['per_page'],$uri_segment);
			// var_dump($subsData);exit();
			$data['title'] = 'Manage Subscriber';
			$data['maincontent'] = '/admin/subscriber/index';
			$this->load->view('/admin/layout/master', $data);
		}
		public function add()
		{
			$data['title'] = 'Add Subscriber';
			$data['maincontent'] = '/admin/subscriber/add_subscriber';
			$this->form_validation->set_rules('create_date', 'Date', 'required');
			$this->form_validation->set_rules('full_name', 'Full name', 'required');
			$this->form_validation->set_rules('email', 'email', 'required');
			if ($this->input->server('REQUEST_METHOD') == 'POST') {
				if ($this->form_validation->run() == TRUE) {
				$date = date_create($this->input->post('create_date'));
				$newDate = date_format($date,'d-m-y');
				// var_dump($newDate);exit();/
				$subValue = [
					'create_date' => $newDate,
					'full_name' => $this->input->post('full_name'),
					'email' => $this->input->post('email')
				];
				$this->subscriber->create($subValue);
				redirect('/admin/subscriber','refresh');
						
				}
			}
			$this->load->view('/admin/layout/master', $data);
		}
		public function edit($subsID)
		{
			$data['title'] = 'Edit Subscriber';
			$data['maincontent'] = '/admin/subscriber/edit_subscriber';
			$data['singleData'] = $this->subscriber->getSingleData($subsID);
			if ($this->input->server('REQUEST_METHOD') == 'POST') {
				$date = date_create($this->input->post('create_date'));
				$newDate = date_format($date,'d-m-y');
				$subNewValue = [
					'create_date' => $newDate,
					'full_name' => $this->input->post('full_name'),
					'email' => $this->input->post('email')
				];
				$this->subscriber->updateSubsingleData($subsID,$subNewValue);
				redirect('/admin/subscriber','refresh');
			}
			$this->load->view('/admin/layout/master', $data);
		}
		public function status($subsID)
		{
			$row = $this->subscriber->getSingleData($subsID);
			$newstatus = ($row->status == 'DEACTIVE') ? 'ACTIVE' : 'DEACTIVE' ;
			$statusValue = ['status' => $newstatus];
			// var_dump($statusValue);exit();
			$this->subscriber->updateSubsingleData($subsID,$statusValue);
			redirect('/admin/subscriber','refresh');
		}
		public function delete($subsID)
		{
			$this->subscriber->remove($subsID);
			redirect('/admin/subscriber','refresh');
		}
	
	}
	
	/* End of file Member.php */
	/* Location: ./application/controllers/admin/Subscriber.php */
?>