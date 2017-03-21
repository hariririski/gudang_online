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
			$objPHPExcel->setActiveSheetIndex(0)
									->setCellValue('C2', 'Universitas Syiah Kuala')
									->setCellValue('C3', 'Fakultas Teknik')
									->setCellValue('A5', 'DAFTAR PENERIMAAN BARANG')
									->setCellValue('F2', 'Halaman :')
									->setCellValue('G2', '')

									;
		  $objPHPExcel->getActiveSheet()->getStyle("A5")->getFont()->setSize(16);
			$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A5:G5');
			$objPHPExcel->getActiveSheet()->getStyle('A5:G5')->applyFromArray($style);
			$objPHPExcel->getActiveSheet()->getStyle('C2:C3')->applyFromArray($bold);
			$objPHPExcel->getActiveSheet()->getStyle('A5')->applyFromArray($bold);

			foreach($data_faktur as $data){
			$objPHPExcel->setActiveSheetIndex(0)
									->setCellValue('A7', 'Tanggal')
									->setCellValue('C7', ': '.$data->tanggal_faktur)
									->setCellValue('D7', 'Jumlah Anggaran')
									->setCellValue('F7', ': '.$data->nominal)
									->setCellValue('A8', 'Tahun')
									->setCellValue('C8', ': '.$data->tahun_anggaran)
									->setCellValue('D8', 'Pelaksana')
									->setCellValue('F8', ': '.$data->pelaksana)
									->setCellValue('A9', 'NO.SPK')
									->setCellValue('C9', ': '."ini apa")
									->setCellValue('D9', 'No. Bukti / BAST')
									->setCellValue('F9', ': '.$data->nomor_faktur."/".$data->bast)

									;
			}

			$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A7:B7');
			$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A8:B8');
			$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A9:B9');

			$objPHPExcel->setActiveSheetIndex(0)->mergeCells('D7:E7');
			$objPHPExcel->setActiveSheetIndex(0)->mergeCells('D8:E8');
			$objPHPExcel->setActiveSheetIndex(0)->mergeCells('D9:E9');


            //Sheet yang akan diolah
			$baris=10;
			$objPHPExcel->setActiveSheetIndex(0)
						->setCellValue('A'.$baris, 'NO')
						->setCellValue('B'.$baris, 'KODE BARANG')
						->setCellValue('C'.$baris, 'URAIAN BARANG')
						->setCellValue('D'.$baris, 'VOLUME')
						->setCellValue('E'.$baris, 'SATUAN')
						->setCellValue('F'.$baris, '@HARGA')
						->setCellValue('G'.$baris, 'TOTAL HARGA')

						;
						$objPHPExcel->getSheet(0)->getColumnDimension('A')->setAutoSize(true);
						$objPHPExcel->getSheet(0)->getColumnDimension('B')->setAutoSize(true);
						$objPHPExcel->getSheet(0)->getColumnDimension('C')->setAutoSize(true);
						$objPHPExcel->getSheet(0)->getColumnDimension('D')->setAutoSize(true);
						$objPHPExcel->getSheet(0)->getColumnDimension('E')->setAutoSize(true);
						$objPHPExcel->getSheet(0)->getColumnDimension('F')->setAutoSize(true);
						$objPHPExcel->getSheet(0)->getColumnDimension('G')->setAutoSize(true);

			$objPHPExcel->getActiveSheet()->getStyle("A10:G10")->getFont()->setSize(12);
			$objPHPExcel->getActiveSheet()->getStyle('A10:G10')->applyFromArray($style);

			$baris2=$baris+1;
			$objPHPExcel->setActiveSheetIndex(0)
									->setCellValue('A'.$baris2, '1')
									->setCellValue('B'.$baris2, '2')
									->setCellValue('C'.$baris2, '3')
									->setCellValue('D'.$baris2, '4')
									->setCellValue('E'.$baris2, '5')
									->setCellValue('F'.$baris2, '6')
									->setCellValue('G'.$baris2, '7')

									;

			$objPHPExcel->getActiveSheet()->getStyle('A11:G11')->applyFromArray($style);
			$objPHPExcel->getActiveSheet()->getStyle("A11:G11")->getFont()->setSize(12);


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
			$objPHPExcel->getActiveSheet()->getStyle("A10:G11")->applyFromArray($styleArray);
			unset($styleArray);
			foreach($data_barang as $data){
      $objPHPExcel->setActiveSheetIndex(0)
			 			->setCellValue('A'.$i, $NO)
			 			->setCellValue('B'.$i, $data->id_barang)
			 			->setCellValue('C'.$i, $data->nama_barang)
			 			->setCellValue('D'.$i, $data->jumlah_masuk)
			 			->setCellValue('E'.$i, $data->nama_satuan)
			 			->setCellValue('F'.$i, $data->harga_satuan)
			 			->setCellValue('G'.$i, "=(D".$i." * F".$i.")" )

				;
				$styleArray = array(
				  'borders' => array(
					'allborders' => array(
					  'style' => PHPExcel_Style_Border::BORDER_THIN
					)
				  )
				);
			$objPHPExcel->getActiveSheet()->getStyle("A".$i.":G".$i)->applyFromArray($styleArray);
			unset($styleArray);
			$i++;
			$NO++;
			}
			$objPHPExcel->setActiveSheetIndex(0)
			 			->setCellValue('A'.$i, "JUMLAH")


				;

			//$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A7:B7');







			unset($style);

			// warna kepala table
			$odd_row_style = array(
				'fill' => array(
					'type' => PHPExcel_Style_Fill::FILL_SOLID,
					'color' => array('rgb' => 'CCCCCC')
				)
			);

			// Later on

			$objPHPExcel->getActiveSheet()->getStyle('A11:G11')->applyFromArray($odd_row_style);
			unset($odd_row_style);




            //Set Title
            $objPHPExcel->getActiveSheet()->setTitle('Daftar_penerimaan_barang');

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
            header('Content-Disposition: attachment;filename="daftar_penerimaan_barang '.$date.'.xlsx"');

            //Download
            $objWriter->save("php://output");


?>
