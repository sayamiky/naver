<?php
class Model_jeniskamar extends CI_Model{
    
    
  function tampilkan_data()
  {    
    return $this->db->get('jeniskamar');
  }
    
  function tampilkan_data_paging($halaman,$batas)
  {
      return $this->db->query("select * from jeniskamar");
  }     
     
    function post(){
        $data=array(
           'namajenis'=>  $this->input->post('namajenis'),
           'hargakamar' => $this->input->post('hargakamar'),
           'stokkamar' => $this->input->post('stokkamar')

                    );
        $this->db->insert('jeniskamar',$data);
    }
    
    
    function edit()
    {
        $data=array(
            'namajenis'=>  $this->input->post('namajenis'),
           'hargakamar' => $this->input->post('hargakamar'),
           'stokkamar' => $this->input->post('stokkamar')

                    );
        $this->db->where('idjenis',$this->input->post('idjenis'));
        $this->db->update('jeniskamar',$data);
    }
    
    function get_one($id)
    {
        $param  =   array('idjenis'=>$id);
        return $this->db->get_where('jeniskamar',$param);
    }
    
    
    function delete($id)
    {
        $this->db->where('idjenis',$id);
        $this->db->delete('jeniskamar');
    }
}