<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class ckasir extends CI_Controller {
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('mkasir');
			$this->load->model('mproduk');
			$this->load->library('cart');
			date_default_timezone_set('Asia/Jakarta');
			
		}

		public function index()
		{
			$data['title'] = "Kasir";
			$data['produk'] = $this->mproduk->getProduk();

			$waktu = date('Ymhdis');
			$data['idtransaksi'] = $this->mkasir->getId();
			$data['tglpenjualan'] = date('Y-m-d H:i:s');


 			$this->load->view("kasir_view", $data);
		}

		public function add_cart()
		{
			$data = array(
				'idproduk' => $this->input->post('idproduk'),
				'namaproduk' => $this->input->post('namaproduk'),
				'hargaproduk' => $this->input->post('hargaproduk'),
				'qty' => $this->input->post('qty'), 
			);
			$this->cart->insert($data);
			echo $this->show_cart();
		}

		public function cetak()
		{


		}

		
	
	}
	
	/* End of file ckasir.php */
	/* Location: ./application/controllers/ckasir.php */
?>