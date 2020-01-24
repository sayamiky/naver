<?php
class jeniskamar extends CI_Controller {

	private $limit = 10;

	function __construct()
	{
		parent::__construct();
		#load library dan helper yang dibutuhkan
		$this->load->library(array('table','form_validation'));
		$this->load->helper(array('form', 'url'));
		$this->load->model('jeniskamar_model','',TRUE);
	}

	function index($offset = 0, $order_column = 'idjenis', $order_type = 'asc')
	{

		if (empty($offset)) $offset = 0;
		if (empty($order_column)) $order_column = 'idjenis';
		if (empty($order_type)) $order_type = 'asc';
		//TODO: check for valid column
	 
		// load data
		$jeniskamar = $this->jeniskamar_model->get_paged_list($this->limit, $offset, $order_column, $order_type)->result();
	 
		// generate pagination
		$this->load->library('pagination');
		$config['base_url'] = site_url('jeniskamar/index/');
		$config['total_rows'] = $this->jeniskamar_model->count_all();
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
			anchor('jeniskamar/index/'.$offset.'/namajenis/'.$new_order, 'Nama Jenis Kamar'),
			anchor('jeniskamar/index/'.$offset.'/hargakamar/'.$new_order, 'Harga Kamar'),
			anchor('jeniskamar/index/'.$offset.'/stokkamar/'.$new_order, 'Stok Kamar'),
			anchor('jeniskamar/index/'.$offset.'/fotokamar/'.$new_order, 'Foto Kamar'),
			'Actions'
		);
		$i = 0 + $offset;
		foreach ($jeniskamar as $jeniskamar){
			$this->table->add_row(++$i, 
								  $jeniskamar->namajenis,
								  $jeniskamar->hargakamar, 
								  $jeniskamar->stokkamar, 
								  $jeniskamar->fotokamar, 
				anchor('jeniskamar/view/'.$jeniskamar->idjenis,'view',array('class'=>'view')).' '.
				anchor('jeniskamar/update/'.$jeniskamar->idjenis,'update',array('class'=>'update')).' '.
				anchor('jeniskamar/delete/'.$jeniskamar->idjenis,'delete',array('class'=>'delete','onclick'=>"return confirm('Apakah anda yakin ingin menghapus data jenis kamar?')"))
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
		$this->load->view('jenisKamarList', $data);
	}

	
	function add(){
		// set common properties
		$data['title'] = 'Tambah Jenis Kamar';
		$data['action'] = site_url('jeniskamar/add');
		$data['link_back'] = anchor('jeniskamar/index/','Back to list of jeniskamars',array('class'=>'back'));

		$this->_set_rules();

		// run validation
		if ($this->form_validation->run() === FALSE){
			$data['message'] = '';
					// set common properties
			$data['title'] = 'Add new jeniskamar';
			$data['message'] = '';
			$data['jeniskamar']['idjenis']='';
			$data['jeniskamar']['namajenis']='';
			$data['jeniskamar']['hargakamar']='';
			$data['jeniskamar']['stokkamar']='';
			$data['jeniskamar']['fotokamar']='';
			$data['link_back'] = anchor('jeniskamar/index/','Lihat Daftar jeniskamar',array('class'=>'back'));
			$this->load->view('jeniskamarEdit', $data);
		
		}else{
			// save data
			//$matakuliah = array('nama' => $this->input->post('nama'),
			//				'alamat' => $this->input->post('alamat'),
			//				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			//				'tanggal_lahir' => date('d-m-Y', strtotime($this->input->post('tanggal_lahir'))));

			$jeniskamar = array('namajenis' => $this->input->post('namajenis'),
							'hargakamar' => $this->input->post('hargakamar'),
							'stokkamar' => $this->input->post('stokkamar'),
							'fotokamar' => $this->input->post('fotokamar'));
			$idjenis = $this->jeniskamar_model->save($jeniskamar);

			// set form input nama="id"
			$this->validation->idjenis = $isjenis;

			redirect('jeniskamar/index/add_success');
			
		}
		
	}

	function view($idjenis){
		// set common properties
		$data['title'] = 'Detail Data Jenis Kamar';
		$data['link_back'] = anchor('jeniskamar/index/','Daftar Jenis Kamar',array('class'=>'back'));

		// get matakuliah details
		$data['jeniskamar'] = $this->jeniskamar_model->get_by_id($idjenis)->row();

		// load view
		$this->load->view('jenisKamarView', $data);
	}



	function update($idjenis){
		// set common properties
		$data['title'] = 'Update jeniskamar';
		$this->load->library('form_validation');
		// set validation properties
		$this->_set_rules();
		$data['action'] = ('jeniskamar/update/'.$idjenis);

		// run validation
		if ($this->form_validation->run() === FALSE){
		
			$data['message'] = '';
			$data['jeniskamar'] = (array)$this->jeniskamar_model->get_by_id($idjenis)->row();
			
			// $_POST['jenis_kelamin'] = strtoupper($data['matakuliah']['jenis_kelamin']);
			// $data['matakuliah']['tanggal_lahir'] = date('Y-m-d',strtotime($data['matakuliah']['tanggal_lahir']));

			// set common properties
			$data['title'] = 'Update jeniskamar';
			$data['message'] = '';

		
		}else{
			// save data
			$idjenis = $this->input->post('idjenis');
			$jeniskamar = array('namajenis' => $this->input->post('namajenis'),
							'hargakamar' => $this->input->post('hargakamar'),
							'stokkamar' => $this->input->post('stokkamar'),
							'fotokamar' => $this->input->post('fotokamar'));
							
			$this->jeniskamar_model->update($idjenis,$jeniskamar);
			$data['jeniskamar'] = (array)$this->jeniskamar_model->get_by_id($idjenis)->row_array();
			// set user message
			$data['message'] = 'update jeniskamar success';
		}
		$data['link_back'] = anchor('jeniskamar/index/','Daftar jeniskamar',array('class'=>'back'));
		// load view
		$this->load->view('jeniskamarEdit', $data);
	}

	function delete($idjenis){
		// delete matakuliah
		$this->jeniskamar_model->delete($idjenis);
		// redirect to matakuliah list page
		redirect('jeniskamar/index/delete_success','refresh');
	}

	// validation rules
	function _set_rules(){
			
		$this->form_validation->set_rules('namajenis', 'Nama Jenis Kamar', 'required|trim');
		$this->form_validation->set_rules('hargakamar', 'Harga Kamar', 'required');
		$this->form_validation->set_rules('stokkamar', 'Stok Kamar', 'required');
		$this->form_validation->set_rules('fotokamar', 'Foto Kamar', 'required');

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