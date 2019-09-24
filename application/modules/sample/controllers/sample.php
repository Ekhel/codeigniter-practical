<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sample extends MX_Controller{
  public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
    $this->load->helper('url');
    $this->load->model('M_sample');
		Modules::run('auth/cek_login');
	}
  public function index()
  {
    $data['title'] = 'Sample Application';
    $data['sample'] = $this->M_sample->sample();
    $this->template->load('MasterLayout','r-sample',$data);
  }
  public function create_sample()
  {
    $data['title'] = 'Create Sample';
    $this->template->load('MasterLayout','c-sample',$data);
  }
  function create_sample_proses()
  {
    $nama_sample = $this->input->post('nama_sample');
    $deskripsi = $this->input->post('deskripsi');
    $modul = $this->input->post('modul');
    $function = $this->input->post('nama_sample');

    $data = array(
      'nama_sample'   => $nama_sample,
      'deskripsi'     => $deskripsi,
      'modul'         => $modul,
      'function'      => $function
    );
    $this->M_sample->create_sample($data);
    $this->session->set_flashdata(
      "simpan",
      "<div class='alert alert-success fade in'>
          <a href='#' class='close' data-dismiss='alert'>&times;</a>
          <strong>Success!</strong> Berhasil Menambahkan Data.
      </div>"
    );
    redirect('sample');
  }
}
