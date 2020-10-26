<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		echo "ini function index";
		//$this->load->view('welcome_message');
	}
	public function nama()
	{
		echo "Hello Dhan, ";
	}
}
