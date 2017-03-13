<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pegawai_model');
	}
	public function index()
	{
		$data['data_pegawai']=$this->pegawai_model->getDataPegawai();
		$this->load->view('pegawai',$data);	
	}

}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */

 ?>