<?php
class Login extends CI_Controller {

	private $limit = 10;

	function __construct()
	{
		parent::__construct();
		#load library dan helper yang dibutuhkan
		$this->load->library(array('table','form_validation'));
		$this->load->helper(array('form', 'url'));
		// $this->load->model('matakuliah_model','',TRUE);
	}

	function index()
	{
		$this->load->view('loginView.php');
    }
    
    function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_login->cek_login("index",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("index"));
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

}
?>