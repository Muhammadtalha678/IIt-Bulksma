<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('member_model','member');

	}
	public function index()
	{
		if ($this->session->userdata('is_login')) {
			redirect('/admin/category','refresh');
		}
		$data['title'] = 'Login | IIT Bulksms';
		$this->load->view('/admin/auth/login',$data);
	}
	public function forgot_password()
	{
		$data['title'] = 'Forgot Passowrd';
		$this->load->view('/admin/auth/forgot_password',$data);
	}
	public function validate()
	{
		$newEmail = $this->input->post('email');
		$newPassword = $this->input->post('password');
		$userData = $this->member->validate_login($newEmail,$newPassword);
		// var_dump($userData);exit();
		if ($userData) {
		$sessionValues = [
			'fullname' => $userData->full_name,
			'email' => $userData->email,
			'is_login' => TRUE

		];
		$this->session->set_userdata( $sessionValues );
		redirect('/admin/category','refresh');
		}
		else{
			$this->session->set_flashdata('message', 'Invalid Email or Password');
			redirect('/admin','refresh');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/admin','refresh');
	}
	public function change_password()
	{
		if (!$this->session->userdata('is_login')) {
			redirect('/admin/','refresh');
		}
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
		$this->form_validation->set_rules('old_password', 'Old Password', 'required');
		$this->form_validation->set_rules('new_password', 'New Password', 'required');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required');
			// var_dump($this->form_validation->run() == TRUE);exit();
		if ($this->form_validation->run() == TRUE) {
			$old_password = $this->input->post('old_password');
			$new_password = $this->input->post('new_password');
			$confirm_password = $this->input->post('confirm_password');
			$email = $this->session->userdata('email');
			$row = $this->member->getData($email,$old_password);
			if ($row) {
				if ($old_password == $new_password) {
					$this->session->set_flashdata('error_message','you cannot enter your old password');
					redirect('/admin/Home/change_password','refresh');
				}
				else{
					if ($new_password == $confirm_password) {
						$value =['password' => $new_password];
						$affected = $this->member->updatePassword($email,$value);
						if ($affected) {
							$this->session->set_flashdata('success_message', 'Password change successfully');
							redirect('/admin/Home/change_password','refresh');
						}
					}
					else{
						$this->session->set_flashdata('error_message', 'New and Confirm Password doesnot match');
						redirect('/admin/Home/change_password','refresh');
					}
				}
			}
			else{
				$this->session->set_flashdata('error_message', 'Old Password doesnot match');
				redirect('/admin/Home/change_password','refresh');
			}
		} 
			
		}
		$data['title'] = 'Change Password';
		$data['maincontent'] = '/admin/auth/change_password';
		$this->load->view('/admin/layout/master',$data);

	}
}
