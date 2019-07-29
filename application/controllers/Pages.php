<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function index() {
        $this->load->model('model_katalog');
        $data = array('title'=>'Beranda',
                    'itemproduk'=>$this->model_katalog->getAll(),
                    'content'=>'pages/beranda');
        $this->load->view('templates/template',$data);
    }

    public function dashboard()
    {
        if (!$this->ion_auth->logged_in())//kalo belum login
        {
            redirect('login','refresh');   
        } else {
            $this->load->model('model_katalog');
            $data = array('title'=>'Halo dari controller page',
                        'itemproduk'=>$this->model_katalog->getAll(),
                        'content'=>'pages/home');
            $this->load->view('templates/template',$data);
        }
    }

    public function create() {
        if (!$this->ion_auth->logged_in())//kalo belum login
        {
            redirect('login','refresh');   
        } else {
            $data = array('title'=>'Form input produk',
                        'content'=>'pages/formkatalog');
    
            $this->load->view('templates/template',$data);
        }
    }

    public function simpan() {
        if (!$this->ion_auth->logged_in())//kalo belum login
        {
            redirect('login','refresh');   
        } else {
            $this->load->model('model_katalog');
            if ($this->model_katalog->create()) {
                // redirect('pages','refresh');
                echo "data berhasil disimpan";
            } else {
                echo "Data gagal disimpan";
            }
        }
    }

    public function edit() {
        if (!$this->ion_auth->logged_in())//kalo belum login
        {
            redirect('login','refresh');   
        } else {
            $this->load->model('model_katalog');
            $data = array('title'=>'Form input produk',
                        'itemproduk'=>$this->model_katalog->getbyid($this->uri->segment(3)),
                        'content'=>'pages/formeditkatalog');
    
            $this->load->view('templates/template',$data);
        }
    }

    public function update() {
        if (!$this->ion_auth->logged_in())//kalo belum login
        {
            redirect('login','refresh');   
        } else {
            $this->load->model('model_katalog');
            if ($this->model_katalog->update()) {
                redirect('pages','refresh');
            } else {
                echo "Data gagal diupdate";
            }
        }
    }

    public function delete() {
        if (!$this->ion_auth->logged_in())//kalo belum login
        {
            redirect('login','refresh');   
        } else {
            $this->load->model('model_katalog');
            if ($this->model_katalog->delete()) {
                
                redirect('pages','refresh');
                
            } else {
                echo "Data gagal dihapus";
            }
        }
    }

    public function profil() {
        $data = array("title" => "Halaman Profil",
                "content" => "pages/profil");
        return $this->load->view("templates/template", $data);
    }

    public function kontak() {
        $data = array("title" => "Halaman Kontak",
                "content" => "pages/kontak");
        return $this->load->view("templates/template", $data);
    }

    public function detail() {
        $this->load->model('model_katalog');
        $data = array('title'=>'Detail Produk',
                    'itemproduk'=>$this->model_katalog->getbyid($this->uri->segment(3)),
                    'content'=>'pages/detail');

        $this->load->view('templates/template',$data);
    }



}

/* End of file Pages.php */

?>