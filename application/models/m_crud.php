<?php 
class M_crud extends CI_Model{

	public function tambah($data){
		$this->db->insert('user', $data);
	}

	function data($number,$offset){
        return $query = $this->db->get('user',$number,$offset)->result();       
    }

    function jumlah_data(){
        return $this->db->get('rute')->num_rows();
    }

    public function hapus($id){
    	$this->db->where("id",$id);
    	$this->db->delete('user');
    }

     public function edit($id){
    	$this->db->where("id",$id);
    	return $this->db->get('user');
    }

     public function showedit(){
    	$this->db->get('user')->result();
    
    }

    public function update($id,$data){
    	$this->db->where("id",$id);
    	$this->db->update('user',$data);
    }
} 
?>