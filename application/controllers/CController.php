<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CController extends CI_Controller {

	public function index()
	{
		$data['data_table'] = $this->CModel->getAll();
		$this->load->view('mahasiswa', $data);
	}
	public function __construct()
	{
		parent::__construct();
		$this->load->model('CModel');
	}
	public function tambah()
	{
		$this->load->view('tambah');
	}
	public function simpan_data()
	{
		$data = array(	'id_09' => $this->input->post('id_09'),
						'kolom_jurusan' => $this->input->post('kolom_jurusan'),
						'kolom_kelas' => $this->input->post('kolom_kelas'),
						'kolom_isi' => $this->input->post('kolom_isi')
					);
		
		$this->C4Model->store($data);
		redirect('CController/index','refresh');
	}

}

/* End of file CController.php */
/* Location: ./application/controllers/CController.php */