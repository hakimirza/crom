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
	public function index()
	{
		$this->profile();
	}

	public function upload($page = 'upload_human'){

		$data = array(
			'namaFile' => $page
			);
		$this->load->view($page, $data);
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

	public function update($page = 'update_human'){
		
		$data = array(
			'namaFile' => $page
			);
		$this->load->view($page, $data);
	}

	public function userRegistration($page = 'user_registration'){
		
		$data = array(
			'namaFile' => $page
			);
		$this->load->view($page, $data);
	}

	public function search(){

	}

}
