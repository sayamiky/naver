<?php 
class model_operator extends CI_Model {
    
    function login($username,$password)
    {
        $chek=  $this->db->get_where('petugas',array('username'=>$username,'password'=>$password));
        if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
    }
    
    
    function tampildata()
    {
        return $this->db->get('petugas');
    }
    
    function get_one($id)
    {
        $param  =   array('id_admin'=>$id);
        return $this->db->get_where('petugas',$param);
    }
}