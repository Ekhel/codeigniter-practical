<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_api extends CI_Model {
  function student()
  {
    $query = $this->db->query("SELECT * FROM tb_student");

    return $query->result();
  }
}
