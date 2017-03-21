<?php

			$this->load->library("PHPExcel");


            //membuat objek
            $objPHPExcel = new PHPExcel();

			//

			$style = array(
				'alignment' => array(
					'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
					'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
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
			$objPHPExcel->getActiveSheet()->getStyle('A1:I100')->applyFromArray($font_semua);







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
									->setCellValue('A5', 'LAPORAN RINCIAN BARANG PERSEDIAAN')
									->setCellValue('F2', 'Halaman :')
									->setCellValue('G2', '')

									;
		  $objPHPExcel->getActiveSheet()->getStyle("A5")->getFont()->setSize(16);
			$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A5:I5');
			$objPHPExcel->getActiveSheet()->getStyle('A5:I5')->applyFromArray($style);
			$objPHPExcel->getActiveSheet()->getStyle('C2:C3')->applyFromArray($bold);
			$objPHPExcel->getActiveSheet()->getStyle('A5')->applyFromArray($bold);

			$objPHPExcel->setActiveSheetIndex(0)
									->setCellValue('A7', 'Untuk Priode')
									->setCellValue('C7', ': ')
									->setCellValue('A8', 'Tahun')
									->setCellValue('C8', ': ')


									;

			$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A7:B7');
			$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A8:B8');



            //Sheet yang akan diolah
			$baris=10;
			$objPHPExcel->setActiveSheetIndex(0)
						->setCellValue('A'.$baris, 'NO')
						->setCellValue('B'.$baris, 'KODE BARANG')
						->setCellValue('C'.$baris, 'URAIAN BARANG')
						->setCellValue('D'.$baris, 'NILAI 30 DESEMBER 201')
						->setCellValue('E'.$baris, 'MUTASI')
						->setCellValue('F'.$baris, '')
						->setCellValue('G'.$baris, '')
						->setCellValue('H'.$baris, '@HARGA')
						->setCellValue('I'.$baris, 'TOTAL HARGA')

						;
						$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A10:A11');
						$objPHPExcel->setActiveSheetIndex(0)->mergeCells('B10:B11');
						$objPHPExcel->setActiveSheetIndex(0)->mergeCells('C10:C11');
						$objPHPExcel->setActiveSheetIndex(0)->mergeCells('H10:H11');
						$objPHPExcel->setActiveSheetIndex(0)->mergeCells('I10:I11');
						$objPHPExcel->setActiveSheetIndex(0)->mergeCells('E10:G10');


						$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth('5');
						$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth('20');
						$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth('35');
						$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth('35');
						$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth('18');
						$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth('18');
						$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth('18');
						$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth('20');
						$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth('20');
						$objPHPExcel->getActiveSheet()->getStyle('A10:I11')->getAlignment()->setWrapText(true);



			$objPHPExcel->getActiveSheet()->getStyle("A10:I10")->getFont()->setSize(12);
			$objPHPExcel->getActiveSheet()->getStyle('A10:I10')->applyFromArray($style);
			$baris2=$baris+1;
			$objPHPExcel->setActiveSheetIndex(0)
									->setCellValue('A'.$baris2, '')
									->setCellValue('B'.$baris2, '')
									->setCellValue('C'.$baris2, '')
									->setCellValue('D'.$baris2, 'VOLUME')
									->setCellValue('E'.$baris2, 'PENERIMAAN')
									->setCellValue('F'.$baris2, 'PENGELUARAN')
									->setCellValue('G'.$baris2, 'STOK BARANG DIGUDANG')

									;
			$baris2=$baris+2;
			$objPHPExcel->setActiveSheetIndex(0)
									->setCellValue('A'.$baris2, '1')
									->setCellValue('B'.$baris2, '2')
									->setCellValue('C'.$baris2, '3')
									->setCellValue('D'.$baris2, '4')
									->setCellValue('E'.$baris2, '5')
									->setCellValue('F'.$baris2, '6')
									->setCellValue('G'.$baris2, '7')
									->setCellValue('H'.$baris2, '8')
									->setCellValue('I'.$baris2, '9')


									;

			$objPHPExcel->getActiveSheet()->getStyle('A11:I11')->applyFromArray($style);
			$objPHPExcel->getActiveSheet()->getStyle('A12:I12')->applyFromArray($style);
			$objPHPExcel->getActiveSheet()->getStyle("A11:I11")->getFont()->setSize(12);


			$i=4;
			$NO=1;

			// foreach($data_siswa as $data){
      //       $objPHPExcel->setActiveSheetIndex(0)
			// 			->setCellValue('A'.$i, $NO)
			// 			->setCellValue('B'.$i, $data->nisn)
			// 			->setCellValue('C'.$i, $data->nik_siswa)
			// 			->setCellValue('D'.$i, $data->nipd)
			// 			->setCellValue('E'.$i, $data->nama_siswa)
			// 			->setCellValue('F'.$i, $data->jenis_kelamin)
			// 			->setCellValue('G'.$i, $data->nama_agama)
			// 			->setCellValue('H'.$i, $data->tanggal_lahir)
			// 			->setCellValue('I'.$i, $data->tempat_lahir)
			// 			->setCellValue('J'.$i, $data->no_seri_ijazah)
			// 			->setCellValue('K'.$i, $data->skhun)
			// 			->setCellValue('L'.$i, $data->no_registrasi_akte_kelahiran)
			// 			->setCellValue('M'.$i, $data->jumlah_saudara_kandung)
			// 			->setCellValue('N'.$i, $data->jenis_tinggal)
			// 			->setCellValue('O'.$i, $data->no_hp)
			// 			->setCellValue('P'.$i, $data->email)
			//
			// 			->setCellValue('Q'.$i, $data->provinsi)
			// 			->setCellValue('R'.$i, $data->kabupaten)
			// 			->setCellValue('S'.$i, $data->kecamatan)
			// 			->setCellValue('T'.$i, $data->desa)
			// 			->setCellValue('U'.$i, $data->jalan)
			// 			->setCellValue('V'.$i, $data->kode_pos)
			// 			->setCellValue('W'.$i, $data->alat_transportasi)
			//
			//
			// 			->setCellValue('X'.$i, $data->layak_pip)
			// 			->setCellValue('Y'.$i, $data->alasan_layak_pip)
			//
			// 			->setCellValue('Z'.$i, $data->no_kip)
			// 			->setCellValue('AA'.$i, $data->penerima_kip)
			// 			->setCellValue('AB'.$i, $data->nama_di_kip)
			//
			// 			->setCellValue('AC'.$i, $data->penerima_kps)
			// 			->setCellValue('AD'.$i, $data->no_kps)
			//
			// 			->setCellValue('AE'.$i, $data->no_kks)
			// 			->setCellValue('AF'.$i, $data->no_pun)
			// 			->setCellValue('AG'.$i, $data->rombel_saat_ini)
			//
			//
			// 			->setCellValue('AH'.$i, $data->bank)
			// 			->setCellValue('AI'.$i, $data->rekening_atas_nama)
			// 			->setCellValue('AJ'.$i, $data->no_rekening_bank)
			//
			// 			->setCellValue('AK'.$i, $data->nama_ayah)
			// 			->setCellValue('AL'.$i, $data->tahun_lahir_ayah)
			// 			->setCellValue('AM'.$i, $data->penghasilan_ayah)
			// 			->setCellValue('AN'.$i, $data->pekerjaan_ayah)
			// 			->setCellValue('AO'.$i, $data->nama_jenjang_pendidikan_ayah)
			//
			// 			->setCellValue('AP'.$i, $data->nama_ibu)
			// 			->setCellValue('AQ'.$i, $data->tahun_lahir_ibu)
			// 			->setCellValue('AR'.$i, $data->penghasilan_ibu)
			// 			->setCellValue('AS'.$i, $data->pekerjaan_ibu)
			// 			->setCellValue('AT'.$i, $data->nama_jenjang_pendidikan_ibu)
			//
			// 			->setCellValue('AU'.$i, $data->nama_wali)
			// 			->setCellValue('AV'.$i, $data->tahun_lahir_wali)
			// 			->setCellValue('AW'.$i, $data->penghasilan_wali)
			// 			->setCellValue('AX'.$i, $data->pekerjaan_wali)
			// 			->setCellValue('AY'.$i, $data->nama_jenjang_pendidikan_wali)
			// 			;
			// $i++;
			// $NO++;
			// }








			unset($style);

			// warna kepala table
			$odd_row_style = array(
				'fill' => array(
					'type' => PHPExcel_Style_Fill::FILL_SOLID,
					'color' => array('rgb' => 'CCCCCC')
				)
			);

			// Later on

			$objPHPExcel->getActiveSheet()->getStyle('A12:I12')->applyFromArray($odd_row_style);
			unset($odd_row_style);


			//table
			$styleArray = array(
			  'borders' => array(
				'allborders' => array(
				  'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			  )
			);
			--$i;
			$objPHPExcel->getActiveSheet()->getStyle('A10:I46')->applyFromArray($styleArray);
			unset($styleArray);

            //Set Title
            $objPHPExcel->getActiveSheet()->setTitle('Rincian Barang Persediaan');

            //Save ke .xlsx, kalau ingin .xls, ubah 'Excel2007' menjadi 'Excel5'
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

            //Header
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

            //Nama File
            header('Content-Disposition: attachment;filename="Rincian Barang Persediaan.xlsx"');

            //Download
            $objWriter->save("php://output");


?>
