<?php
class matakuliah extends CI_Controller {

	private $limit = 10;

	function __construct()
	{
		parent::__construct();
		#load library dan helper yang dibutuhkan
		$this->load->library(array('table','form_validation'));
		$this->load->helper(array('form', 'url'));
		$this->load->model('matakuliah_model','',TRUE);
	}

	function index($offset = 0, $order_column = 'kodemk', $order_type = 'asc')
	{

		if (empty($offset)) $offset = 0;
		if (empty($order_column)) $order_column = 'kodemk';
		if (empty($order_type)) $order_type = 'asc';
		//TODO: check for valid column
	 
		// load data
		$matakuliahs = $this->matakuliah_model->get_paged_list($this->limit, $offset, $order_column, $order_type)->result();
	 
		// generate pagination
		$this->load->library('pagination');
		$config['base_url'] = site_url('matakuliah/index/');
		$config['total_rows'] = $this->matakuliah_model->count_all();
		$config['per_page'] = $this->limit;
		$config['uri_segment'] = 3;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
	 
		// generate table data
		$this->load->library('table');
		$this->table->set_empty("&nbsp;");
		$new_order = ($order_type == 'asc' ? 'desc' : 'asc');
		$this->table->set_heading(
			'No',
			anchor('matakuliah/index/'.$offset.'/namamk/'.$new_order, 'Nama Mata Kuliah'),
			anchor('matakuliah/index/'.$offset.'/jmlsks/'.$new_order, 'Jumlah SKS'),
			anchor('matakuliah/index/'.$offset.'/semester/'.$new_order, 'Semester'),
			'Actions'
		);
		$i = 0 + $offset;
		foreach ($matakuliahs as $matakuliah){
			$this->table->add_row(++$i, 
								  $matakuliah->namamk,
								  $matakuliah->jmlsks, 
								  $matakuliah->semester, 
				anchor('matakuliah/view/'.$matakuliah->kodemk,'view',array('class'=>'view')).' '.
				anchor('matakuliah/update/'.$matakuliah->kodemk,'update',array('class'=>'update')).' '.
				anchor('matakuliah/delete/'.$matakuliah->kodemk,'delete',array('class'=>'delete','onclick'=>"return confirm('Apakah anda yakin ingin menghapus datamatakuliah?')"))
			);
		}
		$data['table'] = $this->table->generate();
		
		if ($this->uri->segment(3)=='delete_success')
			$data['message'] = 'Data berhasil dihapus';
		else if ($this->uri->segment(3)=='add_success')
			$data['message'] = 'Data berhasil ditambah';
		else
			$data['message'] = '';
		// load view
		$this->load->view('matakuliahList', $data);
	}

	
	function add(){
		// set common properties
		$data['title'] = 'Tambah matakuliah matakuliah';
		$data['action'] = site_url('matakuliah/add');
		$data['link_back'] = anchor('matakuliah/index/','Back to list of matakuliahs',array('class'=>'back'));

		$this->_set_rules();

		// run validation
		if ($this->form_validation->run() === FALSE){
			$data['message'] = '';
					// set common properties
			$data['title'] = 'Add new matakuliah';
			$data['message'] = '';
			$data['matakuliah']['kodemk']='';
			$data['matakuliah']['namamk']='';
			$data['matakuliah']['jmlsks']='';
			$data['matakuliah']['semester']='';
			$data['link_back'] = anchor('matakuliah/index/','Lihat Daftar matakuliah',array('class'=>'back'));
			$this->load->view('matakuliahEdit', $data);
		
		}else{
			// save data
			//$matakuliah = array('nama' => $this->input->post('nama'),
			//				'alamat' => $this->input->post('alamat'),
			//				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			//				'tanggal_lahir' => date('d-m-Y', strtotime($this->input->post('tanggal_lahir'))));

			$matakuliah = array('namamk' => $this->input->post('namamk'),
							'jmlsks' => $this->input->post('jmlsks'),
							'semester' => $this->input->post('semester'));
			$kodemk = $this->matakuliah_model->save($matakuliah);

			// set form input nama="id"
			$this->validation->kodemk = $kodemk;

			redirect('matakuliah/index/add_success');
			
		}
		
	}

	function view($kodemk){
		// set common properties
		$data['title'] = 'Detail Data matakuliah';
		$data['link_back'] = anchor('matakuliah/index/','Daftar matakuliah',array('class'=>'back'));

		// get matakuliah details
		$data['matakuliah'] = $this->matakuliah_model->get_by_id($kodemk)->row();

		// load view
		$this->load->view('matakuliahView', $data);
	}



	function update($kodemk){
		// set common properties
		$data['title'] = 'Update matakuliah';
		$this->load->library('form_validation');
		// set validation properties
		$this->_set_rules();
		$data['action'] = ('matakuliah/update/'.$kodemk);

		// run validation
		if ($this->form_validation->run() === FALSE){
		
			$data['message'] = '';
			$data['matakuliah'] = (array)$this->matakuliah_model->get_by_id($kodemk)->row();
			
			// $_POST['jenis_kelamin'] = strtoupper($data['matakuliah']['jenis_kelamin']);
			// $data['matakuliah']['tanggal_lahir'] = date('Y-m-d',strtotime($data['matakuliah']['tanggal_lahir']));

			// set common properties
			$data['title'] = 'Update matakuliah';
			$data['message'] = '';

		
		}else{
			// save data
			$kodemk = $this->input->post('kodemk');
			$matakuliah = array('namamk' => $this->input->post('namamk'),
							'jmlsks' => $this->input->post('jmlsks'),
							'semester' => $this->input->post('semester'));
							
			$this->matakuliah_model->update($kodemk,$matakuliah);
			$data['matakuliah'] = (array)$this->matakuliah_model->get_by_id($kodemk)->row_array();
			// set user message
			$data['message'] = 'update matakuliah success';
		}
		$data['link_back'] = anchor('matakuliah/index/','Daftar matakuliah',array('class'=>'back'));
		// load view
		$this->load->view('matakuliahEdit', $data);
	}

	function delete($kodemk){
		// delete matakuliah
		$this->matakuliah_model->delete($kodemk);
		// redirect to matakuliah list page
		redirect('matakuliah/index/delete_success','refresh');
	}

	// validation rules
	function _set_rules(){
			
		$this->form_validation->set_rules('namamk', 'Nama Mata Kuliah', 'required|trim');
		$this->form_validation->set_rules('jmlsks', 'Jumlah SKS', 'required');
		$this->form_validation->set_rules('semester', 'Semester', 'required');

	}

	// date_validation callback
	// function valid_date($str)
	// {
	// 	if(preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $str))
	// 	{
	// 		$this->form_validation->set_message('valid_date', 'date format is not valid. yyyy-mm-dd');
	// 		return false;
	// 	}
	// 	else
	// 	{
	// 		return true;
	// 	}
	// }
}
?>