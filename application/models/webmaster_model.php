<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Webmaster_model extends CI_Model {
	public function create($webValue)
		{
			// var_dump($this->db->insert('webmaster', $webValue));exit();
			$this->db->insert('webmaster', $webValue);
		}
	public function getwebdata()
			{
				$query = $this->db->get('webmaster');
				return $query->result();
				}
	public function getsingleweb($webId)
	{
		$query = $this->db->get('webmaster');
		return $query->row();
	}
	public function updateWeb($webId,$webvalue)
	{
		$this->db->where('id', $webId);
		$this->db->update('webmaster', $webvalue);
		return $this->db->affected_rows();
	}
	public function remove($webId)
	{
		$this->db->where('id', $webId);
		$this->db->delete('webmaster');
		return $this->db->affected_rows();
	}
	public function count_all()
	{
		$count = $this->db->get('webmaster');
		return $count->num_rows();
	}
}
/* End of file webmaster_model.php */
/* Location: ./application/models/webmaster_model.php */