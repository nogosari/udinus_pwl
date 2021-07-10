<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Main_Model');
		$this->load->library('upload');
	}

	public function index()
	{
		$header['title'] = 'Dashboard';
		$data['sekolah'] = $this->Main_Model->view_by_id('sekolah', [], 'result');
		$data['alert'] = $this->session->flashdata('alert');

		$this->load->view('template/header', $header);
		$this->load->view('main/dashboard', $data);
		$this->load->view('template/footer');
	}

	public function data_sekolah()
	{
		$data['alert'] = $this->session->flashdata('alert');
		$header['title'] = 'Data Sekolah';
		$id = $this->input->get('id');

		if($id)
		{
			$data['sekolah'] = $this->Main_Model->view_by_id('sekolah', ['id' => $id], 'row');
		}

		$this->load->view('template/header', $header);
		$this->load->view('main/data_sekolah', $data);
		$this->load->view('template/footer');
	}

	public function store()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$logo = $_FILES["logo"]["name"];

		// upload file
		if($logo){
			$str_file = str_replace(' ', '', $logo);
			$filename = date('YmdHis').'_'.$str_file;

		    $config['upload_path']          = './assets/upload/';
		    $config['allowed_types']        = '*';
		    $config['file_name']            = $filename;
		    $config['max_size']             = 0; 

		    $this->upload->initialize($config);

		    if ($this->upload->do_upload('logo')) {
		        $files = $this->upload->data("file_name");
		    }
		    $data['logo'] = $files;
		}

	    $data = array(
	    		'nama' => $nama,
	    		'alamat' => $alamat,
	    		);
	    if(!empty($id))
	    {
	    	$save = $this->Main_Model->process_data('sekolah', $data, ['id' => $id]);
	    }else{
	    	$save = $this->Main_Model->process_data('sekolah', $data);
	    }

	    if($save){
	    	$alert = '<div class="alert alert-success alert-dismissible fade show" role="alert">
						  <strong>Berhasil!</strong> Data berhasil tersimpan.
						  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';
  			$this->session->set_flashdata('alert', $alert);
	    	redirect(base_url('Main/data_sekolah'), 'refresh');
	    }else{
	    	show_404();
	    }
	}

	public function hapus()
	{
		$id = $this->input->get('id');
		$hapus = $this->db->delete('sekolah', array('id' => $id)); 

		if($hapus){
	    	$alert = '<div class="alert alert-success alert-dismissible fade show" role="alert">
						  <strong>Berhasil!</strong> Data berhasil dihapus.
						  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';
  			$this->session->set_flashdata('alert', $alert);
	    	redirect(base_url('Main'), 'refresh');
	    }else{
	    	show_404();
	    }		
	}

	function pdf()
	{
		$this->load->library('pdf');

		$id = $this->input->get('id');        
		$sekolah = $this->Main_Model->view_by_id('sekolah', ['id' => $id], 'row');
		$data['sekolah'] = $sekolah;
        $html = $this->load->view('main/pdf', $data, true);

        $filename = $sekolah->nama;
        $this->pdf->generatePDF($html, $filename, false);
	}

	function downloadPdf()
	{
		$this->load->library('pdf');

		$id = $this->input->get('id');        
		$sekolah = $this->Main_Model->view_by_id('sekolah', ['id' => $id], 'row');
		$data['sekolah'] = $sekolah;
        $html = $this->load->view('main/pdf', $data, true);

        $filename = $sekolah->nama;
        $this->pdf->generatePDF($html, $filename, true);
	}
}
