<?php
	require_once 'Classes/PHPExcel.php';
	require_once 'Classes/PHPExcel/IOFactory.php';
	if(isset($_POST)) {
		$post = $_POST;
		$excelData = array(
			 array(
				"Name",
				"Age",
				"Email"
			)
		);
		for($i = 0 ; $i < count($post)/3 ; $i++) {
			$excelData[$i+1][0] = $post["name_".($i+2)];
			$excelData[$i+1][1] = $post["age_".($i+2)];
			$excelData[$i+1][2] = $post["email_".($i+2)];
		}
		$objPHPExcel = PHPExcel_IOFactory::load("content.xlsx");
		$objPHPExcel->setActiveSheetIndex(0);
		for($i = 0 ; $i < count($excelData) ; $i++) {
			if($i == 0) {
				$objPHPExcel->getActiveSheet()->setCellValue('A1', 'Name');
				$objPHPExcel->getActiveSheet()->setCellValue('B1', 'Age');
				$objPHPExcel->getActiveSheet()->setCellValue('C1', 'Email');
			} else {
				$objPHPExcel->getActiveSheet()->setCellValue('A'.($i+1), $excelData[$i][0]);
				$objPHPExcel->getActiveSheet()->setCellValue('B'.($i+1), $excelData[$i][1]);
				$objPHPExcel->getActiveSheet()->setCellValue('C'.($i+1), $excelData[$i][2]);
			}
		}
		$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
		$objWriter->save('content.xlsx');
		header("Location: excelGUI.php");
	}
?>