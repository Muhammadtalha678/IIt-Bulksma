<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Media_model extends CI_Model {
	public function create($object)
	{
		$this->db->insert('media', $object);
		return $this->db->insert_id();
	}
	public function get_all($limit = NULL ,$offset = NULL)
	{
		$query=$this->db->get('media',$limit,$offset);
		return $query->result();
	}
	public function getData($mediaID)
	{
		$this->db->where('id', $mediaID);
		$query = $this->db->get('media');
		// var_dump($query->row());exit();
		return $query->row();
	}
	public function update($mediaID,$object)
	{
		$this->db->where('id', $mediaID);
		$this->db->update('media', $object);
		return $this->db->affected_rows();
	}
	public function remove($mediaID)
	{
		$this->db->where('id', $mediaID);
		$this->db->delete('media');
		return $this->db->affected_rows();
	}
	public function count_all()
	{
		$query = $this->db->get('media');
		return $query->num_rows();
	}
}
/* End of file category_model.php */
/* Location: ./application/models/category_model.php */