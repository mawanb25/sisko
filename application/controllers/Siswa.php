<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function index()
	{
		$this->template->load('template','siswa/siswa_data');
	}
}
