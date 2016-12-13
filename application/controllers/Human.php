<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Human extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		$this->profile();
	}
	function __construct() {
		parent::__construct();
		$this->load->model('model_human');
		$this->load->helper(array('form', 'url'));
		$this->load->database();
	}
	public function upload($page = 'upload_human') {

		$data = array(
			'namaFile' => $page,
			'provinsi' => $this->model_human->getDaftarProvinsi(),
		);
		$this->load->view($page, $data);
	}

	public function getDaftarKota() {
		$option = '<option value=""> - Pilih Kota - </option>';
		$idProv = $_POST['id'];
		$kota = $this->model_human->getDaftarKota($idProv);
		foreach ($kota as $k) {
			$option .= "<option value='" . $k->id_kota . "'>" . $k->nama . "</option>";
		}
		echo $option;
	}
	public function getDaftarKecamatan() {
		$option = '<option value=""> - Pilih Kecamatan - </option>';
		$idKota = $_POST['id'];
		$kecamatan = $this->model_human->getDaftarKecamatan($idKota);
		foreach ($kecamatan as $k) {
			$option .= "<option value='" . $k->id_kec . "'>" . $k->nama . "</option>";
		}
		echo $option;
	}
	public function getDaftarKelurahan() {
		$option = '<option value=""> - Pilih Kelurahan - </option>';
		$idKec = $_POST['id'];
		$kelurahan = $this->model_human->getDaftarKelurahan($idKec);
		foreach ($kelurahan as $k) {
			$option .= "<option value='" . $k->id_kel . "'>" . $k->nama . "</option>";
		}
		echo $option;
	}

	public function upload_batch(){
		//echo "ok";
		$fileOp=explode("_", $_FILES["file"]["name"]);
		$target_dir = "data/excel_Human/";
		$target_file = $target_dir . basename($fileOp[1]);
		$uploadOk = 1;
		if (file_exists($target_file)) {
				echo "nama file telah ada";
				$uploadOk = 0;
		}

		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		if ($_FILES["file"]["size"] > 500000) {
		    echo "maaf ukuran file terlalu besar";
		    $uploadOk = 0;
		}
		// format file yg dimungkinkan
		if($imageFileType != "xls") {
		    echo "maaf hanya xls yang dimungkinkan";
		    $uploadOk = 0;
		}
		// error file
		if ($uploadOk == 0) {
		    echo "gagal upload file";

		// file siap diupload jika semua ok
		} else {
			
		    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
				$data["namaFile"]=$target_file."";
				$data["sizeRow"]=(int)$fileOp[0];
				$data["kode"]="uploadHuman";
				$page="data/Classes/upload/dataItem1";
				$this->load->view($page, $data);
		    } else {
		        echo "gagal upload file";
		    }
		}


	}

	public function update($page = 'update_human') {

		$data = array(
			'namaFile' => $page,
		);
		$this->load->view($page, $data);
	}

	public function userRegistration($page = 'user_registration') {

		$data = array(
			'namaFile' => $page,
		);
		$this->load->view($page, $data);
	}

	public function search() {

	}

	public function simpan() {
		$config['upload_path'] = './assets/foto_profil/'; //path folder
		$config['allowed_types'] = 'jpg|png';
		$config['overwrite'] = TRUE;
		$config['file_name'] = $this->input->post('nama');
		$this->load->library('upload', $config);
		$namaProv = $this->model_human->getNamaProvinsi($this->input->post('input_prov'));
		$namaKota = $this->model_human->getNamaKota($this->input->post('input_kota'));
		$namaKec = $this->model_human->getNamaKecamatan($this->input->post('input_kec'));
		$namaKel = $this->model_human->getNamaKelurahan($this->input->post('input_kel'));
		if ($this->upload->do_upload('file_foto')) {
			$dataregistrasi = array(
				'nip' => $this->input->post('nip'),
				'nama' => $this->input->post('nama'),
				'ttl' => $this->input->post('tp-lahir') . "," . $this->input->post('tg-lahir'),
				'alamat' => $this->input->post('alamat') . ",RT" . $this->input->post('rt') . "/RW" . $this->input->post('rw') . "," . $namaKel . "," . $namaKec . "," . $namaKota . "," . $namaProv . "(" . $this->input->post('kodepos') . ")",
				'jk' => $this->input->post('jk'),
				'agama' => $this->input->post('agama'),
				'status_kawin' => $this->input->post('kawin'),
				'no_telp' => $this->input->post('phone'),
				'email' => $this->input->post('email'),
				'kategori' => $this->input->post('cat'),
				'level' => $this->input->post('level'),
				'password' => md5($this->input->post('pass')),
				'path_foto' => $this->upload->data('file_path') . $this->upload->data('file_name'),
			);
			$this->model_human->simpan_data($dataregistrasi);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Registrasi berhasil !!</div></div>");
			redirect('upload_human');

		} else {
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Registrasi gagal !!</div></div>");
			// $this->session->set_flashdata('in', $this->upload->display_errors());
			redirect('upload_human');
		}
	}
}