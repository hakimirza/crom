<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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
		$this->details();
	}

	public function details($page = 'product'){

		$identitas = array(
			'Shop ID' => '12321000',
			'Shop Name' => 'Indomie',
			'Owner' => 'Rahmad Abadi',
			'NPWP' => '2311231231123',
			'Shop Status' => 'Milik Sendiri',
			'Shop Category' => 'Groceries',
			'Phone/Mobile Number' => '02112312313 / 08512312312',
			'Email' => 'rahmad@abadi.com',
			'Address' => 'Jl Haji Yahya 45',
			'Regional' => 'Jabodetabek',
			'Latest Sold Date' => '13/10/2021',
			'Latest Order Date' => '13/10/2021',
			'Monthly Margin' => 'Rp 9.131.213,-',
			'Customer Acquisition' => '200',
			'Agent ID/Name' => '1243414 / Abdurrahhman'
			);

		$data = array(

			'namaFile' => $page,
			'imgsrc1' => '"assets/images/product_img.png"',
			'imgsrc2' => '"assets/images/product_img.png"',
			'stat1' => 34.32,
			'stat2' => 32720,
			'col1' => array(1,2,3,4,5,6,7,8,9,10,11,12),
			'col2' => array('prod-1','prod-2','prod-3','prod-4','prod-5','prod-6','prod-7','prod-8','prod-9','prod-10','prod-11','prod-12'),
			'col3' => array(31,22,43,14,35,56,77,88,95,40,61,42),
			'identitas' => $identitas
			);

		$this->load->view($page, $data);
	}

	public function search(){

	}

	public function stat($page = 'stat_prod'){
		$data['namaFile'] = $page;
		$this->load->view($page, $data);
	}

	public function upload($page = 'upload_prod'){

	}

}
