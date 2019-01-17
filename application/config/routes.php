<?php
defined('BASEPATH') OR exit('No direct script access allowed');




$route['logout'] = 'welcome/logout';
$route['inputData'] = 'welcome/inputData';
$route['input_data'] = 'welcome/keInputData';
$route['admin'] = 'welcome/keHalamanAdmin';
$route['login'] = 'welcome/login';
$route['prosesdaftar'] = 'welcome/prosesdaftar';
$route['daftar'] = 'welcome/keHalamanDaftar';
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
