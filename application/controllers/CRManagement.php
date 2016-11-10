<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRManagement extends CI_Controller {

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
		$this->customer_registration();
	}

	public function customer_registration($page = 'customer_registration'){
		$data['namaFile'] = $page;
		$this->load->view($page, $data);
	}

	public function customer_view($page = 'customer_view'){
		$data['namaFile'] = $page;
		$this->load->view($page, $data);
	}

}
