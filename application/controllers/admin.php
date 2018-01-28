<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
		function __construct() {
			parent::__construct();
			$this->load->model('m_crud');
			$this->load->helper('url');
		}
	
	public function index(){
		$this->load->view('index');
		}


		function tampil(){
			$data['rute'] = $this->m_crud->tampil_data()->result();
			$this->load->view('tampil',$data);
		}

		function tambah_aksi(){
			$from = $this->input->post('from');
			$to = $this->input->post('to');
			$depart = $this->input->post('depart');
			$price = $this->input->post('price');
			$passenger = $this->input->post('passenger');

			$data = array(
				'rute_from' => $from,
				'rute_to' => $to,
				'depart_at' => $depart,
				'price' => $price,
				'passenger' => $passenger
			);
			$this->m_crud->input_data($data, 'rute');
			redirect('admin/index');
		}



	
}
