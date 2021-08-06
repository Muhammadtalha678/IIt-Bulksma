<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Member extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			if (!$this->session->userdata('is_login')) {
				redirect('/admin','refresh');
			}
		}
	
		public function index()
		{
			$data['title'] = 'Manage Member';
			$data['maincontent'] = '/admin/member/index';
			$this->load->view('/admin/layout/master', $data);
		}

		public function add()
		{
			
		}

		public function edit()
		{
			$data['title'] = 'Manage edit';
			$data['maincontent'] = '/admin/member/edit_member';
			$this->load->view('/admin/layout/master', $data);
		}
	
	}
	
	/* End of file Member.php */
	/* Location: ./application/controllers/admin/Member.php */
 ?>