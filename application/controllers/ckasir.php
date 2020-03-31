<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class ckasir extends CI_Controller {
		
		public function __construct()
		{
			parent::__construct();
			
		}

		public function index()
		{
			$data['title'] = "Kasir";
			$this->load->view("kasir_view", $data);
		}
	
	}
	
	/* End of file ckasir.php */
	/* Location: ./application/controllers/ckasir.php */
?>