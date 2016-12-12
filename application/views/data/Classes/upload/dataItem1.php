<?php

require_once('assets/PHPExcel/IOFactory.php');

		$fileType='Excel5';
		$fileName=$namaFile;

		class chunkReadFilter implements PHPExcel_Reader_IReadFilter
		{
			private $_startRow = 0;
			private $_endRow = 0;

			public function setRows($startRow, $chunkSize) {
				$this->_startRow	= $startRow;
				$this->_endRow		= $startRow + $chunkSize;
			}

			public function readCell($column, $row, $worksheetName = '') {
				if (($row == 1) || ($row >= $this->_startRow && $row < $this->_endRow)) {
					return true;
				}
				return false;
			}
		}

		$objReader = PHPExcel_IOFactory::createReader($fileType);

		$arrData=array();
		$chunkSize =$sizeRow;

		$chunkFilter = new chunkReadFilter();
		function insertDb($query){
			
		}
		$objReader->setReadFilter($chunkFilter);
		$i=0;
		$is_30=false;
		if($kode=="uploadHuman"){
			$query ="INSERT INTO customer(id_customer,id_warung,id_agen,no_telp,nama,no_ktp,tempat_lahir,tgl_lahir,jk,alamat_detil,alamat_kel,agama,stat_kawin,pekerjaan,wni,email,pendapatan_min,pendapatan_max,real_alamat_detil,real_alamat_kel,jml_family,url_ktp,registered_date,last_print) value";
			for ($startRow = 2; $startRow <= $chunkSize; $startRow +=$chunkSize) {
				$chunkFilter->setRows($startRow,$chunkSize);
				$objPHPExcel = $objReader->load($fileName);
				$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
				$o=1;$p=2;
				for($u=2; $u<=count($sheetData); $u++){
					$dd=$sheetData[$u];
					$sheetData[$u]=array_filter($sheetData[$u], function($value) { return $value !== NULL; });
					$sheetData[$u] = array_values($sheetData[$u]);
					if(empty($sheetData[$u])){
						break;
					}else{
						$query = $query."(".cekNull($sheetData[$u][0]).",".cekNull($sheetData[$u][1]).",".cekNull($sheetData[$u][2]).",".cekNull($sheetData[$u][3]).",".cekNull($sheetData[$u][4]).",".cekNull($sheetData[$u][5]).",".cekNull($sheetData[$u][6]).",".cekNull($sheetData[$u][7]).",".cekNull($sheetData[$u][8]).",".cekNull($sheetData[$u][9]).",".cekNull($sheetData[$u][10]).",".cekNull($sheetData[$u][11]).",".cekNull($sheetData[$u][12]).",".cekNull($sheetData[$u][13]).",".cekNull($sheetData[$u][14]).",".cekNull($sheetData[$u][15]).",".cekNull($sheetData[$u][16]).",".cekNull($sheetData[$u][17]).",".cekNull($sheetData[$u][18]).",".cekNull($sheetData[$u][19]).",".cekNull($sheetData[$u][20]).",".cekNull($sheetData[$u][21]).",".cekNull($sheetData[$u][22]).",".cekNull($sheetData[$u][23])."),";
                        
						if($p==31){
							$query=substr($query, 0,(strlen($query)-1)).";"; //harus titik koma kalo multiple query
							$this->db->query($query);
							$query ="INSERT INTO customer(id_customer,id_warung,id_agen,no_telp,nama,no_ktp,tempat_lahir,tgl_lahir,jk,alamat_detil,alamat_kel,agama,stat_kawin,pekerjaan,wni,email,pendapatan_min,pendapatan_max,real_alamat_detil,real_alamat_kel,jml_family,url_ktp,registered_date,last_print) value";
							$p=1;
							$is_30=true;
							break;
						}else{
							$is_30=false;
						}
						$p++;
					}	
				}
				$arrData=$sheetData;
				$i++;
			}
			if(!$is_30){
				$query=substr($query, 0,(strlen($query)-1)).";";
				$this->db->query($query);
				echo "Data berhasil diupload";
			}else{
				echo "30 row data berhasil diupload";
			}
			
		}elseif ($kode=="produk") {
			$query ="INSERT INTO produk(id_produk,main_supp,alt1_supp,alt2_supp,dept_code,item_name,local_name,short_name,stopMonthYearStart,stopEndDate,stop_reason,specific_item,sensitiveness,type_of_sale,season_code,lot_size,qty_pack,stock_unit,order_weight,weigth,on_scale,dc_sup,vat,sub_code,ie_barcode,org_bar_type_1,org_bar_no_1,org_bar_no_2,npp,nsp,last_date_npp) value";
			for ($startRow = 2; $startRow <= $chunkSize; $startRow +=$chunkSize) {
				$chunkFilter->setRows($startRow,$chunkSize);
				$objPHPExcel = $objReader->load($fileName);
				$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
				$o=1;$p=2;
				for($u=2; $u<=count($sheetData); $u++){
					$dd=$sheetData[$u];
					$sheetData[$u]=array_filter($sheetData[$u], function($value) { return $value !== NULL; });
					$sheetData[$u] = array_values($sheetData[$u]);
					if(empty($sheetData[$u])){
						break;
					}else{
						$query = $query."(".cekNull($sheetData[$u][0]).",".cekNull($sheetData[$u][1]).",".cekNull($sheetData[$u][2]).",".cekNull($sheetData[$u][3]).",".cekNull($sheetData[$u][4]).",".cekNull($sheetData[$u][5]).",".cekNull($sheetData[$u][6]).",".cekNull($sheetData[$u][7]).",".cekNull($sheetData[$u][8]).",".cekNull($sheetData[$u][9]).",".cekNull($sheetData[$u][10]).",".cekNull($sheetData[$u][11]).",".cekNull($sheetData[$u][12]).",".cekNull($sheetData[$u][13]).",".cekNull($sheetData[$u][14]).",".cekNull($sheetData[$u][15]).",".cekNull($sheetData[$u][16]).",".cekNull($sheetData[$u][17]).",".cekNull($sheetData[$u][18]).",".cekNull($sheetData[$u][19]).",".cekNull($sheetData[$u][20]).",".cekNull($sheetData[$u][21]).",".cekNull($sheetData[$u][22]).",".cekNull($sheetData[$u][23]).",".cekNull($sheetData[$u][24]).",".cekNull($sheetData[$u][25]).",".cekNull($sheetData[$u][26]).",".cekNull($sheetData[$u][27]).",".cekNull($sheetData[$u][28]).",".cekNull($sheetData[$u][29]).",".cekNull($sheetData[$u][30])."),";
						if($p==31){
							$query=substr($query, 0,(strlen($query)-1)).";"; //harus titik koma kalo multiple query
							$this->db->query($query);
							$query ="INSERT INTO produk(id_produk,main_supp,alt1_supp,alt2_supp,dept_code,item_name,local_name,short_name,stopMonthYearStart,stopEndDate,stop_reason,specific_item,sensitiveness,type_of_sale,season_code,lot_size,qty_pack,stock_unit,order_weight,weight,on_scale,dc_sup,vat,sub_code,ie_barcode,org_bar_type_1,org_bar_no_1,org_bar_no_2,npp,nsp,last_date_npp) value";
							$p=1;
							$is_30=true;
							break;
						}else{
							$is_30=false;
						}
						$p++;
					}	
				}
				$arrData=$sheetData;
				$i++;
			}
			if(!$is_30){
				$query=substr($query, 0,(strlen($query)-1)).";";
				$this->db->query($query);
				echo "Data berhasil diupload";
			}else{
				echo "30 row data berhasil diupload";
			}
		}elseif ($kode=="uploadNegotiation"){
			$query="INSERT INTO supplier(id_supplier,started_date,end_date,dept_code,npwp,supplier_type,specific_supplier,remit_supplier_code,english_name,local_name,prefix_of_name,supplier_nature,alamat_detil,alamat_kel,gps_lat,gps_lng,email,no_telp,fax,CP_name,activity_location,payment_days,scc_payment_days,payment_end_of_month,service_level_penalty,late_delivery_penalty,payment_mode,bank_code,account_no,cheque_title,cheque_mail_address,stop_dept_concern,stop_payment,stop_payment_reason_1,stop_payment_reason_2,stop_business_all_concern_dept,stop_business_specific_concern_dept,stop_business_reason,stop_start_date,stop_end_date,cut_off_time,order_day,delivery_day,order_period,supplier_ean) value";
			for ($startRow = 2; $startRow <= $chunkSize; $startRow +=$chunkSize) {
				$chunkFilter->setRows($startRow,$chunkSize);
				$objPHPExcel = $objReader->load($fileName);
				$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
				$o=1;$p=2;
				for($u=2; $u<=count($sheetData); $u++){
					$dd=$sheetData[$u];
					$sheetData[$u]=array_filter($sheetData[$u], function($value) { return $value !== NULL; });
					$sheetData[$u] = array_values($sheetData[$u]);
					if(empty($sheetData[$u])){
						break;
					}else{
						$query = $query."(".cekNull($sheetData[$u][0]).",".cekNull($sheetData[$u][1]).",".cekNull($sheetData[$u][2]).",".cekNull($sheetData[$u][3]).",".cekNull($sheetData[$u][4]).",".cekNull($sheetData[$u][5]).",".cekNull($sheetData[$u][6]).",".cekNull($sheetData[$u][7]).",".cekNull($sheetData[$u][8]).",".cekNull($sheetData[$u][9]).",".cekNull($sheetData[$u][10]).",".cekNull($sheetData[$u][11]).",".cekNull($sheetData[$u][12]).",".cekNull($sheetData[$u][13]).",".cekNull($sheetData[$u][14]).",".cekNull($sheetData[$u][15]).",".cekNull($sheetData[$u][16]).",".cekNull($sheetData[$u][17]).",".cekNull($sheetData[$u][18]).",".cekNull($sheetData[$u][19]).",".cekNull($sheetData[$u][20]).",".cekNull($sheetData[$u][21]).",".cekNull($sheetData[$u][22]).",".cekNull($sheetData[$u][23]).",".cekNull($sheetData[$u][24]).",".cekNull($sheetData[$u][25]).",".cekNull($sheetData[$u][26]).",".cekNull($sheetData[$u][27]).",".cekNull($sheetData[$u][28]).",".cekNull($sheetData[$u][29]).",".cekNull($sheetData[$u][30]).",".cekNull($sheetData[$u][31]).",".cekNull($sheetData[$u][32]).",".cekNull($sheetData[$u][33]).",".cekNull($sheetData[$u][34]).",".cekNull($sheetData[$u][35]).",".cekNull($sheetData[$u][36]).",".cekNull($sheetData[$u][37]).",".cekNull($sheetData[$u][38]).",".cekNull($sheetData[$u][39]).",".cekNull($sheetData[$u][40]).",".cekNull($sheetData[$u][41]).",".cekNull($sheetData[$u][42]).",".cekNull($sheetData[$u][43]).",".cekNull($sheetData[$u][44])."),";
						if($p==31){
							$query=substr($query, 0,(strlen($query)-1)).";"; //harus titik koma kalo multiple query
							$this->db->query($query);
							$query="INSERT INTO supplier(id_supplier,started_date,end_date,dept_code,npwp,supplier_type,specific_supplier,remit_supplier_code,english_name,local_name,prefix_of_name,supplier_nature,alamat_detil,alamat_kel,gps_lat,gps_lng,email,no_telp,fax,CP_name,activity_location,payment_days,scc_payment_days,payment_end_of_month,service_level_penalty,late_delivery_penalty,payment_mode,bank_code,account_no,cheque_title,cheque_mail_address,stop_dept_concern,stop_payment,stop_payment_reason_1,stop_payment_reason_2,stop_business_all_concern_dept,stop_business_specific_concern_dept,stop_business_reason,stop_start_date,stop_end_date,cut_off_time,order_day,delivery_day,order_period,supplier_ean) value";
							$p=1;
							$is_30=true;
							break;
						}else{
							$is_30=false;
						}
						$p++;
					}	
				}
				$arrData=$sheetData;
				$i++;
			}
			if(!$is_30){
				$query=substr($query, 0,(strlen($query)-1)).";";
				$this->db->query($query);
				echo "Data berhasil diupload";
			}else{
				echo "30 row data berhasil diupload";
			}

		}
		else{
			// bisa ditambah lagi
		}

		function cekNull($data){
			if($data=="-"){
				$data="NULL";
				return $data;
			}
			return "'".$data."'";
		}
?>