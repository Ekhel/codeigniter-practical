<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sample extends CI_Model {
  function sample()
  {
    $query = $this->db->query("SELECT * FROM tb_sample");

    return $query->result();
  }
  function create_sample($data)
  {
    $this->db->insert('tb_sample',$data);
  }
}
