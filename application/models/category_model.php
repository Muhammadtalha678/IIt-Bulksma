<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category_model extends CI_Model {
	public function create($options)
	{
			$this->db->insert('category',$options);
			// var_dump($options);exit();
			return $this->db->insert_id();
	}
	public function get_all(){
		$query = $this->db->get('category');
		return $query->result();
	}
	public function remove($category_id){
		$this->db->where('id', $category_id);
		$this->db->delete('category');
	}
	public function getData($category_id){
		$this->db->where('id', $category_id);
		$query = $this->db->get('category');
		return $query->row();
	}
	public function update($category_id,$object){
		$this->db->where('id', $category_id);
		$this->db->update('category', $object);
	}
	public function get_data($limit = NULL,$offset = NULL){
		$query = $this->db->get('category', $limit, $offset);
		return $query->result();
	}
	public function count_all(){
		$query = $this->db->get('category');
		return $query->num_rows();
	}
	public function category_array()
	{
		$categories = $this->db->get('category');
		$categories = $categories->result();
		$newobject=[];
		foreach ($categories as $category) {
			$newobject[$category->id] = $category->title;
		}
			// var_dump($newobject);exit();
		return $newobject;
	}
}
/* End of file category_model.php */
/* Location: ./application/models/category_model.php */