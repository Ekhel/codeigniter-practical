<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class api extends MX_Controller{
  function  __construct()
  {
    parent::__construct();
    $this->load->model('M_api');
  }
  function index()
  {
    $student = $this->M_api->student();
    $data['student'] = $student;
    $response = array();
    $posts = array();

    foreach($student as $item)
    {
      $posts[] = array(
        "id"              =>  $item->id_student,
        "nama"            =>  $item->name,
        "tgl_lahir"       =>  $item->date_birth,
        "jekel"           =>  $item->gender,
        "kota"            =>  $item->city
      );
    }

    $response['student'] = $posts;
    header('Content-Type: application/json');
    echo json_encode($response,TRUE);
  }
}
