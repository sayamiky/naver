<?php
class Model_paket extends CI_Model{
    
    
  function tampilkan_data()
  {    
    return $this->db->get('paket');
  }
    
  function tampilkan_data_paging($halaman,$batas)
  {
      return $this->db->query("select * from paket");
  }     
     
    function post(){
        $data=array(
           'namapaket'=>  $this->input->post('namapaket'),
           'hargapaket' => $this->input->post('hargapaket'),
           'fotopaket' => $this->input->post('fotopaket')

                    );
        $this->db->insert('paket',$data);
    }
    
    
    function edit()
    {
        $data=array(
            'namapaket'=>  $this->input->post('namapaket'),
           'hargapaket' => $this->input->post('hargapaket'),
           'fotopaket' => $this->input->post('fotopaket')

                    );
        $this->db->where('idpaket',$this->input->post('idpaket'));
        $this->db->update('paket',$data);
    }
    
    function get_one($id)
    {
        $param  =   array('idpaket'=>$id);
        return $this->db->get_where('paket',$param);
    }
    
    
    function delete($id)
    {
        $this->db->where('idpaket',$id);
        $this->db->delete('paket');
    }
}