<?php

			$this->load->library("PHPExcel");


            //membuat objek
            $objPHPExcel = new PHPExcel();

			//

			$style = array(
				'alignment' => array(
					'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				)
			);
			$font_semua = array(
    		'font'  => array(
        'bold'  => False,
        'color' => array('rgb' => '#000000'),
        //'size'  => 15,
        'name'  => 'Times New Roman'
    ));

		$bold = array(
			'font'  => array(
			'bold'  => True

	));
			$objPHPExcel->getActiveSheet()->getStyle('A1:G10')->applyFromArray($font_semua);







			$objDrawing = new PHPExcel_Worksheet_Drawing();
			$objDrawing->setName('Logo');
			$objDrawing->setDescription('Logo');
			$logo = 'assets/images/logo_hitam.png'; // Provide path to your logo file
			$objDrawing->setPath($logo);  //setOffsetY has no effect
			$objDrawing->setCoordinates('B1');
			$objDrawing->setWidth(70);                 //set width, height
			//$objDrawing->setHeight(32);
			$objDrawing->setOffsetX(25);                       //setOffsetX works properly
			$objDrawing->setOffsetY(10);
			$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

			$baris=1;
			foreach($data_faktur as $data){
			$objPHPExcel->setActiveSheetIndex(0)
									->setCellValue('C2', 'Universitas Syiah Kuala')
									->setCellValue('C3', 'Fakultas Teknik')
									->setCellValue('A5', 'FAKTUR PENGAMBILAN BARANG')
									->setCellValue('F2', 'No Transaksi :'.$data->id_penerima_barang_keluar)


									;
		  $objPHPExcel->getActiveSheet()->getStyle("A5")->getFont()->setSize(16);
			$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A5:G5');
			$objPHPExcel->getActiveSheet()->getStyle('A5:G5')->applyFromArray($style);
			$objPHPExcel->getActiveSheet()->getStyle('C2:C3')->applyFromArray($bold);
			$objPHPExcel->getActiveSheet()->getStyle('A5')->applyFromArray($bold);



			$objPHPExcel->setActiveSheetIndex(0)
									->setCellValue('A6', 'PERMINTAAN DARI')
									->setCellValue('A7', 'Fakultas / Jurusan / Prodi')
									->setCellValue('C7', ': '.$data->nama_penerima)
									->setCellValue('D7', 'Digunakan Dalam Tanggal')
									->setCellValue('D8', ': '.$data->tanggal_finalisasi)
									->setCellValue('A8', 'Bagian / Sub . Bagian / Lab')
									->setCellValue('C8', ': '.$data->nama_jenis_penerima)


									;
			}
			$objPHPExcel->getActiveSheet()->getStyle('A6')->applyFromArray($bold);
			$objPHPExcel->getActiveSheet()->getStyle("A6")->getFont()->setSize(12);
			$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A7:B7');
			$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A8:B8');
			$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A9:B9');

			$objPHPExcel->setActiveSheetIndex(0)->mergeCells('D7:E7');
			$objPHPExcel->setActiveSheetIndex(0)->mergeCells('D8:F8');
			$objPHPExcel->setActiveSheetIndex(0)->mergeCells('D9:E9');


            //Sheet yang akan diolah
			$baris=10;
			$objPHPExcel->setActiveSheetIndex(0)
						->setCellValue('A'.$baris, 'NO')
						->setCellValue('B'.$baris, 'NAMA BARANG')
						->setCellValue('C'.$baris, 'JUMLAH')
						->setCellValue('D'.$baris, 'SATUAN')
						->setCellValue('E'.$baris, 'KODE BARANG')
						->setCellValue('F'.$baris, 'KETERANGAN')


						;
						$objPHPExcel->getSheet(0)->getColumnDimension('A')->setAutoSize(true);
						$objPHPExcel->getSheet(0)->getColumnDimension('B')->setAutoSize(true);
						$objPHPExcel->getSheet(0)->getColumnDimension('C')->setAutoSize(true);
						$objPHPExcel->getSheet(0)->getColumnDimension('D')->setAutoSize(true);
						$objPHPExcel->getSheet(0)->getColumnDimension('E')->setAutoSize(true);
						$objPHPExcel->getSheet(0)->getColumnDimension('F')->setAutoSize(true);


			$objPHPExcel->getActiveSheet()->getStyle("A10:F10")->getFont()->setSize(12);
			$objPHPExcel->getActiveSheet()->getStyle('A10:F10')->applyFromArray($style);

			$baris2=$baris+1;
			$objPHPExcel->setActiveSheetIndex(0)
									->setCellValue('A'.$baris2, '1')
									->setCellValue('B'.$baris2, '2')
									->setCellValue('C'.$baris2, '3')
									->setCellValue('D'.$baris2, '4')
									->setCellValue('E'.$baris2, '5')
									->setCellValue('F'.$baris2, '6')


									;

			$objPHPExcel->getActiveSheet()->getStyle('A11:F11')->applyFromArray($style);
			$objPHPExcel->getActiveSheet()->getStyle("A11:F11")->getFont()->setSize(12);


			$i=12;
			$NO=1;

			//table

			//--$i;

			$styleArray = array(
				'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
				)
			);
			$objPHPExcel->getActiveSheet()->getStyle("A10:F11")->applyFromArray($styleArray);
			unset($styleArray);
			foreach($data_barang as $data){
      $objPHPExcel->setActiveSheetIndex(0)
			 			->setCellValue('A'.$i, $NO)

			 			->setCellValue('B'.$i, $data->nama_barang)
			 			->setCellValue('C'.$i, $data->jumlah_keluar)
			 			->setCellValue('D'.$i, $data->nama_satuan)
			 			->setCellValue('E'.$i, $data->id_barang)



				;
				$styleArray = array(
				  'borders' => array(
					'allborders' => array(
					  'style' => PHPExcel_Style_Border::BORDER_THIN
					)
				  )
				);
			$objPHPExcel->getActiveSheet()->getStyle("A".$i.":F".$i)->applyFromArray($styleArray);
			unset($styleArray);
			$i++;
			$NO++;
			}
			$objPHPExcel->setActiveSheetIndex(0)
			 			->setCellValue('A'.$i, "JUMLAH")


				;

			//$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A7:B7');
			++$i;
		$i2=$i+1;
		$i3=$i+4;
		$i4=$i+5;
		foreach ($ttd as $data) {

			$objPHPExcel->setActiveSheetIndex(0)
						->setCellValue('D'.$i, 'Diserahkan Oleh')
						->setCellValue('E'.$i, 'Disetujui,')
						->setCellValue('E'.$i2, $data->jabatan)
						->setCellValue('D'.$i3, 'Diterima Oleh')
						->setCellValue('E'.$i4, $data->jabatan)



						;
		}
						$styleArray = array(
							'borders' => array(
							'allborders' => array(
								'style' => PHPExcel_Style_Border::BORDER_THIN
							)
							)
						);
	$objPHPExcel->setActiveSheetIndex(0)->mergeCells("E$i2:F$i2");
	$objPHPExcel->setActiveSheetIndex(0)->mergeCells("E$i4:F$i4");
	$objPHPExcel->setActiveSheetIndex(0)->mergeCells("E$i:F$i");
	$border  = array(
  'borders' => array(
    'outline' => array(
      'style' => PHPExcel_Style_Border::BORDER_THIN
    )
  )
);
 	$objPHPExcel->getActiveSheet()->getStyle("D".$i.":D".--$i3)->applyFromArray($border);
 	$objPHPExcel->getActiveSheet()->getStyle("D".++$i3.":D".++$i4)->applyFromArray($border);
 	$objPHPExcel->getActiveSheet()->getStyle("E".$i.":F".$i4)->applyFromArray($border);
	$objPHPExcel->getActiveSheet()->getStyle("D".$i.":F".$i4)->applyFromArray($style);
	unset($styleArray);


			unset($style);

			// warna kepala table
			$odd_row_style = array(
				'fill' => array(
					'type' => PHPExcel_Style_Fill::FILL_SOLID,
					'color' => array('rgb' => 'CCCCCC')
				)
			);

			// Later on

			$objPHPExcel->getActiveSheet()->getStyle('A11:F11')->applyFromArray($odd_row_style);
			unset($odd_row_style);




            //Set Title
            $objPHPExcel->getActiveSheet()->setTitle('Faktur Pengambilan');

            //Save ke .xlsx, kalau ingin .xls, ubah 'Excel2007' menjadi 'Excel5'
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

            //Header
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

            //Nama File
						$date=date("d-m-Y H:i:s");
            header('Content-Disposition: attachment;filename="faktur_pengambilan '.$date.'.xlsx"');

            //Download
            $objWriter->save("php://output");


?>
