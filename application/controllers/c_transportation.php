<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_transportation extends CI_Controller {
		function __construct() {
			parent::__construct();
			$this->load->model('m_transportation');
			$this->load->helper('url');
		}
	
	public function index(){
			$this->load->database();
		$jumlah_data = $this->m_transportation->jumlah_data();
		$this->load->library('pagination');

		$config['base_url'] = base_url().'index.php/c_transportation/index/';
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
		$data['transportation'] = $this->m_transportation->data($config['per_page'],$from);
		$data['transportation'] = $this->m_transportation->gettrans();

		$this->load->view('v_transportation', $data);
		}

	public function tambah(){
			$op = $this->input->post('op');
			$id = $this->input->post('id');
			$name = $this->input->post('name');
			$code = $this->input->post('code');
			$description = $this->input->post('description');
			$seat_qty = $this->input->post('seat_qty');
			

			
			$data = array(
				'name' => $name,
				'code' => $code,
				'description' => $description,
				'seat_qty' => $seat_qty,
				
			);

		if($op=="tambah"){
			$this->m_transportation->tambah($data);
		}
		else{
			$this->m_transportation->update($id,$data);
		}
	
		redirect('c_transportation');
		}

	public function hapus($id){

		$this->m_transportation->hapus($id);
		redirect('c_transportation');
	}

	public function edit($id){
		$data['op'] = 'edit';
		$data['sql'] = $this->m_transportation->edit($id);
		$data['transportation'] = $this->m_transportation->gettrans();

		$this->load->view('v_edittransportation',$data);	
	}

	public function pencarian(){

		$asal = $this->input->get('asal');
		$tujuan = $this->input->get('tujuan');
		$depart = $this->input->get('depart');
		$tgl = date('Y-m-d', strtotime($depart));
		$penumpang = $this->input->get('penumpang');

			
		$data['hasil'] =   $this->m_transportation->pencarian($asal,$tujuan,$tgl,$penumpang);
		$this->load->view('v_pencarian',$data);
	}

	public function customer($id){

	$data['detail'] = $this->m_transportation->detail($id);

	$this->load->view('v_pesan',$data);

	}

	public function pesan(){
		$name = $this->input->get('name');
		$address = $this->input->get('address');
		$phone = $this->input->get('phone');
		$gender = $this->input->get('gender');
		$email = $this->input->get('email');

		
	}



	
}
