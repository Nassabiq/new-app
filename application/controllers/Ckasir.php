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
				'idproduk' => $this->input->post('idproduk'),
				'namaproduk' => $this->input->post('namaproduk'),
				'hargaproduk' => $this->input->post('hargaproduk'),
				'qty' => $this->input->post('qty'),
			);
			// var_dump (json_encode($data));
			$this->cart->insert($data);
			echo $this->show_cart();
		}
		public function show_cart()
		{
			$output = "";
			$no = 0;
			foreach ($this->cart->content() as $items) {
				$no++;
				$output .='
					<tr>
						<td>' .$items['namaproduk'].'</td>
						<td>' .$items['hargaproduk'].' </td>
						<td>' .$items['qty'].' </td>
						<td>' .$items['subtotal'].' </td>
						<td><button type="button" id=" '.$items['rowid'].' " class="hapus_cart btn btn-danger btn-xs">Batal</button></td>
					/tr>
				';
			}
			$output .="
			<tr>
				<th> Total </th>
				<th>"." Rp " .number_format($this->cart->total())." </th>
			</tr>
			";

			return $output;
		}

		public function load_cart(){
			echo $this->show_cart();
		}

		public function cek_ajax()
		{
			
			$idproduk = $this->input->post('idproduk');
			$data = $this->mproduk->getProduk($idproduk);
			

			echo json_encode($data, JSON_NUMERIC_CHECK);
			// print_r($data);
		}
		
	
	}
	
	/* End of file ckasir.php */
	/* Location: ./application/controllers/ckasir.php */
?>