<?php
class jeniskamar extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_jeniskamar');
        // check_session();
    }
    
    function index(){
        $this->load->library('pagination'); 
        $config['base_url']   = base_url().'index.php/jeniskamar/index/';
        $config['total_rows'] = $this->model_jeniskamar->tampilkan_data()->num_rows();
        $config['per_page']   = 3; 
        $this->pagination->initialize($config); 
        $data['paging']     = $this->pagination->create_links();
        $halaman            = $this->uri->segment(3);
        $halaman            = $halaman==''?0:$halaman;
        $data['record']     = $this->model_jeniskamar->tampilkan_data_paging($halaman,$config['per_page']);
        $this->load->view('jeniskamarView', $data);
        // $this->load->view('jenisKamarList', $data);
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
            // proses jeniskamar
            $this->model_jeniskamar->post();
            redirect('jeniskamar');
        }
        else{
            //$this->load->view('jeniskamar/form_input');
            $this->load->view('jeniskamarAdd');
        }
    }
    
    function edit()
    {
        if(isset($_POST['submit'])){
            // proses jeniskamar
            $this->model_jeniskamar->edit();
            redirect('jeniskamar');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_jeniskamar->get_one($id)->row_array();
            //$this->load->view('jeniskamar/form_edit',$data);
            $this->load->view('jeniskamarEdit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_jeniskamar->delete($id);
        redirect('jeniskamar');
    }
}