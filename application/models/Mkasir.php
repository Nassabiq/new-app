<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkasir extends CI_Model {

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

		public function getId()
		{
			$this->db->select('MAX(penjualan.idtransaksi) as idtransaksi', false);
			$query = $this->db->get('penjualan');

			if ($query->num_rows() <> 0) {
				$data = $query->row();
				$kode = intval($data->idtransaksi) + 1;
			}
			else
			{
				$kode = 1;
			}

			$batas = str_pad($kode, 6, "0", STR_PAD_LEFT);
			$idtampil = "UQMED".$batas;
			return $idtampil;
		}

		public function simpanTransaksi()
		{
			# code...
		}
	
	}

	

/* End of file mkasir.php */
/* Location: ./application/models/mkasir.php */