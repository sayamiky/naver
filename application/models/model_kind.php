<?php
class Model_kind extends CI_Model{
    
    
    function __construct()
	{
		parent::__construct();
	}

	function get(){
		$query = $this->db->query('SELECT * FROM jeniskamar');
        return $query->result();
	}  
  
}