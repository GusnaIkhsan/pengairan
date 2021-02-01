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
$route['default_controller'] = 'BerandaController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['admin'] = 'Administrator/index';
$route['beranda'] = 'BerandaController/index';
$route['all-news'] = 'BerandaController/allNews';
$route['all-agenda'] = 'BerandaController/allAgenda';
$route['all-announcement'] = 'BerandaController/allAnnouncement';
$route['search'] = 'BerandaController/allContents';

$route['news-detail'] = 'BerandaController/pageNews';
$route['sarjana'] = 'Sarjana/SarjanaController/index';
$route['magister'] = 'Magister/MagisterController/index';
$route['doktor'] = 'Doktor/DoktorController/index';
$route['content'] = 'Sarjana/SarjanaController/profilContent';

// Profile
// $route['history'] = 'general/PresenterController/showHistory';
// $route['vision-mission'] = 'general/PresenterController/showVisiMisi';
// $route['struktur-organisasi'] = 'general/PresenterController/showStrukturOrganisasi';
// $route['renstra-proker'] = 'general/PresenterController/showRenstraProgramKerja';
$route['profil/(:any)'] = 'general/PresenterController/showProfil/$1';
$route['dosen/(:any)'] = 'general/PresenterController/showDetailDosen/$1';
$route['staff/(:any)'] = 'general/PresenterController/showDetailStaff/$1';

// Dynamic Page
$route['page/detail/(:any)'] = 'general/PresenterController/showDynamicPage/$1';

// Akademik
$route['akademik/(:any)'] = 'general/PresenterController/showAkademik/$1';

// Penelitian dan Pengabdian
$route['penelitian-pengabdian/(:any)'] = 'general/PresenterController/showPenelitianPengabdian/$1';

// Alumni
$route['tracer-study'] = 'general/PresenterController/showTracerStudy';
$route['data-lulusan'] = 'general/PresenterController/showDataLulusan';
$route['forum-alumni'] = 'general/PresenterController/showForumAlumni';

// Fasilitas
$route['fasilitas/(:any)'] = 'general/PresenterController/showFasilitas/$1';

// Jaminan Mutu
$route['jaminan-mutu/(:any)'] = 'general/PresenterController/showJaminanMutu/$1';

// Tentang Kami
$route['critics-suggest'] = 'general/PresenterController/showAddressCriticsSuggestion';


// Dosen - Staff
$route['form/download']['GET'] = 'admin/DosenController/generate_template';
$route['form/upload']['POST'] = 'admin/DosenController/recieve_from_upload_template';
$route['fakultas']['GET'] = 'admin/DosenController/get_fakultas';


$route['dosen'] = 'admin/DosenController/dosen';
$route['tambah-staff'] = 'admin/DosenController/tambah_dosen';
$route['edit-dosen/(:any)'] = 'admin/DosenController/edit_dosen/$1';
$route['delete-dosen/(:any)'] = 'admin/DosenController/delete_dosen/$1';

$route['staff']['GET'] = 'admin/StaffController/staff_pendidik';
$route['tambah-staff'] = 'admin/StaffController/tambah_staff';
$route['edit-staff/(:any)'] = 'admin/StaffController/edit_staff/$1';
$route['delete-staff/(:any)'] = 'admin/StaffController/delete_staff/$1';

// Berita
$route['berita/(:any)'] = 'BeritaController/detail/$1/berita';
$route['tag/(:any)'] = 'general/PresenterController/showNewsByTag/$1';

// Pengumuman
$route['pengumuman/(:any)'] = 'BeritaController/detail/$1/pengumuman';

// Agenda
$route['agenda/(:any)'] = 'BeritaController/detail/$1/agenda';