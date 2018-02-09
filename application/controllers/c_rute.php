<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_rute extends CI_Controller {
		function __construct() {
			parent::__construct();
			$this->load->model('m_rute');
			$this->load->helper('url');
		}
	
	public function index(){
			$this->load->database();
		$jumlah_data = $this->m_rute->jumlah_data();
		$this->load->library('pagination');

		$config['base_url'] = base_url().'index.php/c_rute/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;

		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';

		$config['first_tag_open'] = '<li>';
		$config['last_tag_open'] = '<li>';

		$config['next_tag_open'] = '<li>';
		$config['prev_tag_open'] = '<li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['first_tag_close'] = '</li>';
		$config['last_tag_close'] = '</li>';

		$config['next_tag_close'] = '</li>';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = "<li class=\"active\"><span><b>";
		$config['cur_tag_close'] = "</b></span></li>";

		$this->pagination->initialize($config);

		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['rute'] = $this->m_rute->data($config['per_page'],$from);
		$data['transportation'] = $this->m_rute->gettrans();

		$this->load->view('v_rute', $data);
		}

	public function tambah(){
			$op = $this->input->post('op');
			$id = $this->input->post('id');
			$id_trans = $this->input->post('maskapai');
			$depart_at = $this->input->post('depart_at');
			$arrive_at = $this->input->post('arrive_at');
			$rute_from = $this->input->post('from');
			$rute_to = $this->input->post('to');
			$price = $this->input->post('price');

			
			$data = array(
				'id_transportation' => $id_trans,
				'depart_at' => $depart_at,
				'arrive_at' => $arrive_at,
				'rute_from' => $rute_from,
				'rute_to' => $rute_to,
				'price' => $price
			);

		if($op=="tambah"){
			$this->m_rute->tambah($data);
		}
		else{
			$this->m_rute->update($id,$data);
		}
	
		redirect('c_rute');
		}

	public function hapus($id){

		$this->m_rute->hapus($id);
		redirect('c_rute');
	}

	public function edit($id){
		$data['op'] = 'edit';
		$data['sql'] = $this->m_rute->edit($id);
		$data['transportation'] = $this->m_rute->gettrans();

		$this->load->view('v_editrute',$data);	
	}



	
}
