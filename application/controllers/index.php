<?php
class Index extends CI_Controller {

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

		// if (empty($offset)) $offset = 0;
		// if (empty($order_column)) $order_column = 'kodemk';
		// if (empty($order_type)) $order_type = 'asc';
		// //TODO: check for valid column
	 
		// // load data
		// $matakuliahs = $this->matakuliah_model->get_paged_list($this->limit, $offset, $order_column, $order_type)->result();
	 
		// // generate pagination
		// $this->load->library('pagination');
		// $config['base_url'] = site_url('matakuliah/index/');
		// $config['total_rows'] = $this->matakuliah_model->count_all();
		// $config['per_page'] = $this->limit;
		// $config['uri_segment'] = 3;
		// $this->pagination->initialize($config);
		// $data['pagination'] = $this->pagination->create_links();
	 
		// // generate table data
		// $this->load->library('table');
		// $this->table->set_empty("&nbsp;");
		// $new_order = ($order_type == 'asc' ? 'desc' : 'asc');
		// $this->table->set_heading(
		// 	'No',
		// 	anchor('matakuliah/index/'.$offset.'/namamk/'.$new_order, 'Nama Mata Kuliah'),
		// 	anchor('matakuliah/index/'.$offset.'/jmlsks/'.$new_order, 'Jumlah SKS'),
		// 	anchor('matakuliah/index/'.$offset.'/semester/'.$new_order, 'Semester'),
		// 	'Actions'
		// );
		// $i = 0 + $offset;
		// foreach ($matakuliahs as $matakuliah){
		// 	$this->table->add_row(++$i, 
		// 						  $matakuliah->namamk,
		// 						  $matakuliah->jmlsks, 
		// 						  $matakuliah->semester, 
		// 		anchor('matakuliah/view/'.$matakuliah->kodemk,'view',array('class'=>'view')).' '.
		// 		anchor('matakuliah/update/'.$matakuliah->kodemk,'update',array('class'=>'update')).' '.
		// 		anchor('matakuliah/delete/'.$matakuliah->kodemk,'delete',array('class'=>'delete','onclick'=>"return confirm('Apakah anda yakin ingin menghapus datamatakuliah?')"))
		// 	);
		// }
		// $data['table'] = $this->table->generate();
		
		// if ($this->uri->segment(3)=='delete_success')
		// 	$data['message'] = 'Data berhasil dihapus';
		// else if ($this->uri->segment(3)=='add_success')
		// 	$data['message'] = 'Data berhasil ditambah';
		// else
		// 	$data['message'] = '';
		// load view
		$this->load->view('indexView.php');
	}

}
?>