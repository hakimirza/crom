<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket extends CI_Controller {

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
		$this->get_ticket();
	}

	public function get_ticket($page = 'ticket'){

		$data = array(
			'namaFile' => $page
			);
		$this->load->view($page, $data);
	}

	public function search(){

	}

	public function cetakpdf_ticket(){
		
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


	public function exportExcel(){
		
	}

}
