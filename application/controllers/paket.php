<?php
class paket extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_paket');
        // check_session();
    }
    
    function index(){
        $this->load->library('pagination'); 
        $config['base_url']   = base_url().'index.php/paket/index/';
        $config['total_rows'] = $this->model_paket->tampilkan_data()->num_rows();
        $config['per_page']   = 3; 
        $this->pagination->initialize($config); 
        $data['paging']     = $this->pagination->create_links();
        $halaman            = $this->uri->segment(3);
        $halaman            = $halaman==''?0:$halaman;
        $data['record']     = $this->model_paket->tampilkan_data_paging($halaman,$config['per_page']);
        $this->load->view('paketView', $data);
        // $this->load->view('paketList', $data);
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
            // proses paket
            $this->model_paket->post();
            redirect('paket');
        }
        else{
            //$this->load->view('paket/form_input');
            $this->load->view('paketAdd');
        }
    }
    
    function edit()
    {
        if(isset($_POST['submit'])){
            // proses paket
            $this->model_paket->edit();
            redirect('paket');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_paket->get_one($id)->row_array();
            //$this->load->view('paket/form_edit',$data);
            $this->load->view('paketEdit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_paket->delete($id);
        redirect('paket');
    }
}