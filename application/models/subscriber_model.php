<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Subscriber_model extends CI_Model {
	public function create($subValue)
	{
		$this->db->insert('subscriber', $subValue);
	}
	public function getAllSubsData($limit =NULL , $offset = NULL)
	{
		$subsData = $this->db->get('subscriber',$limit,$offset);
		// var_dump($subsData->result());exit();
		return $subsData->result();
	}
	public function getSingleData ($subsId)
	{
		$this->db->where('id', $subsId);
		$getSingleData = $this->db->get('subscriber');
		// var_dump($getSingleData->row());exit();
		return $getSingleData->row();
	}
	public function updateSubsingleData($subId,$subsNewData)
	{
		$this->db->where('id', $subId);
		$this->db->update('subscriber', $subsNewData);
	}
	public function remove($subId)
	{
		$this->db->where('id', $subId);
				$this->db->delete('subscriber');
	}
	public function count_all()
	{
		$query = $this->db->get('subscriber');
		// var_dump($query->num_rows());exit();
		return $query->num_rows();
	}
}
/* End of file subscriber_model.php */
/* Location: ./application/models/subscriber_model.php */