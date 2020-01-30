<?php
class kamar extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('model_kamar'); 
        $this->load->model('model_kind','', TRUE); 
        // $this->load->model('model_gambar');
        // chek_session();
    }


    function index() 
    {
        $data['record'] = $this->model_kamar->daftar_kamar();
        // $this->load('template','jeniskamar/lihat_data',$data);
        $this->load->view('kamarView', $data);
    } 
     
    function post() 
    {
       $idkamar= $this->uri->segment(3);
       $data['dd_namajenis'] = $this->model_kind->get();
        if(isset($_POST['submit'])){
            // proses barang
            $idjenis       =   $this->input->post('idjenis');
            $namakamar       =   $this->input->post('namakamar');
            $fotokamar       =   $this->input->post('fotokamar');
            $deskripsi       =   $this->input->post('deskripsi');
            $data       = array('idjenis'=>$idjenis,
                                'namakamar'=>$namakamar,
                                'fotokamar'=>$fotokamar,
                                'deskripsi'=>$deskripsi
                            );
             if($idkamar!=0){
                $this->model_kamar->edit($data,$idkamar);
             }else{  
                $this->model_kamar->post($data);
             }               
           
            redirect('kamar');
        }
        else{
            $this->load->model('model_kamar');
           
            //$this->load->view('barang/form_input',$data);
            $data['kamar']=$this->model_kamar->tampilkan_data_paging();
            if($idkamar!=0){
                $data['kamar']=$this->model_kamar->get_one($idkamar)->row_array();

                // $this->template->load('template','jeniskamar/form_edit', $data);
                $this->load->view('kamarEdit', $data);
             }else{  
                $this->load->view('kamarAdd', $data);
                // $this->template->load('template','jeniskamar/form_input', $data);
             }  
         
        }
    }
    
    
    // function edit()
    // {
    //    if(isset($_POST['submit'])){
    //         // proses barang
    //         $id         =   $this->input->post('id_kamar');
    //         $no_kamar       =   $this->input->post('no_kamar');
    //         $harga_kamar       =   $this->input->post('harga_kamar');
    //         $fasilitas_kamar       =   $this->input->post('fasilitas_kamar');
    //         $status_kamar       =   $this->input->post('status_kamar');
    //         $idtipe       =   $this->input->post('idtipe');
    //        // $harga      =   $this->input->post('harga');
    //         $data       = array('no_kamar'=>$no_kamar,
    //                             'harga_kamar'=>$harga_kamar,
    //                             'fasilitas_kamar'=>$fasilitas_kamar,
    //                             'status_kamar'=>$status_kamar,
    //                             'idtipe'=>$idtipe,
    //                           //  'harga'=>$harga
    //                         );
    //         $this->model_kamar->edit($data,$id);
    //         redirect('kamar');
    //     }
    //     else{
    //         $id=  $this->uri->segment(3);
    //         $this->load->model('model_kamar');
    //         $data['tipekamar']   =  $this->model_kamar->tampilkan_data()->result();
    //         $data['record']     =  $this->model_kamar->get_one($id)->row_array();
    //         //$this->load->view('barang/form_edit',$data);
    //         $this->template->load('template','jeniskamar/form_edit',$data);
    //     }
    // }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_kamar->delete($id);
        redirect('kamar');
    }

    
}