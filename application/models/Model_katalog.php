<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Model_katalog extends CI_Model {

    public function getAll() {
        $query = $this->db->get('produk');//mengambil semua data produk
        return $query;
    }

    public function create() {
        $data = array('nama_produk' => $this->input->post('nama_produk'),
            'harga'=>$this->input->post('harga'),
            'deskripsi_produk'=>$this->input->post('deskripsi_produk'));
		$query = $this->db->insert('produk', $data);
		return $query;
    }

    public function getbyid($id){
		$this->db->where('id', $id);//mengambil data produk berdasarkan id
		$query = $this->db->get('produk');
		return $query;
    }
    
    public function update(){
		$data = array('nama_produk' => $this->input->post('nama_produk'),
            'harga'=>$this->input->post('harga'),
            'deskripsi_produk'=>$this->input->post('deskripsi_produk'));
		$this->db->where('id', $this->input->post('id'));//mengupdate berdasarkan id
		$query = $this->db->update('produk', $data);
		return $query;
	}
	public function delete(){
		$this->db->where('id', $this->uri->segment(3));//menghapus berdasarkan id
		$query = $this->db->delete('produk');
		return $query;
	}

}

/* End of file Model_katalog.php */

?>