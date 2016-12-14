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

	public function upload_prod($page = 'upload_prod'){
		$data['namaFile'] = $page;
		$this->load->view($page, $data);
	}

	public function upload_product_batch(){
		$fileOp=explode("_", $_FILES["file"]["name"]);
		$target_dir = "data/excel_product/";
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
				$data["kode"]="produk";
				$page="data/Classes/upload/dataItem1";
				$this->load->view($page, $data);
		    } else {
		        echo "gagal upload file";
		    }
		}
	}

	public function cetakpdf_produk(){
		if($_POST['coded']=="exportExcel"){
			$dataCetak=$_POST['dataCetak'];
			$arrDataCetak=explode(":",$dataCetak);

			$arrHeaderCetak=explode(";",$_POST['headerCetak']);
			header("Content-type: application/vnd-ms-excel");
			 
			// Mendefinisikan nama file ekspor "hasil-export.xls"
			header("Content-Disposition: attachment; filename=tutorialweb-export.xls");
			$str='
			<html lang="en">
				<head></head>
				<body>
					<table border="1">
						<thead>
                            <tr>';
                            for ($j=1; $j <count($arrHeaderCetak) ; $j++) { 
                            	$str .='<th>'.$arrHeaderCetak[$j].'</th>';
                                
                            }
                                
                            $str .='</tr>
                        </thead>
                    	<tbody>';
			for($i=0; $i<count($arrDataCetak); $i++){
				$arrTemp=explode(";",$arrDataCetak[$i]);
					$str .='<tr>';
						for ($j=1; $j <count($arrTemp) ; $j++) { 
							$str .='<td>'.$arrTemp[$j].'</td>';
						}
					$str .='</tr>';
			}

			$str .="      
                    		</tbody>
                		</table>
                	</body>
                </html>";
			echo $str;
			
		}else{
			include 'cetakPdf.php';
			$dataCetak=$_POST['dataCetak'];
			$arrDataCetak=explode(":",$dataCetak);
			$arrMulti=array();
			$arrHeaderCetak=explode(";",$_POST['headerCetak']);

			for($i=0; $i<count($arrDataCetak); $i++){
				$arrTemp=explode(";",$arrDataCetak[$i]);
				array_push($arrMulti,$arrTemp);
			}

			$pdf=new cetakpf();
				$headers=array();
				$wCol=explode(";",$_POST['wCol']);
				$hCol=explode(";",$_POST['hCol']);;

			for($i=0; $i<count($arrHeaderCetak); $i++){
				$arrTemp=array("label"=>$arrHeaderCetak[$i], "length"=>30, "align"=>"L");
				array_push($headers,$arrTemp);
			}

			$pdf->setJudul($_POST['judulCetak']);
			$pdf->setOptionCol($wCol,$hCol);
			$pdf->setData($arrMulti);
			$pdf->setHeader($headers);
			$pdf->makePdf();
		}
	}

	public function upload_single_product(){
		//echo $_POST['idProduk'];
		$query="INSERT INTO produk(id_produk,main_supp,alt1_supp,alt2_supp,dept_code,item_name,local_name,short_name,stopMonthYearStart,stopEndDate,stop_reason,specific_item,sensitiveness,type_of_sale,season_code,lot_size,qty_pack,stock_unit,order_weight,weigth,on_scale,dc_sup,vat,sub_code,ie_barcode,org_bar_type_1,org_bar_no_1,org_bar_no_2,npp,nsp,last_date_npp) value (".$this->cekNull($_POST['idProduk']).",".$this->cekNull($_POST['mainSupp']).",".$this->cekNull($_POST['alt1Supp']).",".$this->cekNull($_POST['alt2Supp']).",".$this->cekNull($_POST['deptCode']).",".$this->cekNull($_POST['itemName']).",".$this->cekNull($_POST['localName']).",".$this->cekNull($_POST['shortName']).",".$this->cekNull($_POST['stopMonthYearStart']).",".$this->cekNull($_POST['stopEndDate']).",".$this->cekNull($_POST['stopReason']).",".$this->cekNull($_POST['specificItem']).",".$this->cekNull($_POST['sensitiveness']).",".$this->cekNull($_POST['type_of_sale']).",".$this->cekNull($_POST['season_code']).",".$this->cekNull($_POST['lot_size']).",".$this->cekNull($_POST['qty_pack']).",".$this->cekNull($_POST['stock_unit']).",".$this->cekNull($_POST['order_weight']).",".$this->cekNull($_POST['weigth']).",".$this->cekNull($_POST['on_scale']).",".$this->cekNull($_POST['dc_sup']).",".$this->cekNull($_POST['vat']).",".$this->cekNull($_POST['sub_code']).",".$this->cekNull($_POST['ie_barcode']).",".$this->cekNull($_POST['org_bar_type_1']).",".$this->cekNull($_POST['org_bar_no_1']).",".$this->cekNull($_POST['org_bar_no_2']).",".$this->cekNull($_POST['npp']).",".$this->cekNull($_POST['nsp']).",".$this->cekNull($_POST['last_date_npp']).") ";

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
