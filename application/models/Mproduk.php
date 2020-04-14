<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mproduk extends CI_Model
	{
		
		public function __construct(){
			parent:: __construct();
		}

		public function getProduk(){
			$this->db->select('*');
			$this->db->from('produk');
			$this->db->join('kategori', 'kategori.idkategori = produk.idkategori');
			
			$query = $this->db->get();
			if($query->num_rows() != 0) {
				return $query->result_array();
			}
			else {
				return false;
			}
				
		}
	}
?>