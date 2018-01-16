<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Views';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['post']  = 'Views/post';
$route['post/(:num)']  = 'Views/post/$1';
