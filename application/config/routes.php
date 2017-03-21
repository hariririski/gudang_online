<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'login';
$route['home'] = 'home';
$route['persediaan_barang'] = 'barang/data_barang_persedian';
$route['tipe_barang'] = 'tipe_barang';
$route['satuan_barang'] = 'satuan_barang';
$route['jenis_penerima'] = 'jenis_penerima';
$route['tipe_faktur'] = 'tipe_faktur';
$route['sumber_dana'] = 'sumber_dana';
$route['penerima_barang'] = 'penerima_barang';
$route['detail_penerima_barang'] = 'detail_penerima_barang';
$route['tambah_barang'] = 'barang';
$route['tambah_faktur'] = 'faktur/tambah_faktur';
$route['faktur'] = 'faktur/data_faktur';
$route['ttd'] = 'ttd';
$route['ambil_barang'] = 'ambil_barang';
$route['ambil_stok_barang'] = 'ambil_barang/ambil_stok_barang';
$route['data_pengambilan_barang'] = 'ambil_barang/data_pengambilan_barang';
$route['tambah_pengambilan_barang'] = 'ambil_barang/tambah_pengambilan_barang';
$route['tambah_stok_barang'] = 'barang/tambah_stok_barang';
$route['edit_data_faktur'] = 'faktur/edit_data_faktur';
$route['edit_pengambilan_barang'] = 'ambil_barang/edit_pengambilan_barang';
$route['edit_data_barang'] = 'barang/edit_data_barang';
$route['edit_data_barang_faktur'] = 'barang/edit_data_barang_faktur';
$route['edit_tipe_barang'] = 'tipe_barang/edit_tipe_barang';
$route['edit_satuan_barang'] = 'satuan_barang/edit_satuan_barang';
$route['edit_jenis_penerima'] = 'jenis_penerima/edit_jenis_penerima';
$route['edit_penerima_barang'] = 'penerima_barang/edit_penerima_barang';
$route['edit_tipe_faktur'] = 'tipe_faktur/edit_tipe_faktur';
$route['edit_sumber_dana'] = 'sumber_dana/edit_sumber_dana';
$route['edit_bidang_penerima'] = 'detail_penerima_barang/edit_bidang_penerima';
$route['edit_ttd'] = 'ttd/edit_ttd';
$route['cetak_faktur_pengambilan'] = 'cetak/faktur_pengambilan';
$route['cetak_daftar_penerimaan_barang'] = 'cetak/daftar_penerimaan_barang';
$route['cetak_rincian_barang_persediaan'] = 'cetak/rincian_barang_persediaan';
$route['detail_faktur'] = 'faktur/detail_faktur';
$route['tambah_barang2'] = 'barang/tambah_stok_barang2';
$route['ambil_barang2'] = 'ambil_barang/ambil_stok_barang';
$route['data_profil'] = 'profil';
$route['pengambilan_perpenerima'] = 'ambil_barang/pengambilan_perpenerima';
$route['404_override'] = 'error';
$route['translate_uri_dashes'] = FALSE;
