<?php
class model_kamar extends ci_model{
    
    function daftar_kamar()
    {
        $this->db->select('k.*, kk.namajenis');
        $this->db->from('kamar k');
        $this->db->join('jeniskamar kk','kk.namajenis=k.namajenis');
        $result=$this->db->get();
        return $result;
    }

    function post($data)
    {
        $this->db->insert('kamar',$data);

    }
    
    function get_one($id)
    {
        $param  =   array('idkamar'=>$id);
        return $this->db->get_where('kamar',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('idkamar',$id);
        $this->db->update('kamar',$data);
    }
    
    
    function delete($id)
    {
        $this->db->where('idkamar',$id);
        $this->db->delete('kamar');
    }

    function tampilkan_data_paging()
    {
        return $this->db->query("select * from kamar");
    } 

    function get(){
		$query = $this->db->query('SELECT * FROM jeniskamar');
        return $query->result();
	}
}