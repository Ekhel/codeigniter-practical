<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends MX_Controller{
  public function __construct()
	{
			parent::__construct();
			//$this->load->model('M_home');
	}
  public function index()
  {
    $data['title'] = 'Beranda';
    $this->template->load('MasterLayout','home',$data);
  }
}
