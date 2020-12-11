<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CModel extends CI_Model {

	public function getAll()
	{
		return $this->db->get('c_tabel')->result();
	}
	public function store($object)
	{
		return $this->db->insert('c_tabel', $object);
	}

	

}

/* End of file CModel.php */
/* Location: ./application/models/CModel.php */