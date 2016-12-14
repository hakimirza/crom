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
		if(isset($_POST['id'])){
			$id= $_POST['id'];
			$query="SELECT * FROM logistik WHERE id_logistik=$id";
			$dataResult=$this->db->query($query);
			$arr1=array();
			$i=0;
			$col1=array(1,2,3,4,5,6,7,8,9,10,11,12);
			$col2=array('shop-1','shop-2','shop-3','shop-4','shop-5','shop-6','shop-7','shop-8','shop-9','shop-10','shop-11','shop-12');
			$col3=array(31,22,43,14,35,56,77,88,95,40,61,42);
			$img1='"assets/images/product_img.png"';
			$stat1="34.32";
			$stat2="32720";
			$CoverageArea='Jakarta, Bogor, Depok';
			$summary=$img1.",".$stat1.",".$stat2;
			//tag <table> coba dipindahkan e html pas gk jalan fungsinya
			$strSortTable='<table class="table table-striped table-hover table-bordered" id="table-sortable">
			<thead>
                <tr>
                    <th>Shop ID</th>
                    <th>Shop Name</th>
                    <th>Order Ratio</th>
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
				$arrGps="52.1:11.3,51.2:22.2,49.4:35.9"; //ambil dari db
				//ambil dari db
				//$urlKtp='<img src="'.$key['url_foto_warung'].'" class="img-responsive img-rounded" alt="Shops Photo">';
				echo $key['nama']."::
	            <tr>
	                <th>Logistic ID</th>
	                <td>".$key['id_logistik']."</td>
	            </tr>
	            <tr>
	                <th>Logistic Name</th>
	                <td>".$key['nama']."</td>
	            </tr>
	             <tr>
	                <th>Address 1</th>
	                <td>".$key['alamat_detil']."</td>
	            </tr>
	             <tr>
	                <th>Address 2</th>
	                <td>".$key['alamat_kel']."</td>
	            </tr>
	            <tr>
	                <th>Coverage Area</th>
	                <td>".$key["nama_region"]."</td>
	            </tr>
	            <tr>
	                <th>Lead Time</th>
	                <td>5.000.000 - 7.000.000</td>
	            </tr>
	            <tr>
	                <th>Shipment Period</th>
	                <td>22/12/21 - 23/12/22</td>
	            </tr>
	            <tr>
	                <th>PIC NAME</th>
	                <td></td>
	            </tr>
	            <tr>
	                <th>PIC Phone Number</th>
	                <td>".$key['no_telp']."</td>
	            </tr>
	            <tr>
	                <th>Type of Business</th>
	                <td>Cash</td>
	            </tr>
	            <tr>
	                <th>Lead Time this Month</th>
	                <td>2 days</td>
	            </tr>
	             <tr>
	                <th>Total Order this Month</th>
	                <td>2000 orders</td>
	            </tr>
	            <tr>
	                <th>Order Ratio this Month</th>
	                <td>90 %</td>
	            </tr>
            	"."::".$arrGps."::".$strSortTable."::".$summary."::".$CoverageArea;

				$i++;
				
			}

		}elseif (isset($_POST['name'])) {

			$nama= $_POST['name'];
			$query="SELECT nama,id_logistik FROM logistik WHERE nama LIKE '%$nama%'";
			$dataResult=$this->db->query($query);
			$arr1=array();
			$i=0;$str="";
			foreach ($dataResult->result_array() as $key) {
				
				$str=$str.'
					<option>'.$key['nama']." : ".$key['id_logistik'].'</option>
				';
				
				$i++;
				if($i==10){break;}
			}
			echo $str;	
		}
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

	public function upload_logistic_batch(){
		$fileOp=explode("_", $_FILES["file"]["name"]);
		$target_dir = "data/excel_logistic/";
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
				$data["kode"]="logistic";
				$page="data/Classes/upload/dataItem1";
				$this->load->view($page, $data);
		    } else {
		        echo "gagal upload file";
		    }
		}
	}

	public function upload_single_logistic(){

		$query="INSERT INTO logistik(id_logistik,nama,no_telp,email,alamat_detil,alamat_kel,id_pegawai,nama_region) value(".$this->cekNull($_POST['id_logistik']).",".$this->cekNull($_POST['nama']).",".$this->cekNull($_POST['no_telp']).",".$this->cekNull($_POST['email']).",".$this->cekNull($_POST['alamat_detil']).",".$this->cekNull($_POST['alamat_kel']).",".$this->cekNull($_POST['id_pegawai']).",".$this->cekNull($_POST['nama_region']).")";

		$this->db->query($query);
		echo "data berhasil diupload";
	}

	public function cekNull($data){
		if($data==""){
			$data="NULL";
			return $data;
		}
		return "'".$data."'";
	}

}
