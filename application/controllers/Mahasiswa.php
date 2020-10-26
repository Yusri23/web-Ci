<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		$data['nama_lengkap'] = "Yusri Ramdhani";
		$data['nim']  =  1810330009;
		$mahasiswa[0] =  array(
			'nim'     => 12345,
			'nama'    => "budi"
		);
		$data['mahasiswa'] = $mahasiswa;
		$this->load->view('mahasiswa_index', $data);
	}
	public function tambah()
	{
		$this->load->view('mahasiswa_tambah');
	}
}
