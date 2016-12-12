<?php
require_once('../PHPExcel/IOFactory.php');
		
		$fileType='Excel5';
		$fileName='testExcel.xls';
		
		class chunkReadFilter implements PHPExcel_Reader_IReadFilter
		{
			private $_startRow = 0;
			private $_endRow = 0;

			public function setRows($startRow, $chunkSize) {
				$this->_startRow	= $startRow;
				$this->_endRow		= $startRow + $chunkSize;
			}

			public function readCell($column, $row, $worksheetName = '') {
				//  Only read the heading row, and the rows that are configured in $this->_startRow and $this->_endRow
				if (($row == 1) || ($row >= $this->_startRow && $row < $this->_endRow)) {
					return true;
				}
				return false;
			}
		}
		
		
		
		$objReader = PHPExcel_IOFactory::createReader($fileType);


		echo '<hr />';


		$chunkSize = 20;

		$chunkFilter = new chunkReadFilter();

		$objReader->setReadFilter($chunkFilter);

		for ($startRow = 2; $startRow <= 240; $startRow += $chunkSize) {

			$chunkFilter->setRows($startRow,$chunkSize);

			$objPHPExcel = $objReader->load($fileName);



			$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
			var_dump($sheetData);
			echo '<br /><br />';
		}
?>
