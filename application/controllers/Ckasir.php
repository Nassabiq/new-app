<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Ckasir extends CI_Controller {
		
		public function __construct()
		{
			parent::__construct();
			$this->load->helper(array('url'));
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
				'id' => $this->input->post('idproduk'),
				'name' => $this->input->post('namaproduk'),
				'price' => $this->input->post('hargaproduk'),
				'qty' => $this->input->post('qty')
			);
			$tambah = $this->cart->insert($data);
			// print_r($data);
			// echo "berhasil";
		}
		public function del_cart()
		{
			$rowid = $this->uri->segment(3);
			$data = array(
				'rowid' => $rowid,
				'qty' => 0
			);
			$update = $this->cart->update($data);
			redirect('ckasir');
			
		}
		public function cancel_cart()
		{
			$cancel = $this->cart->destroy();
			redirect('ckasir');
			
		}

		public function cek_ajax()
		{
			
			$idproduk = $this->input->post('idproduk');
			$data = $this->mproduk->getProduk($idproduk);
			

			echo json_encode($data);
			// print_r($data);
		}
		
	
	}
	
	/* End of file ckasir.php */
	/* Location: ./application/controllers/ckasir.php */
?>