<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

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

	public function profile($page = 'customer'){

		$identitas = array(
			'Customer ID' => '12321312',
			'Register Date' => '12/11/2016',
			'Name' => 'Reza Nur',
			'Place of Birth' => 'Depok',
			'Date of Birth' => '02/12/2010',
			'Income' => '5.000.000 - 7.000.000',
			'Occupation' => 'Wartawan',
			'Phone / Mobile Number' => '02132147 / 0851238213',
			'Email' => 'rahmad@gmail.com',
			'Address' => 'Jl Haji Yahya 34',
			'Shop Name' => 'Mujur Jaya',
			'Shop ID' => '2121',
			'Last Purchase Date' => '13/10/2021',
			'Last Total Purchase Qty' => '200'
			);

		$data['namaFile'] = $page;
		$data = array(
			'namaFile' => $page,
			'imgsrc1' => '"assets/images/product_img.png"',
			'imgsrc2' => '"assets/images/product_img.png"',
			'stat1' => 34.32,
			'stat2' => 32720,
			'col1' => array(1,2,3,4,5,6,7,8,9,10,11,12),
			'col2'=> array('prod-1','prod-2','prod-3','prod-4','prod-5','prod-6','prod-7','prod-8','prod-9','prod-10','prod-11','prod-12'),
			'col3' => array(31,22,43,14,35,56,77,88,95,40,61,42),
			'identitas' => $identitas
			);
		
		$this->load->view($page, $data);
	}

	public function search(){

	}

	public function stat($page = 'stat_customer'){
		$data['namaFile'] = $page;
		$this->load->view($page, $data);
	}

	public function loyalty($page = 'loyalty'){

	}

}
