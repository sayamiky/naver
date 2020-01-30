<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kind extends CI_Controller {
                                function __construct()
                {
                                parent:: __construct();
                                $this->load->model('model_kind','', TRUE);
                                //ini digunakan untuk dapat mengakses model m_bidang
                }

                public function index()
                {
                                $data['dd_namajenis'] = $this->model_kind->get();
                                $this->load->view('kindView',$data);
                }
}
?>