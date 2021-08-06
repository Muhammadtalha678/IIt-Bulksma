<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Media extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('media_model','media');
		if (!$this->session->userdata('is_login')) {
			redirect('/admin','refresh');
		}
	}
	public function index()
	{
		if ($this->input->get('search')) {
			$this->db->like('title', $this->input->get('search'), 'BOTH');
		}
		$config['base_url'] = base_url().'/admin/media/index';
		$config['total_rows'] = $this->media->count_all();
		$config['per_page'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 10 ;
		$config['uri_segment'] = 4;
		$config['num_links'] = 5;
		
		
		$this->pagination->initialize($config);
		$uriSegment = $this->uri->segment(4);
		if ($this->input->get('search')) {
			$this->db->like('title', $this->input->get('search'), 'BOTH');
		}
		
		$data['title'] = 'Manage Media';
		$data['maincontent'] = '/admin/media/index';
		$data['medias'] = $this->media->get_all($config['per_page'],$uriSegment);
		$this->load->view('/admin/layout/master',$data);
	}
	public function add(){
		
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->form_validation->set_rules('create_date', 'Date', 'required');
			$this->form_validation->set_rules('title', 'title', 'required');
			$this->form_validation->set_rules('slug', 'slug', 'required');
			if ($this->form_validation->run() == TRUE) {
					$hasFileUploaded = FALSE;
					$fileUploadData = [];
					$fileData = [
						'upload_path' => './uploads/',
						'allowed_types' => 'gif|jpg|png',
						'encrypt_name' => TRUE
					];
					
					
					$this->upload->initialize($fileData);
					
					if ( ! $this->upload->do_upload('media_img')){
						$data['error'] =  $this->upload->display_errors();
						// var_dump( ! $this->upload->do_upload('media_img'));exit();
					}
					else{
						$fileUploadData = $this->upload->data();
						$hasFileUploaded = TRUE;
					}
					if ($hasFileUploaded) {
						$fileUploadData['file_name'];
						// var_dump($fileUploadData);exit();
						$date = date_create($this->input->post('create_date)'));
						$newDate = date_format($date,'Y-m-d');
						$mediaValue=[
							'create_date' => $newDate,
							'media_gallery' => $this->input->post('media_gallery'),
							'title' => $this->input->post('title'),
							'slug' => $this->input->post('slug'),
							'description' => $this->input->post('description') ,
							'embed_Code' => $this->input->post('embed_Code'),
							'media_img' => $fileUploadData['file_name'],
							'meta_Description' => $this->input->post('meta_Description'),
							'meta_Keyword' => $this->input->post('meta_Keyword')
						];
						$this->media->create($mediaValue);
						redirect('/admin/media','refresh');
					}
			}
			
		}
		$data['title'] = 'Add Media';
		$data['maincontent'] = '/admin/media/add_media';
		$this->load->view('/admin/layout/master',$data);
	}
	public function edit($mediaId){
		$data['title'] = 'Edit Media';
		$data['medias'] = $this->media->getData($mediaId);
		$data['maincontent'] = '/admin/media/edit_media';
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$newFileName = $this->input->post('old_img');
			$hasFileUploaded=FALSE;
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['encrypt_name'] = TRUE;
			
			
			$this->upload->initialize($config);
			
			if ( ! $this->upload->do_upload('media_img')){
				$data['error'] = $this->upload->display_errors();
			}
			else{
				$fileUploadData = $this->upload->data();
				// var_dump($imgName);exit();
				$newFileName = $fileUploadData['file_name'];
				$hasFileUploaded = TRUE;
			}
			$mediaValue=[
							'create_date' => $this->input->post('create_date'),
							'media_gallery' => $this->input->post('media_gallery'),
							'title' => $this->input->post('title'),
							'slug' => $this->input->post('slug'),
							'description' => $this->input->post('description') ,
							'embed_Code' => $this->input->post('embed_Code'),
							'media_img' => $newFileName,
							'meta_Description' => $this->input->post('meta_Description'),
							'meta_Keyword' => $this->input->post('meta_Keyword')
						];
					$affected = $this->media->update($mediaId,$mediaValue);
							// var_dump($affected->row());exit();
					if ($affected) {
						if ($hasFileUploaded) {
							if (file_exists('./uploads/'.$this->input->post('old_img'))) {
								unlink('./uploads/'.$this->input->post('old_img'));
							}
						}
					}
					redirect('/admin/media','refresh');
		}
		$this->load->view('/admin/layout/master', $data);
	}
	public function status($statusId)
	{
		$row = $this->media->getData($statusId);
		// var_dump($row->status);exit;
		$status=$row->status;
		$newStatus = ($status == 'DEACTIVE') ? 'ACTIVE' : 'DEACTIVE' ;
		$values = ['status' => $newStatus];
		$this->media->update($statusId,$values);
		redirect('/admin/media/','refresh');
	}
	public function delete($mediaId)
	{
		// var_dump($mediaId);exit();
		$row = $this->media->getData($mediaId);
		// var_dump($row?);exit();
		$imgName = $row->media_img;
		if ($imgName) {
		$affected = $this->media->remove($mediaId);
		unlink('./uploads/'.$imgName);
		redirect('/admin/media/','refresh');
		}
	}
	
}