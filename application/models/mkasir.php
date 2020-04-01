<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mkasir extends CI_Model {

	public function __construct(){
			parent:: __construct();
	}

	public function getProduk(){
			$this->db->select('*');
			$this->db->from('penjualan');
			$this->db->join('produk', 'produk.idproduk = penjualan.idproduk');
			
			$query = $this->db->get();
			if($query->num_rows() != 0) {
				return $query->result();
			}
			else {
				return false;
			}
				
		}

	public function getProdukById()
	{
		$idpro = $this->db->select("MAX(idproduk) as kd_max ");
		$increment = "";
		if ($idpro->num_rows()>0) {
			foreach ($idpro->result() as $id) {
				$nilai = ((int)$nilai->kd_max)+1;
				$increment = sprintf("%04s",$nilai);
			}
		}
		else {
			$increment = "00001";
		}

		return $increment;

		
	}

	
}
/* End of file mkasir.php */
/* Location: ./application/models/mkasir.php */