<?php
class customer extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_customer');
        // check_session();
    }
    
    function index(){
        $this->load->library('pagination'); 
        $config['base_url']   = base_url().'index.php/customer/index/';
        $config['total_rows'] = $this->model_customer->tampilkan_data()->num_rows();
        $config['per_page']   = 3; 
        $this->pagination->initialize($config); 
        $data['paging']     = $this->pagination->create_links();
        $halaman            = $this->uri->segment(3);
        $halaman            = $halaman==''?0:$halaman;
        $data['record']     = $this->model_customer->tampilkan_data_paging($halaman,$config['per_page']);
        $this->load->view('customerView', $data);
        // $this->load->view('jenisKamarList', $data);
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
            // proses customer
            $this->model_customer->post();
            redirect('customer');
        }
        else{
            //$this->load->view('customer/form_input');
            $this->load->view('customerAdd');
        }
    }
    
    function edit()
    {
        if(isset($_POST['submit'])){
            // proses customer
            $this->model_customer->edit();
            redirect('customer');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_customer->get_one($id)->row_array();
            //$this->load->view('customer/form_edit',$data);
            $this->load->view('customerEdit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_customer->delete($id);
        redirect('customer');
    }
}