<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

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

	public function profile($page = 'shop'){

		$identitas = array(
			'Shop ID' => '12321312',
			'Shop Name' => 'Toko Maju Jaya',
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
			'lat' => 52.1,
			'lon' => 11.3,
			'col1' => array(1,2,3,4,5,6,7,8,9,10,11,12),
			'col2' => array('shop-1','shop-2','shop-3','shop-4','shop-5','shop-6','shop-7','shop-8','shop-9','shop-10','shop-11','shop-12'),
			'col3' => array(31,22,43,14,35,56,77,88,95,40,61,42),
			'identitas' => $identitas
			);

		$this->load->view($page, $data);
	}

	public function shop_search(){
		if(isset($_POST['id'])){
			$id= $_POST['id'];
			$query="SELECT * FROM warung WHERE CONCAT(id_warung,id_agen)=$id";
			$dataResult=$this->db->query($query);
			$arr1=array();
			$i=0;
			foreach ($dataResult->result_array() as $key) {
				$idWarung=$key['id_warung'];
				$idAgen=$key['id_agen'];
				$query="SELECT nama FROM pegawai WHERE id_pegawai=$idAgen";
				$dataResult2=$this->db->query($query);
				$namaPegawai="";

				foreach ($dataResult2->result_array() as $key2) {
					$namaPegawai=$key2['nama'];
				}
				
				$urlKtp='<img src="'.$key['url_foto_warung'].'" class="img-responsive img-rounded" alt="Shops Photo">';
				echo $key['nama_warung']."::".$urlKtp."::
	            <tr>
	                <th>Shop ID</th>
	                <td>".$key['id_warung'].$key['id_agen']."</td>
	            </tr>
	            <tr>
	                <th>Shop Name</th>
	                <td>".$key['nama_warung']."</td>
	            </tr>
	             <tr>
	                <th>Owner</th>
	                <td>".$key['pemilik']."</td>
	            </tr>
	            <tr>
	                <th>NPWP</th>
	                <td>".$key["npwp"]."</td>
	            </tr>
	            <tr>
	                <th>Shop Status</th>
	                <td>".$key["status"]."</td>
	            </tr>
	            <tr>
	                <th>Shop Category</th>
	                <td>".$key['kategori']."</td>
	            </tr>
	            <tr>
	                <th>Phone/Mobile Number</th>
	                <td>".$key['no_telp']."/".$key['no_mobile']."</td>
	            </tr>
	            <tr>
	                <th>Email</th>
	                <td>".$key['email']."</td>
	            </tr>
	            <tr>
	                <th>Address</th>
	                <td>".$key['alamat_detil']."</td>
	            </tr>
	            <tr>
	                <th>Regional</th>
	                <td>"."Regional"."</td>
	            </tr>
	             <tr>
	                <th>Latest Sold Date</th>
	                <td>"."latest sold date"."</td>
	            </tr>
	            <tr>
	                <th>Latest Orde Date</th>
	                <td>"."latest orde date"."</td>
	            </tr>
	            <tr>
	                <th>Monthly Margin</th>
	                <td>"."Monthly Margin"."</td>
	            </tr>
	            <tr>
	                <th>Customer Acquiaition</th>
	                <td>"."Customer Acquiaition"."</td>
	            </tr>
	            <tr>
	                <th>Agent ID/Name</th>
	                <td>".$key['id_agen']."/".$namaPegawai."</td>
	            </tr>
            	";

				$i++;
				
			}

		}elseif (isset($_POST['name'])) {
			$nama= $_POST['name'];
			$query="SELECT nama_warung,id_warung,id_agen FROM warung WHERE nama_warung LIKE '%$nama%'";
			$dataResult=$this->db->query($query);
			$arr1=array();
			$i=0;$str="";
			foreach ($dataResult->result_array() as $key) {
				
				$str=$str.'
					<option>'.$key['nama_warung']." : ".$key['id_warung'].$key['id_agen'].'</option>
				';
				
				$i++;
				if($i==10){break;}
			}
			echo $str;	
		}
	}

	public function stat_shop($page = 'stat_shop'){
		$data['namaFile'] = $page;
		$this->load->view($page, $data);
	}

}
