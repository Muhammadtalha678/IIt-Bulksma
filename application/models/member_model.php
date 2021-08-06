<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model {

	public function validate_login($email,$password)
	{
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$query = $this->db->get('member');
		if ($query->num_rows() == 1) {
			// var_dump($query->row());exit();
			return $query->row();
		}
		return FALSE;
	}
	public function getData($email,$password)
	{
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$query = $this->db->get('member');
		return $query->row();
	}
	public function updatePassword($email,$newpasswordobject)
	{
		$this->db->where('email', $email);
		$this->db->update('member', $newpasswordobject);
		return $this->db->affected_rows();
	}

}

/* End of file member_model.php */
/* Location: ./application/models/member_model.php */
 ?>