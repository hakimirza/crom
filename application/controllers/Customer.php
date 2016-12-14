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

	public function customer_search(){
		if(isset($_POST['id'])){
			$id= $_POST['id'];
			$query="SELECT * FROM customer WHERE CONCAT(id_customer,id_warung,id_agen)=$id";
			$dataResult=$this->db->query($query);
			$arr1=array();
			$i=0;

			$col1=array(1,2,3,4,5,6,7,8,9,10,11,12);
			$col2=array('shop-1','shop-2','shop-3','shop-4','shop-5','shop-6','shop-7','shop-8','shop-9','shop-10','shop-11','shop-12');
			$col3=array(31,22,43,14,35,56,77,88,95,40,61,42);
			
			$stat1="34.32";
			$stat2="32720";
			$summary=$stat1.",".$stat2;


			$strSortTable='<table class="table table-striped table-hover table-bordered" id="table-sortable">
			<thead>
                <tr>
                    <th>Item Code</th>
                    <th>Product Name</th>
                    <th>Purchase Qty</th>
                </tr>
            </thead>
            <tbody>';
                
            for ($j=0; $j<count($col1); $j++) {

                $strSortTable .="
                <tr>
                    <td>".$col1[$i]."</td>
                    <td>".$col2[$i]."</td>
                    <td>".$col3[$i]."</td>
                </tr>
                ";
            }

            $strSortTable .='</tbody></table>';

			foreach ($dataResult->result_array() as $key) {
				$idWarung=$key['id_warung'];
				$idAgen=$key['id_agen'];
				$query="SELECT nama_warung FROM warung WHERE id_warung=$idWarung AND id_agen=$idAgen";
				$dataResult2=$this->db->query($query);
				$namaWarung="";
				$img1='"'.$key['url_ktp'].'"';
				$img2='"assets/images/product_img.png"';
				foreach ($dataResult2->result_array() as $key2) {
					$namaWarung=$key2['nama_warung'];
				}
				
				echo $key['nama']."::".$img1."::".$img2."::
	            <tr>
	                <th>Customer ID</th>
	                <td>".$key['id_customer']."</td>
	            </tr>
	            <tr>
	                <th>Register Date</th>
	                <td>".$key['registered_date']."</td>
	            </tr>
	             <tr>
	                <th>Name</th>
	                <td>".$key['nama']."</td>
	            </tr>
	            <tr>
	                <th>Place of Birth</th>
	                <td>".$key["tempat_lahir"]."</td>
	            </tr>
	            <tr>
	                <th>Date of Birth</th>
	                <td>".$key["tgl_lahir"]."</td>
	            </tr>
	            <tr>
	                <th>Income</th>
	                <td>".$key['pendapatan_min']." - ".$key['pendapatan_max']."</td>
	            </tr>
	            <tr>
	                <th>Occupation</th>
	                <td>".$key['pekerjaan']."</td>
	            </tr>
	            <tr>
	                <th>Phone / Mobile Number</th>
	                <td>".$key['no_telp']."</td>
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
	                <th>Shop Name</th>
	                <td>".$namaWarung."</td>
	            </tr>
	            <tr>
	                <th>Shop ID</th>
	                <td>".$idWarung."</td>
	            </tr>
            	"."::".$strSortTable."::".$summary;

				$i++;
				
			}

		}elseif (isset($_POST['name'])) {
			$nama= $_POST['name'];
			$query="SELECT nama,id_customer,id_warung,id_agen FROM customer WHERE nama LIKE '%$nama%'";
			$dataResult=$this->db->query($query);
			$arr1=array();
			$i=0;$str="";
			foreach ($dataResult->result_array() as $key) {
				
				$str=$str.'
					<option>'.$key['nama']." : ".$key['id_customer'].$key['id_warung'].$key['id_agen'].'</option>
				';
				
				$i++;
				if($i==10){break;}
			}
			echo $str;	
		}

	}

	public function stat($page = 'stat_customer'){
		$data['namaFile'] = $page;
		$this->load->view($page, $data);
	}

	public function loyalty($page = 'loyalty'){

	}


}
