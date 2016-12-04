<?php if(! defined('BASEPATH')) exit('Akses langsung tidak diperbolehkan');

class Login_lib {

 // SET SUPER GLOBAL
	var $ci = NULL;
	public function __construct() {

		$this->ci =& get_instance();
	}

 // Fungsi login
	public function login($nip, $password) {

		$query = $this->ci->db->get_where('pegawai', array('id_pegawai' => $nip, 'password' => md5($password)));
		if($query->num_rows() == 1) {

			$row = $this->ci->db->query('SELECT nama FROM pegawai where id_pegawai = "'.$nip.'"');
			$admin = $row->row();
			$username = $admin->nama;
			$this->ci->session->set_userdata('nip', $nip);
			$this->ci->session->set_userdata('id_login', uniqid(rand()));
			$this->ci->session->set_userdata('username', $username);
			redirect(base_url('welcome'));
		}else{

			$this->ci->session->set_flashdata('galat','NIP atau password salah');
			redirect(base_url('login'));
		}
		return false;
	}

 // Proteksi halaman
	public function cek_login() {

		if($this->ci->session->userdata('nip') == '') {

			$this->ci->session->set_flashdata('Peringatan','Anda belum login');
			redirect(base_url('login'));
		}
	}

 // Fungsi logout
	public function logout() {

		$this->ci->session->unset_userdata('nip');
		$this->ci->session->unset_userdata('id_login');
		$this->ci->session->unset_userdata('username');
		$this->ci->session->set_flashdata('sukses','Anda berhasil logout');
		redirect(base_url('login'));
	}
}