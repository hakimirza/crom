<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logistic extends CI_Controller {

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

	public function profile($page = 'logistic'){

		$identitas = array(
			'Logistic ID' => '12321312',
			'Logistic Name' => 'Titipan Kilat (TIKI)',
			'Address 1' => 'Jl. Margonda Raya 69',
			'Address 2' => 'Jatinegara, Jakarta Timur, DKI Jakarta',
			'Coverage Area' => 'Jakarta, Bogor, Depok',
			'Lead Time' => '5.000.000 - 7.000.000',
			'Shipment Period' => '22/12/21 - 23/12/22',
			'PIC Name' => 'Abdurrahman',
			'PIC Phone Number' => '08123456789',
			'Type of Business' => 'Cash',
			'Lead Time this Month' => '2 days',
			'Total Order this Month' => '2000 orders',
			'Order Ratio this Month' => '90 %'
			);

		$data['namaFile'] = $page;
		$data = array(

			'namaFile' => $page,
			'imgsrc1' => '"assets/images/product_img.png"',
			'imgsrc2' => '"assets/images/product_img.png"',
			'stat1' => 34.32,
			'stat2' => 32720,
			'col1' => array(1,2,3,4,5,6,7,8,9,10,11,12),
			'col2' => array('shop-1','shop-2','shop-3','shop-4','shop-5','shop-6','shop-7','shop-8','shop-9','shop-10','shop-11','shop-12'),
			'col3' => array(31,22,43,14,35,56,77,88,95,40,61,42),
			'identitas' => $identitas
			);
		$this->load->view($page, $data);
	}

	public function search(){
		
	}

	public function upload($page = 'upload_logistic'){
		$data['namaFile'] = $page;
		$this->load->view($page, $data);
	}

	public function inventory($page = 'inventory'){
		$data['namaFile'] = $page;
		$this->load->view($page, $data);
	}

	public function trackingOrder($page = 'trackingOrder'){
		$data['namaFile'] = $page;
		$this->load->view($page, $data);
	}

	public function showInvoice($page = 'invoiceOrder'){
		$this->load->view($page);
	}

}
