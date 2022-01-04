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
$route['default_controller'] = 'Masukpak';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'Masukpak';
$route['cek-login'] = 'Masukpak/cek_login';
$route['register'] = 'Masukpak/register';

//proses_keputusan
$route['show-proses-keputusan'] = 'Proses_keputusan';
$route['show-proses-keputusan/(:num)'] = 'Proses_keputusan/index/$1';
$route['tambah-proses-keputusan'] = 'Proses_keputusan/tambahproses_keputusan';
$route['hapus-proses-keputusan/(:any)'] = 'Proses_keputusan/hapusproses_keputusan/$1';
$route['hapus-proses-keputusan/(:any)/(:num)'] = 'Proses_keputusan/hapusproses_keputusan/$1/$2';
$route['edit-proses-keputusan/(:any)'] = 'Proses_keputusan/editproses_keputusan/$1';
$route['edit-proses-keputusan/(:any)/(:num)'] = 'Proses_keputusan/editproses_keputusan/$1/$2';


//pelanggan
$route['show-pelanggan'] = 'pelanggan';
$route['show-pelanggan/(:num)'] = 'pelanggan/index/$1';
$route['tambah-pelanggan'] = 'pelanggan/tambahpelanggan';
$route['hapus-pelanggan/(:any)'] = 'pelanggan/hapuspelanggan/$1';
$route['hapus-pelanggan/(:any)/(:num)'] = 'pelanggan/hapuspelanggan/$1/$2';
$route['edit-pelanggan/(:any)'] = 'pelanggan/editpelanggan/$1';
$route['edit-pelanggan/(:any)/(:num)'] = 'pelanggan/editpelanggan/$1/$2';

//kriteria
$route['show-kriteria'] = 'kriteria';
$route['show-kriteria/(:num)'] = 'kriteria/index/$1';
$route['tambah-kriteria'] = 'kriteria/tambahkriteria';
$route['tambah-kriteria/(:any)'] = 'kriteria/tambahkriteria/$1';
$route['hapus-kriteria/(:any)'] = 'kriteria/hapuskriteria/$1';
$route['hapus-kriteria/(:any)/(:num)'] = 'kriteria/hapuskriteria/$1/$2';
$route['edit-kriteria/(:any)'] = 'kriteria/editkriteria/$1';
$route['edit-kriteria/(:any)/(:num)'] = 'kriteria/editkriteria/$1/$2';

//alternatif
$route['show-alternatif'] = 'alternatif';
$route['show-alternatif/(:num)'] = 'alternatif/index/$1';
$route['tambah-alternatif'] = 'alternatif/tambahalternatif';
$route['hapus-alternatif/(:any)'] = 'alternatif/hapusalternatif/$1';
$route['hapus-alternatif/(:any)/(:num)'] = 'alternatif/hapusalternatif/$1/$2';
$route['edit-alternatif/(:any)'] = 'alternatif/editalternatif/$1';
$route['edit-alternatif/(:any)/(:num)'] = 'alternatif/editalternatif/$1/$2';

//pengguna
$route['show-pengguna'] = 'pengguna';
$route['show-pengguna/(:num)'] = 'pengguna/index/$1';
$route['tambah-pengguna'] = 'pengguna/tambahpengguna';
$route['hapus-pengguna/(:any)'] = 'pengguna/hapuspengguna/$1';
$route['hapus-pengguna/(:any)/(:num)'] = 'pengguna/hapuspengguna/$1/$2';
$route['edit-pengguna/(:any)'] = 'pengguna/editpengguna/$1';
$route['edit-pengguna/(:any)/(:num)'] = 'pengguna/editpengguna/$1/$2';

//daerah
$route['show-daerah'] = 'daerah';
$route['show-daerah/(:num)'] = 'daerah/index/$1';
$route['tambah-daerah'] = 'daerah/tambahdaerah';
$route['hapus-daerah/(:any)'] = 'daerah/hapusdaerah/$1';
$route['hapus-daerah/(:any)/(:num)'] = 'daerah/hapusdaerah/$1/$2';
$route['edit-daerah/(:any)'] = 'daerah/editdaerah/$1';
$route['edit-daerah/(:any)/(:num)'] = 'daerah/editdaerah/$1/$2';

//lokasi
$route['show-lokasi'] = 'lokasi';
$route['show-marker'] = 'lokasi/marker';
$route['show-jarak/(:num)'] = 'lokasi/jarak/$1';
$route['show-lokasi/(:num)'] = 'lokasi/index/$1';
$route['tambah-lokasi'] = 'lokasi/tambahlokasi';
$route['hapus-lokasi/(:any)'] = 'lokasi/hapuslokasi/$1';
$route['hapus-lokasi/(:any)/(:num)'] = 'lokasi/hapuslokasi/$1/$2';
$route['edit-lokasi/(:any)'] = 'lokasi/editlokasi/$1';
$route['edit-lokasi/(:any)/(:num)'] = 'lokasi/editlokasi/$1/$2';

//lokasi saya
$route['lokasi-saya'] = 'lokasi_saya';



//prosedur
$route['show-prosedur'] = 'prosedur';
$route['show-prosedur/(:num)'] = 'prosedur/index/$1';
$route['tambah-prosedur'] = 'prosedur/tambahprosedur';
$route['hapus-prosedur/(:any)'] = 'prosedur/hapusprosedur/$1';
$route['hapus-prosedur/(:any)/(:num)'] = 'prosedur/hapusprosedur/$1/$2';
$route['edit-prosedur/(:any)'] = 'prosedur/editprosedur/$1';
$route['edit-prosedur/(:any)/(:num)'] = 'prosedur/editprosedur/$1/$2';

