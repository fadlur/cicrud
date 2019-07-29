<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('ion_auth');

	}
	public function index()
	{
		if ($this->input->post()) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('remember', 'Remember me', 'integer');
			if ($this->form_validation->run()==TRUE) {
				$remember = (bool) $this->input->post('remember');
				if ($this->ion_auth->login($this->input->post('email'),$this->input->post('password'),$remember)) {
					redirect('pages','refresh');
				}else{
					$this->session->flashdata('message',$this->ion_auth->errors());
					redirect('login','refresh');
				}
			}
		}
		if (!$this->ion_auth->logged_in()) {
			$data = array('content' => 'home/formlogin',
				'title'=>'Login Page',
				'description'=>'Login page');
			$this->load->view('templates/template',$data);
		}else{
            if ($this->ion_auth->in_group('admin')) {
                redirect('pages','refresh');
            }elseif ($this->ion_auth->in_group('members')) {
            	redirect('members','refresh');
            }else{
				redirect('login','refresh');
			}
        }
	}
	public function logout(){
		$this->ion_auth->logout();
  		redirect('login', 'refresh');
	}

	public function registrasi(){
        $data = array('content' => 'home/formregistrasi',
        'title'=>'Form Registrasi',
		'message'=>null);
		$this->load->view('templates/template', $data);
	}
	public function prosesregistrasi(){
		if ($this->input->post()) {
			$this->load->library('form_validation');
			$this->load->helper(array('security'));
			$this->form_validation->set_rules('first_name', 'Nama Depan', 'trim|required|xss_clean');
			$this->form_validation->set_rules('last_name', 'Nama Belakang', 'trim|required|xss_clean');
			$this->form_validation->set_rules('phone', 'No Tlp', 'trim|required|xss_clean');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
			if ($this->form_validation->run()==false) {
				$data = array('content' => 'home/formregistrasi',
				'message'=>validation_errors());
				$this->load->view('templates/template', $data);
			}else{
				$password = $this->input->post('password');
				$email = $this->input->post('email');
				$additional_data = array(
										'first_name' => $this->input->post('first_name'),
										'last_name' => $this->input->post('last_name'),
										'phone'=>$this->input->post('phone')
										);
				if (!$this->ion_auth->email_check($email))//cek email sudah terdaftar apa belum
				{
					$group = array('2'); // Sets user ke grup member
					if ($this->ion_auth->register($username, $password, $email, $additional_data, $group)) {
						redirect('login');
					}else{
						$data = array('content' => 'home/formregistrasi',
						'message'=>'Proses registrasi gagal diproses');
						$this->load->view('templates/template', $data);
					}
				}else{
					$data = array('content' => 'home/formregistrasi',
					'message'=>'Email sudah terdaftar');
					$this->load->view('templates/template', $data);
				}
			}
		}
	}

}

/* End of file Login.php */
/* Location: .//var/www/fadlur/apps/controllers/Login.php */