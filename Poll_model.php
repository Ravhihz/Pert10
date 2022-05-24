<?php
class Poll_model extends CI_Model{
function __construct()
{
  parent::__construct();
  $this->tabel ="polling";
}
function getData(){
  $this->db->select('pilihan,jumlahvote');
  $this->db->form($this->tabel);
  $this->db->order_by('pilihan','asc');
  $query = $this->db->get();
  $row =$query->result_array();
  return $row;
}
}
