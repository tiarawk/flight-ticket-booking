<?php 
class M_transportation extends CI_Model{

	public function tambah($data){
		$this->db->insert('transportation', $data);
	}

	function data($number,$offset){
        return $query = $this->db->get('transportation',$number,$offset)->result();       
    }

    function jumlah_data(){
        return $this->db->get('transportation')->num_rows();
    }

    public function hapus($id){
    	$this->db->where("id",$id);
    	$this->db->delete('transportation');
    }

     public function edit($id){
    	$this->db->where("id",$id);
    	return $this->db->get('transportation');
    }

     public function showedit(){
    	$this->db->get('transportation')->result();
    
    }

    public function update($id,$data){
    	$this->db->where("id",$id);
    	$this->db->update('transportation',$data);
    }

    function gettrans(){
        return $this->db->get('transportation')->result();
    }

    public function pencarian($asal,$tujuan,$tgl){
        $this->db->like('rute_from',$asal);
        $this->db->like('rute_to',$tujuan);
        $this->db->like('depart_at',$tgl);
        return $this->db->get('rute')->result();
    }

    public function detail($id){

        $this->db->where('id',$id);
        return $this->db->get('rute');
    }
} 

?>