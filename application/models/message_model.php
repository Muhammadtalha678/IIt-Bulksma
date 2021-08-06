<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Message_model extends CI_Model {
	public function create($options)
	{
			// $this->db->insert('message',$options);d
		$this->db->insert('message', $options);
			return $this->db->insert_id();
	}
	public function get_all($limit = NULL,$offset = NULL){
		$query = $this->db->get('message', $limit, $offset);
		return $query->result();
	}
	public function count_all(){
		$query = $this->db->get('message');
		return $query->num_rows();
	}
	public function getData($message_id){
		$this->db->where('id', $message_id);
		$query = $this->db->get('message');
		return $query->row();
	}
	public function update($message_id,$object){
		$this->db->where('id', $message_id);
		$this->db->update('message', $object);
	}
	public function remove($message_id){
		$this->db->where('id', $message_id);
		$this->db->delete('message');
	}
}
/* End of file category_model.php */
/* Location: ./application/models/category_model.php */