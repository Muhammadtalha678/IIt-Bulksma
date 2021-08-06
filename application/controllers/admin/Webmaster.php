<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Webmaster extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
				$this->load->model('webmaster_model','webmaster');
			if (!$this->session->userdata('is_login')) {
				redirect('/admin','refresh');
			}
		}
	
		public function index()
		{
			if ($this->input->get('seacrh')) {
				$this->db->like('full_name', $this->input->get('search'), 'BOTH');
			}
			
			$config['base_url'] = base_url().'/admin/webmaster/index';
			$config['total_rows'] = $this->webmaster->count_all();
			$config['per_page'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 10 ;
			// var_dump($config['per_page']);exit();
			$config['uri_segment'] = 4;
			$config['num_links'] = 5;
			
			
			$this->pagination->initialize($config);
			$segment = $this->uri->segment(4);
			if ($this->input->get('seacrh')) {
				$this->db->like('full_name', $this->input->get('search'), 'BOTH');
			}
			
			$data['webData'] = $this->webmaster->getwebdata($config['per_page'],$segment);
			$data['title'] = 'Manage Webmaster';
			$data['maincontent'] = '/admin/webmaster/index';
			$this->load->view('/admin/layout/master', $data);
		}
		public function add()
		{
			$data['title'] = 'Add Webmaster';
			$data['maincontent'] = '/admin/webmaster/add_webmaster';
			if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->form_validation->set_rules('create_date', 'Date', 'required');
			$this->form_validation->set_rules('full_name', 'Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
				if ($this->form_validation->run() == TRUE) {
					$hasfileuploaded = FALSE;
					$fileName = [];
					$config['upload_path'] = './uploads/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['encrypt_name'] = TRUE;
					
					
					$this->upload->initialize($config);
					
					if ( ! $this->upload->do_upload('media_img')){
						$data['error'] = $this->upload->display_errors();
					}
					else{
						$fileName = $this->upload->data();
						$hasfileuploaded = TRUE;
						// var_dump($fileName['file_name']);exit();
				// var_dump($this->input->post('media_img'));exit();
					}
					if ($hasfileuploaded) {
						
					$date = date_create($this->input->post('create_date'));
					$newDate = date_format($date,'Y-m-d');
					$webValue=[
						'create_date' => $newDate,
'full_name' => $this->input->post('full_name'),
'email' => $this->input->post('email'),
'profile' => $this->input->post('profile'),
'media_img' => $fileName['file_name'],
'meta_description' => $this->input->post('meta_description'),
'meta_keyword' => $this->input->post('meta_keyword')
						];
					$this->webmaster->create($webValue);
					redirect('/admin/webmaster','refresh');
					}
				}
			}
			$this->load->view('/admin/layout/master', $data);
		}
		public function edit($webID)
		{
			if ($this->input->server('REQUEST_METHOD') == 'POST') {
							$newfileName = $this->input->post('old_img');
							$imgName = [];
							$hasfileuploaded = FALSE;
							$config['upload_path'] = './uploads/';
							$config['allowed_types'] = 'gif|jpg|png';
							$config['encrypt_name'] = TRUE;
							
							
							$this->upload->initialize($config);
							
							if ( ! $this->upload->do_upload('media_img')){
								$data['error'] = $this->upload->display_errors();
							}
							else{
								$imgName = $this->upload->data();
								// var_dump($imgName);exit;
								$newfileName = $imgName['file_name'];
								// var_dump($newfileName);exit();
								$hasfileuploaded = TRUE;
							}
								$date = date_create($this->input->post('create_date'));
								$newDate = date_format($date,'Y-m-d');
								$webValue=[
										'create_date' => $newDate,
				'full_name' => $this->input->post('full_name'),
				'email' => $this->input->post('email'),
				'profile' => $this->input->post('profile'),
				'media_img' => $newfileName,
				'meta_description' => $this->input->post('meta_description'),
				'meta_keyword' => $this->input->post('meta_keyword')
										];
								// var_dump($webV);exit();
								$updateWebid = $this->webmaster->updateWeb($webID,$webValue);
								if ($updateWebid) {
									if ($hasfileuploaded) {
										if (file_exists('./uploads/'.$this->input->post('old_img'))) {
											unlink('./uploads/'.$this->input->post('old_img'));
										}
									}
									}
								redirect('/admin/webmaster/','refresh');
			}
			
			$data['title'] = 'Edit webmaster';
			$data['maincontent'] = '/admin/webmaster/edit_webmaster';
			$data['websingData'] = $this->webmaster->getsingleweb($webID);
			$this->load->view('/admin/layout/master', $data);
		}
		public function status($webID)
		{
			$row = $this->webmaster->getsingleweb($webID);
			$newStatus = ($row->status == 'DEACTIVE') ? 'ACTIVE' : 'DEACTIVE' ;
			$value = ['status' => $newStatus];
			$this->webmaster->updateWeb($webID,$value);
			redirect('/admin/webmaster','refresh');
		}
		
		public function delete($webID)
		{
				$row = $this->webmaster->getsingleweb($webID);
				$imgName = $row->media_img;
			if ($imgName) {
				$affected = $this->webmaster->remove($webID);
					unlink('./uploads/'.$imgName);
					redirect('/admin/webmaster','refresh');
			}
		}
	}
	
	/* End of file Member.php */
	/* Location: ./application/controllers/admin/Member.php */
?>