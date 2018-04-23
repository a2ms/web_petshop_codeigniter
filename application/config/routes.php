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
$route['default_controller'] = 'LoginController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//fitur
$route['login']['POST']='LoginController/Login';
$route['register']['POST']='RegisterController/Register';
$route['aktivasi']['GET']='RegisterController/AktivasiEmail';
$route['logout']['GET']='LoginController/Logout';
$route['getid']['GET']='MyProfileController/GetIdPet';
$route['soldout']['GET']='MyProfileController/SoldOut';
$route['pengguna/inserthewan']['POST']='MyProfileController/InsertHewan';
$route['setdata']['GET']='MyProfileController/SetUpdateData';
$route['pengguna/updatehewan']['POST']='MyProfileController/UpdateHewan';
$route['search']['GET']='SearchController';
//pagination
$route['pet/pagination/(:any)']='SmallPetsController/Pagination';
$route['layout/allpet/(:any)']['GET']='PetsController/AllPet/$1';

//pindah layout
$route['layout/register']['GET']='RegisterController';
$route['layout/login']['GET']='LoginController';
$route['layout/allpet']['GET']='PetsController';
$route['layout/smallpet']['GET']='SmallPetsController';
$route['layout/dogpet']['GET']='DogPetsController';
$route['layout/catpet']['GET']='CatPetsController';
$route['layout/petaccessories']['GET']='PetAccessoriesController';
$route['layout/myprofile']['GET']='MyProfileController';
$route['layout/news']['GET']='NewsController';
$route['layout/news/detail']['GET']='DetailNewsController';

$route['searching']='PetsController/cari';
