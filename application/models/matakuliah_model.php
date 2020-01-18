<?php

class Matakuliah_model extends CI_Model {
	
	private $primary_key= 'kodemk';
	private $table_name= 'matakuliah';

	function __construct(){
		parent::__construct();
	}

	function get_paged_list($limit = 10, $offset = 0, $order_column = '', $order_type = 'asc'){
		if (empty($order_column) || empty($order_type))
			$this->db->order_by($this->primary_key,'asc');
		else
			$this->db->order_by($order_column, $order_type);
		return $this->db->get($this->table_name, $limit, $offset);
	}
	
	function count_all(){
		return $this->db->count_all($this->table_name);
	}
	
	function get_by_id($kodemk){
		$this->db->where($this->primary_key, $kodemk);
		return $this->db->get($this->table_name);
	}
	
	function save($person){
		$this->db->insert($this->table_name, $person);
		return $this->db->insert_id();
	}
	
	function update($kodemk, $person){
		$this->db->where($this->primary_key, $kodemk);
		$this->db->update($this->table_name, $person);
	}
	
	function delete($kodemk){
		$this->db->where($this->primary_key, $kodemk);
		$this->db->delete($this->table_name);
	}
}